<?php
	function connectDB() {
        $servername = "mysql4.000webhost.com";
        $username = "a6526125_unjuk";
        $password = "abcd123";
        $dbName = "a6526125_UnjukPr";

        //Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbName);

        if(!$conn) {
            die("Connection failed: ".mysqli_connect_error());
        }

        return $conn;
    }
?>