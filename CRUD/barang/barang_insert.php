<?php 
    error_reporting(-1);

    // ambil file connection
    require_once "../../connection.php";

    $fileinfo=PATHINFO($_FILES["gambar"]["name"]);
    $newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];

    move_uploaded_file($_FILES['gambar']['tmp_name'], "../../gambar_barang/".$newFilename);

    // if (!is_writeable('../../gambar/' . $_FILES['gambar']['name'])) {
    //     die("Cannot write to destination file");
    //  }

    // perintah masukkan data
    $sql = $connect->query("INSERT INTO barang values('','$_POST[nama_barang]','$_POST[stok]','$_POST[deskripsi]','$nama_gambar')");
    
    header("location: ../../halaman_admin/barang.php");
    exit;

    // cek kondisi apakah datanya masuk apa tidak?
    // if($sql){
    //     echo "sukses";
    // }else{
    //     echo "error";
    // }

?>