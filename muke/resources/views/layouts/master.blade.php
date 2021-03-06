@section('sidebar')
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
                        <a href="#">
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


            {{--<div class="search-warp clearfix" style="min-width: 32px; height: 60px;">--}}
                {{--<div class="search-area min" data-search="top-banner">--}}
                    {{--<input class="search-input" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." type="text" autocomplete="off">--}}
                    {{--<input type="hidden" class="btn_search" data-search-btn="search-btn">--}}
                    {{--<ul class="search-area-result" data-suggest-result="suggest-result">--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="showhide-search" data-show="no"></div>--}}
            {{--</div>--}}
                    <div><input type="text" placeholder='请输入想搜索的内容...'style="height:25px;margin-left:450px;margin-top:20px;display:none" id="sou" /></div>
        </div>
    </div>


@show
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
                        <li> <a href="http://www.imooc.com/about/friendly" target="_blank">友情链接</a></li>
                    </ul>
                </div>
                <p>Copyright © 2016 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>
<script src="./js/jquery.1.8.min.js"></script>
<link rel="stylesheet" type="text/css" href="static/css/ui2.css?2013032917">
<script src="./static/js/landing-min.js?2013032917"></script>


<div class="modal in" id="login-modal" }> <a class="close" data-dismiss="modal">×</a>
    <h1>登录</h1>
    <ul class="login-bind-tp">
        <li class="qweibo"> <a href="http://sc.chinaz.com"><em>&nbsp;</em> QQ登录</a> </li>

        <li class="sina"> <a href=""><em>&nbsp;</em> 微博登录</a> </li>



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

    function show(){
        var sou = $('#sou').val();
        //alert(sou)
        if (sou=='') {
            $('#sou').toggle();
        }else{
            location.href="search?sou="+sou;
        }
    }

</script>