<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	function index(){
		$data['content'] = "home";
		$this->load->view('template',$data);
	}

	function view(){
		$this->load->view('template');
		$this->load->model('Brother_model');
		$data['records'] = $this->Brother_model->getbrother();
		
		$this->load->view('home',$data);
	}
}
?>