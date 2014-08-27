<?php
class Userprofile extends CI_Model
{
    public function Userprofile()
        {
        parent::__construct();
        }
    public function updateUser($code,$email)
    {
            $this->db->where('email', $username);
            $this->db->update('user_registration', $code); 
  
    }      
    public function viewUser($email)
    {
     $sql = "SELECT * FROM some_table WHERE email = ? ";

      $query=$this->db->query($sql, array($email));    
      return $query->result();
    }    
    
    public function updatePass($newpass,$email)
    {
       $data = array(
               'password' => $newpass,
                      );
            $this->db->where('email', $username);
            $this->db->update('user_registration', $data); 
    }  
}