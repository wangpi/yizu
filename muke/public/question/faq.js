define(function(require, exports, module){
	require('common');

	var bindEvent=function(){
		$(".faq h3").on("click",function(){
			$(this).closest('li').addClass('curr').siblings().removeClass('curr');
		})
	}

	bindEvent();
});
