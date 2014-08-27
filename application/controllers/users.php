<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct() {
        parent::__construct();
        $dbconnect = $this->load->database();
        $this->load->model('product/product_categories');
        $this->load->model('product/product_list');
    }

    public function index() {
        $this->load->view('home/home');
    }

    public function aboutus(){
         $this->load->view('home/aboutus'); 
    }
    public function product(){
    $data['categories']=$this->product_categories->index();  
    $this->load->view('product/product&remedies',$data);
    }
     public function product_list(){
      $id=   $this->uri->segment(3, 0);
      $data['list']=$this->product_list->index($id);      
     $data['categories']=$this->product_categories->index();      
     $this->load->view('product/product&remedies',$data);
    }
     public function product_search(){
     $name=$this->input->post('product_name');
     $data['list']=$this->product_list->product_search($name);      
     $data['categories']=$this->product_categories->index();      
     $this->load->view('product/product&remedies',$data);
    }
    public function signup() {
        $this->load->model('signup/signup');
        $this->load->helper('string');
        $name = alternator($this->input->post('fname'), $this->input->post('lname'));
        $email = $this->input->post('email');
        $code = array('first_name' => $this->input->post('fname'),
            'last_name' => $this->input->post('lname'),
            'username' => $this->input->post('email'),
            'gender' => $this->input->post('gender'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'mobile' => $this->input->post('mobile_no'),
            'birth_datetime' => $this->input->post('birth_date') + $this->input->post('birth_time'),
            'birth_place' => $this->input->post('birth_place'),
            'is_active' => "deactive",
            'role_id' => $this->input->post('email'),
            'last_login_ip_address' => $this->input->ip_address()
        );
//         $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
//         $this->form_validation->set_rules('name', 'Username', 'trim|required|min_length[5]|max_length[30]|regex_match[/^[A-Z][a-z]$/]');
//         $this->form_validation->set_rules('gender', 'Gender', 'required');
//         $this->form_validation->set_rules('eamil', 'Email', 'trim|required|valid_email');
//         $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[15]');
//         $this->form_validation->set_rules('mobile_no', 'Contact No.', 'trim|required|regex_match[/^[0-9]{10}$/]');
//         $this->form_validation->set_rules('birth_date', 'Birth_date', 'required');
//         $this->form_validation->set_rules('birth_time', 'Birth_time', 'trim|required');
//         $this->form_validation->set_rules('birth_place', 'Birth_place', 'trim|required|min_length[5]|max_length[30]|regex_match[/^[A-Z][a-z]$/]');
//         if ($this->form_validation->run() == FALSE)
//             redirect ('users');
//       else

        if ($status = $this->signup->user_check($email) == 1) {
            if ($result = $this->signup->user_signup($code)) {
                $messageBody = 'Dear' . $name . ', <br/><br/><hr/>';
                $messageBody.= "you are successfully ragistred";
                $messageBody.= "<br/>please click the link to activate your account";
                $messageBody.='<a href="' . base_url() . 'home/account_activation?userid=' . $email . '">
              ' . base_url() . 'home/account_activation?userid=' . $email . '</a>';
                $messageBody.= "<br/><br/><br/><br/>thanks</br>astroguru team.";
                $this->load->helper('email');
                $this->load->library('email');
                $this->email->set_newline("\r\n");
                $this->email->set_mailtype("html");
                $this->email->from('akash1432l@gmail.com', 'astroguru');
                $this->email->to($email);
                $this->email->subject('activation link');
                $this->email->message($messageBody);
                if (!$this->email->send()) {
                    echo "<script>alert('emailsending failed.!');</script>";
                } else {
                    echo "<script>alert('Form Submitted Successfully....!!!! ');</script>";
                    echo "<script>alert('registration successfull login to your email to activate account.!');</script>";
                }
            } else {
                echo "<script>alert('sorry unsccessfull to complete your request....!!!! ');</script>";
            }
        } else {
            echo "<script>alert('sorry user already exists!');</script>";
        }
    }

    public function account_activation() {
        $userid = $this->input->get('userid');
        $this->load->model('email/Accountactivation');
        if (!$status = $this->Accountactivation->index($userid))
            echo "account activation successfull";
        else
            echo "account activation failed";
    }

    public function login() {
        $uname = $this->input->post('loginusername');
        $upass = $this->input->post('loginpassword');
        $this->load->model('login/login');
        $status = $this->login->user_login($uname, $upass);
        if ($status == 1)
            redirect('userdashboard');
        else
            echo "<script>alert('username or password incorrect !!!! ');</script>";
    }

    public function forget_password() {
        $this->load->helper('email');
        $this->load->library('email');
        $userid = $name = $email = "";
        $username = $this->input->post('forgetpass_email');
        $this->load->model('forgetpassword/forgetpassword');
        if ($data = $this->forgetpassword->user_exists($username)) {
            foreach ($data as $value) {
                $id = $value->id;
                $usernid = $value->username;
                $name = $value->first_name;
                $email = $value->email;
            }
            $messageBody = 'Dear &nbsp;' . $name . ', <br/><br/><hr/>';
            $messageBody.= "<br/>please click the link to reset your password";
            $messageBody.='<a href="' . base_url() . 'resetpassword?id=' . $id . '&username=' . $usernid . '">click here to reset password</a>';
            $messageBody.="<br/><br/><br/><br/>thanks</br>astroguru team.";
            $this->email->set_newline("\r\n");
            $this->email->set_mailtype("html");
            $this->email->from('akash1432l@gmail.com', 'astroguru');
            $this->email->to($email);
            $this->email->subject('password reset link');
            $this->email->message($messageBody);
            if (!$this->email->send())
                echo $this->email->print_debugger();
            else
                echo "<script>alert('password resetlink send to your email !!!! ');</script>";
        }
        else {
            echo "<script>alert('sorry username does not exists!!!! ');</script>";
        }
    }

}
