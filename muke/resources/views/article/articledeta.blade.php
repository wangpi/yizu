<!DOCTYPE html>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>
        get和post的区别_慕课文章
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375">
    <meta property="wb:webmaster" content="c4f857219bfae3cb">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta http-equiv="Cache-Control" content="no-transform ">



    <meta name="Description" content="1.get方式是通过网址进行传递数据的，post是通过http中content进行传递的。get容量小，不适合传递大数据（一般为4k-10k），post容量相对大很多，一般服务器可以达到2G容量。get有缓存的，post没有缓存。get更适合向服务器获取数据，post更适合向服务器传递数据。get安全性低，post安全性较高。但是执行率get比post方法好。">




    <script src="articledet/push.js"></script><script src="articledet/rt.js" async="" type="text/javascript"></script><script type="text/javascript">

        var OP_CONFIG={"module":"article","page":"details","userInfo":{"uid":"3057652","nickname":"mayaomax","head":"http:\/\/img.mukewang.com\/user\/54584e120001811202200220-80-80.jpg","usertype":"1","roleid":0}};
        var isLogin = 1;
        var is_choice = "";
        var seajsTimestamp="v=201603290905";
        var ownName="myphone185@sina.com"

    </script>


    <script>
        var pageInfo = {
            id: 5853
        }
        var user = {
            uid : "3057652",
            img : "http://img.mukewang.com/54584e120001811202200220-100-100.jpg",
            nickname : "mayaomax"
        }
    </script>

    <link rel="stylesheet" href="articledet/a.css" type="text/css">
    <script src="articledet/jquery.js" async="" charset="utf-8"></script><script src="articledet/seajs-text.js" async="" charset="utf-8"></script><script src="articledet/common.js" async="" charset="utf-8"></script><script src="articledet/string.js" async="" charset="utf-8"></script><script src="articledet/suggest.js" async="" charset="utf-8"></script><script src="articledet/store.js" async="" charset="utf-8"></script><script src="articledet/json.js" async="" charset="utf-8"></script><script src="articledet/im.js" async="" charset="utf-8"></script><script src="articledet/details.js" async="" charset="utf-8"></script><script src="articledet/socket.js" async="" charset="utf-8"></script><script src="articledet/prettify.js" async="" charset="utf-8"></script><link href="articledet/prettify.css" rel="stylesheet" charset="utf-8"><script src="articledet/verify-code.js" async="" charset="utf-8"></script><script src="articledet/share.js"></script><link href="articledet/share_style0_16.css" rel="stylesheet"></head>
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
                <li><a href="articl" class="active" target="_self">文章</a></li>
                <!--         <li><a href="/wiki"  target="_self">WIKI</a></li> -->
            </ul>
        </div>
        <div id="login-area">
            <ul class="clearfix logined">
                <li class="header-app">
                    <a href="http://www.imooc.com/mobile/app">
                        <span class="icon-appdownload"></span>
                    </a>
                    <div class="QR-download">
                        <p id="app-text">慕课网APP下载</p>
                        <p id="app-type">iPhone / Android / iPad</p>
                        <img src="articledet/QR-code.jpg">
                    </div>
                </li>
                <li class="remind_warp">
                    <i style="display: none;" class="msg_remind"></i>
                    <a target="_blank" href="http://www.imooc.com/u/3057652/notices"><i class="icon-notifi"></i></a>
                </li>
                <li class="my_message">
                    <a href="http://www.imooc.com/u/3057652/messages" title="我的消息" target="_blank">
                        <span class="msg_icon" style="display: none;"></span>
                        <i class="icon-mail"></i>
                        <span style="display: none;">我的消息</span>
                    </a>
                </li>
                <li class="set_btn user-card-box">
                    <a id="header-avator" class="user-card-item" action-type="my_menu" href="http://www.imooc.com/u/3057652/courses" target="_self"><img src="articledet/54584e120001811202200220-40-40.jpg" height="40" width="40">
                        <i class="myspace_remind" style="display: none;"></i>
                        <span style="display: none;">动态提醒</span>
                    </a>
                    <div class="g-user-card">
                        <div class="card-inner">
                            <div class="card-top">
                                <a href="http://www.imooc.com/u/3057652/courses"><img src="articledet/54584e120001811202200220-100-100.jpg" alt="mayaomax" class="l"></a>
                                <a href="http://www.imooc.com/u/3057652/courses"><span class="name text-ellipsis">mayaomax</span></a>
                                <p class="meta">
                                    <a href="http://www.imooc.com/u/3057652/experience">经验<b id="js-user-mp">12</b></a>
                                    <a href="http://www.imooc.com/u/3057652/credit">积分<b id="js-user-credit">0</b></a>            </p>

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
                                    <span class="tit text-ellipsis">Java入门第一季</span>
                                    <span class="media-name text-ellipsis">1-1 Java简介</span>
                                    <i class="icon-clock"></i>
                                                                            <a href="http://www.imooc.com/video/1430" class="continue">继续</a>
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
        <!--
<div class="app-down-area r">
    <a href="/mobile/app">
        <i class="header-app-icon"></i>慕课APP
    </a>
</div>
-->


        <div class="search-warp clearfix" style="min-width: 32px; height: 60px;">
            <div style="display: none;" class="search-area min" data-search="top-banner">
                <input class="search-input" data-suggest-trigger="suggest-trigger" placeholder="请输入想搜索的内容..." autocomplete="off" type="text">
                <input class="btn_search" data-search-btn="search-btn" type="hidden">
                <ul class="search-area-result" data-suggest-result="suggest-result">
                </ul>
            </div>
            <div class="showhide-search" data-show="no"><i class="icon-search"></i></div>
        </div>
    </div>
</div>


<script>
    var isLogin=1
</script>
<div class="opus-wrap clearfix">

    <div class="detail-left l">
        <div class="detail-path">
            <a href="http://www.imooc.com/article">全部文章</a> \
            <a href="http://www.imooc.com/article/index/cid/105"><?php echo $article[0]['d_name']?></a> \
            <span>详情</span>
        </div>
        <div class="detail-content-wrap">
            <h1 class="detail-title"><?php echo $article[0]['aname']?></h1>
            <div class="dc-addon clearfix">
                <div class="dc-profile l">
                    <a class="cat" href="articlethree?atypetwo=<?php echo $article[0]['atype']?>"><?php echo $article[0]['d_name']?></a>
                    <span class="spacer">
                         <?php
                         isset($str)?$str:$str='m-d';
                         $time=strtotime($article[0]['atime']);
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

                         ?>

                    </span>
                    <span class="spacer"><?php echo $article[0]['look']?>浏览</span>
                </div>
                <div class="dc-sns r">
                    <div style="display: none;" class="share-rl-tips share-posi js-share-statue">
                        <span>分享即可 +</span><strong>1积分</strong>
                        <span class="rule-arrow"></span>
                    </div>
                    <div class="small-share l">
                        <ul class="share-wrap">

                            <li class="weichat-posi">
<!--微博分享开始-->
                                 <wb:share-button appkey="1895276010" addition="simple" type="button" default_text="我刚刚在@马遥max 读了篇好文章" ralateUid="5631475710"></wb:share-button>
<!--微博分享结束-->


                                </li>

<!--qq分享开始--><li class="weichat-posi">

                                <script type="text/javascript">
                                    (function(){
                                        var p = {
                                            url:location.href,
                                            showcount:'1',/*是否显示分享总数,显示：'1'，不显示：'0' */
                                            desc:'666',/*默认分享理由(可选)*/
                                            summary:'666',/*分享摘要(可选)*/
                                            title:'<a href="http://www.mk.com/articledeta?aid=<?php echo $article[0]['aid']?>"><?php echo $article[0]['aname']?></a>',/*分享标题(可选)*/
                                            site:'',/*分享来源 如：腾讯网(可选)*/
                                            pics:'', /*分享图片的路径(可选)*/
                                            style:'102',
                                            width:145,
                                            height:30
                                        };
                                        var s = [];
                                        for(var i in p){
                                            s.push(i + '=' + encodeURIComponent(p[i]||''));
                                        }
                                        document.write(['<a version="1.0" class="qzOpenerDiv" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?',s.join('&'),'" target="_blank">分享</a>'].join(''));
                                    })();
                                </script>
                                <script src="http://qzonestyle.gtimg.cn/qzone/app/qzlike/qzopensl.js#jsdate=20111201" charset="utf-8"></script>
                            <!--qq分享结束-->

                            </li>
                        </ul>

                    </div>
                    <var class="cutoff l">|</var>
                  <span id="js-praise" data-id="5853" class="dc-praise l">
            <i >
                      <?php if(empty($aclick)){?>
<img src="http://www.mkimages.com/zan.jpg" width="20px" height="25px"></i>

                      <span class="aclick">点赞</span>
                      <?php }else{?>

<img src="http://www.mkimages.com/zan.jpg" width="20px" height="25px"></i>
                          <span class="noaclick"> 取消赞</span>
                          <?php }?>

          </span>
                    <var class="cutoff l">|</var>
                                            <span id="js-follow" data-id="5853" class="dc-follow l">

                <i></i>

                      <?php if(empty($acollection)){?>

                                                <span class="collection">收藏</span>
                                                <?php }else{?>
                                                <span class="nocollection">取消收藏</span>
                                                <?php }?>


              </span>

                </div>
            </div>
        </div>
        <strong style="display:block;font-size:22px;margin:22px 0 10px">理论知识</strong>

        <div style="width:770px;height:250px;overflow: scroll">

               <?php echo $article[0]['acontent']?>
           </div>

        <strong style="display:block;font-size:22px;margin:22px 0 10px">代码实例</strong>


        <div style="width:770px;height:200px;overflow: scroll;background-color: #5bc0de">

            <?php echo $article[0]['codeone']?>
        </div>
        <strong style="display:block;font-size:22px;margin:22px 0 10px">复杂图文混排列表</strong>
        <p>这部分是比较复杂的,但是,特别特别的常见.我们先来看一下最终效果图.</p>
        <div content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

  <center><img src="http://<?php echo $article[0]['aimgtwo']?>" width="300px" height="500px"></center>
            </div>
    <p>如上图所示,这应该算是一个比较复杂的图文列表了.不知道你看到这个布局,你会构建怎么样的DOM框架.</p>
    <strong style="display:block;font-size:22px;margin:22px 0 10px">小结</strong>
    <p>这一章的重点有</p>
    <ol>
        <li>CSS如何实现元素的高度和宽度挂钩.</li>
        <li>定位布局,相当的重要</li>
        <li><code>nth-child</code> 实在是一个非常强大的CSS选择器,在具体项目中,怎么使用它.</li>
    </ol>
<!---评论开始-->

    <div class="detail-feedback-wrap">
        <div class="df-title">评论</div>
        <div id="js-feedback-list-wrap" class="feedback-list">
<?php if(empty($pinglun)){?>

    <p class="feedback-none">暂无评论</p>
            <?php }else{?>
    <div style="display:none;" class="release-reply" id="qq"><a href="/u//articles" class="user-head"><img src="" alt=""></a><div class="replay-con"><div class="textarea-wrap"><textarea  class="twoccomment" placeholder="写下你的回复..."></textarea></div><p class="errtip"></p><div class="reply-ctrl clearfix"><div class="verify-code"></div><div class="btn-wrap"><div class="cancel-btn" id="noqq">取消</div><div data-comment-uid="2867502" class="release-reply-btn" id="twocomment">提交</div></div></div></div></div>
    <?php foreach($pinglun as $k=>$v){?>
            <div id="js-feedback-list"><div class="comment-box"><div class="comment clearfix"><div class="feed-author l"><a href="/u/2036809/articles"><img src="http://img.mukewang.com/569f2b650001bb2f07380740-100-100.jpg" width="40"></a><a class="nick" href="/u/2036809/articles"><?php echo $v['cuser']?></a></div><div class="feed-list-content"><p><?php echo $v['ccomment']?></p><div class="comment-footer"><span class="feed-list-time">

                        <!---时间开始-->
                                    <?php
                                    isset($str)?$str:$str='m-d';
                                    $time=strtotime($v['ctime']);
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

                                    ?>

<!--时间结束-->
                                </span><span class="reply-btn"  data-commentid="18909" data-uid="2036809" data-username="<?php echo $v['cuser']?>" value="<?php echo $v['cuser']?>">回复</span></div></div></div></div></div> <?php }}?></div>

<hr>

        <!---判断是否登录-->
        <?php if(!empty($u_name)){?>

        <div class="df-ipt-wrap">
            <div class="feed-author l">
                <span><img src="<?php echo $u_photo?>" alt="mayaomax" width="40"></span>
                <span class="nick" id="u_name"><?php echo $u_name?></span>
            </div>
            <div class="df-text">
                <textarea id="feedback-area" class="ipt" ></textarea>
                <p id="feed-error" class="feed-error"></p>
                <div class="df-bottom clearfix">
                    <div class="verify-code"></div>
                    <button id="cone" class="btn btn-green r">提交</button>
                </div>
            </div>
        </div>
        <?php }else{?>
            <div class="df-ipt-wrap">
                <div class="feed-author l">
                    <img src="http://img.mukewang.com/images/avatar_default.png" alt="" width="40">
                </div>
                <div id="js-text-login" class="df-text df-text-login">
                    <textarea class="ipt" readonly="">请登录后，发表评论</textarea>
                    <div class="df-bottom clearfix">
                        <button id="js-submit" class="btn btn-green disabled r">提交</button>
                    </div>
                </div>

            </div>
      <?php }?>
    </div>



    <!---评论结束-->
    </div>
    <div class="detail-right r">
        <div class="aside-author">
            <div class="p clearfix">
                <a href="http://www.imooc.com/u/3025132/articles" class="l" title="庞灰灰">
                    <img src="http://<?php echo $article[0]['auserimg']?>" width="80">
                </a>
                <p>
                    <a class="nick" href="http://www.imooc.com/u/3025132/articles" title="庞灰灰"><?php echo $article[0]['auser']?></a>
                    <span>学生</span>
                </p>
            </div>
            <p>
                <a href="http://user.qzone.qq.com/1354557784" target="_blank"><img src="http://r.qzone.qq.com/cgi-bin/cgi_get_user_pic?openid=0000000000000000000000003FB863D0&pic=1.jpg&key=0774861bb4c7c359b5950347159158a7"></a>
            </p>
        </div>
        <input type="hidden" value="<?php echo $aid?>" class="aid">
        <input type="hidden" class="cuser">
        <div class="other-article">
            <h2>作者的其它文章</h2>
            <ul>
                <?php foreach($commend as $k=>$v){?>
                <li>
                    <a href="articledeta?aid=<?php echo $v['aid']?>" title="<?php echo $v['aname']?>"><?php echo $v['aname']?></a>
                </li>
                <?php }?>
            </ul>
        </div>
        </div>

</div><!--opus-wrap end-->

<div id="main">

</div>

<!--<div id="footer">-->
<!--    <div class="waper">-->
<!--        <div class="footerwaper clearfix">-->
<!--            <div class="followus r">-->
<!--                <a class="followus-weixin" href="javascript:;" target="_blank" title="微信">-->
<!--                    <div class="flw-weixin-box"></div>-->
<!--                </a>-->
<!--                <a class="followus-weibo" href="http://weibo.com/u/3306361973" target="_blank" title="新浪微博"></a>-->
<!--                <a class="followus-qzone" href="http://user.qzone.qq.com/1059809142/" target="_blank" title="QQ空间"></a>-->
<!--            </div>-->
<!--            <div class="footer_intro l">-->
<!--                <div class="footer_link">-->
<!--                    <ul>-->
<!--                        <li><a href="http://www.imooc.com/" target="_blank">网站首页</a></li>-->
<!--                        <li><a href="http://www.imooc.com/about/job" target="_blank">人才招聘</a></li>-->
<!--                        <li> <a href="http://www.imooc.com/about/contact" target="_blank">联系我们</a></li>-->
<!--                        <li><a href="http://yun.imooc.com/" target="_blank">慕课云</a></li>-->
<!--                        <li><a href="http://www.imooc.com/corp/index" target="_blank">合作专区</a></li>-->
<!--                        <li><a href="http://www.imooc.com/about/us" target="_blank">关于我们</a></li>-->
<!--                        <li> <a href="http://www.imooc.com/about/recruit" target="_blank">讲师招募</a></li>-->
<!--                        <li> <a href="http://www.imooc.com/user/feedback" target="_blank">意见反馈</a></li>-->
<!--                        <li> <a href="http://www.imooc.com/about/friendly" target="_blank">友情链接</a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <p>Copyright © 2016 imooc.com All Rights Reserved | 京ICP备 13046642号-2</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div id="J_GotoTop" class="elevator">-->
<!--    <a class="elevator-weixin" href="javascript:;">-->
<!--        <div class="elevator-weixin-box">-->
<!--        </div>-->
<!--    </a>-->
<!--    <a class="elevator-msg" href="http://www.imooc.com/user/feedback" target="_blank" id="feedBack"></a>-->
<!--    <a class="elevator-app" href="http://www.imooc.com/mobile/app">-->
<!--        <div class="elevator-app-box">-->
<!--        </div>-->
<!--    </a>-->
<!--    <a class="elevator-top" href="javascript:;" style="display:none" id="backTop"></a>-->
<!--</div>-->



<!--script-->
<script src="get%E5%92%8Cpost%E7%9A%84%E5%8C%BA%E5%88%AB_%E6%85%95%E8%AF%BE%E6%96%87%E7%AB%A0_files/ssologin.js"></script>
<script type="text/javascript" src="get%E5%92%8Cpost%E7%9A%84%E5%8C%BA%E5%88%AB_%E6%85%95%E8%AF%BE%E6%96%87%E7%AB%A0_files/sea.js"></script>
<script type="text/javascript" src="get%E5%92%8Cpost%E7%9A%84%E5%8C%BA%E5%88%AB_%E6%85%95%E8%AF%BE%E6%96%87%E7%AB%A0_files/sea_config.js"></script>
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
    </script><script src="get%E5%92%8Cpost%E7%9A%84%E5%8C%BA%E5%88%AB_%E6%85%95%E8%AF%BE%E6%96%87%E7%AB%A0_files/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f0cfcccd7b1393990c78efdeebff3968" target="_blank"><img src="get%E5%92%8Cpost%E7%9A%84%E5%8C%BA%E5%88%AB_%E6%85%95%E8%AF%BE%E6%96%87%E7%AB%A0_files/21.gif" height="20" border="0" width="20"></a>
    <script>
        (function(){
            var bp = document.createElement('script');
            bp.src = '//push.zhanzhang.baidu.com/push.js';
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
</div>


<script src="get%E5%92%8Cpost%E7%9A%84%E5%8C%BA%E5%88%AB_%E6%85%95%E8%AF%BE%E6%96%87%E7%AB%A0_files/user.htm" type="text/javascript"></script><script src="get%E5%92%8Cpost%E7%9A%84%E5%8C%BA%E5%88%AB_%E6%85%95%E8%AF%BE%E6%96%87%E7%AB%A0_files/iplookup.php" type="text/javascript"></script></body></html>
<!--点赞-->
<script>
    $(document).on("click",".aclick",function(){
        aid=$(".aid").attr("value")
        $.ajax({
            url:'aclick',
            type:'post',
            data:'aid='+aid,
            success:function(data){
                if(data==1){
                    alert("请先登录");location.href='denglu'
                }else if(data==2){
                    location.href='articledeta?aid='+aid
                }
            }

        })
    })
</script>
<!---取消点赞-->
<script>
    $(document).on("click",".noaclick",function(){
        aid=$(".aid").attr("value")
        $.ajax({
            url:'noaclick',
            type:'post',
            data:'aid='+aid,
            success:function(data){
           if(data==1){
               location.href='articledeta?aid='+aid
           }
            }

        })
    })
    </script>
<!--收藏-->
<script>
    $(document).on("click",".collection",function(){
        aid=$(".aid").attr("value")
        $.ajax({
            url:'collection',
            type:'post',
            data:'aid='+aid,
            success:function(data){
               if(data==1){
                   alert("请先登录");location.href='denglu'

               }else if(data==2){
                   location.href='articledeta?aid='+aid
               }
            }
        })
    })
</script>
<!---取消收藏-->
<script>
    $(document).on("click",".nocollection",function(){
        aid=$(".aid").attr("value")
        $.ajax({
            url:'nocollection',
            type:'post',
            data:'aid='+aid,
            success:function(data){
            if(data==1){
                location.href='articledeta?aid='+aid
            }
            }

        })
    })
</script>
<!---判断是否登录-->
<script>
    $(document).on("click",".ipt",function(){
        $.ajax({
            url:'ifdenglu',
            type:'post',
            data:'bb=2',
            success:function(data){
               if(data==1){
                   alert('请先登录');location.href="denglu"
               }
            }

        })
    })
</script>
<!--最大级别的评论-->
<script>
    $(document).on("click","#cone",function(){
        u_name=$("#u_name").html()
        ccomment=$(".ipt").val();
        aid=$(".aid").attr("value")
        $.ajax({
            url:'commentone',
            type:'post',
            data:'aid='+aid+'&ccomment='+ccomment+'&u_name='+u_name,
            success:function(data){
              if(data==1){
                  location.href='articledeta?aid='+aid
              }
            }

        })
    })

</script>
<!--点击显示回复-->
<script>
    $(document).on("click",".reply-btn",function(){
        cuser=$(this).attr("value")
        $(".cuser").val(cuser)
      $("#qq").show()
    })
</script>
<!---取消回复-->
<script>
    $(document).on("click","#noqq",function(){
        $("#qq").hide()
    })
</script>
<!---获取要获取的值-->
<script>
    $(document).on("click","#twocomment",function(){
        twoccomment=$(".twoccomment").val()
        aid=$(".aid").attr("value")
        cuser=$(".cuser").attr("value")
        //alert(aid)
        $.ajax({
            url:'commenttwo',
            type:'post',
            data:'aid='+aid+'&ccomment='+twoccomment+'&cuser='+cuser,
            success:function(data){

                if(data==2){
                    location.href='articledeta?aid='+aid
                }else{
                    alert("请先登录");location.href='denglu'
                }
            }

        })
    })
</script>
