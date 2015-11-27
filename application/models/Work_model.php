<?php
	class Work_model extends CI_Model
	{
		public function __construct(){
			parent::__construct();
		}
		
		public function getwork(){
			$query = $this->db->query("SELECT * FROM work");

			return $query->result();
		}

		public function getbrotherwork($id){
    		$query = $this->db->query("SELECT * FROM work WHERE Work_UserID = $id");

			return $query->result();
    	}
	}
?>