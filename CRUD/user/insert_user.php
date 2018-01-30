<?php 

    // ambil file connection
    require_once "../../connection.php";

    // perintah masukkan data
    $sql = $connect->query("INSERT INTO user values('','$_POST[username]','$_POST[password]','$_POST[jk]')");
    
    header("location: ../../data_user.php");
    exit;

    // cek kondisi apakah datanya masuk apa tidak?
    // if($sql){
    //     echo "sukses";
    // }else{
    //     echo "error";
    // }

?>