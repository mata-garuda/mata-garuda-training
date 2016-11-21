<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'core/X_Controller.php');
require(APPPATH . 'core/X_ControllerCallback.php');

class Menu extends X_Controller implements X_ControllerCallback {

    public function __construct() {
        parent::__construct();
    }

    public function get_get()
    {

        $field_filters = [
            "menuid",
            "menuname",
            "menudescription",
            "menucode"
        ];

        $this
            ->set_table("menu")
            ->set_field("*")
            ->set_field_search_available($field_filters);

        parent::get_get();
    }


    public function sidebar_get() {
        $nodes   = [
            'success' => true,
            'children' => $this->get_init_menu(0)
        ];

        $this->response($nodes, 200);
    }

    private function get_init_menu($id) {

        $this->load->model('Menu_model');

        $results  = $this->Menu_model->get_menu_active($id);
        $children = [];
        $start    = 0;

        foreach ($results as $result) {
            $children[$start] = [
                'id'          => $result->id,
                'name'        => $result->title,
                'iconCls'     => $result->icon,
                'description' => $result->description,
                'controller'  => $result->controller,
                'link'        => $result->link,
                'parent'      => (int) $result->parent,
                'expanded'    => $result->expanded == 1 ? true : false,
                'leaf'        => $result->leaf == 1 ? true : false,
                'children'    => $this->get_init_menu($result->id)
            ];

            $start++;
        }

        return $children;

    }

    public function on_trigger($code, $value)
    {

    }
}