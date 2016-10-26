<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Home</h4>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <script type="text/javascript" src="<?php echo base_url(); ?>assets/Grafik/js/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    // Create the chart
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafik Pendaftaran Penyambungan Baru <br>PDAM Wayrilau Tahun  <?php echo $Tahun; ?>'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total Pendaftar'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y} Pendaftar' 
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name} Bulan </span>',
            pointFormat: '<span><b>{point.name}</b></span>: <b>{point.y}</b> pendaftar<br/>'
        },

        series: [{
            name: 'Total',
            colorByPoint: true,
            data: [{
                name: 'January',
                y:  <?php echo $n1; ?>,
            }, {
                name: 'Februari',
                y: <?php echo $n2; ?>,
            }, {
                name: 'Maret',
                y: <?php echo $n3; ?>,
            },{
                name: 'April',
                y: <?php echo $n4; ?>,
            }, {
                name: 'Mei',
                y: <?php echo $n5; ?>,
            }, {
                name: 'Juni',
                y: <?php echo $n6; ?>,
            }, {
                name: 'Juli',
                y: <?php echo $n7; ?>,
            },{
                name: 'Agustus',
                y: <?php echo $n8; ?>,
            },{
                name: 'September',
                y: <?php echo $n9; ?>,
            },{
                name: 'Oktober',
                y: <?php echo $n10; ?>,
            },{
                name: 'November',
                y: <?php echo $n11; ?>,
            },{
                name: 'Desember',
                y: <?php echo $n12; ?>,
            }]
        }]
        
    });
});
		</script>
	</head>
	<body>
<script src="<?php echo base_url(); ?>assets/Grafik/js/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/Grafik/js/data.js"></script>
<script src="<?php echo base_url(); ?>assets/Grafik/js/drilldown.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
			                       
            </div>
        </div>
        <br>
        <br>