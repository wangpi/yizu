<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>慕课网-注册</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375">
    <meta property="wb:webmaster" content="c4f857219bfae3cb">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta name="keywords" content="慕课网，慕课官网，MOOC，移动开发，IT技能培训，免费编程视频，php开发教程，web前端开发，在线编程学习，html5视频教程，css教程，ios开发培训，安卓开发教程">
    <meta name="description" content="慕课网（IMOOC）是学习编程最简单的免费平台。慕课网提供了丰富的移动端开发、php开发、web前端、html5教程以及css3视频教程等课程资源。它富有交互性及趣味性，并且你可以和朋友一起编程。">

    <link rel="stylesheet" href="./zhuce/base.css" type="text/css">
    <link rel="stylesheet" href="./zhuce/common-less.css" type="text/css">
    <script src="./zhuce/push.js"></script><script src="./zhuce/rt.js" async="" type="text/javascript"></script><script type="text/javascript">

        var OP_CONFIG={"module":"user","page":"newsignup"};
        var isLogin = 0;
        var is_choice = "";
        var seajsTimestamp="v=201603231646";
        var ownName="1749537612@qq.com"

    </script>

    <link rel="stylesheet" href="./zhuce/loginsign-less.css">
    <script>
        var fromURL='';
    </script>

    <script src="./zhuce/jquery.js" async="" charset="utf-8"></script><script src="./zhuce/seajs-text.js" async="" charset="utf-8"></script><script src="./zhuce/common.js" async="" charset="utf-8"></script><script src="./zhuce/string.js" async="" charset="utf-8"></script><script src="./zhuce/suggest.js" async="" charset="utf-8"></script><script src="./zhuce/store.js" async="" charset="utf-8"></script><script src="./zhuce/json.js" async="" charset="utf-8"></script><script src="./zhuce/im.js" async="" charset="utf-8"></script><script src="./zhuce/newsignup.js" async="" charset="utf-8"></script><script src="./zhuce/newlogin.js" async="" charset="utf-8"></script><script src="./zhuce/socket.js" async="" charset="utf-8"></script><script src="./zhuce/placeholder.js" async="" charset="utf-8"></script><script src="./zhuce/autocomplete.js" async="" charset="utf-8"></script><script src="./zhuce/modal.js" async="" charset="utf-8"></script><script src="./zhuce/validate.js" async="" charset="utf-8"></script></head>
<body>

<div id="head" class="sig-head">
    <a href="http://www.imooc.com/" target="_self" class="sig-img">慕课网</a>
</div>


<div id="main">

    <div class="container">
        <div class="wrap clearfix">
            <div class="wrap-left">
                <div class="login-wrap">
                    <div class="wel-hd">
                        <h1 class="form-h1 l">欢迎注册</h1>
                        <a href="denglu" class="on-register r">直接登录</a>
                        <span class="no-account r">已有帐号</span>
                    </div>
                    <div class="form-controls">
                        <form class="valid-form" id="js-signup-form" autocomplete="off">
                            <div class="form-control">
                                <p id="js-g-signup-error" class="tips login-g-error"></p>
                            </div>
                            <div class="form-control proclaim-loc">
                                <input id="email" data-validate="email" autocomplete="off" class="ipt ipt-email" placeholder="请输入电子邮箱地址" type="text">
                                <p class="tips"></p>
                                <span id="email_sp"></span>
                            </div>
                            <div class="form-control proclaim-loc js-proclaim-on">
                                <input id="pwd" data-validate="password" class="ipt ipt-pwd js-pass-pwd" placeholder="6-16位密码，区分大小写，不能用空格" type="password">
                                <span id="pwd_sp"></span>
                                <p class="tips"></p>
                            </div>
                            <div class="form-control">
                                <input id="nick" data-validate="nick" class="ipt ipt-nick" placeholder="昵称为2-18位，中英文、数字及下划线" type="text">
                                <span id="nick_sp"></span>
                                <p class="tips"></p>
                            </div>
                            <div class="form-control clearfix">
                                <input id="yzm" class="ipt ipt-verify l" placeholder="请输入验证码" type="text">

                                <a onclick="javascript:re_captcha();" >
                                    <img src="{{ URL('hello/captcha/1') }}"  alt="验证码" title="刷新图片" width="100" height="40" id="c2c98f0de5a04167a9e427d883690ff6" border="1"></a>
                                <p class="tips"></p><span id="yzm_sp"></span>
                            </div>
                            <div class="form-control login-tspace clearfix">
                                <input id="js-signup-submit" class="btn btn-red login-submit" value="注册" type="button">
                            </div>
                        </form>
                    </div>

                    <div id="js-login-sns-wap" class="login-sns-wrap clearfix">
                        <span class="l">其他方式登录</span>
                        <a href="javascript:void(0)" hidefocus="true" data-sns="/passport/user/tplogin?tp=weibo" class="pop-sns-weibo r"><i class="icon-weibo"></i></a>
                        <a href="javascript:void(0)" hidefocus="true" data-sns="/passport/user/tplogin?tp=qq" class="pop-sns-qq r"><i class="icon-qq"></i></a>
                        <a href="javascript:void(0)" hidefocus="true" data-sns="/passport/user/tplogin?tp=weixin" class="pop-sns-weixin r"><i class="icon-weixin"></i></a>
                    </div>

                </div>
            </div>
            <script src="./js/jquery.1.8.min.js"></script>
            <!-- <div class="wrap-right l">
                <div id="js-login-sns-wap" class="login-sns-wrap">
                    <h1 class="form-h1">
                        一键授权，快速登录
                    </h1>
                    <div class="login-sns">
                        <a href="javascript:void(0)" hidefocus="true" data-sns="/user/loginweixin" class="sns-weixin"><i class="icon-weixin"></i>微信帐号直接登录</a>
                        <a href="javascript:void(0)" hidefocus="true" data-sns="/user/loginqq" class="sns-qq"><i class="icon-qq"></i>QQ  帐号直接登录</a>
                        <a href="javascript:void(0)" hidefocus="true" data-sns="/user/loginweibo" class="sns-weibo"><i class="icon-weibo"></i>新浪微博帐号登录</a>
                    </div>
                    <p class="login-addon">我已注册，现在<a href="/user/newlogin/from_url/"> 立即登录</a></p>
                </div>
            </div> -->
        </div>
    </div>

</div>

<div class="vright">© 2014 imooc.com All Rights Reserved  京ICP备 13046642号</div>



<!--script-->
<script src="./zhuce/ssologin.js"></script>
<script type="text/javascript" src="./zhuce/sea.js"></script>
<script type="text/javascript" src="./zhuce/sea_config.js"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>

<script type="text/javascript">
    seajs.use("/static/page/user/newlogin.js");
</script>
<script>
    function re_captcha() {
        $url = "{{ URL('hello/captcha') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
    }
</script>

<script>
    $("#nick").blur(function(){
        if(nick==""){
            $("#nick_sp").html("<font style='color:red'>昵称不能为空！</font>");
            return false;
        }else{
            $("#nick_sp").html(" ");
            return true;
        }
    })
    $("#yzm").blur(function(){
        var yzm=$("#yzm").val();
        if(yzm==""){
            $("#yzm_sp").html("<font style='color:red'>验证码不能为空！</font>");
            return false;
        }else{
            $("#yzm_sp").html(" ");
            $.post('zhu',{
                'yzm':yzm
            },function (txt){
                if(txt==2){
                    $("#yzm_sp").html("<font style='color:red'>验证码错误！</font>");
                }
            })
            return true;
        }
    })
    $("#email").blur(function(){
        var email=$("#email").val();
        if(email==""){
            $("#email_sp").html(" ");
            return true;
        }else{
            var reg=/^\w+@\w+(\.)\w+$/;
            if(reg.test(email)){
                //将邮箱传到前台，判断是否已经注册过
                $.get('register1',{
                    'email':email
                },function(txt){
                    if(txt==1){
                        $("#email_sp").html(" ");
                        return true;
                    }else if(txt==0){
                        $("#email_sp").html("<font style='color:red'>已注册！！</font>");
                        return false;
                    }
                })
            }else{
                $("#email_sp").html("<font style='color:red'>邮箱格式不对</font>");
                return false;
            }
        }
    });
    $("#pwd").blur(function(){
        //计算密码的长度
        var pwd=$("#pwd").val();
        pwd.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
        if(pwd.length>16 || pwd.length<6 ){
            $("#pwd_sp").html("<font style='color:red'>请输入6-16位密码，区分大小写，不能使用空格！</font>");
            $("#pwd").keyup(function(){
                var pw=$("#pwd").val();
                if(pw.length==0){
                    $("#pwd_sp").html("<font style='color:red'>密码不能为空！</font>");
                }else if(pw.length<6){
                    $("#pwd_sp").html("<font style='color:red'>请输入6-16位密码，区分大小写，不能使用空格！</font>");
                }else{
                    $("#pwd_sp").html(" ");
                }
            })
        }
    });
    $("#js-signup-submit").click(function(){
        var email=$("#email").val();
        var pwd=$("#pwd").val();
        var nick=$("#nick").val();
        var yzm=$("#yzm").val();
        if(email==""){
            $("#email_sp").html("<font style='color:red'>邮箱不能为空！</font>");
            return false;
        }
        if(pwd==""){
            $("#pwd_sp").html("<font style='color:red'>密码不能为空！</font>");
            return false;
        }
        if(nick==""){
            $("#nick_sp").html("<font style='color:red'>昵称不能为空！</font>");
            return false;
        }
        if(yzm==""){
            $("#yzm_sp").html("<font style='color:red'>验证码不能为空！</font>");
            return false;
        }
        $.post('zhu',{
            'email':email,
            'nick':nick,
            'pwd':pwd,
            'yzm':yzm
        },function(txt){
            if(txt==1){
                alert('注册成功');
                window.location.href='denglu';
            }else if(txt==0){
                alert('注册失败');
                window.location.href='learn';
            }else if(txt==2){
                alert('验证码有误');
                window.history.go(0);
            }
        })
    })
</script>



<div style="display: none">
    <script type="text/javascript">
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0cfcccd7b1393990c78efdeebff3968' type='text/javascript'%3E%3C/script%3E"));
        (function (d) {
            window.bd_cpro_rtid="rHT4P1c";
            var s = d.createElement("script");s.type = "text/javascript";s.async = true;s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
            var s0 = d.getElementsByTagName("script")[0];s0.parentNode.insertBefore(s, s0);
        })(document);
    </script><script src="./zhuce/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f0cfcccd7b1393990c78efdeebff3968" target="_blank"><img src="./zhuce/21.gif" height="20" border="0" width="20"></a>
    <script>
        (function(){
            var bp = document.createElement('script');
            bp.src = '//push.zhanzhang.baidu.com/push.js';
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
</div><script src="./zhuce/user.htm" type="text/javascript"></script><script src="./zhuce/iplookup.php" type="text/javascript"></script>


</body></html>