<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UnjukPrestasi - Sadari Masa Depanmu</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    
    <!-- amCharts javascript sources -->
    <script type="text/javascript" src="js/ammap.js"></script>
	<script type="text/javascript" src="js/indonesiaLow.js"></script>
    
     <!-- amCharts Script -->
             
    		<script type="text/javascript">
	         AmCharts.makeChart("map",{
			"type": "map",
			"pathToImages": "http://www.amcharts.com/lib/3/images/",
			"addClassNames": true,
			"fontSize": 15,
			"color": "#FFFFFF",
			"backgroundAlpha": 1,
			"backgroundColor": "rgba(80,80,80,1)",
			"dataProvider": {
				"map": "indonesiaLow",
				"getAreasFromMap": true,
			},
			"balloon": {
				"horizontalPadding": 15,
				"borderAlpha": 0,
				"borderThickness": 1,
				"verticalPadding": 15
			},
			"areasSettings": {
				"color": "rgba(121,217,199,1)",
				"outlineColor": "rgba(80,80,80,1)",
				"rollOverOutlineColor": "rgba(80,80,80,1)",
				"rollOverBrightness": 20,
				"selectedBrightness": 20,
				"selectable": true,
				"unlistedAreasAlpha": 0,
				"unlistedAreasOutlineAlpha": 0
			},
			"imagesSettings": {
				"alpha": 1,
				"color": "rgba(121,217,199,1)",
				"outlineAlpha": 0,
				"rollOverOutlineAlpha": 0,
				"outlineColor": "rgba(80,80,80,1)",
				"rollOverBrightness": 20,
				"selectedBrightness": 20,
				"selectable": true
			},
			"linesSettings": {
				"color": "rgba(121,217,199,1)",
				"selectable": true,
				"rollOverBrightness": 20,
				"selectedBrightness": 20
			},
			"zoomControl": {
				"zoomControlEnabled": true,
				"homeButtonEnabled": false,
				"panControlEnabled": false,
				"right": 38,
				"bottom": 30,
				"minZoomLevel": 0.25,
				"gridHeight": 100,
				"gridAlpha": 0.1,
				"gridBackgroundAlpha": 0,
				"gridColor": "#FFFFFF",
				"draggerAlpha": 1,
				"buttonCornerRadius": 2
			}
		});
		</script>

     <!-- amCharts script end-->
    
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--<link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">-->

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
                <script>
                    .cover-back{
                        background-size: cover;
                    }
                </script>

                <div class="row">
                    <div class="col-lg-12">
                      <!-- About Section -->
                        <section id="about" class="container content-section text-center">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <h1>Pilih Provinsi</h1>
                                    <!-- Interactive map Section-->
                                        <div id="map" style="width: 100%; height: 675px;"></div>
                                    <!-- Dont disturb above this-->
                                </div>
                            </div>
                        </section>
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

</body>

</html>
