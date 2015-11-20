<?php
	class Brother_model extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function getbrother(){
			$query = $this->db->get('member');

			return $query->result();
		}

		

	}
?>