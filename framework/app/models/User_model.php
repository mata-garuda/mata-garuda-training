<?php
class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_user($username, $password) {

        $p = md5($password);

        $q = "SELECT u.userid, u.userfullname, u.useraddress
              FROM user u 
              WHERE u.username = ? AND u.userpassword = ?";

        $r = $this->db->query($q, [$username, $p]);

        $this->db->close();

        return $r->result_object();

    }

    public function get_token($id) {
        $q = "SELECT u.token
              FROM user u 
              WHERE u.userid = ?";

        $r = $this->db->query($q, [$id]);

        $this->db->close();

        return count($r->result_object) == 1 ? $r->row()->token : 0;
    }

    public function set_token($id, $token) {
        $q = "UPDATE user SET token = '$token' WHERE userid = $id";

        $this->db->query($q);
        $this->db->close();
    }

}