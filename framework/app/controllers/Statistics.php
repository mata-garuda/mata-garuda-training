<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'libraries/REST_Controller.php');

class Statistics extends REST_Controller {
	public function __construct() {
		parent::__construct();
	}

	/* below are top 20 */
	public function top_20_sig_get($date = null){
		if($date == null){
			$this->response(204);
		}
		$this->load->model('Event_model');

		$eventdata = $this->Event_model->top_20_sig($date);
		//print_r($eventdata[0]["counter"]);

		if(!$eventdata){
			$this->response(204);
		}

		$counter = 0;
		$eventproc;
		$eventlabel;
		foreach ($eventdata as $event) {
					//$eventlabel[$counter] = $event["signature_name"];
			$eventproc[$counter] = array(
				"name" => $event["signature_name"],
				"y" => (int)$event["counter"]
				);
			$counter++;
		}

		$eventdata = Array(
			"name" => $eventdata[0]['date'],
			"colorByPoint" => true,
			"data" => $eventproc
			);

        //$nodes = $eventproc;
		$nodes = $eventdata;
		$this->response($nodes, 200);
	}

	public function sensor_contributions_get(){
		$this->load->model('Sensor_model');

		$sensordata = $this->Sensor_model->sensor_contributions();

		$nodes   = [
		'success' => true,
		'data'  => $sensordata
		];

		$this->response($nodes, 200);
	}

	public function sensor_get($date = null){
		$this->load->model('Sensor_model');
		if($date == null){
			$this->response(204);
		}

		$sensordata = $this->Sensor_model->sensor_statistics($date);

		if($sensordata == null){
			$this->response(204);
		}

		//die(print_r($sensordata[0]['hostname']));
		$sensorproc = [];
		$i = 0;
		foreach ($sensordata as $sensor) {
			$sensortmp[0] = (int)$sensor["h0"];
	        $sensortmp[1] = (int)$sensor["h1"];
	        $sensortmp[2] = (int)$sensor["h2"];
	        $sensortmp[3] = (int)$sensor["h3"];
	        $sensortmp[4] = (int)$sensor["h4"];
	        $sensortmp[5] = (int)$sensor["h5"];
	        $sensortmp[6] = (int)$sensor["h6"];
	        $sensortmp[7] = (int)$sensor["h7"];
	        $sensortmp[8] = (int)$sensor["h8"];
	        $sensortmp[9] = (int)$sensor["h9"];
	        $sensortmp[10] = (int)$sensor["h10"];
	        $sensortmp[11] = (int)$sensor["h11"];
	        $sensortmp[12] = (int)$sensor["h12"];
	        $sensortmp[13] = (int)$sensor["h13"];
	        $sensortmp[14] = (int)$sensor["h14"];
	        $sensortmp[15] = (int)$sensor["h15"];
	        $sensortmp[16] = (int)$sensor["h16"];
	        $sensortmp[17] = (int)$sensor["h17"];
	        $sensortmp[18] = (int)$sensor["h18"];
	        $sensortmp[19] = (int)$sensor["h19"];
	        $sensortmp[20] = (int)$sensor["h20"];
	        $sensortmp[21] = (int)$sensor["h21"];
	        $sensortmp[22] = (int)$sensor["h22"];
	        $sensortmp[23] = (int)$sensor["h23"];
			
			$sensorproc[$i] = Array(
					"name" => $sensor['hostname'],
					"data" => $sensortmp
				);
			$i++;
		}

		//die();
		$nodes = $sensorproc;

		$this->response($nodes, 200);
	}


	public function top_tcp_proto_src_get($date = null){
		if($date == null){
			$this->response(204);
		}

		$this->load->model('Service_model');

		$servicedata = $this->Service_model->top_tcp_source_service_dist($date);

		if($servicedata == null){
			$this->response(204);
		}

		$counter = 0;
		$serviceproc;
		$servicelabel;

		foreach ($servicedata as $service) {
			$serviceproc[$counter] = array(
				"name" => $service["service_src"].":".$service["tcp_sport"],
				"y" => (int)$service["counter"]
				);
			$counter++;
		}

		$servicedata = array(
			"name" => $servicedata[0]['date'],
			"colorByPoint" => true,
			"data" => $serviceproc
			);
		$nodes = $servicedata;
		$this->response($nodes, 200);
	}

	public function top_tcp_proto_dst_get($date = null){
		if($date == null){
			$this->response(204);
		}
		$this->load->model('Service_model');

		$servicedata = $this->Service_model->top_tcp_destination_service_dist($date);

		if($servicedata == null){
			$this->response(204);
		}

		$counter = 0;
		$serviceproc;
		$servicelabel;
		foreach ($servicedata as $service) {
			$serviceproc[$counter] = array(
				"name" => $service["service_dst"].":".$service["tcp_dport"],
				"y" => (int)$service["counter"]
				);
			$counter++;
		}

		$servicedata = Array(
			"name" => $servicedata[0]['date'],
			"colorByPoint" => true,
			"data" => $serviceproc
			);

		$nodes = $servicedata;
		$this->response($nodes, 200);
	}

	public function top_udp_proto_src_get($date = null){
		if($date == null){
			$this->response(204);
		}
		$this->load->model('Service_model');

		$servicedata = $this->Service_model->top_udp_source_service_dist($date);

		if($servicedata == null){
			$this->response(204);
		}

		$counter = 0;
		$serviceproc;
		$servicelabel;
		foreach ($servicedata as $service) {
			$serviceproc[$counter] = array(
				"name" => $service["service_src"].":".$service["udp_sport"],
				"y" => (int)$service["counter"]
				);
			$counter++;
		}

		$servicedata = Array(
			"name" => $servicedata[0]['date'],
			"colorByPoint" => true,
			"data" => $serviceproc
			);

		$nodes = $servicedata;
		$this->response($nodes, 200);
	}

	public function top_udp_proto_dst_get($date = null){
		if($date == null){
			$this->response(204);
		}
		$this->load->model('Service_model');

		$servicedata = $this->Service_model->top_udp_destination_service_dist($date);

		if($servicedata == null){
			$this->response(204);
		}

		$counter = 0;
		$serviceproc;
		$servicelabel;
		foreach ($servicedata as $service) {
			$serviceproc[$counter] = array(
				"name" => $service["service_dst"].":".$service["udp_dport"],
				"y" => (int)$service["counter"]
				);
			$counter++;
		}

		$servicedata = Array(
			"name" => $servicedata[0]['date'],
			"colorByPoint" => true,
			"data" => $serviceproc
			);

		$nodes = $servicedata;
		$this->response($nodes, 200);
	}

	public function top_10_tcp_source_service_statistics_get($port){
		$this->load->model('Service_model');

		$sensordata = $this->Service_model->top_tcp_source_service_statistics($port);

		$nodes   = [
		'success' => true,
		'data'  => $sensordata
		];

		$this->response($nodes, 200);
	}

	public function top_10_tcp_destination_service_statistics_get($port){
		$this->load->model('Service_model');

		$sensordata = $this->Service_model->top_tcp_destination_service_statistics($port);

		$nodes   = [
		'success' => true,
		'data'  => $sensordata
		];

		$this->response($nodes, 200);
	}
}
