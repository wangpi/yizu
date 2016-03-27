define(function(require, exports, module){

    $(function(){
        //左侧导航随屏滚
        if($(window).height()>595){
	        $(window).on('scroll',function(){
	            var start = 115;//临界点，大于此值时为fixed状态，小于此值时为absolute;
	            var $elem = $('.slider');
	            var curL = $('.wrap').offset().left;
	            var curT=$(window).scrollTop();
	            if( curT > start ){
	                $elem.find('.set-btn').hide()
	                $elem.find('.img').addClass('suimg')
	                $elem.find('.user-pic-bg').addClass('su-user-pic-bg')
	                $elem.find('.friend').addClass('r30')
	                $elem.css('position','fixed').css('left',curL+'px').css('top',0);
	            }else{
	                $elem.find('.set-btn').show()
	                $elem.find('.img').removeClass('suimg')
	                $elem.find('.user-pic-bg').removeClass('su-user-pic-bg')
	                $elem.find('.friend').removeClass('r30')
	                $elem.css('position','absolute').css('left','0').css('top','-175px');//-175声明在css中
	            }
	        });       	
        }
        
        $('.signicon').hover(function (){
            $(this).find("span").show()
        }, function (){
            $(this).find("span").hide()
        })
    });
    
    
    /** 
      * 头像上 加好友、发消息功能  
     **/
    require('/static/lib/layer/1.6.0/layer.min.js');
	var faceLib = {}

	var layerbox = "";

	function formatChatMsg(val) {
		if (typeof(val) != "undefined") {
			var sArr = val.match(/\[.*?\]/g);

			if (sArr == null) {
				return val
			}

			for (var i = 0; i < sArr.length; i++) {
				if (faceLib[sArr[i]]) {
					var reStr = "<img src=\"" + faceLib[sArr[i]] + "\" height=\"24\" width=\"24\" />";
					val = val.replace(sArr[i], reStr);
				}
			}
			return val
		}
	}

	//表情
	function openFace(event, textareaId, iconURL) {

		var faceLib = [{
			title: '[微笑]',
			pic: iconURL + '1.png'
		}, {
			title: '[不]',
			pic: iconURL + '2.png'
		}, {
			title: '[亲亲]',
			pic: iconURL + '3.png'
		}, {
			title: '[无聊]',
			pic: iconURL + '4.png'
		}, {
			title: '[鼓掌]',
			pic: iconURL + '5.png'
		}, {
			title: '[伤心]',
			pic: iconURL + '6.png'
		}, {
			title: '[害羞]',
			pic: iconURL + '7.png'
		}, {
			title: '[闭嘴]',
			pic: iconURL + '8.png'
		}, {
			title: '[耍酷]',
			pic: iconURL + '9.png'
		}, {
			title: '[无语]',
			pic: iconURL + '10.png'
		}, {
			title: '[发怒]',
			pic: iconURL + '11.png'
		}, {
			title: '[惊讶]',
			pic: iconURL + '12.png'
		}, {
			title: '[委屈]',
			pic: iconURL + '13.png'
		}, {
			title: '[酷]',
			pic: iconURL + '14.png'
		}, {
			title: '[汗]',
			pic: iconURL + '15.png'
		}, {
			title: '[闪]',
			pic: iconURL + '16.png'
		}, {
			title: '[放屁]',
			pic: iconURL + '17.png'
		}, {
			title: '[洗澡]',
			pic: iconURL + '18.png'
		}, {
			title: '[偶耶]',
			pic: iconURL + '19.png'
		}, {
			title: '[困]',
			pic: iconURL + '20.png'
		}, {
			title: '[咒骂]',
			pic: iconURL + '21.png'
		}, {
			title: '[疑问]',
			pic: iconURL + '22.png'
		}, {
			title: '[晕]',
			pic: iconURL + '23.png'
		}, {
			title: '[衰]',
			pic: iconURL + '24.png'
		}, {
			title: '[装鬼]',
			pic: iconURL + '25.png'
		}, {
			title: '[受伤]',
			pic: iconURL + '26.png'
		}, {
			title: '[再见]',
			pic: iconURL + '27.png'
		}, {
			title: '[抠鼻]',
			pic: iconURL + '28.png'
		}, {
			title: '[心寒]',
			pic: iconURL + '29.png'
		}, {
			title: '[怒]',
			pic: iconURL + '30.png'
		}, {
			title: '[凄凉]',
			pic: iconURL + '31.png'
		}, {
			title: '[悄悄]',
			pic: iconURL + '32.png'
		}, {
			title: '[奋斗]',
			pic: iconURL + '33.png'
		}, {
			title: '[哭]',
			pic: iconURL + '34.png'
		}, {
			title: '[赞]',
			pic: iconURL + '35.png'
		}, {
			title: '[开心]',
			pic: iconURL + '36.png'
		}];

		event.stopPropagation();
		var position = {
			left: event.pageX - 10,
			top: event.pageY - 300
		}
		if ($('#face_panel').size() > 0) {
			$('#face_panel').fadeIn(function() {
				hidePanel();
			});

		} else {

			var $textInput = $(textareaId)[0];
			$('#layer_sendmsg').css("position", "relative")
			$('<div id="face_panel" style="display:block;left:-70px;bottom:50px; z-index:99999999; margin:0"><div id="choose_face"></div></div>').appendTo($('#layer_sendmsg'));

			for (var i = 0; i < faceLib.length; i++) {
				var _faceTitle = faceLib[i].title.substr(1).replace(']', '');
				$('<a title="' + faceLib[i].title + '"  href="javascript:;"><img class="ph_face_s" src=' + faceLib[i].pic + '><p>' + _faceTitle + '</p></a>').appendTo($('#choose_face')).on('click', function(event) {
					event.stopPropagation();
					insertFaceIcion($(this).attr('title'));
					$('#face_panel').hide()
				});

			}
			hidePanel();

			//插入表情转换函数
			function insertFaceIcion(text) {

				if (document.selection) {
					$textInput.focus();
					var cr = document.selection.createRange();
					cr.text = text;
					cr.collapse();
					cr.select();
				} else if ($textInput.selectionStart || $textInput.selectionStart == '0') {
					var start = $textInput.selectionStart,
						end = $textInput.selectionEnd;
					$textInput.value = $textInput.value.substring(0, start) + text + $textInput.value.substring(end, $textInput.value.length);
					$textInput.selectionStart = $textInput.selectionEnd = start + text.length;
				} else {
					$textInput.value += text;
				}
			}

		}

		function hidePanel() {
			$(document).on("click", function(event) { //对document绑定一个影藏Div方法
				if (event.target.id !== 'face_panel') {
					$('#face_panel').hide();
				} else {
					var $textInput = $(textareaId)[0];
					$textInput.focus()
				}

			});

		}

	}

	var $textInput = $('#textInput')[0];

	function insertText(text) {
		if (document.selection) {
			$textInput.focus();
			var cr = document.selection.createRange();
			cr.text = text;
			cr.collapse();
			cr.select();
		} else if ($textInput.selectionStart || $textInput.selectionStart == '0') {
			var start = $textInput.selectionStart,
				end = $textInput.selectionEnd;
			$textInput.value = $textInput.value.substring(0, start) + text + $textInput.value.substring(end, $textInput.value.length);
			$textInput.selectionStart = $textInput.selectionEnd = start + text.length;
		} else {
			$textInput.value += text;
		}
	};

	function sendMsg(url, uid) {
		if ($('#textInput').val() == '') {
			alert('请输入内容');
			return
		} else {
			var inputText = $('#textInput').val();
			$.ajax({
				type: "post",
				url: url,
				dataType: "json",
				//data:{uid:uid,message:inputText.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;')},
				data: {
					uid: uid,
					message: inputText
				},
				success: function(data) {
					layer.close(layerbox);
					layerbox = '';
					layer.msg(data.data.msg, 1, 1);
				}
			})

		}
	}

	$('#face_panel').find('a').each(function(index, element) {
		$(this).click(function() {
			$('#face_panel').hide();
			insertText('[' + $(this).attr('title') + ']');
		});
	});


	//发私信事件
	$('.chatSend').click(function(e) {
		e.preventDefault();
		sendMsg('/u/ajaxsendmessage', $('#js-send-msg').data('uid'));
		return false;
	});

	//发申请事件
	$('.sendInvite').click(function(e) {
		//console.log(1);
		e.preventDefault();
		sendMsg('/u/ajaxaddfriend', $('#js-add-frd').data('uid'));
		//time:3;
		return false;
	});


	// 加好友弹出层
	$('#main').delegate('#js-add-frd, #js-send-msg', 'click', function(e) {
		//console.log(e.target.id)
		
		if (OP_CONFIG.userInfo) {
			$('#textInput').val('');
			layerbox = $.layer({
				type: 1,
				area: [$(this).attr("id") == "js-send-msg" ? '580px' : '422px', 'auto'],
				title: false,
				move: ['.layer_notice', true],
				border: false,
				page: {
					dom: '#layer_sendmsg'
				}
			});

			$(".xubox_main").addClass("pravtie_close"); //点击发送私信时添加类名控制关闭按钮样式
		} else {
			//openLib.login();
			function popLogin() {
				require.async('login_sns', function(login) {
					login.init();
				});
			};
			popLogin();
		}
	});

	$('.tipclose').click(function() {
		$('.addfriendtip').css("display", "none");
	});

	//申请好友成功弹出框

	$('.suclose').click(function() {
		$('.successtip').css("display", "none");
	});

	$(document).delegate('#sendEmojiIcon', 'click', function(e) {
		var textarea = $('#textInput');
		textarea.focus()
		if ($("#face_panel").length > 0) {
			$("#face_panel").toggle()
		} else {
			openFace(e, textarea, '/static/img/smiley/');
		}
		return false;
	})
});