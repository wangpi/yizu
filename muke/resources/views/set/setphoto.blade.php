<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>慕课网</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="77103107776157736375">
    <meta property="wb:webmaster" content="c4f857219bfae3cb">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta http-equiv="Cache-Control" content="no-transform ">
    <meta name="keywords" content="慕课网，慕课官网，MOOC，移动开发，IT技能培训，免费编程视频，php开发教程，web前端开发，在线编程学习，html5视频教程，css教程，ios开发培训，安卓开发教程">
    <meta name="description" content="慕课网（IMOOC）是学习编程最简单的免费平台。慕课网提供了丰富的移动端开发、php开发、web前端、html5教程以及css3视频教程等课程资源。它富有交互性及趣味性，并且你可以和朋友一起编程。">

    <link rel="stylesheet" href="./photo/base.css" type="text/css">
    <link rel="stylesheet" href="./photo/common-less_002.css" type="text/css">
    <script src="./photo/push.js"></script><script src="./photo/rt.js" async="" type="text/javascript"></script><script type="text/javascript">

        var OP_CONFIG={"module":"user","page":"setavator","userInfo":{"uid":3057710,"nickname":"\u518d\u6253\u5c0f\u602a\u517d","head":"http:\/\/img.mukewang.com\/user\/54584e120001811202200220-80-80.jpg","usertype":"1","roleid":0}};
        var isLogin = 1;
        var is_choice = "";
        var seajsTimestamp="v=201603290933";
        var ownName="1749537612@qq.com"

    </script>

    <link rel="stylesheet" href="./photo/login-regist.css" type="text/css">
    <link rel="stylesheet" href="./photo/common-less.css" type="text/css">
    <link rel="stylesheet" href="./photo/avtou-less.css" type="text/css">

    <script src="./photo/jquery.js" async="" charset="utf-8"></script><script src="./photo/seajs-text.js" async="" charset="utf-8"></script><script src="./photo/common.js" async="" charset="utf-8"></script><script src="./photo/string.js" async="" charset="utf-8"></script><script src="./photo/suggest.js" async="" charset="utf-8"></script><script src="./photo/store.js" async="" charset="utf-8"></script><script src="./photo/json.js" async="" charset="utf-8"></script><script src="./photo/im.js" async="" charset="utf-8"></script><script src="./photo/setavator.js" async="" charset="utf-8"></script><script src="./photo/socket.js" async="" charset="utf-8"></script><script src="./photo/messagebox.js" async="" charset="utf-8"></script></head>
<body>


@extends('layouts.master')
@section('sidebar')
    @parent
<div id="main">

    <div class="settings-cont clearfix">

        <div class="setting-left l">
            <ul class="wrap-boxes">
                <li>
                    <a href="setprofile" class="onactive">个人资料</a>
                </li>
                <li class="active">
                    <a href="setphoto">头像设置</a>
                </li>

                <li>
                    <a href="setphone">手机设置</a>
                    <span class="unbound">未绑定</span>
                </li>

                <li>
                    <a href="setemail">邮箱验证</a>
                </li>
                <li>
                    <a href="setpwd">修改密码</a>
                </li>
                <li>
                    <a no-pjajx="" href="setbind">绑定帐号</a>
                </li>
            </ul>
        </div>
        <div class="setting-right">
            <div class="setting-right-wrap wrap-boxes settings">


                <div id="setting-avator" class="setting-wrap setting-avator clearfix">
                    <div class="avator-img l">
                        <div><img id="change" src="<?php echo $arr[0]['u_photo']?>" height="220" width="220"></div>
                        <div>
                            <input hidefocus="true" id="huan" value="换一换" class="js-avator-try avator-try" type="button">
                        </div>
                    </div>
                    <div class="avator-btn-group">
                        <div id="avator-btns" class="avator-btn-inner">

                            <div class="avator-btn-wrap">
                                <form target="uploadtarget" action="upload" method="post" enctype="multipart/form-data">
                                    <a href="javascript:void(0)" hidefocus="true" class="avator-btn-fake">选择头像</a>

                                    <input title="选择头像" name="file" id="file" accept="image/*" type="file">
                                    <input type="submit"  value="提交">
                                </form>

                                <iframe src="./photo/a.htm" id="uploadtarget" name="uploadtarget" style="display:none;" frameborder="0"></iframe>
                            </div>
                        </div>
                        <div class="avator-upload-wrap" style="display:none;">
                            <span hidefocus="true" id="avator-btn-save" aria-role="button" class="rlf-btn-green btn-block">保存</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>

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
<script src="./photo/ssologin.js"></script>
<script type="text/javascript" src="./photo/sea.js"></script>
<script type="text/javascript" src="./photo/sea_config.js"></script>
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
    </script><script src="./photo/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f0cfcccd7b1393990c78efdeebff3968" target="_blank"><img src="./photo/21.gif" height="20" border="0" width="20"></a>
    <script>
        (function(){
            var bp = document.createElement('script');
            bp.src = '//push.zhanzhang.baidu.com/push.js';
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
    <script>
        //上传头像
        /*$(document).on("click","#file",function(){
            $("#sub_img").click();
            return false;
            var image=$("#file").val();
        })*/
        //头像换一换
        //$("#huan").click(function(){
            $(document).on("click","#huan",function(){
            var num=Math.round(Math.random()*9);
            src="./image/"+num+".jpg";
            $("#change").attr("src",src);
            $.post('imhuan',{
                src:src
            },function(txt){
            })
        })
    </script>
</div><script src="./photo/user.htm" type="text/javascript"></script><script src="./photo/iplookup.php" type="text/javascript"></script>


</body></html>