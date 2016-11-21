<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistics extends CI_Controller {
	public function index(){

	}

	public function top20proto($date = NULL){
		if($date == NULL){
			die("Input date value");
		}
		$data['date'] = $date;
		$this->load->view('iframe/statistics/top20proto', $data);
	}

	public function top20sig($date = null){
		if($date == NULL){
			die("Input date value");
		}
		$data['date'] = $date;
		$this->load->view('iframe/statistics/top20sig', $data);
	}

	public function sensor($date = null){
		if($date == NULL){
			die("Input date value");
		}

		$data['date'] = $date;
		$this->load->view('iframe/statistics/sensor', $data);
	}
}