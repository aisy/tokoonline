<?php

require_once("../../connection.php");

$id_user = $_POST['id_user'];
// echo $id_surat;

$sql = "UPDATE user SET username='$_POST[username]', password='$_POST[password]', jk='$_POST[jk]' WHERE id_user =$id_user ";

if($connect->query($sql) === TRUE) {
    // echo "<p>Succcessfully Updated</p>";
    header("location: ../../data_user.php");
    exit;
} else {
    echo "Erorr while updating record : ". $connect->error;
}
?>