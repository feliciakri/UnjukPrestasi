<?php
    $tahun = "";
    if(isset($_POST["submit"])) {
        $tahun = $_POST["tahun_osn"];
    }
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
                            Daftar Peserta OSN SMA
                            <small>Bidang Matematika</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> OSN
                            </li>
                        </ol>
                    </div>
                </div>

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">

                        <form method="POST" action="osn-page.php" role="form">
                            <div class="form-group">
                                <select name="tahun_osn" class="form-control">
                                    <option value="">Pilih tahun</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-default">Lihat</button>
                            <br>
                            <br>
                            <br>
                        </form>

                        <div class="table-responsive">
                            <h3>Tahun <?php echo $tahun; ?></h3>
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr style='background:lightgreen'>
                                        <th>No.</th>
                                        <th>Nama Siswa</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Kelas</th>
                                        <th>Asal Sekolah</th>
                                        <th>Kabupaten/Kota</th>
                                        <th>Provinsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if (strlen($tahun) != 0 && ($handle = fopen("csv/osn_".$tahun.".csv", "r")) !== FALSE) {
                                            while (($data = fgetcsv($handle, 100, ",")) !== FALSE) {
                                                // $num = count($data);
                                                echo "<tr>";

                                                echo "<td>";
                                                echo $data[0];
                                                echo "</td>";
                                                
                                                echo "<td><a href='siswa-page.php?namasiswa=".$data[1]."'>";
                                                echo $data[1];
                                                echo "</a></td>";
                                                
                                                echo "<td>";
                                                echo $data[2];
                                                echo "</td>";

                                                echo "<td>";
                                                echo $data[3];
                                                echo "</td>";

                                                echo "<td><a href='school-page.php?namasekolah=".$data[4]."'>";
                                                echo $data[4];
                                                echo "</a></td>";

                                                echo "<td><a href='#'>";
                                                echo $data[5];
                                                echo "</a></td>";

                                                echo "<td><a href='charts.php'>";
                                                echo $data[6];
                                                echo "</a></td>";

                                                echo "</tr>";
                                            }
                                            fclose($handle);
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <br>
                            <br>
                            <br>

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
