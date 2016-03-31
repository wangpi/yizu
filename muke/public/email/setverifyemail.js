define(function(require, exports, module){
	require('common');
	var util=require("/static/page/user/common/settingUitl.js");
    require("/static/component/base/util/modal.button.js");

    var account = $('#jsMail').val();
    
    function usercheck(){
        var str = '';
            str += '<div class="msg-layer">';
                str += '<div class="keybox"><i class="icon-key"></i></div>';
                    str += '<p>请输入登录密码验证身份</p>';
                    str += '<h4 class="account">'+ account +'</h4>';
                    str += '<div class="error js-error"></div>';
                    str += '<input type="password" placeholder="请输入慕课网登录密码" />';
                    str += '<div class="error"></div>';
                    str += '<a href="javascript:void(0)" class="btn-submit">确定</a>';
                    
                    str += '<button aria-hidden="true" hidefocus="true" data-dismiss="modal" class="btn-close" type="button"></button>';
            str += '</div>';
        return str;
    }
    
	$(".js-resetemail").click(function(){
        var m=$(".msg-layer");
        if(!m.length){
            $("body").append(usercheck());
            m=$(".msg-layer");
            function sendEmail(){
                $(".msg-layer .js-error").html('');
                util.errortipshow($(".msg-layer input"), "");
                $(".msg-layer input").removeClass('inpt-error');
                
                if( $(".msg-layer .btn-submit").html() == '验证中...'){
                    return;
                }
                
                $(".msg-layer .btn-submit").html('验证中...')
                
                var c=$(".msg-layer input").val();
                if(c.length==0){
                	$(".msg-layer input").addClass('inpt-error').focus();
                	util.errortipshow($(".msg-layer input"), "密码不能为空");
                    $(".msg-layer .btn-submit").html('确定')
                    return ;
                }

				$.ajax({
					url:"/user/ajaxcheckpass",
					data:{
                        passwd:c
                	},
					dataType:"json",
					success:function(data){
                        
                        $(".msg-layer .btn-submit").html('确定')
                        
						if(data.result==0){
							window.location="/user/resetemail"
						}
						else{
                            $(".msg-layer input").addClass('inpt-error').focus();
							$(".msg-layer .js-error").html(data.msg);
						}
					},
					error:function(){
                        $(".msg-layer .btn-submit").html('确定')
						$(".msg-layer .js-error").html("服务器错误，请稍后重试！");
					}

				})
            }
            m.on("shown",function(){
                $(".msg-layer .btn-submit").on("click",function(event) {
                	sendEmail()
                })

                $(".msg-layer input").on("keydown",function(event){
		            switch (event.keyCode) {
		                case 13:
	                        sendEmail()
		                break;
		            }
                })
            }).on("hidden",function(){
                $(this).remove();
            });
        }
        m.modal("show");
    });
    
	$(".js-verify").click(function(){
		var $this=$(this);
		if($this.text()=="正在发送...") return ;
		$this.text("正在发送...");
		$.ajax({
			url:"/user/verificationmail",
			dataType:"json",
			success:function(data){
				
				if(data.status==0){
					window.location.href="/user/setverifysent";
				}
				else{
					util.layerError(data.msg);
					$this.text("立即验证");
				}
				
			},
			error:function(){
				util.layerError("系统错误！");
				$this.text("立即验证");
			}
		})

	});

});