<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Editprofile extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Brother_model');
		}

		function index(){
			$session_data = $this->session->userdata('logged_in');
        	$data['username'] = $session_data['username'];
        	$data['userid'] = $session_data['userid'];

			$data['content'] = "editprofile_view";
			$data['query'] = $this->Brother_model->getbrotherprofile($session_data['userid']);
			$this->load->view('template/brother_header',$data);

		}

		function do_upload()
		{
			$config['upload_path'] = 'asset/images';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '1024';
			$config['max_width']  = '250';
			$config['max_height']  = '250';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload())
			{
				// $error = array('error' => $this->upload->display_errors());

				// $this->load->view('upload_form', $error);
				echo "success";
			}
			else
			{
				// $data = array('upload_data' => $this->upload->data());

				// $this->load->view('upload_success', $data);
				echo "fail";
			}
		}

	}
	
?>