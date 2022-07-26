<!DOCTYPE html>
<html lang="en">

<head>
<!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- meta -->
    <meta name="description" content="Ablepro v8.0 Bootstrap Admin Template Documentation helper file." />
    <meta name="author" content="Phoenixcoded" />
    <!-- favicon -->
    <link rel="icon" href="<?= base_url('assets/'); ?>img/telkom.png" type="image/x-icon">
    <!-- required CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/css/plugins/prism-coy.css">
    <!-- custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>assets/css/style.css">


 <!-- Custom fonts for this template -->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Internal CSS -->

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

        .pcoded-navbar .pcoded-inner-navbar>li.active>a,
        .pcoded-navbar .pcoded-inner-navbar>li>a.active:hover,
        .pcoded-navbar .pcoded-inner-navbar>li>a.active {
            background: #4680ff;
            color: #fff;
            box-shadow: 0 10px 5px -8px rgba(0, 0, 0, 0.4);
            position: relative;
        }

        .pcoded-navbar .pcoded-inner-navbar>li.active>a,
        .pcoded-navbar .pcoded-inner-navbar>li>a.active>.pcoded-micon {
            color: #fff;
        }

        .pcoded-content {
            margin-top: 0;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background: #4680ff;
            box-shadow: none;
        }

        pre[class*=language-]>code {
            border-left: 5px solid #4680ff;
        }

        .nav-pills {
            /* padding: 15px 25px; */
        }

        .nav-pills>li i {
            display: inline-block;
            font-size: 15px;
            padding: 0px 0;
        }

        #gulp pre[class*=language-].line-numbers.line-numbers code {
            padding-left: 1.5em;
        }
    </style>

    <script>
        $(document).ready(function() {
            $(".preloader").fadeOut();
        })
    </script>

    
</head>