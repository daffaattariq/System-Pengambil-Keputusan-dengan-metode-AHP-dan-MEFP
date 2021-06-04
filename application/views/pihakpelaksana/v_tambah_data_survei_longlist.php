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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.css">
    

    <title>Tambah Data Alternatif</title>
</head>

<body>
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
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
                                        
                                        <select class="form-control select2bs4 <?php if($this->session->flashdata('id_alternatif')) {?> form-control is-invalid <?php }?>" id="exampleFormControlSelect1" name="id_alternatif">
                                        <?php

                                            foreach ($data_lapangan_nik as $data_lapangan_nik)
                                            {
                                                ?>
                                                <option 
                                                    
                                                    value="<?php echo $data_lapangan_nik['id_alternatif']?>"><?php echo $data_lapangan_nik['nik_alternatif']?> - <?php echo $data_lapangan_nik['nama_alternatif']?> - <?php echo $data_lapangan_nik['nama_dusun']?> - <?php echo $data_lapangan_nik['rt']?>
                                                </option>
                                            
                                        <?php
                                            }
                                        
                                        ?>
                                        </select>
			
                                        <snap class='text-danger'><?php echo $this->session->flashdata('id_alternatif'); ?></snap>
                                    </div>
                                    

                                    <div class="form-group">
                                    <?php
                                        foreach ($data_kriteria as $no => $data_kriteria)
                                        {
                                            ?><label class="col-form-label">C<?php echo $no+1?> - <?php echo $data_kriteria['nama_kriteria']?><span class="text-danger">*</span></label>
                                            
                                            <select class="form-control" id="exampleFormControlSelect1" name="c<?php echo $no+1?>">
                                            <?php
                                                foreach ($data_lapangan1 as $data_lapangan)
                                                {
                                                    if($data_lapangan['id_kriteria']== $data_kriteria['id_kriteria']){
                                                        ?>
                                                        <option value="<?php echo $data_lapangan['id_subkriteria']?>"><?php echo $data_lapangan['nama_subkriteria']?></option>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                            </select>
                                            <?php
                                        }
                                    ?>
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
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    
    <!-- main js -->
    <script src="<?php echo base_url();?>assets/libs/js/main-js.js"></script>
    
    <script src="<?php echo base_url();?>assets/css/select2.full.min.js"></script>

    <script>
        $(function (){
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>
</body>
 
</html>