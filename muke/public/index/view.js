//define('/static/page/course/view', ['jwplayer','player','common'],function(require, exports, module){
define(function(require, exports, module) {
    require('common');
    require('/static/page/course/common/course_common.js');
    require('/static/page/course/common/course_collection.js');

    function signup() {
        var _this = $(this);
        $.ajax({
            type: "POST",
            url: "/course/applycourse",
            data: "id=" + GC.course.id,
            success: function(data) {
                if (data.result == 1) {
                    $('#J_ApplyNum').text(data.data.total + '人');
                    if (_this.hasClass('not-start')) {
                        _this.replaceWith('<a href="javascript:;" class="disabled btn btn-large btn-block">未开始</a>');
                        //$('#J_Apply').text('未开始');
                    } else {
                        $('#J_Apply').text('开始学习').attr('href', data.data.listurl);
                    }
                    //alert('报名成功');
                } else {
                    alert(data.data.msg);
                }
            }
        });

    }

    function initPlayer() {
        if (GC.course.video_url) {
        	var mask = $('<div class="pop-overlay"/>').appendTo('body');

            $('#js-course-img').hide();
            $('#js-video-wrap').show()
            	.find('.pop-close')
            	.on('click', function(e){
            		$('#js-video-wrap').hide();
            		mask.remove();
            	})
            require.async('player', function(player) {
                player.init(600, 340, GC.course.video_url, "js-video");
            });
        }
    }

    $('#J_Apply').on('click', signup);
    $('#js-video-trigger').on('click', initPlayer);

    $(".back-btn").on("click", function(event) {
        if (document.referrer && document.referrer.indexOf("course/list") != -1) {

            window.location = document.referrer
        } else {
            window.location = "/course/list"
        }
        return false;
    });

    $(document).on('click', '.js-comp-tab-item', function(e){
    	var pannel = $(this).data('pannel'),
    		pannels = $('.js-comp-tab-pannel');

    	$('.js-comp-tab-item').removeClass('on');

    	$(this).addClass('on');

    	pannels.hide().filter(function(){
    		return $(this).data('pannel') == pannel;
    	}).show();

    	return false;
    });
    //页面加载5秒后分享提示消失
    shareFrame=$(".js-share-statue");
    setTimeout(function(){shareFrame.hide();},5000);
    
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
            data: "id="+sendId+"&type="+1,
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

    //view页当点击评价人数时，页面滚动到评价列表处
    $('.score-info .person-num').on('click',function( e ){
        e.preventDefault();
        $('html,body').animate({scrollTop:$('.evaluation-list').offset().top+'px'});
    });

});
