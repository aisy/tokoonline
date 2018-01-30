<?php session_start(); require_once '../connection.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/font-awesome-5/css/fontawesome-all.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Halaman Utama <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-shopping-cart"></i> <span class="badge badge-danger">12</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              logout
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <br>

    <div class="container">
      <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1>Selamat Datang <?= $_SESSION['username'] ?></h1>
            <hr class="my-2">
            <p>Silahkan Pilih Menu</p>
          </div>
        </div>
      <div class="row">
          <?php 
          $query = "SELECT * FROM barang";
          $sql = $connect->query($query);
          while($data = $sql->fetch_array()){
          ?>
          <div class="col-md-3">
            <div class="card">
              <img class="card-img-top" src="../gambar_barang/<?= $data['gambar'] ?>" alt="">
              <div class="card-body">
                <h4 class="card-title"><?= $data['nama_barang'] ?></h4>
                <p class="card-text"><?= $data['deskripsi'] ?></p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Stok : <?= $data['stok'] ?></li>
                  <!-- <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Vestibulum at eros</li> -->
                </ul>
                <div class="card-body">
                  <a href="#" class="btn btn-primary">Masukkan Keranjang</a>
                </div>
              </div>
            
          </div>
            <?php } ?>
          
      </div>
      <br>

    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>