<?php
 include('connect.php');
if(isset($_REQUEST['submit'])){
  echo "<script>alert('hello')</script>";
  
   echo   $name =     mysqli_real_escape_string($con,$_POST['firstname']);
   echo   $lname =    mysqli_real_escape_string($con,$_POST['lastname']);
   echo   $email =    mysqli_real_escape_string($con,$_POST['email']);
   echo   $phone =    mysqli_real_escape_string($con,$_POST['telephone']);
   echo   $password =  mysqli_real_escape_string($con,md5($_POST['password']));
   echo   $cpassword = mysqli_real_escape_string($con,$_POST['confirm']);
 
         $emailcheck = "select * from users where email='$email'";
         $resultcheck = mysqli_query($con,$emailcheck);
         $count = mysqli_num_rows($resultcheck);
      
        
         if($count == 1){
             echo "<script>alert('email already exits');</script>";
             echo "<script>window.open('register.php','_self')</script>";

         }

  $sql = "insert into users(name,email,password,mobile,lname) values('$name','$email','$password','$phone','$lname')";
    $result = mysqli_query($con,$sql);
      if($result){
          echo "<script>alert('successfully registered');</script>";
          echo "<script>window.open('login.php','_self')</script>";
         
      }
      
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <!-- Basic page needs
         ============================================ -->
      <title>Register</title>
      
    <meta name="description" content="" />
    <meta name="author" content="Magentech">
    
    <meta name="theme-color" content="#0336ff" />
      <!-- Mobile specific metas
         ============================================ -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <!-- Favicon
         ============================================ -->
      <link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png"/>
      <!-- Libs CSS
         ============================================ -->
      <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
      <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
      <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
      <link href="css/themecss/lib.css" rel="stylesheet">
      <link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
      <link href="js/minicolors/miniColors.css" rel="stylesheet">
      <!-- Theme CSS
         ============================================ -->
      <link href="css/themecss/so_sociallogin.css" rel="stylesheet">
      <link href="css/themecss/so_searchpro.css" rel="stylesheet">
      <link href="css/themecss/so_megamenu.css" rel="stylesheet">
      <link href="css/themecss/so-categories.css" rel="stylesheet">
      <link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
      <link href="css/themecss/so-category-slider.css" rel="stylesheet">
      <link href="css/themecss/so-newletter-popup.css" rel="stylesheet">
      <link href="css/footer/footer1.css" rel="stylesheet">
      <link href="css/header/header1.css" rel="stylesheet">
      <link id="color_scheme" href="css/theme.css" rel="stylesheet">
      <link href="css/responsive.css" rel="stylesheet">
      <link href="css/quickview/quickview.css" rel="stylesheet">
      <!-- Google web fonts
         ============================================ -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" type="text/css">
      <style type="text/css">
         body{font-family: Roboto, sans-serif;}
                 .fixed {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 99;
        }
      </style>
   </head>

<body class="account res layout-1 layout-subpage">
    
    <div id="wrapper" class="wrapper-fluid banners-effect-10">
    

      <!-- Header Container  -->
        <?php include('header.php'); ?>
        <!-- //Header Container  -->

	<!-- Main Container  -->
	<div class="main-container container">
		<ul class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li><a href="#">Account</a></li>
			<li><a href="#">Register</a></li>
		</ul>
		
		<div class="row">
			<div id="content" class="col-md-9">
				<h2 class="title">Register Account</h2>
				<p>If you already have an account with us, please login at the <a href="#">login page</a>.</p>
				<form action="" method="post" enctype="multipart/form-data" class="form-horizontal account-register clearfix">
					<fieldset id="account">
						<legend>Your Personal Details</legend>
						<div class="form-group required" style="display: none;">
							<label class="col-sm-2 control-label">Customer Group</label>
							<div class="col-sm-10">
								<div class="radio">
									<label>
										<input type="radio" name="customer_group_id" value="1" checked="checked"> Default
									</label>
								</div>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-firstname">First Name</label>
							<div class="col-sm-10">
								<input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control">
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
							<div class="col-sm-10">
								<input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control">
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
							<div class="col-sm-10">
								<input type="email" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-telephone">Phone Number</label>
							<div class="col-sm-10">
								<input type="tel" name="telephone" value="" placeholder="Phone Number" id="input-telephone" class="form-control">
							</div>
						</div>
					
					</fieldset>
					<fieldset>
						<legend>Your Password</legend>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-password">Password</label>
							<div class="col-sm-10">
								<input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
							<div class="col-sm-10">
								<input type="password" name="confirm" value="" placeholder="Password Confirm" id="input-confirm" class="form-control">
							</div>
						</div>
					</fieldset>

					<div class="buttons">
						<div class="pull-right">I have read and agree to the <a href="#" class="agree"><b>Pricing Tables</b></a>
							<input class="box-checkbox" type="checkbox" name="agree" value="1"> &nbsp;
							<input type="submit" value="Submit" name="submit" class="btn btn-primary sb">
						</div>
					</div>
				</form>
			</div>
        <aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
           <span id="close-sidebar" class="fa fa-times"></span>
            <div class="module">
              <h3 class="modtitle"><span>Register Account </span></h3>
              <div class="module-content custom-border">
                <ul class="list-box">
                   
                  <li><a href="login.html">Login </a> / <a href="register.html">Register </a></li>
                  <li><a href="#">Forgotten Password </a></li>
                   
                  <li><a href="#">My Account </a></li>
                   
                  <li><a href="#">Address Book </a></li>
                  <li><a href="wishlist.html">Wish List </a></li>
                  <li><a href="#">Order History </a></li>
                  <li><a href="#">Downloads </a></li>
                  <li><a href="#">Recurring payments </a></li>
                  <li><a href="#">Reward Points </a></li>
                  <li><a href="#">Returns </a></li>
                  <li><a href="#">Transactions </a></li>
                  <li><a href="#">Newsletter </a></li>
                   
                </ul>
              </div>
            </div>
        </aside>
		</div>
	</div>
	<!-- //Main Container -->
	
    <?php include('footer.php'); ?>
            </footer>
        </div>
<div class="back-to-top"><i class="fa fa-angle-up"></i></div>	
	
<!-- Include Libs & Plugins
	============================================ -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
    <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/slick-slider/slick.js"></script>
    <script type="text/javascript" src="js/themejs/libs.js"></script>
    <script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
    <script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
    <script type="text/javascript" src="js/datetimepicker/moment.js"></script>
    <script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/modernizr/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript" src="js/minicolors/jquery.miniColors.min.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/quickview/jquery.magnific-popup.min.js"></script>
    <!-- Theme files
     ============================================ -->
    <script type="text/javascript" src="js/themejs/application.js"></script>
    <script type="text/javascript" src="js/themejs/homepage.js"></script>
    <script type="text/javascript" src="js/themejs/custom_h1.js"></script>
    <script type="text/javascript" src="js/themejs/addtocart.js"></script>  
    <script type="text/javascript" src="js/themejs/nouislider.js"></script>
	    <script>
        $(document).ready(function() {
            var num = $(".header-center").offset().top;
            $(window).bind('scroll', function() {
                if ($(window).scrollTop() > num) {
                    $('.header-center').addClass('fixed');
                    
                   
                } else {
                    $('.header-center').removeClass('fixed');
                    
                }
            });
        });
    </script>
        <script>
        $(document).ready(function() {
            var num = $(".navbar-toggle").offset().top;
            $(window).bind('scroll', function() {
                if ($(window).scrollTop() > num) {
                    $('.navbar-toggle').addClass('fixed');
                } else {
                    $('.navbar-toggle').removeClass('fixed');
                }
            });
        });
    </script>
    
</body>
</html>