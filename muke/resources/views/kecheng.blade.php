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
                <li><a href="../article" target="_self">文章</a></li>
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

                <?php if(empty($_SESSION['name'])){ ?>
                <li class="header-signin">
                    <a href="denglu" id="">登录</a>
                </li>
                <li class="header-signup">
                    <a href="register" id="btnZhu">注册</a>
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
                    <a id="header-avator" class="user-card-item" action-type="my_menu"  href="/u/3059476/courses" target="_self"><img src="<?php echo $arr[0]['u_photo']?>" width='40' height='40' />
                        <i class="myspace_remind" style="display: none;"></i>
                        <span style="display: none;">动态提醒</span>
                    </a>
                    <div class="g-user-card">
                        <div class="card-inner">
                            <div class="card-top">
                                <a href='/u/3059476/courses'><img src="<?php echo $arr[0]['u_photo']?>" alt="yjtlgp" class="l"></a>
                                <a href='/u/3059476/courses'><span class="name text-ellipsis"><?php echo $_SESSION['name']?></span></a>
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