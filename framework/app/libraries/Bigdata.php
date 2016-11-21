<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bigdata {

    public $db = NULL;

    function __construct(){
        $CI = &get_instance();
        $this->db = $CI->load->database('bigdata', TRUE);
    }

    public function save(){
    }
}
