<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//require(APPPATH . 'libraries/REST_Controller.php');

class Store extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        $result = [
            [
                "index" => 1,
                "title" => "Physical Check",
                "tooltip" => "html",
                "image" => "image"
            ],
            [
                "index" => 2,
                "title" => "Physical Check",
                "tooltip" => "html",
                "image" => "image"
            ],
            [
                "index" => 3,
                "title" => "Physical Check",
                "tooltip" => "html",
                "image" => "image"
            ]
        ];

        $results = ["result" => $result];

        echo json_encode($results);

    }

}