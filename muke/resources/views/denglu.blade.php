<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>慕课网-登录</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375">
    <meta property="wb:webmaster" content="c4f857219bfae3cb">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta name="keywords" content="慕课网，慕课官网，MOOC，移动开发，IT技能培训，免费编程视频，php开发教程，web前端开发，在线编程学习，html5视频教程，css教程，ios开发培训，安卓开发教程">
    <meta name="description" content="慕课网（IMOOC）是学习编程最简单的免费平台。慕课网提供了丰富的移动端开发、php开发、web前端、html5教程以及css3视频教程等课程资源。它富有交互性及趣味性，并且你可以和朋友一起编程。">

    <link rel="stylesheet" href="login_files/base.css" type="text/css">
    <link rel="stylesheet" href="login_files/common-less.css" type="text/css">
    <script src="login_files/push.js"></script><script src="login_files/rt.js" async="" type="text/javascript"></script><script type="text/javascript">

        var OP_CONFIG={"module":"user","page":"newlogin"};
        var isLogin = 0;
        var is_choice = "";
        var seajsTimestamp="v=201603251711";

    </script>

    <link rel="stylesheet" href="login_files/loginsign-less.css">
    <script type="text/javascript">
        var fromURL="";
    </script>

    <script src="login_files/jquery.js" async="" charset="utf-8"></script><script src="login_files/seajs-text.js" async="" charset="utf-8"></script><script src="login_files/common.js" async="" charset="utf-8"></script><script src="login_files/string.js" async="" charset="utf-8"></script><script src="login_files/suggest.js" async="" charset="utf-8"></script><script src="login_files/store.js" async="" charset="utf-8"></script><script src="login_files/json.js" async="" charset="utf-8"></script><script src="login_files/im.js" async="" charset="utf-8"></script><script src="login_files/newlogin.js" async="" charset="utf-8"></script><script src="login_files/socket.js" async="" charset="utf-8"></script><script src="login_files/placeholder.js" async="" charset="utf-8"></script><script src="login_files/autocomplete.js" async="" charset="utf-8"></script><script src="login_files/modal.js" async="" charset="utf-8"></script><script src="login_files/validate.js" async="" charset="utf-8"></script></head>
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
                        <h1 class="form-h1 l">欢迎登录</h1>
                        <a href="register" class="on-register r">立即注册</a>
                        <span class="no-account r">没有帐号？</span>
                    </div>
                    <div class="form-controls">
                        <form class="valid-form" id="js-login-form" autocomplete="off">
                            <div class="form-control">
                                <p id="js-g-error" class="tips login-g-error"></p>
                            </div>
                            <div class="form-control">
                                <input id="email" class="ipt ipt-email" data-validate="email" autocomplete="off" placeholder="请输入昵称" type="text"><span id='email_sp'></span>
                                <p class="tips"></p>
                                <input style="display:none" type="text"> <!-- hack:to void chrome autocomplete -->
                            </div>
                            <div class="form-control">
                                <input id="pwd" class="ipt ipt-pwd" autocomplete="off" placeholder="请输入登录密码" type="password">
                                <span class='rlf-tip-wrap rlf-tip-error' id='pwd_sp'></span>
                                <p class="tips"></p>
                            </div>
                            <div class="form-control clearfix" id="js-login-verify" style="display: none">
                                <input name="verify" class="ipt ipt-verify l" placeholder="请输入验证码" type="text">
                                <a href="javascript:void(0)" class="verify-img-wrap js-verify-refresh"><img src="login_files/verifycode.png" class="verify-img"></a>
                                <a href="javascript:void(0)" class="icon-refresh js-verify-refresh"></a>
                                <p class="tips"></p>
                            </div>
                            <div class="form-control link-control clearfix">
                                <label for="autologin" class="l form-autoin"><input checked="checked" class="checkbox" name="autologin" id="autologin" type="checkbox">下次自动登录</label>
                                <a href="forgot" class="forget-pwd r">忘记密码</a>
                            </div>
                            <div class="form-control clearfix">
                                <input id="signin-btn" data-fromurl="" class="btn btn-red login-submit btn-block r" value="登录" type="button">
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
        </div>
        <!-- <div class="wrap-right l">
            <div class="login-sns-wrap">
                <h1 class="form-h1">
                    一键授权，快速登录
                </h1>
                <div class="login-sns">
                    <a href="javascript:void(0)" hidefocus="true" data-sns="/user/loginweixin" class="sns-weixin"><i class="icon-weixin"></i>微信帐号直接登录</a>
                    <a href="javascript:void(0)" hidefocus="true" data-sns="/user/loginqq" class="sns-qq"><i class="icon-qq"></i>QQ  帐号直接登录</a>
                    <a href="javascript:void(0)" hidefocus="true" data-sns="/user/loginweibo" class="sns-weibo"><i class="icon-weibo"></i>新浪微博帐号登录</a>
                </div>
            </div>
        </div> -->
    </div>
</div>



<div class="vright">© 2014 imooc.com All Rights Reserved  京ICP备 13046642号</div>



<!--script-->
<script src="login_files/ssologin.js"></script>
<script type="text/javascript" src="login_files/sea.js"></script>
<script type="text/javascript" src="login_files/sea_config.js"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>





<div style="display: none">
    <script type="text/javascript">
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0cfcccd7b1393990c78efdeebff3968' type='text/javascript'%3E%3C/script%3E"));
        (function (d) {
            window.bd_cpro_rtid="rHT4P1c";
            var s = d.createElement("script");s.type = "text/javascript";s.async = true;s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
            var s0 = d.getElementsByTagName("script")[0];s0.parentNode.insertBefore(s, s0);
        })(document);
    </script><script src="login_files/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f0cfcccd7b1393990c78efdeebff3968" target="_blank"><img src="login_files/21.gif" height="20" border="0" width="20"></a>
    <script>
        (function(){
            var bp = document.createElement('script');
            bp.src = '//push.zhanzhang.baidu.com/push.js';
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
</div>


<script src="login_files/user.htm" type="text/javascript"></script><script src="login_files/iplookup.php" type="text/javascript"></script></body></html>

<script src="js/jquery.1.8.min.js"></script>
<script>
    $(document).on("blur","#email",function(){
        var name=$("#email").val();
        if(name==""){
            $("#email_sp").html('<font style="color:red">用户名不能为空哦！</font>');
        }else{
            $("#email_sp").html('√');
        }
    });
    $(document).on("blur","#pwd",function(){
        var pwd=$("#pwd").val();
        if(pwd==""){
            $("#pwd_sp").html("<font style='color:red'>密码不能为空哦！</font>");
        }else{
            $("#pwd_sp").html(" ");
        }
    })
    $(document).on("click","#signin-btn",function(){
        var name=$("#email").val();
        var pwd=$("#pwd").val();
        if(name==""){
            $("#email_sp").html('<font style="color:red">用户名不能为空哦！</font>');
        }else{
            $("#email_sp").html('√');
        }
        $.ajax({
            url:'login',
            type:'post',
            data:'name='+name+'&pwd='+pwd,
            success:function(txt){
                if(txt==1){
                    $("#pwd_sp").html("√");
                    window.location.href='learn'
                }else if(txt==0){
                    $("#pwd_sp").html("<font style='color:red'>用户名或密码错误!</font>");
                }else if(txt==2){
                    $("#email_sp").html('<font style="color:red">用户名不存在！</font>');
                }else{
                    alert(txt);
                }
            }
        })
    })
</script>