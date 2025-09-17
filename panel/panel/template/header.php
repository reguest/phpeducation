<!DOCTYPE html>

<?php include "settings/config.php"; ?>

<html>

<?php
//print_r($_SESSION);
sessionmanager::loginControl();



$settings = $config->db->prepare("SELECT * from settings where id=?");

$settings->execute(array(1));

$settingsAll = $settings->fetch();

?>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin Panel</title>

    <!-- Tell the browser to be responsive to screen width -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- Ionicons -->

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Tempusdominus Bbootstrap 4 -->

    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <!-- iCheck -->

    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <!-- JQVMap -->

    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

    <!-- Theme style -->

    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <!-- overlayScrollbars -->

    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <!-- Daterange picker -->

    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

    <!-- summernote -->

    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">

    <!-- Google Font: Source Sans Pro -->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

</head>



<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">



        <!-- Navbar -->

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <!-- Left navbar links -->

            <ul class="navbar-nav">

                <li class="nav-item">

                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

                </li>

                <li class="nav-item d-none d-sm-inline-block">

            

                    <?php

                                                 

   

        if (!empty($_SESSION['email'])) {

            ?>

         

            <a href="logout.php" class="nav-link">Çıkış Yap</a>

            <?php

        } else {

            //Session kontrolu yapıldı ve boş döndüğü için login sayfasına yönlendirildi

    ?>

    

    <a href="index.php" class="nav-link">Home</a>

    <?php

            

        }

        ?>

                </li>

              

            </ul>



            <!-- SEARCH FORM -->

            <!-- <form class="form-inline ml-3">

                <div class="input-group input-group-sm">

                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">

                    <div class="input-group-append">

                        <button class="btn btn-navbar" type="submit">

                            <i class="fas fa-search"></i>

                        </button>

                    </div>

                </div>

            </form> -->



            <!-- Right navbar links -->

         

        </nav>

        <!-- /.navbar -->



        <!-- Main Sidebar Container -->

        <?php include "template/sidebar.php"; ?>