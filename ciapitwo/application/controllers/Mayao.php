<?php

class mayao extends CI_Controller {
   /*
    * 马遥著
    * 文章接口
   */
//文章列表接口
public  function __construct(){
    parent::__construct();
}
public function article(){
//加载model
    $model=$this->load->model("mayao_models");
    $arr=$this->mayao_models->getarticle();
    foreach($arr as $k=>$v){
        //获取文章id
        $aid=$v['aid'];
        //通过aid获取评论数量
        $clickcomment=$this->mayao_models->clickcomment($aid);
        $clickcommentcount=count($clickcomment);
       $arr['clickcomment']=$clickcommentcount;
        //获取点赞数量
        $clickarticle=$this->mayao_models->clickarticle($aid);
        $clickarticlecount=count($clickarticle);
        $arr['clickarticle']=$clickarticlecount;
    }
   echo json_encode($arr);
}
    //文章详情页接口
    public function articlecontent(){
        $model=$this->load->model("mayao_models");
        $aid=empty($_GET['aid'])?"":$_GET['aid'];

        if($aid==""){
            $data=array(
                'state'=>'10010',
                'msg'=>'没有该文章详情'
            );
        }else{
        $data=$this->mayao_models->getarticlecontent($aid);
            if($data==""){
                $data=array(
                    'state'=>'10010',
                    'msg'=>'没有该文章详情'
                );
            }
        }
        echo json_encode($data);
    }
}

