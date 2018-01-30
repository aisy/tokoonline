<?php session_start() ?>
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

  <?php include '../navbar/navbar_admin.php' ?>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Selamat Datang <?= $_SESSION['username'] ?></h4>
                  </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card">
                  <div class="card-header">
                    <i class="fas fa-inbox"></i> Order Masuk
                  </div>
                  <div class="card-body">

                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small>3 days ago</small>
                      </div>
                      <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                      <small>Donec id elit non mi porta.</small>
                    </a>
                  </div>

                  <br>
                  <a href="">Lihat Selengkapnya <i class="fas fa-arrow-alt-circle-right"></i></a>
                  </div>
                </div>
            </div>
        </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>