<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Work extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Work_model');
		}

		function index(){
			$data['query'] = $this->Work_model->getwork();
			$data['content'] = "work_view";
			$this->load->view('template/brother_header',$data);		
		}

		function insert(){
			$session_data = $this->session->userdata('logged_in');
			$data = array(
   				'Year' => $this->input->post("year"),
   				'Description' => $this->input->post("description"),	
   				'Work_UserID' => $session_data['userid']
			);
			$this->Work_model->insert($data);
			
			$data['query'] = $this->Work_model->getwork();
			$this->load->view('workdata_view',$data);
		}

		function update(){
			$session_data = $this->session->userdata('logged_in');
			$data = array(
   				'Year' => $this->input->post("year"),
   				'Description' => $this->input->post("description"),	
   				'Work_UserID' => $session_data['userid']
			);
			$this->Work_model->update($data);
			
			$data['query'] = $this->Work_model->getwork();
			$this->load->view('workdata_view',$data);
		}

		function delete(){
			$this->Work_model->delete();

			$data['query'] = $this->Work_model->getwork();
			$this->load->view('workdata_view',$data);
		}

	}
	
?>