<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'core/X_Controller.php');
require(APPPATH . 'core/X_ControllerCallback.php');

class Role extends X_Controller implements X_ControllerCallback {

    public function __construct() {
        parent::__construct();

        $this->set_context($this);
    }

    public function get_get()
    {

        $field_filters = [
            "roleid",
            "rolename",
            "roledescription",
            "monitoring"
        ];

        $this
            ->set_table("role")
            ->set_field("*")
            ->set_field_search_available($field_filters);

        parent::get_get();
    }

    public function create_post(){

        $field_insert = [
            'rolename'          => $this->post('rolename'),
            'roledescription'   => $this->post('roledescription'),
            'monitoring'        => $this->post('monitoring')
        ];

        $this
            ->set_table("role")
            ->set_field($field_insert);

        parent::create_post();
    }


    public function update_post(){

        $field_id     = $this->post('roleid');
        $field_insert = [
            'rolename'          => $this->post('rolename'),
            'roledescription'   => $this->post('roledescription'),
            'monitoring'        => $this->post('monitoring')
        ];

        $this
            ->set_table("role")
            ->set_field($field_insert)
            ->set_where("roleid=".$field_id);

        parent::update_post();

    }

    public function delete_get(){

        $field_id     = $this->get('roleid');

        $this
            ->set_table("role")
            ->set_where("roleid=".$field_id);

        parent::delete_get();

    }

    public function on_trigger($code, $value)
    {
        switch ($code) {
            case parent::$_on_create:
                $this->set_where($value);
                $this->get_get();
                break;
            default: break;
        }
    }
}