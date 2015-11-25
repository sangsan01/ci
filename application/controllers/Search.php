<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Search extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Brother_model');
    }

    public function index(){
        $keyword = $this->input->post('keyword');
        $data['query'] = $this->Brother_model->search($keyword);
        $this->load->view('result_view',$data);
    }
}
?>  