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
		public function search($keyword){
			$query = $this->db->query("SELECT * FROM file f,member m WHERE f.File_UserID = m.UserID and m.role = 'brother' and 
    		((CONCAT(Firstname,Lastname) Like '%$keyword%') or m.Firstname Like'%$keyword%' or m.Lastname Like'%$keyword%' or m.School Like'%$keyword%' or m.Position Like'%$keyword%' or m.Mobilephone Like'%$keyword%' or 
    		m.Address Like'%$keyword%' or m.Email Like '%$keyword%' or m.Line Like '%$keyword%' or m.Line Like '%$keyword%' or m.Facebook Like '%$keyword%')");
        	// $this->db->like('username',$keyword);
        	// $this->db->or_like(‘author’,$keyword);
        	// $query = $this->db->get('tablename');
        	return $query->result();
    	}

    	public function getbrotherprofile($id){
    		$query = $this->db->query("SELECT * FROM member m,File f WHERE m.UserID = $id and m.UserID = f.File_UserID and role = 'brother'");

			return $query->result();
    	}

	}
?>