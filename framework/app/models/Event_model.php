<?php
class Event_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('bigdata');

	}

	public function count() {

		$result = $this->bigdata->db->query("SELECT count_event FROM z_p_master_count_event");

		$this->bigdata->db->close();

		return $result->row()->count_event;

	}

	public function get_event(){
    //today until tomorrow
		$result = $this->bigdata->db->query("SELECT cid,event.sid as sid,signature_name as signature,long_date as time, inet_ntoa(ip_src) as ipsource, inet_ntoa(ip_dst) as ipdestination,sensor.hostname as sensor,signature_priority as severity from event,sensor where  event.sid = sensor.sid and long_date between date(curdate()) and date(curdate() + interval 1 day) order by long_date desc limit 100;");

    //$result = $this->bigdata->db->query("SELECT cid,event.sid as sid,signature_name as signature,long_date as time, inet_ntoa(ip_src) as ipsource, inet_ntoa(ip_dst) as ipdestination,sensor.hostname as sensor,signature_priority as severity FROM event,sensor where sensor.sid = event.sid order by long_date desc limit 100");

		$this->bigdata->db->close();

		return $result->result_array();
	}

	public function get_event_date($date){
		$date = DateTime::createFromFormat('Y-m-d', $this->input->get("date"));
		$start = $date->format("Y-m-d");
		$end = $date->modify("+1 day")->format("Y-m-d");

		$result = $this->bigdata->db->query("SELECT cid,event.sid as sid,signature_name as signature,long_date as time, inet_ntoa(ip_src) as ipsource, inet_ntoa(ip_dst) as ipdestination,sensor.hostname as sensor,signature_priority as severity from event,sensor where long_date between date('$start') and date('$end') order by long_date desc limit 100;");

		$this->bigdata->db->close();

		return $result->result_array();
	}

	public function search_event($query){
    //$result = $this->bigdata->db->query("SELECT cid,event.sid as sid,signature_name as signature,long_date as time, inet_ntoa(ip_src) as ipsource, inet_ntoa(ip_dst) as ipdestination,sensor.hostname as sensor,signature_priority as severity FROM event,sensor where sensor.sid = event.sid AND (signature_name like '%$query%') order by long_date desc limit 100");
    //$result = array("data" => "no data");
		$this->bigdata->db->close();

		return $result->result_array();
	}

	public function event_statistics($date){
		$query = "select date,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='00'), 0) h0,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='01'), 0) h1,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='02'), 0) h2,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='03'), 0) h3,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='04'), 0) h4,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='05'), 0) h5,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='06'), 0) h6,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='07'), 0) h7,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='08'), 0) h8,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='09'), 0) h9,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='10'), 0) h10,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='11'), 0) h11,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='12'), 0) h12,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='13'), 0) h13,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='14'), 0) h14,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='15'), 0) h15,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='16'), 0) h16,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='17'), 0) h17,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='18'), 0) h18,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='19'), 0) h19,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='20'), 0) h20,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='21'), 0) h21,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='22'), 0) h22,
		COALESCE((select sum(counter) from daily_event_aggregation innersig where innersig.date = outersig.date and hour ='23'), 0) h23,
		sum(counter) counter
		FROM
		daily_event_aggregation outersig
		WHERE
		date = '$date'
		GROUP BY date";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_array();
	}

	public function top_20_sig($date){
		$result = $this->bigdata->db->query("
			select
			date,
			signature_name,
			sum(counter) as counter
			from
			daily_event_aggregation
			where
			date = '$date'
			GROUP BY
			signature_name
			ORDER By counter DESC
			LIMIT 20;");
		$this->bigdata->db->close();
		return $result->result_array();
	}

	public function top_20_proto(){
		$result = $this->bigdata->db->query("
			select
			date,
			signature_name,
			sum(counter) as counter
			from
			daily_event_aggregation
			where
			date = '2016-03-25'
			GROUP BY
			signature_name
			ORDER By counter DESC
			LIMIT 20;");
		$this->bigdata->db->close();
		return $result->result_array();
	}
}
