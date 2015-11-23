<?php
	class File_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function getfile(){
			$query = $this->db->get('file');

			return $query->result();
		}

		

	}
?>