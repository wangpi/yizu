<?php
class Index_models extends CI_Model {
	
	public function index(){	
		$arr=$this->db->select('picture')->get('picture')->result_array();
		return $arr;
	}

}
?> 