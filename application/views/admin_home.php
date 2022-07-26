<title>Inventory System</title>

<style>
    .user {
        margin-left: 20px;
        margin-top: 20px;
    }

    .images {
        margin-bottom: 10px;
    }

    .profile {
        position: relative;
        margin-left: 1000px;
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
                    <div class="user">
                        <span class="mr-2 d-none d-lg-inline text-white ">Halo, <?php echo $id->username ?>!</span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/'); ?>img/undraw_profile.svg" style="width:25px;">
                    </div>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <br>
                    <label>Home</label>
                </li>
                <li class="nav-item"><a href="#admin_home" class="nav-link active"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a></li>

                <li class="nav-item pcoded-menu-caption">
                    <label>Menu</label>
                </li>
                <li class="nav-item"><a href="#inventory" class="nav-link active"><span class="pcoded-micon"><i class="feather icon-package"></i></span><span class="pcoded-mtext">Inventory</span></a></li>

                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">List</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="#user">User List</a></li>
                        <li><a href="#admin">Admin List</a></li>
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

    </ul>
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
                                                <h3>Welcome To Monitoring Inventory System !</h3>
                                                <!-- <h3>Network & IS Operation WITEL Papua</h3> -->

                                            </div>

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
                                    <?php echo $this->session->flashdata('message'); ?>
                                    <?php echo $this->session->flashdata('message3'); ?>
                                    <?php echo $this->session->flashdata('message4'); ?>

                                    <hr>
                                    
                                    <div class="form-group row">
                                                <div class="col-sm-0 mb-3 mb-sm-0">
                                               
                                        &nbsp &nbsp<a href="add_item" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Item</a>
                                    </div>
                                                <div class="col-sm-2 mb-3">
                                              <a href="list_req" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-list fa-sm text-white-50"></i>&nbsp List Request Item</a>
                                     </div>
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
                                                        <td>
                                                            <a href="pakai_item?id=<?php echo htmlspecialchars($row->id) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Pakai</a>
                                                            <a href="edit_item?id=<?php echo htmlspecialchars($row->id) ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">Edit</a>
                                                            <a href="log_item?id=<?php echo htmlspecialchars($row->id) ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">Log Item</a>
                                                            <a href="conf_delete_item?id=<?php echo htmlspecialchars($row->id) ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Remove Item</a>

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

                        <!-- User List -->
                        <div class="col-sm-12">
                            <div class="card " id="user">
                                <div class="card-header bg-gradient-danger">
                                    <h5>
                                        <font color="white">User List</font>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <?php echo $this->session->flashdata('message2'); ?>
                                    <?php echo $this->session->flashdata('message5'); ?>
                                    <?php echo $this->session->flashdata('message6'); ?>
                                    <hr>
                                    <div class="add-button">
                                        <a href="new_user" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add User</a>
                                    </div>
                                    <br>
                                    <p>Berikut List User Karyawan PT. Telkom Papua</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama</th>
                                                    <th>Divisi</th>
                                                    <th>Email</th>
                                                    <th>Nomor Telp</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                foreach ($user as $row) {
                                                ?>
                                                    <tr>
                                                        <td><?php
                                                            echo $row->id;
                                                            ?></td>
                                                        <td><?php
                                                            echo $row->username;
                                                            ?></td>
                                                        <td><?php
                                                            echo $row->divisi;
                                                            ?></td>
                                                        <td><?php
                                                            echo $row->email;
                                                            ?></td>
                                                        <td><?php
                                                            echo $row->phone;
                                                            ?></td>
                                                        <td>
                                                            <a href="conf_set_admin?id=<?php echo htmlspecialchars($row->id) ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">Set as Admin</a>
                                                            <a href="conf_delete?id=<?php echo htmlspecialchars($row->id) ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Remove User</a>
                                                        </td>
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


                        <!-- Admin List -->
                        <div class="col-sm-12" id="admin">
                            <div class="card">
                                <div class="card-header bg-gradient-danger">
                                    <h5>
                                        <font color="white">Admin List</font>
                                    </h5>
                                </div>
                                <div class="card-body">
                                <?php echo $this->session->flashdata('message6'); ?>
                                    <p>Berikut List Admin PT. Telkom Papua</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Nama</th>
                                                    <th>Divisi</th>
                                                    <th>Email</th>
                                                    <th>Nomor Telp</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <?php
                                                    foreach ($admin as $row) {
                                                    ?>
                                                <tr>
                                                    <td><?php
                                                        echo $row->id;
                                                        ?></td>
                                                    <td><?php
                                                        echo $row->username;
                                                        ?></td>
                                                    <td><?php
                                                        echo $row->divisi;
                                                        ?></td>
                                                    <td><?php
                                                        echo $row->email;
                                                        ?></td>
                                                    <td><?php
                                                        echo $row->phone;
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