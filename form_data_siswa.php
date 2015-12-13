<?php
    $resp = "";

    if(isset($_POST["submit"])) {
        
        $namalengkap = $_POST["namalengkap"];
        $jenis_kelamin = $_POST["jeniskelamin"];
        $sekolah = $_POST["sekolah"];
        $tahunmasuk = $_POST["tahunmasuk"];
        $kabkota = $_POST["kabkota"];
        $provinsi = $_POST["provinsi"];

        require "connectDB.php";
        
        //input data
        $conn = connectDB();

        $sql = "INSERT INTO `datasiswa`(`id_siswa`, `nama_siswa`, `jenis_kelamin`, `asal_sekolah`, `tahun_masuk`, `kabupaten_kota`, `provinsi`) VALUES (NULL, '$namalengkap', '$jenis_kelamin', '$sekolah', '$tahunmasuk', '$kabkota', '$provinsi')";

        if($conn->query($sql) === TRUE) {
            $resp = "Data berhasil disimpan";
        } else {
            $resp = "Terdapat kesalahan input data";
        }
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
                            Forms
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                    <?php echo "<span style='color:red'>".$resp."</span>"; ?>

                        <form method="POST" role="form" action="form_data_siswa.php">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input name="namalengkap" class="form-control" placeholder="Nama lengkap tanpa singkatan">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <label class="radio-inline">
                                    <input type="radio" name="jeniskelamin" value="L" checked>Laki-Laki
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="jeniskelamin" value="P">Perempuan
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Asal sekolah</label>
                                <input name="sekolah" class="form-control" placeholder="Misal: SMA Negeri 1">
                            </div>

                            <div class="form-group">
                                <label>Tahun masuk</label>
                                <input name="tahunmasuk" type="number" min="1945" max="2015" class="form-control" placeholder="Masukkan 4 digit angka">
                            </div>

                            <div class="form-group">
                                <label>Kabupaten / Kota</label>
                                <input name="kabkota" class="form-control" placeholder="Nama kabupaten / kota">
                            </div>

                            <div class="form-group">
                                <label>Privinsi</label>
                                <input name="provinsi" class="form-control" placeholder="Privinsi">
                            </div>

                            <button type="submit" name="submit" class="btn btn-default">Submit </button>
                            <button type="reset" class="btn btn-default">Reset </button>
                        </form>
                        <?php echo "<span style='color:red'>".$resp."</span>"; ?>
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
