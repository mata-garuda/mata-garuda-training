<?php
class Role_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get() {

        $result = $this->db->query("
            SELECT
              roleid,
              rolename,
              roledescription
            FROM role
        ");

        $this->db->close();

        return $result->result_object();

    }

    public function save($data) {

        $this->db->insert('role',$data);
        $this->db->close();

        return true;

    }

}