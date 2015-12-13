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

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                        <div class="jumbotron" align="center">
                           
                            <h1 class="page-header brand-heading" text-align>Unjuk Prestasi</h1>
                            <p class="intro-text">Database terpusat tentang semua prestasi siswa, guru, dan sekolah seluruh di Indonesia.</p>
                            <h2>Visi Kami :</h2>
                            <p>Mendorong pendidikan yang lebih baik lewat apresiasi prestasi siswa, guru, dan sekolah di seluruh Indonesia</p>

                            <br>
                            <hr>
                            <br>

                            <h2>Punya prestasi? Ayo tuliskan di web ini biar bisa dilihat semua orang.</h2>
                            <a href="form_prestasi_siswa.php" class="btn btn-default btn-lg"><i class="fa fa-map-marker fa-fw"></i> <span class="network-name">Siswa</span></a>
                            <a href="form_prestasi_guru.php" class="btn btn-default btn-lg"><i class="fa fa-map-marker fa-fw"></i> <span class="network-name">Guru</span></a>
                            <a href="#" class="btn btn-default btn-lg"><i class="fa fa-map-marker fa-fw"></i> <span class="network-name">Sekolah</span></a>
                        </div>

                        <!-- Contact Section -->
                        <section id="contact" class="container content-section text-center">
                            <div class="row">
                                <div class="col-lg-12 col-lg-offset-2">
                                    <h2>Berkontribusi ke proyek ini!</h2>
                                    <p>Ingin berkontribusi dalam menambah data, ataupun memperbaiki data yang ada di situs ini?</p>
                                    <p><a href="mailto:contribute@unjuk-prestasi.go.id">Kirim Email ke Kami!</a>
                                    </p>

                                    <br>
                                    <hr>
                                    <br>

                                    <h2>Ikuti kami di</h2>
                                    <ul class="list-inline banner-social-buttons">
                                        <li>
                                            <a href="https://twitter.com/" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                                        </li>
                                        <li>
                                            <a href="https://facebook.com" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                                        </li>
                                        <li>
                                            <a href="https://plus.google.com/" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                                        </li>
                                    </ul>
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

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>



    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
