<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'core/X_Controller.php');
require(APPPATH . 'core/X_ControllerCallback.php');

class User extends X_Controller implements X_ControllerCallback {

    public function __construct() {
        parent::__construct();
    }

    public function get_get()
    {

        $field_filters = [
            "username",
            "userfullname",
            "useraddress",
            "userphone"
        ];

        $field = [
            "userid",
            "roleid",
            "username",
            "userfullname",
            "useraddress",
            "userphone",
            "useractive"
        ];

        $this
            ->set_table("user")
            ->set_field($field)
            ->set_field_search_available($field_filters);

        parent::get_get();
    }

    public function on_trigger($code, $value)
    {

    }
}