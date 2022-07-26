<title>Add Item</title>

<style>
    .img {
        margin-left: 50px;
        margin-top: 20px;
    }

    .user {
        margin-right: 300px;
        margin-left: 300px;
    }

    .add-button {
        margin-right: 120px;
        margin-left: 120px;
    }

    .profile {
        position: relative;
        margin-left: 1000px;
    }

    .images {
        margin-bottom: 10px;
    }
</style>

<?php
if ($this->session->userdata('type') != 'user') {
    echo '<script>alert("Mohon Login Terlebih Dahulu.");
        window.location.href="' . base_url('auth/login') . '";</script>';
}
?>

<!-- Preloader -->
<div class="preloader">
    <div class="loading">
        <img src="<?php echo base_url(); ?>assets/img/telkom.png" style="width:50px;">
        <p>Loading...</p>
    </div>
</div>

<!-- Navbar -->
<nav class="pcoded-navbar menupos-fixed menu-dark">
    <div class="navbar-wrapper">
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <br>
                <!-- <li class="nav-item dropdown no-arrow">
                    <div class="img">
                        <span class="mr-2 d-none d-lg-inline text-white ">Halo, Admin!</span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/'); ?>img/undraw_profile.svg" style="width:25px;">
                    </div>
                </li> -->
                <li class="nav-item pcoded-menu-caption">
                    <br>
                    <label>Home</label>
                </li>
                <li class="nav-item"><a href="home" class="nav-link active"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a></li>

                <li class="nav-item pcoded-menu-caption">
                    <label>Menu</label>
                </li>
                <li class="nav-item"><a href="home" class="nav-link active"><span class="pcoded-micon"><i class="feather icon-package"></i></span><span class="pcoded-mtext">Inventory</span></a></li>

    
                <li class="nav-item pcoded-menu-caption">
                    <label>Logout</label>
                </li>
                <li class="nav-item"><a href="<?php echo base_url(); ?>index.php/auth/logout_admin" class="nav-link active"><span class="pcoded-micon"><i class="feather icon-log-out"></i></span><span class="pcoded-mtext">Logout</span></a></li>

            </ul>
        </div>
    </div>
</nav>

<!-- Logo Header -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed brand-light header-light">
    <div class="m-header">
        <a href="home">
            <div class="images">
                <img src="<?php echo base_url(); ?>assets/img/telkom2.png" style="width:200px;">
                <div class="sidebar-brand-text mx-2">
                </div>
        </a>
    </div>
    </div>
    <a class="mobile-menu" id="mobile-header" href="#!">
        <i class="feather icon-more-horizontal"></i>
    </a>


    </div>
</header>


<div class="pcoded-main-container" id="home">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="row">

                            <!-- New_request -->
                            <div class="col-sm-12">
                                <div class="card " id="layouts">
                                    <div class="card-header bg-gradient-danger">
                                        <div class="text-center">
                                            <h5>
                                                <font color="white">Request Item</font>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form class="user" <?php echo form_open('auth/new_req_process'); ?> 

                                            <b>Nama Barang :</b>
                                            <div class="form-group">
                                                <input type="text" placeholder="Masukkan Nama Barang" class="form-control form-control-user" name="barang" id="barang" required autofocus />
                                            </div>


                                            <b>Detail Barang :</b>
                                            <div class="form-group">
                                                <input type="text" placeholder="Masukkan Detail Barang (Ex : PC High End)" class="form-control form-control-user" name="detail" id="detail" required autofocus />
                                            </div>

                                            <b>Kuantitas :</b>
                                            <div class="form-group">
                                                <input type="text" placeholder="Masukkan Kuantitas Barang" class="form-control form-control-user" name="jumlah" id="jumlah" required autofocus />
                                            </div>

                                            <hr>
                                            <div class="add-button">
                                                <button type="submit" class="btn btn-success btn-user btn-block">Request Item</button>
                                            </div>

                                    </div>
                                    <br>
                                    </form>
                                    <?php echo form_close(); ?>


                                </div>
                            </div>
                        </div>
                    </div>