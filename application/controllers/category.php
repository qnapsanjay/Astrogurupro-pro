<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('category/index.php');
    }

    public function products() {
        $this->load->view('category/products.php');
    }

    public function productdetails() {
        $this->load->view('category/productdetails.php');
    }

}
