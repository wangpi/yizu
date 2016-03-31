define(function(require, exports, module){
    require('common');
    require('./u_common.js');
    
    /**
     * 我的文章
     */
    
    $('#articleMain').on('click', '.js-article-del', function(){
        $(this).hide().next(".js-confirm").show()
    }).on("click",".js-btn-cancel",function(){
        $(this).closest('.js-confirm').hide().prev(".js-article-del").show()
    }).on("click",".js-btn-del",function(){
        var obj=$(this)
        var id=obj.closest("ul").data("id")
        $.ajax({
            url: '/article/ajaxdel/id/'+id,
            dataType: 'json',
            success:function(res){
                if(res.result==0){
                    obj.closest('.article-item').animate({height:"0px"},function(){
                        $(this).remove();
                        window.location.reload();
                        
                        if($("#articlesList li").length==0){
                            $(".plans-main").append('<p class="notattend">你还没有任何原创文章，可以先<a href="/article">去看看文章</a></p>')
                        }
                    });
                }else{
                    obj.closest("ul").find('.js-del-msg').html(res.msg)
                }
            },
            error:function(){
                obj.closest("ul").find('.js-del-msg').html("网络错误，请稍后再试")
            }
        })
        
    })
})