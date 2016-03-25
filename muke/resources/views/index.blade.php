<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>
            前端开发工具技巧介绍—Sublime篇
    </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="77103107776157736375">
<meta property="wb:webmaster" content="c4f857219bfae3cb">
<meta http-equiv="Access-Control-Allow-Origin" content="*">
<meta http-equiv="Cache-Control" content="no-transform ">

<meta name="Keywords" content="">

<meta name="description" content="慕课网（IMOOC）是学习编程最简单的免费平台。慕课网提供了丰富的移动端开发、php开发、web前端、html5教程以及css3视频教程等课程资源。它富有交互性及趣味性，并且你可以和朋友一起编程。">



<script src="./index/push.js"></script><script src="./index/rt.js" async="" type="text/javascript"></script><script type="text/javascript">

var OP_CONFIG={"module":"course","page":"view"};
var isLogin = 0;
var is_choice = "";
var seajsTimestamp="v=201603111036";
var ownName="928106762@qq.com"
  
</script>


<script>
/*学习页通用配置*/
var GC = {
  course: {
    id: 40,
    name: '前端开发工具技巧介绍—Sublime篇',
    pic: './index/52e4e1b20001e6df06000338-240-135.jpg',
    video_url: 'http://v1.mukewang.com/d3ad7480-c1e0-4446-8ea9-eb6700678484/H.mp4'
  },
  classmates: 20 // 你的同学一页显示数量
};
</script>



<link rel="stylesheet" href="./index/a.css" type="text/css">
<script src="./index/jquery_002.js" async="" charset="utf-8"></script><script src="./index/seajs-text.js" async="" charset="utf-8"></script><script src="./index/common.js" async="" charset="utf-8"></script><script src="./index/share.js"></script><script src="./index/string.js" async="" charset="utf-8"></script><script src="./index/suggest.js" async="" charset="utf-8"></script><script src="./index/store.js" async="" charset="utf-8"></script><script src="./index/json.js" async="" charset="utf-8"></script><script src="./index/im.js" async="" charset="utf-8"></script><script src="./index/view.js" async="" charset="utf-8"></script><script src="./index/socket.js" async="" charset="utf-8"></script><link href="./index/share_style0_16.css" rel="stylesheet"><script src="./index/course_common.js" async="" charset="utf-8"></script><script src="./index/course_collection.js" async="" charset="utf-8"></script><script src="./index/jquery.js" async="" charset="utf-8"></script><script src="./index/layer.js" async="" charset="utf-8"></script><link href="./index/layer.css" rel="stylesheet" charset="utf-8"></head>
<body>

<div id="header">
    <div class="page-container" id="nav">
        <div id="logo" class="logo"><a href="http://www.imooc.com/" target="_self" class="hide-text">慕课网</a></div>
        <div class="g-menu-mini l">
            <a href="#" class="menu-ctrl">
                <i class="icon-menu"></i>
            </a>
            <ul class="nav-item l">
                <li>
                    <a href="http://www.imooc.com/course/list" target="_self">课程</a>
                </li>
                <li><a href="http://www.imooc.com/course/program" target="_self">计划</a></li>
                <li><a href="http://www.imooc.com/wenda" target="_self">猿问</a></li>
                <li><a href="http://www.imooc.com/article" target="_self">文章</a></li>
        <!--         <li><a href="/wiki"  target="_self">WIKI</a></li> -->
                            </ul>
        </div>
                <div id="login-area">
            <ul class="header-unlogin clearfix">
                <li class="header-app">
                    <a href="http://www.imooc.com/mobile/app">
                        <span class="icon-appdownload"></span>
                    </a>
                    <div class="QR-download">
                        <p id="app-text">慕课网APP下载</p>
                        <p id="app-type">iPhone / Android / iPad</p>
                        <img src="./index/QR-code.jpg">
                    </div>
                </li>
                <li class="header-signin">
                    <a href="#" id="js-signin-btn">登录</a>
                </li>
                <li class="header-signup">
                    <a href="#" id="js-signup-btn">注册</a>
                </li>
            </ul>
        </div>
                <!--
        <div class="app-down-area r">
            <a href="/mobile/app">
                <i class="header-app-icon"></i>慕课APP
            </a>
        </div>
        -->
        
        
        <div class="search-warp clearfix" style="min-width: 32px; height: 60px;">
            <div class="search-area min" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." autocomplete="off" type="text">
                <input class="btn_search" data-search-btn="search-btn" type="hidden">
                <ul class="search-area-result" data-suggest-result="suggest-result">
                </ul>
            </div>
            <div class="showhide-search" data-show="no"><i class="icon-search"></i></div>
        </div>
    </div>
</div>


<div id="main">

<div class="course-infos">
  <div class="w pr">
    <div class="path">  
        <a href="http://www.imooc.com/course/list">课程</a>
                <i class="path-split">\</i><a href="http://www.imooc.com/course/list?c=fe">前端开发</a>
                        <i class="path-split">\</i><a href="http://www.imooc.com/course/list?c=fetool">前端工具</a>
                <i class="path-split">\</i><span>前端开发工具技巧介绍—Sublime篇</span>
    </div>
    <div class="hd">
      <h2 class="l">前端开发工具技巧介绍—Sublime篇</h2>
            <a href="javascript:;" class="l video-desc-trigger" id="js-video-trigger">
        <i class="ic-video"></i>视频介绍
      </a>
          </div>
    <div class="statics clearfix">
      <div class="static-item ">
        <span class="meta-value"><strong>初级</strong></span>
        <span class="meta">难度</span>
        <em></em>
      </div>
      <div class="static-item static-time">
        <span class="meta-value"><strong> 1</strong>小时<strong> 0</strong>分</span>
        <span class="meta">时长</span>
        <em></em>
      </div>
      <div class="static-item">
        <span class="meta-value"><strong>80143</strong></span>
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
      <div style="display: none;" class="share-rl-tips share-posi js-share-statue">
          <span>分享即可 +</span><strong>1积分</strong>
          <span class="rule-arrow"></span>
      </div>
      <!-- share -->
      <div data-bd-bind="1458288932450" class="share-action r bdsharebuttonbox bdshare-button-style0-16">
        分享
        <a title="分享到微信" href="javascript:;" class="share wx js-share" data-cmd="weixin"></a>
        <a title="分享到QQ空间" href="javascript:;" class="share qq js-share" data-cmd="qzone"></a>
        <a title="分享到新浪微博" href="javascript:;" class="share sina js-share" data-cmd="tsina"></a>
      </div>
      <i class="split-line r"></i>
            <a href="javascript:;" data-cmd="follow" class="follow-action r js-follow-action" data-cid="40">
        关注
      </a>
          </div>
  </div>
  <div class="info-bg" id="js-info-bg">
    <div class="cover-img-wrap">
      <img data-src="http://img.mukewang.com/55af49b40001c2c506000338.jpg" alt="" style="display: none" id="js-cover-img">
    </div>
    <div class="cover-mask"></div>
  <canvas id="js-cover-canvas" class="cover-canvas" height="240" width="1903"></canvas></div>
</div>
<div class="course-info-main clearfix w">
  <div class="info-bar clearfix">
    <div class="info-bar-box">
      
                                                                        
                                                                                  
                                                                        
                                                                        <a href="bbb?id=<?php echo $id;?>" class="btn-red start-study-btn r">体验学习</a>
            <div class="score-info">
    <div class="satisfaction-degree-info">
        <h3>满意度评分</h3>
        <h4>9.7</h4>
        <div class="star-box">
                                                <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                                            </div>
    </div><!--satisfaction-degree-info end-->
        <div class="condition-box">
        <div class="condition">
            <h3>内容实用</h3>
            <p>10.0</p>
        </div>
        <div class="condition">
            <h3>通俗易懂</h3>
            <p>9.6</p>
        </div>
        <div class="condition">
            <h3>逻辑清晰</h3>
            <p>9.4</p>
        </div>
    </div><!--condition-box end-->
            <p class="person-num noLogin"><a href="javascript:;" target="_blank">178人评价</a></p>
    </div><!--score-info end-->    </div><!--info-bar-box end-->
  </div>
  <div class="content-wrap">
    <div class="content">
      <div class="course-brief">
        <h3 class="ctit">课程介绍</h3>
        <p class="auto-wrap">本课程主要对Sublime Text这款前端开发工具中的非常优秀的特性进行介绍，命令模式、Goto anything、多行游标等这些能极大提高你的生产力，不愧是码农进阶必备神器。</p>
      </div>
      <div class="course-outline">
        <div class="bar clearfix">
          <h3 class="ctit l">课程提纲</h3>
          <ul class="tools l">
            <li class="l">
              13<i class="icon-video"></i><span>视频</span>
            </li>
            <li class="l">
              3<i class="icon-test"></i><span>练习题</span>
            </li>
            <li class="l">
              0<i class="icon-code"></i><span>编程练习</span>
            </li>
          </ul>
        </div>
        <div class="outline-list">
                      <ul> 
                    <?php
                        foreach($name as $k=>$v){
                    ?>
                            <li class="chapter clearfix ">
                  <i class="chapter-icon"></i>
                  <div class="chapter-bd l">
                   
                      <h5 class="name"><?php echo $v['z_title'];?></h5>
                      <p class="desc"><?php echo $v['z_desc'];?></p>

                  </div>
                </li>
                       <?php
                        }
                    ?>      
                          </ul>
                              
      </div>
      <div class="evaluation-list">
        <h3>课程评价</h3>
        <div class="evaluation-info clearfix">
          <p class="satisfaction">满意度评分：<em>9.7</em></p>
          <div class="star-box">
                                                <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                        <i class="icon-star2 active"></i>
                                              </div><!--star-box end-->
          <p>内容实用：10.0</p>
          <p>通俗易懂：9.6</p>
          <p>逻辑清晰：9.4</p>
          <p class="person_num"><em>178</em>位同学参与评价</p>
        </div><!--evaluation-info end-->
                            <div class="evaluation">
            <div class="evaluation-con">
              <a href="http://www.imooc.com/space/u/uid/3060254" class="img-box">
                <img src="./index/54584cec0001f21302200220-100-100.jpg" alt="我要做一个大侠">
              </a>
              <div class="content-box">
                <div class="user-info clearfix">
                  <a href="http://www.imooc.com/space/u/uid/3060254" class="username">我要做一个大侠</a>
                  <div class="star-box">
                                                            <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                                          </div>
                </div><!--user-info end-->
                <p class="content">好评，工具很好用</p>
                <div class="info">
                  <span class="time">时间：4小时前</span>
                </div>
              </div><!--content end-->
            </div><!--evaluation-con end-->

                      </div><!--evaluation end-->
                    <div class="evaluation">
            <div class="evaluation-con">
              <a href="http://www.imooc.com/space/u/uid/3053241" class="img-box">
                <img src="./index/56e97f170001417d02970296-100-100.jpg" alt="队友挂机我选1V5">
              </a>
              <div class="content-box">
                <div class="user-info clearfix">
                  <a href="http://www.imooc.com/space/u/uid/3053241" class="username">队友挂机我选1V5</a>
                  <div class="star-box">
                                                            <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                                          </div>
                </div><!--user-info end-->
                <p class="content">知道了sublime的界面大概，以及插件的安装和寻找，非常实用</p>
                <div class="info">
                  <span class="time">时间：20小时前</span>
                </div>
              </div><!--content end-->
            </div><!--evaluation-con end-->

                      </div><!--evaluation end-->
                    <div class="evaluation">
            <div class="evaluation-con">
              <a href="http://www.imooc.com/space/u/uid/2961529" class="img-box">
                <img src="./index/56d40f160001ca7c01000100-100-100.jpg" alt="lingerr">
              </a>
              <div class="content-box">
                <div class="user-info clearfix">
                  <a href="http://www.imooc.com/space/u/uid/2961529" class="username">lingerr</a>
                  <div class="star-box">
                                                            <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                                          </div>
                </div><!--user-info end-->
                <p class="content">不错，感觉挺好的。快捷方式常用的没有讲全。</p>
                <div class="info">
                  <span class="time">时间：22小时前</span>
                </div>
              </div><!--content end-->
            </div><!--evaluation-con end-->

                      </div><!--evaluation end-->
                    <div class="evaluation">
            <div class="evaluation-con">
              <a href="http://www.imooc.com/space/u/uid/3042437" class="img-box">
                <img src="./index/545865b90001b1d102200220-100-100.jpg" alt="yo_yo_">
              </a>
              <div class="content-box">
                <div class="user-info clearfix">
                  <a href="http://www.imooc.com/space/u/uid/3042437" class="username">yo_yo_</a>
                  <div class="star-box">
                                                            <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                                          </div>
                </div><!--user-info end-->
                <p class="content">简单易懂，内容实用</p>
                <div class="info">
                  <span class="time">时间：1天前</span>
                </div>
              </div><!--content end-->
            </div><!--evaluation-con end-->

                      </div><!--evaluation end-->
                    <div class="evaluation">
            <div class="evaluation-con">
              <a href="http://www.imooc.com/space/u/uid/2946840" class="img-box">
                <img src="./index/56cfa7bc00011aef01000100-100-100.jpg" alt="qq_明天你好_26">
              </a>
              <div class="content-box">
                <div class="user-info clearfix">
                  <a href="http://www.imooc.com/space/u/uid/2946840" class="username">qq_明天你好_26</a>
                  <div class="star-box">
                                                            <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                                          </div>
                </div><!--user-info end-->
                <p class="content"></p>
                <div class="info">
                  <span class="time">时间：2天前</span>
                </div>
              </div><!--content end-->
            </div><!--evaluation-con end-->

                      </div><!--evaluation end-->
                    <div class="evaluation">
            <div class="evaluation-con">
              <a href="http://www.imooc.com/space/u/uid/2947992" class="img-box">
                <img src="./index/56cfe5100001c1cf01800180-100-100.jpg" alt="ihaveexisted">
              </a>
              <div class="content-box">
                <div class="user-info clearfix">
                  <a href="http://www.imooc.com/space/u/uid/2947992" class="username">ihaveexisted</a>
                  <div class="star-box">
                                                            <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                                            <i class="icon-star2"></i>
                                      </div>
                </div><!--user-info end-->
                <p class="content">讲解细致，逻辑清晰。不过有时好像讲着讲着声音就变小了，总的来说是不错的视频，感谢分享。</p>
                <div class="info">
                  <span class="time">时间：2天前</span>
                </div>
              </div><!--content end-->
            </div><!--evaluation-con end-->

                      </div><!--evaluation end-->
                    <div class="evaluation">
            <div class="evaluation-con">
              <a href="http://www.imooc.com/space/u/uid/2887310" class="img-box">
                <img src="./index/56b354e00001395501000100-100-100.jpg" alt="Lelmoon">
              </a>
              <div class="content-box">
                <div class="user-info clearfix">
                  <a href="http://www.imooc.com/space/u/uid/2887310" class="username">Lelmoon</a>
                  <div class="star-box">
                                                            <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                                          </div>
                </div><!--user-info end-->
                <p class="content"></p>
                <div class="info">
                  <span class="time">时间：2天前</span>
                </div>
              </div><!--content end-->
            </div><!--evaluation-con end-->

                      </div><!--evaluation end-->
                    <div class="evaluation">
            <div class="evaluation-con">
              <a href="http://www.imooc.com/space/u/uid/3019509" class="img-box">
                <img src="./index/54584cfb0001308402200220-100-100.jpg" alt="Mingor丶">
              </a>
              <div class="content-box">
                <div class="user-info clearfix">
                  <a href="http://www.imooc.com/space/u/uid/3019509" class="username">Mingor丶</a>
                  <div class="star-box">
                                                            <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                                          </div>
                </div><!--user-info end-->
                <p class="content">不错  感觉挺好的</p>
                <div class="info">
                  <span class="time">时间：2天前</span>
                </div>
              </div><!--content end-->
            </div><!--evaluation-con end-->

                      </div><!--evaluation end-->
                    <div class="evaluation">
            <div class="evaluation-con">
              <a href="http://www.imooc.com/space/u/uid/2254946" class="img-box">
                <img src="./index/55d0d6490001b1ce04030258-100-100.jpg" alt="氽氽">
              </a>
              <div class="content-box">
                <div class="user-info clearfix">
                  <a href="http://www.imooc.com/space/u/uid/2254946" class="username">氽氽</a>
                  <div class="star-box">
                                                            <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                                          </div>
                </div><!--user-info end-->
                <p class="content">希望介绍更多实用的插件</p>
                <div class="info">
                  <span class="time">时间：2天前</span>
                </div>
              </div><!--content end-->
            </div><!--evaluation-con end-->

                      </div><!--evaluation end-->
                    <div class="evaluation">
            <div class="evaluation-con">
              <a href="http://www.imooc.com/space/u/uid/3046803" class="img-box">
                <img src="./index/56e7c629000161ff01800180-100-100.jpg" alt="黄某川">
              </a>
              <div class="content-box">
                <div class="user-info clearfix">
                  <a href="http://www.imooc.com/space/u/uid/3046803" class="username">黄某川</a>
                  <div class="star-box">
                                                            <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                                            <i class="icon-star2"></i>
                                        <i class="icon-star2"></i>
                                      </div>
                </div><!--user-info end-->
                <p class="content"></p>
                <div class="info">
                  <span class="time">时间：2天前</span>
                </div>
              </div><!--content end-->
            </div><!--evaluation-con end-->

                      </div><!--evaluation end-->
                    <div class="evaluation">
            <div class="evaluation-con">
              <a href="http://www.imooc.com/space/u/uid/2600125" class="img-box">
                <img src="./index/56ac8608000168ff04500472-100-100.jpg" alt="慕_女神">
              </a>
              <div class="content-box">
                <div class="user-info clearfix">
                  <a href="http://www.imooc.com/space/u/uid/2600125" class="username">慕_女神</a>
                  <div class="star-box">
                                                            <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                                          </div>
                </div><!--user-info end-->
                <p class="content">内容实用
    
通俗易懂
    
逻辑清晰</p>
                <div class="info">
                  <span class="time">时间：3天前</span>
                </div>
              </div><!--content end-->
            </div><!--evaluation-con end-->

                      </div><!--evaluation end-->
                    <div class="evaluation">
            <div class="evaluation-con">
              <a href="http://www.imooc.com/space/u/uid/1881458" class="img-box">
                <img src="./index/5535126f0001134400990100-100-100.jpg" alt="tesoki_Lin">
              </a>
              <div class="content-box">
                <div class="user-info clearfix">
                  <a href="http://www.imooc.com/space/u/uid/1881458" class="username">tesoki_Lin</a>
                  <div class="star-box">
                                                            <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                                          </div>
                </div><!--user-info end-->
                <p class="content"></p>
                <div class="info">
                  <span class="time">时间：3天前</span>
                </div>
              </div><!--content end-->
            </div><!--evaluation-con end-->

                      </div><!--evaluation end-->
                    <div class="evaluation">
            <div class="evaluation-con">
              <a href="http://www.imooc.com/space/u/uid/2102097" class="img-box">
                <img src="./index/56d86e46000167fe07400740-100-100.jpg" alt="Nealyang">
              </a>
              <div class="content-box">
                <div class="user-info clearfix">
                  <a href="http://www.imooc.com/space/u/uid/2102097" class="username">Nealyang</a>
                  <div class="star-box">
                                                            <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                                          </div>
                </div><!--user-info end-->
                <p class="content">赞一个，挺好的，但是基本都在ide做开发，这个还是很少用到的，</p>
                <div class="info">
                  <span class="time">时间：4天前</span>
                </div>
              </div><!--content end-->
            </div><!--evaluation-con end-->

                      </div><!--evaluation end-->
                    <div class="evaluation">
            <div class="evaluation-con">
              <a href="http://www.imooc.com/space/u/uid/2553748" class="img-box">
                <img src="./index/56404b7b0001205a01000100-100-100.jpg" alt="YangZiHong">
              </a>
              <div class="content-box">
                <div class="user-info clearfix">
                  <a href="http://www.imooc.com/space/u/uid/2553748" class="username">YangZiHong</a>
                  <div class="star-box">
                                                            <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                                          </div>
                </div><!--user-info end-->
                <p class="content">超级好用的记事本</p>
                <div class="info">
                  <span class="time">时间：4天前</span>
                </div>
              </div><!--content end-->
            </div><!--evaluation-con end-->

                      </div><!--evaluation end-->
                    <div class="evaluation">
            <div class="evaluation-con">
              <a href="http://www.imooc.com/space/u/uid/2998779" class="img-box">
                <img src="./index/533e4fc800012f3002000200-100-100.jpg" alt="cmlxxl">
              </a>
              <div class="content-box">
                <div class="user-info clearfix">
                  <a href="http://www.imooc.com/space/u/uid/2998779" class="username">cmlxxl</a>
                  <div class="star-box">
                                                            <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                        <i class="icon-star2 active"></i>
                                                          </div>
                </div><!--user-info end-->
                <p class="content"></p>
                <div class="info">
                  <span class="time">时间：5天前</span>
                </div>
              </div><!--content end-->
            </div><!--evaluation-con end-->

                      </div><!--evaluation end-->
                        </div><!--evaluation-list end-->
            <div class="more-evaluation"><a href="http://www.imooc.com/course/coursescore?id=40" target="_blank">查看更多评价</a></div>
          </div><!--content end-->
    <div class="aside r">
      <div class="bd">

      <div class="box mb40">
      <h4>讲师提示</h4>
            <div class="teacher-info">
        <a href="http://www.imooc.com/u/102154/courses?sort=publish" target="_blank">
          <img src="./index/52e4bdfc0001068e02190219-80-80.jpg" height="80" width="80">
        </a>
        <span class="tit">
          <a href="http://www.imooc.com/u/102154/courses?sort=publish" target="_blank">GreenBoots</a><i class="icon-imooc"></i>
        </span>
        <span class="job">Web前端工程师</span>
      </div>
                  <div class="course-info-tip">
                <dl class="first">
          <dt>课程须知</dt>
          <dd class="autowrap">1.具有前端开发经验；
2.对HTML+CSS+JavaScript内容熟悉掌握。</dd>
        </dl>
                        <dl>
          <dt>老师告诉你能学到什么？</dt>
          <dd class="autowrap">1.快速提高编辑水平；
2.增加网络开发专业能力。</dd>
        </dl>
              </div>
        </div>
  
      
</div>    </div>
  </div>
  <div class="clear"></div>

</div>
<!-- 视频介绍 -->
<div id="js-video-wrap" class="video pop-video" style="display:none">
    <div class="video_box" id="js-video"></div>
    <a href="javascript:;" class="pop-close icon-close"></a>
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
                        <li> <a href="http://www.imooc.com/about/friendly" target="_blank">友情链接</a></li>
                    </ul>
                </div>
                <p>Copyright © 2016 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>
            </div>
        </div>
    </div>
</div>
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
    <a class="elevator-top" href="javascript:;" style="display: none;" id="backTop"></a>
</div>



<!--script-->
<script src="./index/ssologin.js"></script>
<script type="text/javascript" src="./index/sea.js"></script>
<script type="text/javascript" src="./index/sea_config.js"></script>
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
</script><script src="./index/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f0cfcccd7b1393990c78efdeebff3968" target="_blank"><img src="./index/21.gif" border="0" height="20" width="20"></a>
<script>
(function(){
    var bp = document.createElement('script');
    bp.src = '//push.zhanzhang.baidu.com/push.js';
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</div>


<script src="./index/user.htm" type="text/javascript"></script><script src="./index/iplookup.php" type="text/javascript"></script></body></html>