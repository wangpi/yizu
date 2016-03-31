<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php echo $arr[0]['u_name']?>课程</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375">
    <meta property="wb:webmaster" content="c4f857219bfae3cb">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta name="keywords" content="慕课网，慕课官网，MOOC，移动开发，IT技能培训，免费编程视频，php开发教程，web前端开发，在线编程学习，html5视频教程，css教程，ios开发培训，安卓开发教程">
    <meta name="description" content="慕课网（IMOOC）是学习编程最简单的免费平台。慕课网提供了丰富的移动端开发、php开发、web前端、html5教程以及css3视频教程等课程资源。它富有交互性及趣味性，并且你可以和朋友一起编程。">



    <script src="./none/push.js"></script><script src="./none/rt.js" async="" type="text/javascript"></script><script type="text/javascript">

        var OP_CONFIG={"module":"u","page":"courses","userInfo":{"uid":3127830,"nickname":"\u6155\u7c893127830","head":"http:\/\/img.mukewang.com\/user\/545847990001d46402200220-80-80.jpg","usertype":"1","roleid":0}};
        var isLogin = 1;
        var is_choice = "";
        var seajsTimestamp="v=201603290933";
        var ownName="1793398858@qq.com"

    </script>


    <link rel="stylesheet" href="./none/layer.css">



    <link rel="stylesheet" href="./none/a.css" type="text/css">
    <script src="./none/jquery.js" async="" charset="utf-8"></script><script src="./none/seajs-text.js" async="" charset="utf-8"></script><script src="./none/common.js" async="" charset="utf-8"></script><script src="./none/string.js" async="" charset="utf-8"></script><script src="./none/suggest.js" async="" charset="utf-8"></script><script src="./none/store.js" async="" charset="utf-8"></script><script src="./none/json.js" async="" charset="utf-8"></script><script src="./none/im.js" async="" charset="utf-8"></script><script src="./none/courses.js" async="" charset="utf-8"></script><script src="./none/socket.js" async="" charset="utf-8"></script><script src="./none/u_common.js" async="" charset="utf-8"></script><script src="./none/layer.js" async="" charset="utf-8"></script><script src="./none/share.js"></script><link href="./none/share_style0_16.css" rel="stylesheet"></head>
<body>

@extends('layouts.master')
@section('sidebar')
    @parent


<div id="main">

    <div class="big-pic">
        <div class="user-info">
            <h3 class="user-name clearfix">
                <span><?php echo $arr[0]['u_name']?></span>


            </h3>
            <!--25-->
            <p class="about-info">




            </p>
            <p class="user-desc"></p>
            <div class="study-info clearfix">
                <div class="item study-time">
                    <em> 0分</em><span>学习时长</span>
                </div>
                <div class="item integral">
                    <a href="http://www.imooc.com/u/3127830/credit"><em>0</em><span>赚取积分</span></a>

                </div>
                <div class="item experience">
                    <a href="http://www.imooc.com/u/3127830/experience"><em>0</em><span>获得经验</span></a>
                </div>
            </div><!--.study-info end-->
        </div><!-- .user-info end -->
    </div><!-- .big-pic end -->
    <div class="wrap">
        <div style="position: absolute; left: 0px; top: -175px;" class="slider">
            <div class="user-pic">
                <div class="user-pic-bg"></div><!--user-pic-big end-->
                <img class="img" src="<?php echo $arr[0]['u_photo']?>" alt="">

                <div style="display: block;" class="set-btn"><a href="setprofile"><i class="icon-set"></i></a></div>

            </div>

            <ul>
                <li><a href="learn" class="active"><i class="icon-tick"></i><span>课程</span><b class="icon-drop_right"></b></a></li>
                <!--                                     <li><a href="/u/3127830/szcourses/list" ><i class="icon-shizhan"></i><span>实战</span><b class="icon-drop_right"></b></a></li>

                             -->
                <li><a href="http://www.imooc.com/u/3127830/plans"><i class="icon-plan"></i><span>计划</span><b class="icon-drop_right"></b></a></li>
                <li><a href="http://www.imooc.com/u/3127830/bbs"><i class="icon-yuanwen"></i><span>猿问</span><b class="icon-drop_right"></b></a></li>
                <li><a href="article"><i class="icon-blog"></i><span>文章</span><b class="icon-drop_right"></b></a></li>
                <li><a href="http://www.imooc.com/u/3127830/wikis"><i class="icon-wiki"></i><span>wiki</span><b class="icon-drop_right"></b></a></li>
            </ul>
        </div><!-- .slider end -->
        <div class="u-container">
            <div class="c-tab clearfix">
                <div class="tool-left l">
                    <a href="courses" class="sort-item active">最近学习</a>
                    <a href="http://www.imooc.com/u/3127830/courses?sort=follow" class="sort-item ">我的关注</a>
                </div>
                <div class="tool-right r">
                    <div class="tool-all">
            <span id="js-columall" class="tool-item">
                <span>

                                    全部课程
                                </span>
            	<i class="tool-item icon icon-drop_down"></i>
        	</span>
                        <ul id="js-columbd" class="all-cont" style="display:none;">
                            <li><a href="http://www.imooc.com/u/3127830/courses?sort=time">全部课程</a></li>
                        </ul>

                    </div>
                </div>
            </div>


            <div class="not-conts">
                你最近有没有学习任何课程，可以先
                <a href="learn" class="find-course">去找找课程</a>
            </div>


        </div><!-- .container end -->
    </div><!-- .wrap end-->

</div>

@endsection
<div id="J_GotoTop" class="elevator">
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
</div>



<!--script-->
<script src="./none/ssologin.js"></script>
<script type="text/javascript" src="./none/sea.js"></script>
<script type="text/javascript" src="./none/sea_config.js"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>




<style type="text/css">.myClassList table td dl dd { margin-top:88px } #face_panel { z-index:99999999 }</style>

<div id="layer_sendmsg" class="font-colorg" style="display:none">
    <div class="sendadd">
        <h4>发送好友申请<span class="tipclose"></span></h4>
        <div class="sendcon">
            <textarea class="chatInput" id="textInput" type="text" name="说点什么吧" cols="1"></textarea>
        </div>
        <div class="sendsq">
            <a href="javascript:void(0)" id="sendBtn" class="sendInvite btn btn-green">发送申请</a>
        </div>
    </div>
</div>


<div style="display: none">
    <script type="text/javascript">
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0cfcccd7b1393990c78efdeebff3968' type='text/javascript'%3E%3C/script%3E"));
        (function (d) {
            window.bd_cpro_rtid="rHT4P1c";
            var s = d.createElement("script");s.type = "text/javascript";s.async = true;s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
            var s0 = d.getElementsByTagName("script")[0];s0.parentNode.insertBefore(s, s0);
        })(document);
    </script><script src="./none/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f0cfcccd7b1393990c78efdeebff3968" target="_blank"><img src="./none/21.gif" height="20" border="0" width="20"></a>
    <script>
        (function(){
            var bp = document.createElement('script');
            bp.src = '//push.zhanzhang.baidu.com/push.js';
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
</div><script src="./none/user.htm" type="text/javascript"></script><script src="./none/iplookup.php" type="text/javascript"></script>


</body></html>