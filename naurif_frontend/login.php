<?php
session_start();
include('connect.php');

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sqlcheck = "select * from users where email='$email'";
    $resultc = mysqli_query($con,$sqlcheck);
    $count = mysqli_num_rows($resultc);
    $data = mysqli_fetch_array($resultc);
    $pass = $data['password'];
    if($count == 1){
    if($password == $pass){
        $id = $_SESSION['id'] ;
        $_SESSION['uid'] = $data['uid'];
        $_SESSION['name'] = $data['name'];
        $_SESSION['login'] = true;
        header('Location:index.php');
    }
}
else{
    echo "<script>alert('wrong email');</script>";
    header('Location:register.php');
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <!-- Basic page needs
         ============================================ -->
      <title>Login</title>
      
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

<body class="account-login account res layout-1">
    
    <div id="wrapper" class="wrapper-fluid banners-effect-10">
    
  <!-- Header Container  -->
        <?php include('header.php'); ?>
        <!-- //Header Container  -->

    
	<!-- Main Container  -->
		
		<div class="container">
  		<div class="row">
     
  			<div id="content" class="col-md-9">
  				<div class="row">
      
          <div class="col-sm-6">
            
                  <div class="well col-sm-12">    
              
              <h2 style="color:#000;">Login</h2>
             
              <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="control-label" for="input-email">E-Mail Address</label>
                  <input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control">
                </div>
                <div class="form-group">
                  <label class="control-label" for="input-password">Password</label>
                  <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
                  <a href="#">Forgotten Password</a></div>
                
                  <input type="submit" name="submit" value="Login" class="btn btn-primary pull-left sb">  
              </form>
              <div class="row social-icons">
                <h4> (Or) Login With</h4>
                <ul class="logins">
                   <li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
                   <li><a href="#"><i class="fa fa-google google"></i></a></li>
                   <li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
                   <li><a href="#"><i class="fa fa-instagram instagram"></i></a></li>
                  
               </ul>
            </div>                       
            </div>
          </div>
        </div>
        
  			</div>
  		 <aside class="col-md-3 col-sm-4 col-xs-12 content-aside right_column sidebar-offcanvas">
      <span id="close-sidebar" class="fa fa-times"></span>
      <div class="module">
          <h3 class="modtitle"><span>My Wish List </span></h3>
          <div class="module-content custom-border">
              <ul class="list-box">

                  <li><a href="#">My Account </a></li>

                  <li><a href="#">Edit Account </a></li>
                  <li><a href="#">Password </a></li>

                  <li><a href="#">Address Book </a></li>
                  <li><a href="wishlist.html">Wish List </a></li>
                  <li><a href="#">Order History </a></li>
                  <li><a href="#">Downloads </a></li>
                  <li><a href="#">Recurring payments </a></li>
                  <li><a href="#">Reward Points </a></li>
                  <li><a href="#">Returns </a></li>
                  <li><a href="#">Transactions </a></li>
                  <li><a href="#">Newsletter </a></li>

                  <li><a href="#">Logout </a></li>

              </ul>
          </div>
      </div>
    </aside>
      </div>
    
    </div>
   

	<!-- //Main Container -->
    <?php include('footer.php'); ?>

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