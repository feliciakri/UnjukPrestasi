<?php
    $namasekolah = $_GET['namasekolah'];
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
                            <?php echo $namasekolah; ?>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Prestasi Sekolah
                            </li>
                        </ol>
                    </div>
                </div>

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr style='background:lightgreen'>
                                    <th>Nama Siswa</th>
                                    <th>Prestasi</th>
                                </tr>
                            </thead>
                            <tbody>


                            <?php
                                require "connectDB.php";
            
                                //input data
                                $conn = connectDB();

                                $checkUsername = "SELECT * FROM `datasiswa` WHERE asal_sekolah='$namasekolah'";
                                $result2 = mysqli_query($conn, $checkUsername);

                                if(mysqli_num_rows($result2) == 0) {
                                    mysqli_close($conn);
                                    echo "Kosong";
                                } else {
                                    while($data = $result2->fetch_assoc()){  
                                        echo "<tr><td><a href='siswa-page.php?namasiswa=".$data['nama_siswa']."'>".$data['nama_siswa']."</td>";
                                        echo "<td>";
                                        echo "OSN Matematika ".($data['tahun_masuk']+1);
                                        echo "</td></tr>";
                                    }
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
