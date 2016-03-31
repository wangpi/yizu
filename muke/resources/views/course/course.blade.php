<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php
        echo $arr[0]['u_name']?>课程</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375">
    <meta property="wb:webmaster" content="c4f857219bfae3cb">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta name="keywords" content="慕课网，慕课官网，MOOC，移动开发，IT技能培训，免费编程视频，php开发教程，web前端开发，在线编程学习，html5视频教程，css教程，ios开发培训，安卓开发教程">
    <meta name="description" content="慕课网（IMOOC）是学习编程最简单的免费平台。慕课网提供了丰富的移动端开发、php开发、web前端、html5教程以及css3视频教程等课程资源。它富有交互性及趣味性，并且你可以和朋友一起编程。">



    <script src="./course/push.js"></script><script src="./course/rt.js" async="" type="text/javascript"></script><script type="text/javascript">

        var OP_CONFIG={"module":"u","page":"courses","userInfo":{"uid":3057710,"nickname":"\u518d\u6253\u5c0f\u602a\u517d","head":"http:\/\/img.mukewang.com\/user\/533e55d10001c34d02000200-80-80.jpg","usertype":"1","roleid":0}};
        var isLogin = 1;
        var is_choice = "";
        var seajsTimestamp="v=201603251711";
        var ownName="1749537612@qq.com"

    </script>


    <link rel="stylesheet" href="./course/layer.css">



    <link rel="stylesheet" href="./course/a.css" type="text/css">
    <script src="./course/jquery.js" async="" charset="utf-8"></script><script src="./course/seajs-text.js" async="" charset="utf-8"></script><script src="./course/common.js" async="" charset="utf-8"></script><script src="./course/string.js" async="" charset="utf-8"></script><script src="./course/suggest.js" async="" charset="utf-8"></script><script src="./course/store.js" async="" charset="utf-8"></script><script src="./course/json.js" async="" charset="utf-8"></script><script src="./course/im.js" async="" charset="utf-8"></script><script src="./course/courses.js" async="" charset="utf-8"></script><script src="./course/socket.js" async="" charset="utf-8"></script><script src="./course/u_common.js" async="" charset="utf-8"></script><script src="./course/layer.js" async="" charset="utf-8"></script><script src="./course/share.js"></script><link href="./course/share_style0_16.css" rel="stylesheet"></head>
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

               <?php echo $arr[0]["pname"]?>
            </p>
            <p class="user-desc"></p>
            <div class="study-info clearfix">
                <div class="item study-time">
                    <em> <?php echo $arr[0]['shichang']?></em><span>学习时长</span>
                </div>
                <div class="item integral">
                    <a href="http://www.imooc.com/u/3057710/credit"><em><?php echo $arr[0]['jifen']?></em><span>赚取积分</span></a>

                </div>
                <div class="item experience">
                    <a href="http://www.imooc.com/u/3057710/experience"><em><?php echo $arr[0]['jingyan']?></em><span>获得经验</span></a>
                </div>
            </div><!--.study-info end-->
        </div><!-- .user-info end -->
    </div><!-- .big-pic end -->
    <div class="wrap">
        <div style="position: absolute; left: 0px; top: -175px;" class="slider">
            <div class="user-pic">
                <div class="user-pic-bg"></div><!--user-pic-big end-->
                <img class="img" src="<?php echo $brr[0]['u_photo']?>" alt="">

                <div style="display: block;" class="set-btn">
                    <a href="setprofile"><i class="icon-set"></i>

                    </a>
                </div>

            </div>

            <ul>
                <li><a href="courses" class="active"><i class="icon-tick"></i><span>课程</span><b class="icon-drop_right"></b></a></li>
                <!--                                     <li><a href="/u/3057710/szcourses/list" ><i class="icon-shizhan"></i><span>实战</span><b class="icon-drop_right"></b></a></li>

                             -->
                <li><a href="http://www.imooc.com/u/3057710/plans"><i class="icon-plan"></i><span>计划</span><b class="icon-drop_right"></b></a></li>
                <li><a href="http://www.imooc.com/u/3057710/bbs"><i class="icon-yuanwen"></i><span>猿问</span><b class="icon-drop_right"></b></a></li>
                <li><a href="setarticle"><i class="icon-blog"></i><span>文章</span><b class="icon-drop_right"></b></a></li>
                <li><a href="http://www.imooc.com/u/3057710/wikis"><i class="icon-wiki"></i><span>wiki</span><b class="icon-drop_right"></b></a></li>
            </ul>
        </div><!-- .slider end -->
        <div class="u-container">
            <div class="c-tab clearfix">
                <div class="tool-left l">
                    <a href="courses" class="sort-item active">最近学习</a>
                    <a href="http://www.imooc.com/u/3057710/courses?sort=follow" class="sort-item ">我的关注</a>
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
                            <li><a data-id="0" href="http://www.imooc.com/u/3057710/courses?sort=time&amp;skill_id=0">全部课程</a></li>
                            <li><a data-id="1" href="http://www.imooc.com/u/3057710/courses?sort=time&amp;skill_id=1">PHP</a></li>
                            <li><a data-id="7" href="http://www.imooc.com/u/3057710/courses?sort=time&amp;skill_id=7">HTML/CSS</a></li>
                            <li><a data-id="44" href="http://www.imooc.com/u/3057710/courses?sort=time&amp;skill_id=44">JavaScript</a></li>
                            <li><a data-id="219" href="http://www.imooc.com/u/3057710/courses?sort=time&amp;skill_id=219">jQuery</a></li>
                            <li><a data-id="220" href="http://www.imooc.com/u/3057710/courses?sort=time&amp;skill_id=220">JAVA</a></li>
                        </ul>

                    </div>
                </div>
            </div>

            <div class="js-course-list my-space-course study-tl">

                <?php foreach($brr as $k=>$v){
                ?>

                <div class="clearfix tl-item  tl-item-first">
			            <span class="time">

                <em><?php echo $v['x_time']?></em>
            </span>
                    <div class="course-list course-list-m">
                        <ul class="clearfix">
                            <li class="course-one" data-courseid="530" data-uid="3057710">
                                <div class="course-list-img l">
                                    <a href="aa?k_id=<?php echo $v['dd'][0]['zhang'][0]['k_id']?>" target="_blank">
                                        <!-- foreach($v['dd'] as $kk=>$vv){?-->
                                        <img alt="" src="./img/<?php echo $v['dd'][0]['zhang'][0]['course'][0]['c_img']?>" height="113" width="200">
                                    </a>
                                </div>
                                <div class="course-list-cont">
                                    <h3 class="study-hd">
                                        <a href="http://www.imooc.com/learn/530" target="_blank"><?php echo $v['dd'][0]['zhang'][0]['course'][0]['c_name']?></a>

                                        <span class="i-new">更新完毕</span>
                                        <!-- 更新完毕 -->
                                        <!-- 关注和删除 -->
                                        <div class="share-box clearfix">
                                            <div class="show-btn"><i class="icon-down2"></i></div>
                                            <div class="share-box-con courses-r">
                                                <a href="javascript:;" title="关注" class="follow custom_f"><i class="icon icon-heart"></i></a>
                                                <a href="javascript:;" title="删除" class="del"><i class="icon icon-notdisplay"></i></a>

                                            </div>
                                        </div>
                                    </h3>
                                    <div class="study-points">
                                        <span class="i-left span-common">已学0%</span>
                                        <span class="i-mid span-common">用时 <?php echo $v['x_atime']?></span>
                                        <span class="i-right span-common">学习至<?php echo $v['dd'][0]['v_title']?></span>
                                    </div>
                                    <div class="catog-points">
                                        <span class="i-left span-common"><a href="http://www.imooc.com/u/3057710/course/530/notes">笔记 <i><?php echo $v['biji']?></i></a></span>
                                        <span class="i-mid span-common"><a href="http://www.imooc.com/u/3057710/course/530/codes">代码 <i><?php echo $v['daima']?></i></a></span>
                                        <span class="i-right span-common"><a href="http://www.imooc.com/u/3057710/course/530/questions">问答 <i><?php echo $v['wenda']?></i></a></span>

                                        <a href="poh?v_id=<?php echo $v['v_id']?>" target="_blank" class="btn-red continute-btn">继续学习</a>

                                    </div>
                                </div>


                            </li>
                        </ul>
                    </div>
                </div>

                <?php
                    }
                    ?>
            </div>
            <!-- 分页 -->
            <div class="qa-comment-page">
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
<script src="./course/ssologin.js"></script>
<script type="text/javascript" src="./course/sea.js"></script>
<script type="text/javascript" src="./course/sea_config.js"></script>
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
    </script><script src="./course/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f0cfcccd7b1393990c78efdeebff3968" target="_blank"><img src="./course/21.gif" height="20" border="0" width="20"></a>
    <script>
        (function(){
            var bp = document.createElement('script');
            bp.src = '//push.zhanzhang.baidu.com/push.js';
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
</div><script src="./course/user.htm" type="text/javascript"></script><script src="./course/iplookup.php" type="text/javascript"></script>


</body></html>