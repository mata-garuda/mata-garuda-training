<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'libraries/REST_Controller.php');

class Annually extends REST_Controller{
	private function filter_builder($filter_sensor, $filter_date, $filter_ip_src, $filter_ip_dst){
		$filter = "";
		//$filter .= "date = '$filter_date'";

		$where = false;
		if ($filter_sensor != null){
			$where = true;
			$filter .= " AND sid = $filter_sensor";
		}

		if ($filter_ip_src != null){
			$where = true;
			$filter .= " AND ip_src = INET_ATON('$filter_ip_src')";
		}

		if ($filter_ip_dst != null){
			$where = true;
			$filter .= " AND ip_dst = INET_ATON('$filter_ip_dst')";
		}

		if($where == true){
			$filter = " where ".$filter;
		}
		//print_r($filter);
		return $filter;
	}

	public function total_event_get(){
		$filter_date = $this->input->get("date");
		$filter_sensor = $this->input->get("sensor") ? $this->input->get("sensor") : null;
		$filter_ip_src = $this->input->get("src") ? $this->input->get("src") : null;
		$filter_ip_dst = $this->input->get("dst") ? $this->input->get("dst") : null;

		if($filter_date == null){
			$this->response(204);
		}

		$filter = $this->filter_builder($filter_sensor, $filter_date, $filter_ip_src, $filter_ip_dst);	

		$this->load->model('Report_model');
		
		$result = $this->Report_model->annually_total_event($filter);
		
		$this->response($result, 200);
	}

	public function by_sig_get($type = "table"){
		$filter_date = $this->input->get("date");
		$filter_sensor = $this->input->get("sensor") ? $this->input->get("sensor") : null;
		$filter_ip_src = $this->input->get("src") ? $this->input->get("src") : null;
		$filter_ip_dst = $this->input->get("dst") ? $this->input->get("dst") : null;

		$filter = $this->filter_builder($filter_sensor, $filter_date, $filter_ip_src, $filter_ip_dst);	

		$this->load->model('Report_model');
		
		$result = $this->Report_model->annually_report_by_sig($filter);

		if($type == "graph"){
			$eventdata = $result;

			if(!$eventdata){
				$this->response(204);
			}

			$counter = 0;
			$eventproc;
			$eventlabel;
			foreach ($eventdata as $event) {
				$eventproc[$counter] = array(
					"name" => $event->signature_name,
					"y" => (int)$event->counter
					);
				$counter++;
			}

			$eventdata = Array(
				"name" => "Signature",
				"colorByPoint" => true,
				"data" => $eventproc
				);
			$nodes = $eventdata;
			$this->response($nodes, 200);
		}else{
			$count = 0;
			foreach ($result as $event) {
				$count = $count + (int)$event->counter;
			}
			
			$nodes   = [
				'success' => true,
				'data'  => $result,
				'total' => $count
			];
			$this->response($nodes, 200);
		}
	}


	public function by_severity_get($type = "table"){
		$filter_date = $this->input->get("date");
		$filter_sensor = $this->input->get("sensor") ? $this->input->get("sensor") : null;
		$filter_ip_src = $this->input->get("src") ? $this->input->get("src") : null;
		$filter_ip_dst = $this->input->get("dst") ? $this->input->get("dst") : null;

		$filter = $this->filter_builder($filter_sensor, $filter_date, $filter_ip_src, $filter_ip_dst);	

		$this->load->model('Report_model');

		$result = $this->Report_model->annually_report_by_severity($filter);

		if($type == "graph"){
			$eventdata = $result;

			if(!$eventdata){
				$this->response(204);
			}

			$counter = 0;
			$eventproc;
			$eventlabel;
			foreach ($eventdata as $event) {
				$eventproc[$counter] = array(
					"name" => $event->signature_priority,
					"y" => (int)$event->counter
					);
				$counter++;
			}

			$eventdata = Array(
				"name" => "Severity",
				"colorByPoint" => true,
				"data" => $eventproc
				);
			$nodes = $eventdata;
			$this->response($nodes, 200);
		}else{
			$count = 0;
			foreach ($result as $event) {
				$count = $count + (int)$event->counter;
			}
			
			$nodes   = [
				'success' => true,
				'data'  => $result,
				'total' => $count
			];
			$this->response($nodes, 200);
		}
	}

	public function by_proto_get(){
		$filter_date = $this->input->get("date");
		$filter_sensor = $this->input->get("sensor") ? $this->input->get("sensor") : null;
		$filter_ip_src = $this->input->get("src") ? $this->input->get("src") : null;
		$filter_ip_dst = $this->input->get("dst") ? $this->input->get("dst") : null;

		$filter = $this->filter_builder($filter_sensor, $filter_date, $filter_ip_src, $filter_ip_dst);	

		$this->load->model('Report_model');

		$result = $this->Report_model->annually_report_by_proto($filter);

		$this->response($result, 200);
	}

	public function by_top_tcp_src_get(){
		$filter_date = $this->input->get("date");
		$filter_sensor = $this->input->get("sensor") ? $this->input->get("sensor") : null;
		$filter_ip_src = $this->input->get("src") ? $this->input->get("src") : null;
		$filter_ip_dst = $this->input->get("dst") ? $this->input->get("dst") : null;

		$filter = $this->filter_builder($filter_sensor, $filter_date, $filter_ip_src, $filter_ip_dst);	

		$this->load->model('Report_model');

		$result = $this->Report_model->annually_report_by_top_tcp_src($filter);

		$this->response($result, 200);
	}

	public function by_top_tcp_dst_get(){
		$filter_date = $this->input->get("date");
		$filter_sensor = $this->input->get("sensor") ? $this->input->get("sensor") : null;
		$filter_ip_src = $this->input->get("src") ? $this->input->get("src") : null;
		$filter_ip_dst = $this->input->get("dst") ? $this->input->get("dst") : null;

		$filter = $this->filter_builder($filter_sensor, $filter_date, $filter_ip_src, $filter_ip_dst);	

		$this->load->model('Report_model');

		$result = $this->Report_model->annually_report_by_top_tcp_dst($filter);

		$this->response($result, 200);
	}

	public function by_top_ucp_dst_get(){
		$filter_date = $this->input->get("date");
		$filter_sensor = $this->input->get("sensor") ? $this->input->get("sensor") : null;
		$filter_ip_src = $this->input->get("src") ? $this->input->get("src") : null;
		$filter_ip_dst = $this->input->get("dst") ? $this->input->get("dst") : null;

		$filter = $this->filter_builder($filter_sensor, $filter_date, $filter_ip_src, $filter_ip_dst);	

		$this->load->model('Report_model');

		$result = $this->Report_model->annually_report_by_top_udp_dst($filter);

		$this->response($result, 200);
	}

	public function by_top_ucp_src_get(){
		$filter_date = $this->input->get("date");
		$filter_sensor = $this->input->get("sensor") ? $this->input->get("sensor") : null;
		$filter_ip_src = $this->input->get("src") ? $this->input->get("src") : null;
		$filter_ip_dst = $this->input->get("dst") ? $this->input->get("dst") : null;

		$filter = $this->filter_builder($filter_sensor, $filter_date, $filter_ip_src, $filter_ip_dst);	

		$this->load->model('Report_model');

		$result = $this->Report_model->annually_report_by_top_udp_src($filter);

		$this->response($result, 200);
	}

	public function by_ip_src_get($type = "table"){
		$filter_date = $this->input->get("date");
		$filter_sensor = $this->input->get("sensor") ? $this->input->get("sensor") : null;
		$filter_ip_src = $this->input->get("src") ? $this->input->get("src") : null;
		$filter_ip_dst = $this->input->get("dst") ? $this->input->get("dst") : null;

		$filter = $this->filter_builder($filter_sensor, $filter_date, $filter_ip_src, $filter_ip_dst);	

		$this->load->model('Report_model');

		$result = $this->Report_model->annually_report_by_ip_src($filter);

		if($type == "graph"){
			$eventdata = $result;

			if(!$eventdata){
				$this->response(204);
			}

			$counter = 0;
			$eventproc;
			$eventlabel;
			foreach ($eventdata as $event) {
				$eventproc[$counter] = array(
					"name" => $event->ip_src,
					"y" => (int)$event->counter
					);
				$counter++;
			}

			$eventdata = Array(
				"name" => "IP Source",
				"colorByPoint" => true,
				"data" => $eventproc
				);
			$nodes = $eventdata;
			$this->response($nodes, 200);
		}else{
			$count = 0;
			foreach ($result as $event) {
				$count = $count + (int)$event->counter;
			}
			
			$nodes   = [
				'success' => true,
				'data'  => $result,
				'total' => $count
			];
			$this->response($nodes, 200);
		}
	}

	public function by_ip_dst_get($type = "table"){
		$filter_date = $this->input->get("date");
		$filter_sensor = $this->input->get("sensor") ? $this->input->get("sensor") : null;
		$filter_ip_src = $this->input->get("src") ? $this->input->get("src") : null;
		$filter_ip_dst = $this->input->get("dst") ? $this->input->get("dst") : null;

		$filter = $this->filter_builder($filter_sensor, $filter_date, $filter_ip_src, $filter_ip_dst);	

		$this->load->model('Report_model');

		$result = $this->Report_model->annually_report_by_ip_dst($filter);

		if($type == "graph"){
			$eventdata = $result;

			if(!$eventdata){
				$this->response(204);
			}

			$counter = 0;
			$eventproc;
			$eventlabel;
			foreach ($eventdata as $event) {
				$eventproc[$counter] = array(
					"name" => $event->ip_dst,
					"y" => (int)$event->counter
					);
				$counter++;
			}

			$eventdata = Array(
				"name" => "IP Destination",
				"colorByPoint" => true,
				"data" => $eventproc
				);
			$nodes = $eventdata;
			$this->response($nodes, 200);
		}else{
			$count = 0;
			//die(print_r($result));
			foreach ($result as $event) {
				$count = $count + (int)$event->counter;
			}
			
			$nodes   = [
				'success' => true,
				'data'  => $result,
				'total' => $count
			];
			$this->response($nodes, 200);
		}
	}
}