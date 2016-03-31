define(function(require, exports, module){
    require('common');
    require('./u_common.js');
    
    //hover 悬停
    $('.js-course-list')
    .on( 'click' , '.follow' , function(e){
        e.preventDefault();
        if(!isLogin){
            $('#js-signin-btn').click();
            return;
        }
        //.icon-heart 未关注
        //.icon-heart-revert 已经关注
        var $this = $(this);
        var quesId = $this.attr('data-ques-id');
        var len = $this.find('.icon-heart').length;

        var parentEle=$this.closest('.course-one')
        var courseId = parentEle.data('courseid');//获取笔记id
        var uid = parentEle.data('uid'); //uid

        /*var typeJudge='';
        if( len == 0 ){
            表示当前已经关注,将要取消
            typeJudge="DELETE";
        }else{
            typeJudge="post";
        }*/
        $.ajax({
            url: '/u/'+uid+'/course/'+courseId,
            type: "post",
            dataType:"json",
            data:'',
            success:function(data){
                //console.log( data );
                if(data.result==0){
                    if( len == 0){
                        $this.find('i').attr('class', 'icon-heart');
                        $this.attr('title','关注');
                    }else{
                        $this.find('i').attr('class', 'icon-heart-revert');
                        $this.attr('title','取消关注');
                    }
                    location.reload();
                }
            }
        })

    })
    .on('click','.del',function(e){
        e.preventDefault();
        if(!isLogin){
            $('#js-signin-btn').click();
            return;
        }
        var $this=$(this);
        var outWrap=$this.closest('.tl-item');

        var liLen=$this.closest('.course-list').find("li").length;
        var parentEle = $this.closest('.course-one');
        var courseId = parentEle.data('courseid');//获取课程id
        var uid = parentEle.data('uid'); //uid

        $.ajax({
            url: '/u/'+uid+'/course/'+courseId,
            type: 'DELETE',
            dataType:"json",
            data:'',
            success:function(data){
                if(data.result==0){
                    if(liLen==1){
                        outWrap.remove();
                    }else{
                        parentEle.remove();
                    }
                    if($('.js-course-list').find('.tl-item').length > 0){
                        location.reload();
                    }else{
                        window.location.href = $('#js-columbd').find('a').eq(0).attr('href');
                    }
                }
            }
        })

    })


    //点击全部
    $("#js-columall").on('click',function(e){
        e.stopPropagation();
        var jsicon=$(this).find(".icon"),
            jscolumbd=$(this).siblings("#js-columbd");
        //jscolumbd.css("marginLeft",-(jscolumbd.width())/2);

        if(jsicon.hasClass("icon-drop_down")){
            jscolumbd.show();
            jsicon.removeClass("icon-drop_down").addClass("icon-drop_up");
        }else{
            jscolumbd.hide();
            jsicon.removeClass("icon-drop_up").addClass("icon-drop_down");
        }
    })
    //点击全部弹层以外消失弹层
    $(document).mouseup(function(e){
        var _con=$("#js-columbd");
        if(!_con.is(e.target)&&_con.has(e.target).length==0){
            $("#js-columbd").hide();
            $("#js-columall").find(".icon").removeClass("icon-drop_up").addClass("icon-drop_down")
        }
    });

    $('.js-course-list .share-box .show-btn,.js-course-list .share-box .share-box-con')
        .on('mouseenter',function(){
            var $this = $(this);
            var $root = $this.parent();
            if( $root.hasClass('hover') ){
                return;
            }else{
                $root.addClass('hover');
            }
        })
        .on('mouseleave',function( e ){
            e.stopPropagation();
            var $this = $(this);
            var $root = $this.parent();
            if( $root.hasClass('hover') ){
                $root.removeClass('hover');
            }
        });

    //分享
    with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
    //分享点击返回积分事件
        var shareEles = $(".bdsharebuttonbox a");
        var ajaxing = 0;
        var timer,interval=5000;
        shareEles.on("click",function(e){
            if(ajaxing) return;
            var sendId=$(this).parents(".bdsharebuttonbox").attr("data-id");//计划的Id
            ajaxing=1;
            $.ajax({
                type: "post",
                url: '/course/courseshare',
                data: "id="+sendId+"&type="+1,
                success: function(res) {
                    console.log(res)
                    ajaxing=0;
                },
                error: function() {
                    layer.msg('网络错误，请稍后再试', 1, 1);
                },
                complete: function() {
                    ajaxing=0;
                }
            });
            e.preventDefault();
        })//分享积分 end


    /*
    学习页下的分享
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
     */
  
})