<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>IT技术文章-慕课网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375">
    <meta property="wb:webmaster" content="c4f857219bfae3cb">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta http-equiv="Cache-Control" content="no-transform ">

    <meta name="Keywords" content="">


    <meta name="Description" content="慕课网为IT专业技术人员提供最新的文章信息,包括PHP,JAVA,C语言,MySql,DB2等相关文章,更多IT技术资讯、原创内容、开源代码尽在慕课社区">




    <script src="./article/push.js"></script><script src="./article/rt.js" async="" type="text/javascript"></script><script type="text/javascript">

        var OP_CONFIG={"module":"article","page":"index"};
        var isLogin = 0;
        var is_choice = "";
        var seajsTimestamp="v=201603251711";

    </script>



    <link rel="stylesheet" href="./article/a.css" type="text/css">
    <script src="./article/jquery.js" async="" charset="utf-8"></script><script src="./article/seajs-text.js" async="" charset="utf-8"></script><script src="./article/common.js" async="" charset="utf-8"></script><script src="./article/string.js" async="" charset="utf-8"></script><script src="./article/suggest.js" async="" charset="utf-8"></script><script src="./article/store.js" async="" charset="utf-8"></script><script src="./article/json.js" async="" charset="utf-8"></script><script src="./article/im.js" async="" charset="utf-8"></script><script src="./article/index.js" async="" charset="utf-8"></script><script src="./article/socket.js" async="" charset="utf-8"></script><script src="./article/layer.js" async="" charset="utf-8"></script></head>
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
                <li><a href="http://www.imooc.com/article" class="active" target="_self">文章</a></li>
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
                        <img src="./article/QR-code.jpg">
                    </div>
                </li>
                <li class="header-signin">
                    <a href="denglu" id="js-signin-btn">登录</a>
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

    <div class="container clearfix">
        <div class="article-left l">

            <ul class="article-tab clearfix">

                <li class="tabactive">
                    <a data-id="0" href="articlethree?atypetwo=0">全部</a>
                </li>
                    <?php foreach($arr as $k=>$v){?>
                <li>
                    <a data-id="105" href="articlethree?atypetwo=<?php echo $v['d_id']?>"><?php echo $v['d_name']?></a>
                </li>

                <?php }?>
            </ul>
            <div class="article-tool-bar clearfix">
                <div class="tool-left l">

                    <a href="articlenew?new=new&atypetwo=<?php echo $atypetwo?>" class="sort-item active">最新</a>
                    <a href="articlere?re=re&atypetwo=<?php echo $atypetwo?>" class="sort-item ">热门</a>
                </div>
            </div>
            <div class="article-lwrap clearfix">
                <!-- img --> <?php foreach($article as $k=>$v){?>
                <div class="item-img r">
                    <a href="articledeta?aid=<?php echo $v['aid']?>">
                        <img src="http://<?php echo $v['aimg']?>" height="160" width="160">
                    </a>
                </div>
                <!-- text -->

                <div class="item-txt l">
                    <h3 class="item-title">
                        <a href="articledeta?aid=<?php echo $v['aid']?>" class="title-detail"><?php echo $v['aname']?></a>
                    </h3>
                    <p class="item-bd"><?php  echo substr($v['acontent'],0,252);?>
                        。...<a class="read-more" href="articledeta?aid=<?php echo $v['aid']?>">[查看全文]</a></p>
                    <div class="item-btm clearfix">
                        <ul class="l left-info">
                            <li class="hd-pic">
                                <a class="publisher-hd" href="articledeta?aid=<?php echo $v['aid']?>" target="_blank">
                                    <img src="http://<?php echo $v['aimg']?>" alt="" height="20" width="20">
                                </a>
                                <a class="publisher-name" href="http://www.imooc.com/u/3025132/articles" target="_blank"><?php echo $v['auser']?>...</a>
                            </li>
                            <li class="now-tag">
                                <a class="item-tag" href="articledeta?aid=<?php echo $v['aid']?>" target="_blank"><?php echo $v['d_name']?></a>
                            </li>
                            <li class="pass-time"><span>
                                    <?php
                                    isset($str)?$str:$str='m-d';
                                        $time=strtotime($v['atime']);
                                    $way = time() - $time;
                                    $r = '';
                                    if($way < 60){
                                        $r = '刚刚';
                                    }elseif($way >= 60 && $way <3600){
                                        $r = floor($way/60).'分钟前';
                                    }elseif($way >=3600 && $way <86400){
                                        $r = floor($way/3600).'小时前';
                                    }elseif($way >=86400 && $way <2592000){
                                        $r = floor($way/86400).'天前';
                                    }elseif($way >=2592000 && $way <15552000){
                                        $r = floor($way/2592000).'个月前';
                                    }else{
                                        $r = date("$str",$time);
                                    }
                                    echo $r;

                                    ?></span></li>
                            <li class="pass-time"><span><?php echo $v['look']?>浏览</span></li>
                        </ul>
                        <div class="r right-info">
                            <div class="favorite l">
                                <i ></i><em>点赞<?php echo $v['aclick']?></em>
                            </div>
                            <div class="item-judge l">
                                <i ></i><em>评论 <?php echo $v['acomment']?></em>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>

            <div class="article-lwrap clearfix">
                <!-- img -->

                <!-- text -->
               </div>
            <!-- 分页 -->
            <div id="pagenation" class="pagenation"><div class="page">
                    <a href="articletwo?page=1&atypetwo=<?php echo $atypetwo?>&re=<?php echo $re?>">首页</a>
                    <a  href="articletwo?page=<?php echo $lastpage?>&atypetwo=<?php echo $atypetwo?>&new=<?php echo $new?>&re=<?php echo $re?>">上一页</a>
                    <a  href="articletwo?page=<?php echo $nextpage?>&atypetwo=<?php echo $atypetwo?>&new=<?php echo $new?>&re=<?php echo $re?>">下一页</a>
                    <a  href="articletwo?page=<?php echo $quzheng?>&atypetwo=<?php echo $atypetwo?>&new=<?php echo $new?>&re=<?php echo $re?>">尾页</a>
                    一共是<font color="red"><?php echo $quzheng?></font>页 &nbsp;&nbsp;当前页是<font color="red"><?php echo $page?></font>页

                </div></div>
        </div>
        <div class="article-right r">
            <!-- 写文章 -->
      <?php if(empty($u_name)){?>


            <?php }else{?>
            <div class="new-ques">
                <a href="addarticle" class="write-ques">写文章</a>
                <div class="ques-bd">
                    <a href="/u/3057652/articles" class="l sharer-head" target="_blank" title="">
                        <img src="<?php echo $crr[0]['u_photo']?>" alt="" height="40" width="40">
                    </a>
                    <a href="/u/3057652/articles" target="_blank" title="" class="sharer-name"><?php echo $crr[0]['u_name']?></a>
                    <em class="shared-page"><a href="/u/3057652/credit">我的积分：<?php echo $crr[0]['jifen']?></a></em>
                    <ul class="ques-link">
                        <li><a href="/u/3057652/articles">原创</a></li>
                        <li><a href="/u/3057652/articles?type=collect">收藏</a></li>
                    </ul>
                </div>
            </div>


<?php }?>

            <!-- 推荐文章 -->
            <div class="remon-page">
                <h2 class="panel-hd">推荐文章</h2>
                <div class="remon-main">
                    <ul>
                        <?php foreach($maxarticle as $kk =>$vv){?>
                        <li>
                            <h3 class="remon-title">
                                <a href="articledeta?aid=<?php echo $vv['aid']?>" class="title-detail"><?php echo $vv['aname']?></a>
                            </h3>
                            <p class="remon-bd"><?php echo substr($vv['acontent'],0,261);?>...</p>
                            <div class="arti-info clearfix">
                                <ul>
                                    <li class="hd-pic">
                                        <a class="publisher-hd" href="http://www.imooc.com/u/264930/articles" target="_blank">
                                        </a>
                                        <a class="publisher-name" href="http://www.imooc.com/u/264930/articles" target="_blank"><?php echo $vv['auser']?></a>
                                    </li>
                                    <li class="now-tag">
                                        <a class="item-tag" href="http://www.imooc.com/article/index/cid/107/page" target="_blank"><?php echo $vv['d_name']?></a>
                                    </li>
                                    <li class="now-tag">
                                        <span class="viewed-num"><?php echo $vv['look']?>浏览</span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <!-- 一周达人 -->
            <div class="weekly-rank">
                <h2 class="panel-hd">一周达人</h2>
                <div class="article-weekly clearfix">
                    <ol class="weekly-top">
                        <?php for($i=0;$i<count($onetwo);$i++){?>
                        <li>
                            <a href="http://www.imooc.com/u/1376883/articles" class="l hot-head" target="_blank" title="">
                                <img src="http://<?php echo $onetwo[$i]['aimg']?>" alt="" height="40" width="40">
                            </a>
                            <a href="http://www.imooc.com/u/1376883/articles" target="_blank" class="hot-name">
                            <?php echo $onetwo[$i]['auser']?></a>

                            <i class="rank-num weektop-first"><?php echo $i+1?></i>
                        </li>
                        <?php }?>
                    </ol>
                </div>
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
<script src="./article/ssologin.js"></script>
<script type="text/javascript" src="./article/sea.js"></script>
<script type="text/javascript" src="./article/sea_config.js"></script>
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
    </script><script src="./article/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f0cfcccd7b1393990c78efdeebff3968" target="_blank"><img src="./article/21.gif" height="20" border="0" width="20"></a>
    <script>
        (function(){
            var bp = document.createElement('script');
            bp.src = '//push.zhanzhang.baidu.com/push.js';
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
</div><script src="./article/user.htm" type="text/javascript"></script><script src="./article/iplookup.php" type="text/javascript"></script>


</body></html>
<script src="article/jquery.js"></script>