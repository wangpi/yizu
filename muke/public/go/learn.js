define(function(require, exports, module){
    require('common');
	require('/static/page/course/common/course_common.js');
	require('/static/page/course/common/course_collection.js');
    var store = require('store');

	$(function(){
		var mid_href = store.get('mid_href');
	    if(mid_href !='' && mid_href != undefined && store.get('uid') == undefined ) {
			$('.learnchapter .video  a').each(function() {
				if($(this).attr('href') == mid_href) {
					$(this).parents('.learnchapter').addClass('learnchapter-active');
					$(this).parents('.video').show();
					$(this).parents('.learnchapter')
						.find('span')
						.removeClass('icon-plus')
						.addClass('icon-sub');
				}
			})
			store.remove('mid_href');
		} else if(store.get('uid') == undefined) {
			//$('.learnchapter h3').eq(0).addClass('learnchapter-active').click();
		}


		/*学习页列表*/
		$('.learnchapter h3').click(function(){
			if ($(this).parent().hasClass('learnchapter-active')) {
				$(this).next('.video').slideUp('fast', function(){ $(this).parent().removeClass('learnchapter-active'); });
				$(this).find('span')
					.removeClass('icon-sub')
					.addClass('icon-plus');
				$(this).find('i').removeClass('hasOpenOn');
		        $(this).find('i').addClass('hasOpen');
			} else {
				$(this).next('.video').slideDown('fast', function(){ $(this).parent().addClass('learnchapter-active'); });
				$(this).find('span')
					.removeClass('icon-plus')
					.addClass('icon-sub');
				$(this).find('i').removeClass('hasOpen');
				$(this).find('i').addClass('hasOpenOn');
			}
		});

		$(".back-btn").on("click",function(event) {
			if(document.referrer&&document.referrer.indexOf("course/list")!=-1){

				window.location=document.referrer
			}else{
				window.location="/course/list"
			}
			return false;
		});

		/*记录播放记录到本地存储*/
		$('.video li').bind('click',function(){
			var mid_href = $(this).find('a').attr('href');
			store.set('mid_href', mid_href);
		})

		$('.mod-chapters').on('click', 'h3, .J-media-item', function(e){
			var $this = $(this);

			// 如果点击的是章
			if(!$this.hasClass('J-media-item')){
				var flag = $this.find('span'),
					chapter = $this.parents('.chapter');

				chapter.toggleClass('chapter-active');

				if(chapter.hasClass('chapter-active')){
					flag.removeClass('icon-plus').addClass('icon-sub');
				}else{
					flag.removeClass('icon-sub').addClass('icon-plus');
				}
			}else{
				// 点击的是节
				// 如果未登录弹出登录框，然后自动跳转到学习详情页
				if(!isLogin){
					seajs.use('login_sns', function(obj){
						obj.init();
					});
					return false;
				}
			}
		});
	
	

	});

    
    //分享点击返回积分事件
    var shareEles = $(".bdsharebuttonbox a");
    var sendId= GC.course.id;
    var ajaxing = 0;
    var timer,interval=5000;

    shareEles.on("click",function(e){
        if(ajaxing) return;
        ajaxing=1;
        //积分框消失
        shareFrame.hide();
        $.ajax({
            type: "post",
            url: '/course/courseshare',
            data: "id="+sendId+"&type="+0,
            success: function(res) {
                ajaxing=0;
            },
            error: function() {
                layer.msg('网络错误，请稍后再试', 1, 1);
            },
            complete: function() {
                isAjax=0;
            }
        });
        e.preventDefault();
    }).mouseenter(function(){
        shareFrame.show();
    }).mouseleave(function(){
        if(timer) clearTimeout(timer);
        timer=setTimeout(function(){
            shareFrame.hide();
        },interval);
        
    });

});

