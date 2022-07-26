<title>Add User</title>

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
        margin-left: 150px;
        margin-right: 150px;
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
                        <span class="mr-2 d-none d-lg-inline text-white ">Halo, Admin!</span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/'); ?>img/undraw_profile.svg" style="width:25px;">
                    </div>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <br>
                    <label>Home</label>
                </li>
                <li class="nav-item"><a href="admin_home" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a></li>

                <li class="nav-item pcoded-menu-caption">
                    <label>Menu</label>
                </li>
                <li class="nav-item"><a href="admin_home" class="nav-link "><span class="pcoded-micon"><i class="feather icon-package"></i></span><span class="pcoded-mtext">Inventory</span></a></li>

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
                <li class="nav-item"><a href="<?php echo base_url(); ?>index.php/auth/logout_admin" class="nav-link "><span class="pcoded-micon"><i class="feather icon-log-out"></i></span><span class="pcoded-mtext">Logout</span></a></li>

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
                                                <font color="white">Add User</font>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form class="user" <?php echo form_open('auth/new_user'); ?> <?php echo $this->session->flashdata('message5'); ?> <br>
                                            <b>User ID :</b>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<b>Divisi :</b>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="number" placeholder="Masukkan User ID" class="form-control form-control-user" name="user_id" id="user_id" required autofocus />
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="divisi" id="divisi" required autofocus>
                                                        <option value="" selected="selected">-- Pilih divisi --</option>
                                                        <option value="Transport">Transport</option>
                                                        <option value="CME">CME</option>
                                                        <option value="IS Operator">IS Operator</option>
                                                        <option value="IT Solver">IT Solver</option>
                                                    </select>

                                                </div>
                                            </div>



                                            <b>Nama Lengkap :</b>
                                            <div class="form-group">
                                                <input type="text" placeholder="Masukkan Nama Lengkap" class="form-control form-control-user" name="nama" id="nama" required autofocus />
                                            </div>


                                            <b>Email:</b>
                                            <div class="form-group">
                                                <input type="email" placeholder="Masukkan Email" class="form-control form-control-user" name="email" id="email" required autofocus />
                                            </div>


                                            <b>No Telp :</b>
                                            <div class="form-group">
                                                <input type="number" placeholder="Masukkan No Telp" class="form-control form-control-user" name="phone" id="phone" required autofocus />
                                            </div>


                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="password" placeholder="Password" class="form-control form-control-user" name="password" id="password" required autofocus />
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="password" placeholder="Confirm Password" class="form-control form-control-user" name="password2" id="password2" required autofocus />
                                                </div>
                                            </div>


                                            <hr>
                                            <div class="add-button">
                                                <button type="submit" class="btn btn-success btn-user btn-block">Add User</button>


                                            </div>
                                            <br>
                                        </form>
                                        <?php echo form_close(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>