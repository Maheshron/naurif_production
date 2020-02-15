<?php

session_start();

include("includes/db.php");

?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Naurif</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/final.png" type="image/x-icon">
    <!-- notifications css -->
    <link rel="stylesheet" href="assets/plugins/notifications/css/lobibox.min.css"/>
    <!-- Vector CSS -->
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet"/>
    <style>
    .card-content,.card-body{
        background-color: blue;
    }
    </style>
</head>
<body class="authentication-bg" style="background-image:url('assets/images/PMY-SLIDER-BACKGROUND1.jpg') no-repeat;" >
<!-- Start wrapper

-->
<div id="wrapper" >
    <div class="card card-authentication1 mx-auto my-5 animated zoomIn" style="style=box-shadow: 0 2px 2px 0 #2a73c1, 0 1px 5px 0 #e6d920e8, 0 3px 1px -2px #0b5db5;">
        <div class="card-body" >
            <div class="card-content p-2">
                <div class="text-center">
                    <img src="assets/images/final.png" style="height:80px;width:150px;"/>
                </div>
                <div class="card-title text-uppercase text-center py-2" style="color:white;">ADMIN PANEL</div>
                <form action="" method="post">
                    <div class="form-group">
                        <div class="position-relative has-icon-left">
                            <label for="exampleInputUsername" class="sr-only">Username</label>
                            <input type="email" id="exampleInputUsername" name="admin_email" class="form-control" placeholder="Email">
                            <div class="form-control-position">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="position-relative has-icon-left">
                            <label for="exampleInputPassword" class="sr-only">Password</label>
                            <input type="password" id="exampleInputPassword" name="admin_pass" class="form-control" placeholder="Password">
                            <div class="form-control-position">
                                <i class="icon-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="admin_login" class="btn btn-warning shadow-danger btn-block waves-effect waves-light">Sign In</button>
                    </div>
             </form>
            </div>
        </div>
    </div>
</div><!--wrapper-->
<!-- Bootstrap core JavaScript-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- waves effect js -->
<script src="assets/js/waves.js"></script>
<!-- Custom scripts -->
<script src="assets/js/app-script.js"></script>
</body>
</html>
<?php

if(isset($_POST['admin_login'])){

$admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);

$admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);

$get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";

$run_admin = mysqli_query($con,$get_admin);

$count = mysqli_num_rows($run_admin);

if($count==1){

$_SESSION['admin_email']=$admin_email;

//echo "<script>alert('You are Logged in into admin panel')</script>";

echo "<script>window.open('index.php?dashboard','_self')</script>";

}
else {

echo "<script>alert('Email or Password is Wrong')</script>";

}

}

?>