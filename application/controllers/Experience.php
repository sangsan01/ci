<?php
	class Experience extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Experience_model');
		}

		function index(){
			$data['query'] = $this->Experience_model->getexperience();
			$data['content'] = "experience_view";
			$this->load->view('brother_template',$data);		
		}
		// function view(){
		// 	$data['query'] = $this->Experience_model->getExperience();
		// 	$this->load->view('Experiencedata_view');		
		// }

		function insert(){
			$session_data = $this->session->userdata('logged_in');
			$data = array(
   				'Start' => $this->input->post("start"),
   				'End' => $this->input->post("end"),	
   				'Detail' => $this->input->post("detail"),
   				'Exp_UserID' => $session_data['userid']
			);
			$this->Experience_model->insert($data);
			
			$data['query'] = $this->Experience_model->getexperience();
			$this->load->view('experiencedata_view',$data);
		}

		function update(){
			$session_data = $this->session->userdata('logged_in');
			$data = array(
   				'Start' => $this->input->post("start"),
   				'End' => $this->input->post("end"),	
   				'Detail' => $this->input->post("detail"),
   				'Exp_UserID' => $session_data['userid']
			);
			$this->Experience_model->update($data);

			$data['query'] = $this->Experience_model->getexperience();
			$this->load->view('experiencedata_view',$data);
		}

		function delete(){
			$this->Experience_model->delete();

			$data['query'] = $this->Experience_model->getexperience();
			$this->load->view('experiencedata_view',$data);
		}

	}
	
?>