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
    <title>Tambah Data Alternatif</title>
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
                            <h3 class="section-title">TAMBAH DATA SURVEI LONGLIST</h3>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form action="<?php echo base_url('c_pihakpelaksana/tambah_data_lapangan') ?>" method="post">
                                    <div class="form-group">
                                        <label for="NIK">NIK<span class="text-danger">*</span></label>
                                        <select class="form-control <?php if($this->session->flashdata('id_alternatif')) {?> form-control is-invalid <?php }?>" id="exampleFormControlSelect1" name="id_alternatif">
                                        <?php

                                            foreach ($data_lapangan_nik as $data_lapangan_nik)
                                            {
                                                ?>
                                                <option 
                                                    
                                                    value="<?php echo $data_lapangan_nik['nik_alternatif']?>"><?php echo $data_lapangan_nik['nik_alternatif']?> - <?php echo $data_lapangan_nik['nama_alternatif']?>
                                                </option>
                                            
                                        <?php
                                            }
                                        
                                        ?>
                                        </select>
                                        <snap class='text-danger'><?php echo $this->session->flashdata('id_alternatif'); ?></snap>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText4" class="col-form-label">C1 - Ibu Hamil<span class="text-danger">*</span></label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="c1">
                                        <?php

                                            foreach ($data_lapangan_c1 as $data_lapangan_c1)
                                            {
                                                if($data_lapangan_c1['id_kriteria']==1){
                                                    ?>
                                                    <option value="<?php echo $data_lapangan_c1['nilai_subkriteria']?>"><?php echo $data_lapangan_c1['nama_subkriteria']?></option>
                                                    <?php
                                                }
                                        ?>
                                            
                                        <?php
                                            }
                                        
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">C2-Batita <= 3 Tahun<span class="text-danger">*</span></label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="c2">
                                        <?php

                                            foreach ($data_lapangan_c2 as $data_lapangan_c2)
                                            {
                                                if($data_lapangan_c2['id_kriteria']==2){
                                                    ?>
                                                    <option value="<?php echo $data_lapangan_c2['nilai_subkriteria']?>"><?php echo $data_lapangan_c2['nama_subkriteria']?></option>
                                                    <?php
                                                }
                                        ?>
                                            
                                        <?php
                                            }
                                        
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">C3 - Stunting<span class="text-danger">*</span></label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="c3">
                                        <?php

                                            foreach ($data_lapangan_c3 as $data_lapangan_c3)
                                            {
                                                if($data_lapangan_c3['id_kriteria']==3){
                                                    ?>
                                                    <option value="<?php echo $data_lapangan_c3['nilai_subkriteria']?>"><?php echo $data_lapangan_c3['nama_subkriteria']?></option>
                                                    <?php
                                                }
                                        ?>
                                            
                                        <?php
                                            }
                                        
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">C4 - Disabilitas<span class="text-danger">*</span></label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="c4">
                                        <?php

                                            foreach ($data_lapangan_c4 as $data_lapangan_c4)
                                            {
                                                if($data_lapangan_c4['id_kriteria']==4){
                                                    ?>
                                                    <option value="<?php echo $data_lapangan_c4['nilai_subkriteria']?>"><?php echo $data_lapangan_c4['nama_subkriteria']?></option>
                                                    <?php
                                                }
                                        ?>
                                            
                                        <?php
                                            }
                                        
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">C5 - Kelayakan Sanitasi<span class="text-danger">*</span></label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="c5">
                                        <?php 

                                            foreach ($data_lapangan_c5 as $data_lapangan_c5)
                                            {
                                                if($data_lapangan_c5['id_kriteria']==5){
                                                    ?>
                                                    <option value="<?php echo $data_lapangan_c5['nilai_subkriteria']?>"><?php echo $data_lapangan_c5['nama_subkriteria']?></option>
                                                    <?php
                                                }
                                        ?>
                                            
                                        <?php
                                            }
                                        
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">C6 - Kondisi Fisik Rumah<span class="text-danger">*</span></label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="c6">
                                        <?php

                                            foreach ($data_lapangan_c6 as $data_lapangan_c6)
                                            {
                                                if($data_lapangan_c6['id_kriteria']==11){
                                                    ?>
                                                    <option value="<?php echo $data_lapangan_c6['nilai_subkriteria']?>"><?php echo $data_lapangan_c6['nama_subkriteria']?></option>
                                                    <?php
                                                }
                                        ?>
                                            
                                        <?php
                                            }
                                        
                                        ?>
                                        </select>
                                    </div>
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