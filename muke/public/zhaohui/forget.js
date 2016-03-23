define(function(require, exports, module){
	require('common');
function checkIpt(checkTarget) {
	var regName = /^[\u4E00-\u9FA5\uf900-\ufa2d\w]{1,24}$/,
		regMail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/,
		_getWrongBox = $('.msg_wrong').find('div');

	if($('#pageRegister').html()){
		var regPass = $('.inpt_regPas').val()
			_getName = regName.test($('.inpt_regName').val()),
			_getMail = regMail.test($('.inpt_regMail').val()),
			_getPass = $('.inpt_regPas').val().length > 5,
			_ckSp = $('.inpt_regPas').val().indexOf(' ')>=0;
	};
	
	switch(checkTarget) {
        case 'checkMail':
		
			if($('.inpt_regMail').val()== ""){
				$('.reg_mail_th').html('<span class="reg_wrong">请输入邮箱</span>');
			}else{
				//if($('.reg_mail_th').find('.reg_right').length == 1){
					$.ajax({ 
						 type: 'post',
						 url: '/user/ajaxcheckemail',
						 data: 'email=' + $('.inpt_regMail').val(),
						 dataType: 'json',
						 success: function(data){
							if(data.status == 1){
								$('.reg_mail_th').html('<span class="reg_right"></span>');
								
							}else{
								$('.reg_mail_th').html('<span class="reg_wrong">'+data.msg+'</span>');
							}
						 }
						 /*,
						 error: function(e){
							alert('后端请求失败,请检查后端接口！');	 
						 }*/
					})
				//}
			}
		
		break;
        case 'checkPass':
			if (_getPass) {
				if(_ckSp){
					$('.reg_pass_th').html('<span class="reg_atn">密码不能有空格</span>');
				}else{
					$('.reg_pass_th').html('<span class="reg_right"></span>');
				}
			} else {
				$('.reg_pass_th').html('<span class="reg_atn">密码不能少于6位</span>');
			}
		break;
		case 'checkRegedMail':
			if (regMail.test($('.inpt_regedMail').val())) {
				_getWrongBox.hide();
			} else {
				if($('.inpt_regedMail').val() == ""){
					_getWrongBox.html('请输入邮箱');
					_getWrongBox.show();
				}else{
					_getWrongBox.html('邮箱格式错误');
					_getWrongBox.show();
				}
			}
		break;
		case 'checkRstPw':
			var _getRstPwVal = $('.inpt_rstPw').val(),
				_getRstPwVal_c = $('.inpt_rstPw_c').val();
			if (_getRstPwVal.length < 6) {
				_getWrongBox.html('密码不能少于6位');
				_getWrongBox.show();
			} else if(_getRstPwVal.length > 16){
				_getWrongBox.html('密码不能大于16位');
				_getWrongBox.show();
			}else {
				if (_getRstPwVal.indexOf(' ')>=0){
					_getWrongBox.html('密码不能含有空格');
					_getWrongBox.show();
				}else{
					_getWrongBox.hide();
					if(_getRstPwVal != _getRstPwVal_c){
						if(_getRstPwVal_c != ''){
							_getWrongBox.html('密码输入不一致');
							_getWrongBox.show();
						}
					}else{
						_getWrongBox.hide();	
						$('#pagePwReset').submit();
					}
				}
			}
		break;
	}
	if($('#pageRegister').html()){
		if (_getName) {
			$('.reg_name_th').html('<span class="reg_right"></span>');
		} else {
			$('.reg_name_th').html('<span class="reg_wrong">中英数字下划线1-24字</span>');
		}
		/*if (_getName && _getMail && _getPass ) {
			$('.loginbox_done').find('input').removeAttr('disabled');
		}else{
			$('.loginbox_done').find('input').attr('disabled','disabled');
		}*/
	}
};

/*checkIpt();
//跳转注册页 register.phtml
$(document).delegate('.inpt_regName', 'blur',
function() {  
	checkIpt();
});
$(document).delegate('.inpt_regMail', 'blur',
function() {  
	checkIpt('checkMail');
});
$(document).delegate('.inpt_regPas', 'blur',
function() {   
	checkIpt('checkPass');
})
$(document).delegate('.loginbox_done a', 'click', function() { 
	checkIpt('checkMail');
	checkIpt('checkPass');
	if($('.reg_right').length == 3){
		$('#pageRegister').submit();
	}
})*/


//忘记密码找回页 forget.phtml
$(document).delegate('.inpt_regedMail', 'blur',
function() {
    checkIpt('checkRegedMail');
});
/*/重置密码页 passwdreset.phtml
$(document).delegate('.inpt_rstPw_c', 'blur',
function() {
    checkIpt('checkRstPw');
});
*/
/*$(document).delegate('.inpt_rstPw', 'blur',
function() {
    checkIpt('checkRstPw');
});
$(document).delegate('.rstBtnDone', 'click',
function() {
	if($('.inpt_rstPw_c').val() == ''){
		$('.msg_wrong').find('div').html('请输入确认密码');
		$('.msg_wrong').find('div').show();
	}else{
    	checkIpt('checkRstPw');
	}
});
*/
var _codeImg = $('.code_img').find('img');
_codeImg.attr('src','/user/getcode?t='+new Date().getTime());

$(document).delegate('.code_img', 'click',
function() { 
	_codeImg.removeAttr('src');
	_codeImg.attr('src','/user/getcode?t='+new Date().getTime());
})

$(document).delegate('.cngImg', 'click', function() { 
	_codeImg.removeAttr('src');
	_codeImg.attr('src','/user/getcode?t='+new Date().getTime());
})



function getPasswdFunc() { 
	var _msgBox = $(".msg_wrong").find('div'),
		_rwMark = $('.inpt_code').parent('div');
	$.ajax({
		type: "POST",
		url: "/user/getpasswd",
		dataType:"json",
		data: "email="+$('.inpt_regedMail').val()+"&verifycode="+$('.inpt_code').val(),
		success: function(data) { 
			if( data.status === 1 ) { 
				window.location = '/user/sendresult'
			};
			if( data.status === 0 ) { 
				_msgBox.html(data.msg);
				_msgBox.show();
			};
			if( data.status === 2 ) { 
				if($('.inpt_regedMail').val() == ""){
					_msgBox.html('请输入邮箱');
				}else{
					_msgBox.html(data.msg);
				}
				_msgBox.show();
			};
			if( data.status === 3 ) { 
				_rwMark.addClass('code_ipt_w');
			};
			if( data.status === 4 ) { 
				_msgBox.html(data.msg);
				_msgBox.show();
			};
		},
		error: function() {
			alert("请求无响应！");	
		}
	});		
}

$(document).delegate('.loginbox_getPas', 'click',
function() {  
	getPasswdFunc();
});
$(window).keydown(function(event){
	if(event.keyCode==13){
		getPasswdFunc();
	}
});

});
