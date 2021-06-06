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
    <title>Data Perbandingan Berpasangan AHP</title>
</head>

<body>
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- CONTENTTTTT -->
                <div class="card">
                    <h3 class="card-header">ANALISA PERBANDINGAN BERPASANGAN</h3>
                    <div class="card-body">
                        
                        <?php
                            $number = 0;
                            $i = 0;
                            $nama_kriteria = [];
                            $kode_kriteria = [];
                            foreach($data_kriteria as $data_kriteria){
                                $number ++;
                        ?>
                            <?php $kode_kriteria[$i] = $data_kriteria['kode_kriteria'] ?>
                            <?php $nama_kriteria[$i] = $data_kriteria['nama_kriteria'] ?>  
                        <?php
                            $i++;
                            }
                        ?>
                            
                        <form action="<?php echo base_url('c_admin/tambah_perbandingan') ?>" method ="post">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <!-- <th scope="col">Kode 1</th>                                     -->
                                        <th scope="col">Nama Kriteria 1</th>                                    
                                        <th scope="col">Nama kriteria 2</th>
                                        <th scope="col">Tingkat Kepentingan</th>
                                        <th scope="col">Nilai Perbandingan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $number = 0;                
                                        $n = $jumlah_n;
                                        for($x=0; $x <= ($n - 2); $x++)
                                        {
                                            for($y=($x+1); $y <= ($n - 1) ; $y++){
                                                $number ++;                                        
                                    ?>
                                                <tr>
                                                    <th scope="row"><?php echo $number?></th>
                                                    <td> <?php echo $nama_kriteria[$x] ?>  </td>
                                                    <td> <?php echo $nama_kriteria[$y] ?>  </td>
                                                    <td>
                                                        <select name="penting<?php echo $number ?>" class="form-control">
                                                            <option value="1"><?php echo $nama_kriteria[$x] ?></option>
                                                            <option value="2"><?php echo $nama_kriteria[$y] ?></option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <input type ="number" name="nilai<?php echo $number ?>" class="form-control" required></input>
                                                    <td>
                                                </tr>
                                    <?php
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <a><button class="btn btn-primary btn-sm float-right mr-6" type="submit"> SUBMIT</button></a>
                        </form>
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