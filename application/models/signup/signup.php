<?php
class Signup extends CI_Model
{
    public function Registration()
        {
        parent::__construct();
        }
    public function user_check($email)
    {
        $this->db->select('email');
        $this->db->from('users');
        $this->db->where("email", $email);
        $query = $this->db->get();
        if ($query->num_rows() != 1)
            return "1";
          else
            return "0";    
    }      
    public function user_signup($code)
    {
         $message= $this->db->insert('users',$code); 
         return $message;
  
    }        
}