<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
	public function index(){
		echo "index";
	}

	public function statistics($date = NULL){

		if($date == NULL){
			die("Input date value");
		}
		?>


		<!DOCTYPE HTML>
		<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Highcharts Example</title>

			<script type="text/javascript" src="/assets/js/jquery.min.js"></script>
			<style type="text/css">
				${demo.css}
			</style>
			<script type="text/javascript">
		$(document).ready(function() {

		    var options = {
		    	title: {
		    		text: "Event Statistics <?php echo $date; ?>"
		    	},
		        chart: {
		            renderTo: 'container',
		            type: 'column'
		        },
		        series: [{}],
		        xAxis: {
		        	title: {
		        		text: "Hour"
		        	},
		        	categories: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23]
		        },
		        yAxis: {
		        	title: {
		        		text: "Event count"
		        	}
		        },
		        plotOptions: {
		            line: {
		                dataLabels: {
		                    enabled: false
		                },
		                enableMouseTracking: false
		            }
		        },
						credits: {
							enabled: false
						}
		    };

		    $.getJSON('/index.php/event/statistics/<?php echo $date; ?>', function(data) {
		    	//console.log(data.data[0]);
		        //data = data.data[0];
		        options.series[0] = data;
		        var chart = new Highcharts.Chart(options);
		    });

		});
		</script>
		</head>
		<body>
			<script src="/assets/js/highcharts.js"></script>
			<script src="/assets/js/exporting.js"></script>

			<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

		</body>
		</html>


		<?php
	}
}
