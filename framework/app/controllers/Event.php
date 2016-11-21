<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'core/X_Controller.php');
require(APPPATH . 'core/X_ControllerCallback.php');

class Event extends X_Controller implements X_ControllerCallback {

    public function __construct() {
        parent::__construct();
    }

    public function get_get() {
      /*
        $field_filters = [
            "cid",
            "sid",
            "signature",
            "time",
            "ipsource",
            "ipdestination",
            "sensor"
        ];

        $this
            ->set_table("event")
            ->set_field("*")
            ->set_field_search_available($field_filters);

        parent::get_get();
        */
        $this->load->model('Event_model');
        $eventdata = "";

        if(null !== $this->input->get("query")){
            //$eventdata = $this->input->get("query");
            $eventdata = $this->Event_model->search_event($this->input->get("query"));
        }if(null !== $this->input->get("date")){

            $eventdata = $this->Event_model->get_event_date($this->input->get("date"));
            //echo $start." ".$end;
            /*
            $start->modify("+1 day");
            echo $start->format("Y-m-d");
            */
        }else{
            $eventdata = $this->Event_model->get_event();
        }

        $nodes   = [
            'success' => true,
            'data'  => $eventdata,
            'total' => 100
        ];

        $this->response($nodes, 200);
    }

    public function statistics_get($date = NULL){

      if($date == null){
          $this->response(204);
      }

		$this->load->model('Event_model');

        $eventdata = $this->Event_model->event_statistics($date);

        if($eventdata == null){
            $this->response(204);
        }
        /*
        $nodes   = [
            'success' => true,
            'data'  => $eventdata,
            'total' => 2
        ];
        */
        //print_r($eventdata[0]['h15']);
        /*
        $eventdata = Array(
            "h0" => 0,
            "h1" => 1
            );*/

        //print_r($eventdata[0]["date"]);
        /*
        foreach ($eventdata[0] as $key) {
            echo $key;
        }*/

        /*
        $eventproc[0][0] = 0;
        $eventproc[0][1] = 1;
        $eventproc[0][2] = 2;
        $eventproc[0][3] = 3;
        $eventproc[0][4] = 4;
        $eventproc[0][5] = 5;
        $eventproc[0][6] = 6;
        $eventproc[0][7] = 7;
        $eventproc[0][8] = 8;
        $eventproc[0][9] = 9;
        $eventproc[0][10] = 10;
        $eventproc[0][11] = 11;
        $eventproc[0][12] = 12;
        $eventproc[0][13] = 13;
        $eventproc[0][14] = 14;
        $eventproc[0][15] = 15;
        $eventproc[0][16] = 16;
        $eventproc[0][17] = 17;
        $eventproc[0][18] = 18;
        $eventproc[0][19] = 19;
        $eventproc[0][20] = 20;
        $eventproc[0][21] = 21;
        $eventproc[0][22] = 22;
        $eventproc[0][23] = 23;

        $eventproc[1][0] = $eventdata[0]["h0"];
        $eventproc[1][1] = $eventdata[0]["h1"];
        $eventproc[1][2] = $eventdata[0]["h2"];
        $eventproc[1][3] = $eventdata[0]["h3"];
        $eventproc[1][4] = $eventdata[0]["h4"];
        $eventproc[1][5] = $eventdata[0]["h5"];
        $eventproc[1][6] = $eventdata[0]["h6"];
        $eventproc[1][7] = $eventdata[0]["h7"];
        $eventproc[1][8] = $eventdata[0]["h8"];
        $eventproc[1][9] = $eventdata[0]["h9"];
        $eventproc[1][10] = $eventdata[0]["h10"];
        $eventproc[1][11] = $eventdata[0]["h11"];
        $eventproc[1][12] = $eventdata[0]["h12"];
        $eventproc[1][13] = $eventdata[0]["h13"];
        $eventproc[1][14] = $eventdata[0]["h14"];
        $eventproc[1][15] = $eventdata[0]["h15"];
        $eventproc[1][16] = $eventdata[0]["h16"];
        $eventproc[1][17] = $eventdata[0]["h17"];
        $eventproc[1][18] = $eventdata[0]["h18"];
        $eventproc[1][19] = $eventdata[0]["h19"];
        $eventproc[1][20] = $eventdata[0]["h20"];
        $eventproc[1][21] = $eventdata[0]["h21"];
        $eventproc[1][22] = $eventdata[0]["h22"];
        $eventproc[1][23] = $eventdata[0]["h23"];
        */

        //$eventdata =
        /*
        $eventproc[0] = [0,(int)$eventdata[0]["h0"]];
        $eventproc[1] = [1,(int)$eventdata[0]["h1"]];
        $eventproc[2] = [2,(int)$eventdata[0]["h2"]];
        $eventproc[3] = [3,(int)$eventdata[0]["h3"]];
        $eventproc[4] = [4,(int)$eventdata[0]["h4"]];
        $eventproc[5] = [5,(int)$eventdata[0]["h5"]];
        $eventproc[6] = [6,(int)$eventdata[0]["h6"]];
        $eventproc[7] = [7,(int)$eventdata[0]["h7"]];
        $eventproc[8] = [8,(int)$eventdata[0]["h8"]];
        $eventproc[9] = [9,(int)$eventdata[0]["h9"]];
        $eventproc[10] = [10,(int)$eventdata[0]["h10"]];
        $eventproc[11] = [11,(int)$eventdata[0]["h11"]];
        $eventproc[12] = [12,(int)$eventdata[0]["h12"]];
        $eventproc[13] = [13,(int)$eventdata[0]["h13"]];
        $eventproc[14] = [14,(int)$eventdata[0]["h14"]];
        $eventproc[15] = [15,(int)$eventdata[0]["h15"]];
        $eventproc[16] = [16,(int)$eventdata[0]["h16"]];
        $eventproc[17] = [17,(int)$eventdata[0]["h17"]];
        $eventproc[18] = [18,(int)$eventdata[0]["h18"]];
        $eventproc[19] = [19,(int)$eventdata[0]["h19"]];
        $eventproc[20] = [20,(int)$eventdata[0]["h20"]];
        $eventproc[21] = [21,(int)$eventdata[0]["h21"]];
        $eventproc[22] = [22,(int)$eventdata[0]["h22"]];
        $eventproc[23] = [23,(int)$eventdata[0]["h23"]];
        */


        $eventproc[0] = (int)$eventdata[0]["h0"];
        $eventproc[1] = (int)$eventdata[0]["h1"];
        $eventproc[2] = (int)$eventdata[0]["h2"];
        $eventproc[3] = (int)$eventdata[0]["h3"];
        $eventproc[4] = (int)$eventdata[0]["h4"];
        $eventproc[5] = (int)$eventdata[0]["h5"];
        $eventproc[6] = (int)$eventdata[0]["h6"];
        $eventproc[7] = (int)$eventdata[0]["h7"];
        $eventproc[8] = (int)$eventdata[0]["h8"];
        $eventproc[9] = (int)$eventdata[0]["h9"];
        $eventproc[10] = (int)$eventdata[0]["h10"];
        $eventproc[11] = (int)$eventdata[0]["h11"];
        $eventproc[12] = (int)$eventdata[0]["h12"];
        $eventproc[13] = (int)$eventdata[0]["h13"];
        $eventproc[14] = (int)$eventdata[0]["h14"];
        $eventproc[15] = (int)$eventdata[0]["h15"];
        $eventproc[16] = (int)$eventdata[0]["h16"];
        $eventproc[17] = (int)$eventdata[0]["h17"];
        $eventproc[18] = (int)$eventdata[0]["h18"];
        $eventproc[19] = (int)$eventdata[0]["h19"];
        $eventproc[20] = (int)$eventdata[0]["h20"];
        $eventproc[21] = (int)$eventdata[0]["h21"];
        $eventproc[22] = (int)$eventdata[0]["h22"];
        $eventproc[23] = (int)$eventdata[0]["h23"];

        //print_r($eventproc);
        $eventdata = Array(
            "name" => $eventdata[0]['date'],
            "data" => $eventproc
            );

        //$nodes = $eventproc;
        $nodes = $eventdata;
        $this->response($nodes, 200);
    }

    public function on_trigger($code,$value){

    }
}
