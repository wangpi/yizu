<!DOCTYPE html>
<!-- saved from url=(0032)http://www.imooc.com/video/11173 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta property="qc:admins" content="77103107776553571676375">
<meta property="wb:webmaster" content="c4f857219bfae3cb">
<meta http-equiv="Access-Control-Allow-Origin" content="*">
<meta name="Keywords" content="">
<meta name="Description" content="超酷的互联网、IT技术免费学习平台，创新的网络一站式学习、实践体验；服务及时贴心，内容专业、有趣易学。专注服务互联网工程师快速成为技术高手！">

<title>需求分析和项目准备-慕课网</title>



<link rel="stylesheet" href="./blsh/layer.css">

<script type="text/javascript">
  var OP_CONFIG={"module":"course","page":"video","userInfo":{"uid":3056088,"nickname":"qq_\u522b\u6252\u6123\u6211_0","head":"http:\/\/img.mukewang.com\/user\/56e9f6a00001a0c901000100-80-80.jpg","usertype":"1","roleid":0}};
  var tplDef={
	"url_space_u":"/space/u",
	"url_space_index":"/space/index",
    "url_space_course":"/space/course",
    "myclub_rule":"/about/faq?t=3",
    "url_course_qadetail":"/qadetail",
    "media_id":"11173"
  }
  var seajsTimestamp="v=201603211539";
var courseName="PHP实现手机归属地查询";
</script>



<script type="text/javascript">
var pageInfo = { mid : 11173 };
var video_id= 10026;
var course_id = 604;
var chapter_id = 2976;
var ispreview ='0';
var videoTitle = "1-1 需求分析和项目准备";
</script>

<link rel="stylesheet" href="./blsh/saved_resource" type="text/css">
<script charset="utf-8" async="" src="./blsh/jquery.js"></script><script charset="utf-8" async="" src="./blsh/seajs-text.js"></script><script charset="utf-8" async="" src="./blsh/common.js"></script><script charset="utf-8" async="" src="./blsh/string.js"></script><script charset="utf-8" async="" src="./blsh/suggest.js"></script><script charset="utf-8" async="" src="./blsh/store.js"></script><script charset="utf-8" async="" src="./blsh/json.js"></script><script charset="utf-8" async="" src="./blsh/im.js"></script><script charset="utf-8" async="" src="./blsh/video.js"></script><script charset="utf-8" async="" src="./blsh/socket.io.min.js"></script><script charset="utf-8" async="" src="./blsh/jwplayer.js"></script><script charset="utf-8" async="" src="./blsh/jquery.nanoscroller.js"></script><script charset="utf-8" async="" src="./blsh/drag.js"></script><script charset="utf-8" async="" src="./blsh/animate-achievement.js"></script><script charset="utf-8" async="" src="./blsh/course_detail_common.js"></script><script charset="utf-8" async="" src="./blsh/verify-code.js"></script><script charset="utf-8" async="" src="./blsh/guideLayer.js"></script><script charset="utf-8" async="" src="./blsh/layer.min.js"></script><script charset="utf-8" async="" src="./blsh/jquery.scrollbar.js"></script><link charset="utf-8" rel="stylesheet" href="./blsh/jquery.scrollbar.css"><script charset="utf-8" async="" src="./blsh/placeholder.js"></script><script charset="utf-8" async="" src="./blsh/autocomplete.js"></script><script charset="utf-8" async="" src="./blsh/wiki-search.js"></script><script charset="utf-8" async="" src="./blsh/course_note.js"></script><script charset="utf-8" async="" src="./blsh/ajax-right-recommend.js"></script><script charset="utf-8" async="" src="./blsh/ajax-pl-list.js"></script><script charset="utf-8" async="" src="./blsh/ajax-otherscode-list.js"></script><script charset="utf-8" async="" src="./blsh/ajax-discuss-list.js"></script><script charset="utf-8" async="" src="./blsh/ajax-note-list.js"></script><script charset="utf-8" async="" src="./blsh/ajax-wiki-list.js"></script><script charset="utf-8" async="" src="./blsh/doT.js"></script><script charset="utf-8" async="" src="./blsh/paging.js"></script><script charset="utf-8" async="" src="./blsh/picViewer.js"></script><link href="./blsh/ueditor.css" type="text/css" rel="stylesheet"><script src="./blsh/share.js"></script><script src="./blsh/ZeroClipboard.js" type="text/javascript" defer="defer"></script><link rel="stylesheet" href="./blsh/share_style0_16.css"><style type="text/css"></style></head>
<body>


<div id="header" class="course-detail-header">
  <div class="cd-inner clearfix">
      <ul class="l">
        <li class="nv nv-goback"><a href="http://www.imooc.com/learn/604" class="revert l"><i class="icon icon-left"></i></a></li>
        <li class="nv nv-menu">
          <a href="javascript:;" class="chaptername J-chaptername" data-id="11173" style="cursor:text;"><span>PHP实现手机归属地查询</span><em>1-1 需求分析和项目准备</em></a>
        </li>
                <li class="nv nv-follow">
                    <a href="javascript:void(0)" data-id="604" class="js-btn-follow course-follow" title="关注此课程"><i class="icon icon-heart"></i><em>关注</em></a>
                  </li>
                <li class="nv nv-share bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1458607277619">
          <!-- note:bdshare cannt user inner icon tag-->
            <span>分享</span>
            <a class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
            <a class="bds_qzone" data-cmd="qzone" href="http://www.imooc.com/video/11173#" title="分享到QQ空间"></a>
            <a class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>

          <div style="display:none" id="coursePic"><img src="./blsh/56c6f2c50001f49b06000338-590-330.jpg"></div>
        </li>
        <li class="nv credit-tips js-share-statue" style="display: none;">
          <span>分享即可 +</span><strong>1积分</strong>
        </li>
      </ul>
      
              <div id="login-area">
            <ul class="clearfix logined">
                <li class="header-app">
                    <a href="http://www.imooc.com/mobile/app">
                        <span class="icon-appdownload"></span>
                    </a>
                    <div class="QR-download">
                        <p id="app-text">慕课网APP下载</p>
                        <p id="app-type">iPhone / Android / iPad</p>
                        <img src="./blsh/QR-code.jpg">
                    </div>
                </li>
                <li class="remind_warp">
                    <i class="msg_remind" style="display: none;"></i>
                    <a target="_blank" href="http://www.imooc.com/u/3056088/notices"><i class="icon-notifi"></i></a>
                </li>
        	    <li class="my_message">
                    <a href="http://www.imooc.com/message" title="我的消息" target="_self">
                        <i class="icon-mail"></i>
                        <span style="display: none;">我的消息</span>
                    </a>
                </li>
                <li class="set_btn user-card-box">
                    <a id="header-avator" class="user-card-item" action-type="my_menu" href="http://www.imooc.com/u/3056088/courses" target="_self"><img src="./blsh/56e9f6a00001a0c901000100-40-40.jpg" width="40" height="40">
                        <i class="myspace_remind" style="display: none;"></i>
                        <span style="display: none;">动态提醒</span>
                    </a>
                    <div class="g-user-card">
                        <div class="card-inner">
                            <div class="card-top">
                                <a href="http://www.imooc.com/u/3056088/courses"><img src="./blsh/56e9f6a00001a0c901000100-100-100.jpg" alt="qq_别扒愣我_0" class="l"></a>
                                <a href="http://www.imooc.com/u/3056088/courses"><span class="name text-ellipsis">qq_别扒愣我_0</span></a>
                                <p class="meta">
					<a href="http://www.imooc.com/u/3056088/experience">经验<b id="js-user-mp">0</b></a>
					<a href="http://www.imooc.com/u/3056088/credit">积分<b id="js-user-credit">0</b></a>            </p>
                    
                                <a href="http://www.imooc.com/user/setprofile" class="icon-set setup"></a>
                            </div>
                            <!--
                            <div class="card-links">
                                <a href="/space/index" class="my-mooc l">我的慕课<i class="dot-update"></i></a>
                                <span class="split l"></span>
                                <a href="/myclub/myquestion/t/ques" class="my-sns l">我的社区</a>
                            </div>
                            -->
                                                        <div class="card-history">
                                <span class="history-item">
                                    <span class="tit text-ellipsis">PHP实现手机归属地查询</span>
                                    <span class="media-name text-ellipsis">1-1 需求分析和项目准备</span>
                                    <i class="icon-clock"></i>
                                                                            <a href="./blsh/需求分析和项目准备-慕课网.html" class="continue">继续</a>
                                                                    </span>
                            </div>
                                                        <div class="card-sets clearfix">
                                <a href="http://www.imooc.com/wenda/save" target="_blank" class="l mr30">发问题</a>
                                <a href="http://www.imooc.com/article/publish" target="_blank" class="l">写文章</a>
                                <a href="http://www.imooc.com/passport/user/logout?referer=http://www.imooc.com" class="r">退出</a>
                            </div>
                        </div>
                        <i class="card-arr"></i>
                    </div>
                </li>
            </ul>
        </div>
              
  </div>
</div>

<div id="studyMain">

 
<div id="bgarea" class="video-con">
    
        
        <video controls="controls" width="800px" height="200px" id="mp4" autoplay>
				<source src="./video/1.mp4" type="video/mp4">
		</video>

		<div class="next-box J_next-box hide">
                <div class="next-box-inner">
                                            <div class="course-tip-layer J-next-course" data-next-src="/video/11174">
                            <h2>下一节课程： 开发环境及工具
                                <span class="course-duration"> (02:24)</span>
                            </h2>
                            <div class="J-next-auto hide next-auto"><em>3</em> 秒后播放下一节</div>
                            <div class="J-next-btn hide btn btn-red">下一节</div>
                            <a href="http://www.imooc.com/video/11173/0" class="review-course">重新观看</a>
                            
                                                    </div>

                                    </div>
            
        
    </div>
    <!--此处结构为练习题，视频，编程公用的侧栏-->
<div class="section-list">
    <div class="operator">
        <div class="op chapter"><em class="icon-menu"></em>章节</div>
        <div class="op notes"><em class="icon-note"></em>笔记</div>
        <div class="op question"><em class="icon-addques"></em>提问</div>
        <div class="op wiki"><em class="icon-wiki"></em>WIKI</div>
    </div>
    <div class="nano has-scrollbar">
        <div class="nano-content" tabindex="0" style="right: -17px;">
            <h3>PHP实现手机归属地查询</h3>
                        <ul>
                <li class="sec-title">
                    <span>第1章 项目需求分析和准备</span>
                </li>
                                                        <li data-id="11173">
                        <a href="./blsh/需求分析和项目准备-慕课网.html"><em class="icon-video"></em>1-1 需求分析和项目准备...(01:49)</a>
                                                <i class="">正在学                                                        <em class="icon-clock"></em>
                                                    </i>
                                            </li>
                                                                            <li data-id="11174">
                        <a href="http://www.imooc.com/video/11174"><em class="icon-video"></em>1-2 开发环境及工具...(02:24)</a>
                                                <i class="">                                                        <em class="icon-nolearn"></em>
                                                    </i>
                                            </li>
                                                </ul>
                        <ul>
                <li class="sec-title">
                    <span>第2章 流程解析及框架搭建</span>
                </li>
                                                        <li data-id="11175">
                        <a href="http://www.imooc.com/video/11175"><em class="icon-video"></em>2-1 -项目框架结构搭建...(05:51)</a>
                                                <i class="">                                                        <em class="icon-nolearn"></em>
                                                    </i>
                                            </li>
                                                                            <li data-id="11176">
                        <a href="http://www.imooc.com/video/11176"><em class="icon-video"></em>2-2 自动加载功能实现...(09:19)</a>
                                                <i class="">                                                        <em class="icon-nolearn"></em>
                                                    </i>
                                            </li>
                                                                            <li data-id="11177">
                        <a href="http://www.imooc.com/video/11177"><em class="icon-video"></em>2-3 信息查询流程解析...(01:15)</a>
                                                <i class="">                                                        <em class="icon-nolearn"></em>
                                                    </i>
                                            </li>
                                                </ul>
                        <ul>
                <li class="sec-title">
                    <span>第3章 项目实战</span>
                </li>
                                                        <li data-id="11178">
                        <a href="http://www.imooc.com/video/11178"><em class="icon-video"></em>3-1 校验手机号码合法性...(02:48)</a>
                                                <i class="">                                                        <em class="icon-nolearn"></em>
                                                    </i>
                                            </li>
                                                                            <li data-id="11179">
                        <a href="http://www.imooc.com/video/11179"><em class="icon-video"></em>3-2 API请求数据(07:43)</a>
                                                <i class="">                                                        <em class="icon-nolearn"></em>
                                                    </i>
                                            </li>
                                                                            <li data-id="11180">
                        <a href="http://www.imooc.com/video/11180"><em class="icon-video"></em>3-3 格式化数据(03:59)</a>
                                                <i class="">                                                        <em class="icon-nolearn"></em>
                                                    </i>
                                            </li>
                                                                            <li data-id="11181">
                        <a href="http://www.imooc.com/video/11181"><em class="icon-video"></em>3-4 缓存数据到数据库...(12:29)</a>
                                                <i class="">                                                        <em class="icon-nolearn"></em>
                                                    </i>
                                            </li>
                                                                            <li data-id="11184">
                        <a href="http://www.imooc.com/video/11184"><em class="icon-video"></em>3-5 渲染数据到模板—JS...(12:46)</a>
                                                <i class="">                                                        <em class="icon-nolearn"></em>
                                                    </i>
                                            </li>
                                                                            <li data-id="11185">
                        <a href="http://www.imooc.com/video/11185"><em class="icon-video"></em>3-6 渲染数据到模板—数...(09:00)</a>
                                                <i class="">                                                        <em class="icon-nolearn"></em>
                                                    </i>
                                            </li>
                                                </ul>
            
        </div>
    <div class="nano-pane" style="display: none;"><div class="nano-slider" style="height: 831px; transform: translate(0px, 0px);"></div></div></div>
</div></div>

<div class="maybe-wenda" id="maybe-wenda" style="display: none;">
    <i class="icon-chat"></i>
    <p class="text">你发的评论可能会是问题？<br>是否将他发到问答中</p>
    <input class="btn ok" type="button" value="好的" id="wenda-ok">
    <input class="btn no" type="button" value="不用" id="wenda-no">
</div>
</div>

<div class="course-subcontainer clearfix">
  <div class="course-left">
      <ul class="course-menu course-video-menu clearfix js-course-menu" data-ower="all" data-sort="last" style="position: absolute; left: 0px;">
    <li class="course-menu-item"><a class="active" href="javascript:void(0)" id="plMenu">评论</a></li>
    <li class="course-menu-item"><a href="javascript:void(0)" id="qaMenu">问答</a></li>
    <li class="course-menu-item"><a href="javascript:void(0)" id="noteMenu">笔记</a></li>
    <!--
    <li class="course-menu-item"><a href="javascript:void(0)" id="wikiMenu">WIKI</a></li>
    -->
        </ul>
<div id="disArea" class="lists-container list-wrap">
    <div id="pl-content" class="list-tab-con">
        <div class="publish clearfix" id="discus-publish">
            <div class="publish-wrap publish-wrap-pl">
               <div class="pl-input-wrap">
                   <div id="js-pl-input-fake" class="pl-input-inner">
                       <textarea id="js-pl-textarea" class="js-placeholder" placeholder="扯淡、吐槽、表扬、鼓励……想说啥就说啥！"></textarea>
                       <span class="num-limit"><span id="js-pl-limit">0</span>/300</span>
                   </div>
                   <div class="pl-input-btm input-btm clearfix">
                        <div class="verify-code l"></div>
                        <input type="button" id="js-pl-submit" class="r course-btn" value="发表评论">
                   </div>
               </div>

            </div>
        </div>
        <div id="plLoadListData"><div class="pl-container"> <ul>   <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/space/u/uid/2055456" target="_blank"><img width="40" height="40" src="./blsh/557d99380001fa0301000100-40-40.jpg" title="D__C"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/space/u/uid/2055456" target="_blank">D__C</a> </div> <div class="pl-list-content">接口已经过时了，淘宝会返回：We are sorry, but Chrome API does not allow to get a response body for redirect.</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2016-03-14</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="182107"><i class="icon-thumb"></i>  <span>0</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/space/u/uid/3028413" target="_blank"><img width="40" height="40" src="./blsh/unknow-40.png" title="醉在现实醒在梦里"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/space/u/uid/3028413" target="_blank">醉在现实醒在梦里</a> </div> <div class="pl-list-content">如果可以选择我真的不愿意过现在的生活我宁愿回到大山里面当一个没见过市面的女孩。</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2016-03-12</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="180660"><i class="icon-thumb"></i>  <span>0</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/space/u/uid/2917332" target="_blank"><img width="40" height="40" src="./blsh/5333a1660001394602000200-40-40.jpg" title="makakaka"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/space/u/uid/2917332" target="_blank">makakaka</a> </div> <div class="pl-list-content">老师是廊坊人吧</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2016-02-29</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="174313"><i class="icon-thumb"></i>  <span>1</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/space/u/uid/1962882" target="_blank"><img width="40" height="40" src="./blsh/56efb0e500019f5507400553-40-40.jpg" title="晶晶_我们结婚吧"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/space/u/uid/1962882" target="_blank">晶晶_我们结婚吧</a> </div> <div class="pl-list-content">老师讲的很好</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2016-02-29</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="174128"><i class="icon-thumb"></i>  <span>0</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/space/u/uid/1337091" target="_blank"><img width="40" height="40" src="./blsh/55098f3200011b5101000100-40-40.jpg" title="wyc8324689"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/space/u/uid/1337091" target="_blank">wyc8324689</a> </div> <div class="pl-list-content">11233</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2016-02-29</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="174097"><i class="icon-thumb"></i>  <span>0</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/space/u/uid/2168131" target="_blank"><img width="40" height="40" src="./blsh/533e4c910001a72d02000200-40-40.jpg" title="幽壑潜蛟"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/space/u/uid/2168131" target="_blank">幽壑潜蛟</a> </div> <div class="pl-list-content">课程发布快。使用。支持慕课网</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2016-02-27</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="173372"><i class="icon-thumb"></i>  <span>0</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/space/u/uid/225201" target="_blank"><img width="40" height="40" src="./blsh/56c47bba0001e95807480728-40-40.jpg" title="手工客"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/space/u/uid/225201" target="_blank">手工客</a> </div> <div class="pl-list-content">来看看。不说话！</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2016-02-27</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="173285"><i class="icon-thumb"></i>  <span>0</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/space/u/uid/267463" target="_blank"><img width="40" height="40" src="./blsh/53ead3170001232c01000100-40-40.jpg" title="星之七章"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/space/u/uid/267463" target="_blank">星之七章</a> </div> <div class="pl-list-content">前排。。。</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2016-02-26</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="173077"><i class="icon-thumb"></i>  <span>0</span></a> </div> </div> </li>  <li class="pl-list clearfix"> <div class="pl-list-avator"> <a href="http://www.imooc.com/space/u/uid/1126772" target="_blank"><img width="40" height="40" src="./blsh/5498fef30001e3eb01000100-40-40.jpg" title="Hudu2015"></a> </div> <div class="pl-list-main"> <div class="pl-list-nick"> <a href="http://www.imooc.com/space/u/uid/1126772" target="_blank">Hudu2015</a> </div> <div class="pl-list-content">来个首评!</div>  <div class="pl-list-btm clearfix"> <span class="pl-list-time l">时间: 2016-02-26</span>  <a title="赞" href="javascript:;" class="js-pl-praise list-praise r" data-id="173071"><i class="icon-thumb"></i>  <span>0</span></a> </div> </div> </li> </ul></div><div class="page pl-list-page"></div></div>
    </div>
    <div id="qa-content" class="list-tab-con" style="display:none">
        <div id="qaLoadListData"><div class="sortlist"> 			<div class="ordertab"> 				<a href="javascript:void(0)" hidefocus="true" data-order="1" class="quealltab onactive">全部</a>				<a href="javascript:void(0)" hidefocus="true" data-order="2" class="quealltab ">精华</a>			</div>		</div><div class="answertabcon"></div><div class="page discuss-list-page"></div></div>
    </div>
    <div id="note-content" class="list-tab-con" style="display:none">
        <div id="noteLoadListData">
        <div class="course-tool-bar clearfix js-select-state">			<div class="tool-left l js-all-state">		        <a href="javascript:;" class="sort-item active" data-sort="last">最新</a>		        <a href="javascript:;" class="sort-item" data-sort="sugg">点赞</a>		        <a href="javascript:;" class="sort-item" data-sort="coll">采集</a>	        </div>	        <div class="tool-right r">		        <span class="tool-item">		        	<a href="javascript:;" class="js-ower hide-learned tool-chk" data-sort="last">只看我的</a>		        </span>		    </div>		</div><div id="course_note" class="course_note"></div><div class="page note-list-page"></div></div>
    </div>
    <div id="wiki-content" class="list-tab-con" style="display:none;">
        <div id="wikiLoadListData">
        <div id="course_wiki" class="course_wiki"></div><div class="page wiki-list-page"></div></div>
    </div>
    <div id="mate-content" class="list-tab-con" style="display:none;">
        <div id="mateLoadListData">
        <div class="othterscode-container"></div><div class="page othterscode-list-page"></div></div>
    </div>

</div>
  </div>
  <div class="course-right clearfix">
           <div class="coursedownload fl">
        <h3>资料下载</h3>
        <ul class="downlist">
                        <li>
              <span><i class="icon icon-folder"></i>PHP实现手机归属地查询—课程代码</span>
              <a href="http://img.mukewang.com/down/56d3f1ca00013ae700000000.zip" class="downcode" target="_blank" download="" data-id="574" title="PHP实现手机归属地查询—课程代码">下载</a>
            </li>
                    </ul>
    </div>

      
<div class="cp-other-learned  js-comp-tabs">
  <div class="cp-header clearfix">
    <h2 class="cp-tit l">该课的同学还学过</h2>
    <ul class="cp-tabs r">

          </ul>
  </div>
  <div class="cp-body">
    <div class="cp-tab-pannel js-comp-tab-pannel" data-pannel="course" style="display: block">
    <!-- img 200 x 112 -->
      <ul class="other-list">
                <li class="curr">
          <a href="http://www.imooc.com/view/54?src=sug" target="_blank">
            <img src="./blsh/53daee770001dd0706000338-240-135.jpg" alt="PHP入门篇">
            <span class="name autowrap">PHP入门篇</span>
          </a>
        </li>
                <li>
          <a href="http://www.imooc.com/view/36?src=sug" target="_blank">
            <img src="./blsh/53e1d0470001ad1e06000338-240-135.jpg" alt="JavaScript入门篇">
            <span class="name autowrap">JavaScript入门篇</span>
          </a>
        </li>
                <li>
          <a href="http://www.imooc.com/view/26?src=sug" target="_blank">
            <img src="./blsh/53955cad00012ed606000338-240-135.jpg" alt="PHP进阶篇">
            <span class="name autowrap">PHP进阶篇</span>
          </a>
        </li>
                <li>
          <a href="http://www.imooc.com/view/175?src=sug" target="_blank">
            <img src="./blsh/53fbd87f0001e4c006000338-240-135.jpg" alt=" Linux达人养成计划 I">
            <span class="name autowrap"> Linux达人养成计划 I</span>
          </a>
        </li>
                <li>
          <a href="http://www.imooc.com/view/10?src=sug" target="_blank">
            <img src="./blsh/529dc3450001eb3606000338-240-135.jpg" alt="JavaScript进阶篇">
            <span class="name autowrap">JavaScript进阶篇</span>
          </a>
        </li>
              </ul>
    </div>
      </div>
</div>
  <div class="wendalist js-right-wenda" style="display: block;">
    <div class="course-right-title">
        <h3>猿问推荐</h3>
        <a href="http://www.imooc.com/wenda?block_id=tuijian_wz" target="_blank" class="more">更多</a> 
    </div>

      <ul><li><a href="http://www.imooc.com/wenda/detail/312152?block_id=tuijian_yw" target="_blank">调用数据库内容</a><i>3 回答</i></li><li><a href="http://www.imooc.com/wenda/detail/312045?block_id=tuijian_yw" target="_blank">运行PHP的一些问题</a><i>4 回答</i></li><li><a href="http://www.imooc.com/wenda/detail/312094?block_id=tuijian_yw" target="_blank">学习PHP需要哪些语言基础？</a><i>2 回答</i></li><li><a href="http://www.imooc.com/wenda/detail/312043?block_id=tuijian_yw" target="_blank">mysql数据库操作失败，求助</a><i>3 回答</i></li><li><a href="http://www.imooc.com/wenda/detail/312015?block_id=tuijian_yw" target="_blank">面向对象的问题。</a><i>4 回答</i></li></ul>
  </div>
  <div class="articlelist js-right-article" style="display: block;">
    <div class="course-right-title">
        <h3>文章推荐</h3>
        <a href="http://www.imooc.com/article?block_id=tuijian_yw" target="_blank" class="more">更多</a> 
    </div>
    <div class="course-right-content">
      
    </div>
    <ul><li><a href="http://www.imooc.com/article/5567?block_id=tuijian_wz" target="_blank"><img src="./blsh/56e935a6000145f601300130-40-40.jpg" width="40" height="40"><div>写给选择了慕课，同样选择了PHP的你</div></a></li><li><a href="http://www.imooc.com/article/5551?block_id=tuijian_wz" target="_blank"><img src="./blsh/56e8bc0000017e4d05500322-40-40.jpg" width="40" height="40"><div>坚持，才能看到希望！——(初学PHP面试求职祭奠...</div></a></li><li><a href="http://www.imooc.com/article/5489?block_id=tuijian_wz" target="_blank"><img src="./blsh/56e633cb0001c7cc03220322-40-40.jpg" width="40" height="40"><div>PHP遇上表单</div></a></li><li><a href="http://www.imooc.com/article/5475?block_id=tuijian_wz" target="_blank"><img src="./blsh/56e634cd0001e52505070337-40-40.jpg" width="40" height="40"><div>AJAX异步学习总结（1）</div></a></li><li><a href="http://www.imooc.com/article/5345?block_id=tuijian_wz" target="_blank"><img src="./blsh/56de32e300013be903200240-40-40.jpg" width="40" height="40"><div>PHP 学习路线</div></a></li></ul>
  </div>  </div>
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
                        <!--<li><a href="/subject/html" target="_blank">专题页面</a></li>-->
                        <li><a href="http://yun.imooc.com/" target="_blank">慕课云</a></li>
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



<script type="text/javascript" charset="utf-8" src="./blsh/ueditor.final.min.js"></script>

<script src="./blsh/ssologin.js"></script>
<script type="text/javascript" src="./blsh/sea.js"></script>
<script type="text/javascript" src="./blsh/sea_config.js"></script>
<script type="text/javascript">seajs.use("/static/page/"+OP_CONFIG.module+"/"+OP_CONFIG.page);</script>



<div style="display: none">
  <script type="text/javascript">
  var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
  document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff0cfcccd7b1393990c78efdeebff3968' type='text/javascript'%3E%3C/script%3E"));
  </script><script src="./blsh/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f0cfcccd7b1393990c78efdeebff3968" target="_blank"><img border="0" src="./blsh/21.gif" width="20" height="20"></a>
</div><script type="text/javascript" src="./blsh/user"></script><script type="text/javascript" src="./blsh/iplookup.php"></script>
<!--笔记弹出框-->
<div class="publish clearfix note-pop" id="note-publist">
    <div class="publish-wrap publish-wrap-note video-publish-note pop-con">
        <div class="pop-title">
            <h3>笔记</h3>
            <span class="icon-close"></span>
        </div>
        <div id="js-note-input-fake" class="textarea-wrap">
            <textarea data-maxlength="1000" id="js-note-textarea" class="js-placeholder" name="" placeholder="请输入笔记内容..."></textarea>
            <p class="note-text-counter"><span id="js-note-limit">0</span>/1000</p>
        </div>
        <div class="publish-note-btns input-btm clearfix pop-footer">
            <div class="verify-code clearfix"></div>
                                            <div title="截图" class="js-shot-video screen-btn" data-type="note">
                    <span>截图</span>
                </div>
                                        <input type="button" title="发表" value="保存" id="js-note-submit" class="course-btn r">
            <label for="js-isshare" class="label-checked r"><input type="checkbox" checked="checked" id="js-isshare" class="checked"> 公开</label>
            <!-- <div class="integral-info">
                <span>本次提问将花费1个积分</span>
                <a target="_blank" href="/about/faq?t=3">什么是积分？</a>
            </div> -->
        </div>
    </div>
</div>
<!--问答弹出框 通用-->
<div class="publish clearfix qa-pop" id="discus-publish">
    <div class="publish-wrap publish-wrap-disucss video-publish-qa pop-con">
        <div class="pop-title">
            <h3>提问</h3>
            <span class="icon-close"></span>
        </div>
        <div class="qa-control-wrap clearfix">
            <div class="question-area">
                <div class="qa-control qa-ipt-title">
                    <input type="text" id="js-qa-title" maxlength="255" class="js-placeholder autocomplete" placeholder="请输入问题标题">
                </div>
                <a href="http://www.imooc.com/wenda/detail/292353" target="_blank" class="another-meth">如何更好<br>的提问？</a>
                <dl class="send-area-result">
                </dl>
            </div>
        </div>
        <div class="qa-control-wrap clearfix">
            <div class="qa-control">
                <div class="rich-text-editor">
                    <div id="discuss-editor" class="edui-imooc" style=""><div id="edui1" class="edui-editor  edui-imooc" style="width: 588px; z-index: 999;"><div id="edui1_toolbarbox" class="edui-editor-toolbarbox edui-imooc"><div id="edui1_toolbarboxouter" class="edui-editor-toolbarboxouter edui-imooc"><div class="edui-editor-toolbarboxinner edui-imooc"><div id="edui2" class="edui-toolbar   edui-imooc" onselectstart="return false;" onmousedown="return $EDITORUI[&quot;edui2&quot;]._onMouseDown(event, this);" style="-webkit-user-select: none;"><div id="edui3" class="edui-box edui-combox edui-for-insertcode edui-imooc"><div title="代码语言" id="edui3_state" onmousedown="$EDITORUI[&quot;edui3&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui3&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui3&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui3&quot;].Stateful_onMouseOut(event, this);" class="edui-imooc"><div class="edui-combox-body edui-imooc"><div id="edui3_button_body" class="edui-box edui-button-body edui-imooc" onclick="$EDITORUI[&quot;edui3&quot;]._onButtonClick(event, this);">代码语言</div><div class="edui-box edui-splitborder edui-imooc"></div><div class="edui-box edui-arrow edui-imooc" onclick="$EDITORUI[&quot;edui3&quot;]._onArrowClick();"></div></div></div></div><div id="edui17" class="edui-box edui-button edui-for-bold edui-imooc"><div id="edui17_state" onmousedown="$EDITORUI[&quot;edui17&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui17&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui17&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui17&quot;].Stateful_onMouseOut(event, this);" class="edui-imooc"><div class="edui-button-wrap edui-imooc"><div id="edui17_body" unselectable="on" title="加粗" class="edui-button-body edui-imooc" onmousedown="return $EDITORUI[&quot;edui17&quot;]._onMouseDown(event, this);" onclick="return $EDITORUI[&quot;edui17&quot;]._onClick(event, this);"><div class="edui-box edui-icon edui-imooc"></div></div></div></div></div><div id="edui18" class="edui-box edui-button edui-for-italic edui-imooc"><div id="edui18_state" onmousedown="$EDITORUI[&quot;edui18&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui18&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui18&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui18&quot;].Stateful_onMouseOut(event, this);" class="edui-imooc"><div class="edui-button-wrap edui-imooc"><div id="edui18_body" unselectable="on" title="斜体" class="edui-button-body edui-imooc" onmousedown="return $EDITORUI[&quot;edui18&quot;]._onMouseDown(event, this);" onclick="return $EDITORUI[&quot;edui18&quot;]._onClick(event, this);"><div class="edui-box edui-icon edui-imooc"></div></div></div></div></div><div id="edui19" class="edui-box edui-button edui-for-underline edui-imooc"><div id="edui19_state" onmousedown="$EDITORUI[&quot;edui19&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui19&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui19&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui19&quot;].Stateful_onMouseOut(event, this);" class="edui-imooc"><div class="edui-button-wrap edui-imooc"><div id="edui19_body" unselectable="on" title="下划线" class="edui-button-body edui-imooc" onmousedown="return $EDITORUI[&quot;edui19&quot;]._onMouseDown(event, this);" onclick="return $EDITORUI[&quot;edui19&quot;]._onClick(event, this);"><div class="edui-box edui-icon edui-imooc"></div></div></div></div></div><div id="edui26" class="edui-box edui-button edui-for-insertimage edui-imooc"><div id="edui26_state" onmousedown="$EDITORUI[&quot;edui26&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui26&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui26&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui26&quot;].Stateful_onMouseOut(event, this);" class="edui-imooc"><div class="edui-button-wrap edui-imooc"><div id="edui26_body" unselectable="on" title="多图上传" class="edui-button-body edui-imooc" onmousedown="return $EDITORUI[&quot;edui26&quot;]._onMouseDown(event, this);" onclick="return $EDITORUI[&quot;edui26&quot;]._onClick(event, this);"><div class="edui-box edui-icon edui-imooc"></div><div class="edui-box edui-label edui-imooc"></div></div></div></div></div><div id="edui31" class="edui-box edui-button edui-for-link edui-imooc"><div id="edui31_state" onmousedown="$EDITORUI[&quot;edui31&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui31&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui31&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui31&quot;].Stateful_onMouseOut(event, this);" class="edui-imooc"><div class="edui-button-wrap edui-imooc"><div id="edui31_body" unselectable="on" title="超链接" class="edui-button-body edui-imooc" onmousedown="return $EDITORUI[&quot;edui31&quot;]._onMouseDown(event, this);" onclick="return $EDITORUI[&quot;edui31&quot;]._onClick(event, this);"><div class="edui-box edui-icon edui-imooc"></div><div class="edui-box edui-label edui-imooc"></div></div></div></div></div><div id="edui32" class="edui-box edui-button edui-for-unlink edui-imooc"><div id="edui32_state" onmousedown="$EDITORUI[&quot;edui32&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui32&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui32&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui32&quot;].Stateful_onMouseOut(event, this);" class="edui-imooc"><div class="edui-button-wrap edui-imooc"><div id="edui32_body" unselectable="on" title="取消链接" class="edui-button-body edui-imooc" onmousedown="return $EDITORUI[&quot;edui32&quot;]._onMouseDown(event, this);" onclick="return $EDITORUI[&quot;edui32&quot;]._onClick(event, this);"><div class="edui-box edui-icon edui-imooc"></div></div></div></div></div><div id="edui33" class="edui-box edui-button edui-for-insertunorderedlist edui-imooc"><div id="edui33_state" onmousedown="$EDITORUI[&quot;edui33&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui33&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui33&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui33&quot;].Stateful_onMouseOut(event, this);" class="edui-imooc"><div class="edui-button-wrap edui-imooc"><div id="edui33_body" unselectable="on" title="无序列表" class="edui-button-body edui-imooc" onmousedown="return $EDITORUI[&quot;edui33&quot;]._onMouseDown(event, this);" onclick="return $EDITORUI[&quot;edui33&quot;]._onClick(event, this);"><div class="edui-box edui-icon edui-imooc"></div><div class="edui-box edui-label edui-imooc"></div></div></div></div></div><div id="edui34" class="edui-box edui-button edui-for-insertorderedlist edui-imooc"><div id="edui34_state" onmousedown="$EDITORUI[&quot;edui34&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui34&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui34&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui34&quot;].Stateful_onMouseOut(event, this);" class="edui-imooc"><div class="edui-button-wrap edui-imooc"><div id="edui34_body" unselectable="on" title="有序列表" class="edui-button-body edui-imooc" onmousedown="return $EDITORUI[&quot;edui34&quot;]._onMouseDown(event, this);" onclick="return $EDITORUI[&quot;edui34&quot;]._onClick(event, this);"><div class="edui-box edui-icon edui-imooc"></div><div class="edui-box edui-label edui-imooc"></div></div></div></div></div><div id="edui35" class="edui-box edui-button edui-for-blockquote edui-imooc"><div id="edui35_state" onmousedown="$EDITORUI[&quot;edui35&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui35&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui35&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui35&quot;].Stateful_onMouseOut(event, this);" class="edui-imooc"><div class="edui-button-wrap edui-imooc"><div id="edui35_body" unselectable="on" title="引用" class="edui-button-body edui-imooc" onmousedown="return $EDITORUI[&quot;edui35&quot;]._onMouseDown(event, this);" onclick="return $EDITORUI[&quot;edui35&quot;]._onClick(event, this);"><div class="edui-box edui-icon edui-imooc"></div></div></div></div></div><div id="edui36" class="edui-box edui-button edui-for-redo edui-imooc"><div id="edui36_state" onmousedown="$EDITORUI[&quot;edui36&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui36&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui36&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui36&quot;].Stateful_onMouseOut(event, this);" class="edui-imooc"><div class="edui-button-wrap edui-imooc"><div id="edui36_body" unselectable="on" title="重做" class="edui-button-body edui-imooc" onmousedown="return $EDITORUI[&quot;edui36&quot;]._onMouseDown(event, this);" onclick="return $EDITORUI[&quot;edui36&quot;]._onClick(event, this);"><div class="edui-box edui-icon edui-imooc"></div></div></div></div></div><div id="edui37" class="edui-box edui-button edui-for-undo edui-imooc"><div id="edui37_state" onmousedown="$EDITORUI[&quot;edui37&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui37&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui37&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui37&quot;].Stateful_onMouseOut(event, this);" class="edui-imooc"><div class="edui-button-wrap edui-imooc"><div id="edui37_body" unselectable="on" title="撤销" class="edui-button-body edui-imooc" onmousedown="return $EDITORUI[&quot;edui37&quot;]._onMouseDown(event, this);" onclick="return $EDITORUI[&quot;edui37&quot;]._onClick(event, this);"><div class="edui-box edui-icon edui-imooc"></div></div></div></div></div><div id="edui40" class="edui-box edui-button edui-for-preview edui-imooc"><div id="edui40_state" onmousedown="$EDITORUI[&quot;edui40&quot;].Stateful_onMouseDown(event, this);" onmouseup="$EDITORUI[&quot;edui40&quot;].Stateful_onMouseUp(event, this);" onmouseover="$EDITORUI[&quot;edui40&quot;].Stateful_onMouseOver(event, this);" onmouseout="$EDITORUI[&quot;edui40&quot;].Stateful_onMouseOut(event, this);" class="edui-imooc"><div class="edui-button-wrap edui-imooc"><div id="edui40_body" unselectable="on" title="预览" class="edui-button-body edui-imooc" onmousedown="return $EDITORUI[&quot;edui40&quot;]._onMouseDown(event, this);" onclick="return $EDITORUI[&quot;edui40&quot;]._onClick(event, this);"><div class="edui-box edui-icon edui-imooc"></div><div class="edui-box edui-label edui-imooc"></div></div></div></div></div></div></div></div><div id="edui1_toolbarmsg" class="edui-editor-toolbarmsg edui-imooc" style="display:none;"><div id="edui1_upload_dialog" class="edui-editor-toolbarmsg-upload edui-imooc" onclick="$EDITORUI[&quot;edui1&quot;].showWordImageDialog();">点击上传</div><div class="edui-editor-toolbarmsg-close edui-imooc" onclick="$EDITORUI[&quot;edui1&quot;].hideToolbarMsg();">x</div><div id="edui1_toolbarmsg_label" class="edui-editor-toolbarmsg-label edui-imooc"></div><div style="height:0;overflow:hidden;clear:both;" class="edui-imooc"></div></div><div id="edui1_message_holder" class="edui-editor-messageholder edui-imooc" style="top: 3px; z-index: 1000;"></div></div><div id="edui1_iframeholder" class="edui-editor-iframeholder edui-imooc" style="width: 588px; height: 150px; z-index: 999; overflow: hidden;"><iframe id="ueditor_0" width="100%" height="100%" frameborder="0" src="javascript:void(function(){document.open();document.write(&quot;&lt;!DOCTYPE html&gt;&lt;html xmlns=&#39;http://www.w3.org/1999/xhtml&#39; class=&#39;view&#39; &gt;&lt;head&gt;&lt;style type=&#39;text/css&#39;&gt;.view{padding:0;word-wrap:break-word;cursor:text;height:90%;}
body{margin:8px;font-family:sans-serif;font-size:16px;}p{margin:5px 0;}&lt;/style&gt;&lt;link rel=&#39;stylesheet&#39; type=&#39;text/css&#39; href=&#39;http://www.imooc.com/static/lib/ueditor/themes/iframe.css&#39;/&gt;&lt;style&gt;p{line-height:1.5em;font-size:13px;color:#444}&lt;/style&gt;&lt;/head&gt;&lt;body class=&#39;view&#39; &gt;&lt;/body&gt;&lt;script type=&#39;text/javascript&#39;  id=&#39;_initialScript&#39;&gt;setTimeout(function(){editor = window.parent.UE.instants[&#39;ueditorInstant0&#39;];editor._setup(document);},0);var _tmpScript = document.getElementById(&#39;_initialScript&#39;);_tmpScript.parentNode.removeChild(_tmpScript);&lt;/script&gt;&lt;/html&gt;&quot;);document.close();}())"></iframe></div><div id="edui1_bottombar" class="edui-editor-bottomContainer edui-imooc"><table class="edui-imooc"><tbody class="edui-imooc"><tr class="edui-imooc"><td id="edui1_elementpath" class="edui-editor-bottombar edui-imooc" style="display: none;"></td><td id="edui1_wordcount" class="edui-editor-wordcount edui-imooc" style="display: none;"></td><td id="edui1_scale" class="edui-editor-scale edui-imooc" style="display: none;"><div class="edui-editor-icon edui-imooc"></div></td></tr></tbody></table></div><div id="edui1_scalelayer" class="edui-imooc"></div></div></div><textarea style="display: none;">请输入讨论内容...</textarea>
                </div>
            </div>
        </div>
        <div id="js-discuss-btm" class="discuss-bottom input-btm clearfix pop-footer">
            <div class="verify-code clearfix"><input type="text" maxlength="4" class="verify-code-ipt" placeholder="请输入验证码"><a class="verify-img-wrap js-verify-refresh" hidefocus="true" href="javascript:void(0)"><img class="verify-img" src="./blsh/getcoursequestioncode"></a><a class="icon-refresh js-verify-refresh" hidefocus="true" href="javascript:void(0)"></a><span class="errtip"></span></div>
                                            <div title="截图" class="js-shot-video screen-btn" data-type="qa">
                    <span>截图</span>
                </div>
                                        <input id="js-discuss-submit" class="r course-btn" type="button" value="发布">
        </div>
        <div id="use-credit-tip" class="use-credit-tip">
            <span class="credit-info">本次提问将花费2个积分</span>
            <a class="credit-rule" href="http://www.imooc.com/about/faq?t=3" target="_blank">为什么扣积分？</a>
        </div>
    </div>
</div>

<!--积分弹出框-->
<div class="integral-pop" id="no-credit">
    <div class="pop-con">
        <span class="icon-point"></span>
                    <p>本次提问将花费2个积分</p>
                <p>你的积分不足，无法发表</p>
        <a class="integral-rule" href="http://www.imooc.com/about/faq?t=3" target="_blank">为什么扣积分？</a>
        <div class="ft clearfix">
            <a href="javascript:void(0)" class="btn btn-green l cancel-cf">确认</a>
            <a href="javascript:void(0)" class="btn btn-grey r cancel-cf">取消</a>
        </div>
    </div>
</div>
<div class="integral-pop" id="enough-credit">
    <div class="pop-con">
        <span class="icon-point"></span>
                    <p>本次提问将花费2个积分</p>
                <p>继续发表请点击 "确定"</p>
        <a class="integral-rule" href="http://www.imooc.com/about/faq?t=3" target="_blank">为什么扣积分？</a>
        <div class="ft clearfix">
            <a id="interal-use" href="javascript:void(0)" class="btn btn-green l">确认</a>
            <a id="interal-cancel" href="javascript:void(0)" class="btn btn-grey r">取消</a>
        </div>
    </div>
</div>

<!--WIKI弹出框 通用-->
<div class="publish clearfix wiki-pop" id="wiki-publish">
    <div class="publish-wrap publish-wrap-disucss pop-con">
        <div class="pop-title">
            <h3>搜索WIKI</h3>
            <span class="icon-close"></span>
        </div>
        
        <div class="search_box clearfix">
            <input class="search_ipt" type="text" placeholder="输入你想要找的WiKi词条名称">
            <input type="button" value="搜索" class="search_btn">
            <a class="createwiki" href="http://www.imooc.com/wiki/create" target="_blank">创建wiki</a>
        </div>
        
        <div id="js-search-area-result" class="search-area-result">
        </div>
    </div>
</div>

<div id="video_mark" class="video_mark" style="display:none;"></div>
<!--<div class="fixed-video js-fixed-video">-->
    <!--<h3>点击按住该条进行拖动</h3>-->
    <!--<div class="fixed-video-con"></div>-->
<!--</div>-->
<!--
//此处结构在js里插入
<div class="animate-mp" style="left:50%;top:50%">-->
    <!--<p class="mp"><i>+</i><span class="num">8</span>MP</p>-->
    <!--<p class="desc">haha</p>-->
<!--</div>-->

<div id="edui_fixedlayer" class="edui-imooc" style="position: fixed; left: 0px; top: 0px; width: 0px; height: 0px;"><div id="edui41" class="edui-popup  edui-bubble edui-imooc" onmousedown="return false;" style="display: none;"> <div id="edui41_body" class="edui-popup-body edui-imooc"> <iframe style="position:absolute;z-index:-1;left:0;top:0;background-color: transparent;" frameborder="0" width="100%" height="100%" src="about:blank" class="edui-imooc"></iframe> <div class="edui-shadow edui-imooc"></div> <div id="edui41_content" class="edui-popup-content edui-imooc">  </div> </div></div></div><div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" style="position: absolute; left: 0px; top: -9999px; width: 1px; height: 1px; z-index: 999999999;"><object id="global-zeroclipboard-flash-bridge" name="global-zeroclipboard-flash-bridge" width="100%" height="100%" type="application/x-shockwave-flash" data="http://www.imooc.com/static/lib/ueditor/third-party/zeroclipboard/ZeroClipboard.swf?noCache=1458607277558"><param name="allowScriptAccess" value="sameDomain"><param name="allowNetworking" value="all"><param name="menu" value="false"><param name="wmode" value="transparent"><param name="flashvars" value="trustedOrigins=www.imooc.com%2C%2F%2Fwww.imooc.com%2Chttp%3A%2F%2Fwww.imooc.com"></object></div></body></html>
<script src='./jquery/jquery-1.8.3.js'></script>
<script>
	$("#js-pl-submit").click( function () { 
			var aa=$("#js-pl-textarea").val();
			//alert(aa);
			$.ajax({
			   type: "GET",
			   url: "co",
			   data: "text="+aa,
			   success: function(msg){
			     alert(  msg );
			   }
			});
	 });
</script>