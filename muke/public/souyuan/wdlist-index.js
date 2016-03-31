$(function(){
    $("#main").on( 'click' , '.imgPreview img' , function(){
        $("body").append('<div class="mask" style="display:none;"></div>\
            <div class="bigimg">\
            <i title="关闭" class="close_upLyr"></i>\
            </div>')
        var _url=$(this).attr("src");
        var _bigurl=_url;
        if(_url.indexOf("img.mukewang.com")!=-1||_url.indexOf("img.imooc.com")!=-1){//判断图片是否来自本地服务器
            var _host="http://img.mukewang.com/"
            if(_url.indexOf("img.imooc.com")!=-1){
                _host="http://img.imooc.com/"
            }
            var arr=$(this).attr("src").split(_host)[1].split(".");
            _bigurl=arr[0];
            _bigurl=_bigurl.substring(0,_bigurl.length-8)+"00000000."+arr[1];
            var originimg = _host+_bigurl;//原始图片
        }
        else{
            var arr = $(this).attr('src');
            var originimg = arr;
        }
        var imgnew = new Image();
        imgnew.onload=function(){
            var w1=$(window).width();
            var h1=$(window).height();

            var w2=this.width;
            var h2=this.height;

            var oldw = this.width;
            var oldh = this.height;

            var t1=w1/h1;//屏幕比
            var t2=w2/h2;//图片比

            if(t1>t2){
                if(h2>h1){
                    h2 = parseInt(h1-100);
                    w2 = parseInt(h2*t2);
                }

            }else{
                if(w2>w1){
                    w2 = parseInt(w1-100);
                    h2 = parseInt(w2/t2);
                }

            }
            $('.bigimg').css({'height':h2,'width':w2,'marginLeft':-w2/2,'marginTop':-h2/2});
            setTimeout(function(){
                $('.bigimg').append('<img src="'+originimg+'" class="ylpic" data-size="'+oldw+'|'+oldh+'" style="width:'+w2+'px;height:'+h2+'px"/>')
            },300)
       }

        imgnew.src=originimg;
        $('.mask').show();
        $('.bigimg').show();
    })

    $('body').on('click','.close_upLyr,.mask',function(){
        $('.mask').remove()
        $('.bigimg').remove();
    });
});