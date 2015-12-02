<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('Editprofile');
	}

	function do_upload()
	{
		$config['upload_path'] = 'assets/images';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1024';
		$config['max_width']  = '250';
		$config['max_height']  = '250';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			echo '<script type="text/javascript">alert("กรุณาอัพโหลดรูปภาพตามข้อกำกำหนด")</script>';
			$this->load->view('upload_success', $data);
		}
		else
		{
			echo '<script type="text/javascript">alert("แก้ไขประวัติส่วนตัวสมบูรณ์")</script>';
			// $data = array('upload_data' => $this->upload->data());
			// $this->load->view('upload_success', $data);
		}
	}
}
?>