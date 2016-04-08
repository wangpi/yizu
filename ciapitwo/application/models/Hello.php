<?php
class Hello extends CI_Model{
    function Hello(){
        parent::__construct();
    }
    //登陆接口
    function login($u_email){
        $this->load->database();
        $query = $this->db->query("select * from user1 where u_email='$u_email'");
        return $query->row_array();
    }
    //注册时验证邮箱
    function email($u_email){
            $this->load->database();
            $arr=$this->db->query("select * from user1 where u_email='$u_email'");
            return $arr->row_array();
    }
    //注册接口
    function regitster($u_name,$u_email,$u_pwd){
        $this->load->database();
        $data=array(
            'u_name'=>$u_name,
            'u_email'=>$u_email,
            'u_pwd'=>md5($u_pwd),
        );
        return $this->db->insert('user1',$data);
    }
}