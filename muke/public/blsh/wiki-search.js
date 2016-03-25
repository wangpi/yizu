define(function(require, exports, module){
    
    var util = {
        value : ''
    }
    
    var search = function (params){
        $.ajax({
            type: "get",
            url: '/course/find/id/'+course_id,
            dataType:"html",
            data: params,
            success: function(res){
                $('#js-search-area-result').html(res)
            }
        })
    }
        
    exports.init = function (){
        
        // WIKI搜索
        $('#wiki-publish').on('click', '.search_btn', function (){
            var value = $.trim($('#wiki-publish').find('.search_ipt').val());
            util.value = value;
            if(value == ''){
                search({})
            }else{
                search({page: 1, words: value})
            }
        })
        
        $('#wiki-publish').on('click', '.js-page a', function (){
            if($(this).hasClass('active')) {
                return;
            }
            
            var value = $('#wiki-publish').find('.search_ipt').val();
            var page = $(this).attr('data-page');
            search({page: page, words: util.value})
        })
        
        $('#wiki-publish').on('keyup', '.search_ipt', function(e){
            if(e.keyCode=="13"){
                $('#wiki-publish').find('.search_btn').trigger("click");
            }
        })
        
        search({})
    }
})