<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
        body {
            height: 100%;
        }
        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-image: linear-gradient(-225deg, rgb(255, 255, 255) 50%, rgb(16,12,44) 50%);
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="">
            <?php if ($this->session->flashdata('error')) {?>
                <center><div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('error');?>
                </div></center>
            <?php }?>
        <div class="card ">
            <br>
            <br>
            <br>
            <center><div class="float-center icon-circle-medium  icon-box-lg  bg-dark mt-3">
                <i class="fa fa-user fa-fw fa-sm text-light"></i>
            </div>
            </center>
            <div class="card-header text-center"><span class="splash-description">Login here using your username and password</span></div>
            <div class="card-body">
                <form method ="post" action="<?php echo base_url('login/cek_login');?>">
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="username" type="text" placeholder="Username" autocomplete="off" required="">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg"name="password"  type="password" placeholder="Password" required="">
                    </div>
                    <br>
                    <div class="form-group">
                    <input href="<?php echo base_url('login/ceklogin');?>" name="login" type="submit" class="btn btn-success w-100" value="Login" />
                    </div>
                </form>
            </div>
            
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>