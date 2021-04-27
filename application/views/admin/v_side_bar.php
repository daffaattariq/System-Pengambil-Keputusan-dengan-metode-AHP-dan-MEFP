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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            <a class="nav-link" href="<?php echo base_url('c_admin') ?>">Dashboard</a> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('c_admin/data_alternatif') ?>"><i class="fa fa-fw fa-book"></i>Data Masyarakat</a>
                            <!-- <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a> -->
                        </li>                            
                        <!-- <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1">Data Masyarakat <span class="badge badge-success">6</span></a>
                            <div id="submenu-1" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('c_admin/data_alternatif') ?>">Dusun Banel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('#') ?>">Dusun Lowokjati</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('#') ?>">Dusun Nampes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('#') ?>">Dusun Pakel</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fab fa-fw fa-readme"></i>Kriteria <span class="badge badge-success">6</span></a>
                            <div id="submenu-1" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('c_admin/data_kriteria') ?>">Data Kriteria</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('c_admin/data_subkriteria') ?>">Sub Kriteria</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-fw fa-check"></i>AHP <span class="badge badge-success">6</span></a>
                            <div id="submenu-2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('c_admin/data_kriteria') ?>">Analisa Kriteria</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('c_admin/data_subkriteria') ?>">Perhitungan AHP</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?php echo base_url('c_admin/data_survey_lapangan') ?>"><i class="fa fa-fw fa-user-circle"></i>Data Survei Longlist</a>
                        </li>  
                        <li class="nav-item">
                            <a class="nav-link " href=""><i class="fa fa-fw fa-eye"></i>Hasil Laporan</a>
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