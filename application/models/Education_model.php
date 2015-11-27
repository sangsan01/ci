<?php
	class Education_model extends CI_Model
	{
		public function __construct(){
			parent::__construct();
		}
		
		public function geteducation(){
			$query = $this->db->query("SELECT * FROM education");

			return $query->result();
		}

		public function getbrothereducation($id){
    		$query = $this->db->query("SELECT * FROM education WHERE Edu_UserID = $id");

			return $query->result();
    	}
	}
?>