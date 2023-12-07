<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN | RUANG BELAJAR</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url("assets/theme") ?>/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url("assets/theme") ?>/vendor/font-awesome/css/all.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url("assets/theme") ?>/css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url("assets/theme") ?>/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url("assets/theme") ?>/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url("assets/theme") ?>/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6" style="background-image: url(<?php echo base_url("assets/uploads/study2.png") ?>); background-position: center; background-position: center;">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1><i class="fa fa-graduation-cap"></i> ADMIN PANEL</h1>
                  </div>
                  <p>Ruang Belajar</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="post" action="<?php echo base_url("auth/login_post") ?>" class="form-validate" novalidate="novalidate">
                    <div class="form-group">
                      <input autocomplete="off" id="login-username" type="email" name="email" required="" data-msg="Please enter your email" class="input-material">
                      <label for="login-username" class="label-material">Email</label>
                    </div>
                    <div class="form-group">
                      <input autocomplete="off" id="login-password" type="password" name="password" required="" data-msg="Please enter your password" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php if ($this->session->flashdata('fail') == "y"): ?>
      <script type="text/javascript">
        alert("login gagal!");
      </script>
    <?php endif ?>
    <!-- JavaScript files-->
    <script src="<?php echo base_url("assets/theme") ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url("assets/theme") ?>/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url("assets/theme") ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url("assets/theme") ?>/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url("assets/theme") ?>/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url("assets/theme") ?>/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url("assets/theme") ?>/js/front.js"></script>
  </body>
</html>