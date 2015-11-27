<?php
	class Experience_model extends CI_Model
	{
		public function __construct(){
			parent::__construct();
		}
		
		public function getexperience(){
			$query = $this->db->query("SELECT * FROM work");

			return $query->result();
		}

		public function getbrotherexperience($id){
    		$query = $this->db->query("SELECT * FROM experience WHERE Exp_UserID = $id");

			return $query->result();
    	}
	}
?>