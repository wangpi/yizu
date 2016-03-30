define(function(require, exports, module) {
	require('/static/lib/jquery/plugin/jquery.easing.min');
	require('/static/lib/jquery/plugin/jquery.lavaTab');
	require('/static/page/index/wdlist-index.js');

	
	var init = require('/static/page/index/index-wendalist.js');

	//
	var suggest = require('/static/component/base/suggest/suggest'),
		urlUtil = require('/static/component/base/util/url'),
		isRequest = false, // 是否正在请求数据
		$resultWrap = null;

	// 异步切换数据
	var hasJs = false;
	function getSearchData(page, currentItem) {
		var resUrl = "",
			_data = {},
			typeName = $(currentItem).data('type');
		isRequest = true;

		switch (typeName) {
			case '课程':
				resUrl = "searchcourse";
				break;
			case '猿问':
				resUrl = "searchwenda";
				break;
			case '文章':
				resUrl = "searcharticle";
				break;
			case '作品':
				resUrl = "searchopus";
				break;
            case 'Wiki':
                resUrl = "searchwiki";
		}

		// 关键词
		_data.words = $('.J-suggest-input').val() || urlUtil.getUrlQuery('words');

		// 改版后，tag参数默认为0，即不区分标签类型
		_data.tag = 0;

		// 页码
		if(page){
			_data.page = page;
		}

		$.ajax({
			url: resUrl,
			type: "get",
			data: _data,
			beforeSend: function(){
				$resultWrap.html('').addClass('loading');
			},
			success: function(res) {
				isRequest = false;
				$resultWrap.removeClass('loading').html(res);
				if(typeName=='猿问'){

					//var r = /bdimg.share.baidu.com/;
					//$('script').each(function( i , n ){
					//	var src = $(n).attr('src');
					//	if(r.test(src)){
					//		$(n).remove();
					//	}
					//});
						init.init();
					window._bd_share_main.init();
					//分享
					//if(!hasJs) {

					//	hasJs = true;
					//}
						//require('/static/page/wenda/wendalist.js');
						//hasJs=true;
						//$(document).ready();

				}
			},
			error: function() {
				isRequest = false;
			}
		})
	}

	$(function() {

		var $searchContainer = $('[data-search="search-page"]'),
			$typeWrap = $('.J-type-list');

		$resultWrap = $('.J-result-list');

		// suggest功能实例化
		new suggest($searchContainer);

		// 类型列表项高亮缓动
		$typeWrap.lavaTab({
			fx: "backout", //缓动类型
			index:(_type&&_type==4)?4:0,
			speed: 700, //缓动时间
			click: function(evt, currentItem, callback) {
				var $currentItem = $(currentItem);
				if (isRequest || $currentItem.hasClass('selected')) {
					return;
				}
				callback && callback(currentItem);
				getSearchData(null, currentItem);
			}
		});

		// 翻页处理
		$resultWrap.on("click", ".js-page a", function(evt){
			if (isRequest) {
				return;
			}
			var currentItem = $typeWrap.find('li.selected')[0];
			$(this).addClass('active').siblings().removeClass('active');
			getSearchData($(this).data('page'), currentItem);
			evt.stopPropagation();
		});
	});

	with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion=' + (new Date() / 36e5)];

});