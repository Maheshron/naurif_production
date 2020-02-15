
<?php 
session_start();
include('connect.php');
$id = $_GET['id'];
$sql = "select * from products where cat_id ='$id'";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);

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


        .fixed {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 99;
        }
        .search
              {
                 
              }
            
.overlay{
height: 100%;
width: 100%;
background: rgba(0, 0, 0, 0.8);

}

.mk-search-trigger {
  position: absolute;
  top: 45%;
  left: 45%;
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
.box {
    background-color: #000;
    padding: 5px;
    color: #fff;
    margin-left: 10px;
    font-size: 10px;
}
#search-button i{
  color: white !important;
  font-size: 20px;
  position: absolute;
 left: 29px;
    top: 7px;
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
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
  .product-detail
    {
            margin-top: 26px;
    }
   
          }
          @media (max-width: 767px)
          {
.megamenu-style-dev .navbar-default .horizontal .navbar-toggle {
    margin: 6px 0px 0px 4px;
    color: #fff;
    border-radius: 0;
    background-color: transparent;
    border: none;
    float: left;
    cursor: pointer;
    padding: 8px 0px;
    border-radius: 0;
}
.fixed-header {
    padding: 10px 10px 36px 10px;
    background-color: #0336ff;
}
.filter1 {
 
    position: relative;
    right: 1px;
    color:#000;
}
.sort {
    position: fixed;
    top: 71px;
    background-color: #fff;
    width: 94%;
    z-index: 10;
    margin: 0;
border-radius: 0px 3px 3px 0px;
    height: 32px;
}
.filter1 {
    float: right;
    position: relative;
    right: 1px;
    color: #000;
    font-size: 18px;
    border: 1px solid #ffe000;
    background-color: #ffe000;
    padding: 6px;
    border-radius: 0px 3px 3px 0px;
}

.sort span
{
    padding:5px;
    color: #fff;
}
      .padding-0{
    padding-right:0;
    padding-left:0;
        }

}
      </style>
   </head>

<body class=" res layout-1">
    
    <div id="wrapper" class="wrapper-fluid banners-effect-10">

    <!-- Header Container  -->
  <?php include('header.php'); ?>
    <!-- //Header Container  -->
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
				<div class="module so_filter_wrap filter-horizontal">
					<h3 class="modtitle"><span>SHOP BY</span></h3>
					<div class="modcontent">
						<ul>
							<li class="so-filter-options" data-option="search">
								<div class="so-filter-heading">
									<div class="so-filter-heading-text">
										<span>Search</span>
									</div>
									<i class="fa fa-chevron-down"></i>
								</div>
								
								<div class="so-filter-content-opts">
									<div class="so-filter-content-opts-container">
										<div class="so-filter-option" data-type="search">
											<div class="so-option-container">
												<div class="input-group">
													<input type="text" class="form-control" name="text_search" id="text_search" value="">
													<div class="input-group-btn">
														<button class="btn btn-default" type="button" id="submit_text_search"><i class="fa fa-search"></i></button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="so-filter-options" data-option="Size">
								<div class="so-filter-heading">
									<div class="so-filter-heading-text">
										<span>Size</span>
									</div>
									<i class="fa fa-chevron-down"></i>
								</div>
								<div class="so-filter-content-opts" style="display: block;">
									<div class="so-filter-content-opts-container">
										<div class="so-filter-option opt-select  opt_enable" data-type="option" data-option_value="46" data-count_product="1" data-list_product="111">
											<div class="so-option-container">
												<div class="option-input">
													<span class="fa fa-square-o">
													</span>
												</div>
												<label>S</label>
												<div class="option-count ">
													<span>1</span>
													<i class="fa fa-times"></i>
												</div>
											</div>
										</div>
											<div class="so-filter-option opt-select  opt_enable" data-type="option" data-option_value="47" data-count_product="1" data-list_product="111">
												<div class="so-option-container">
													<div class="option-input">
														<span class="fa fa-square-o">
														</span>
													</div>
													<label>M</label>
													<div class="option-count ">
														<span>1</span>
														<i class="fa fa-times"></i>
													</div>
												</div>
											</div>
											<div class="so-filter-option opt-select  opt_enable" data-type="option" data-option_value="48" data-count_product="1" data-list_product="111">
												<div class="so-option-container">
													<div class="option-input">
														<span class="fa fa-square-o">
														</span>
													</div>
													<label>L</label>
													<div class="option-count ">
														<span>1</span>
														<i class="fa fa-times"></i>
													</div>
												</div>
											</div>
									</div>
								</div>
							</li>
							<li class="so-filter-options" data-option="Manufacturer">
								<div class="so-filter-heading">
									<div class="so-filter-heading-text">
										<span>Manufacturer</span>
									</div>
									<i class="fa fa-chevron-down"></i>
								</div>

								<div class="so-filter-content-opts">
									<div class="so-filter-content-opts-container">
										<div class="so-filter-option opt-select  opt_enable" data-type="manufacturer" data-manufacturer_value="8" data-count_product="4" data-list_product="30,58,61,105">
											<div class="so-option-container">
												<div class="option-input">
													<span class="fa fa-square-o">
													</span>
												</div>
												<label><img src="image/placeholder.png" style="width: 20px; height: 20px;">Mens</label>
												<div class="option-count ">
													<span>4</span>
													<i class="fa fa-times"></i>
												</div>
											</div>
										</div>
										<div class="so-filter-option opt-select  opt_enable" data-type="manufacturer" data-manufacturer_value="10" data-count_product="1" data-list_product="68">
											<div class="so-option-container">
												<div class="option-input">
													<span class="fa fa-square-o">
													</span>
												</div>
												<label><img src="image/placeholder.png" style="width: 20px; height: 20px;"> Womens</label>
												<div class="option-count ">
													<span>1</span>
													<i class="fa fa-times"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="so-filter-options" data-option="Price">
								<div class="so-filter-heading">
									<div class="so-filter-heading-text">
										<span>Price</span>
									</div>
									<i class="fa fa-chevron-down"></i>
								</div>
								<div class="so-filter-content-opts">
									<div class="so-filter-content-opts-container">
										<div class="so-filter-content-wrapper so-filter-iscroll">
											<div class="so-filter-options">
												<div class="so-filter-option so-filter-price">
													<div class="content_min_max">
														<div class="put-min put-min_max">
														$ <input type="number" class="input_min form-control" value="74" min="74" max="1202">
														</div>
														<div class="put-max put-min_max">
														$ <input type="number" class="input_max form-control" value="1202" min="74" max="1202">
														</div>
													</div>
													<div class="content_scroll">
														<div id="slider-range"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
						<div class="clear_filter">
							<a href="javascript:;" class="btn btn-default inverse" id="btn_resetAll">
								<span class="hidden fa fa-times" aria-hidden="true"></span> Reset All
							</a>
						</div>
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
															<img src="image/mens4.jpg">
														</a>
													</div>
												</div>
											</div>
											<div class="media-body">
												<div class="item-info">
													<!-- Begin title -->
													<div class="item-title">
														<a href="product.html" target="_self" title="Toshiba Pro 21&quot;(21:9) FHD  IPS LED 1920X1080 HDMI(2) ">Lorem Ipsum Dolor At Vero Eos Et Iusto Odi With Premium
														  
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
												  <a class="lt-image" data-product="66" href="#" target="_self" title="Compact Portable Charger (Power Bank) with Premium">
												  <img src="image/catalog/demo/product/electronic/19.jpg" alt="Compact Portable Charger (Power Bank) with Premium">
												  </a>
											   </div>
											</div>
										 </div>
										 <div class="media-body">
											<div class="item-info">
											   <!-- Begin title -->
											   <div class="item-title">
												  <a href="product.html" target="_self" title="Compact Portable Charger (Power Bank) with Premium ">
												 Lorem Ipsum Dolor At Vero Eos Et Iusto Odi With Premium
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
												  <a class="lt-image" data-product="50" href="#" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan ">
												  <img src="image/catalog/demo/product/travel/8.jpg" alt="Philipin Tour Group Manila/ Pattaya / Mactan ">
												  </a>
											   </div>
											</div>
										 </div>
										 <div class="media-body">
											<div class="item-info">
											   <!-- Begin title -->
											   <div class="item-title">
												  <a href="product.html" target="_self" title="Philipin Tour Group Manila/ Pattaya / Mactan  ">
												 Lorem Ipsum Dolor At Vero Eos Et Iusto Odi With Premium 
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
								   <div class="item-wrap style1 ">
									  <div class="item-wrap-inner">
										 <div class="media-left">
											<div class="item-image">
											   <div class="item-img-info product-image-container ">
												  <div class="box-label">
												  </div>
												  <a class="lt-image" data-product="78" href="#" target="_self" title="Portable  Compact Charger (External Battery) t45">
												  <img src="image/catalog/demo/product/electronic/4.jpg" alt="Portable  Compact Charger (External Battery) t45">
												  </a>
											   </div>
											</div>
										 </div>
										 <div class="media-body">
											<div class="item-info">
											   <!-- Begin title -->
											   <div class="item-title">
												  <a href="product.html" target="_self" title="Portable  Compact Charger (External Battery) t45 ">
												  Lorem Ipsum Dolor At Vero Eos Et Iusto Odi With Premium
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
				 
			</aside>
			<div id="content" class="col-6 col-md-9 col-sm-6 col-xs-12">
        

        
				<div class="products-category">
					
					<div class="products-category ">
					
					<section id="box-link5" class="shopping-cards">
        <div class="">
             
        <div class="row">
                <?php while($rowm = mysqli_fetch_array($result)){ 
                  $dis = $rowm['discount'];
                  $aprice = $rowm['price'];
                  $offer = ($dis/100)*$aprice;
                  $final = $aprice - $offer;
                  
                  
                ?>
                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="product.php?id=<?php echo $rowm['id'] ?>">
                                <img class="pic-1" src="../Dashboard/product_images/<?php echo $rowm['image_1']; ?>">
                                <img class="pic-2" src="image/<?php echo $rowm['image_1']; ?>">
                            </a>
                            <ul class="social">
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">
                            
                            <span class="red">&#8377 <?php echo floor($final); ?> </span><span class="line-t">&#8377 <?php echo $rowm['price']; ?></span>
                             <p><?php echo $rowm['product_title'] ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
           
        </div>

        <hr>

    
    </section>
						
						<div class="product-filter product-filter-bottom filters-panel">
							<div class="col-sm-6 text-left">
                <ul class="pagination">
                  <li class="active"><span>1</span>
                  </li>
                  <li><a href="#">2</a>
                  </li>
                  <li><a href="#">&gt;</a>
                  </li>
                  <li><a href="#">&gt;|</a>
                  </li>
                </ul>
              </div>
							<div class="col-sm-6 text-right">Showing 1 to 9 of 9 (1 Pages)</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
		
	<!-- //Main Container -->
	
	<div class="fasion">
	    <div class="row">
	        <div class="col-md-6 col-sm-6 col-xs-6 bdr">
	            <h6>Men's Fasion</h6>
	        </div>
	        <div class="col-md-6 col-sm-6 col-xs-6">
	            <h6 style="text-align:right; color:#777;position: relative;
    bottom: 5px;"><?php echo $num; ?></h6>
	        </div>
	    </div>
	</div>
	<hr>
		<div class="sort2">
	    <div class="row">
	        <div class="col-md-6 col-sm-6 col-xs-6 bdr">
	            <a href="#">Sort</a>
	        </div>
	        <div class="col-md-6 col-sm-6 col-xs-6">
	           <a href="#">Filter</a>
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
<script type="text/javascript" src="js/themejs/noui.js"></script>
<script type="text/javascript" src="js/themejs/addtocart.js"></script>  
<script type="text/javascript" src="js/themejs/nouislider.js"></script>
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
    <script>
        $(document).ready(function() {
            var num = $(".fixed-header").offset().top;
            $(window).bind('scroll', function() {
                if ($(window).scrollTop() > num) {
                    $('.fixed-header').addClass('fixed');
                } else {
                    $('.fixed-header').removeClass('fixed');
                }
            });
        });
    </script>
    
    
    
        <script>
        $(document).ready(function() {
            var num = $(".sort").offset().top;
            $(window).bind('scroll', function() {
                if ($(window).scrollTop() > num) {
                    $('.sort').addClass('fixed');
                } else {
                    $('.sort').removeClass('fixed');
                }
            });
        });
    </script>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
</body>
</html>