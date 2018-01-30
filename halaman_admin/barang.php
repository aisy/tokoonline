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
    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/font-awesome-5/css/fontawesome-all.css">
  </head>
  <body>

    <?php include '../navbar/navbar_admin.php'; ?>

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
                    <i class="fas fa-inbox"></i> Data Barang
                  </div>
                  <div class="card-body">
                    
                    <!-- Button trigger modal -->
                    <div class="center text-center">
                        <button type="button" class="btn btn-primary btn-md center text-center" data-toggle="modal" data-target="#addBarang">
                            <i class="fas fa-plus-square"></i> Tambah data Barang
                        </button>
                    </div>
                    <br>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="addBarang" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="modelTitleId">Tambah data</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="../CRUD/barang/barang_insert.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                          <label for="">Nama Barang</label>
                                          <input type="text" class="form-control" name="nama_barang" id="" placeholder="Nama Barang">
                                        </div>

                                        <div class="form-group">
                                          <label for="">Stok Barang</label>
                                          <input type="text" class="form-control" name="stok_barang" id="" placeholder="Stok Barang">
                                        </div>

                                        <div class="form-group">
                                          <label for="">Deskripsi</label>
                                          <textarea class="form-control" name="deskripsi" id="" rows="3" placeholder="Deskripsi"></textarea>
                                        </div>

                                        <div class="form-group">
                                          <label for="">Upload Gambar Barang</label>
                                          <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table id="databarang" class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Barang</th>
                                <th>Stok</th>
                                <th>Deskripsi</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM barang";
                                $sql = $connect->query($query);
                                $i = 1;
                                while($data = $sql->fetch_array()){ 
                            ?>
                            <tr>
                                <td>1</td>
                                <td><?= $data['nama_barang'] ?></td>
                                <td><?= $data['stok'] ?></td>
                                <td><?= $data['deskripsi'] ?></td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="">
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modelId<?= $data['id_barang'] ?>"><i class="fas fa-edit"></i></button>
                                        <a href="../CRUD/barang/barang_hapus.phpid=<?= $data['id_surat'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            
                            <!-- Modal Update -->
                    <div class="modal fade" id="modelId<?= $data['id_barang'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <?php 
                                $sql_update    = "SELECT * FROM barang where id_barang={$data['id_barang']}";
                                $result_update = $connect->query($sql_update);
                                $data_update   = $result_update->fetch_assoc();
                                // $connect->close();
                            ?>

                            <form action="../CRUD/barang/barang_update.php" method="post">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="modelTitleId">Modal Update data</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="form-group">
                                          <label for="">Nama Barang</label>
                                          <input type="text" class="form-control" name="nama_barang" id="" value="<?= $data_update['nama_barang'] ?>">
                                        </div>

                                        <div class="form-group">
                                          <label for="">Stok Barang</label>
                                          <input type="text" class="form-control" name="stok_barang" id="" value="<?= $data_update['stok'] ?>">
                                        </div>

                                        <div class="form-group">
                                          <label for="">Deskripsi</label>
                                          <textarea class="form-control" name="deskripsi" id="" rows="3" value=""><?= $data_update['deskripsi'] ?></textarea>
                                        </div>

                                        <!-- <div class="form-group">
                                          <label for="">Upload Gambar Barang</label>
                                          <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
                                        </div>
                                        <input type="hidden" name="id_barang" value="<?= $data_update['id_barang'] ?>"> -->

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                            <?php $i++; } ?>
                        </tbody>
                    </table>

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

    <!-- data table -->
    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function(){

            // inisial datatable
            var dataTable = $("#databarang").DataTable(
                {
                    // menghilangkan filter search
                    // bFilter:false,

                    // tambhakan bahasa Indonesia di datatable
                    language: {
                        "lengthMenu": "Tampilkan _MENU_ data per halaman",
                        "zeroRecords": "Data Tidak Ada",
                        "info": "Menampilkan Halaman _PAGE_ dari _PAGES_",
                        "infoEmpty": "No records available",
                        "infoFiltered": "(filtered from _MAX_ total records)"
                    },
                }
            );

            
        });
    </script>
  </body>
</html>