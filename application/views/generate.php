<!DOCTYPE html>
<html lang="en">

<title>Welcome</title>

<head>
<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
<style type="text/css">
.images{
  margin-left:150px;
}

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

.button-submit{
    margin-right:150px;
    margin-left:150px;
  }

.button-login{
    margin-right:150px;
    margin-left:150px;
  }

.form-group{
    margin-right:50px;
    margin-left:50px;
  }
</style>

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
<link rel="icon" href="<?= base_url('assets/'); ?>img/telkom.png" type="image/x-icon">
</head>

<!-- Preloader -->
  <div class="preloader">
        <div class="loading">
            <img src="<?php echo base_url(); ?>assets/img/telkom.png" style="width:50px;">
            <p>Loading...</p>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".preloader").fadeOut();
        })
    </script>

<body>
<!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper"  class="d-flex flex-column" >
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->

                <nav class="navbar navbar-expand navbar-light bg-danger topbar mb-4 static-top shadow">

                      <ul class="navbar-nav ml-auto">
                <!-- Nav Item - User Information -->
                        <li class="nav-item">
                <a class="nav-link" href="about">
                    <i class="fas fa-fw fa-info"></i>
                    <span>About</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact">
                    <i class="fas fa-fw fa-phone"></i>
                    <span>Contact</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="team">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Team</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="riwayat">
                    <i class="fas fa-fw fa-history"></i>
                    <span>Riwayat</span></a>
            </li>
</ul>
</nav>


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
                    <div class="images">
                    <img src="<?php echo base_url(); ?>assets/img/telkom.png" style="width:200px;"></div>
                  <br>
                    <div class="text-center">
                          <h1 class="h2 text-gray-900 mb-4">Monitoring Inventory System</h1>
                          <!-- <h2 class="h2 text-gray-900 mb-4">Network Division</h2> -->
                    
                      <hr>
                      <h3 class="h5 text-gray-900 mb-4">Choose a Role :</h3>
                      <form class="user">
                      <div class="button-login">
                        <a href="login_admin" class="btn btn-primary btn-user btn-block">ADMIN</a>
                        <a href="login" class="btn btn-info btn-user btn-block">USER</a>
                            </div>
</form>
                     </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

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