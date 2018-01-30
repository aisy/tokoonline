<?php 
    session_start();

    require_once "../../connection.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query  = "SELECT * from user inner join detailUser on user.id_user = detailUser.id_user where username='$username' and password='$password'";
    $log    = $connect->query($query);
    $data   = $log->fetch_assoc();

    // echo $log->num_rows;

    if($log->num_rows >0){
        $_SESSION['id']           = $data['id_user'];
        $_SESSION['username']     = $data['username'];
        $_SESSION['level']        = $data['level'];

        if($_SESSION['level']=='admin'){
            header("location: ../../halaman_admin/halaman_admin.php");
            exit;
        }else{
            header("location: ../../halaman_user/halaman_user.php");
            exit;
        }

    }else{
        echo "login gagal";
    }
?>

