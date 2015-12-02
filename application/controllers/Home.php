<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Brother_model');
	}

	function index(){
		if($this->session->userdata('logged_in'))		//check login role
   		{
     		$session_data = $this->session->userdata('logged_in');
     		$data['username'] = $session_data['username'];
     		$data['userid'] = $session_data['userid'];
     
     		$data['content'] = "home_view";
     		$data['query'] = $this->Brother_model->getbrother();
     		$this->load->view('template/brother_header', $data);
   		}
		
   		else
   		{
     	  $data['content'] = "home_view";
        $data['query'] = $this->Brother_model->getbrother();
        $this->load->view('template/guest_header',$data);
   		}
	}
}
?>
