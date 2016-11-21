<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if(!$this->isValid()) {
            redirect(site_url('auth/index'));
        }
        else {
            $this->load->view('main/index');
        }
    }

    public function index() {

    }

    public function isValid() {
        if(!$this->session->has_userdata('appToken') || !$this->session->has_userdata('appTokenId') ||
            $this->session->userdata('appToken') == "" || $this->session->userdata('appTokenId') == "" ||
            $this->session->userdata('logedIn') != TRUE) {

            return false;

        }
        else {
            return true;
        }
    }

}