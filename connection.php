<?php 

    $locahost = "localhost";
    $username = "root";
    $password = "";
    $dbname   = "toko_online";

    $connect = new mysqli($locahost, $username, $password, $dbname);

    if($connect->connect_error){
        die("koneksi gagal". $connect->error);
    }

?>