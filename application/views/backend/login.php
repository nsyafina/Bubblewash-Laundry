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
    .bg-login-admin{
      background-image: linear-gradient(45deg, #12389F, white)
    }
    .btn-regis{
      border-radius:20px; 
      background-color: transparent; 
      border: 1px solid rgba(18, 56, 137, 0.4); 
      box-shadow: inset -3px -3px rgba(18, 56, 137, 0.4);  
      color: #12389F;
      font-size: 14px;
      padding: 3px 20px 5px;
    }
    .btn-regis:hover{
      background-color: #12389F;
      color: white;
      box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4);
    }
  </style>

</head>

<body class="bg-login-admin">

  <div class="container">
    <br><br>
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden shadow-lg my-5 body-login-admin" style="border-radius: 15px; border:1px solid #12389F;">
          <div class="card-body p-0" style=" border-radius: 15px; background-image: linear-gradient(45deg, #12389F, white)">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image-admin"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h2 mb-4" style="font-size: 30px; color: #12389F; margin-bottom: 35px;"><strong>LOGIN ADMIN</strong></h1>
                    <?= $this->session->flashdata('info'); ?>
                  </div>
                  <form method="post" action="<?= base_url('login') ?>" class="user">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username..." value="<?= set_value('username'); ?>" style="font-size: 16px; border: 1px solid rgba(18, 56, 159, 0.6); box-shadow: inset -3px -3px rgba(18, 56, 159, 0.4);">
                      <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password"  style="font-size: 16px; border: 1px solid rgba(18, 56, 159, 0.6); box-shadow: inset -3px -3px rgba(18, 56, 159, 0.4);">
                      <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <button type="submit" style=" background-color: #12389f; color: white; font-size: 19px; box-shadow: inset -3px -3px rgba(0, 0, 0, 0.4); margin-bottom: 15px;" class="btn btn-user btn-block" style="font-size: 18px; font-weight: bold;">Login</button>
                    <div class="text-center">
                      <a class="btn btn-regis" href="<?= base_url('login/registrasi'); ?>">Daftar Akun?</a>
                    </div>
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