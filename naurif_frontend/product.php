<?php 
session_start();
include('connect.php');
$id = $_GET['id'];
$ipaddr = $_SERVER['REMOTE_ADDR'];

$sql = "select * from products where id = '$id'";
$result = mysqli_query($con,$sql);

$data = mysqli_fetch_array($result);
$productTitle =  $data['product_title'] ;
$catid = $data['cat_id'];
$dis = $data['discount'];
$aprice = $data['price'];
$offer = ($dis/100)*$aprice;
$offer_price = floor($aprice - $offer);
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <!-- Basic page needs
         ============================================ -->
      <title>NAURIF</title>
      
      <meta name="keywords" content="" />
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
                 @media(min-width:320px) and (max-width:480px)
          {
          .hidden-compact
          {
              display:none;
          }
              .header-center
              {
                  display:none;
              }
                   .fixed {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 99;
        }
        .product-detail
        {
           
    bottom: 50px;
    z-index: -1; 
        }
     .typefooter-1
     {
             margin-bottom: 40px;
     }
               
              .fixed-header {
   
  background-color: #0336ff;
}
              .fixed-header i {
    color: #000;
    
}
              .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
    position: relative;
    min-height: 1px;
    padding-right: 0x;
    padding-left: 0px;
}
.overlay{
height: 100%;
width: 100%;
background: rgba(0, 0, 0, 0.8);

}
              fieldset, input {
    appearance: none;
    border: 0;
    padding: 0;
    margin: 0;
    min-width: 0;
    font-size: 1rem;
    font-family: inherit;
}

.mk-search-trigger {
  position: absolute;
  top: 45%;
  left: 45%;
}
                    .fixed-header i
    {
       
        color:#fff;
       padding-right:22px;
    } 
        
.fixed-header i {
    color: #000;
    padding-left: 15px;
        font-size: 23px;
}
.carousel {
    margin-bottom: 0;
    padding: 0 5px 2px 10px;
}
/* The controlsy */
.carousel-control {
	left: -12px;
    height: 40px;
	width: 40px;
    background: none repeat scroll 0 0 #222222;
    border: 4px solid #FFFFFF;
    border-radius: 23px 23px 23px 23px;
    margin-top: 90px;
}
.carousel-control.right {
	right: -12px;
}
/* The indicators */
.carousel-indicators {
	right: 50%;
	top: auto;
	bottom: -10px;
	margin-right: -19px;
}
.carousel-indicators i
{
  color: red;
    position: relative;
    bottom: 1px;
    left: 2px;  
}
/* The colour of the indicators */
.carousel-indicators li {
	background: #000;
}
.carousel-indicators .active {
background: #428bca;
}

/* Search Overlay */

.mk-fullscreen-search-overlay #mk-fullscreen-search-wrapper #mk-fullscreen-searchform input[type=submit] {
  position: absolute;
  width: 100px;
  height: 100%;
  background-color: transparent;
  border: 0;
  right: 0;
  top: 0;
}
#mk-fullscreen-searchform:focus{
  outline: none;
  border: none;
}

.mk-fullscreen-search-overlay #mk-fullscreen-search-wrapper #mk-fullscreen-searchform .fullscreen-search-icon {
  font-size: 25px;
  position: absolute;
  right: 15px;
  width: 25px;
  top: 30px;
  color: #fff;
  color: rgba(255, 255, 255, .2);
  -webkit-transition: all .2s ease-out;
  -moz-transition: all .2s ease-out;
  -ms-transition: all .2s ease-out;
  -o-transition: all .2s ease-out;
  transition: all .2s ease-out;
}
.fullscreen-search-icon:hover,
.fullscreen-search-icon:focus{
  border: none;
  outline: none;
  color: #fff !important;
  -webkit-transition: transform ease-out .2s;
  -moz-transition: transform ease-out .2s;
  -ms-transition: transform ease-out .2s;
  -o-transition: transform ease-out .2s;
  transition: transform ease-out .2s;
  transform: rotate(180deg);
}

#mk-fullscreen-searchform {
  position: relative;
  verticle-align: middle;
}

.mk-fullscreen-search-overlay #mk-fullscreen-search-wrapper #mk-fullscreen-searchform #mk-fullscreen-search-input {
  width: 350px;
  background-color: transparent;
  -webkit-box-shadow: 0 3px 0 0 rgba(255, 255, 255, .1);
  -moz-box-shadow: 0 3px 0 0 rgba(255, 255, 255, .1);
  box-shadow: 0 3px 0 0 rgba(255, 255, 255, .1);
  border: 0;
  text-align: center;
  font-size: 35px;
  padding: 20px;
  color: #fff;
  -webkit-transition: all .3s ease-out;
  -moz-transition: all .3s ease-out;
  -ms-transition: all .3s ease-out;
  -o-transition: all .3s ease-out;
  transition: all .3s ease-out;
}
.mk-fullscreen-search-overlay #mk-fullscreen-search-wrapper #mk-fullscreen-searchform #mk-fullscreen-search-input:focus{
  boder: none;
  outline: none;
}

.mk-fullscreen-search-overlay.mk-fullscreen-search-overlay-show {
  visibility: visible;
  opacity: 1;
}

.mk-fullscreen-search-overlay {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  opacity: 0;
  visibility: hidden;
  background-color: rgba(0, 0, 0, .94);
  text-align: center;
  -webkit-transition: all ease-in-out .25s;
  -moz-transition: all ease-in-out .25s;
  -ms-transition: all ease-in-out .25s;
  -o-transition: all ease-in-out .25s;
  transition: all ease-in-out .25s;
}

.mk-animate-element,
.mk-effect-bg-layer,
.mk-fullscreen-search-overlay {
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
}

.mk-fullscreen-search-overlay {
  z-index: 999;
}

.mk-fullscreen-search-overlay .mk-fullscreen-close:link,
.mk-fullscreen-search-overlay .mk-fullscreen-close:visited {
  color: #fff;
}

.mk-fullscreen-search-overlay .mk-fullscreen-close {
  position: absolute;
  right: 50px;
  top: 70px;
  font-size: 26px;
  -webkit-transition: transform ease-out .2s;
  -moz-transition: transform ease-out .2s;
  -ms-transition: transform ease-out .2s;
  -o-transition: transform ease-out .2s;
  transition: transform ease-out .2s;
  transform: rotate(0deg);
}

.mk-fullscreen-search-overlay.mk-fullscreen-search-overlay-show #mk-fullscreen-search-wrapper {
  opacity: 1;
  visibility: visible;
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
  ms-transform: scale(1);
}

.mk-fullscreen-search-overlay #mk-fullscreen-search-wrapper {
  display: inline-block;
  max-width: 1000px;
  vertical-align: middle;
  text-align: center;
  font-size: 18px;
  -webkit-transform: scale(0.9);
  -moz-transform: scale(0.9);
  -ms-transform: scale(0.9);
  -o-transform: scale(0.9);
  transform: scale(0.9);
  ms-transform: scale(0.9);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: all ease-in-out .3s;
  -moz-transition: all ease-in-out .3s;
  -ms-transition: all ease-in-out .3s;
  -o-transition: all ease-in-out .3s;
  transition: all ease-in-out .3s;
}

.mk-search-trigger {
  -webkit-transition: color .2s ease-in-out;
  -moz-transition: color .2s ease-in-out;
  -ms-transition: color .2s ease-in-out;
  -o-transition: color .2s ease-in-out;
  transition: color .2s ease-in-out
}
/* Search Button */
#search-button {
  display: relative;
  vertical-align: middle;
  height: 50px;
  width: 40px;
 
  border-radius: 50%;
  cursor: pointer;
  opacity: 1;
  padding-right: 10px;
  -webkit-transition: all 400ms;
  -moz-transition: all 400ms;
  -ms-transition: all 400ms;
  -o-transition: all 400ms;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
}
#search-button i{
  color: white !important;
  font-size: 20px;
  position: absolute;
 left: 10px;
    top: 7px;
}
.panel
{
   border:none; 
}
#search-button:hover,
.mk-fullscreen-close:hover {
  opacity: 0.6;
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
  -webkit-transition: all 400ms;
  -moz-transition: all 400ms;
  -ms-transition: all 400ms;
  -o-transition: all 400ms;
}
#mk-fullscreen-search-input:focus{
  box-shadow: 0px 3px 0px 0px rgba(255,255,255,0.54) !important;
}
.carousel-indicators li {
border: 2px solid #fff;

}
.carousel-indicators {
    position: absolute;
    bottom: 0px;
}
.carousel-indicators .active {
 background-color: #000;
}
.fixed-header .crt {
    position: absolute;
    right: -3px;
    font-size: 23px;
    top: -2px;
}
   .fixed-header {
   background-color: transparent;
    position: absolute;
    z-index: 99;
    width: 100%;
}
          }  
          
          
.h3 {
    color: #000;
    font-size: 15px;
    font-weight: 900px;
    text-transform: uppercase;
    font-family: "Times New Roman", Times, serif;
}
          }
  
              
      </style>
   </head>

<body class="res layout-1">
    
    <div id="wrapper" class="wrapper-fluid banners-effect-10">
    <div class="fixed-header">
  <div class="row header2">
   <div class="col-sm-5 col-xs-5">
    <a href="index.html"><i class="fa fa-arrow-left"></i></a>
   
      </div>
    <div class="col-sm-7 col-xs-7">     
    <a href="#"><i class="fa fa-share-alt book"></i></a>
    <a href="#"><i class="fa fa-shopping-cart crt"></i></a>
      </div>
    </div>
</div>

    <!-- Header Container  -->
  <?php include('header.php'); ?>
         <div class="modal fade in" id="so_sociallogin" tabindex="-1" role="dialog" aria-hidden="true" >
            <div class="modal-dialog block-popup-login">
                <a href="javascript:void(0)" title="Close" class="close close-login fa fa-times-circle" data-dismiss="modal"></a>
                <div class="tt_popup_login"><strong>Sign in Or Register</strong></div>
                <div class="block-content">
                    <div class=" col-reg registered-account">
                        <div class="block-content">
                            <form class="form form-login" action="#" method="post" id="login-form">
                                <fieldset class="fieldset login" data-hasrequired="* Required Fields">
                                    <div class="field email required email-input">
                                        <div class="control">
                                            <input name="email" value="" autocomplete="off" id="email" type="email" class="input-text" title="Email" placeholder="E-Mail Address">
                                        </div>
                                    </div>
                                    <div class="field password required pass-input">
                                        <div class="control">
                                            <input name="password" type="password" autocomplete="off" class="input-text" id="pass" title="Password" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class=" form-group">
                                        <label class="control-label">Login with your social account</label>
                                        <div>

                                            <a href="#" class="btn btn-social-icon btn-sm btn-google-plus"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a>

                                            <a href="#" class="btn btn-social-icon btn-sm btn-facebook"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>

                                            <a href="#" class="btn btn-social-icon btn-sm btn-twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>

                                            <a href="#" class="btn btn-social-icon btn-sm btn-linkdin"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a>

                                        </div>
                                    </div>

                                    <div class="secondary ft-link-p"><a class="action remind" href="#"><span>Forgot Your Password?</span></a></div>
                                    <div class="actions-toolbar">
                                        <div class="primary">
                                            <button type="submit" class="action login primary" name="send" id="send2"><span>Login</span></button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-reg login-customer">

                        <h2>NEW HERE?</h2>
                        <p class="note-reg">Registration is free and easy!</p>
                        <ul class="list-log">
                            <li>Faster checkout</li>
                            <li>Save multiple shipping addresses</li>
                            <li>View and track orders and more</li>
                        </ul>
                        <a class="btn-reg-popup" title="Register" href="#">Create an account</a>
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </div>
         </div>
    
   
  <!-- Main Container  -->

  
  <div class="container product-detail">
     <div class="row">
    <aside class="col-md-3 col-sm-4 col-xs-12 content-aside left_column sidebar-offcanvas">
       <span id="close-sidebar" class="fa fa-times"></span>
       <div class="module category-style">
        <h3 class="modtitle"><span>Categories </span></h3>
        <div class="mod-content box-category">
           <ul class="accordion" id="accordion-category">
            <li class="panel">
             <a href="#">Book Stationery </a>
             <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category0 "></a></span>
             <div id="category0" class="panel-collapse collapse  " style="clear:both">
              <ul>
                 <li>
                  <a href="#">Girls New </a>
                 </li>
                 <li>
                  <a href="#">Kitchen </a>
                 </li>
                 <li>
                  <a href="#">Pearl mens </a>
                 </li>
              </ul>
             </div>
            </li>
            <li class="panel">
             <a href="#">Laptop &amp; Notebook </a>
            </li>
            <li class="panel">
             <a href="#">Spa &amp; Massage </a>
             <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category2 "></a></span>
             <div id="category2" class="panel-collapse collapse  " style="clear:both">
              <ul>
                 <li>
                  <a href="#">Latenge mange </a>
                 </li>
                 <li>
                  <a href="#">Necklaces </a>
                 </li>
                 <li>
                  <a href="#">Pearl Jewelry </a>
                 </li>
                 <li>
                  <a href="#">Slider 925 </a>
                 </li>
                 <li>
                  <a href="#">Phones &amp; PDAs </a>
                 </li>
              </ul>
             </div>
            </li>
            <li class="panel">
             <a href="#">Sport &amp; Entertaiment </a>
             <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category3 "></a></span>
             <div id="category3" class="panel-collapse collapse  " style="clear:both">
              <ul>
                 <li>
                  <a href="#">Camping &amp; Hiking </a>
                 </li>
                 <li>
                  <a href="#">Cusen mariot </a>
                 </li>
                 <li>
                  <a href="#">Engite nanet </a>
                 </li>
                 <li>
                  <a href="#">Fashion </a>
                 </li>
                 <li>
                  <a href="#">Men </a>
                 </li>
              </ul>
             </div>
            </li>
            <li class="panel">
             <a href="#">Travel &amp; Vacation </a>
             <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category4 "></a></span>
             <div id="category4" class="panel-collapse collapse  " style="clear:both">
              <ul>
                 <li>
                  <a href="#">Best Tours </a>
                 </li>
                 <li>
                  <a href="#">Cruises </a>
                 </li>
                 <li>
                  <a href="#">Destinations </a>
                 </li>
                 <li>
                  <a href="#">Hotel &amp; Resort </a>
                 </li>
                 <li>
                  <a href="#">Infocus </a>
                 </li>
              </ul>
             </div>
            </li>
            <li class="panel">
             <a href="#">Laptops &amp; Notebooks </a>
             <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category5 "></a></span>
             <div id="category5" class="panel-collapse collapse  " style="clear:both">
              <ul>
                 <li>
                  <a href="#">Macs </a>
                 </li>
                 <li>
                  <a href="#">Windows </a>
                 </li>
              </ul>
             </div>
            </li>
            <li class="panel">
             <a href="#">Food &amp; Restaurant </a>
             <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category6 "></a></span>
             <div id="category6" class="panel-collapse collapse  " style="clear:both">
              <ul>
                 <li>
                  <a href="#">Hanet magente </a>
                 </li>
                 <li>
                  <a href="#">Knage unget </a>
                 </li>
                 <li>
                  <a href="#">Punge nenune </a>
                 </li>
                 <li>
                  <a href="#">Qunge genga </a>
                 </li>
                 <li>
                  <a href="#">Tange manue </a>
                 </li>
                 <li>
                  <a href="#">Web Cameras </a>
                 </li>
              </ul>
             </div>
            </li>
            <li class="panel">
             <a href="#">Shop Collection </a>
             <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category7 "></a></span>
             <div id="category7" class="panel-collapse collapse  " style="clear:both">
              <ul>
                 <li>
                  <a href="#">Hanet magente </a>
                 </li>
                 <li>
                  <a href="#">Knage unget </a>
                 </li>
                 <li>
                  <a href="#">Latenge mange </a>
                 </li>
                 <li>
                  <a href="#">Punge nenune </a>
                 </li>
                 <li>
                  <a href="#">Qunge genga </a>
                 </li>
                 <li>
                  <a href="#">Tange manue </a>
                 </li>
              </ul>
             </div>
            </li>
            <li class="panel">
             <a href="#">Fashion &amp; Accessories </a>
             <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category8 "></a></span>
             <div id="category8" class="panel-collapse collapse  " style="clear:both">
              <ul>
                 <li>
                  <a href="#">Dress Ladies </a>
                 </li>
                 <li>
                  <a href="#">Jean </a>
                 </li>
                 <li>
                  <a href="#">Men Fashion </a>
                 </li>
                 <li>
                  <a href="#">T-shirt </a>
                 </li>
                 <li>
                  <a href="#">Trending </a>
                 </li>
                 <li>
                  <a href="#">Western Wear </a>
                 </li>
                 <li>
                  <a href="#">Women Fashion </a>
                 </li>
                 <li>
                  <a href="#">Bags </a>
                 </li>
              </ul>
             </div>
            </li>
            <li class="panel">
             <a href="#">Digital &amp; Electronics </a>
             <span class="head"><a class="pull-right accordion-toggle " data-toggle="collapse" data-parent="#accordion-category" href="#category9 "></a></span>
             <div id="category9" class="panel-collapse collapse  " style="clear:both">
              <ul>
                 <li>
                  <a href="#">Cell Computers </a>
                 </li>
                 <li>
                  <a href="#">Computer Accessories </a>
                 </li>
                 <li>
                  <a href="#">Computer Headsets </a>
                 </li>
                 <li>
                  <a href="#">Desna Jacket </a>
                 </li>
                 <li>
                  <a href="#">Electronics </a>
                 </li>
                 <li>
                  <a href="#">Headphone </a>
                 </li>
                 <li>
                  <a href="#">Laptops </a>
                 </li>
                 <li>
                  <a href="#">Mobiles </a>
                 </li>
                 <li>
                  <a href="#">Sound </a>
                 </li>
                 <li>
                  <a href="#">USB &amp; HDD </a>
                 </li>
                 <li>
                  <a href="#">VGA and CPU </a>
                 </li>
                 <li>
                  <a href="#">Video &amp; Camera </a>
                 </li>
                 <li>
                  <a href="#">Video You </a>
                 </li>
                 <li>
                  <a href="#">Wireless Speakers </a>
                 </li>
                 <li>
                  <a href="#">Camera New </a>
                 </li>
                 <li>
                  <a href="#">Case </a>
                 </li>
                 <li>
                  <a href="#">Cell &amp; Cable </a>
                 </li>
                 <li>
                  <a href="#">Mobile &amp; Table </a>
                 </li>
                 <li>
                  <a href="#">Bluetooth Speakers </a>
                 </li>
              </ul>
             </div>
            </li>
           </ul>
        </div>
       </div>
       <div class="moduletable module so-extraslider-ltr best-seller best-seller-custom">
        <h3 class="modtitle"><span>Best Sellers</span></h3>
        <div class="modcontent">
          <div id="so_extra_slider" class="so-extraslider buttom-type1 preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1">
            <div class="extraslider-inner owl2-carousel owl2-theme owl2-loaded extra-animate" data-effect="none">
              <div class="item ">
                 <div class="item-wrap style1 ">
                  <div class="item-wrap-inner">
                   <div class="media-left">
                    <div class="item-image">
                       <div class="item-img-info product-image-container ">
                        <div class="box-label">
                        </div>
                        <a class="lt-image" data-product="104" href="#" target="_self" title="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2)">
                        <img src="image/mens2.jpg" alt="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2)">
                        </a>
                       </div>
                    </div>
                   </div>
                   <div class="media-body">
                    <div class="item-info">
                       <!-- Begin title -->
                       <div class="item-title">
                        <a href="#" target="_self" title="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2) ">
                        Toshiba Pro 21"(21:9) FHD  IPS LED 1920X1080 HDMI(2) 
                        </a>
                       </div>
                       <!-- Begin ratting -->
                       <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                       </div>
                       <!-- Begin item-content -->
                       <div class="price">
                        <span class="old-price product-price">$62.00</span>
                        <span class="price-old">$337.99</span>
                       </div>
                    </div>
                   </div>
                   <!-- End item-info -->
                  </div>
                  <!-- End item-wrap-inner -->
                 </div>
                 <!-- End item-wrap -->
                 <div class="item-wrap style1 ">
                  <div class="item-wrap-inner">
                   <div class="media-left">
                    <div class="item-image">
                       <div class="item-img-info product-image-container ">
                        <div class="box-label">
                        </div>
                        <a class="lt-image" data-product="66" href="#" title="Compact Portable Charger (Power Bank) with Premium">
                        <img src="image/mens2.jpg" alt="Compact Portable Charger (Power Bank) with Premium">
                        </a>
                       </div>
                    </div>
                   </div>
                   <div class="media-body">
                    <div class="item-info">
                       <!-- Begin title -->
                       <div class="item-title">
                        <a href="#" target="_self" title="Compact Portable Charger (Power Bank) with Premium ">
                        Compact Portable Charger (Power Bank) with Premium 
                        </a>
                       </div>
                       <!-- Begin ratting -->
                       <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                       </div>
                       <!-- Begin item-content -->
                       <div class="price">
                        <span class="old-price product-price">$74.00</span>
                        <span class="price-old">$241.99</span>
                       </div>
                    </div>
                   </div>
                   <!-- End item-info -->
                  </div>
                  <!-- End item-wrap-inner -->
                 </div>
                 <!-- End item-wrap -->
                 <div class="item-wrap style1 ">
                  <div class="item-wrap-inner">
                   <div class="media-left">
                    <div class="item-image">
                       <div class="item-img-info product-image-container ">
                        <div class="box-label">
                        </div>
                        <a class="lt-image" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan ">
                        <img src="image/mens2.jpg" alt="Philipin Tour Group Manila/ Pattaya / Mactan ">
                        </a>
                       </div>
                    </div>
                   </div>
                   <div class="media-body">
                    <div class="item-info">
                       <!-- Begin title -->
                       <div class="item-title">
                        <a href="#" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan  ">
                        Philipin Tour Group Manila/ Pattaya / Mactan  
                        </a>
                       </div>
                       <!-- Begin ratting -->
                       <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                       </div>
                       <!-- Begin item-content -->
                       <div class="price">
                        <span class="old-price product-price">$74.00</span>
                        <span class="price-old">$122.00</span>
                       </div>
                    </div>
                   </div>
                   <!-- End item-info -->
                  </div>
                  <!-- End item-wrap-inner -->
                 </div>
                 <!-- End item-wrap -->
                 <div class="item-wrap style1">
                  <div class="item-wrap-inner">
                   <div class="media-left">
                    <div class="item-image">
                       <div class="item-img-info product-image-container ">
                        <div class="box-label">
                        </div>
                        <a class="lt-image" data-product="78" href="#">
                        <img src="image/mens2.jpg" alt="Portable  Compact Charger (External Battery) t45">
                        </a>
                       </div>
                    </div>
                   </div>
                   <div class="media-body">
                    <div class="item-info">
                       <!-- Begin title -->
                       <div class="item-title">
                        <a href="#" target="_self" title="Portable  Compact Charger (External Battery) t45 ">
                        Portable  Compact Charger (External Battery) t45 
                        </a>
                       </div>
                       <!-- Begin ratting -->
                       <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                       </div>
                       <!-- Begin item-content -->
                       <div class="price">
                        <span class="old-price product-price">$74.00</span>
                        <span class="price-old">$122.00</span>
                       </div>
                    </div>
                   </div>
                   <!-- End item-info -->
                  </div>
                  <!-- End item-wrap-inner -->
                 </div>
                 <!-- End item-wrap -->
              </div>
              <div class="item ">
                 <div class="item-wrap style1 ">
                  <div class="item-wrap-inner">
                   <div class="media-left">
                    <div class="item-image">
                       <div class="item-img-info product-image-container ">
                        <div class="box-label">
                        </div>
                        <a class="lt-image" data-product="104" href="#" target="_self" title="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2)">
                        <img src="image/mens2.jpg" alt="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2)">
                        </a>
                       </div>
                    </div>
                   </div>
                   <div class="media-body">
                    <div class="item-info">
                       <!-- Begin title -->
                       <div class="item-title">
                        <a href="#" target="_self" title="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2) ">
                        Toshiba Pro 21"(21:9) FHD  IPS LED 1920X1080 HDMI(2) 
                        </a>
                       </div>
                       <!-- Begin ratting -->
                       <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                       </div>
                       <!-- Begin item-content -->
                       <div class="price">
                        <span class="old-price product-price">$62.00</span>
                        <span class="price-old">$337.99</span>
                       </div>
                    </div>
                   </div>
                   <!-- End item-info -->
                  </div>
                  <!-- End item-wrap-inner -->
                 </div>
                 <!-- End item-wrap -->
                 <div class="item-wrap style1 ">
                  <div class="item-wrap-inner">
                   <div class="media-left">
                    <div class="item-image">
                       <div class="item-img-info product-image-container ">
                        <div class="box-label">
                        </div>
                        <a class="lt-image" data-product="66" href="#" title="Compact Portable Charger (Power Bank) with Premium">
                        <img src="image/mens2.jpg" alt="Compact Portable Charger (Power Bank) with Premium">
                        </a>
                       </div>
                    </div>
                   </div>
                   <div class="media-body">
                    <div class="item-info">
                       <!-- Begin title -->
                       <div class="item-title">
                        <a href="#" target="_self" title="Compact Portable Charger (Power Bank) with Premium ">
                        Compact Portable Charger (Power Bank) with Premium 
                        </a>
                       </div>
                       <!-- Begin ratting -->
                       <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                       </div>
                       <!-- Begin item-content -->
                       <div class="price">
                        <span class="old-price product-price">$74.00</span>
                        <span class="price-old">$241.99</span>
                       </div>
                    </div>
                   </div>
                   <!-- End item-info -->
                  </div>
                  <!-- End item-wrap-inner -->
                 </div>
                 <!-- End item-wrap -->
                 <div class="item-wrap style1 ">
                  <div class="item-wrap-inner">
                   <div class="media-left">
                    <div class="item-image">
                       <div class="item-img-info product-image-container ">
                        <div class="box-label">
                        </div>
                        <a class="lt-image" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan ">
                        <img src="image/mens2.jpg" alt="Philipin Tour Group Manila/ Pattaya / Mactan ">
                        </a>
                       </div>
                    </div>
                   </div>
                   <div class="media-body">
                    <div class="item-info">
                       <!-- Begin title -->
                       <div class="item-title">
                        <a href="#" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan  ">
                        Philipin Tour Group Manila/ Pattaya / Mactan  
                        </a>
                       </div>
                       <!-- Begin ratting -->
                       <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                       </div>
                       <!-- Begin item-content -->
                       <div class="price">
                        <span class="old-price product-price">$74.00</span>
                        <span class="price-old">$122.00</span>
                       </div>
                    </div>
                   </div>
                   <!-- End item-info -->
                  </div>
                  <!-- End item-wrap-inner -->
                 </div>
                 <!-- End item-wrap -->
                 <div class="item-wrap style1">
                  <div class="item-wrap-inner">
                   <div class="media-left">
                    <div class="item-image">
                       <div class="item-img-info product-image-container ">
                        <div class="box-label">
                        </div>
                        <a class="lt-image" data-product="78" href="#">
                        <img src="image/mens2.jpg" alt="Portable  Compact Charger (External Battery) t45">
                        </a>
                       </div>
                    </div>
                   </div>
                   <div class="media-body">
                    <div class="item-info">
                       <!-- Begin title -->
                       <div class="item-title">
                        <a href="#" target="_self" title="Portable  Compact Charger (External Battery) t45 ">
                        Portable  Compact Charger (External Battery) t45 
                        </a>
                       </div>
                       <!-- Begin ratting -->
                       <div class="rating">
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                       </div>
                       <!-- Begin item-content -->
                       <div class="price">
                        <span class="old-price product-price">$74.00</span>
                        <span class="price-old">$122.00</span>
                       </div>
                    </div>
                   </div>
                   <!-- End item-info -->
                  </div>
                  <!-- End item-wrap-inner -->
                 </div>
                 <!-- End item-wrap -->
              </div>
            </div>
          </div>
        </div>
       </div>
       <div class="module banner-left hidden-xs ">
        <div class="static-image-home-left banners">
           <div><a title="Static Image" href="#"><img src="image/mens3.jpg" alt="Static Image"></a></div>
        </div>
       </div>
    </aside>
    <div id="content" class="col-md-9 col-sm-12 col-xs-12">
     
      <div class="sidebar-overlay "></div>
      <div class="product-view product-detail">
        <div class="product-view-inner clearfix">
          <div class="">
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <?php if(!empty($data['image_2'])) { ?>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <?php } ?>
      <?php if(!empty($data['image_3'])) { ?>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <?php } ?>
      <?php if(!empty($data['video'])) { ?>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <?php } ?>



      <!-- <li data-target="#myCarousel" data-slide-to="2"></li>
       <li data-target="#myCarousel" data-slide-to="3"></li> -->
       
       
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    <div class="item active">
        <img src="../Dashboard/product_images/<?php echo $data['image_1']; ?>" alt="Los Angeles" style="width:100%;position:relative;">
      </div>
      <?php
        if(!empty($data['image_2'])){
      ?>
      <div class="item">
        <img src="../Dashboard/product_images/<?php echo $data['image_2']; ?>" alt="Chicago" style="width:100%;">
      </div>
        <?php } ?>
        <?php 
        if(!empty($data['image_3'])){
        ?>
      <div class="item">
        <img src="../Dashboard/product_images/<?php echo $data['image_3']; ?>" alt="New york" style="width:100%;">
      </div>
      <?php 
        }
      ?>
      <?php if(!empty($data['video'])){ ?>
       <div class="item">
        <video width="320" height="240" autoplay loop>
  <source src="../Dashboard/product_images/video/<?php echo $data['video']; ?>" type="video/mp4">
  
</video>
      </div>
      <?php } ?>
    </div>

  </div>
</div>

         <div class="caption2">
          <p><span class="cost-b">Rs. &#8377 <?php echo $offer_price; ?></span>  <span class="line-t">&#8377 <?php echo $data['price'] ?></span> <span class="box"><?php echo $data['discount'] ?>% off</span></p>
     <p><?php echo $data['product_title']; ?></p>
  
       <hr>
       <div class="sides-gap">
<h5>Size</h5>
       <h5 class="guide">Size Guide</h5>
       <ul class="sizes">
           <li><a href="#" id="size"  value="s" >S</a></li>
           <li><a href="#" id="sizem"  value="m">M</a></li>
           <li><a href="#" id="sizel"  value="l">L</a></li>
           <li><a href="#" id="sizexl"  value="xl">X</a></li>
           <li><a href="#" id="sizexxl"  value="xxl">XXL</a></li>
           
       </ul>
       <br>
       <hr>
</div>
       <div class="wrapper center-block">
     <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      Product Detailes
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <?php echo $data['description']; ?>
      </div>
    </div>
  </div>

</div>
      
       <form class="pd-delivery-opt" novalidate="" autocomplete="off" data-reactid="201"><label for="pincode" data-reactid="202">DELIVERY &amp; SERVICES FOR</label><input type="tel" id="pincode" value="" name="pincode" maxlength="6" placeholder="ENTER PIN CODE" data-reactid="203"><div class="error-text" data-reactid="205"></div></form>
       
       <h5>Check your pincode for Servicebility</h5>
       <ul class="pincode">
          <li style="font-weight:700; color:#000">Free Delivery above &#8377;1,499</li>
          <li>Easy 30 Days Return <a href="#" style="color:#000; text-decoration:underline;">details</a></li>
       </ul>
       <hr>
       
       </div>
        
          
        </div>
       
      <div class="container Recently-viewed">
                              <h3 style="display:inline;">Recently Viewed</h3>
                   
    <a href="#" style="float:right;"><i class="fa fa-angle-right"></i></a>
      </div>
       <hr>
        <div class="container similar">
           <h3 class="h3" style="display:inline;">Similar Products</h3>
            <div class="">
    <div class="row">
		<div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                 
              
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <?php
                      $sqlslide = "select * from products where cat_id='$catid' limit 1";
                      $resultslide = mysqli_query($con,$sqlslide);
                      $slidedata = mysqli_fetch_array($resultslide);
                      $dis1 = $slidedata['discount'];
                      $aprice1 = $slidedata['price'];
                      $offer1 = ($dis1/100)*$aprice1;
                      $offer_price1 = floor($aprice1 - $offer1);


                      $sqlslide1 = "select * from products where cat_id='$catid'  limit 2,3";
                      $resultslide1 = mysqli_query($con,$sqlslide1);
                      $slidedata1 = mysqli_fetch_array($resultslide1);
                      
                     
                    ?>
                <div class="item active">
                	<div class="row">
                	  <div class="col-md-3 col-sm-4 col-xs-4"><a href="#"><img src="../Dashboard/product_images/<?php echo $slidedata['image_1']; ?>" alt="Image" style="max-width:100%;"></a>
                	  <div class="caption">
          <span class="red">&#8377 <?php echo $offer_price1; ?></span><span class="line-t">&#8377 <?php echo $aprice1 ?></span>
     
        </div>
      </div>   
                <?php  while( $slidedata1 = mysqli_fetch_array($resultslide1)){ 
                  $dis2 = $slidedata1['discount'];
                  $aprice2 = $slidedata1['price'];
                  $offer2 = ($dis2/100)*$aprice2;
                  $offer_price2 = floor($aprice2 - $offer2);
                  ?>
                	  <div class="col-md-3 col-sm-4 col-xs-4"><a href="#"><img src="../Dashboard/product_images/<?php echo $slidedata1['image_1']; ?>" alt="Image" style="max-width:100%;"></a>
                	  <div class="caption">
          <span class="red">&#8377 <?php echo $offer_price2; ?></span><span class="line-t">&#8377 <?php echo $aprice2 ?></span>
     
        </div>
      </div>
                <?php } ?>

                	  <!-- <div class="col-md-3 col-sm-4 col-xs-4"><a href="#"><img src="../Dashboard/product_images/<?php // echo $data['image_3']; ?>" alt="Image" style="max-width:100%;"></a>
                	  <div class="caption">
          <span class="red">&#8377 677</span><span class="line-t">&#8377 1209</span>
     
        </div>
      </div> -->
                	
                	</div>
                </div>
                 
                <div class="item">
                	<div class="row">
                		<div class="col-md-3 col-sm-4 col-xs-4"><a href="#"><img src="image/mens1.jpg" alt="Image" style="max-width:100%;"></a>
                		<div class="caption">
          <span class="red">&#8377 677</span><span class="line-t">&#8377 1209</span>
     
        </div></div>
                		<div class="col-md-3 col-sm-4 col-xs-4"><a href="#"><img src="image/mens1.jpg" alt="Image" style="max-width:100%;"></a>
                		<div class="caption">
          <span class="red">&#8377 677</span><span class="line-t">&#8377 1209</span>
     
        </div></div>
                		<div class="col-md-3 col-sm-4 col-xs-4"><a href="#"><img src="image/mens1.jpg" alt="Image" style="max-width:100%;"></a>
                		<div class="caption">
          <span class="red">&#8377 677</span><span class="line-t">&#8377 1209</span>
     
        </div></div>
                		
                	</div>
                </div>
                 
                <div class="item">
                	<div class="row">
                		<div class="col-md-3 col-sm-4 col-xs-4"><a href="#"><img src="image/mens1.jpg" alt="Image" style="max-width:100%;"></a>
                		<div class="caption">
          <span class="red">&#8377 677</span><span class="line-t">&#8377 1209</span>
     
        </div></div>
                		<div class="col-md-3 col-sm-4 col-xs-4"><a href="#"><img src="image/mens1.jpg" alt="Image" style="max-width:100%;"></a>
                		<div class="caption">
          <span class="red">&#8377 677</span><span class="line-t">&#8377 1209</span>
     
        </div></div>
                		<div class="col-md-3 col-sm-4 col-xs-4"><a href="#"><img src="image/mens1.jpg" alt="Image" style="max-width:100%;"></a>
                		<div class="caption">
          <span class="red">&#8377 677</span><span class="line-t">&#8377 1209</span>
     
        </div>
        </div>
                	
                	</div>
                </div>
                 
                </div>
             
                </div>
                 
		</div>
	</div>
</div><!--.container-->
        </div>
      
      <hr>
             <div class="wrapper center-block">
     <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading2">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
     Legal Policies
        </a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
      </div>
    </div>
  </div>

</div>


      </div>
      </div>
     </div>
  </div>
    
  <!-- //Main Container -->
     
   
  <div class="sort2 cart-buy">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6 bdr">
            <a href="#" class="addToCart" >Add to cart</a>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6 buy">
           <a href="#">Buy now</a>
        </div>
    </div>
</div>
   <!-- Footer Container -->
   <?php include('footer.php'); ?>
    <!-- //end Footer Container -->


</div>
<div class="back-to-top"><i class="fa fa-angle-up"></i></div>

<!-- End Color Scheme
============================================ -->



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

<script>
    jQuery(document).ready(function($) {
  var wHeight = window.innerHeight;
  //search bar middle alignment
  $('#mk-fullscreen-searchform').css('top', wHeight / 2);
  //reform search bar
  jQuery(window).resize(function() {
    wHeight = window.innerHeight;
    $('#mk-fullscreen-searchform').css('top', wHeight / 2);
  });
  // Search
  $('#search-button').click(function() {
    console.log("Open Search, Search Centered");
    $("div.mk-fullscreen-search-overlay").addClass("mk-fullscreen-search-overlay-show");
  });
  $("a.mk-fullscreen-close").click(function() {
    console.log("Closed Search");
    $("div.mk-fullscreen-search-overlay").removeClass("mk-fullscreen-search-overlay-show");
  });
});
</script>


<script>
     $('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });
    </script>
    <script>
        $(document).ready(function() {
    $('#Carousel').carousel({
        interval: 20000
    })
});
    </script>
    <script>
      // var small = document.getElementById('small');
      // small.addEventListener('click',function(this){
      //   alert(this.value);
      // })
         
       $(document).ready(function(){
        var selected = false;
         var productSize = "";
         var title = <?php echo $productTitle;?>;
         var productId = <?php echo $id ?>;
         // title = title.toString(title);
         var price = <?php echo $offer_price ?>
       
         //var ipaddress = <?php // echo $ipaddr; ?>
        // var userId = <?php // echo $_SERVER['uid']; ?>
         
        
      // function size(s){
      //   selected = true;
      //   productSize = s.id;
      // }
          $('#size').on('click',function(){
            productSize = $(this).attr('value');
            selected = true;
          })

          $('#sizem').on('click',function(){
            productSize = $(this).attr('value');
            selected = true;
          })

          $('#sizel').on('click',function(){
            productSize = $(this).attr('value');
            selected = true;
          })

          $('#sizexl').on('click',function(){
            productSize = $(this).attr('value');
            selected = true;
          })

          $('#sizexxl').on('click',function(){
            productSize = $(this).attr('value');
            selected = true;
          })

           $('.addToCart').click(function(){
            if(selected){
         $.ajax({
           url:"ajax.php",
           method:"post",
           data:{pid:productId,ptitle:title,productprice:price,productsize:productSize},
           success:function(data){
             alert('added to cart');
           }
         })
      }
      else{
         alert('please select the size');
      }
           });

       


       })
         
    </script>
</body>
</html>