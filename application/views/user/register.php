
<!DOCTYPE html>
<html lang="en">

<title>Register</title>

<head>
<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
<style>
    .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }

        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }

.user{
    margin-right:50px;
    margin-left:50px;
}

.button-register{
    margin-right:75px;
    margin-left:75px;
}
</style>

<script>
        $(document).ready(function() {
            $(".preloader").fadeOut();
        })
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
<!-- favicon -->
    <link rel="icon" href="<?= base_url('assets/'); ?>img/telkom.png" type="image/x-icon">
</head>

<!-- Preloader -->
  <div class="preloader">
        <div class="loading">
            <img src="<?php echo base_url(); ?>assets/img/telkom.png" style="width:50px;">
            <p>Loading...</p>
        </div>
    </div>

<body class="bg-gradient-warning">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create an Account</h1>
                                    </div>
                                    <form class="user"<?php echo form_open('auth/register'); ?>
                                    <?php echo validation_errors(); ?>
                                       <div class="form-group">
                                            <input type="number" class="form-control form-control-user" name="id_user" placeholder="ID User" required autofocus>
                                        </div>

                                       <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username" placeholder="Username" required autofocus>
                                        </div>

                                          <div class="form-group">
                                            <select  class="form-control" name="divisi" id="divisi"  required autofocus >
                                            <option value="" selected = "selected">-- Pilih divisi --</option>
                                            <option value="Transport">Transport</option>
                                            <option value="CME">CME</option>
                                            <option value="IS Operator">IS Operator</option>
                                            <option value="IT Solver">IT Solver</option>
                                            </select></div>

                                    <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="email" placeholder="Email" required autofocus>
                                        </div>

                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-user" name="phone" placeholder="Phone Number" required autofocus>
                                        </div>

                                            <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required autofocus>
                                            </div>
                                                <div class="col-sm-6">
                                              <input type="password" class="form-control form-control-user" name="password2" placeholder="Confirm Password" required autofocus>
                                                </div>
                                                </div>

                                            <div class="button-register"> 
                                        <button type="submit" class="btn btn-warning btn-user btn-block">Register Now</button>
                                            </div>
                                        <hr>
                                        
                                        <div class="text-center">
                                            <a class="small" href="<?= base_url('auth/login'); ?>">Already have an Account? Login!</a>
                                        </div>

                                       
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>