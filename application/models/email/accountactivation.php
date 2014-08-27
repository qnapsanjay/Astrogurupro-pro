<?php
class Accountactivation  extends CI_Model
{
    public function Accountactivation()
        {
        parent::__construct();
        }
    public function index($userid)
    {
         $data = array(
               'is_active' => '1'
                      );
            $this->db->where('username', $userid);
            $this->db->update('users', $data); 
       }        
}