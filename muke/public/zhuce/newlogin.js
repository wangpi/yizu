seajs.config({
    paths:{
        "cptbase":"/static/component/base" //componet base path
    }
});

seajs.use(["cptbase/placeholder/placeholder.js",
            "cptbase/autocomplete/autocomplete.js",
            "cptbase/util/modal.button.js",
            "cptbase/util/validate.js"],
function(){

$.ajaxSetup({cache:false})
//sns window function
var winsns=(function(){
    var o={};
    function clearPrev(){//dereference
        for(var key in o){
            if(key.indexOf("/user")>-1){
                o[key].close&&o[key].close();
                o[key]=null;
                delete o[key];
            }
        }
    }

    return {
        open:function(url){
            var l,t;
            if(o[url]&&o[url].closed===false){
                o[url].focus&&o[url].focus();
                return ;
            }
            clearPrev();
            l=(screen.width-600)/2,
            t=(screen.height-400)/2;
            (o[url]=window.open(url, '_blank', 'toolbar=no, directories=no, status=no, menubar=no, width=600, height=500, top='+t+', left='+l)).focus();
        },
        clear:clearPrev
    }
})();

$("#js-login-sns-wap").on("click","[data-sns]",function(){
    winsns.open($(this).data("sns")+"&referer="+window.location.protocol+"//"+window.location.hostname);//html5 data attr can use 'data' method
});

var loginWithCode = false;
var verifyLoad = false;

function showLoginVerify(){
    loginWithCode = true;
    $('#js-login-verify').show();
}
function isShowLoginCode(){
    if(!verifyLoad){
        verifyLoad = true;
        $.get( imoocSSO.checkVerifyUrl,"username="+$('[name="email"]').val(), function(data){
            if(data.status == 10001){
                showLoginVerify();
            }
        },"json");
    }
}

function setupMsg(selector){
    var $error=$(selector);
    return function(msg){
        var msg=msg||""
            method=msg?"addClass":"removeClass";
        $error[method]("tips-error").html(msg);
    }
}

var loginGlobalMsg=setupMsg("#js-g-error");

$("#js-login-form").validateSetup({
    fields:{
        // email: {
        //     rules: [{
        //         rule: function(cb, v){
        //             if(!loginWithCode){
        //                 isShowLoginCode();
        //             }else{
        //                 showLoginVerify();
        //             }
        //         }
        //     }]
        // },
        password:{
            rules:[function(cb,v){
                if(!loginWithCode){
                    isShowLoginCode();
                }else{
                    showLoginVerify();
                }

                if(!v){
                    return "密码不能为空！";
                }else if(v.length < 6){
                    return "密码不能少于6位！"
                }
            }],
            keyup:function(e){
                if(e.keyCode=="13"){
                    $("#js-login-submit").trigger("click");
                }
                else{
                    $(this).validate();
                }

            }
        },
        verify: {
            rules: [function(cb, v){
                if(!loginWithCode) return true;
                if(!v) {
                    return "验证码不能为空！";
                }
                if(v.length != 4){
                    return "验证码错误";
                }
            }],
            keyup: (function(){
                var interval=300,timer;
                return function(e){
                    var $this=$(this),
                        val = $.trim($this.val());

                    if(timer) clearTimeout(timer);
                    timer=setTimeout(function(){
                        $this.validate(e);
                    },interval);
                }
            })(),
            blur: function(e){
                $(this).siblings(".rlf-tip-wrap").find("span").hide();
                $(this).validate(e);                            
            },
            focus: function(){
                $(this).siblings(".rlf-tip-wrap").find("span").show();
            }
        }
    },
    onerror:function(e){
        var $t,$d;
        if(e._relateField&&e.tip){
            $t=$(e._relateField);
            $t.addClass("ipt-error").siblings(".tips").text(e.tip).addClass("tips-error");
            ($d=$t.data("placeholder-textinput"))&&$d.addClass(".ipt-error");
        }
        loginGlobalMsg();
    },
    onvalid:function(e){
        var $t,$d;
        if(e._relateField){
            $t=$(e._relateField);
            $t.removeClass("ipt-error").siblings(".tips").removeClass("tips-error").empty();
            ($d=$t.data("placeholder-textinput"))&&$d.removeClass("ipt-error");
        }
        loginGlobalMsg();
    }
});

$("#js-login-form input").placeholder();

$("#js-login-submit").button({loadingText:"正在登录..."})
.on("click",function(e){
    e.preventDefault();
    var $this=$(this);
    if($this.hasClass("disabled")){ return;}
    $this.button("loading");
    $this.closest("form").validate({
        success:function(vals){
            var remember=$("#autologin")[0].checked?"1":"0",
                params;

            params = {
                username:vals.email,
                password:vals.password,
                remember:remember
            };

            if(loginWithCode){
                params.verify = $('#js-login-verify').find('.ipt-verify').val();
            }

            //sso方式登录
            imoocSSO.login({
                data:params,
                success:function(data){
                    //console.log(data)
                    data.data={userInfo:""}

                    if(data.status===10001){
                        fireLogined(data.data.userInfo);
                        return ;
                    }
                    else if(data.status==900001){
                        window.location.href="/user/userfrozen";
                        return ;
                    }
                    else if(data.status == 10005||data.status == 10007){ // 需要出验证码
                        showLoginVerify();
                    }

                    if(loginWithCode){
                        refreshVerifyCode('js-login-form');
                        $('#js-login-verify').find('.ipt-verify').val('')
                    }

                    loginGlobalMsg(data.msg);
                    //$("#js-login-submit").button("reset");
                },
                error:function(){
                    loginGlobalMsg("服务错误，稍后重试");
                },
                complete:function(){
                    $("#js-login-submit").button("reset");
                }
            })

            // $.ajax({
            //     url:"/user/login",
            //     data: params,
            //     method:"post",
            //     dataType:"json",
            //     success:function(data){
            //         if(data.status===1){
            //             fireLogined(data.data.userInfo);
            //             return ;
            //         }
            //         else if(data.status==5){
            //             window.location.href="/user/userfrozen";
            //             return ;
            //         }else if(data.status == 9){
            //             showLoginVerify();
            //         }

            //         if(loginWithCode){
            //             refreshVerifyCode('js-login-form');
            //             $('#js-login-verify').find('.ipt-verify').val('')
            //         }
                    

            //         loginGlobalMsg(data.msg);
            //         //$("#js-login-submit").button("reset");
            //     },
            //     error:function(){
            //         loginGlobalMsg("服务错误，稍后重试");
            //     },
            //     complete:function(){
            //         $("#js-login-submit").button("reset");
            //     }

            // });

        },
        error:function(){
            if(signUpForm.find('.ipt-verify').val()){
                refreshVerifyCode();

                var interval=500,valTimer;

                if(valTimer) clearTimeout(valTimer);
                valTimer=setTimeout(function(){
                    signUpForm.find('.ipt-verify').val('');
                },interval)
            }
            
            setTimeout('$("#js-login-submit").button("reset");',1);
        }
    })
});


//signup
var signupGlobalMsg=setupMsg("#js-g-signup-error");
$("#js-signup-form input").placeholder();
$("#js-signup-form").validateSetup({
    fields:{
        email:{
            rules:[{
                rule:function(cb,v){
                    return $.ajax({
                        url:imoocSSO.checkUserName,
                        method:"get",
                        data:{username:v},
                        dataType:"json",
                        success:function(data){
                            if(data.status==10001){
                                cb();
                            }
                            else{
                                cb(data.msg)
                            }
                        }
                    })
                }
            }],/*
            keyup:(function(){
                var interval=300,timer;
                return function(e){
                    var $this=$(this);
                    if(timer) clearTimeout(timer);
                    timer=setTimeout(function(){
                        $this.validate(e);
                    },interval);
                }
            })(),*/
            blur:function(e){
                $(this).next(".tips").find("span").hide();
                $(this).validate(e);
            },
            focus:function(){
                /*$(this).next(".tips").find("span").show();*/
                $(".ipt-email").autocomplete();
            }
        },
        password:{
            blur:function(e){
                /*$(this).next(".tips").find("span").hide();*/
                $(this).validate(e);

                if(!proclaimBtn.hasClass("is-pwd")){
                    var inpValue=protxt.val();
                    pwdPass.val(inpValue);                              
                }
            }/*,
            focus:function(){
                $(this).next(".tips").find("span").show();
            },
            onvalid: function(e) {
                $('input[name="cfmpwd"]', this.form).validate(e);
            }*/
        },
        nick:{
            rules:[{
                rule:function(cb,v){
                    return $.ajax({
                        url:imoocSSO.checkNickName,
                        method:"get",
                        data:{nickname:v},
                        dataType:"json",
                        success:function(data){
                            if(data.status==10001){
                                cb();
                            }
                            else{
                                cb(data.msg)
                            }
                        }
                    })
                }
            }],
            blur:function(e){
                $(this).next(".tips").find("span").hide();
                $(this).validate(e);
            },
            focus:function(){
                $(this).next(".tips").find("span").show();
            }
        },
        /*cfmpwd:{
            rules:[function(cb,v) {
                if(!v) {
                    return "验证密码不能为空！";
                }
                if($('input[name="password"]',this.form).val() !== v) {
                    return '两次密码不一致！';
                }
            }],
            blur:function(e){
                $(this).next(".rlf-tip-wrap").find("span").hide();
                $(this).validate(e);
            },
            focus:function(){
                $(this).next(".rlf-tip-wrap").find("span").show();
            }
        },*/
        verify: {
            rules: [function(cb, v){
                if(!v) {
                    return "验证码不能为空！";
                }
                if(v.length != 4){
                    return "验证码错误";
                }
                return $.ajax({
                    url:imoocSSO.checkVerifyCode,
                    method:"post",
                    data:{verify: v},
                    dataType:"json",
                    success:function(data){
                        if(data.status == 10001){
                            cb();
                        }
                        else{
                            cb(data.msg)
                        }
                    }
                })
            }],
            keyup: (function(){
                var interval=300,timer;
                return function(e){
                    var $this=$(this),
                        val = $.trim($this.val());

                    if(timer) clearTimeout(timer);
                    timer=setTimeout(function(){
                        $this.validate(e);
                    },interval);
                }
            })(),
            blur: function(e){
                $(this).siblings(".rlf-tip-wrap").find("span").hide();
                $(this).validate(e);                            
            },
            focus: function(){
                $(this).siblings(".rlf-tip-wrap").find("span").show();
            }
        }
    },
    onerror:function(e){
        var $t,$d;
        if(e._relateField&&e.tip){
            $t=$(e._relateField);
            $t.addClass("ipt-error").siblings(".tips").html(e.tip).addClass("tips-error");
            ($d=$t.data("placeholder-textinput"))&&$d.addClass("ipt-error");
        }
    },
    onvalid:function(e){
        var $t,$d;
        if(e._relateField){
            $t=$(e._relateField);
            $t.removeClass("ipt-error").siblings(".tips").removeClass("tips-error").empty();
            ($d=$t.data("placeholder-textinput"))&&$d.removeClass("ipt-error");
        }
        signupGlobalMsg();
    }
});


$("#js-signup-submit").button({loadingText:"正在注册..."})
.on("click",function(e){
    var $this=$(this);
    e.preventDefault();
    if($this.hasClass("disabled")){ return;}
    $this.button("loading");
    $this.closest("form").validate({
        success:function(vals){
            imoocSSO.register({
                data:{
                    username:vals.email,
                    password:vals.password,
                    nickname:vals.nick,
                    verify: vals.verify
                },
                success:function(data){
                    if(data.status==10001){
                        window.location.replace("/user/setuserinfo");
                        return;
                        //fireLogined(data.data.userInfo,true);
                    }
                    signupGlobalMsg(data.msg);

                    // 重置验证码
                    refreshVerifyCode();
                },
                error:function(){
                    signupGlobalMsg("服务错误，稍后重试");
                },
                complete:function(){
                    $("#js-signup-submit").button("reset");
                }
            })

            // $.ajax({
            //     url:"/user/register/",
            //     data:{
            //         username:vals.email,
            //         password:vals.password,
            //         nickname:vals.nick,
            //         verify: vals.verify
            //     },
            //     method:"post",
            //     dataType:"json",
            //     success:function(data){
            //         if(data.status===0){
            //             window.location.replace("/user/setuserinfo");
            //             //fireLogined(data.data.userInfo,true);
            //         }
            //         signupGlobalMsg(data.msg);

            //         // 重置验证码
            //         refreshVerifyCode();
            //     },
            //     error:function(){
            //         signupGlobalMsg("服务错误，稍后重试");
            //     },
            //     complete:function(){
            //         $("#js-signup-submit").button("reset");
            //     }
            // });

        },
        error:function(){
            if(signUpForm.find('.ipt-verify').val()){
                refreshVerifyCode();

                var interval=500,valTimer;

                if(valTimer) clearTimeout(valTimer);
                valTimer=setTimeout(function(){
                    signUpForm.find('.ipt-verify').val('');
                },interval)
            }
            setTimeout('$("#js-signup-submit").button("reset")',1);
        }
    })
});

/* verify code */
var signUpForm = $('.valid-form'),
    form = signUpForm.attr('id'),
    pwdPass = $(".js-pass-pwd"),
    protxt = $(".js-txt-pwd"),
    proclaimBtn = $(".js-proclaim"),
    verifyCodeUrl = {
        'js-login-form': imoocSSO.verifyCodeUrl+'?_=',
        'js-signup-form': imoocSSO.verifyCodeUrl+'?_='
    },
    refreshVerifyCode = function(){
        signUpForm.find('.verify-img').attr('src', verifyCodeUrl[form] + new Date().getTime());
    };

    proclaimCode = function(){
        if(proclaimBtn.hasClass("is-pwd")){
            //明文
            var inpValue=pwdPass.val();
            protxt.val(inpValue);

            proclaimBtn.parent().removeClass("js-proclaim-on").addClass("js-proclaim-off");
            proclaimBtn.removeClass("is-pwd");
        
        }else{
            //密码
            var inpValue=protxt.val();
            pwdPass.val(inpValue);

            proclaimBtn.parent().removeClass("js-proclaim-off").addClass("js-proclaim-on");
            proclaimBtn.addClass("is-pwd");
            
        }
    };

signUpForm.find('.verify-img-wrap').append(
    $('<img class="verify-img"/>')
);

refreshVerifyCode(form);

signUpForm.on('click', '.js-verify-refresh', function(e){
    refreshVerifyCode(form);
});

signUpForm.on('click', '.js-proclaim', function(e){
    proclaimCode(form);
});

var fireLogined=window.__fireLogined=window.__fireLogined||function(data,signup){
    var url="/space/index";
    winsns.clear();
    //to url
    if(typeof fromURL!=='undfined'){
       url=fromURL||url;
    }
    window.location.replace(url)
}


});