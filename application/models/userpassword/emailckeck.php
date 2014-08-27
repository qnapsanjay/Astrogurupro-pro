<?php
class Emailcheck extends CI_Model
{
    public function Emailcheck()
        {
        parent::__construct();
        }
    public function index($email)
    {
       $sql = "SELECT * FROM some_table WHERE email = ? ";

      $query=$this->db->query($sql, array($email));    
      return $query->result(); 
  
    }      
}

