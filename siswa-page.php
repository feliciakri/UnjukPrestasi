<?php
    $namasiswa = $_GET['namasiswa'];
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
                            <?php echo $namasiswa; ?>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Profil Siswa
                            </li>
                        </ol>
                    </div>
                </div>

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                            <?php
                                require "connectDB.php";
            
                                //input data
                                $conn = connectDB();

                                $checkUsername = "SELECT * FROM `datasiswa` WHERE nama_siswa='$namasiswa'";
                                $result2 = mysqli_query($conn, $checkUsername);

                                if(mysqli_num_rows($result2) == 0) {
                                    mysqli_close($conn);
                                    echo "Kosong";
                                } else {
                                    if($data = $result2->fetch_assoc()){  
                                        echo "<br>Nama : ";
                                        echo $data['nama_siswa'];
                                        
                                        echo "<br>Jenis kelamin : ";
                                        echo $data['jenis_kelamin'];

                                        echo "<br>Asal sekolah : ";
                                        echo $data['asal_sekolah'];

                                        echo "<br>Kabupaten/Kota : ";
                                        echo $data['kabupaten_kota'];

                                        echo "<br>Provinsi : ";
                                        echo $data['provinsi'];

                                        echo "<br><br>Prestasi : ";
                                        echo "<br>OSN Matematika ".($data['tahun_masuk']+1);
                                    }
                                }
                            ?>

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
