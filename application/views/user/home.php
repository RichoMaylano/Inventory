<title>Inventory System</title>

<style>
    .user {
        margin-left: 15px;
        margin-top: 20px;
    }

    .profile {
        position: relative;
        margin-left: 1000px;
    }

    .add-button {
        margin-left: 850px;
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
<nav class="pcoded-navbar menupos-fixed menu">
    <div class="navbar-wrapper">
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <br>
                <li class="nav-item dropdown no-arrow">
                    <div class="user">
                        <span class="mr-2 d-none d-lg-inline text-white ">Halo, <?php echo $user->username ?> !</span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/'); ?>img/undraw_profile_2.svg" style="width:25px;">
                    </div>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <br>
                    <label>Home</label>
                </li>
                <li class="nav-item"><a href="#home" class="nav-link active"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a></li>

                <li class="nav-item pcoded-menu-caption">
                    <label>Menu</label>
                </li>
                <li class="nav-item"><a href="#inventory" class="nav-link active"><span class="pcoded-micon"><i class="feather icon-package"></i></span><span class="pcoded-mtext">Inventory</span></a></li>


                <li class="nav-item pcoded-menu-caption">
                    <label>Logout</label>
                </li>
                <li class="nav-item"><a href="<?php echo base_url(); ?>index.php/auth/logout" class="nav-link active"><span class="pcoded-micon"><i class="feather icon-log-out"></i></span><span class="pcoded-mtext">Logout</span></a></li>


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

                            <!-- Home -->
                            <div class="col-sm-12">
                                <div class="card " id="layouts">
                                    <div class="card-header bg-gradient-danger">
                                        <h5>
                                            <font color="white">Home</font>
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="<?php echo base_url(); ?>assets/img/telkom.png" style="width:200px;">
                                        </div>
                                        <br>
                                        <div class="text-center">
                                            <div class="h6 text-gray-900 mb-4">
                                                <h3>Welcome To Inventory System!</h3>
                                                <h3>Network & IS Operation WITEL Papua</h3>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>





                            <!-- Inventory -->
                            <div class="col-sm-12">
                                <div class="card" id="inventory">
                                    <div class="card-header bg-gradient-danger">
                                        <h5>
                                            <font color="white">Inventory</font>
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                    <?php echo $this->session->flashdata('message7'); ?> 
                                    <?php echo $this->session->flashdata('message8'); ?> 
                                        <hr>
                                        <div class="add-button">
                                            <a href="new_req" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Request New Item</a>
                                        </div>
                                        
                                        <p>Berikut List Inventory Karyawan PT. Telkom Papua</p>
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Nama Barang</th>
                                                        <th>Kuantitas</th>
                                                        <th>Tersedia</th>
                                                        <th>Lokasi</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php
                                                    foreach ($inventory as $row) {
                                                    ?>
                                                        <tr>
                                                            <td><?php
                                                                echo $row->id_barang;
                                                                ?></td>
                                                            <td><?php
                                                                echo $row->nama_barang;
                                                                ?></td>
                                                            <td><?php
                                                                echo $row->kuantitas;
                                                                ?></td>
                                                            <td><?php
                                                                echo $row->tersedia;
                                                                ?></td>
                                                            <td><?php
                                                                echo $row->lokasi;
                                                                ?></td>
                                                            <td><a href="pakai_item_user?id=<?php echo htmlspecialchars($row->id) ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">Pakai</a>
                                                                <a href="req_user?id=<?php echo htmlspecialchars($row->id) ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">Request</a>
                                                            </td>
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