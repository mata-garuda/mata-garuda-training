<?php
class Menu_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function get($page, $start, $limit) {
        $result = $this->db->query("
            SELECT * FROM menu
            LIMIT $limit OFFSET $start
        ");

        $this->db->close();

        return $result->result_object();
    }

    public function get_menu($parentid) {

        $result = $this->db->query("
            SELECT
              menuid id,
              menuname title,
              menudescription description,
              menuicon icon,
              menucontroller controller,
              menulink link,
              menuparent parent,
              menuexpand expanded,
              menuleaf leaf
            FROM menu
            WHERE menuparent = $parentid
            ORDER BY menucode ASC
        ");

        $this->db->close();

        return $result->result_object();

    }

    public function get_menu_active($parentid) {

        $result = $this->db->query("
            SELECT
              menuid id,
              menuname title,
              menudescription description,
              menuicon icon,
              menucontroller controller,
              menulink link,
              menuparent parent,
              menuexpand expanded,
              menuleaf leaf
            FROM menu
            WHERE menuparent = $parentid and menuactive = 1
            ORDER BY menucode ASC
        ");

        $this->db->close();

        return $result->result_object();

    }

    public function count() {
        $result = $this->db->query("
            SELECT count(1) counter FROM menu
        ");

        $this->db->close();

        return $result->row()->counter;
    }

}