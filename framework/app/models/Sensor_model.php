<?php
class Sensor_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('bigdata');

	}

	public function sensor_contributions(){
		$result = $this->bigdata->db->query("
			SELECT	
			s.hostname,
			sum(counter) counter,
			(select sum(counter) from daily_event_aggregation b where b.date = e.date) as allsensor
			FROM 
			daily_event_aggregation e 
			LEFT JOIN sensor s ON s.sid = e.sid
			WHERE
			date = '$date'
			GROUP BY
			e.sid
			ORDER BY
			counter DESC");

		$this->bigdata->db->close();

		return $result->result_array();        
	}

	public function sensor_statistics($date = null){
		$result = $this->bigdata->db->query("
			SELECT
			s.hostname,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '00'), 0) as h0,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '01'), 0) as h1,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '02'), 0) as h2,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '03'), 0) as h3,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '04'), 0) as h4,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '05'), 0) as h5,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '06'), 0) as h6,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '07'), 0) as h7,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '08'), 0) as h8,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '09'), 0) as h9,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '10'), 0) as h10,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '11'), 0) as h11,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '12'), 0) as h12,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '13'), 0) as h13,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '14'), 0) as h14,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '15'), 0) as h15,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '16'), 0) as h16,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '17'), 0) as h17,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '18'), 0) as h18,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '19'), 0) as h19,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '20'), 0) as h20,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '21'), 0) as h21,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '22'), 0) as h22,
			COALESCE((select sum(counter) from daily_event_aggregation x where x.date = e.date AND x.sid = e.sid and hour = '23'), 0) as h23,
			sum(counter) counter
			FROM 
			daily_event_aggregation e LEFT JOIN sensor s ON e.sid = s.sid
			WHERE
			date = '$date'
			GROUP BY
			e.sid
			ORDER BY
			counter DESC");
		$this->bigdata->db->close();

		return $result->result_array();        
	}
}