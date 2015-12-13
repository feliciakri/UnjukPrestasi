<?php
    $resp = "";

    if(isset($_POST["submit"])) {
        
        $namalengkap = $_POST["namalengkap"];
        $kampus = $_POST["kampus"];
        $gelar = $_POST["gelar"];
        $sertifikasi = $_POST["optionsRadiosInline"];
        $sekolah = $_POST["sekolah"];
        $tahunmasuk = $_POST["tahunmasuk"];
        $matpel = $_POST["matpel"];
        $kabkota = $_POST["kabkota"];
        $provinsi = $_POST["provinsi"];

        $matapelajaran = "";
        $tmp = "";

        if(isset($_POST["matpel"])) {
            foreach ($matpel as $tmp) {
                $matapelajaran = $matapelajaran.", ".$tmp;
            }
        }

        require "connectDB.php";
        
        //input data
        $conn = connectDB();
        $sql = "INSERT INTO `dataguru`(`id_guru`, `nama_guru`, `pendidikan_terakhir`, `gelar`, `sertifikasi`, `tempat_mengajar`, `tahun_masuk_ajar`, `mata_pelajaran`, `kabupaten_kota`, `provinsi`) VALUES (NULL, '$namalengkap', '$kampus', '$gelar', '$sertifikasi', '$sekolah', '$tahunmasuk', '$matapelajaran', '$kabkota', '$provinsi')";

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

    <title>SB Admin - Bootstrap Admin Template</title>

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

                        <form method="POST" role="form" action="form_data_guru.php">

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input name="namalengkap" class="form-control" placeholder="Nama lengkap tanpa gelar">
                            </div>

                            <div class="form-group">
                                <label>Nama sekolah/kampus terakhir mengenyam pendidikan formal</label>
                                <input name="kampus" class="form-control" placeholder="Tanpa disingkat, misal: Institut Teknologi Bandung">
                            </div>

                            <div class="form-group">
                                <label>Gelar</label>
                                <input name="gelar" class="form-control" placeholder="Disingkat, misal: S.T.">
                            </div>
                            
                            <div class="form-group">
                                <label>Sertifikasi Guru </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="Sudah">Sudah
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="Belum" checked>Belum
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Nama sekolah yang tempat mengajar</label>
                                <input name="sekolah" class="form-control" placeholder="Tanpa disingkat, misal: SMA Negeri 1">
                            </div>

                            <div class="form-group">
                                <label>Tahun masuk mengajar</label>
                                <input name="tahunmasuk" type="number" min="1945" max="2015" class="form-control" placeholder="Masukkan 4 digit angka">
                            </div>

                            <!-- Mata pelajaran yang diajar -->
                            <div class="form-group">
                                <label>Mata Pelajaran</label>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="Matematika">Matematika
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="Fisika">Fisika
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="Kimia">Kimia
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="Biologi">Biologi
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="Akuntansi">Akuntansi
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="Ekonomi">Ekonomi
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="Sosiologi">Sosiologi
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="Geografi">Geografi
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="Bahasa Indonesia">Bahasa Indonesia
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="Bahasa Inggris">Bahasa Inggris
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="TIK">TIK
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="Sejarah">Sejarah
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="PKN">PKN
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="Olahraga">Olahraga
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="Agama Islam">Agama Islam
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="Agama Katolik">Agama Katolik
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="Agama Kristen">Agama Kristen
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="Agama Hindu">Agama Hindu
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="matpel[]" value="Agama Buddha">Agama Buddha
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Kabupaten / Kota tempat mengajar</label>
                                <input name="kabkota" class="form-control" placeholder="Nama kabupaten / kota">
                            </div>

                            <div class="form-group">
                                <label>Privinsi tempat mengajar</label>
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
