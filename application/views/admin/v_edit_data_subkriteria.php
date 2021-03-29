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
    <title>Edit Data Sub Kriteria</title>
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
                            <h3 class="section-title">EDIT DATA SUB KRITERIA</h3>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <?php foreach($data_subkriteria as $data_subkriteria)
                                    {
                                ?>
                                <form action="<?php echo base_url('c_admin/edit_data_subkriteria') ?>?id_subkriteria=<?php echo $data_subkriteria['id_subkriteria']?>" method="post">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Pilih Kriteria<span class="text-danger">*</span></label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="list_id_kriteria" >
                                            <option selected="selected" value="<?php echo $data_subkriteria['id_kriteria'] ?>"><?php echo $data_subkriteria['kode_kriteria']?> 
                                                - <?php echo $data_subkriteria['nama_kriteria'] ?>
                                            </option>                                
                                            <?php 
                                            foreach($data_kriteria as $data_kriteria)
                                            {
                                                if($data_kriteria['id_kriteria'] != $data_subkriteria['id_kriteria']) 
                                                {
                                            ?>
                                                <option value="<?php echo $data_kriteria['id_kriteria'] ?>"><?php echo $data_kriteria['kode_kriteria'] ?> - <?php echo $data_kriteria['nama_kriteria'] ?></option>
                                                <?php
                                                    }
                                            }
                                                ?>
                                        </select>
                                    </div>           
                                    <div class="form-group">
                                        <label for="Kode_Sub_kriteria" class="col-form-label">Kode Sub kriteria</label>
                                        <input type="text" value="<?php echo $data_subkriteria['id_subkriteria']?>" name="id_subkriteria" hidden></input>
                                        <input id="kode_subkriteria" type="text" class="form-control <?php if($this->session->flashdata('kode_subkriteria')) {?> form-control is-invalid <?php }?>" value="<?php echo $data_subkriteria['kode_subkriteria']?>" name="kode_subkriteria" required>
                                        <snap class='text-danger'><?php echo $this->session->flashdata('kode_subkriteria'); ?></snap>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">Nama Subkriteria</label>
                                        <input id="inputEmail" type="text" value="<?php echo $data_subkriteria['nama_subkriteria']?>" class="form-control" name=nama_subkriteria required>
                                    </div>
                                        <div class="form-group">
                                        <label for="inputText4" class="col-form-label">Nilai Subkriteria</label>
                                        <input id="inputText4" type="number" class="form-control" value="<?php echo $data_subkriteria['nilai_subkriteria']?>" name="nilai_subkriteria" required>
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