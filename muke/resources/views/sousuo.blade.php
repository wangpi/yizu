<!DOCTYPE html>
<!-- saved from url=(0045)http://www.imooc.com/index/search?words=mysql -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>搜索丨慕课网 只学有用的！</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="77103107776157736375">
<meta property="wb:webmaster" content="c4f857219bfae3cb">
<meta http-equiv="Access-Control-Allow-Origin" content="*">
<meta http-equiv="Cache-Control" content="no-transform ">
<meta name="keywords" content="慕课网，慕课官网，MOOC，移动开发，IT技能培训，免费编程视频，php开发教程，web前端开发，在线编程学习，html5视频教程，css教程，ios开发培训，安卓开发教程">
<meta name="description" content="慕课网（IMOOC）是学习编程最简单的免费平台。慕课网提供了丰富的移动端开发、php开发、web前端、html5教程以及css3视频教程等课程资源。它富有交互性及趣味性，并且你可以和朋友一起编程。">



<script src="./souke/push.js"></script><script type="text/javascript" async="" src="./souke/rt.js"></script><script type="text/javascript">

      var OP_CONFIG={"module":"index","page":"search"};
  var isLogin = 0;
var is_choice = "";
  var seajsTimestamp="v=201603290933";
    var ownName="271833261@qq.com"
  
</script>





<link rel="stylesheet" href="./souke/saved_resource" type="text/css">
<script charset="utf-8" async="" src="./souke/jquery.js"></script><script charset="utf-8" async="" src="./souke/seajs-text.js"></script><script charset="utf-8" async="" src="./souke/common.js"></script><script charset="utf-8" async="" src="./souke/string.js"></script><script charset="utf-8" async="" src="./souke/suggest.js"></script><script charset="utf-8" async="" src="./souke/store.js"></script><script charset="utf-8" async="" src="./souke/json.js"></script><script charset="utf-8" async="" src="./souke/im.js"></script><script charset="utf-8" async="" src="./souke/search.js"></script><script charset="utf-8" async="" src="./souke/socket.io.min.js"></script><script charset="utf-8" async="" src="./souke/jquery.easing.min.js"></script><script charset="utf-8" async="" src="./souke/jquery.lavaTab.js"></script><script charset="utf-8" async="" src="./souke/wdlist-index.js"></script><script charset="utf-8" async="" src="./souke/index-wendalist.js"></script><script charset="utf-8" async="" src="./souke/url.js"></script><script charset="utf-8" async="" src="./souke/verify-code.js"></script><script charset="utf-8" async="" src="./souke/layer.min.js"></script><link charset="utf-8" rel="stylesheet" href="./souke/layer.css"><script charset="utf-8" async="" src="./souke/ueditor.parse.js"></script><script src="./souke/share.js"></script><link rel="stylesheet" href="./souke/share_style0_16.css"></head>
<body>

<div id="header">
    <div class="page-container" id="nav">
        <div id="logo" class="logo"><a href="http://www.imooc.com/" target="_self" class="hide-text">慕课网</a></div>
        <div class="g-menu-mini l">
            <a href="http://www.imooc.com/index/search?words=mysql#" class="menu-ctrl">
                <i class="icon-menu"></i>
            </a>
            <ul class="nav-item l">
                <li>
                    <a href="learn" target="_self">课程</a>
                </li>
                <li><a href="http://www.imooc.com/course/program" target="_self">计划</a></li>
                <li><a href="http://www.imooc.com/wenda" target="_self">猿问</a></li>
                <li><a href="http://www.imooc.com/article" target="_self">文章</a></li>
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
                <!--
        <div class="app-down-area r">
            <a href="/mobile/app">
                <i class="header-app-icon"></i>慕课APP
            </a>
        </div>
        -->
<div><input type="text" placeholder='请输入想搜索的内容...'style="height:25px;margin-left:450px;margin-top:20px;display:none" id="sou" /></div>
        
        
        <!-- <div class="search-warp clearfix" style="min-width: 32px; height: 60px;">
            <div class="search-area min" data-search="top-banner" style="display: none;">
                <input class="search-input" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." type="text" autocomplete="off">
                <input type="hidden" class="btn_search" data-search-btn="search-btn">
                <ul class="search-area-result" data-suggest-result="suggest-result">
                </ul>
            </div>
            <div class="showhide-search" data-show="no"><i class="icon-search"></i></div>
        </div> -->
    </div>
</div>


<div id="main">
<div style="background-color:#DDDDDD;width:50px;height:50px;line-height:50px;text-align:center;position:fixed;right:5px;top:500px"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=271833261&site=qq&menu=yes">聊聊</a></div>
<div style="background-color:#DDDDDD;width:50px;height:50px;line-height:50px;text-align:center;position:fixed;right:5px;top:550px;font-size:40px"><a href="javascript:scrollTo(0, document.body.scrollHeight);">∨</a></div>
<div style="background-color:#DDDDDD;width:50px;height:50px;line-height:50px;text-align:center;position:fixed;right:5px;top:600px;font-size:40px" id="ding"><a href="javascript:scroll(0,0)">∧</a></div>  
<div class="search-container">
    <script type="text/javascript">var _type=0;</script>
    <!--banner start-->
    <div class="search-banner">
        <div class="search-box clearfix" data-search="search-page">
            <div class="suggest-input-box l">
                <input class="suggest-input J-suggest-input" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." type="text" autocomplete="off" value="<?php echo $sou?>" id='sou1'>
                <span><a href="javascript:void(0)" id="qing">清空</a></span>
            </div>
            <input type="button" class="btn-search" data-search-btn="search-btn" value="搜索" id="sousou">
            <ul class="suggest-list" data-suggest-result="suggest-result">
            </ul>
        </div>
    </div>
    <!--banner end-->

    <div class="search-main clearfix">
        <!--search result start-->
        <div class="search-result l">
            <ul class="type-list J-type-list clearfix">
                <li class="type-item selected" data-type="课程" id="1">课程</li>
                <li class="type-item" data-type="猿问" id="2">猿问</li>
                <li class="type-item" data-type="文章" id="3">文章</li>
                <li class="type-item" data-type="作品" id="4">作品</li>
                <li class="type-item" data-type="Wiki" id="5">Wiki</li>
            <li class="move-light" style="width: 120px; overflow: hidden;"></li></ul>
            <div class="result-list J-result-list"><div class="result-header clearfix">
    为您找到相关<span>课程<?php echo $zong?></span>个
    <!--<span class="popular-sort J-popular-sort">最热排序</span>
    <span class="latest-sort J-latest-sort">最新排序</span>-->
</div>
<ul class="search-course">
<?php foreach ($suo as $k => $v):?>
        <li class="course-item border-btm">
        <div class="course-item-content clearfix">
            <div class="thumbnail">
                <div class="thumbnail-inner">
                    <a href="aaa?k_id=<?php echo $v['c_id']?>" target="_blank"><img src="./img/<?php echo $v['c_img']?>"></a>
                </div>
            </div>
            <div class="introduction">
                <h2 class="title autowrap"><a href="aaa?k_id=<?php echo $v['c_id']?>" target="_blank"><?php echo $v['c_name']?></a></h2>
                <div class="description autowrap">课程简介：<?php echo $v['c_desc']?></div>
                <div class="chapter autowrap">课程大纲：<?php echo $v['c_zong']?></div>
            </div>
        </div>
    </li>
<?php endforeach ?>
    </ul>
<div class="page js-page"><span class="disabled_page"><a href="search?p=1&sou=<?php echo $sou?>">首页</a></span><span class="disabled_page"><a href="search?p=<?php echo $last?>&sou=<?php echo $sou?>">上一页</a></span><a href="search?p=1&sou=<?php echo $sou?>" class="active">1</a><a href="search?p=2&sou=<?php echo $sou?>" data-page="2">2</a><a href="search?p=<?php echo $next?>&sou=<?php echo $sou?>" data-page="2">下一页</a><a href="search?p=<?php echo $page_count?>&sou=<?php echo $sou?>" data-page="2">尾页</a></div>
</div>
        </div>
        <!--search result end-->

        <!--hot-search start-->
        <dl class="hot-search r">
            <dt>热门搜索</dt>
            <dd>
                                                <a title="AngularJS" href="search?sou=AngularJS">
                    AngularJS                </a>
                                <a title="mysql" href="search?sou=mysql">
                    mysql                </a>
                                <a title="java" href="search?sou=java">
                    java                </a>
                                <a title="android" href="search?sou=android">
                    android                </a>
                                <a title="php" href="search?sou=php">
                    php                </a>
                                <a title="python" href="search?sou=python">
                    python                </a>
                                <a title="javascript" href="search?sou=javascript">
                    javascript                </a>
                                <a title="html" href="search?sou=html">
                    html                </a>
                                <a title="bootstrap" href="search?sou=bootstrap">
                    bootstrap                </a>
                                <a title="ajax" href="search?sou=ajax">
                    ajax                </a>
                                <a title="linux" href="search?sou=linux">
                    linux                </a>
                                <a title="html5" href="search?sou=html5">
                    html5                </a>
                                <a title="c++" href="search?sou=c%2B%2B">
                    c++                </a>
                                <a title="C" href="search?sou=C">
                    C                </a>
                                <a title="c#" href="search?sou=c%23">
                    c#                </a>
                                            </dd>
        </dl>
        <!--hot-search end-->
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
<script src="./souke/ssologin.js"></script>
<script type="text/javascript" src="./souke/sea.js"></script>
<script type="text/javascript" src="./souke/sea_config.js"></script>
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
</script><script src="./souke/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f0cfcccd7b1393990c78efdeebff3968" target="_blank"><img border="0" src="./souke/21.gif" width="20" height="20"></a>
<script>
(function(){
    var bp = document.createElement('script');
    bp.src = '//push.zhanzhang.baidu.com/push.js';
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</div><script type="text/javascript" src="./souke/user"></script><script type="text/javascript" src="./souke/iplookup.php"></script>


</body></html>
<script src="./js/jquery.1.8.min.js"></script>
<script>
    function show(){
            var sou = $('#sou').val();
            //alert(sou)
            if (sou=='') {
                $('#sou').toggle();
            }else{
                location.href="search?sou="+sou;
            }
    }         
    $('#sousou').click(function(){
        var sou1 = $('#sou1').val();
        //alert(sou1)
        url="search?sou="+sou1
        location=url
    })   
    $('#qing').click(function(){
        var kong = ''; 
        $('#sou1').val(kong);
    })   
    $('#1').hover(function(){
        $('.move-light').css('left','0.11px');
    },function(){
        $('.move-light').css('left','0.11px');
    });
    $('#2').hover(function(){
        $('.move-light').css('left','130.11px');
    },function(){
        $('.move-light').css('left','0.11px');
    });
    $('#3').hover(function(){
        $('.move-light').css('left','235.11px');
    },function(){
        $('.move-light').css('left','0.11px');
    });
    $('#4').hover(function(){
        $('.move-light').css('left','375.11px');
    },function(){
        $('.move-light').css('left','0.11px');
    });
    $('#5').hover(function(){
        $('.move-light').css('left','480.11px');
    },function(){
        $('.move-light').css('left','0.11px');
    });
</script>