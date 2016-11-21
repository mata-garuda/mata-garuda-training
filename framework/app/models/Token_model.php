<?php
class Token_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function add($id, $token) {
        $datetime = date('Y-m-d h:i:s');

        $q = "INSERT INTO token 
              (userid, created, token) VALUES ($id, '$datetime', '$token')";

        $this->db->query($q);
        $this->db->close();
    }

}