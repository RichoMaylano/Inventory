<!DOCTYPE html>
<html lang="en">

<title>Contact Us</title>

<head>
<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
<style type="text/css">
.back{
  margin-right:850px;
}


.text-center{
  margin-right:500px;
  margin-left:500px;
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

  @import url('https://fonts.googleapis.com/css?family=Lato:300,400|Poppins:300,400,800&display=swap');
* {
  margin: 0;
  padding: 0;
}

.wrapper {
  width: 100%;
  height: 25vh;
  background: #232323;
  display: flex;
  justify-content: center;
  align-items: center;
}
.wrapper .box {
  width: 250px;
  height: 250px;
  position: relative;
  display: flex;
  justify-content: center;
  flex-direction: column;
}
.wrapper .box .title {
  width: 100%;
  position: relative;
  display: flex;
  align-items: center;
  height: 50px;
}
.wrapper .box .title .blok {
  width: 0%;
  height: inherit;
  background: #ffb510;
  position: absolute;
  animation: main-blok 2s cubic-bezier(0.74, 0.06, 0.4, 0.92) forwards;
  display: flex;
}
.wrapper .box .title h1 {
  font-family: 'Poppins';
  color: #fff;
  font-size: 32px;
  animation: main-fade 2s forwards;
  animation-delay: 1.6s;
  opacity: 0;
  display: flex;
  align-items: baseline;
  position: relative;
}
.wrapper .box .title h1 span {
  width: 0px;
  height: 0px;
  border-radius: 50%;
  background: #ffb510;
  animation: dot 0.8s cubic-bezier(0.74, 0.06, 0.4, 0.92) forwards;
  animation-delay: 2s;
  margin-left: 5px;
  margin-top: -10px;
  position: absolute;
  bottom: 13px;
  right: -12px;
}
.wrapper .box .sub-title {
  width: 100%;
  position: relative;
  display: flex;
  align-items: center;
  height: 30px;
  margin-top: -10px;
}
.wrapper .box .sub-title .blok {
  width: 0%;
  height: inherit;
  background: #e91e63;
  position: absolute;
  animation: second-blok 2s cubic-bezier(0.74, 0.06, 0.4, 0.92) forwards;
  animation-delay: 2s;
  display: flex;
}
.wrapper .box .sub-title p {
  animation: second-fade 2s forwards;
  animation-delay: 3.2s;
  opacity: 0;
  font-weight: 400;
  font-family: 'Lato';
  color: #fff;
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 5px;
}
@keyframes main-blok {
  0% {width: 0%; left: 0;}
  50% {width: 100%; left: 0;}
  100% {width: 0; left: 100%;}
}
@keyframes second-blok {
  0% {width: 0%; left: 0;}
  50% {width: 100%; left: 0;}
  100% {width: 0; left: 100%;}
}
@keyframes main-fade {
  0% {opacity: 0;}
  100% {opacity: 1;}
}
@keyframes dot {
  0% {
    width: 0px;
    height: 0px;
    background: #e9d856;
    border: 0px solid #ddd;
    opacity: 0;
  }
  50% {
    width: 10px;
    height: 10px;
    background: #e9d856;
    opacity: 1;
    bottom: 45px;
  }
  65% {
    width: 7px;
    height: 7px;
    bottom: 0px;
    width: 15px;
  }
  80% {
    width: 10px;
    height: 10px;
    bottom: 20px;
  }
  100% {
    width: 7px;
    height: 7px;
    background: #e9d856;
    border: 0px solid #222;
    bottom: 13px;
  }
}
@keyframes second-fade {
  0% {opacity: 0;}
  100% {opacity: 0.5;}
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
                <nav class="navbar navbar-expand navbar-light bg-danger topbar mb-4 fixed-top shadow">


                      <ul class="navbar-nav ml-auto">
                      
                <!-- Nav Item - User Information -->
                <div class="back">
                <li class="nav-item">
                <a class="nav-link" href="generate">
                    <i class="fas fa-chevron-left fa-sm text-white-100"></i>
                    <span>&nbsp Back</span></a>
            </li></div>

                        <li class="nav-item">
                <a class="nav-link" href="about">
                    <i class="fas fa-fw fa-info"></i>
                    <span>About</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="contact">
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

 <div class="wrapper">
        <div class="box">

<br>
<br>
<br>
            <div class="title">
                <span class="blok"></span>
                <h1>HUBUNGI KAMI<span></span></h1>
            </div>

            <div class="sub-title">
                <div class="blok"></div>
                <p>TelkomGroup</p>
            </div>

        </div>
    </div>
<img src="<?= base_url('assets/'); ?>img/telkom4.jpg" style="width:1500px;">

<div class="text-center">
<div class="h6 text-gray-900 mb-4">
<br>
                          <h3><u><b><font color="red">WEBSITE DEVELOPER</font></b></u></h3>
                          <p><img src="<?php echo base_url(); ?>assets/img/febrian.jpeg" style="width:350px;"></p>
                          <p>&nbsp &nbsp &nbsp &nbsp<u>M. Febrian S</u><p>
                            <p>Telp : 081344176787</p>
                            <p>Email : febri.pins2017@gmail.com</p>
                            <p>Lokasi : Telkom Witel Papua, Jl.Kayu Batu, Base G, Jayapura, Papua</p> 
                          </div>
                        </div>

<p style="margin-left:100px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127545.90033243755!2d140.55479224146146!3d-2.568691486793937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x686c57621c18f1c3%3A0x6ac0d740c2d40939!2sJAYAPURA%20PT.TELKOM%20JLN.%20WOOD%20STONE%20BASE-G!5e0!3m2!1sen!2sid!4v1614132681715!5m2!1sen!2sid" width="1100" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
      

      <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>