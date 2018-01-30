
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  </head>
  <body>
      <div class="container-fluid">
          
          <!-- Modal --> 
          <!-- <div class="modal show" id="modelId" tabindex="-1"> -->
              <div class="modal-dialog show" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <div class="center text-center">
                                <h4 class="text-center">Login</h4>
                          </div>
                      </div>
                    <form action="./CRUD/user/login.php" method="post">
                      <div class="modal-body">
                          <div class="form-group">
                            <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="Username" required>
                          </div>

                          <div class="form-group">
                              <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Password" required>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
                          
                      </div>
                    </form>
                  </div>
              </div>
          <!-- </div> -->
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

  </body>
</html>