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
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Edit Data Kriteria</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- CONTENTTTTT -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">
                            <h3 class="section-title">EDIT DATA KRITERIA</h3>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                
                                <?php foreach($data_kriteria as $data_kriteria)
                                    {
                                ?>
                                <form action="<?php echo base_url('c_admin/edit_data_kriteria') ?>?id_kriteria=<?php echo $data_kriteria['id_kriteria']?>" method="post">
                                    <div class="form-group">
                                        <label for="Kode" class="col-form-label">Kode Kriteria</label>
                                        <input type="text" value="<?php echo $data_kriteria['id_kriteria']?>" name="id_kriteria" hidden></input>
                                        <input id="kode_kriteria" type="text" class="form-control <?php if($this->session->flashdata('kode_kriteria')) {?> form-control is-invalid <?php }?>" value="<?php echo $data_kriteria['kode_kriteria']?>" name="kode_kriteria" required>
                                        <snap class='text-danger'><?php echo $this->session->flashdata('kode_kriteria'); ?></snap>
                                    </div>                                           
                                    <div class="form-group">
                                        <label for="inputText4" class="col-form-label">Nama Kriteria</label>
                                        <input id="inputText4" type="text" class="form-control" value="<?php echo $data_kriteria['nama_kriteria']?>" name="nama_kriteria" required>
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
    
    <!-- main js -->
    <script src="<?php echo base_url();?>assets/libs/js/main-js.js"></script>
    
</body>
 
</html>