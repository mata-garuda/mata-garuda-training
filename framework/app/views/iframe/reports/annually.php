<?php

//debug
$target = "All";
$origin = "All";
/*
$date = "2016-05-11";
*/
$date = 2016;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Mata Garuda Report</title>

	<!-- Bootstrap core CSS -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="/assets/css/mg-report.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
	<div class="content col-md-12 content-page">

		<div class="heading">
			<img src="<?php base_url(); ?>/assets/images/kemkominfo.png" class="pull-left" height="45" style="margin: 15px;">
			<img src="<?php base_url(); ?>/assets/images/idsirtii.png" class="pull-right" height="20" style="margin: 15px;">
			<h3 style="padding-top: 15px">Mata Garuda Internet Monitoring System Report</h3>
			<p class="lead"></p>
		</div>

		<div class="panel-heading">
			<table>
				<tbody>
					<tr>
						<td width="170">Targeted IP Address</td>
						<td>: <b><?php echo $target; ?></b></td>
					</tr>
					<tr>
						<td>Origin IP Address </td>
						<td>: <b><?php echo $origin; ?></b></td>
					</tr>
					<tr>
						<td>Time Start </td>
						<td>: <?php echo $date; ?>-01-01 00:00:00</td>
					</tr>
					<tr>
						<td>Time Finish </td>
						<td>: <?php echo $date; ?>-12-31 23:59:59</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="alert alert-warning no-border">
			<i class="fa fa-info-circle"></i> <b>Summary</b> <br>Based on analysis and report from ID-SIRTII/CC network monitoring system. IP <?php echo $target; ?> shows some attack indication between <?php echo $date; ?> 00:00:00 and <?php echo $date; ?> 23:59:59 with classification as below:
		</div>
		<div class="panel-heading">
			<i class="fa fa-area-chart"></i>
			<b>Attack Count based on Classification</b>
		</div>
		<div class="row wrapper">
			<div class="col-sm-12">
				<table width="100%">
					<tbody>
						<tr>
							<td width="50%">
								<div id="chart-signature">
									
								</div>
							</td>
							<td width="50%">
								<table class="table" id="table-signature">
									<thead>
										<td>Signature</td>
										<td>Count</td>										</td>
									</thead>
									<tbody>
										
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!-- element separator -->

		<div class="panel-heading">
			<i class="fa fa-area-chart"></i>
			<b>Attack Count based on Severity</b>
		</div>
		<div class="row wrapper">
			<div class="col-sm-12">
				<table width="100%">
					<tbody>
						<tr>
							<td width="50%">
								<div id="chart-severity">									
								</div>
							</td>
							<td width="50%">
								<table class="table" id="table-severity">
									<thead>
										<td>Severity</td>
										<td>Count</td>										</td>
									</thead>
									<tbody>
										
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<!-- element separator -->

		<div class="panel-heading">
			<i class="fa fa-area-chart"></i>
			<b>Attack count based on IP Source</b>
		</div>
		<div class="row wrapper">
			<div class="col-sm-12">
				<table width="100%">
					<tbody>
						<tr>
							<td width="50%">
								<div id="chart-ip-src">									
								</div>
							</td>
							<td width="50%">
								<table class="table" id="table-ip-src">
									<thead>
										<td>IP Source</td>
										<td>Count</td>										</td>
									</thead>
									<tbody>
										
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<!-- element separator -->

		<div class="panel-heading">
			<i class="fa fa-area-chart"></i>
			<b>Attack Count based on IP Destination</b>
		</div>
		<div class="row wrapper">
			<div class="col-sm-12">
				<table width="100%">
					<tbody>
						<tr>
							<td width="50%">
								<div id="chart-ip-dst">									
								</div>
							</td>
							<td width="50%">
								<table class="table" id="table-ip-dst">
									<thead>
										<td>IP Destination</td>
										<td>Count</td>										</td>
									</thead>
									<tbody>
										
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

	</div><!-- /.container -->
	<script src="/assets/js/highcharts.js"></script>
	<script src="/assets/js/exporting.js"></script>
	<script src="/assets/js/jquery-3.1.1.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			var options = {
				chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie'
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: false
						},
						showInLegend: true
					}
				},
				credits: {
					enabled: false
				},
				exporting: {
					enabled: false
				}
			};

			// Signature
			$.getJSON('/reports/annually/by_sig/graph?date=<?php echo $date; ?>', function(data) {
				options.series = [data];
				options.title = {
					text: 'Event by Signature <?php echo $date; ?>'
				};
				var chart = new Highcharts.chart("chart-signature",options);
			});
			$.getJSON('/reports/annually/by_sig/?date=<?php echo $date; ?>', function(data) {
				eventtotal = data.count;
				data = data.data;
				var tr = [];
				for(var i = 0;i < data.length; i++){
					//alert(data[i].signature_name + data[i].counter);
					tr.push("<tr>");
					tr.push("<td>" + data[i].signature_name + "</td>");
					tr.push("<td>" + data[i].counter + "</td>");
					tr.push("</tr>");
				}
				$('#table-signature').append($(tr.join('')));
			});

			//Severity
			$.getJSON('/reports/annually/by_severity/graph?date=<?php echo $date; ?>', function(data) {
				options.series = [data];
				options.title = {
					text: 'Event by Severity <?php echo $date; ?>'
				};
				var chart = new Highcharts.chart("chart-severity",options);
			});
			$.getJSON('/reports/annually/by_severity/?date=<?php echo $date; ?>', function(data) {
				eventtotal = data.count;
				data = data.data;
				var tr = [];
				for(var i = 0;i < data.length; i++){
					//alert(data[i].signature_name + data[i].counter);
					tr.push("<tr>");
					tr.push("<td>" + data[i].signature_priority + "</td>");
					tr.push("<td>" + data[i].counter + "</td>");
					tr.push("</tr>");
				}
				$('#table-severity').append($(tr.join('')));
			});

			//IP Source
			$.getJSON('/reports/annually/by_ip_src/graph?date=<?php echo $date; ?>', function(data) {
				options.series = [data];
				options.title = {
					text: 'Event by IP Source <?php echo $date; ?>'
				};
				var chart = new Highcharts.chart("chart-ip-src",options);
			});
			$.getJSON('/reports/annually/by_ip_src/?date=<?php echo $date; ?>', function(data) {
				eventtotal = data.count;
				data = data.data;
				var tr = [];
				for(var i = 0;i < data.length; i++){
					//alert(data[i].signature_name + data[i].counter);
					tr.push("<tr>");
					tr.push("<td>" + data[i].ip_src + "</td>");
					tr.push("<td>" + data[i].counter + "</td>");
					tr.push("</tr>");
				}
				$('#table-ip-src').append($(tr.join('')));
			});

			//IP Destination
			$.getJSON('/reports/annually/by_ip_dst/graph?date=<?php echo $date; ?>', function(data) {
				options.series = [data];
				options.title = {
					text: 'Event by IP Destination <?php echo $date; ?>'
				};
				var chart = new Highcharts.chart("chart-ip-dst",options);
			});
			$.getJSON('/reports/annually/by_ip_dst/?date=<?php echo $date; ?>', function(data) {
				eventtotal = data.count;
				data = data.data;
				var tr = [];
				for(var i = 0;i < data.length; i++){
					//alert(data[i].signature_name + data[i].counter);
					tr.push("<tr>");
					tr.push("<td>" + data[i].ip_dst + "</td>");
					tr.push("<td>" + data[i].counter + "</td>");
					tr.push("</tr>");
				}
				$('#table-ip-dst').append($(tr.join('')));
			});
		});
</script>
</body>
</html>
