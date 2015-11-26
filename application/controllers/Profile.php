<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class Profile extends CI_Controller {
 
  function __construct()
  {
    parent::__construct();
    $this->load->model('Brother_model');
  }
 
  function index(){
    if($this->session->userdata('logged_in'))   //check login role
      {
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['userid'] = $session_data['userid'];
     
        $data['content'] = "profile_view";
        $data['query'] = $this->Brother_model->getbrotherprofile();
        $this->load->view('brother_template', $data);
      }
    
    else
      {
        $data['content'] = "profile_view";
        $data['query'] = $this->Brother_model->getbrotherprofile();
        $this->load->view('guest_template',$data);
      }
  }
 
}
 
?>