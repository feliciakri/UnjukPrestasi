<?php
    $namaguru = "";
    $prestasi = "";
    $kategori = "";
    $bulan = "";
    $tahun = "";
    $region = "";
    $deskripsi = "";

    require "connectDB.php";

    $conn = connectDB();

    $result = "";
    $query = "SELECT * FROM `prestasi_guru` ORDER BY `id_prestasi` DESC";
    $result = $conn->query($query);

    // Get user_id
    // if($row = $result->fetch_assoc()) { 
    //     $fullname = $row['fullname'];
    //     $userid = $row['user_id'];
    // }

?>

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
                            Prestasi Guru
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Prestasi Guru
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <h2>Kalpataru</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr style='background:lightgreen'>
                                        <th>Nama Guru</th>
                                        <th>Prestasi</th>
                                        <th>Kategori</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th>Region</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td><a href='#'>".$row['nama_guru']."</a></td>";
                                            echo "<td><a href='#'>".$row['prestasi_guru']."</a></td>";
                                            echo "<td><a href='#'>".$row['kategori']."</td>";
                                            echo "</a><td>".$row['bulan']."</td>";
                                            echo "<td>".$row['tahun']."</td>";
                                            echo "<td>".$row['region']."</td>";
                                            echo "<td>".$row['deskripsi']."</td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
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
