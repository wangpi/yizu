<!DOCTYPE html>
<!-- saved from url=(0030)http://www.imooc.com/learn/530 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>
jQuery基础修炼圣典—DOM篇_技术学习教程_慕课网
</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="77103107776157736375">
<meta property="wb:webmaster" content="c4f857219bfae3cb">
<meta http-equiv="Access-Control-Allow-Origin" content="*">
<meta http-equiv="Cache-Control" content="no-transform ">

<meta name="Keywords" content="">


<meta name="Description" content="jQuery基础课程总共分为4个部分，此为第二个部分—DOM篇。此部分包含了对节点各种jQuery的操作。">
<script src="./go/push.js"></script><script type="text/javascript" async="" src="./go/rt.js"></script><script type="text/javascript">

      var OP_CONFIG={"module":"course","page":"learn"};
  var isLogin = 0;
var is_choice = "";
  var seajsTimestamp="v=201603111036";
    var ownName="928106762@qq.com"
  
</script>


<script>
/*学习页通用配置*/
var GC = {
  course: {
    id: 530,
    name: 'jQuery基础修炼圣典—DOM篇',
    pic: 'http://img.mukewang.com/56381cc60001456906000338-240-135.jpg',
    video_url: ''
  },
  classmates: 20 // 你的同学一页显示数量
};
</script>



<link rel="stylesheet" href="./go/saved_resource" type="text/css">
<script charset="utf-8" async="" src="./go/jquery.js"></script><script charset="utf-8" async="" src="./go/seajs-text.js"></script><script charset="utf-8" async="" src="./go/common.js"></script><script src="./go/share.js"></script><script charset="utf-8" async="" src="./go/string.js"></script><script charset="utf-8" async="" src="./go/suggest.js"></script><script charset="utf-8" async="" src="./go/store.js"></script><script charset="utf-8" async="" src="./go/json.js"></script><script charset="utf-8" async="" src="./go/im.js"></script><script charset="utf-8" async="" src="./go/learn.js"></script><link rel="stylesheet" href="./go/share_style0_16.css"><script charset="utf-8" async="" src="./go/socket.io.min.js"></script><script charset="utf-8" async="" src="./go/course_common.js"></script><script charset="utf-8" async="" src="./go/course_collection.js"></script><script charset="utf-8" async="" src="./go/jquery.progress.js"></script><script charset="utf-8" async="" src="./go/layer.min.js"></script><link charset="utf-8" rel="stylesheet" href="./go/layer.css"><script charset="utf-8" async="" src="./go/login-regist.js"></script><script charset="utf-8" async="" src="./go/placeholder.js"></script><script charset="utf-8" async="" src="./go/modal.button.js"></script><script charset="utf-8" async="" src="./go/validate.js"></script><script charset="utf-8" async="" src="./go/autocomplete.js"></script><link charset="utf-8" rel="stylesheet" href="./go/poplogin-less.css"></head>
<body>

@extends('layouts.master')
@section('sidebar')
    @parent


<div id="main">


<div class="course-infos">
  <div class="w pr">
    <div class="path">  
        <a href="http://www.imooc.com/course/list">课程</a>
                <i class="path-split">\</i><a href="http://www.imooc.com/course/list?c=fe">前端开发</a>
                        <i class="path-split">\</i><a href="http://www.imooc.com/course/list?c=jquery">jQuery</a>
                <i class="path-split">\</i><span>jQuery基础修炼圣典—DOM篇</span>
    </div>
    <div class="hd">
      <h2 class="l">jQuery基础修炼圣典—DOM篇</h2>
          </div>
    <div class="statics clearfix">
      <div class="static-item ">
        <span class="meta-value"><strong>初级</strong></span>
        <span class="meta">难度</span>
        <em></em>
      </div>
      <div class="static-item static-time">
        <span class="meta-value"><strong> 2</strong>小时<strong>16</strong>分</span>
        <span class="meta">时长</span>
        <em></em>
      </div>
      <div class="static-item">
        <span class="meta-value"><strong>2818</strong></span>
        <span class="meta">学习人数</span>
        <em></em>
      </div>
      <!-- <div class="static-item">
        <span class="meta-value"><strong>4.8分</strong></span>
        <span class="meta">
          <i class="meta-star"></i>
          <i class="meta-star"></i>
          <i class="meta-star"></i>
        </span>
        <em></em>
      </div> -->
    </div>
    <div class="extra">
      <!-- credit -->
      <div class="share-rl-tips share-posi js-share-statue" style="display: none;">
          <span>分享即可 +</span><strong>1积分</strong>
          <span class="rule-arrow"></span>
      </div>
      <!-- share -->
      <div class="share-action r bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1458355050385">
        分享
        <a href="javascript:;" class="share wx js-share" data-cmd="weixin" title="分享到微信"></a>
        <a href="javascript:;" class="share qq js-share" data-cmd="qzone" title="分享到QQ空间"></a>
        <a href="javascript:;" class="share sina js-share" data-cmd="tsina" title="分享到新浪微博"></a>
      </div>
      <i class="split-line r"></i>
            <a href="javascript:;" data-cmd="follow" class="follow-action r js-follow-action" data-cid="530">
        关注
      </a>
          </div>
  </div>
  <div class="info-bg" id="js-info-bg">
    <div class="cover-img-wrap">
      <img data-src="http://img.mukewang.com/56381cc700011a4d06000338.jpg" alt="" style="display: none" id="js-cover-img">
    </div>
    <div class="cover-mask"></div>
  <canvas width="1903" height="240" class="cover-canvas" id="js-cover-canvas"></canvas></div>
</div>
<div class="course-info-main clearfix w">
  
  <div class="info-bar clearfix">
  <a href="javascript:;"  class="btn-red start-study-btn r J-learn-course  btn-primary btn-large theme-login">开始学习</a>
      <div class="score-info">
    <div class="satisfaction-degree-info">
        <h3>满意度评分</h3>
        <h4>10.0</h4>
        <div class="star-box">
                                                <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                                            </div>
    </div><!--satisfaction-degree-info end-->
        <div class="info-box clearfix">
        <span>发表评价即可 <em>+1积分</em></span>
        <a href="http://www.imooc.com/course/coursescore?id=530" target="_blank">立即去评价</a>
    </div>
            <p class="person-num noLogin"><a href="http://www.imooc.com/course/coursescore?id=530" target="_blank">4人评价</a></p>
    </div><!--score-info end--></div>
  <div class="content-wrap clearfix">
    <div class="content">
      <div class="mod-tab-menu">
  <ul class="course-menu clearfix">
    <li><a class="ui-tabs-active active" id="learnOn" href="./go/jQuery基础修炼圣典—DOM篇_技术学习教程_慕课网.html"><span>章节</span></a></li>
    <li><a id="commentOn" class="" href="http://www.imooc.com/comment/530"><span>评论</span></a></li>
    <li><a id="qaOn" class="" href="http://www.imooc.com/qa/530"><span>问答</span></a></li>
    <li><a id="noteOn" class="" href="http://www.imooc.com/note/530?sort=last"><span>笔记</span></a></li>
      <!--
        <li><a id="wikiOn" class="" href="/wiki/530">WIKI</a></li>
        -->
  </ul>
  </div>

      

<div class="mod-chapters">
          <?php
                foreach ($re as $key => $value) {
            ?>    
            <div class="chapter chapter-active">
                 <h3 class='lll' >
                        <span class="icon-plus"></span>
                        <strong class='aaa' opp="<?php echo $value['z_id'];?>"><i class="state-expand"></i><?php echo $value['z_title']?></strong>
                </h3>
                <h4 class="video" value='4'>
                       
                            
                </h4>
            </div>
        <?php
            }
        ?> 
   

</div>
    <div class="aside r">
      <div class="bd">

      <div class="box mb40">
      <h4>讲师提示</h4>
            <div class="teacher-info">
        <a href="http://www.imooc.com/u/290139/courses?sort=publish" target="_blank">
          <img src="./go/54bf47ea000132d002200220-80-80.jpg" width="80" height="80">
        </a>
        <span class="tit">
          <a href="http://www.imooc.com/u/290139/courses?sort=publish" target="_blank">Aaron艾伦</a><i class="icon-imooc"></i>
        </span>
        <span class="job">Web前端工程师</span>
      </div>
                  <div class="course-info-tip">
                <dl class="first">
          <dt>课程须知</dt>
          <dd class="autowrap">1、有HTML/CSS基础
2、有JavaScript基础</dd>
        </dl>
                        <dl>
          <dt>老师告诉你能学到什么？</dt>
          <dd class="autowrap">1、jQuery的语法 
2、jQuery节点操作</dd>
        </dl>
              </div>
        </div>
  
      
</div>    </div>
  </div>
  <div class="clear"></div>

</div>

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
<script src="./go/ssologin.js"></script>
<script type="text/javascript" src="./go/sea.js"></script>
<script type="text/javascript" src="./go/sea_config.js"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>

 
<script type="text/javascript">
  (function(){
    var imgPic = GC.course.pic || 'http://img.mukewang.com/static/img/common/logo.png',
        text = '我正在参加@慕课网  的一门课程【' + GC.course.name + '】，很不错哦！快来一起学习吧！', //节名称
        url = 'http://www.mukewang.com' + window.location.pathname;

    window._bd_share_config = {
        "common": {
            "bdUrl": url,
            "bdSnsKey": {
              'tsina':'2788596354'
            },
            "bdText": text,
            "bdMini": "2",
            "bdMiniList": false,
            "bdPic": imgPic,
            "bdStyle": "0",
            "bdSize": "16"
        },
        "share": {}
    };
    with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
  })();
</script>
<div class="mask"></div>


<div style="display: none">
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0cfcccd7b1393990c78efdeebff3968' type='text/javascript'%3E%3C/script%3E"));
(function (d) {
window.bd_cpro_rtid="rHT4P1c";
var s = d.createElement("script");s.type = "text/javascript";s.async = true;s.src = location.protocol + "//cpro.baidu.com/cpro/ui/rt.js";
var s0 = d.getElementsByTagName("script")[0];s0.parentNode.insertBefore(s, s0);
})(document);
</script><script src="./go/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f0cfcccd7b1393990c78efdeebff3968" target="_blank"><img border="0" src="./go/21.gif" width="20" height="20"></a>
<script>
(function(){
    var bp = document.createElement('script');
    bp.src = '//push.zhanzhang.baidu.com/push.js';
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</div>


<script type="text/javascript" src="./go/user"></script><script type="text/javascript" src="./go/iplookup.php"></script>
<script src="./go/jquery-1.8.3.js"></script>    
<script>
    $(".aaa").click( function () { 
        var aaa=$(this).attr("opp");
        var ooo=$(this).parent().next();
        var bbb='';
        $.ajax({
           type: "post",
           url: "/bl",
           data: "name="+aaa,
           dataType:"json",
           success: function(msg){
            //alert(msg);
            for(i in msg){
                bbb+=" <h4><a target='_blank' href='oo?id="+msg[i]['v_id']+"' class='J-media-item studyvideo'>"+msg[i]['v_title']+"</a></h4>"
            } 
              ooo.html(bbb);
            }
        });
    });
</script> 
<link rel="stylesheet" href="./go/lanrenzhijia.css" media="all">
<script src="./go/jquery.min.js"></script>  
<script>
jQuery(document).ready(function($) {
    $('.theme-login').click(function(){
        $.ajax({
               type: "GET",
               url: "oo",
               success: function(msg){
                    if(msg==1){
                         $('.theme-popover-mask').fadeIn(100);
                         $('.theme-popover').slideDown(200);
                    }
                    else{
                        window.location.href='poh';
                    }
               }
        });
       
    })
    $('.theme-poptit .close').click(function(){
        $('.theme-popover-mask').fadeOut(100);
        $('.theme-popover').slideUp(200);
    })
    

})
</script>
<div class="theme-popover">
     <div class="theme-poptit">
          <a href="javascript:;" title="关闭" class="close">×</a>
          <h3>登录 是一种态度</h3>
     </div>
     <div class="theme-popbod dform">
           <form class="theme-signin" name="loginform" action="pl" method="post">
                <ol>
                     <li><h4>你必须先登录！</h4></li>
                     <li><strong>用户名：</strong><input class="ipt" type="text" name="log" value="lanrenzhijia" size="20" /></li>
                     <li><strong>密码：</strong><input class="ipt" type="password" name="pwd" value="***" size="20" /></li>
                     <li><input class="btn btn-primary" type="submit" name="submit" value=" 登 录 " /></li>
                </ol>
           </form>
     </div>
</div>
<div class="theme-popover-mask"></div>
</body></html>