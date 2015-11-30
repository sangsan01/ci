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
		// function view(){
		// 	$data['query'] = $this->Education_model->geteducation();
		// 	$this->load->view('educationdata_view');		
		// }

		function insert(){
			$session_data = $this->session->userdata('logged_in');
			$data = array(
   				'Start' => $this->input->post("start"),
   				'End' => $this->input->post("end"),	
   				'Degree' => $this->input->post("degree"),
   				'Detail' => $this->input->post("detail"),
   				'Edu_UserID' => $session_data['userid']
			);
			$this->Education_model->insert($data);
			
			$data['query'] = $this->Education_model->geteducation();
			$this->load->view('educationdata_view',$data);
		}

		function update(){
			$session_data = $this->session->userdata('logged_in');
			$data = array(
   				'Start' => $this->input->post("start"),
   				'End' => $this->input->post("end"),	
   				'Degree' => $this->input->post("degree"),
   				'Detail' => $this->input->post("detail"),
   				'Edu_UserID' => $session_data['userid']
			);
			$this->Education_model->update($data);

			$data['query'] = $this->Education_model->geteducation();
			$this->load->view('educationdata_view',$data);
		}

		function delete(){
			$this->Education_model->delete();

			$data['query'] = $this->Education_model->geteducation();
			$this->load->view('educationdata_view',$data);
		}

	}
	
?>