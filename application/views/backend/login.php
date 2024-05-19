<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BubbleWash | Admin</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url() ?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>assets/admin/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>assets/admin/css/sb-admin-2.css" rel="stylesheet">

  <style>

  </style>

</head>

<body class="bg-login-admin">

  <div class="container">
    <br><br>
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden shadow-lg my-5 body-login-admin">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image-admin"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h2 text-gray-900 mb-4">LOGIN ADMIN</h1>
                    <?= $this->session->flashdata('info'); ?>
                  </div>
                  <form method="post" action="<?= base_url('login') ?>" class="user">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username..." style="font-size: 17px;" value="<?= set_value('username'); ?>">
                      <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" style="font-size: 17px;" value="<?= set_value('password'); ?>">
                      <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block btn-login-admin" style="font-size: 18px; font-weight: bold;">Login</button>
                  </form>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>


</body>

</html>