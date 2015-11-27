<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// session_start(); //we need to call PHP's session object to access it through CI
class Profile extends CI_Controller {
 
  function __construct()
  {
    parent::__construct();
    $this->load->model('Brother_model');
    $this->load->model('Education_model');
    $this->load->model('Experience_model');
    $this->load->model('Work_model');


  }
 
  function index(){
  }

  function brotherprofile($id){
    if($this->session->userdata('logged_in'))   //check login role
      {
        $session_data = $this->session->userdata('logged_in');
        $data['username'] = $session_data['username'];
        $data['userid'] = $session_data['userid'];

        $data['content'] = "profile_view";
        $data['queryprofile'] = $this->Brother_model->getbrotherprofile($id);
        $data['queryeducation'] = $this->Education_model->getbrothereducation($id);
        $data['queryexperience'] = $this->Experience_model->getbrotherexperience($id);
        $data['querywork'] = $this->Work_model->getbrotherwork($id);

        $this->load->view('brother_template', $data);
      }
    
    else
      {
        $data['content'] = "profile_view";
        $data['queryprofile'] = $this->Brother_model->getbrotherprofile($id);
        $data['queryeducation'] = $this->Education_model->getbrothereducation($id);
        $data['queryexperience'] = $this->Experience_model->getbrotherexperience($id);
        $data['querywork'] = $this->Work_model->getbrotherwork($id);

        $this->load->view('guest_template',$data);
        
      }
  }
 
}
 
?>