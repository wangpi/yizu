<!DOCTYPE html>
<!-- saved from url=(0032)http://www.imooc.com/course/list -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>
实战开发课程_IT培训精品课程_慕课网
</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="77103107776157736375">
<meta property="wb:webmaster" content="c4f857219bfae3cb">
<meta http-equiv="Access-Control-Allow-Origin" content="*">
<meta http-equiv="Cache-Control" content="no-transform ">

<meta name="Keywords" content="">


<meta name="Description" content="慕课网精品课程，为您提供专业的IT实战开发课程，包含前端开发、后端开发、移动端开发、数据处理、图像处理等各方面IT技能，课程全面、制作精良、讲解通俗易懂。">


<script src="./kecheng/push.js"></script><script type="text/javascript" async="" src="./kecheng/rt.js"></script><script type="text/javascript">

      var OP_CONFIG={"module":"course","page":"list"};
  var isLogin = 0;
var is_choice = "";
  var seajsTimestamp="v=201603111036";
    var ownName="271833261@qq.com"

</script>
<link rel="stylesheet" href="./kecheng/saved_resource" type="text/css">


    <script src="./static/js/landing-min.js?2013032917"></script>
    <div class="modal in" id="login-modal" }> <a class="close" data-dismiss="modal">×</a>
        <h1>登录</h1>
        <ul class="login-bind-tp">
            <li class="qweibo"> <a href="http://sc.chinaz.com"><em>&nbsp;</em> QQ登录</a> </li>

            <li class="sina"> <a href="<?php echo  $code_url ?>"><em>&nbsp;</em> 微博登录</a> </li>

          

        </ul>
        <p>或者使用已有帐号登陆：</p>
        <form class="login-form clearfix" method="post" action="">
            <div class="form-arrow"></div>
            <input id="email" type="text" placeholder="请输入您的邮箱：">
            <span id='email_sp'></span>
            <input id="pwd" type="password" placeholder="请输入您的密码：">
            <span id='pwd_sp'></span>
            <input type="button" id="login" class="button-blue login" value="登录">
            <input type="hidden" name="return-url" value="">
            <div class="clearfix"></div>
            <label class="remember">
                <input name="remember" type="checkbox" checked/>
                下次自动登录 </label>
            <a href="forgot">忘记密码？</a>
        </form>
    </div>
    <link rel="stylesheet" type="text/css" href="static/css/ui2.css?2013032917">
    <script src="js/jquery.1.8.min.js"></script>
    <script>
        //$(document).on("blur","#email",function() {
        $("#email").blur(function(){
            var name = $("#email").val();
            var reg = /^\w+@\w+(\.)\w+$/;
            if (name!= " ") {
                if (reg.test(name)) {
                    $("#email_sp").html('√');
                    return true;
                }else{
                    $("#email_sp").html('<font style="color:red">邮箱格式错误！</font>');
                    return false;
                }
            }else{
                $("#email_sp").html('<font style="color:red">邮箱不能为空哦！</font>');
                return false;
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
            var reg = /^\w+@\w+(\.)\w+$/;
            /*if (name!= "") {
             if (reg.test(name)) {
             $("#email_sp").html('√');
             return true;
             }else{
             $("#email_sp").html('<font style="color:red">邮箱格式错误！</font>');
             return false;
             }
             }else{
             $("#email_sp").html('<font style="color:red">邮箱不能为空哦！</font>');
             return false;
             }*/
            if(pwd==""){
                $("#pwd_sp").html('<font style="color:red">密码不能为空哦！</font>');
            }else{
                $("#pwd_sp").html(' ');
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
    <script>
    function openNew(){
        //获取页面的高度和宽度
        var sWidth=document.body.scrollWidth;
        var sHeight=document.body.scrollHeight;

        //获取页面的可视区域高度和宽度
        var wHeight=document.documentElement.clientHeight;

        var oMask=document.createElement("div");
        oMask.id="mask";
        oMask.style.height=sHeight+"px";
        oMask.style.width=sWidth+"px";
        document.body.appendChild(oMask);
        var oLogin=document.createElement("div");
        oLogin.id="login";
        oLogin.innerHTML="<div id='signin' width='300px' class='rl-modal in' aria-hidden='false'><div class='rl-modal-header'><h1><span class='active-title' id='btnLogin'>登录</span><span data-fromto='signin:signup' id='btnRe'>注册</span></h1><img src='../img/close.png' id='close'><button type='button' class='rl-close' data-dismiss='modal' hidefocus='true' aria-hidden='true'></button></div><div class='rl-modal-body'><div class='clearfix'><div class='l-left-wrap l'><form id='signup-form' autocomplete='off' method='post' action='login'><p class='rlf-tip-globle' id='signin-globle-error'></p><div class='rlf-group'><input type='text' value='' name='email' id='username' data-validate='email' autocomplete='off' class='ipt ipt-email js-own-name' placeholder='请输入登录邮箱'><p class='rlf-tip-wrap'></p></div><input style='display:none' type='text' name='fakeusernameremembered'><input style='display:none' type='password' name='fakepasswordremembered'><div class='rlf-group'><input type='password' name='password' autocomplete='off' class='ipt ipt-pwd ipt-error' placeholder='请输入密码' id='pwd'></div><div class='rlf-group js-verify-row clearfix' style='display: none'><input type='text' name='verify' class='ipt ipt-verify l' placeholder='请输入验证码'><a href='javascript:void(0)' class='verify-img-wrap js-verify-refresh'><img class='verify-img' src='../js/verifycode'></a><a href='javascript:void(0)' class='icon-refresh js-verify-refresh'></a><p class='rlf-tip-wrap'></p></div><div class='rlf-group rlf-appendix clearfix'><label for='auto-signin' class='rlf-autoin l' hidefocus='true'><input type='checkbox' checked='checked' class='auto-cbx' id='auto-signin'>下次自动登录</label><a href='http://www.imooc.com/user/newforgot' class='rlf-forget r' target='_blank' hidefocus='true'>忘记密码 </a></div><div class='rlf-group clearfix'><input type='submit' id='signin-btn' value='登录' hidefocus='true' class='btn-red btn-full'>&nbsp&nbsp&nbsp&nbsp<input type='reset' id='signin-btn' value='取消' hidefocus='true' class='btn-red btn-full'></div></form></div></div></div><div class='rl-model-footer'><div class='pop-login-sns clearfix'><span class='l'>其他方式登录</span><a href='javascript:void(0)' hidefocus='true' data-login-sns='/passport/user/tplogin?tp=weibo' class='pop-sns-weibo r'><i class='icon-weibo'></i></a><a href='javascript:void(0)' hidefocus='true' data-login-sns='/passport/user/tplogin?tp=qq' class='pop-sns-qq r'><i class='icon-qq'></i></a><a href='javascript:void(0)' hidefocus='true' data-login-sns='/passport/user/tplogin?tp=weixin' class='pop-sns-weixin r'><i class='icon-weixin'></i></a></div></div></div><div id='close'>";
        document.body.appendChild(oLogin);

        //获取登陆框的宽和高
        var dHeight=oLogin.offsetHeight;
        var dWidth=oLogin.offsetWidth;
        //设置登陆框的left和top
        oLogin.style.left=sWidth/2-dWidth/2+"px";
        oLogin.style.top=wHeight/2-dHeight/2+"px";
        //点击关闭按钮
        var oClose=document.getElementById("close");

        //点击登陆框以外的区域也可以关闭登陆框
        oClose.onclick=oMask.onclick=function(){
            document.body.removeChild(oLogin);
            document.body.removeChild(oMask);
        };
    };



    window.onload=function(){
        var oBtn=document.getElementById("btnLogin");
        //点击登录按钮
        oBtn.onclick=function(){
            openNew();
            return false;
        }
    }
</script>

    <div class="modal in" id="signup-modal" > <a class="close" data-dismiss="modal">×</a>
        <h1>注册</h1>
        <p>使用邮箱注册：</p>
        <form class="signup-form clearfix" method="post" action="">
            <p class="error"></p>
            <input id="emaill" type="text" placeholder="请输入电子邮箱地址：">
            <span id="emaill_sp"></span>
            <input id="pwdd" type="password" placeholder="6-16位密码，区分大小写，不能用空格：">
            <span id="pwdd_sp"></span>
            <input id="nick" type="text" placeholder="昵称为2-18位，中英文、数字及下划线：">
            <span id="nick_sp"></span>
            <input id="yzm" size="20px" placeholder="请输入验证码" type="text">
            <a onclick="javascript:re_captcha();" >
                <img src="{{ URL('hello/captcha/1') }}"  alt="验证码" title="刷新图片" width="100" height="40" id="c2c98f0de5a04167a9e427d883690ff6" border="1"></a>
            <p class="tips"></p><span id="yzm_sp"></span>
            <input type="hidden" name="title" value="">
            <input type="hidden" name="url" value="">
            <div class="clearfix"></div>
            <img src="./img/qq.png" width="50px" height="50px">
            <img src="./img/weibo.jpg" width="50px" height="50px">
            {{--<ul class="login-bind-tp">
                <li class="qweibo"> <a href="http://sc.chinaz.com"><em>&nbsp;</em> QQ登录</a> </li>
                <li class="sina"> <a href="http://sc.chinaz.com"><em>&nbsp;</em> 微博登录</a> </li>
            </ul>--}}
            <input type="button" name="type" class="button-blue reg" value="注册" data-category="UserAccount" data-action="regist" id="js-signup-submit">
        </form>
    </div>

    <script>
        $("#nick").blur(function(){
            var nick=$("#nick").val();
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
        //$("#email").blur(function(){
        $(document).on("blur","#emaill",function(){
            var email=$("#emaill").val();
            if(email==""){
                $("#emaill_sp").html(" ");
                return true;
            }else{
                var reg=/^\w+@\w+(\.)\w+$/;
                if(reg.test(email)){
                    //将邮箱传到前台，判断是否已经注册过
                    $.get('register1',{
                        'email':email
                    },function(txt){
                        if(txt==1){
                            $("#emaill_sp").html(" ");
                            return true;
                        }else if(txt==0){
                            $("#emaill_sp").html("<font style='color:red'>已注册！！</font>");
                            return false;
                        }
                    })
                }else{
                    $("#emaill_sp").html("<font style='color:red'>邮箱格式不对</font>");
                    return false;
                }
            }
        });
        //$("#pwd").blur(function(){
        $(document).on("blur","#pwdd",function(){
            //计算密码的长度
            var pwd=$("#pwdd").val();
            pwd.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
            if(pwd.length>16  ){
                $("#pwdd_sp").html("<font style='color:red'>请输入6-16位密码，区分大小写，不能使用空格！</font>");
                $("#pwdd").keyup(function(){
                    var pw=$("#pwdd").val();
                    if(pw.length==0){
                        $("#pwdd_sp").html("<font style='color:red'>密码不能为空！</font>");
                    }else if(pw.length<6){
                        $("#pwdd_sp").html("<font style='color:red'>请输入6-16位密码，区分大小写，不能使用空格！</font>");
                    }else{
                        $("#pwdd_sp").html(" ");
                    }
                })
            }
        });
        $("#js-signup-submit").click(function(){
            var email=$("#emaill").val();
            var pwd=$("#pwdd").val();
            var nick=$("#nick").val();
            var yzm=$("#yzm").val();
            if(email==""){
                $("#emaill_sp").html("<font style='color:red'>邮箱不能为空！</font>");
                return false;
            }
            if(pwd==""){
                $("#pwdd_sp").html("<font style='color:red'>密码不能为空！</font>");
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

    <script>
        function re_captcha() {
            $url = "{{ URL('hello/captcha') }}";
            $url = $url + "/" + Math.random();
            document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
        }
    </script>

<script charset="utf-8" async="" src="./kecheng/jquery.js"></script><script charset="utf-8" async="" src="./kecheng/seajs-text.js"></script><script charset="utf-8" async="" src="./kecheng/common.js"></script><script charset="utf-8" async="" src="./kecheng/string.js"></script><script charset="utf-8" async="" src="./kecheng/suggest.js"></script><script charset="utf-8" async="" src="./kecheng/store.js"></script><script charset="utf-8" async="" src="./kecheng/json.js"></script><script charset="utf-8" async="" src="./kecheng/im.js"></script><script charset="utf-8" async="" src="./kecheng/list.js"></script><script charset="utf-8" async="" src="./kecheng/socket.io.min.js"></script></head>
<body id="List_courseId">

<div id="header">
    <div class="page-container" id="nav">
        <div id="logo" class="logo"><a href="http://www.imooc.com/" target="_self" class="hide-text">慕课网</a></div>
        <div class="g-menu-mini l">
            <a href="http://www.imooc.com/#" class="menu-ctrl">
                <i class="icon-menu"></i>
            </a>
            <ul class="nav-item l">
                <li>
                    <a href="learn" target="_self">课程</a>
                </li>
                <li><a href="index.php/jihua" target="_self">计划</a></li>
                <li><a href="../yuanwen" target="_self">猿问</a></li>
                <li><a href="../articl" target="_self">文章</a></li>
                <!--         <li><a href="/wiki"  target="_self">WIKI</a></li> -->
            </ul>
        </div>
        <div id="login-area">
            <ul class="header-unlogin clearfix">
            <li>
                <img src="./img/serach.png" style="margin-top:13px" onclick="show()" />
            </li>
                <li class="header-app">
                    <a href="http://www.imooc.com/mobile/app">
                        <span class="icon-appdownload"></span>
                        
                    </a>
                    <div class="QR-download">
                        <p id="app-text">慕课网APP下载</p>
                        <p id="app-type">iPhone / Android / iPad</p>
                        <img src="./img/app.png">
                    </div>
                </li>

                <?php if(empty($_SESSION['u_id'])){ ?>
                <li class="header-signin">
                    <a role="button" data-category="UserAccount" data-action="login" data-toggle="modal" href="#login-modal">登录</a>
                    <!--<a href="denglu" id="btnZhu">登录</a>-->
                </li>
                <li class="header-signup">
                    <!--<a href="register" id="btnZhu">注册</a>-->
                    <a role="button" data-category="UserAccount" data-action="login" data-toggle="modal" href="#signup-modal">注册</a>
                </li>
                <?php }else{ ?>
                <li class='header-app'>
                    <i class="msg_remind"></i>
                    <a target="_blank" href='#'>
                    <img src="./img/ling.png"/>
                    </a>
                </li>
                <li class="header-app header-unlogin clearfix">
                    <a href="#" title="我的消息" target="_blank">
                        <img src="./img/message.png"/>
                    </a>
                </li>

                <li class="set_btn user-card-box header-unlogin clearfix" style="background-position: 0 -16px;vertical-align: -3px;
  margin-right: 5px;">
                    <a id="header-avator" class="user-card-item" action-type="my_menu"  href="courses" target="_self"><img src="<?php echo $arr[0]['u_photo']?>" width='40' height='40' />
                        <i class="myspace_remind" style="display: none;"></i>
                        <span style="display: none;">动态提醒</span>
                    </a>
                    <div class="g-user-card">
                        <div class="card-inner">
                            <div class="card-top">
                                <a href='/u/3059476/courses'><img src="<?php echo $arr[0]['u_photo']?>" alt="yjtlgp" class="l"></a>
                                <a href='/u/3059476/courses'><span class="name text-ellipsis"><?php echo $arr[0]['u_name']?></span></a>
                                <p class="meta">
                                    <a href="/u/3059476/experience">经验<b id="js-user-mp">0</b></a>
                                    <a href="/u/3059476/credit">积分<b id="js-user-credit">0</b></a>            </p>

                                <a href='../set' class='icon-set setup'></a>
                            </div>

                            <div class="card-history">
                                <span class="history-item">
                                    <span class="tit text-ellipsis">弹出层效果</span>
                                    <span class="media-name text-ellipsis">1-1 效果简介</span>
                                    <i class="icon-clock"></i>
                                                                            <a href="/video/819" class="continue">继续</a>
                                                                    </span>
                            </div>
                            <div class="card-sets clearfix">
                                <a href="/wenda/save" target="_blank" class="l mr30">发问题</a>
                                <a href="/article/publish" target="_blank" class="l">写文章</a>
                                <a href="#" class="r" id="layout">退出</a>
                            </div>
                        </div>
                        <i class="card-arr"></i>
                    </div>
                </li>

                <?php } ?>
            </ul>
        </div>

                
        <!-- <div class="app-down-area r">
            <a href="/mobile/app">
                <i class="header-app-icon"></i>慕课APP
            </a>
        </div> -->
        
<div><input type="text" placeholder='请输入想搜索的内容...'style="height:25px;margin-left:450px;margin-top:20px;display:none" id="sou" /></div>
       <!--  <div class="search-warp clearfix" style="min-width: 32px; height: 60px;">

        <div class="search-warp clearfix" style="min-width: 32px; height: 60px;">
            <div class="search-area min" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." type="text" autocomplete="off">
                <input type="hidden" class="btn_search" data-search-btn="search-btn">
                <ul class="search-area-result" data-suggest-result="suggest-result">
                </ul>
            </div>
            <div class="showhide-search" data-show="no"></div>
        </div> -->
    </div>
</div>



<div id="main">
<div style="background-color:#DDDDDD;width:50px;height:50px;line-height:50px;text-align:center;position:fixed;right:5px;top:500px"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=271833261&site=qq&menu=yes">聊聊</a></div>
<div style="background-color:#DDDDDD;width:50px;height:50px;line-height:50px;text-align:center;position:fixed;right:5px;top:550px;font-size:40px"><a href="javascript:scrollTo(0, document.body.scrollHeight);">∨</a></div>
<div style="background-color:#DDDDDD;width:50px;height:50px;line-height:50px;text-align:center;position:fixed;right:5px;top:600px;font-size:40px" id="ding"><!-- <a href="javascript:scroll(0,0)">∧</a> -->∧</div>  
    <div class="container">
        <div class="course-content">
            <div class="course-nav-box">
                <div class="course-nav-hd">
                    <span>全部课程</span>
                    <a href="http://www.imooc.com/about/recruit" class="for-teacher hide-text" title="应聘讲师" target="_blank">应聘讲师</a>
                </div>
                <div class="course-nav-row clearfix">
                    <span class="hd l">方向：</span>
                    <div class="bd">
                        <ul class="">
                        <li class="course-nav-item on qq" >
                                <a href="javascript:void(0)" id="quan2">全部</a>
                            </li>

                            
                                <?php foreach($direction as $k=>$v){?>
                                                                <li class="course-nav-item
                                ">
                                    <a href="javascript:void(0)" data-ct="be" class='fff' id="d" d_id="<?php echo $v['d_id']?>"><?php echo $v['d_name']?></a>
                                </li>
                               <?php }?>

                    </div>
                </div>
                <div class="course-nav-row clearfix">
                    <span class="hd l">分类：</span>
                    <div class="bd" id="nidie">
                    <li class="course-nav-item on cc">
                                <a href="javascript:void(0)" onclick="fen()" id="quan1">全部</a>
                            </li>
                        
                                        <?php foreach($class as $k=>$v){?>
                                                                                <li class="course-nav-item ">
                                            <a href="javascript:void(0)" data-id="44" data-ct="fe" class="ccc" id="c" c_id="<?php echo $v['c_id']?>"><?php echo $v['c_name']?></a>
                                        </li>
                                        <?php }?>
                                                                               </div>
                </div>
                <div class="course-nav-row clearfix">
                    <span class="hd l">难度：</span>
                    <div class="bd">
                        <ul class="">
                        <li class="course-nav-item on yy">
                                <a href="javascript:void(0)" onclick="nandu()" id="quan">全部</a>
                            </li>
                            <?php foreach ($nandu as $k=>$v){?>
                            <li class="course-nav-item ">
                                <a href="javascript:void(0)" id="nan" class="ttt" nan_id="<?php echo $v['d_id']?>"><?php echo $v['d_name']?></a>
                            </li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
            <input type="hidden" value="<?php echo $id['nan_id']?>" id='zhi1'/>
            <input type="hidden" value="<?php echo $id['z_id']?>" id='zhi2'/>
            <input type="hidden" value="<?php echo $id['c_id']?>" id='zhi3'/>

            <div class="course-tool-bar clearfix">
                <div class="tool-left l">
                <?php foreach ($hot as $k => $v): ?>
                                            <a href="javascript:void(0)" class="sort-item" id="z" z_id="<?php echo $v['z_id']?>"><?php echo $v['z_name']?></a>
                                        <?php endforeach ?>
                                    </div>

                <div class="l">
                    <span class="tool-item" style="display: none;">
                        <a class="follow-learn tool-chk" href="javascript:void(0);">跟我学</a>
                    </span>
                </div>
                <div class="tool-right r">
                                        <span class="tool-item total-num">
                        共<b>508</b>个课程
                    </span>
                    <span class="tool-item tool-pager">
                                                <span class="pager-num">
                            <b class="pager-cur"><?php echo $page?></b>/<em class="pager-total"><?php echo $page_count?></em>
                        </span>
                                                <a href="learn?p=<?php echo $last ?>" class="pager-action pager-prev hide-text disabled">上一页</a>

                                                <a href="learn?p=<?php echo $next ?>" class="pager-action pager-next hide-text">下一页</a>
                                            </span>
                </div>
            </div>

            <div class="course-list">
                <div class="js-course-lists" id="nima">
                    <ul>



                                                        <?php foreach ($list as $k => $v): ?>


                                                        <li class="course-one">
                            <a href="aaa?k_id=<?php echo $v['c_id']?>" target="_self">
                        <div class="course-list-img">
                <img width="240" height="135" alt="HTML+CSS基础课程" src="./img/<?php echo $v['c_img']?>">
                        </div>
            <h5>
                <span><?php echo $v['c_name']?></span>
            </h5>
            <div class="tips">
                <p class="text-ellipsis"><?php echo $v['c_desc']?></p>
                                    <span class="l ">更新完毕</span>

                <span class="l ml20">
                                <?php echo $v['c_ren']?>人学习</span>
            </div>
            <span class="time-label">
                                    <?php echo $v['c_addtime']?> | <?php echo $v['d_name']?>
                            </span>
            <b class="follow-label">跟我学</b>
            </a>
        </li>
    <?php endforeach ?>

                                            </ul>
                </div>
                <div class="page"><span class="disabled_page"><a href="learn?p=1">首页</a></span><span class="disabled_page"><a href="learn?p=<?php echo $last?>">上一页</a></span><a href="learn?p=1" class="active">1</a><a href="learn?p=2">2</a><a href="learn?p=3">3</a><a href="learn?p=4">4</a><a href="learn?p=5">5</a><a href="learn?p=6">6</a><a href="learn?p=7">7</a><a href="learn?p=<?php echo $next?>">下一页</a><a href="learn?p=<?php echo $page_count?>">尾页</a></div>
            </div>
        </div>
    </div>

</div>

<div id="footer">
    <div class="waper">
        <div class="footerwaper clearfix">
            <div class="followus r">
                <a class="followus-weixin" href="javascript:;" target="_blank" title="微信">
                    <div class="flw-weixin-box"></div>
                </a>
                <a class="followus-weibo" href="http://weibo.com/u/3306361973" target="_blank" title="新浪微博"></a>
                <a class="followus-qzone" href="http://user.qzone.qq.com/1059809142/" target="_blank" title="QQ空间"></a>
            </div>
            <div class="footer_intro l">
                <div class="footer_link">
                    <ul>
                        <li><a href="http://www.imooc.com/" target="_blank">网站首页</a></li>
                        <li><a href="http://www.imooc.com/about/job" target="_blank">人才招聘</a></li>
                        <li> <a href="http://www.imooc.com/about/contact" target="_blank">联系我们</a></li>
                        <li><a href="http://yun.imooc.com/" target="_blank">慕课云</a></li>
                        <li><a href="http://www.imooc.com/corp/index" target="_blank">合作专区</a></li>
                        <li><a href="http://www.imooc.com/about/us" target="_blank">关于我们</a></li>
                        <li> <a href="http://www.imooc.com/about/recruit" target="_blank">讲师招募</a></li>
                        <li> <a href="http://www.imooc.com/user/feedback" target="_blank">意见反馈</a></li>
                        <li> <a href="you" target="_blank">友情链接</a></li>
                    </ul>
                </div>
                <p>Copyright © 2016 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>
<!-- <div id="J_GotoTop" class="elevator">
    <a class="elevator-weixin" href="javascript:;">
        <div class="elevator-weixin-box">
        </div>
    </a>
    <a class="elevator-msg" href="http://www.imooc.com/user/feedback" target="_blank" id="feedBack"></a>
    <a class="elevator-app" href="http://www.imooc.com/mobile/app">
        <div class="elevator-app-box">
        </div>
    </a>
    <a class="elevator-top" href="javascript:;" style="display:none" id="backTop"></a>
</div> -->



<!--script-->
<script src="./kecheng/ssologin.js"></script>
<script type="text/javascript" src="./kecheng/sea.js"></script>
<script type="text/javascript" src="./kecheng/sea_config.js"></script>
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
</script><script src="./kecheng/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f0cfcccd7b1393990c78efdeebff3968" target="_blank"><img border="0" src="./kecheng/21.gif" width="20" height="20"></a>
<script>
(function(){
    var bp = document.createElement('script');
    bp.src = '//push.zhanzhang.baidu.com/push.js';
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</div><script type="text/javascript" src="./kecheng/user"></script><script type="text/javascript" src="./kecheng/iplookup.php"></script>


</body></html>

<style type="text/css">

    element.style {
    }
    .rl-modal.in {
        opacity: 1;
        filter: alpha(opacity=100);
    }
    .rl-modal {
    }
    .rl-modal {
        position: fixed;
        background: #fff;
        z-index: 100000;
        width: 360px;
        padding-bottom: 30px;
        left: 50%;
        top: 50%;
        margin: -218px 0 0 -180px;
        box-shadow: 0 0 3px rgba(0, 0, 0, 0.25);
        transition: all 0.2s;
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -o-transition: all 0.2s;
    }


</style>
<script src="./js/jquery.1.8.min.js"></script>
<script>

    $("#layout").click(function(){
        if(confirm("你确定退出吗?")){
            window.location.href="layout";
        }
    })
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
    $(document).on("click",".login",function(){
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
    $(document).on('click','#nan',function(){
        var nan_id = $(this).attr('nan_id');
        //alert(nan_id)
        $(".yy").removeClass("on");
        $(this).parent().attr('class','course-nav-item yy on');
        $.ajax({
            url:'shai',
            type:'post',
            data:'nan_id='+nan_id,
            success:function(o){
                //alert(o)
                $('#nima').html(o);
            }
        })
    })
    $(document).on('click','#quan',function(){
        var kong = '';
        $(this).parent().addClass('on');
        $('.ttt').parent().removeClass("on");
        $.ajax({
            url:'shai',
            type:'post',
            data:'nan_id='+kong,
            success:function(o){
                //alert(o)
                $('#nima').html(o);
            }
        })
    })
    $(document).on('click','#c',function(){
        var c_id = $(this).attr('c_id');
        $(".cc").removeClass("on");
        $(this).parent().attr('class','course-nav-item cc on');
        $.ajax({
            url:'shai',
            type:'post',
            data:'c_id='+c_id,
            success:function(o){
                //alert(o)
                $('#nima').html(o);
            }
        })
    })
    $(document).on('click','#quan1',function(){
        var kong = '';
        $(this).parent().addClass('on');
        $('.ccc').parent().removeClass("on");
        $.ajax({
            url:'shai',
            type:'post',
            data:'c_id='+kong,
            success:function(o){
                //alert(o)
                $('#nima').html(o);
            }
        })
    })
    $(document).on('click','#d',function(){
        var d_id = $(this).attr('d_id');
        $(".qq").removeClass("on");
        $(this).parent().attr('class','course-nav-item qq on');
        $.ajax({
            url:'shai',
            type:'post',
            data:'d_id='+d_id,
            success:function(o){
                //alert(o)
                $('#nima').html(o);
            }
        })
    })
    $(document).on('click','#d',function(){
        var d_id = $(this).attr('d_id');
        $(".qq").removeClass("on");
        $(this).parent().attr('class','course-nav-item qq on');
        $.ajax({
            url:'shai1',
            type:'get',
            data:'d_id='+d_id,
            success:function(o){
                //alert(o)
                $('#nidie').html(o);
            }
        })
    })
    $(document).on('click','#quan2',function(){
        var kong = '';
        $(this).parent().addClass('on');
        $('.fff').parent().removeClass("on");
        $.ajax({
            url:'shai',
            type:'post',
            data:'kong='+kong,
            success:function(o){
                //alert(o)
                $('#nima').html(o);
            }
        })
    })
    $(document).on('click','#quan2',function(){
        var kong = '1';
        $(this).parent().addClass('on');
        $('.fff').parent().removeClass("on");
        $.ajax({
            url:'shai1',
            type:'get',
            data:'kong='+kong,
            success:function(o){
                //alert(o)
                $('#nidie').html(o);
            }
        })
    })
    // $(document).on('click','#nan',function(){
    //     var nan_id = $(this).attr('nan_id');
    //     //alert(nan_id);
    //     var c_id = $('#zhi3').attr('value');
    //     //alert(c_id)
    //     var z_id = $('#zhi2').attr('value');
    //     url="learn?nan_id="+nan_id+"&c_id="+c_id+"&z_id="+z_id;
    //     location=url;
    // })
    // $(document).on('click','#c',function(){
    //     var c_id = $(this).attr('c_id');
    //     //alert(nan_id);
    //     var nan_id = $('#zhi1').attr('value');
    //     //alert(c_id)
    //     var z_id = $('#zhi2').attr('value');
    //     url="learn?nan_id="+nan_id+"&c_id="+c_id+"&z_id="+z_id;
    //     location=url;
    // })
    $(document).on('click','#z',function(){
        var z_id = $(this).attr('z_id');
        //alert(z_id);
        // var c_id = $('#zhi3').attr('value');
        // //alert(c_id)
        // var nan_id = $('#zhi1').attr('value');
        // url="learn?nan_id="+nan_id+"&c_id="+c_id+"&z_id="+z_id;
        // location=url;
        $.ajax({
            url:'shai',
            type:'post',
            data:'z_id='+z_id,
            success:function(o){
                //alert(o)
                $('#nima').html(o);
            }
        })
    })
    // function nandu(){
    //     var nan_id = '';
    //     $('#zhi1').val(nan_id);
    //     var c_id = $('#zhi3').attr('value');
    //     var z_id = $('#zhi2').attr('value');
    //     var nan_id = $('#zhi1').attr('value');
    //     url="learn?nan_id="+nan_id+"&c_id="+c_id+"&z_id="+z_id;
    //     location=url;
    // }
    // function fen(){
    //     var c_id = '';
    //     $('#zhi3').val(c_id);
    //     var c_id = $('#zhi3').attr('value');
    //     var z_id = $('#zhi2').attr('value');
    //     var nan_id = $('#zhi1').attr('value');
    //     url="learn?nan_id="+nan_id+"&c_id="+c_id+"&z_id="+z_id;
    //     location=url;
    // }
    function show(){
                var sou = $('#sou').val();
                //alert(sou)
                if (sou=='') {
                    $('#sou').toggle();
                }else{
                    location.href="search?sou="+sou;
                }
            }
    $(function(){

$(window).scroll(function(){  //只要窗口滚动,就触发下面代码 

var scrollt = document.documentElement.scrollTop + document.body.scrollTop; //获取滚动后的高度 

if( scrollt >200 ){  //判断滚动后高度超过200px,就显示  

$("#ding").fadeIn(400); //淡出     

}else{      

$("#ding").stop().fadeOut(400); //如果返回或者没有超过,就淡入.必须加上stop()停止之前动画,否则会出现闪动   

}

});

$("#ding").click(function(){ //当点击标签的时候,使用animate在200毫秒的时间内,滚到顶部

$("html,body").animate({scrollTop:"0px"},200);

});

});
</script>
