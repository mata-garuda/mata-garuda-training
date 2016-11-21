<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'libraries/REST_Controller.php');

class Auth extends REST_Controller {

    public function __construct() {

        $this->set_exclude(TRUE);

        parent::__construct();
    }

    public function index_get() {

        $data_sessions = array('appToken', 'appTokenId', 'logedIn');
        $this->session->unset_userdata($data_sessions);

        $this->load->view('auth/index');
    }

    public function login_post() {
        $this->load->model(['User_model', 'Token_model']);

        $username = $this->post('username');
        $password = $this->post('password');
        $token    = $this->post('token');

        $result   = [];

        if($this->security->xss_clean($username, TRUE) && $this->security->xss_clean($password, TRUE)) {

            $result = $this->User_model->get_user($username, $password);

        }

        // set user token on session

        $app_token = "0";

        if(count($result) == 1) {

            $app_token = md5($result[0]->userid . date('Ymdhis'));

            // set app token
            $this->User_model->set_token($result[0]->userid, $app_token);
            $this->Token_model->add($result[0]->userid, $app_token);

            $data_sessions = [
                'appToken'   => $app_token,
                'appTokenId' => $result[0]->userid,
                'logedIn'    => TRUE
            ];

            $this->session->set_userdata($data_sessions);

        }

        $response = [
            'result'      => $result,
            'status_code' => count($result) == 1 ? 1 : 0,
            'message'     => count($result) == 1 ? "Your login is successfully" : "Username or password not valid",
            'token'       => $app_token
        ];

        $this->response($response, 200);
    }

}