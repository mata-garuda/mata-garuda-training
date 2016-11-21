<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {
	public function index(){
		echo "test";
	}

	public function daily($date = NULL, $finish = null){
		if($date == NULL){
			die("Input date value for daily report");
		}

		//var_dump(json_decode(file_get_contents(base_url()."reports/daily/by_sig/?date=$date")));

		$data['date'] = $date;
		$data['enddate'] = $finish;
		//$data['table_sig'];
		$this->load->view('iframe/reports/daily',$data);
	}

	public function daily_old($date = NULL){
		if($date == NULL){
			die("Input date value for daily report");
		}
		$this->load->view('iframe/reports/daily_old');
	}

	public function monthly($month = null){
		if($month == NULL){
			die("Input month value for monthly report");
		}
		$data['month'] = $month;
		$this->load->view('iframe/reports/monthly', $data);
	}

	public function annually($year = null){
		/*
		if($year == NULL){
			die("Input year value for annual report");
		}
		*/

		$data['date'] = $year;
		$this->load->view('iframe/reports/annually',$data);
	}
}
