<?php
class Mayao_models extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //获取文章列表
    public function getarticle()
    {
        $query = $this->db->get('article', 5, 0);
        return $query->result_array();
        $this->db->select("");
        $this->db->from("get");
        $this->db->join("add", "get.c_id = add.s_id");
        $this->db->where(array("y" => 1))->get("", "", "")->result_array();
    }

    //获取评论数量
    public function clickcomment($aid)
    {
        $query = $this->db->where("aid", $aid)->get("acomment");
        return $query->result_array();
    }

    //获取点赞数量
    public function clickarticle($aid)
    {
        $query = $this->db->where('aid', $aid)->get("aclick");
        return $query->result_array();
    }

    //通过aid查询出详情页
    public function getarticlecontent($aid)
    {
        $query = $this->db->where("aid", $aid)->get("article");
        return $query->row_array();
    }

    //首先查询文章页面
    public function articleone()
    {
        return $this->db->join("direction", "direction.d_id=article.atype")->select('aid,aname,d_name,look,acontent')->get("article")->result_array();
    }

    //分类列表
    public function getdirection()
    {
        $query = $this->db->get("direction");
        return $query->result_array();
    }

    public function gettypearticle($atype)
    {
        //点击分类匹配对应的信息
        return $this->db->join("direction", "direction.d_id=article.atype")->select('aid,aname,d_name,look,acontent')->where("atype='$atype'")->get("article")->result_array();
    }

    public function contentone($aid)
    {
        return $this->db->join("direction", "direction.d_id=article.atype")->where("aid='$aid'")->select('aid,aname,d_name,look,acontent,clickstate,auser,auserimg,atime')->get("article")->row_array();
    }
    //评论接口
    public function getcomment($aid,$cuser,$ctime,$ccomment){
        $this->load->database();
        $arr=array(
            'aid'=>$aid,
            'cuser'=>$cuser,
            'ctime'=>$ctime,
            'ccomment'=>$ccomment
        );
        return $this->db->insert('acomment',$arr);
    }
    //文章搜索接口
    public function articles($d_name){
        return $this->db->join("direction","article.atype=direction.d_id")->where("d_name like '%$d_name%'")->select('aid,aname,d_name,look,acontent')->get("article")->result_array();
    }
    //搜索接口two
    public function articlestwo($aname){

        return $this->db->join("direction","direction.d_id=article.atype")->where("aname like '%$aname%'")->select('aid,aname,d_name,look,acontent')->get("article")->result_array();
    }
}
?>