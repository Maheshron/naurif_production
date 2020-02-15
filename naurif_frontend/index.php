<?php 
session_start();
include('connect.php');
$slide = "select * from slide";
 $result = mysqli_query($con,$slide);
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
    <link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png" />
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" media="all">
    <!-- Google web fonts
				 ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <style type="text/css">
        body {
            font-family: Roboto, sans-serif;
        }





        .fixed {
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 99;
        }

        hr {
            margin-top: 0px;

            border: 0;
            border-top: 1px solid #dcd9d9;
        }

        .thumbnail {
            background-color: transparent;
            border: none;
        }

        @media(min-width:320px) and (max-width:480px) {
            .padding-0 {
                padding-right: 0;
                padding-left: 0;
            }

            .media-carousel {
                margin-bottom: 0;
                padding: 0px;
                position: relative;
                right: 5px;
            }

        }
    </style>
</head>

<body class="common-home res layout-1">
    <div id="wrapper" class="wrapper-fluid banners-effect-10">
        <!-- Header Container  -->
        <?php include('header.php'); ?>
        <!-- //Header Container  -->

        <div class="modal fade in" id="so_sociallogin" tabindex="-1" role="dialog" aria-hidden="true">
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



        <section class="main-cat">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <img src="image/mb-fasion.jpg">
                    <h5>Men's Fasion</h5>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <img src="image/mb-fasion.jpg">
                    <h5>Women's Fasion</h5>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <img src="image/mb-fasion.jpg">
                    <h5>Kids's Fasion</h5>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <img src="image/mb-electronics.jpg">
                    <h5>Caterogies</h5>
                </div>
            </div>
        </section>



        <div id="content">
            <div class="custom-scoll hidden-sm hidden-md hidden-xs">
                <div class="custom-html">
                    <div class="scoll-cate list_diemneo">
                        <ul id="nav-scroll">
                            <li class="neo1"><a href="#box-link1"><span>Hot deal</span></a></li>
                            <li class="neo2"><a href="#box-link2"><span>Spa</span></a></li>
                            <li class="neo3"><a href="#box-link3"><span>Fashion</span></a></li>
                            <li class="neo4"><a href="#box-link4"><span>Travel</span></a></li>
                            <li class="neo5"><a href="#box-link5"><span>Digital</span></a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="so-page-builder">
                <div class="container-fluid page-builder-ltr">
                    <div class="row  row-style ">
                        <!-- Menu left-->

                        <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000">

                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper For Slides -->
                            <div class="carousel-inner" role="listbox">

                                <!-- Third Slide -->
                                <div class="item active">

                                    <!-- Slide Background -->
                                    <img src="image/slider1.jpg" alt="Bootstrap Touch Slider" class="slide-image" />
                                    <div class="bs-slider-overlay"></div>

                                    <div class="container">
                                        <div class="row">
                                            <!-- Slide Text Layer -->
                                            <div class="slide-text slide_style_right">
                                                <h1 data-animation="animated zoomInRight">Bootstrap Carousel</h1>
                                                <p data-animation="animated fadeInLeft">Bootstrap carousel now touch enable slide.</p>

                                                <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">select two</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Slide -->

                                <!-- Second Slide -->
                                 
                                <?php while($row = mysqli_fetch_array($result)){ ?>
                                <div class="item">

                                    <!-- Slide Background -->
                                    <img src="image/<?php echo $row['image'] ?>" alt="Bootstrap Touch Slider" class="slide-image" />
                                    <div class="bs-slider-overlay"></div>
                                    <!-- Slide Text Layer -->
                                    <div class="slide-text slide_style_center">
                                        <h1 data-animation="animated flipInX" style="color:#ff7800;">Bootstrap touch slider</h1>
                                        <p data-animation="animated lightSpeedIn" style="color:#ff7800;">Make Bootstrap Better together.</p>

                                        <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary" data-animation="animated fadeInDown">select two</a>
                                    </div>
                                </div>
                                <!-- End of Slide -->
                                <?php } ?>






                                <!-- <div class="item">

                                    
                                    <img src="image/slider2.jpg" alt="Bootstrap Touch Slider" class="slide-image" />
                                    <div class="bs-slider-overlay"></div>
                                    
                                    <div class="slide-text slide_style_center">
                                        <h1 data-animation="animated flipInX" style="color:#ff7800;">Bootstrap touch slider</h1>
                                        <p data-animation="animated lightSpeedIn" style="color:#ff7800;">Make Bootstrap Better together.</p>

                                        <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary" data-animation="animated fadeInDown">select two</a>
                                    </div>
                                </div>  -->
                                <!-- End of Slide -->

                                <!-- Third Slide -->
                                <!-- <div class="item">

                                   
                                    <img src="image/slider3.jpg" alt="Bootstrap Touch Slider" class="slide-image" />
                                    <div class="bs-slider-overlay"></div>
                                   
                                    <div class="slide-text slide_style_right">
                                        <h1 data-animation="animated zoomInLeft" style="color:#ff7800;">Beautiful Animations</h1>
                                        <p data-animation="animated fadeInRight" style="color:#ff7800;">Lots of css3 Animations to make slide beautiful .</p>

                                        <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">select two</a>
                                    </div>
                                </div> -->
                                <!-- End of Slide -->


                            </div><!-- End of Wrapper For Slides -->

                            <!-- Left Control -->
                            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>

                            <!-- Right Control -->
                            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div> <!-- End  bootstrap-touch-slider Slider -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>

    <section id="container box-link4" class="slider-section">

        <div class=' row '>

            <div class='col-md-12 head2-title'>

                <div class="carousel slide media-carousel" id="media">

                    <h3 class="h3" style="display:inline;">Invite Friends </h3>

                    <a href="#" style="float:right;">View All</a>
                    <br>
                    <span>Get heavy discount on inviting people</span>

                    <div class="carousel-inner thumb-cnt">

                        <div class="item  active">
                            <div class="row">
                                <div class="col-md-4 col-xs-4 ">
                                    <a class="" href="#"><img alt="" src="image/mens.jpg"></a>
                                    <div class="caption">
                                        <span class="red">&#8377 677</span><span class="line-t">&#8377 1209</span>

                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-4 ">
                                    <a class="" href="#"><img alt="" src="image/women.jpg"></a>
                                    <div class="caption">
                                        <span class="red">&#8377 677</span><span class="line-t">&#8377 1307</span>

                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-4 ">
                                    <a class="" href="#"><img alt="" src="image/Kids.jpg"></a>
                                    <div class="caption">
                                        <span class="red">&#8377 677</span><span class="line-t">&#8377 1267</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-4 col-xs-4 ">
                                    <a class="" href="#"><img alt="" src="image/mens.jpg"></a>
                                    <div class="caption">
                                        <span class="red">&#8377 677</span><span class="line-t">&#8377 1207</span>

                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-4 ">
                                    <a class="" href="#"><img alt="" src="image/women.jpg"></a>
                                    <div class="caption">
                                        <span class="red">&#8377 677</span><span class="line-t">&#8377 1267</span>

                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-4 ">
                                    <a class="" href="#"><img alt="" src="image/Kids.jpg"></a>
                                    <div class="caption">
                                        <span class="red">&#8377 677</span><span class="line-t">&#8377 1407</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-4 col-xs-4">
                                    <a class="" href="#"><img alt="" src="image/mens.jpg"></a>
                                    <div class="caption">
                                        <span class="red">&#8377 677</span><span class="line-t">&#8377 1207</span>

                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-4 ">
                                    <a class="" href="#"><img alt="" src="image/women.jpg"></a>
                                    <div class="caption">
                                        <span class="red">&#8377 677</span><span class="line-t">&#8377 1307</span>

                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-4 ">
                                    <a class="" href="#"><img alt="" src="image/Kids.jpg"></a>
                                    <div class="caption">
                                        <span class="red">&#8377 677</span><span class="line-t">&#8377 1207</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Digital & Electronics -->
    <section id="box-link5" class="shopping-cards">
        <?php 
          $sqlproducts = "select * from categories";
          $resultproducts = mysqli_query($con,$sqlproducts);
          while($row = mysqli_fetch_array($resultproducts)){
              $catId = $row['cat_id'];
        ?>
        <div class="row mens-2 mrg-0">
            <h3 class="h3" style="display:inline;"><?php echo $row['cat_title'] ?> FASION</h3>
            <a href="category.php?id=<?php echo $row['cat_id']; ?>" style="float:right;">View All</a>

            <div class="img-part">
                <?php
                  $sql = "select * from products where cat_id = $catId limit 4";
                  $result = mysqli_query($con,$sql);
                  while($singleProduct = mysqli_fetch_array($result)){
                ?>
                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="category.html">
                                <img class="pic-1" src="../Dashboard/product_images/<?php echo $singleProduct['image_1'];?>">
                                <img class="pic-2" src="../Dashboard/product_images/<?php echo $singleProduct['image_1'];?>">
                            </a>

                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">

                            <span class="price">&#8377; <?php echo $singleProduct['price']; ?></span>
                            <h3 class="title"><a href="#"><?php echo $singleProduct['product_title'] ?></a></h3>
                        </div>
                    </div>
                </div>
                  <?php } ?>
                <!-- <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="category.html">
                                <img class="pic-1" src="image/mens1.jpg">
                                <img class="pic-2" src="image/mens1.jpg">
                            </a>

                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">

                            <span class="price">$699.99</span>
                            <h3 class="title"><a href="#">Women's Yellow Top</a></h3>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="category.html">
                                <img class="pic-1" src="image/mens1.jpg">
                                <img class="pic-2" src="image/mens1.jpg">
                            </a>

                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">

                            <span class="price">$599.99</span>
                            <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="category.html">
                                <img class="pic-1" src="image/mens1.jpg">
                                <img class="pic-2" src="image/mens1.jpg">
                            </a>

                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">

                            <span class="price">$599.99</span>
                            <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
          <?php } ?>
        <!-- <div class="row women-1 mrg-0">
            <h3 class="h3" style="display:inline;">WOMEN'S FASION</h3>
            <a href="#" style="float:right;">View All</a>

            <div class="">
                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="category.html">
                                <img class="pic-1" src="image/img1.jpg">
                                <img class="pic-2" src="image/img1.jpg">
                            </a>

                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">

                            <span class="price">$599.99</span>
                            <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="category.html">
                                <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-3.jpeg">
                                <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-4.jpeg">
                            </a>

                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">

                            <span class="price">$699.99</span>
                            <h3 class="title"><a href="#">Women's Yellow Top</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="category.html">
                                <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-5.jpeg">
                                <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-6.jpeg">
                            </a>

                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">

                            <span class="price">$599.99</span>
                            <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="category.html">
                                <img class="pic-1" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-7.jpeg">
                                <img class="pic-2" src="http://bestjquery.com/tutorial/product-grid/demo3/images/img-8.jpeg">
                            </a>

                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">

                            <span class="price">$599.99</span>
                            <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


        <!-- <div class="row kids-1 mrg-0">
            <h3 class="h3" style="display:inline;">KID'S FASION</h3>
            <a href="#" style="float:right;">View All</a>

            <div class="">
                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1" src="image/kids1.jpg">
                                <img class="pic-2" src="image/kids1.jpg">
                            </a>

                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">

                            <span class="price">$599.99</span>
                            <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1" src="image/kids1.jpg">
                                <img class="pic-2" src="image/kids1.jpg">
                            </a>

                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">

                            <span class="price">$699.99</span>
                            <h3 class="title"><a href="#">Women's Yellow Top</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1" src="image/kids1.jpg">
                                <img class="pic-2" src="image/kids1.jpg">
                            </a>

                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">

                            <span class="price">$599.99</span>
                            <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1" src="image/kids1.jpg">
                                <img class="pic-2" src="image/kids1.jpg">
                            </a>

                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">

                            <span class="price">$599.99</span>
                            <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->



        <!-- <div class="row gadget-1 mrg-0">
            <h3 class="h3" style="display:inline;">GADGETS</h3>
            <a href="#" style="float:right;">View All</a>

            <div class="">
                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1" src="image/el1.jpg">
                                <img class="pic-2" src="image/el1.jpg">

                            </a>

                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">

                            <span class="price">$599.99</span>
                            <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1" src="image/el1.jpg">
                                <img class="pic-2" src="image/el1.jpg">
                            </a>

                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">

                            <span class="price">$699.99</span>
                            <h3 class="title"><a href="#">Women's Yellow Top</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1" src="image/el1.jpg">
                                <img class="pic-2" src="image/el1.jpg">
                            </a>

                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">

                            <span class="price">$599.99</span>
                            <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 padding-0">
                    <div class="product-grid2">
                        <div class="product-image2">
                            <a href="#">
                                <img class="pic-1" src="image/el1.jpg">
                                <img class="pic-2" src="image/el1.jpg">
                            </a>

                            <a class="add-to-cart" href="">Add to cart</a>
                        </div>
                        <div class="product-content">

                            <span class="price">$599.99</span>
                            <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>

    <!-- <div class="row shopping mrg-0">
        <h3 class="h3" style="display:inline;">VIEW PRODUCTS</h3>
        <a href="#" style="float:right;">View All</a>
        <div class="">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product-grid2">
                    <div class="product-image2">
                        <a href="#">
                            <img class="pic-1" src="image/mens1.jpg">
                            <img class="pic-2" src="image/mens1.jpg">

                        </a>

                        <a class="add-to-cart" href="">Add to cart</a>
                    </div>
                    <div class="product-content">

                        <span class="price">$599.99</span>
                        <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product-grid2">
                    <div class="product-image2">
                        <a href="#">
                            <img class="pic-1" src="image/mens1.jpg">
                            <img class="pic-2" src="image/mens1.jpg">
                        </a>

                        <a class="add-to-cart" href="">Add to cart</a>
                    </div>
                    <div class="product-content">

                        <span class="price">$699.99</span>
                        <h3 class="title"><a href="#">Women's Yellow Top</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product-grid2">
                    <div class="product-image2">
                        <a href="#">
                            <img class="pic-1" src="image/mens1.jpg">
                            <img class="pic-2" src="image/mens1.jpg">
                        </a>

                        <a class="add-to-cart" href="">Add to cart</a>
                    </div>
                    <div class="product-content">

                        <span class="price">$599.99</span>
                        <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product-grid2">
                    <div class="product-image2">
                        <a href="#">
                            <img class="pic-1" src="image/mens1.jpg">
                            <img class="pic-2" src="image/mens1.jpg">
                        </a>

                        <a class="add-to-cart" href="">Add to cart</a>
                    </div>
                    <div class="product-content">

                        <span class="price">$599.99</span>
                        <h3 class="title"><a href="#">Women's Designer Top</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    </div>

    </div>
    <br>

    <br>
    <!-- //Main Container -->
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
    <script type="text/javascript" src="js/themejs/nouislider.js"></script>
    <!--        <script>-->
    <!--    $(document).ready(function() {-->
    <!--        var num = $(".crt-hide").offset().top;-->
    <!--        $(window).bind('scroll', function() {-->
    <!--            if ($(window).scrollTop() > num) {-->
    <!--                $('.crt-hide').addClass('fixed');-->
    <!--            } else {-->
    <!--                $('.crt-hide').removeClass('fixed');-->
    <!--            }-->
    <!--        });-->
    <!--    });-->
    <!--</script>-->

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
            $('#media').carousel({
                pause: true,
                interval: false,
            });
        });
    </script>
    <script>
        $(document).ready(function() {
    $('#Carousel').carousel({
        interval: 10000
    })
});
    </script>

</body>

</html>