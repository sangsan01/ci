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

    	public function insert($data){
			$this->db->insert('work', $data);
    	}

    	public function update($data){
    		$this->db->where('Work_ID', $this->input->post("id"));
			$this->db->update('work', $data); 
    	}

    	public function delete(){
    		$this->db->where('Work_ID', $this->input->post("id"));
			$this->db->delete('work');
    	}
	}
?>