<?php

class X_Model extends CI_Model
{

    public static $type_create = "INSERT ";
    public static $type_select = "SELECT ";
    public static $type_update = "UPDATE ";
    public static $type_delete = "DELETE ";

    protected $config;
    protected $count = 0;

    public function __construct()
    {
        parent::__construct();
    }

    public function create() {
        $result = $this->parse_query_from_config(self::$type_create);
        return $result;
    }

    public function update() {

        $result = $this->parse_query_from_config(self::$type_update);
        return $result;
    }

    public function delete() {

        $result = $this->parse_query_from_config(self::$type_delete);
        return $result;
    }

    public function get() {
        $result = $this->parse_query_from_config(self::$type_select);
        return $result;
    }

    public function count() {
        return $this->get_count();
    }

    public function parse_query_from_config($type) {

        switch ($type) {
            case self::$type_create:
                $this
                    ->db
                    ->insert(
                        $this->config->get_table(),
                        $this->config->get_field()
                    );

                return $this->config->on_create($this);

                break;
            case self::$type_select:

                // register field
                if($this->config->get_field() != null) {
                    $this->db->select($this->config->get_field());
                }

                // register table
                if($this->config->get_table() != null) {
                    $this->db->from($this->config->get_table());
                }

                // register condition (executed by dynamic type data)
                if($this->config->get_where() != null) {
                    $this->db->where($this->config->get_where());
                }

                // register query search (executed by like)
                if($this->config->get_field_search_available() != null) {

                    if($this->config->get_query() != null && $this->config->get_query() != '') {

                        $this->set_like(
                            $this->config->get_field_search_available(),
                            $this->config->get_query()
                        );

                    }
                }

                // register sort
                if($this->config->get_sort() != null) {

                    $sorts = json_decode($this->config->get_sort());

                    if(is_array($sorts)) {

                        foreach ($sorts as $sort) {
                            $this->db->order_by($sort->property, $sort->direction);
                        }

                    }

                }

                // set register limit
                if($this->config->get_limit() != null) {

                    $this->db->limit($this->config->get_limit());

                    if($this->config->get_start() != null) {

                        $this->db->limit($this->config->get_limit(), $this->config->get_start());

                    }

                }

                $this->set_count($this->db->count_all_results(null, false));

                return $this->db->get()->result_object();

                break;
            case self::$type_update:

                $this
                    ->db
                    ->update(
                        $this->config->get_table(),
                        $this->config->get_field(),
                        $this->config->get_where()
                    );

                return $this->config->on_update($this);

                break;

            case self::$type_delete:

                $this
                        ->db
                        ->delete(
                            $this->config->get_table(),
                            $this->config->get_where()
                        );

                return $this->config->on_delete($this);

                break;
            default: break;
        }

        return null;

    }

    /**
     * @return void
     */
    public function set_like($where, $value) {

        if(is_array($where)) {

            foreach ($where as $key) {
                $this->db->or_like($key, $value);
            }
        }

    }

    public function set_config($object) {

        $this->config = $object;

        if($object != null) {

            $this->load->model($object->get_require_model());

        }

    }

    /**
     * @return int
     */
    public function get_count()
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function set_count($count)
    {
        $this->count = $count;
    }



}