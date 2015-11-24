<?php

  Class User_model extends CI_Model
  {
    public function __construct()
    {
      parent::__construct();
    }

    public function login($username, $password){
      $this -> db -> select('UserID, Username, Password');
      $this -> db -> from('member');
      $this -> db -> where('Username', $username);
      $this -> db -> where('Password', $password);
      $this -> db -> limit(1);
 
      $query = $this -> db -> get();
 
      if($query -> num_rows() == 1){
        return $query->result();
      }
      else{
        return false;
      }
    }
  }
?>