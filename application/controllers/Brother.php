<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class Brother extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->model('Brother_model');
   
 }
 
 function index()
 {
   if($this->session->userdata('logged_in'))
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
     //If no session, redirect to login page
     // redirect('Login', 'refresh');
   }
 }
  function search(){

    $keyword = $this->input->post('keyword');
    $data['content'] = "result_view";
    $data['query'] = $this->Brother_model->search($keyword);
    $this->load->view('template/brother_header',$data);
  }

 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }
 
}
 
?>