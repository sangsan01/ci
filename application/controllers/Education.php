<?php
	class Education extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Education_model');
		}

		function index(){

		$data['query'] = $this->Education_model->geteducation();
		$data['content'] = "education_view";
		$this->load->view('brother_template',$data);		
		}

		// function geteducation(){
		// 	$this->load->view('education_view',$data);
		// }

	}
	
?>