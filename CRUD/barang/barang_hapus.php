<?php

require_once("../../connection.php");

$id = $_GET['id'];

$sql    = "DELETE FROM barang where id_barang={$id}";
$result = $connect->query($sql);

header("location: ../../halaman_admin/barang.php");
exit;
?>