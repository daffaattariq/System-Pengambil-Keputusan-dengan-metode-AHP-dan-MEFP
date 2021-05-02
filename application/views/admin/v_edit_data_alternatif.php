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
    <title>Edit Data Alternatif</title>
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
                            <h3 class="section-title">EDIT DATA LONGLIST</h3>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <?php foreach($data_alternatif as $data_alternatif)
                                    { 
                                ?>
                                <form action="<?php echo base_url('c_admin/edit_data_alternatif') ?>?id_alternatif=<?php echo $data_alternatif['id_alternatif']?>" method="post">
                                    <!-- <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Kode Longlist</label>
                                        <input id="inputText3" type="text" class="form-control" value="<?php echo $data_alternatif['kode_longlist']?>" name="kode_longlist">
                                    </div> -->
                                    <div class="form-group">
                                        <label for="NIK">NIK</label>
                                        <input type="text" value="<?php echo $data_alternatif['id_alternatif']?>" name="id_alternatif" hidden></input>
                                        <input id="nik_alternatif" type="number" value="<?php echo $data_alternatif['nik_alternatif']?>" class="form-control <?php if($this->session->flashdata('nik_alternatif')) {?> form-control is-invalid <?php }?>" name=nik_alternatif required>                                                
                                        <snap class='text-danger'><?php echo $this->session->flashdata('nik_alternatif'); ?></snap>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText4" class="col-form-label">Nama Kepala Keluarga</label>
                                        <input id="inputText4" type="text" class="form-control" value="<?php echo $data_alternatif['nama_alternatif']?>" name="nama_alternatif" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword">Nama Dusun<span class="text-danger">*</span></label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="nama_dusun" required>     
                                            <option value="">-- Level User --</option>                                               
                                            <option value="Banel">Benel</option>
                                            <option value="Lowokjati">Lowokjati</option>
                                            <option value="Nampes">Nampes</option>
                                            <option value="Pakel">Pakel</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">RT</label>
                                        <input id="inputEmail" type="number" value="<?php echo $data_alternatif['rt']?>" class="form-control" name ="rt" required>                                                
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">RW</label>
                                        <input id="inputEmail" type="number" value="<?php echo $data_alternatif['rw']?>" class="form-control" name="rw" required>                                                
                                    </div>
                                <?php
                                    }
                                ?>
                                    <button class="btn btn-primary btn-sm float-left mr-6" type="submit"><i class="fas fa-plus" ></i> Tambah Data</button>
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