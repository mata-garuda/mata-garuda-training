<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'libraries/REST_Controller.php');
require(APPPATH . 'core/X_ControllerModelCallback.php');

class X_Controller extends REST_Controller implements X_ControllerModelCallback {

    public static $_on_create     = "on_create";
    public static $_on_get        = "on_get";
    public static $_on_update     = "on_update";
    public static $_on_delete     = "on_delete";

    public static $_succes_string = "success";
    public static $_data_string   = "data";
    public static $_total_string  = "total";
    public static $_page_string   = "page";
    public static $_start_string  = "start";
    public static $_limit_string  = "limit";
    public static $_sort_string   = "sort";
    public static $_query_string  = "query";
    public static $_where_string  = "filter";

    protected $_page  = 1;
    protected $_start = 0;
    protected $_limit = 0;
    protected $_sort  = array();
    protected $_where = array();
    protected $_query = array();

    protected $_require_model = array();
    protected $_field_search_available = array();

    /*
     * Automatic query builder configuration
     */

    protected $_xcontext;
    protected $_xtype;
    protected $_xtable;
    protected $_xfield  = array();
    protected $_xfilter = array();

    public function __construct() {
        parent::__construct();
        /*
         * Load some parameter from get
         */

        $this->set_page($this->get(self::$_page_string));
        $this->set_start($this->get(self::$_start_string));
        $this->set_limit($this->get(self::$_limit_string));
        $this->set_sort($this->get(self::$_sort_string));
        $this->set_query($this->get(self::$_query_string));
        $this->set_where($this->get(self::$_where_string));

        /*
         * Load model X_model
         */

        $this->load->model('X_model');

    }

    public function get_get() {

        $this->X_model->set_config($this);

        $nodes   = [
            self::$_succes_string => true,
            self::$_data_string   => $this->X_model->get(),
            self::$_total_string  => $this->X_model->count()
        ];

        $this->response($nodes, 200);
    }

    public function create_post() {

        $this->X_model->set_config($this);
        $this->X_model->create();
    }

    public function update_post() {

        $this->X_model->set_config($this);
        $this->X_model->update();

    }

    public function delete_get() {

        $this->X_model->set_config($this);
        $this->X_model->delete();

    }

    /**
     * @return mixed
     */
    public function get_context()
    {
        return $this->_xcontext;
    }

    /**
     * @param mixed $xcontext
     */
    public function set_context($xcontext)
    {
        $this->_xcontext = $xcontext;
    }



    /**
     * @return mixed
     */
    public function get_page()
    {
        return $this->_page;
    }

    /**
     * @param mixed $page
     */
    public function set_page($page)
    {
        $this->_page = $page;
    }

    /**
     * @return mixed
     */
    public function get_start()
    {
        return $this->_start;
    }

    /**
     * @param mixed $start
     */
    public function set_start($start)
    {
        $this->_start = $start;
    }

    /**
     * @return mixed
     */
    public function get_limit()
    {
        return $this->_limit;
    }

    /**
     * @param mixed $limit
     */
    public function set_limit($limit)
    {
        $this->_limit = $limit;
    }

    /**
     * @return array
     */
    public function get_sort()
    {
        return $this->_sort;
    }

    /**
     * @param array $sort
     */
    public function set_sort($sort)
    {
        $this->_sort = $sort;
    }

    /**
     * @return array
     */
    public function get_where()
    {
        return $this->_where;
    }

    /**
     * @param array $where
     */
    public function set_where($where)
    {
        $this->_where = $where;
    }

    /**
     * @return array
     */
    public function get_query()
    {
        return $this->_query;
    }

    /**
     * @param array $query
     */
    public function set_query($query)
    {
        $this->_query = $query;
    }

    /**
     * @return array
     */
    public function get_require_model()
    {
        return $this->_require_model;
    }

    /**
     * @param array $require_model
     */
    public function set_require_model($require_model)
    {
        $this->_require_model = $require_model;
    }

    /**
     * @return mixed
     */
    public function get_table()
    {
        return $this->_xtable;
    }

    /**
     * @param mixed $xtable
     */
    public function set_table($xtable)
    {
        $this->_xtable = $xtable;

        return $this;
    }

    /**
     * @return mixed
     */
    public function get_field()
    {
        return $this->_xfield;
    }

    /**
     * @param mixed $xfield
     */
    public function set_field($xfield)
    {
        $this->_xfield = $xfield;

        return $this;
    }

    /**
     * @return mixed
     */
    public function get_type()
    {
        return $this->_xtype;
    }

    /**
     * @param mixed $xtype
     */
    public function set_type($xtype)
    {
        $this->_xtype = $xtype;

        return $this;
    }

    /**
     * @return mixed
     */
    public function get_filter()
    {
        return $this->_xfilter;
    }

    /**
     * @param mixed $xfilter
     */
    public function set_filter($xfilter)
    {
        $this->_xfilter = $xfilter;

        return $this;
    }

    /**
     * @return array
     */
    public function get_field_search_available()
    {
        return $this->_field_search_available;
    }

    /**
     * @param array $field_search_available
     */
    public function set_field_search_available($field_search_available)
    {
        $this->_field_search_available = $field_search_available;
    }

    public function on_create($object)
    {
        $this->get_context()->on_trigger(self::$_on_create, $this->get_field());
    }

    public function on_get($object)
    {

    }

    public function on_update($object)
    {

    }

    public function on_delete($object)
    {

    }
}