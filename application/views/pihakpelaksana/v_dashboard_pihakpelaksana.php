<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <!-- Grafik batang -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <title>Dashboard Pihak Pelaksana</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <br>
                <div class="nav-user">
                    <h2 class="text-muted">Hallo, <?php echo $this->session->userdata('username') ?> </h2>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-4 col-lg-1 col-md-6 col-sm-12 col-12">
                        <a class="nav-link" href="<?php echo base_url('c_pihakpelaksana/data_alternatif') ?>">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Total Data Masyarakat</h5>
                                        <h2 class="mb-1"><?php $a=htmlentities($total_data_alternatif, ENT_QUOTES,'utf-8'); echo($a);?></h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                        <i class="fa fa-book fa-fw fa-sm text-info"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
	                </div>
                    <div class="col-xl-4 col-lg-1 col-md-6 col-sm-12 col-12">
                        <a class="nav-link" href="<?php echo base_url('c_pihakpelaksana/data_survey_lapangan_cetak') ?>">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Total Data Survei</h5>
                                        <h2 class="mb-1"><?php $a=htmlentities($total_data_survey_lapangan, ENT_QUOTES,'utf-8'); echo($a);?></h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                                        <i class="fab fa-readme fa-fw fa-sm text-info"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
	                </div>
                    <div class="col-xl-4 col-lg-1 col-md-6 col-sm-12 col-12">
                        <a class="nav-link" href="<?php echo base_url('c_pihakpelaksana/data_kriteria') ?>">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-inline-block">
                                        <h5 class="text-muted">Total Kriteria</h5>
                                        <h2 class="mb-1"><?php $a=htmlentities($total_data_kriteria, ENT_QUOTES,'utf-8'); echo($a);?></h2>
                                    </div>
                                    <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                                        <i class="fa fa-eye fa-fw fa-sm text-secondary"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
	                </div>
                    
                </div>
                <br>
                <br>
                <center><h3>Nama dusun</h3><center>
                <div id="myfirstchart2" style="height: 250px;">  
                    <script>
                        Morris.Bar({
                        element: 'myfirstchart2',
                        data: <?php echo $data_dusun_chart;?>,          
                        xkey: 'nama_dusun',
                        ykeys: ['Jumlah'],
                        labels: ['Jumlah']
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</body> 
</html>