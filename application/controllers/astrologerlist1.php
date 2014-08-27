<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Astrologerlist1 extends CI_Controller {

    function __construct() {
        parent::__construct();
        $dbconnect = $this->load->database();
    }

    public function index() {
        $this->load->view('userdashboard/astrlogerlist1');
    }

}
