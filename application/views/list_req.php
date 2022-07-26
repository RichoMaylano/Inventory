<title>List Request Item</title>

<style>
    .img {
        margin-left: 50px;
        margin-top: 20px;
    }

    .user {
        margin-right: 300px;
        margin-left: 300px;
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
                                                <font color="white">List Request Item</font>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <a href="admin_home#inventory" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-reply fa-sm text-white-50"></i>&nbsp Back</a>
                                        <hr>
                                        <p>Berikut List Request Item Karyawan PT. Telkom Papua</p>
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>Nama User</th>
                                                        <th>Nama Barang</th>
                                                        <th>Detail Barang</th>
                                                        <th>Jumlah Barang</th>
                                                        <th>Tanggal Request</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    $CI = &get_instance();
                                                    $CI->load->model('auth_model');
                                                    foreach ($request as $row) {
                                                    ?>
                                                        <tr>
                                                            <td><?php
                                                                $user = $CI->auth_model->get_single_row_user($row->id_user);
                                                                if(!isset($user)){
                                                                    $user = $CI->auth_model->get_single_row_detail_admin($row->id_user);
                                                                }
                                                                echo $user->username;
                                                                ?></td>
                                                            <td><?php
                                                                echo $row->nama_barang;
                                                                ?></td>
                                                            <td><?php
                                                                echo $row->detail_barang;
                                                                ?></td>
                                                            <td><?php
                                                                echo $row->kuantitas;
                                                                ?></td>
                                                                <td><?php
                                                                echo $row->tgl;
                                                                ?></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>