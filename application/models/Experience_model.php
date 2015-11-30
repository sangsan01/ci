<?php
	class Experience_model extends CI_Model
	{
		public function __construct(){
			parent::__construct();
		}
		
		public function getexperience(){
			$query = $this->db->query("SELECT * FROM experience");

			return $query->result();
		}

		public function getbrotherexperience($id){
    		$query = $this->db->query("SELECT * FROM experience WHERE Exp_UserID = $id");

			return $query->result();
    	}

    	public function insert($data){
			$this->db->insert('experience', $data);
    	}

    	public function update($data){
    		$this->db->where('Exp_ID', $this->input->post("id"));
			$this->db->update('experience', $data); 
    	}

    	public function delete(){
    		$this->db->where('Exp_ID', $this->input->post("id"));
			$this->db->delete('experience');
    	}
	}
?>