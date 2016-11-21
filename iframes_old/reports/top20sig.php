
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
				title: {
            text: 'Top 20 Signatures'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
				//series: [{"name":"2016-03-25","colorByPoint":true,"data":[{"name":"SERVER-OTHER MRLG fastping echo reply memory corruption attempt","y":81504},{"name":"PROTOCOL-VOIP Sipvicious User-Agent detected","y":8266},{"name":"PROTOCOL-VOIP Possible SIP OPTIONS service information gathering attempt","y":5695},{"name":"PUA-P2P Bittorrent uTP peer request","y":2105},{"name":"PROTOCOL-VOIP inbound INVITE message","y":1703},{"name":"INDICATOR-SCAN UPnP service discover attempt","y":1091},{"name":"PROTOCOL-TFTP Get","y":592},{"name":"PROTOCOL-TFTP root directory","y":592},{"name":"INDICATOR-SHELLCODE x86 inc ecx NOOP","y":200},{"name":"MALWARE-CNC Win.Trojan.ZeroAccess inbound communication","y":119},{"name":"PROTOCOL-DNS dead alive6 DNS attempt","y":113},{"name":"PROTOCOL-DNS single byte encoded name response","y":102},{"name":"SERVER-MSSQL probe response overflow attempt","y":98},{"name":"OS-WINDOWS Microsoft Windows getbulk request attempt","y":48},{"name":"INDICATOR-SHELLCODE x86 NOOP","y":29},{"name":"PROTOCOL-TFTP NULL command attempt","y":23},{"name":"SQL ping attempt","y":22},{"name":"PROTOCOL-VOIP CSeq header method mismatch attempt","y":22},{"name":"PROTOCOL-DNS named version attempt","y":19},{"name":"PROTOCOL-DNS DNS query amplification attempt","y":14}]}],
				//series: [],
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

    $.getJSON('/index.php/report/top_20_sig', function(data) {
				//data = JSON.parse(data);
				options.series = [data];
				//console.log(options.series.data[1]);
        var chart = new Highcharts.chart("container",options);
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
