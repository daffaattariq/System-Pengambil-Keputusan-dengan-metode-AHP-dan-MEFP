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
    <title>Tambah Data Login</title>
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
                            <h3 class="section-title">TAMBAH DATA ANGGOTA</h3>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form action="<?php echo base_url('c_admin/tambah_data_login') ?>" method="post">
                                    <div class="form-group">
                                        <label for="Username">Username<span class="text-danger">*</span></label>
                                        <input  type="text" placeholder="Username" class="form-control <?php if($this->session->flashdata('error_username')) {?> form-control is-invalid <?php }?>" name ="username" required> 
                                        <snap class='text-danger'><?php echo $this->session->flashdata('error_username'); ?></snap>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail">Password<span class="text-danger">*</span></label>
                                        <input id="inputEmail" type="password" placeholder="Password" class="form-control" name="password" required>                                                
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-xs-3" >Level<span class="text-danger">*</span></label>
                                        <div class="col-xs-8">
                                            <select class='form-control' id='exampleFormControlSelect2' name='level' required>
                                                <!-- <option value="">-- Level User --</option>
                                                <option value="Admin">Admin</option> -->
                                                <option value="Pihak Pelaksana">Pihak Pelaksana</option>
                                            </select>
                                        </div>
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