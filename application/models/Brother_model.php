<?php
	class Brother_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function getbrother(){
			$query = $this->db->query("SELECT * FROM member m,File f WHERE m.UserID = f.File_UserID and role = 'brother' ");

			return $query->result();
		}
	}
?>