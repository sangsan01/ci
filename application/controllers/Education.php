<?php
	class Education extends CI_Controller{
		function __construct(){
			parent::__construct();
		}

		function index(){
		$this->load->model('Education_model');
		$data['query'] = $this->Education_model->geteducation();
		$data['content'] = "education";
		$this->load->view('template',$data);		
		}

		function geteducation(){
			$this->load->view('education',$data);
		}

	}
	
?>