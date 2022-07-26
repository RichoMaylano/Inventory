<!DOCTYPE html>
<html lang="en">

<title>About Us</title>

<head>
<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
<style type="text/css">
.back{
  margin-right:850px;
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

.text{
    margin-right:50px;
    margin-left:50px;
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
                <a class="nav-link active" href="about">
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

 
 
<div class="wrapper">
        <div class="box">
<br>
<br>
<br>
            <div class="title">
                <span class="blok"></span>
                <h1>TENTANG KAMI<span></span></h1>
            </div>

            <div class="sub-title">
                <div class="blok"></div>
                <p>TelkomGroup</p>
            </div>

        </div>
    </div>

<img src="<?= base_url('assets/'); ?>img/telkom5.jpg" style="width:1500px;">

<div class="text">
<div class="h6 text-gray-900 mb-4">
<br>
                          <p>PT Telkom Indonesia (Persero) Tbk (Telkom) adalah Badan Usaha Milik Negara (BUMN) yang bergerak di bidang jasa layanan teknologi informasi dan komunikasi (TIK) dan jaringan telekomunikasi di Indonesia. Pemegang saham mayoritas Telkom adalah Pemerintah Republik Indonesia sebesar 52.09%, sedangkan 47.91% sisanya dikuasai oleh publik. Saham Telkom diperdagangkan di Bursa Efek Indonesia (BEI) dengan kode “TLKM” dan New York Stock Exchange (NYSE) dengan kode “TLK”.</p>
                          <p>Dalam upaya bertransformasi menjadi digital telecommunication company, TelkomGroup mengimplementasikan strategi bisnis dan operasional perusahaan yang berorientasi kepada pelanggan (customer-oriented). Transformasi tersebut akan membuat organisasi TelkomGroup menjadi lebih lean (ramping) dan agile (lincah) dalam beradaptasi dengan perubahan industri telekomunikasi yang berlangsung sangat cepat. Organisasi yang baru juga diharapkan dapat meningkatkan efisiensi dan efektivitas dalam menciptakan customer experience yang berkualitas.</p>
                          <p>Kegiatan usaha TelkomGroup bertumbuh dan berubah seiring dengan perkembangan teknologi, informasi dan digitalisasi, namun masih dalam koridor industri telekomunikasi dan informasi. Hal ini terlihat dari lini bisnis yang terus berkembang melengkapi legacy yang sudah ada sebelumnya.</p>
                          <p>Telkom mulai saat ini membagi bisnisnya menjadi 3 Digital Business Domain:</p>
                        <p>&nbsp &nbsp &nbsp 1. <b>Digital Connectivity</b>: Fiber to the x (FTTx), 5G, Software Defined Networking (SDN)/ Network Function Virtualization (NFV)/ Satellite</p>
                        <p>&nbsp &nbsp &nbsp 2. <b>Digital Platform</b>: Data Center, Cloud, Internet of Things (IoT), Big Data/ Artificial Intelligence (AI), Cybersecurity</p>
                        <p>&nbsp &nbsp &nbsp 3. <b>Digital Services</b>: Enterprise, Consumer</p>
              <br>
                <h4><b><u><font color="red">PURPOSE, VISI DAN MISI</font></u></b></h4>
              <p>Untuk menjawab tantangan industri digital, mendukung digitisasi nasional dan untuk menginternalisasi agenda transformasi, maka Telkom telah menajamkan kembali Purpose, Visi, dan Misi nya.</p>
                <br>
                <h5><b>PURPOSE</b></h5>
                  <p>Mewujudkan bangsa yang lebih sejahtera dan berdaya saing serta memberikan nilai tambah yang terbaik bagi para pemangku kepentingan.</p>
                    <br>
                <h5><b>VISI</b></h5>
                  <p>Menjadi digital telco pilihan utama untuk memajukan masyarakat</p>
                  <br>
                <h5><b>MISI</b></h5>
                  <p>1. Mempercepat pembangunan Infrastruktur dan platform digital cerdas yang berkelanjutan, ekonomis, dan dapat diakses oleh seluruh masyarakat.</p>
                  <p>2. Mengembangkan talenta digital unggulan yang membantu mendorong kemampuan digital dan tingkat adopsi digital bangsa.</p>
                  <p>3. Mengorkestrasi ekosistem digital untuk memberikan pengalaman digital pelanggan terbaik</p>
                    <br>
                    <h4><u><b><font color="red">CORE VALUES</font></b></u></h4>
                    <p>1. <b>AMANAH</b> : Memegang teguh kepercayaan yang diberikan </P>
                    <p>2. <b>KOMPETEN</b> : Terus belajar dan mengembangkan kapabilitas </P>
                    <p>3. <b>HARMONIS</b> : Saling peduli dan menghargai perbedaan </P>
                    <p>4. <b>LOYAL</b> : Berdedikasi dan mengutamakan kepentingan Bangsa dan Negara </P>
                    <p>5. <b>ADAPTIF</b> : Terus berinovasi dan antusias dalam menggerakkan ataupun menghadapi perubahan  </P>
                    <p>6. <b>KOLABORATIF</b> : Membangun kerja sama yang sinergis </P>
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