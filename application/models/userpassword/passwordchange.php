<?php
class Passwordchange extends CI_Model
{
    public function Passwordchange()
        {
        parent::__construct();
        }
     
    public function Userpasswordchange($email,$password)
    {
            $data = array(
               'password' => $password,
                      );
            $this->db->where('email', $username);
            $this->db->update('user_registration', $data); 
         
    }
}
