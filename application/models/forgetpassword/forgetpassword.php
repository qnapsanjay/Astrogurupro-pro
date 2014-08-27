<?php
Class Forgetpassword extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function user_exists($email) {

        $this->db->select('id,email, username, first_name');
        $this->db->from('users',1);
        $this->db->where('email', $email); 
        $query = $this->db->get();
        if ($query->num_rows() ==1)
        {     
         return $query->result();
         }
         else{
        return false;
             }
      }
}


