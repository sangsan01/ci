<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Email extends CI_Controller{
		function __construct(){
			parent::__construct();
		}

		public function index(){
			$receiver = $this->input->post('receiver');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');

			$sendername = $this->input->post('sendername');
			$senderemail = $this->input->post('senderemail');
				
			$this->email->from($senderemail, $sendername);
			$this->email->to($receiver); 

			$this->email->subject($subject);
			$this->email->message($message);	

			$this->email->send();

		}

	}
	
?>