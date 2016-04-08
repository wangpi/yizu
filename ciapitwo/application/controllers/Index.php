<?php
class Index extends CI_Controller {
	
	public function picture(){
		$this->load->model('Index_models');
		$c=$this->Index_models->index();
		echo json_encode($c);
	}

	public function  video(){
		$z_id=$_GET['id'];
		$this->load->model('Index_models');
		$c=$this->Index_models->video($z_id);
		echo json_encode($c);
	}
}
?>