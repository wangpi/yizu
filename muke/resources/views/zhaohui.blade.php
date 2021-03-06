<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>慕课网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375">
    <meta property="wb:webmaster" content="c4f857219bfae3cb">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta name="keywords" content="慕课网，慕课官网，MOOC，移动开发，IT技能培训，免费编程视频，php开发教程，web前端开发，在线编程学习，html5视频教程，css教程，ios开发培训，安卓开发教程">
    <meta name="description" content="慕课网（IMOOC）是学习编程最简单的免费平台。慕课网提供了丰富的移动端开发、php开发、web前端、html5教程以及css3视频教程等课程资源。它富有交互性及趣味性，并且你可以和朋友一起编程。">

    <link rel="stylesheet" href="./zhaohui/base.css" type="text/css">
    <link rel="stylesheet" href="./zhaohui/common-less.css" type="text/css">
    <script src="./zhaohui/push.js"></script><script src="./zhaohui/rt.js" async="" type="text/javascript"></script><script type="text/javascript">

        var OP_CONFIG={"module":"user","page":"resetpasspage"};
        var isLogin = 0;
        var is_choice = "";
        var seajsTimestamp="v=201603221646";
        var ownName="1749537612@qq.com"

    </script>

    <link rel="stylesheet" href="./zhaohui/login-regist.css">
    <link rel="stylesheet" href="./zhaohui/settings.css">

    <script src="./zhaohui/jquery.js" async="" charset="utf-8"></script><script src="./zhaohui/seajs-text.js" async="" charset="utf-8"></script><script src="./zhaohui/common.js" async="" charset="utf-8"></script><script src="./zhaohui/string.js" async="" charset="utf-8"></script><script src="././suggest.js" async="" charset="utf-8"></script><script src="./zhaohui/store.js" async="" charset="utf-8"></script><script src="./zhaohui/json.js" async="" charset="utf-8"></script><script src="./zhaohui/im.js" async="" charset="utf-8"></script><script src="./zhaohui/resetpasspage.js" async="" charset="utf-8"></script><script src="./zhaohui/socket.js" async="" charset="utf-8"></script><script src="./zhaohui/placeholder.js" async="" charset="utf-8"></script><script src="./zhaohui/validate.js" async="" charset="utf-8"></script></head>
<body>
<div id="main">

    <div class="wcontainer">
        <div class="wwrap wrap-boxes">
            <div class="pwd-reset-box">
                <div class="wel-hd">
                    <h1 class="form-h1">重设密码</h1>
                    <h2 class="user-email">帐号：<span>{{$email}}</span></h2>
                </div>
                <form action="/user/resetpassword" method="post" id="pagePwReset">
                    <div class="wlfg-box">
                        <div class="rlf-group">
                            <input data-validate="password" name="newpass" id="newpass" class="ipt rlf-input-pwd" placeholder="请输入新密码" type="password"><!-- 请输入6-16位密码，区分大小写，不能使用空格！ -->
                            <span id="newpass_sp"></span>
                            <p class="rlf-tip-wrap"></p>
                        </div>
                    </div>
                    <div class="wlfg-box">
                        <div class="rlf-group">
                            <input name="confirm" id="confirm" class="ipt rlf-input-pwd" placeholder="请确认新密码" type="password">
                            <p class="rlf-tip-wrap"></p>
                            <span id="confirm_sp"></span><!-- 请输入确认密码！ -->
                        </div>
                    </div>
                    <div class="wlfg-box">
                        <label class="label-name" for=""></label>
                        <div class="rlf-group">
                            <span id="reset-submit" hidefocus="true" data-dismiss="modal" aria-role="button" class="btn-red btn-block">提交</span>
                        </div>
                    </div>
                    <input type="hidden" value="{{$email}}" id="email">
                    <input id="hideVal" class="hideVal" name="active" value="MTc0OTUzNzYxMkBxcS5jb20sMTQ1ODY4ODY2MQ==" type="hidden">
                    <input id="hideVal" class="hideVal" name="linkid" value="1126585" type="hidden">
                    <input id="hideVal" class="hideVal" name="checkstr" value="MTQ1ODY4ODY2MTMwNTc3MTBhZWphYnY=" type="hidden">
                </form>
            </div>
        </div>
    </div>


</div>

<div class="vright">© 2014 imooc.com All Rights Reserved  京ICP备 13046642号</div>



<!--script-->
<script src="./ssologin.js"></script>
<script type="text/javascript" src="./sea.js"></script>
<script type="text/javascript" src="./sea_config.js"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>



<script type="text/javascript" src="./forget.js"></script>


<div style="display: none">

    <script type="text/javascript">
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0cfcccd7b1393990c78efdeebff3968' type='text/javascript'%3E%3C/script%3E"));
        (function (d) {
            window.bd_cpro_rtid="rHT4P1c";
            var s = d.createElement("script");s.type = "text/javascript";s.async = true;s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
            var s0 = d.getElementsByTagName("script")[0];s0.parentNode.insertBefore(s, s0);
        })(document);
    </script><script src="././h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f0cfcccd7b1393990c78efdeebff3968" target="_blank"><img src="././21.gif" height="20" border="0" width="20"></a>
    <script>
        (function(){
            var bp = document.createElement('script');
            bp.src = '//push.zhanzhang.baidu.com/push.js';
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
</div><script src="././user.htm" type="text/javascript"></script><script src="././iplookup.php" type="text/javascript"></script>
<script src="./js/jquery.1.8.min.js"></script>
<script>
    $("#newpass").blur(function(){
        //计算新密码的长度
        var newpass=$("#newpass").val();
        newpass.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
        if(newpass.length>16 || newpass.length<6){
            $("#newpass_sp").html("<font style='color:red'>请输入6-16位密码，区分大小写，不能使用空格！</font>");
            $("#newpass").keyup(function(){
                var newpa=$("#newpass").val();
                if(newpa.length==0){
                    $("#newpass_sp").html("<font style='color:red'>密码不能为空！</font>");
                }else if(newpa.length<6){
                    $("#newpass_sp").html("<font style='color:red'>请输入6-16位密码，区分大小写，不能使用空格！</font>");
                }else{
                    $("#newpass_sp").html(" ");
                }
            })
        }
    })
    $("#confirm").keyup(function(){
        var newpass=$("#newpass").val();
        var confirm=$("#confirm").val();
        var email=$("#email").val();
        if(confirm!=newpass){
            $("#confirm_sp").html("<font style='color:red'>两次密码不一致！</font>");
        }else{
            $("#confirm_sp").html(" ");
        }
    })
    $("#reset-submit").click(function(){
        var newpass=$("#newpass").val();
        var confirm=$("#confirm").val();
        var email=$("#email").val();
        //计算新密码的长度
        var newpass=$("#newpass").val();
        newpass.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
        if(newpass.length>16 || newpass.length<6){
            $("#newpass_sp").html("<font style='color:red'>请输入6-16位密码，区分大小写，不能使用空格！</font>");
            return false;
            $("#newpass").keyup(function(){
                var newpa=$("#newpass").val();
                if(newpa.length==0){
                    $("#newpass_sp").html("<font style='color:red'>密码不能为空！</font>");
                    return false;
                }else if(newpa.length<6){
                    $("#newpass_sp").html("<font style='color:red'>请输入6-16位密码，区分大小写，不能使用空格！</font>");
                    return false;
                }else{
                    $("#newpass_sp").html(" ");
                    return true;
                }
            })
        }
        if(confirm!=newpass){
            $("#confirm_sp").html("<font style='color:red'>两次密码不一致！</font>");
        }else if(confirm!=""){
            $.post('xiugai',{
                'email':email,
                'newpass':newpass
            },function(txt){
                if(txt==1){
                    alert('修改密码成功');
                    location.href='denglu';
                }else if(txt==0){
                    alert('修改密码失败');
                }
            })
        }
    })
</script>
</body></html>