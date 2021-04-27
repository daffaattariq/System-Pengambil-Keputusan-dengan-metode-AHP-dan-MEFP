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
                            <h3 class="section-title">EDIT DATA SURVEI LONGLIST</h3>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <?php foreach($data_alternatif as $data_alternatif){
                                    echo("<h4>".$data_alternatif['nik_alternatif']);
                                    echo(" - ");
                                    echo($data_alternatif['nama_alternatif']."</h4>");
                                }
                                ?>
                                <form action="<?php echo base_url('c_pihakpelaksana/edit_data_lapangan') ?>?id_alternatif=<?php echo $ambil_id_alternatif?>" method="post">
                                <div class="form-group">  
                            <?php
                                // print_r($data_kriteria[26]);
                                foreach($data_kriteria as $nik=>$krit){
                                //   echo "<tr>
                                    
                                //     <br><td>$nik </td>";
                                    
                                    ?>
                                    <!-- <input type="text" class="form-control" value="<?php echo $nik?>" name="id_alternatif>" > -->
                                    <?php

                                    // print_r($krit);
                                    $no=0;
                                  foreach($kriteria as $k){
                                      $nama_kriteria = $k['nama_kriteria'];
                                    ?>
                                    
                                    <input id="inputText3" type="text" class="form-control" value="<?php echo $data_kriteria[$nik][$nama_kriteria]?>" name="id_dsl<?php echo $no+1?>" hidden>
                                    <label class="col-form-label">C<?php echo $no+1?> - <?php echo $nama_kriteria?><span class="text-danger">*</span></label><br>
                                    <select class="form-control" id="exampleFormControlSelect1" name="c<?php echo $no+1?>">
                                            <?php
                                                foreach ($data_lapangan1 as $data_lapangan)
                                                {
                                                    if($data_lapangan['id_kriteria']== $k['id_kriteria']){
                                                        ?>
                                                        <option  value="<?php echo $data_lapangan['id_subkriteria']?>"selected>
                                                        <?php echo $data_lapangan['nama_subkriteria']?>
                                                        
                                                        <?php
                                                    }
                                                }
                                            ?>
                                            </select>
                                    <?php
                                    $no++;
                                    // print($nama_kriteria. "<br>");
                                    // echo "<td align='center'>$krit[$nama_kriteria]</td>";
                                  }
                                }
                            ?>
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