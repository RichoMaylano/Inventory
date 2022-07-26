<title>Add Item</title>

<style>
    .img {
        margin-left: 20px;
        margin-top: 20px;
    }

    .user {
        margin-right: 300px;
        margin-left: 300px;
    }

    .add-button {
        margin-right: 100px;
        margin-left: 100px;
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
if ($this->session->userdata('type') != 'admin') {
    echo '<script>alert("Mohon Login Terlebih Dahulu.");
        window.location.href="' . base_url('auth/login_admin') . '";</script>';
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
                <li class="nav-item dropdown no-arrow">
                    <div class="img">
                        <span class="mr-2 d-none d-lg-inline text-white ">Halo, <?php echo $id->username ?>!</span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/'); ?>img/undraw_profile.svg" style="width:25px;">
                    </div>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <br>
                    <label>Home</label>
                </li>
                <li class="nav-item"><a href="admin_home" class="nav-link active"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a></li>

                <li class="nav-item pcoded-menu-caption">
                    <label>Menu</label>
                </li>
                <li class="nav-item"><a href="admin_home" class="nav-link active"><span class="pcoded-micon"><i class="feather icon-package"></i></span><span class="pcoded-mtext">Inventory</span></a></li>

                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">List</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="admin_home">User List</a></li>
                        <li><a href="admin_home">Admin List</a></li>
                    </ul>
                </li>


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
        <a href="admin_home">
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


<div class="pcoded-main-container" id="admin_home">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="row">

                            <!-- admin_home -->
                            <div class="col-sm-12">
                                <div class="card " id="layouts">
                                    <div class="card-header bg-gradient-danger">
                                        <div class="text-center">
                                            <h5>
                                                <font color="white">Add Item</font>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form class="user" <?php echo form_open('auth/add_item'); ?> <?php echo $this->session->flashdata('message3'); ?> <br>
                                            <b>ID Barang :</b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<b>Kuantitas Barang :</b>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="text" placeholder="ID Barang" class="form-control form-control-user" name="id_barang" id="id_barang" required autofocus />
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="Kuantitas" class="form-control form-control-user" name="kuantitas" id="kuantitas" required autofocus />
                                                </div>
                                            </div>

                                            <b>Nama Barang :</b>
                                            <div class="form-group">
                                                <input type="text" placeholder="Masukkan Nama Barang" class="form-control form-control-user" name="barang" id="barang" required autofocus />
                                            </div>


                                            <b>Lokasi Penyimpanan :</b>
                                            <div class="form-group">
                                                <input type="text" placeholder="Masukkan Lokasi Penyimpanan" class="form-control form-control-user" name="lokasi" id="lokasi" required autofocus />
                                            </div>

                                            <hr>
                                            <div class="add-button">
                                                <div class="form-group row">
                                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                                        <button type="submit" class="btn btn-success btn-user btn-block">Add Item</button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <a href="admin_home#inventory" class="btn btn-dark btn-user btn-block">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <br>
                                    </form>
                                    <?php echo form_close(); ?>


                                </div>
                            </div>
                        </div>
                    </div>