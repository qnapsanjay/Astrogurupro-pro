<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Userprofile extends CI_Controller {
     function __construct() {
        parent::__construct();
                
       }    
     public function view_profile()
    {
        $this->load->view('userdashboard/viewprofile');  
     }  
   public function edit_profile()
    {
      $this->load->view('userdashboard/editprofile');   
     }  
   
   public function changePassword()
    {
      $this->load->view('userdashboard/changepassword');   
    }  
      
}

