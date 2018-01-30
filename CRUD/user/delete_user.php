<?php

require_once("../../connection.php");

$id = $_GET['id'];

$sql    = "DELETE FROM user where id_user={$id}";
$result = $connect->query($sql);

header("location: ../../data_user.php");
exit;
?>