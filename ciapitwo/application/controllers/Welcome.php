<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('captcha');
		$this->load->helper('string');
		$this->load->database();
		session_start();
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function ceshi(){
		$re = $this->db->query('select * from direction');
		$data=$re->result_array();
		//print_r($data);die;
		foreach ($data as $k => $v) {
			$re = $this->db->query("select * from classs where d_id='".$v['d_id']."'")->result_array();
			$data[$k]['child']=$re;
			
		}
		echo json_encode($data);
	}

	public function nan(){
		$re = $this->db->query("select * from difficulty");
		$nandu=$re->result_array();
		echo json_encode($nandu);
	}
	public function quan(){
		$nan_id = $_REQUEST['nan_id'];
		$c_id = $_REQUEST['c_id'];
		if ($d_id && $c_id) {
			$re = $this->db->query("select * from course where class_id='$c_id' and nandu_id='$d_id'");
			$list=$re->result_array();
			echo json_encode($list);
		}
		if ($c_id) {
			$re = $this->db->query("select * from course where class_id='$c_id'");
			$list=$re->result_array();
			echo json_encode($list);
		}
	}
}
