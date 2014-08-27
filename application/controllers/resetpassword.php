<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Resetpassword extends CI_Controller {

    function __construct() {
        parent::__construct();
        $dbconnect = $this->load->database();
         $this->load->view('resetpassword/resetpassword');
         $this->load->model('setpassword/setpassword');
    }
    public function index() 
    {
       $id=$this->input->get('id');
       $username=$this->input->get('username');
       echo $id;
       echo $username;
       $password=$this->input->post('newpassword');
       $con_password=$this->input->post('conf_newpassword');
       $this->setpassword->index($id,$username,$password);
  
  }
       

}
