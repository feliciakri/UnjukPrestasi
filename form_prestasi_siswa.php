<?php
    $resp = "";

    if(isset($_POST["submit"])) {

        $namasiswa = "Andi";
        $prestasi = $_POST["prestasi"];
        $kategori = $_POST["kategori"];
        $bul = $_POST["bulan"];
        $tahun = $_POST["tahun"];
        $region = $_POST["region"];
        $deskripsi = $_POST["deskripsi"];

        $bulan = "";
        $tmp = "";

        if(isset($_POST["bulan"])) {
            foreach ($bul as $tmp) {
                $bulan = $bulan." ".$tmp;
            }
        }

        require "connectDB.php";
        
        //input data
        $conn = connectDB();
        $sql = "INSERT INTO `prestasi_siswa`(`id_prestasi`, `nama_siswa`, `prestasi_siswa`, `kategori`, `bulan`, `tahun`, `region`, `deskripsi`) VALUES (NULL, '$namasiswa', '$prestasi', '$kategori', '$bulan', '$tahun', '$region', '$deskripsi')";

        if($conn->query($sql) === TRUE) {
            $resp = "Prestasi berhasil ditambahkan";
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
                        <form method="POST" action="form_prestasi_siswa.php" role="form">

                            <div class="form-group">
                                <label>Prestasi</label>
                                <input name="prestasi" class="form-control" placeholder="Misal: juara 2 Hackathon Educode">
                            </div>

                            <div class="form-group">
                                <label>Kategori</label>
                                <input name="kategori" class="form-control" placeholder="Bidang Lomba">
                            </div>

                            <!-- Bulan -->
                            <div class="form-group">
                                <label>Bulan</label>
                                <div class="checkbox">
                                    <label>
                                        <input name="bulan[]" type="checkbox" value="Januari">Januari
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="bulan[]" type="checkbox" value="Februari">Februari
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="bulan[]" type="checkbox" value="Maret">Maret
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="bulan[]" type="checkbox" value="April">April
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="bulan[]" type="checkbox" value="Mei">Mei
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="bulan[]" type="checkbox" value="Juni">Juni
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="bulan[]" type="checkbox" value="Juli">Juli
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="bulan[]" type="checkbox" value="Agustus">Agustus
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="bulan[]" type="checkbox" value="September">September
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="bulan[]" type="checkbox" value="Oktober">Oktober
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="bulan[]" type="checkbox" value="November">November
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="bulan[]" type="checkbox" value="Desember">Desember
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Tahun</label>
                                <input name="tahun" type="number" min="1945" max="2015" class="form-control" placeholder="Masukkan 4 digit angka">
                            </div>

                            <div class="form-group">
                                <label>Regional</label>
                                <select name="region" class="form-control">
                                    <option value="Sekolah">Sekolah</option>
                                    <option value="Desa/Kelurahan">Desa/Kelurahan</option>
                                    <option value="Kecamatan">Kecamatan</option>
                                    <option value="Kabupaten/Kota">Kabupaten/Kota</option>
                                    <option value="Provinsi">Provinsi</option>
                                    <option value="Nasional">Nasional</option>
                                    <option value="Asia Tenggara">Asia Tenggara</option>
                                    <option value="Asia">Asia</option>
                                    <option value="Internasional">Internasional</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi Prestasi</label>
                                <textarea name="deskripsi" class="form-control" rows="3"></textarea>
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
