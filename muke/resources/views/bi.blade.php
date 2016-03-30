<div class="course-tool-bar clearfix js-select-state">          <div class="tool-left l js-all-state">              <a data-sort="last" class="sort-item active" href="javascript:;">最新</a>             <a data-sort="sugg" class="sort-item" href="javascript:;">点赞</a>                <a data-sort="coll" class="sort-item" href="javascript:;">采集</a>            </div>          <div class="tool-right r">              <span class="tool-item">                    <a data-sort="last" class="js-ower hide-learned tool-chk" href="javascript:;">只看我的</a>              </span>         </div>      </div>
<div class="course_note" id="course_note"> <ul>  
<?php
    foreach($re as $k=>$v){
?>
<li noteid="892656" class="post-row js-find-txt"> <div class="notelist_headpic"> <a target="_blank" href="/space/u/uid/2930559"> <img width="40" height="40" src="<?php echo $v['u_photo'];?>"> </a> </div> <div class="notelist_content"> <div class="u_name"> <a target="_blank" href="/space/u/uid/2930559"><?php echo $v['u_name'];?></a> </div> <div class="js-notelist-content notelist-content mynote"> <p class='aa' ><?php echo $v['title'];?></p> <div class="notelist-content-more"> <a class="js-toggle-content" href="javascript:;">[ 查看全文 ]</a> </div> </div> <div class="clearfix"> <a class="sava_btn" href="javascript:void(0);">保存</a> </div>   <div class="notelist-bottom clearfix"> <span class="l timeago" title="1459132167"><?php echo $v['data'];?></span> <div class="notelist-actions"> <textarea style="display:none;"><?php echo $v['title'];?></textarea>   <a data-id="892656|2930559" class="Jcollect list-praise " href="javascript:;" title="采集"><span class="icon-star"></span><i>采集</i><em>0</em></a>   <a data-id="892656" class="Jpraise list-praise on" href="javascript:;" title="取消赞"><span class="icon-thumb on icon-thumb-revert"></span>  <em class='bb' pp="<?php echo $v['z_id']?>">1</em></a> </div> </div> </div> </li> 
<?php
    }
?>
</ul></div>
<script type="text/javascript" src='./jquery/jquery-1.8.3.js'></script>
<script type="text/javascript">
     $(".bb").click( function () {
           var zid=$(this).attr("pp"); 
            //alert(zid)
             $.ajax({
               type: "GET",
               url: "zid",
               data: "name="+zid,
               success: function(msg){
                    if(msg=='1'){
                        alert('点赞成功');
                    }
                    else{
                        alert('已经点赞');
                    }
               }
            });
     });  
</script>

