<?php
class Setpassword extends CI_Model
{
    public function Setpassword() {
        parent::__construct();
    }
  public function index($id, $username, $password) {
        $data = array('password' => $password);
        $this->db->where('id', $id);
        $this->db->where('username', $username);
        $query = $this->db->update('users', $data);
        if ($query) {
            
        } else {
            
        }
    }

}