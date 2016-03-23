<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>慕课网-忘记密码</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375">
    <meta property="wb:webmaster" content="c4f857219bfae3cb">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta name="keywords" content="慕课网，慕课官网，MOOC，移动开发，IT技能培训，免费编程视频，php开发教程，web前端开发，在线编程学习，html5视频教程，css教程，ios开发培训，安卓开发教程">
    <meta name="description" content="慕课网（IMOOC）是学习编程最简单的免费平台。慕课网提供了丰富的移动端开发、php开发、web前端、html5教程以及css3视频教程等课程资源。它富有交互性及趣味性，并且你可以和朋友一起编程。">

    <link rel="stylesheet" href="forget/base.css" type="text/css">
    <link rel="stylesheet" href="forget/common-less.css" type="text/css">
    <script src="forget/push.js"></script><script src="forget/rt.js" async="" type="text/javascript"></script><script type="text/javascript">

        var OP_CONFIG={"module":"user","page":"newforgot"};
        var isLogin = 0;
        var is_choice = "";
        var seajsTimestamp="v=201603221646";
        var ownName="1749537612@qq.com"

    </script>

    <link rel="stylesheet" href="forget/loginsign-less.css">
    <link rel="stylesheet" href="forget/autocomplete-less.css">
    <link rel="stylesheet" href="forget/settings.css">

    <script src="forget/jquery.js" async="" charset="utf-8"></script><script src="forget/seajs-text.js" async="" charset="utf-8"></script><script src="forget/common.js" async="" charset="utf-8"></script><script src="forget/string.js" async="" charset="utf-8"></script><script src="forget/suggest.js" async="" charset="utf-8"></script><script src="forget/store.js" async="" charset="utf-8"></script><script src="forget/json.js" async="" charset="utf-8"></script><script src="forget/im.js" async="" charset="utf-8"></script><script src="forget/newforgot.js" async="" charset="utf-8"></script><script src="forget/socket.js" async="" charset="utf-8"></script><script src="forget/placeholder.js" async="" charset="utf-8"></script><script src="forget/modal.js" async="" charset="utf-8"></script><script src="forget/validate.js" async="" charset="utf-8"></script></head>
<body>

<div id="head" class="sig-head">
    <a href="http://www.imooc.com/" target="_self" class="sig-img">慕课网</a>
</div>


<div id="main">

    <div class="wcontainer">
        <div class="wwrap">
            <div class="page-forgotpwd">
                <div class="page-forgotpwd-wrap">
                    <div style="display: none;" class="js-forgotpwd-form-wrap">
                        <div class="fgtpaw-wrap">
                            <h2>忘记密码</h2>
                        </div>
                        <div class="link-info">
                            <h3>通过注册邮箱链接重设密码</h3>
                            <a class="right-back" href="learn"> 返回立即登录</a>
                        </div>

                        <form id="js-forgot-form">
                            <p class="tips tips-error" id="js-g-forgot-error">发送成功</p>
                            <div class="form-control">
                                <input value="1749537612@qq.com" name="email" data-validate="email" class="ipt ipt-email" placeholder="请输入登录邮箱" type="text">
                                <p class="tips"></p>
                            </div>
                            <div class="form-control form-control-verify">
                                <input id="verify-ipt" name="verify" maxlength="4" class="ipt" placeholder="请输入验证码" type="text">
                                <img class="verify-img js-change-verify-code" src="forget/getcode.png" alt="验证码" title="验证码">
                                <a href="javascript:void(0)" class="icon-refresh js-change-verify-code"></a>
                                <p class="tips"></p>
                            </div>
                            <div>
                                <a href="javascript:void(0);" id="js-forgot-submit" class="btn btn-red link-btn btn-block">提交</a>
                            </div>
                            <div class="faq-link">
                                收不到邮件？查看 <a href="question" target="_blank">常见问题</a>
                            </div>
                        </form>
                    </div>
                    <div style="display: block;" class="js-forgot-result forgot-send-result">
                        <i></i>
                        <p class="js-email-add">密码重设连接邮件已发送到您的邮箱<br><a href="http://mail.qq.com/" target="_blank">查看邮件&gt;&gt;</a></p>
                        <p class="get-info">请注意查收并重新设置密码</p>
                        <a href="learn" class="btn btn-red link-btn back-regir">返回登录</a>
                        <p class="get-info" style="padding-top:20px">收不到邮件？查看
                            <a href="question1" target="_blank" style="color: #f00000 !important"> 常见问题</a></p>
                        <!-- <p>
                        密码重设连接邮件已发送到您的邮箱<em></em><br/>
                        请注意查收并重新设置密码
                        </p>
                        <a href="/user/newlogin"  class="btn btn-green link-btn btn-block">返回登录</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="vright">© 2014 imooc.com All Rights Reserved  京ICP备 13046642号</div>



<!--script-->
<script src="forget/ssologin.js"></script>
<script type="text/javascript" src="forget/sea.js"></script>
<script type="text/javascript" src="forget/sea_config.js"></script>
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
    </script><script src="forget/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f0cfcccd7b1393990c78efdeebff3968" target="_blank"><img src="forget/21.gif" height="20" border="0" width="20"></a>
    <script>
        (function(){
            var bp = document.createElement('script');
            bp.src = '//push.zhanzhang.baidu.com/push.js';
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
</div><script src="forget/user.htm" type="text/javascript"></script><script src="forget/iplookup.php" type="text/javascript"></script>


</body></html>