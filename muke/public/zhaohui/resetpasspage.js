define(function(require, exports, module){
	require('common');
	require("/static/component/base/placeholder/placeholder.js");
	require("/static/component/base/util/validate.js");
	var $form=$("#pagePwReset");
	var rpassword=/^[\w~`!@#$%&*()_+<>?:"'+*\/\-\^\\\][{}]{6,16}$/;
	//$form.find("input").placeholder();


	$form.validateSetup({
		fields:{
			newpass:{
				blur:function(e){
					$(this).validate();
					$(this.form).find("[name='confirm']").validate();
				}
			},
			confirm:{
				rules:[{
					rule:function(cb,v){
						if($.trim($(this.form).find("[name='newpass']").val())!==v){
							return "两次密码输入不一致！";
						}
					},
					force:1
				}],
				keyup:function(e){
					if(e.keyCode=="13")
						$("#reset-submit").trigger("click");
					else{
						$(this).validate();
					}
				}						
			}
		},
		onerror:function(e){
			var $t,$d;
			if(e._relateField&&e.tip){
				$t=$(e._relateField);
				$t.addClass("rlf-field-error").next(".rlf-tip-wrap").html(e.tip).addClass("rlf-tip-error");
				($d=$t.data("placeholder-textinput"))&&$d.addClass("rlf-field-error");
			}
		},
		onvalid:function(e){
			var $t,$d;
			if(e._relateField){
				$t=$(e._relateField);
				$t.removeClass("rlf-field-error").next(".rlf-tip-wrap").removeClass("rlf-tip-error").empty();
				($d=$t.data("placeholder-textinput"))&&$d.removeClass("rlf-field-error");
			}
			$("#forgetpwd-globle-error").removeClass("rlf-tip-error").empty();
		}
	});


	$form.find("input[placeholder]").placeholder();
	//gogo
	$("#reset-submit").on("click",function(){
		var $this=$(this);
		$this.closest("form").validate({
			success:function(vals){
				this.submit();
			},
			error:function(){
				
			}
		})
	});
});
