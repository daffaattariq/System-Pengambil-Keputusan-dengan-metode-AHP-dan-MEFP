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
    <title>Tambah Data Alternatif</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">
                            <h3 class="section-title">TAMBAH DATA ALTERNATIF</h3>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form action="<?php echo base_url('c_admin/tambah_data_alternatif') ?>" method="post">
                                    <div class="form-group">
                                        <label for="NIK">NIK<span class="text-danger">*</span></label>
                                        <input id="nik_alternatif" type="number" placeholder="NIK Alternatif" class="form-control <?php if($this->session->flashdata('nik_alternatif')) {?> form-control is-invalid <?php }?>" name=nik_alternatif required>                                                
                                        <snap class='text-danger'><?php echo $this->session->flashdata('nik_alternatif'); ?></snap>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText4" class="col-form-label">Nama Kepala Keluarga<span class="text-danger">*</span></label>
                                        <input id="inputText4" type="text" class="form-control" placeholder="Nama Alternatif" name="nama_alternatif" required>
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
                                        <label for="inputEmail">RT<span class="text-danger">*</span></label>
                                        <input id="inputEmail" type="number" placeholder="RT" class="form-control" name ="rt" required>                                                
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">RW<span class="text-danger">*</span></label>
                                        <input id="inputEmail" type="number" placeholder="RW" class="form-control" name="rw" required>                                                
                                    </div>
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