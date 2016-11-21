
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
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
				credits: {
					enabled: false
				}
    };

		$.getJSON('/index.php/report/top_tcp_proto_dst', function(data) {
				options.series = [data];
				options.title = {
					text: 'Top TCP Destination'
        };
        var chart = new Highcharts.chart("container-tcp-dst",options);
    });

    $.getJSON('/index.php/report/top_tcp_proto_src', function(data) {
				options.series = [data];
				options.title = {
					text: 'Top TCP Source'
        };
        var chart = new Highcharts.chart("container-tcp-src",options);
    });

		$.getJSON('/index.php/report/top_udp_proto_src', function(data) {
				options.series = [data];
				options.title = {
					text: 'Top TCP Source'
        };
        var chart = new Highcharts.chart("container-udp-src",options);
    });

		$.getJSON('/index.php/report/top_udp_proto_dst', function(data) {
				options.series = [data];
				options.title = {
					text: 'Top UDP Destination'
        };
        var chart = new Highcharts.chart("container-udp-dst",options);
    });
});
</script>
</head>
<body>
	<script src="/assets/js/highcharts.js"></script>
	<script src="/assets/js/exporting.js"></script>

	<div id="container-tcp-src" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
	<div id="container-tcp-dst" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
	<div id="container-udp-src" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
	<div id="container-udp-dst" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

</body>
</html>
