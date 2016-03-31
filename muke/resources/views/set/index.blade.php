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

    <link rel="stylesheet" href="./setprofiles/base.css" type="text/css">
    <link rel="stylesheet" href="./setprofiles/common-less_002.css" type="text/css">
    <script src="./setprofiles/push.js"></script><script src="./setprofiles/rt.js" async="" type="text/javascript"></script><script type="text/javascript">

        var OP_CONFIG={"module":"user","page":"setprofile","userInfo":{"uid":"3057710","nickname":"\u518d\u6253\u5c0f\u602a\u517d","head":"http:\/\/img.mukewang.com\/user\/54584e120001811202200220-80-80.jpg","usertype":"1","roleid":0}};
        var isLogin = 1;
        var is_choice = "";
        var seajsTimestamp="v=201603290933";
        var ownName="1749537612@qq.com"

    </script>

    <!--
    <link rel="stylesheet" href="/static/component/logic/login/login-regist.css" type="text/css" />
    <link rel="stylesheet" href="/static/css/settings.css" type="text/css" />
    -->
    <link rel="stylesheet" href="./setprofiles/common-less.css" type="text/css">
    <link rel="stylesheet" href="./setprofiles/profile-less.css" type="text/css">

    <script src="./setprofiles/jquery.js" async="" charset="utf-8"></script><script src="./setprofiles/seajs-text.js" async="" charset="utf-8"></script><script src="./setprofiles/common.js" async="" charset="utf-8"></script><script src="./setprofiles/string.js" async="" charset="utf-8"></script><script src="./setprofiles/suggest.js" async="" charset="utf-8"></script><script src="./setprofiles/store.js" async="" charset="utf-8"></script><script src="./setprofiles/json.js" async="" charset="utf-8"></script><script src="./setprofiles/im.js" async="" charset="utf-8"></script><script src="./setprofiles/setprofile.js" async="" charset="utf-8"></script><script src="./setprofiles/socket.js" async="" charset="utf-8"></script><script src="./setprofiles/placeholder.js" async="" charset="utf-8"></script><script src="./setprofiles/validate.js" async="" charset="utf-8"></script><script src="./setprofiles/messagebox.js" async="" charset="utf-8"></script><script src="./setprofiles/settingUitl.js" async="" charset="utf-8"></script><script src="./setprofiles/layer.js" async="" charset="utf-8"></script><link href="./setprofiles/layer.css" rel="stylesheet" charset="utf-8"></head>
<body>

@extends('layouts.master')
@section('sidebar')
    @parent


<div id="main">

    <div class="settings-cont clearfix">

        <div class="setting-left l">
            <ul class="wrap-boxes">
                <li class="active">
                    <a href="setprofile" class="onactive">个人资料</a>
                </li>

                <li>
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


                <div id="setting-profile" class="setting-wrap setting-profile">
                    <form id="profile" action="setown" method="post">

                        <div class="wlfg-wrap clearfix">
                            <label class="label-name" for="nick">昵称</label>
                            <div class="rlf-group">
                                <input name="nickname" id="nick" autocomplete="off" data-validate="nick" class="input rlf-input rlf-input-nick" value="<?php echo $arr[0]['u_name']?>" placeholder="请输入昵称." type="text">
                                <p class="rlf-tip-wrap"></p>
                            </div>
                        </div>

                        <div class="wlfg-wrap clearfix">
                            <label class="label-name" for="job">职位</label>
                            <div class="rlf-group">
                                <select class="input rlf-select" name="job" hidefocus="true" id="job">
                                    <option value="<?php echo $u_zhiwei[0]['pid']?>"><?php echo $u_zhiwei[0]['pname']?></option>
                                    <option value="">请选择职位</option>
                                    <?php foreach($zhiwei as $k=>$v){?>
                                        <option value="<?php echo $v['pid']?>"><?php echo $v['pname']?></option>
                                    <?php }?>
                                </select>
                                <p class="rlf-tip-wrap"></p>
                            </div>
                        </div>

                        <div class="wlfg-wrap clearfix">
                            <label class="label-name" for="province-select">城市</label>
                            <div class="rlf-group profile-address">
                                <select name="sheng" class="one" class="input" hidefocus="true">
                                    <option selected="selected" >选择省份</option>
                                    <?php foreach($area as $k=>$v){?>
                                    <option value="<?php echo $v['region_id']?>"><?php echo $v['region_name']?></option>
                                    <?php }?>
                                </select>
                                <select class="two" name="shi" id="city-select" hidefocus="true">
                                    <option selected="selected" class="two" value="0">选择城市</option>
                                </select>
                                <select name="qu" class="input mr0 three" id="area-select" hidefocus="true">
                                    <option selected="selected" value="0">选择区县</option>
                                </select>
                                <p class="rlf-tip-wrap"></p>
                            </div>
                        </div>

                        <div class="wlfg-wrap clearfix">
                            <label class="label-name">性别</label>
                            <div class="rlf-group rlf-radio-group">
                                <?php  if($arr[0]['u_sex']=="女"){?>
                                <label><input hidefocus="true" value="保密" name="sex" type="radio">保密</label>
                                <label><input hidefocus="true" value="男" name="sex" type="radio">男</label>
                                <label><input hidefocus="true" value="女" checked="checked" name="sex" type="radio">女</label>
                                <?php }else{?>
                                    <label><input hidefocus="true" value="保密" name="sex" type="radio">保密</label>
                                    <label><input hidefocus="true" value="男" name="sex" checked="checked" type="radio">男</label>
                                    <label><input hidefocus="true" value="女"  name="sex" type="radio">女</label>
                                   <?php }?>
                            </div>
                            <p class="rlf-tip-wrap"></p>
                        </div>

                        <div class="wlfg-wrap clearfix">
                            <label class="label-name" for="aboutme">个性签名</label>
                            <div class="rlf-group">
                                <textarea name="aboutme" id="aboutme" cols="30" rows="5" class="textarea"><?php echo $arr[0]['u_qian']?></textarea>
                                <p class="rlf-tip-wrap"></p>
                            </div>
                        </div>

                        <div class="wlfg-wrap clearfix">
                            <label class="label-name" for=""></label>
                            <div class="rlf-group">
                                <span id="profile-submit" hidefocus="true" aria-role="button" class="rlf-btn-green btn-block profile-btn"><input type="submit" value="保存"></span>
                            </div>
                        </div>
                    </form>

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

<script src="./js/jquery.1.8.min.js"></script>
<script>
    //$(".two").change(function(){
    $(document).on("change",".two",function(){
        var c_id=$(this).val();
        $.ajax({
            url:'qu',
            type:'post',
            data:'c_id='+c_id,
            dataType:'json',
            success:function(data){
                //alert(data)
                str="<select class='three' name='class_id'>";
                str+="<option>请选择</option>";
                for(  i in data){
                    str+="<option value='"+data[i]['region_id']+"'>"+data[i]['region_name']+"</option>";
                }
                str+="</select>";
                $(".three").html(str);
            }
        })
    })
    //$(".one").change(function(){
    $(document).on("change",".one",function(){
        var c_id=$(this).val();
        $.ajax({
            url:'qu',
            type:'post',
            data:'c_id='+c_id,
            dataType:'json',
            success:function(data){
                //alert(data)
                str="<select class='two' name='class_id'>";
                str+="<option>请选择</option>";
                for(  i in data){
                    str+="<option value='"+data[i]['region_id']+"'>"+data[i]['region_name']+"</option>";
                }
                str+="</select>";
                $(".two").html(str);
            }
        })
    })
</script>

<!--script-->
<script src="./setprofiles/ssologin.js"></script>
<script type="text/javascript" src="./setprofiles/sea.js"></script>
<script type="text/javascript" src="./setprofiles/sea_config.js"></script>
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
    </script><script src="./setprofiles/h.js" type="text/javascript"></script><a href="http://tongji.baidu.com/hm-web/welcome/ico?s=f0cfcccd7b1393990c78efdeebff3968" target="_blank"><img src="./setprofiles/21.gif" height="20" border="0" width="20"></a>
    <script>
        (function(){
            var bp = document.createElement('script');
            bp.src = '//push.zhanzhang.baidu.com/push.js';
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
    </script>
</div><script src="./setprofiles/user.htm" type="text/javascript"></script><script src="./setprofiles/iplookup.php" type="text/javascript"></script>


</body></html>