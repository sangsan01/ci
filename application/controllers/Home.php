<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$data['content'] = "home";
		$this->load->model('Brother_model');
		$data['query'] = $this->Brother_model->getbrother();
		$this->load->view('template',$data);
	}

	// function editprofile(){
	// 	$data['content'] = "editprofile";
	// 	$this->load->model('Brother_model');
	// 	$data['query'] = $this->Brother_model->getbrother();
	// 	$this->load->view('template',$data);
	// 	$this->load->view('editprofile',$data);
	// }
}
?>