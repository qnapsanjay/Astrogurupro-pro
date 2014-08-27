<?php
Class Login extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function user_login($uName, $uPass) {
        $this->db->select('email');
        $this->db->from('users');
        $this->db->where("is_active",1);
        $this->db->where("email",$uName);
        $this->db->where("password",$uPass);
        $query = $this->db->get()->result();
        if ( is_array($query) && count($query) == 1 ) {
            // Set the users details into the $details property of this class
            $this->details = $query[0];
            // Call set_session to set the user's session vars via CodeIgniter
            $this->set_session();
            return true;
        }
          else
            return 0; 
        
        //echo $this->db->last_query();
    }
     function set_session() {
        // session->set_userdata is a CodeIgniter function that
        // stores data in CodeIgniter's session storage.  Some of the values are built in
        // to CodeIgniter, others are added.  See CodeIgniter's documentation for details.
        $this->session->set_userdata( array(
                'id'=>$this->details->id,
                'name'=> $this->details->firstName . ' ' . $this->details->lastName,
                'email'=>$this->details->email,
                'isLoggedIn'=>true
            )
        );
    }
}


