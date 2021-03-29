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
    <title>Tambah Data Info Pihak Pelaksana</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- CONTENTTTTT -->
                <!-- basic form  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">
                            <h3 class="section-title">DATA DIRI</h3>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <?php foreach($data_info as $data_info)
                                    {
                                ?>
                                <form action="<?php echo base_url('c_pihakpelaksana/tambah_data_info') ?>?username=<?php echo $data_info['username']?>" method="post">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Nama Lengkap</label>
                                        <?php
                                            if($data_info['nama'] == "kosong")
                                            {
                                        ?>
                                                <input id="inputText3" type="text" class="form-control" placeholder="<?php echo $data_info['nama']?>" name="nama" required>
                                        <?php
                                            }
                                        else
                                            {
                                        ?>
                                                <input id="inputText3" type="text" class="form-control" value="<?php echo $data_info['nama']?>" name="nama">
                                        <?php
                                            }
                                        ?>                                                
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Divisi</label>
                                        <?php
                                            if($data_info['divisi'] == "kosong")
                                            {
                                        ?>
                                                <input id="inputText3" type="text" class="form-control" placeholder="<?php echo $data_info['divisi']?>" name="divisi" required>
                                        <?php
                                            }
                                            else
                                            {
                                        ?>
                                                <input id="inputText3" type="text" class="form-control" value="<?php echo $data_info['divisi']?>" name="divisi">
                                        <?php
                                            }
                                        ?>                                               
                                    </div>
                                    <div class="form-group">
                                        <label for="No_Telepon" class="col-form-label">No. telepon</label>
                                        <?php
                                            if($data_info['no_telepon'] == 0)
                                            {
                                        ?>
                                                <input id="no_telepon" type="text" class="form-control" placeholder="<?php echo $data_info['no_telepon']?>" name="no_telepon" required>
                                        <?php
                                            }
                                            else
                                            {
                                        ?>
                                                <input id="no_telepon" type="text" class="form-control <?php if($this->session->flashdata('no_telepon')) {?> form-control is-invalid <?php }?>" value="<?php echo $data_info['no_telepon']?>" name="no_telepon">
                                        <?php
                                            }
                                        ?>
                                        <snap class='text-danger'><?php echo $this->session->flashdata('no_telepon'); ?></snap>                                    
                                    </div>
                                <?php
                                    }
                                ?>
                                    <button class="btn btn-primary" type="submit">SIMPAN</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                        <!-- ============================================================== -->
                        <!-- end basic form  -->
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
</body>
 
</html>