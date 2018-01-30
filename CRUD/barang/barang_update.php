<?php

require_once("../../connection.php");

$id_barang = $_POST['id_barang'];
// echo $id_surat;

$sql = "UPDATE barang SET nama_barang='$_POST[nama_barang]', stok='$_POST[stok]', deskripsi='$_POST[deskripsi]' WHERE id_barang =$id_barang";

if($connect->query($sql) === TRUE) {
    // echo "<p>Succcessfully Updated</p>";
    header("location: ../../halaman_admin/data_user.php");
    exit;
} else {
    echo "Erorr while updating record : ". $connect->error;
}
?>