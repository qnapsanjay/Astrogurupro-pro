<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Astro extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('astro/index');
    }

    public function aboutus() {
        $this->load->view('astro/aboutus');
    }

    public function termsandconditions() {
        $this->load->view('astro/termsandconditions');
    }

    public function contactus() {
        $this->load->view('astro/contactus');
    }
    
    public function services() {
       $this->load->view('astro/services');
         
    }
    
    public function email() {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile_no');
        $message = $this->input->post('message');
        $messageBody = "Hello Doctor,<br/>";
        $messageBody.= "Mr. " . $name . " wanted to contact you, please respond to him ASAP.<br/><br/><hr/>";
        $messageBody.= "<br/>Name : " . $name;
        $messageBody.= "<br/>Email Address : " . $email;
        $messageBody.= "<br/>Mobile No : " . $mobile;
        $messageBody.= "<br/>Subject : <br/><pre>" . $message . "</pre><hr/>";
        $messageBody.="{unwrap}http://example.com/a_long_link_that_should_not_be_wrapped.html{/unwrap}";
        $this->load->helper('email');
        $this->load->library('email');
        $this->email->set_newline("\r\n");
        $this->email->set_mailtype("html");
        $this->email->from($email, 'astroguru');
        $this->email->to('akash_malpani@rediffmail.com');
        $this->email->subject('Mr. ' . $name . ' want to contact you...');
        $this->email->message($messageBody);
        if (!$this->email->send())
            echo $this->email->print_debugger();
        else
            echo "email sending successfull we will contact you shortly!";
    }

}
