<?php
class Mayao_models extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    //获取文章列表
    public function getarticle(){
        $query=$this->db->get('article',5,0);
        return $query->result_array();
        $this->db->select("");
        $this->db->from("get");
        $this->db->join("add","get.c_id = add.s_id");
        $this->db->where(array("y"=>1))->get("","","")->result_array();
    }
    //获取评论数量
    public function clickcomment($aid){
        $query=$this->db->where("aid",$aid)->get("acomment");
        return $query->result_array();
    }
    //获取点赞数量
    public function clickarticle($aid){
        $query=$this->db->where('aid',$aid)->get("aclick");
        return $query->result_array();
    }
    //通过aid查询出详情页
    public function getarticlecontent($aid){
        $query=$this->db->where("aid",$aid)->get("article");
        return $query->row_array();
    }
}
?>