<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Unjuk Prestasi</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        #chartdiv {
            width       : 100%;
            height      : 500px;
            font-size   : 11px;  
        }                                       

        .amcharts-export-menu-top-right {
          top: 10px;
          right: 0;
        }       
    </style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
            include("navigation.php");
        ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Distribusi Peserta OSN Matematika 2010 Dari D.K.I. Jakarta
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Charts
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div id="chartdiv">
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Diagram -->
    <script src="http://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="http://www.amcharts.com/lib/3/serial.js"></script>
    <script src="http://www.amcharts.com/lib/3/themes/light.js"></script>

    <script type="text/javascript">
        var chart = AmCharts.makeChart("chartdiv", {
          "type": "serial",
          "theme": "light",
          "marginRight": 70,
          "dataProvider": [{
            "country": "SMA LABSCHOOL RAWAMANGUN",
            "visits": 1,
            "color": "#FF0F00"
          }, {
            "country": "SMAK IPEKA TOMANG",
            "visits": 2,
            "color": "#FF6600"
          }, {
            "country": "SMAK 3 BPK PENABUR",
            "visits": 2,
            "color": "#FF9E01"
          }, {
            "country": "SMAN 8 JAKARTA",
            "visits": 3,
            "color": "#FCD202"
          }, {
            "country": "SMAK 1 BPK PENABUR",
            "visits": 2,
            "color": "#F8FF01"
          }, {
            "country": "SMA RICCI 1",
            "visits": 1,
            "color": "#B0DE09"
          }, {
            "country": "SMAN 61 JAKARTA",
            "visits": 1,
            "color": "#04D215"
          }, {
            "country": "SMA GANDHI ANCOL",
            "visits": 1,
            "color": "#0D8ECF"
          }, {
            "country": "SMAN 28 JAKARTA",
            "visits": 1,
            "color": "#2A0CD0"
          }, {
            "country": "SMAN 58 JAKARTA",
            "visits": 1,
            "color": "#8A0CCF"
          }],
          "valueAxes": [{
            "axisAlpha": 0,
            "position": "left",
            "title": "Peserta OSN"
          }],
          "startDuration": 1,
          "graphs": [{
            "balloonText": "<b>[[category]]: [[value]]</b>",
            "fillColorsField": "color",
            "fillAlphas": 0.9,
            "lineAlpha": 0.2,
            "type": "column",
            "valueField": "visits"
          }],
          "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
          },
          "categoryField": "country",
          "categoryAxis": {
            "gridPosition": "start",
            "labelRotation": 45
          },
          "export": {
            "enabled": true
          }

        });
    </script>
</body>

</html>
