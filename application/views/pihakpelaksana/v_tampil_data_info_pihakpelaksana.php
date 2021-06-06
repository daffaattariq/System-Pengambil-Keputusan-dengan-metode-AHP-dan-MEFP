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
    <title>Tambah Data Info Pihak Pelaksana</title>
</head>

<body>
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">
                            <h3 class="section-title">DATA DIRI</h3>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <?php
                                if ($this->session->flashdata('success')){?>
                                    <div class="alert alert-success" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <?php echo $this->session->flashdata('success')?>
                                    </div>
                                <?php
                                }
                                ?>
                                <?php foreach($data_info as $data_info)
                                    {
                                ?>
                                <form action="<?php echo base_url('c_pihakpelaksana/tambah_data_info') ?>?username=<?php echo $data_info['username']?>" method="post">
                                    <div class="form-group">
                                        <label for="Nama" class="col-form-label">Nama Lengkap</label>
                                        <?php
                                            if($data_info['nama'] == "kosong")
                                            {
                                        ?>
                                                <input id="nama_lengkap" type="text" class="form-control" placeholder="<?php echo $data_info['nama']?>" name="nama" required>
                                        <?php
                                            }
                                        else
                                            {
                                        ?>
                                                <input id="nama_lengkap" type="text" class="form-control" value="<?php echo $data_info['nama']?>" name="nama">
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
                                                <input id="divisi" type="text" class="form-control" placeholder="<?php echo $data_info['divisi']?>" name="divisi" required>
                                        <?php
                                            }
                                            else
                                            {
                                        ?>
                                                <!-- <input id="divisi" type="text" class="form-control" value="<?php echo $data_info['divisi']?>" name="divisi"> -->
                                                <input id="inputText3" type="text" class="form-control" value="TFL" name="divisi" disabled>
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
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- main js -->
    <script src="<?php echo base_url();?>assets/libs/js/main-js.js"></script>
</body>
 
</html>