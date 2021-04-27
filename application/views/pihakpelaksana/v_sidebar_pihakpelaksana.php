<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <!-- Bootstrap CSS -->
    
</head>
<body>
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- <a class="d-xl-none d-lg-none" href="#">Dashboard</a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            <a class="nav-link" href="<?php echo base_url('c_pihakpelaksana') ?>">Dashboard</a> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('c_pihakpelaksana/data_survey_lapangan') ?>"><i class="fab fa-fw fa-readme"></i>Data Survei Longlist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="fas fa-fw fa-check"></i>Perhitungan MFEP</a>
                        </li>   
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="fa fa-fw fa-eye"></i>Hasil Laporan</a>
                        </li>                          
                    </ul>
                </div>                            
            </nav>
        </div>
    </div>

    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="<?php echo base_url();?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="<?php echo base_url();?>assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="<?php echo base_url();?>assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="<?php echo base_url();?>assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="<?php echo base_url();?>assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="<?php echo base_url();?>assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="<?php echo base_url();?>assets/libs/js/dashboard-ecommerce.js"></script>
</body>