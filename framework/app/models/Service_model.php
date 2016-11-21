<?php
class Service_model extends CI_Model {

	public function __construct(){
		parent::__construct();

		$this->load->library('bigdata');

	}

	public function top_tcp_source_service_dist($date = null){
		$result = $this->bigdata->db->query("
			SELECT 
			date,
			e.protocol,
			s_port AS tcp_sport,
			name AS service_src,
			SUM(counter) AS counter
			FROM
			daily_event_aggregation e
			LEFT JOIN
			services s ON s.protocol = e.protocol
			AND s.port = e.s_port
			WHERE
			date = '$date' AND e.protocol = 6
			GROUP BY s_port
			ORDER BY counter DESC
			LIMIT 20");

		$this->bigdata->db->close();

		return $result->result_array();
	}

	public function top_tcp_source_service_statistics($date){
		$result = $this->bigdata->db->query("
			SELECT
			outertable.protocol,
			s_port as tcp_sport,
			name as service_src,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '00'), 0 ) h0,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '01'), 0 ) h1,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '02'), 0 ) h2,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '03'), 0 ) h3,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '04'), 0 ) h4,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '05'), 0 ) h5,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '06'), 0 ) h6,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '07'), 0 ) h7,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '08'), 0 ) h8,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '09'), 0 ) h9,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '10'), 0 ) h10,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '11'), 0 ) h11,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '12'), 0 ) h12,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '13'), 0 ) h13,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '14'), 0 ) h14,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '15'), 0 ) h15,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '16'), 0 ) h16,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '17'), 0 ) h17,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '18'), 0 ) h18,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '19'), 0 ) h19,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '20'), 0 ) h20,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '21'), 0 ) h21,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '22'), 0 ) h22,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '23'), 0 ) h23,
			sum(counter) as counter
			FROM
			daily_event_aggregation outertable
			LEFT JOIN services x ON x.protocol = outertable.protocol and x.port = outertable.s_port
			WHERE
			date = '$date' and outertable.protocol = 6
			GROUP BY
			s_port
			ORDER BY
			counter DESC
			LIMIT 20");

			$this->bigdata->db->close();

			return $result->result_array();
		}


	public function top_tcp_destination_service_dist($date = null){
		$result = $this->bigdata->db->query("
			SELECT
			date,
			e.protocol,
			s_port as tcp_dport,
			name as service_dst,
			sum(counter) as counter
			FROM
			daily_event_aggregation e
			LEFT JOIN services d ON d.protocol = e.protocol and d.port = e.s_port
			WHERE
			date = '$date' and e.protocol = 6
			GROUP BY
			s_port
			ORDER BY
			counter DESC
			LIMIT 20;");
		$this->bigdata->db->close();

		return $result->result_array();
	}

	public function top_tcp_destination_service_statistics($port){
		$result = $this->bigdata->db->query("
			SELECT
			outertable.protocol,
			d_port as tcp_dport,
			name as service_dst,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '00'), 0 ) h0,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '01'), 0 ) h1,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '02'), 0 ) h2,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '03'), 0 ) h3,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '04'), 0 ) h4,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '05'), 0 ) h5,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '06'), 0 ) h6,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '07'), 0 ) h7,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '08'), 0 ) h8,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '09'), 0 ) h9,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '10'), 0 ) h10,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '11'), 0 ) h11,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '12'), 0 ) h12,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '13'), 0 ) h13,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '14'), 0 ) h14,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '15'), 0 ) h15,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '16'), 0 ) h16,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '17'), 0 ) h17,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '18'), 0 ) h18,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '19'), 0 ) h19,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '20'), 0 ) h20,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '21'), 0 ) h21,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '22'), 0 ) h22,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '23'), 0 ) h23,
			sum(counter) as counter
			FROM
			daily_event_aggregation outertable
			LEFT JOIN services x ON x.protocol = outertable.protocol and x.port = outertable.d_port
			WHERE
			date = '$date' and outertable.protocol = 6
			GROUP BY
			d_port
			ORDER BY
			counter DESC
			LIMIT 20;");

	$this->bigdata->db->close();

	return $result->result_array();
	}

	public function top_udp_source_service_dist($date = null){
		$result = $this->bigdata->db->query("
			SELECT
			date,
			e.protocol,
			s_port as udp_sport,
			name as service_src,
			sum(counter) as counter
			FROM
			daily_event_aggregation e
			LEFT JOIN services s ON s.protocol = e.protocol and s.port = e.s_port
			WHERE
			date = '$date' and e.protocol = 17
			GROUP BY
			s_port
			ORDER BY
			counter DESC
			LIMIT 20;");

		$this->bigdata->db->close();

		return $result->result_array();
	}

	public function top_udp_source_service_statistics(){
		$result = $this->bigdata->db->query("
			SELECT
			outertable.protocol,
			s_port as udp_sport,
			name as service_src,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '00'), 0 ) h0,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '01'), 0 ) h1,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '02'), 0 ) h2,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '03'), 0 ) h3,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '04'), 0 ) h4,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '05'), 0 ) h5,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '017'), 0 ) h17,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '07'), 0 ) h7,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '08'), 0 ) h8,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '09'), 0 ) h9,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '10'), 0 ) h10,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '11'), 0 ) h11,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '12'), 0 ) h12,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '13'), 0 ) h13,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '14'), 0 ) h14,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '15'), 0 ) h15,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '117'), 0 ) h117,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '17'), 0 ) h17,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '18'), 0 ) h18,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '19'), 0 ) h19,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '20'), 0 ) h20,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '21'), 0 ) h21,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '22'), 0 ) h22,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.s_port = outertable.s_port and hour = '23'), 0 ) h23,
			sum(counter) as counter
			FROM
			daily_event_aggregation outertable
			LEFT JOIN services x ON x.protocol = outertable.protocol and x.port = outertable.s_port
			WHERE
			date = '$date' and outertable.protocol = 17
			GROUP BY
			s_port
			ORDER BY
			counter DESC
			LIMIT 20;");

	$this->bigdata->db->close();

	return $result->result_array();
	}

	public function top_udp_destination_service_dist($date = null){
		$result = $this->bigdata->db->query("
			SELECT 
			date,
			e.protocol,
			s_port AS udp_dport,
			name AS service_dst,
			SUM(counter) AS counter
			FROM
			daily_event_aggregation e
			LEFT JOIN
			services d ON d.protocol = e.protocol
			AND d.port = e.s_port
			WHERE
			date = '$date' AND e.protocol = 17
			GROUP BY s_port
			ORDER BY counter DESC
			LIMIT 20;");

		$this->bigdata->db->close();

		return $result->result_array();
	}

	public function top_udp_destination_service_statistics(){
		$result = $this->bigdata->db->query("
			SELECT
			outertable.protocol,
			d_port as udp_dport,
			name as service_dst,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '00'), 0 ) h0,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '01'), 0 ) h1,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '02'), 0 ) h2,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '03'), 0 ) h3,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '04'), 0 ) h4,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '05'), 0 ) h5,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '017'), 0 ) h17,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '07'), 0 ) h7,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '08'), 0 ) h8,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '09'), 0 ) h9,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '10'), 0 ) h10,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '11'), 0 ) h11,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '12'), 0 ) h12,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '13'), 0 ) h13,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '14'), 0 ) h14,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '15'), 0 ) h15,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '117'), 0 ) h117,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '17'), 0 ) h17,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '18'), 0 ) h18,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '19'), 0 ) h19,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '20'), 0 ) h20,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '21'), 0 ) h21,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '22'), 0 ) h22,
			COALESCE((select sum(innertable.counter) from daily_event_aggregation innertable where innertable.date = outertable.date and innertable.protocol = outertable.protocol and innertable.d_port = outertable.d_port and hour = '23'), 0 ) h23,
			sum(counter) as counter
			FROM
			daily_event_aggregation outertable
			LEFT JOIN services x ON x.protocol = outertable.protocol and x.port = outertable.d_port
			WHERE
			date = '$date' and outertable.protocol = 17
			GROUP BY
			d_port
			ORDER BY
			counter DESC
			LIMIT 20;");

	$this->bigdata->db->close();

	return $result->result_array();
	}
}
