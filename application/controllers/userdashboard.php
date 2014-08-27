<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Userdashboard extends CI_Controller {
     function __construct() {
        parent::__construct();
       
          
       }    
    public function index() {
        $this->load->view('userdashboard/userdashboard');
      }
    public function view()
    {
        $this->load->model('userdashboard/userprofile');  
        $message= $this->userprofile->viewUser($email);
        return $message->result(); 
    }  
   public function edit()
    {
       echo "edit ok";
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $email =$this->input->post('email');
        $code = array('name'=>$this->input->post('fname'),
                      'gender' => $this->input->post('gender'),
                     'mobile_no'=> $this->input->post('mobile_no'),
                      'birth_date' => $this->input->post('birth_date'),
                      'birth_time' => $this->input->post('birth_time'),
                      'birth_place' => $this->input->post('birth_place'),                     
        );
        print_r($code);
        $message= $this->userprofile->updateUser($code,$email);
        echo $message;
     }  
   
   public function changePassword()
    {
        echo "password ok";
        $email =$this->input->post('email');
        $oldpass=$this->input->post('old-password');
        $newpass=$this->input->post('new-password');
        $confpass=$this->input->post('conform-password');
        $message= $this->userprofile->updatePass($newpass,$email);
        echo $message;
    }  
      
}

