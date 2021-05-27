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
    <!-- <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/dataTables.bootstrap4.css"> -->
    <title>Data Kriteria</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- CONTENTTTTT -->
                <div class="card">
                    <h3 class="card-header">Tabel Perbandingan Berpasangan
                    </h3>
                    <div class="card-body">
                    

                    <!-- DATA AWAL AHP -->
                    <table class="table table-hover" >
                        <thead>
                            <tr>
                                <th scope="col">Kriteria</th>
                                <?php
                                $number = 0;
                                $i = 0;
                                $n = 6;
                                $j=0;
                                $nama_kriteria = [];
                                $kode_kriteria = [];

                                foreach($data_kriteria as $data_kriteria)
                                {
                                    $number ++;
                                ?>
                                
                                <?php $kode_kriteria[$i] = $data_kriteria['kode_kriteria'] ?>
                                <?php $nama_kriteria[$i] = $data_kriteria['nama_kriteria'] ?> 
                                <th><?php echo $data_kriteria['nama_kriteria']?></th>     
                                <?php
                                    $i++;
                                    }
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $n =6;
                                $x = 0;
                                $y=0;
                                $f=0;
                                for ($x=0; $x<=($n-1); $x++){
                                    echo"<tr>";
                                    ?>
                                    <td><?php echo $nama_kriteria[$x]?></td>
                                    <?php
                                    // print_r($nama_kriteria[$f]);die;
                                    for ($y=0; $y <= ($n-1); $y++){
                                        $hasil= $awal[$x][$y];
                                        echo"<td>$hasil</td>";
                                    }
                                }
                                echo"<tr>";
                                echo"<td>Jumlah</td>";
                                for ($i=0; $i <= ($n-1); $i++) { 
                                    $data_jumlah = $jumlah[$i] ;
                                    echo"<td>$data_jumlah</td>";
                                }
                            ?>
                            </tbody>
                        </table>
                        <!-- <script type="text/javascript"> 
                            $(document).ready(function() { 
                                $("#mytable").dataTable(); 
                            }); 
                        </script>  -->
                    </div>
                </div>
                <div class="card">
                    <h3 class="card-header">Tabel Analisa Kriteria
                    </h3>
                    <div class="card-body">
                        <!-- DATA AWAL AHP -->
                        <table class="table table-hover" >
                        <thead>
                            <tr>
                                <th scope="col">Kriteria</th>
                                <?php
                                $number = 0;
                                $i = 0;
                                $n = 6;
                                $j=0;
                                $nama_kriteria = [];
                                $kode_kriteria = [];

                                foreach($data_kriteria1 as $data_kriteria)
                                {
                                    $number ++;
                                ?>
                                
                                <?php $kode_kriteria[$i] = $data_kriteria['kode_kriteria'] ?>
                                <?php $nama_kriteria[$i] = $data_kriteria['nama_kriteria'] ?> 
                                <th><?php echo $data_kriteria['nama_kriteria']?></th>     
                                <?php
                                    $i++;
                                    }
                                    // var_dump($nama_kriteria);die();
                                ?>
                                <th>Jumlah</th> 
                                <th>PV</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $n =6;
                                $x = 0;
                                $y=0;
                                $f=0;
                                $k = 0;
                                for ($x=0; $x <= ($n-1) ; $x++) {
                                  
                                    ?>
                                    <td><?php echo $nama_kriteria[$x]?></td>
                                    <?php
                                    // print_r($nama_kriteria[$f]);die;
                                    
                                        for ($y=0; $y <= ($n-1) ; $y++) {
                                           
                                           $hasil = $matrikb[$x][$y];
                                           echo"<td>$hasil</td>";
                                        }
                                        $jumlah = $jmlmnk[$x];
                                        $jumlah_pv = $pv[$x];
                                        echo"<td>$jumlah</td>";
                                        echo"<td>$jumlah_pv</td>";
                                        echo"<tr>";                                       
                                    
                                    
                                }
                                
                            ?>
                            </tbody>
                        </table>
                    
                    </div>
                </div>
                <div class="card">
                    <h3 class="card-header">Tabel Analisa Prioritas</h3>
                    <div class="card-body">
                        <!-- DATA AWAL AHP -->
                        <table class="table table-hover" >
                        <thead>
                            <tr>
                                <th scope="col">Kriteria</th>
                                <?php
                                $number = 0;
                                $i = 0;
                                $n = 6;
                                $j=0;
                                $nama_kriteria = [];
                                $kode_kriteria = [];

                                foreach($data_kriteria2 as $data_kriteria)
                                {
                                    $number ++;
                                ?>
                                
                                <?php $kode_kriteria[$i] = $data_kriteria['kode_kriteria'] ?>
                                <?php $nama_kriteria[$i] = $data_kriteria['nama_kriteria'] ?> 
                                <th><?php echo $data_kriteria['nama_kriteria']?></th>     
                                <?php
                                    $i++;
                                    }
                                    // var_dump($nama_kriteria);die();
                                ?>
                                <th>Jumlah</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $n =6;
                                $x = 0;
                                $y=0;
                                $f=0;
                                $k = 0;
                                for ($x=0; $x <= ($n-1) ; $x++) {
                                  
                                    ?>
                                    <td><?php echo $nama_kriteria[$x]?></td>
                                    <?php
                                    // print_r($nama_kriteria[$f]);die;
                                    
                                        for ($y=0; $y <= ($n-1) ; $y++) {
                                           
                                           $hasil = $matrikp[$x][$y];
                                           echo"<td>$hasil</td>";
                                        }
                                        $jumlah = $jmlkp[$x];
                                       
                                        echo"<td>$jumlah</td>";
                                        echo"<tr>";                                       
                                    
                                }
                                
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <h3 class="card-header">Tabel Nilai Konsistensi Prioritas</h3>
                    <div class="card-body">
                        <!-- DATA nilai λ  -->
                        <table class="table table-hover" >
                            <thead>
                                <tr>
                                    <th scope="col">Nilai λ Maksimal</th>                               
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- <td>nilai</td> -->
                                    <td><?php echo $nilai ?></td>
                                </tr>
                            </tbody>
                        </table>

                         <!-- data nilai CI -->
                        
                        <table class="table table-hover" >
                            <thead>
                                <tr>
                                    <th scope="col">Nilai Consistency Index</th>   
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- <td>nilai</td> -->
                                    <td><?php echo $ci ?></td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- data nilai CR -->
                        
                        <table class="table table-hover" >
                            <thead>
                                <tr>
                                    <th scope="col">Nilai Consistency Ratio</th>  
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- <td>nilai</td> -->
                                    <td><?php echo $cr ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php
                            if ($cr > 0.1) {
                        ?>        
                        <div class="alert alert-danger" role="alert">
                                Nilai Consistency Ratio melebihi 0,1 !!!                        
                                <p>Mohon input kembali tabel perbandingan berpasangan</p>                           
                        </div>
                        <?php
                            }
                            else{
                        ?>
                        <div class="alert alert-success" role="alert">
                                Nilai Consistency Ratio kurang dari 0,1 !!!                        
                                <p>Data Nilai Konsisten.</p>                           
                        </div>
                        <?php
                            }
                            
                        ?>
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

    <!-- data table -->
    <!-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script> -->
</body>
 
</html>