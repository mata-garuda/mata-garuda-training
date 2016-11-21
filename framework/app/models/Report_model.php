<?php
class Report_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->library('bigdata');
	}

	public function daily_sig_class($filter){
		$query = "
		SELECT
		sig_class_name, 
		sum(count) as counter
		FROM
		z_p_master_top_sig_class2
		WHERE
		$filter
		GROUP BY
		sig_class_name
		ORDER BY
		counter DESC
		LIMIT 10";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function daily_total_event($filter){
		$query = "
		SELECT 
		COALESCE(sum(counter), 0) as total_event
		FROM 
		`daily_event_aggregation`
		WHERE
		$filter";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}


	/* ACTUALL REPORTS */
	//Daily
	public function daily_report_by_sig($filter){
		$query = "
		SELECT 
		signature_name,
		sum(counter) counter
		FROM 
		`daily_event_aggregation`
		where 
		$filter
		group by 
		signature_name
		order by 
		counter desc
		LIMIT 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function daily_report_by_severity($filter){
		$query = "
		SELECT 
		CASE WHEN signature_priority = 1
		THEN 'high'
		WHEN signature_priority = 2
		THEN 'medium'
		ELSE 'low' END as signature_priority,
		sum(counter) counter
		FROM 
		daily_event_aggregation
		WHERE
		$filter
		GROUP BY
		signature_priority;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function daily_report_by_proto($filter){
		$query = "
		select
		e.protocol,
		name as protocol_name,
		sum(counter) as counter
		from
		daily_event_aggregation e
		LEFT JOIN protocols p ON p.protocol = e.protocol
		where 
		$filter
		group by
		protocol;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function daily_report_by_top_tcp_src($filter){
		$query = "
		select
		s_port,
		name as service_name,
		sum(counter) as counter
		from
		daily_event_aggregation e
		LEFT join services s ON s.protocol = e.protocol and s.port = e.s_port
		where 
		$filter and e.protocol = 6
		group by
		s_port
		order by
		counter DESC
		LIMIT 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function daily_report_by_top_tcp_dst($filter){
		$query = "
		select
		d_port,
		name as service_name,
		sum(counter) as counter
		from
		daily_event_aggregation e
		LEFT join services s ON s.protocol = e.protocol and s.port = e.d_port
		where 
		$filter and e.protocol = 6
		group by
		d_port
		order by
		counter DESC
		LIMIT 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function daily_report_by_top_udp_dst($filter){
		$query = "
		select
		d_port,
		name as service_name,
		sum(counter) as counter
		from
		daily_event_aggregation e
		LEFT join services s ON s.protocol = e.protocol and s.port = e.d_port
		where 
		$filter and e.protocol = 17
		group by
		d_port
		order by
		counter DESC
		LIMIT 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function daily_report_by_top_udp_src($filter){
		$query = "
		select
		s_port,
		name as service_name,
		sum(counter) as counter
		from
		daily_event_aggregation e
		LEFT join services s ON s.protocol = e.protocol and s.port = e.s_port
		where 
		$filter and e.protocol = 17
		group by
		s_port
		order by
		counter DESC
		LIMIT 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function daily_report_by_ip_src($filter){
		$query = "
		select 
		ip_src as int_ip_src,
		INET_NTOA(ip_src) as ip_src,
		country,
		organization_name,
		sum(counter) counter
		from 
		daily_event_aggregation 
		LEFT join ip_map on ip_addr = ip_src
		where 
		$filter
		group by 
		ip_src
		order by 
		counter desc
		limit 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function daily_report_by_ip_dst($filter){
		$query = "
		select 
		ip_dst as int_ip_dst,
		INET_NTOA(ip_dst) as ip_dst,
		country,
		organization_name,
		sum(counter) counter
		from 
		daily_event_aggregation 
		LEFT join ip_map on ip_addr = ip_dst
		where 
		$filter
		group by 
		ip_dst
		order by 
		counter desc
		limit 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	//Monthly
	public function monthly_report_by_sig($filter){
		$query = "
		SELECT 
		signature_name,
		sum(counter) counter
		FROM 
		`monthly_event_aggregation`
		where 
		$filter
		group by 
		signature_name
		order by 
		counter desc
		LIMIT 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function monthly_report_by_severity($filter){
		$query = "
		SELECT 
		CASE WHEN signature_priority = 1
		THEN 'high'
		WHEN signature_priority = 2
		THEN 'medium'
		ELSE 'low' END as signature_priority,
		sum(counter) counter
		FROM 
		monthly_event_aggregation
		WHERE
		$filter
		GROUP BY
		signature_priority;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function monthly_report_by_proto($filter){
		$query = "
		select
		e.protocol,
		name as protocol_name,
		sum(counter) as counter
		from
		monthly_event_aggregation e
		LEFT JOIN protocols p ON p.protocol = e.protocol
		where 
		$filter
		group by
		protocol;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function monthly_report_by_top_tcp_src($filter){
		$query = "
		select
		s_port,
		name as service_name,
		sum(counter) as counter
		from
		monthly_event_aggregation e
		LEFT join services s ON s.protocol = e.protocol and s.port = e.s_port
		where 
		$filter and e.protocol = 6
		group by
		s_port
		order by
		counter DESC
		LIMIT 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function monthly_report_by_top_tcp_dst($filter){
		$query = "
		select
		d_port,
		name as service_name,
		sum(counter) as counter
		from
		monthly_event_aggregation e
		LEFT join services s ON s.protocol = e.protocol and s.port = e.d_port
		where 
		$filter and e.protocol = 6
		group by
		d_port
		order by
		counter DESC
		LIMIT 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function monthly_report_by_top_udp_dst($filter){
		$query = "
		select
		d_port,
		name as service_name,
		sum(counter) as counter
		from
		monthly_event_aggregation e
		LEFT join services s ON s.protocol = e.protocol and s.port = e.d_port
		where 
		$filter and e.protocol = 17
		group by
		d_port
		order by
		counter DESC
		LIMIT 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function monthly_report_by_top_udp_src($filter){
		$query = "
		select
		s_port,
		name as service_name,
		sum(counter) as counter
		from
		monthly_event_aggregation e
		LEFT join services s ON s.protocol = e.protocol and s.port = e.s_port
		where 
		$filter and e.protocol = 17
		group by
		s_port
		order by
		counter DESC
		LIMIT 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function monthly_report_by_ip_src($filter){
		$query = "
		select 
		ip_src as int_ip_src,
		INET_NTOA(ip_src) as ip_src,
		country,
		organization_name,
		sum(counter) counter
		from 
		monthly_event_aggregation 
		LEFT join ip_map on ip_addr = ip_src
		where 
		$filter
		group by 
		ip_src
		order by 
		counter desc
		limit 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function monthly_report_by_ip_dst($filter){
		$query = "
		select 
		ip_dst as int_ip_dst,
		INET_NTOA(ip_dst) as ip_dst,
		country,
		organization_name,
		sum(counter) counter
		from 
		monthly_event_aggregation 
		LEFT join ip_map on ip_addr = ip_dst
		where 
		$filter
		group by 
		ip_dst
		order by 
		counter desc
		limit 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}


	//Annually
	public function annually_report_by_sig($filter){
		$query = "
		SELECT 
		signature_name,
		sum(counter) counter
		FROM 
		`annual_event_aggregation` 
		$filter
		group by 
		signature_name
		order by 
		counter desc
		LIMIT 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function annually_report_by_severity($filter){
		$query = "
		SELECT 
		CASE WHEN signature_priority = 1
		THEN 'high'
		WHEN signature_priority = 2
		THEN 'medium'
		ELSE 'low' END as signature_priority,
		sum(counter) counter
		FROM 
		annual_event_aggregation
		$filter
		GROUP BY
		signature_priority;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function annually_report_by_proto($filter){
		$query = "
		select
		e.protocol,
		p.name as protocol_name,
		sum(counter) as counter
		from
		annual_event_aggregation e
		LEFT join protocols p ON p.protocol = e.protocol
		
		group by
		protocol
		order by counter DESC
		LIMIT 10";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function annually_report_by_top_tcp_src($filter){
		$query = "
		select
		s_port,
		name as service_name,
		sum(counter) as counter
		from
		annual_event_aggregation e
		LEFT join services s ON s.protocol = e.protocol and s.port = e.s_port
		and e.protocol = 6
		group by
		s_port
		order by
		counter DESC
		LIMIT 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function annually_report_by_top_tcp_dst($filter){
		$query = "
		select
		d_port,
		name as service_name,
		sum(counter) as counter
		from
		annual_event_aggregation e
		LEFT join services s ON s.protocol = e.protocol and s.port = e.d_port
		and e.protocol = 6
		group by
		d_port
		order by
		counter DESC
		LIMIT 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function annually_report_by_top_udp_dst($filter){
		$query = "
		select
		d_port,
		name as service_name,
		sum(counter) as counter
		from
		annual_event_aggregation e
		LEFT join services s ON s.protocol = e.protocol and s.port = e.d_port
		and e.protocol = 17
		group by
		d_port
		order by
		counter DESC
		LIMIT 10";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function annually_report_by_top_udp_src($filter){
		$query = "
		select
		s_port,
		name as service_name,
		sum(counter) as counter
		from
		annual_event_aggregation e
		LEFT join services s ON s.protocol = e.protocol and s.port = e.s_port
		and e.protocol = 17
		group by
		s_port
		order by
		counter DESC
		LIMIT 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function annually_report_by_ip_src($filter){
		$query = "
		select 
		ip_src as int_ip_src,
		INET_NTOA(ip_src) as ip_src,
		country,
		organization_name,
		sum(counter) counter
		from 
		annual_event_aggregation 
		LEFT join ip_map on ip_addr = ip_src
		
		group by 
		ip_src
		order by 
		counter desc
		limit 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}

	public function annually_report_by_ip_dst($filter){
		$query = "
		select 
		ip_dst as int_ip_dst,
		INET_NTOA(ip_dst) as ip_dst,
		country,
		organization_name,
		sum(counter) counter
		from 
		annual_event_aggregation 
		LEFT join ip_map on ip_addr = ip_dst
		
		group by 
		ip_dst
		order by 
		counter desc
		limit 10;";

		$result = $this->bigdata->db->query($query);

		$this->bigdata->db->close();

		return $result->result_object();
	}
}