<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Brother_model');
	}

	function index(){
		$data['content'] = "home_view";
		$data['query'] = $this->Brother_model->getbrother();
		$this->load->view('guest_template',$data);
	}
}
?>