<header id="header" class=" typeheader-1">
            <!-- Header Top -->
            <div class="header-top hidden-compact">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6 header-menu dsk-hide">
                            <div class="megamenu-style-dev megamenu-dev">
                                <div class="responsive">
                                    <nav class="navbar-default">
                                        <div class=" container-megamenu   horizontal ">
                                            <div class="navbar-header" style="float:left;">
                                                <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                            <div class="megamenu-wrapper">
                                                <span id="remove-megamenu" class="fa fa-times"></span>
                                                <div class="megamenu-pattern">
                                                    <div class="container">
                                                       
                                                        <div class="row slide-bann2">
                                                        <div class="col-md-5 col-sm-5 col-xs-5 profile">
                                                        <a href="#"><i class="fa fa-user"></i></a>
                                                       
                                                        </div>
                                                         <div class="col-md-7 col-sm-7 col-xs-7 login2">
                                                         <?php if(isset($_SESSION['name'])) {  ?>
                                                         <h5><?php echo $_SESSION['name']; ?></h5>
                                                         <?php }   
   
   
                                     else{ ?>
                                
                                                        
                                                          <h5>My Name</h5>
                                   <?php } ?>       
                                                        
                                                
                                                             </div>
                                                            </div>
                                                            <hr>
                                                              <div class="row slide-bann3">
                                                       <ul>
                                                      <li><a href="#">DSA Login</a></li>
                                                            
                                                            <?php 
                                                            if(isset($_SESSION['login'])){
                                                                 ?>

                                                    <li class="full-width menu-home with-sub-menu hover login">

                                                                <a href="logout.php" class="clearfix">
                                                                    <strong>
                                                                      Log Out
                                                                    </strong>
                                                                    <b class='caret'></b>
                                                                </a>
                                                          
                                                            </li>

                                                           <?php 
                                                           
                                                        }

                                                        else {
                                                            ?>
                                                            
                                                            <li class="full-width menu-home with-sub-menu hover login">

                                                            <a href="login.php" class="clearfix">
                                                                <strong>
                                                                Login in
                                                                </strong>
                                                                <b class='caret'></b>
                                                            </a>

                                                            </li>

                                                     <?php }
                                                            ?>   

                                                                          <li class="full-width menu-home with-sub-menu hover register">

                                                                <a href="register.php" class="clearfix">
                                                                    <strong>
                                                                     Sign Up
                                                                    </strong>
                                                                    <b class='caret'></b>
                                                                </a>
                                                          
                                                            </li>
                                                           </ul>
                                                            </div>
                                                            
                                                            <hr>
                                                           
                                                        <ul class="megamenu" data-transition="slide" data-animationtime="500">
                                                          
                                                           <li class="">
                                                                <p class='close-menu'></p>
                                                                <a href="#" class="clearfix">
                                                                    <strong>
                                                                       Home
                                                                    </strong>
                                                                   
                                                                </a>
                                                          
                                                            </li>
                                                         
                                                            
                                                            <li class="full-width menu-home with-sub-menu hover">
                                                                <p class='close-menu'></p>
                                                                <a href="#" class="clearfix">
                                                                    <strong>
                                                                     Men's
                                                                    </strong>
                                                                    <b class='caret'></b>
                                                                </a>
                                                                <div class="sub-menu" style="width: 900px">
                                                                    <div class="content">
                                                                        <div class="row">
                                                                            <div class="col-sm-12 ">
                                                                              
                                                                               <hr>
                                                                                  <div class="html ">
                                                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center; min-height: 140px;">
                                                                                        <a href="index.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/shirts.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>Shirts</p>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center; min-height: 140px;">
                                                                                        <a href="home2.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/pants2.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>Casual Pants</p>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center; min-height: 140px;">
                                                                                        <a href="home3.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/t-shirts2.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>T-shirts</p>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center; min-height: 140px;">
                                                                                        <a href="home4.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/track%20pant2.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>Track Pants</p>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center; min-height: 140px;">
                                                                                        <a href="home5.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/jackets2.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>Jackets</p>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center; min-height: 140px;">
                                                                                        <a href="home6.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/jeans2.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>Jeans</p>
                                                                                        </a>
                                                                                    </div>
                                                                                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center; min-height: 140px;">
                                                                                        <a href="home6.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/mensformal-shoes2.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>Footware</p>
                                                                                        </a>
                                                                                    </div>
                                                                                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center; min-height: 140px;">
                                                                                        <a href="home6.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/men-accessories2.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>Accessories</p>
                                                                                        </a>
                                                                                    </div>
                                                                                    
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            
                                                                                            
                                                                            
                                                                                            
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                               
                                                            </li>
                                                           
                                                            
                                                            
                                                            
                                                       
                                                                              <li class="full-width menu-home with-sub-menu hover">
                                                                <p class='close-menu'></p>
                                                                <a href="#" class="clearfix">
                                                                    <strong>
                                                                    Women's
                                                                    </strong>
                                                                    <b class='caret'></b>
                                                                </a>
                                                               <div class="sub-menu" style="width: 900px">
                                                                    <div class="content">
                                                                        <div class="row">
                                                                            <div class="col-sm-12 ">
                                                                               
                                                                               <hr>
                                                                                     <div class="html ">
                                                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center; min-height: 140px;">
                                                                                        <a href="index.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/kurties2.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>Kurties</p>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center; min-height: 140px;">
                                                                                        <a href="home2.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/saree2.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>Sarees</p>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center; min-height: 140px;">
                                                                                        <a href="home3.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/gawns2.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>Gawns</p>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center; min-height: 140px;">
                                                                                        <a href="home4.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/dress-material2.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>Dress Materials</p>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center; min-height: 140px;">
                                                                                        <a href="home5.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/bottom2.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>Bottoms</p>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center; min-height: 140px;">
                                                                                        <a href="home6.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/nightwear2.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>Night Wear </p>
                                                                                        </a>
                                                                                    </div>
                                                                                      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center; min-height: 140px;">
                                                                                        <a href="home6.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/women-sandles2.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>Footware </p>
                                                                                        </a>
                                                                                    </div>
                                                                                      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center; min-height: 140px;">
                                                                                        <a href="home6.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/women-accessories2.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>Accessories </p>
                                                                                        </a>
                                                                                    </div>
                                                                                     
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                       
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                           
                                                                <li class="full-width menu-home with-sub-menu hover">
                                                                <p class='close-menu'></p>
                                                                <a href="#" class="clearfix">
                                                                    <strong>
                                                                      Kid's
                                                                    </strong>
                                                                    <b class='caret'></b>
                                                                </a>
                                                                <div class="sub-menu" style="width: 900px">
                                                                    <div class="content">
                                                                        <div class="row">
                                                                                                     <div class="col-sm-12 ">
                                                                             
                                                                               <hr>
                                                                                <div class="html ">
                                                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center; min-height: 140px;">
                                                                                        <a href="index.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/kid-boys2.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>Boy's</p>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" style="text-align: center;min-height: 140px;">
                                                                                        <a href="home2.html" title="" style="font-size: 12px;text-transform: uppercase;font-weight: bold;text-align: center;">
                                                                                            <img src="image/kids-girls2.jpg" alt="layout" style="margin: 0 0 10px; display: inline-block">
                                                                                            <p>Girl's</p>
                                                                                        </a>
                                                                                    </div>
                                                                         
                                                                                   
                                                                                </div>
                                                                            </div>
                                                                          
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            
                                                            
                                                                <li class=" ">
                                                                <p class='close-menu'></p>
                                                                <a href="#" class="clearfix">
                                                                    <strong>
                                                                     Gadgets
                                                                    </strong>
                                                                    <b class='caret'></b>
                                                                </a>
                                                 
                                                            </li>
                                                            
                                                            
                                                            
                                                            <br>
                                                          <?php if(isset($_SESSION['login'])) { ?>
                                                            <hr>
                                                                          <li class="">
                                                                <p class=''></p>
                                                                <a href="#" class="">
                                                                    <strong>
                                                                       My Account
                                                                    </strong></a>
                                                              </li>
                                                                        <li class="">
                                                                <p class=''></p>
                                                                <a href="#" class="">
                                                                    <strong>
                                                                       My Cart
                                                                    </strong></a>
                                                              </li>
                                                                 <li class="">
                                                                <p class=''></p>
                                                                <a href="#" class="">
                                                                    <strong>
                                                                      My Orders
                                                                    </strong></a>
                                                              </li>
                                                               <li class="">
                                                                <p class=''></p>
                                                                <a href="#" class="">
                                                                    <strong>
                                                                       Contact us
                                                                    </strong></a>
                                                              </li>
                                                          <?php } ?>
                                                        </ul>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                          
                                        </div>
                                    </nav>
                                </div>
                            </div>
                             
                                <a href="#"><img src="image/final.png" alt="Your Store" width="100" height="" title="Your Store"></a>
                          
                        </div>
                       
                        <div class="col-lg-2 col-xs-6 header-sevices">
                            <div class="module html--sevices ">
                                <div class="clearfix sevices-menu">
                                    <ul>
                                        <li class="col-md-4 item home">
                                            <div class="icon"></div>
                                            <div class="text">
                                                <a>100 S Manhattan St, Amarillo,</a><a>
                                                </a>
                                                <p><a>TX 79104, North America</a></p>
                                                <a>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="col-md-4 item mail">
                                            <div class="icon"> </div>
                                            <div class="text">
                                                <a class="name" href="#">Sales@MagenTech.Com</a>
                                                <p>( +123 ) 456 7890</p>
                                            </div>
                                        </li>
                                        <li class="col-md-4 item delivery">
                                            <div class="icon"> </div>
                                            <div class="text">
                                                <a class="name" href="#">Free Delivery</a>
                                                <p>On order over $89.00</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-xs-4 header-cart crt-hide">
                            <div class="shopping_cart">
                                <div id="cart" class="btn-shopping-cart">
                                    <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle" data-toggle="dropdown">
                                        <div class="shopcart">
                                            <a href="#"><i class="fa fa-shopping-cart crt2"></i></a>
                                            <div class="cart-info">
                                                <h2 class="title-cart">Shopping cart</h2>
                                                <h2 class="title-cart2 hidden">My Cart</h2>
                                                <span class="total-shopping-cart cart-total-full">
                                                    <span class="items_cart">2 </span>
                                                    <span class="items_cart2">item(s)</span>
                                                    <span class="items_carts"> - $206.80</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu pull-right shoppingcart-box">
                                        <li class="content-item">
                                            <table class="table table-striped" style="margin-bottom:10px;">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center size-img-cart">
                                                            <a href="product.html"><img src="image/catalog/demo/product/travel/10-54x54.jpg" alt="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" title="Bougainvilleas on Lombard Street,  San Francisco, Tokyo" class="img-thumbnail"></a>
                                                        </td>
                                                        <td class="text-left"><a href="product.html">Bougainvilleas on Lombard Street, San Francisco, Tokyo</a>
                                                            <br> - <small>Size M</small> </td>
                                                        <td class="text-right">x1</td>
                                                        <td class="text-right">$120.80</td>
                                                        <td class="text-center">
                                                            <button type="button" title="Remove" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-striped" style="margin-bottom:10px;">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center size-img-cart">
                                                            <a href="product.html"><img src="image/catalog/demo/product/travel/2-54x54.jpg" alt="Canada Travel One or Two European Facials at  Studio" title="Canada Travel One or Two European Facials at  Studio" class="img-thumbnail"></a>
                                                        </td>
                                                        <td class="text-left"><a href="product.html">Canada Travel One or Two European Facials at Studio</a>
                                                            <br> - <small>Size M</small> </td>
                                                        <td class="text-right">x1</td>
                                                        <td class="text-right">$86.00</td>
                                                        <td class="text-center">
                                                            <button type="button" title="Remove" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <div class="checkout clearfix">
                                                <a href="cart.html" class="btn btn-view-cart inverse"> View Cart</a>
                                                <a href="checkout.html" class="btn btn-checkout pull-right">Checkout</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Header Top -->
            <!-- Header center -->
            <div class="header-center">
                <div class="container">
                    <div class="row ">
                        <!-- Menuhome -->
                        <div class="col-lg-8 col-md-8 col-sm-1 col-xs-3 header-menu mb-hide">
                            <div class="megamenu-style-dev megamenu-dev">
                                <div class="responsive">
                                    <nav class="navbar-default">
                                        <div class="container-megamenu horizontal">
                                            <div class="navbar-header">
                                                <button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                            <div class="megamenu-wrapper">
                                                <span id="remove-megamenu" class="fa fa-times"></span>
                                                <div class="megamenu-pattern">
                                                    <div class="container">
                                                        <ul class="megamenu" data-transition="slide" data-animationtime="500">
                                                            <li class="full-width menu-home with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a href="#" class="clearfix">
                                                                    <strong>
                                                                        Home
                                                                    </strong>

                                                                </a>

                                                            </li>
                                                            <li class="full-width option2 with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a class="clearfix">
                                                                    <strong>
                                                                        Men's Fasion
                                                                    </strong>
                                                                    <span class="labelopencart"></span>
                                                                    <b class="caret"></b>
                                                                </a>
                                                                <div class="sub-menu" style="width: 30%;">
                                                                    <div class="content">
                                                                        <ul class="row-list">
                                                                            <li><a href="#">Shirts</a></li>
                                                                            <li><a href="#">Casual Pants</a></li>
                                                                            <li><a href="#">T-Shirts</a></li>
                                                                            <li><a href="#">Jeans</a></li>
                                                                            <li><a href="#">Jackets &amp; Sweaters</a></li>
                                                                            <li><a href="#">Track Pants</a></li>
                                                                            <li><a href="#">Accessories</a></li>
                                                                            <li><a href="#">Foot Wear</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="item-style1 content-full with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a class="clearfix">
                                                                    <strong>
                                                                        Women's Fasion
                                                                    </strong>
                                                                    <span class="labelNew"></span>
                                                                    <b class="caret"></b>
                                                                </a>
                                                                <div class="sub-menu" style="width: 30%; right: 0px;">
                                                                    <div class="content">
                                                                        <ul class="row-list">
                                                                            <li><a href="#">Kurtas &amp; Kurties</a></li>
                                                                            <li><a href="#">Saree</a></li>
                                                                            <li><a href="#">Gawns</a></li>
                                                                            <li><a href="#">Dress Materials</a></li>
                                                                            <li><a href="#">Bottoms</a></li>
                                                                            <li><a href="#">Night Wear</a></li>
                                                                            <li><a href="#">Accessories</a></li>
                                                                            <li><a href="#">Foot Wear</a></li>
                                                                        </ul>
                                                                        <div class="border"></div>

                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="item-style1 content-full with-sub-menu hover">
                                                                <p class="close-menu"></p>
                                                                <a class="clearfix">
                                                                    <strong>
                                                                        Kid's Fasion
                                                                    </strong>
                                                                    <span class="labelNew"></span>
                                                                    <b class="caret"></b>
                                                                </a>
                                                                <div class="sub-menu" style="width: 30%; right: 0px;">
                                                                    <div class="content">
                                                                        <ul class="row-list">
                                                                            <li><a href="#">Boy's Dresses</a></li>
                                                                            <li><a href="#">Girl's Dresses</a></li>

                                                                            <li><a href="#">Boy's FootWear</a></li>
                                                                            <li><a href="#">Girl's FootWear</a></li>
                                                                        </ul>
                                                                        <div class="border"></div>

                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!--Searchhome-->
                        <div class="col-lg-4 col-md-4 col-sm-11 col-xs-9 header-search">
                            <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                                <form method="GET" action="index.php">
                                    <div id="search0" class="search input-group form-group">
                                        <div class="select_category filter_type  icon-select">
                                            <select class="no-border" name="category_id">
                                                <option value="0">All Categories </option>
                                                <option value="82 ">Book Stationery </option>
                                                <option value="65">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Girls New </option>
                                                <option value="56">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kitchen </option>
                                                <option value="61">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pearl mens </option>
                                                <option value="38 ">Laptop &amp; Notebook </option>
                                                <option value="52 ">Spa &amp; Massage </option>
                                                <option value="44">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Latenge mange </option>
                                                <option value="53">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Necklaces </option>
                                                <option value="54">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pearl Jewelry </option>
                                                <option value="55">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Slider 925 </option>
                                                <option value="24">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phones &amp; PDAs </option>
                                                <option value="59 ">Sport &amp; Entertaiment </option>
                                                <option value="69">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Camping &amp; Hiking </option>
                                                <option value="70">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cusen mariot </option>
                                                <option value="74">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Engite nanet </option>
                                                <option value="64">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fashion </option>
                                                <option value="66">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Men </option>
                                                <option value="60 ">Travel &amp; Vacation </option>
                                                <option value="71">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Best Tours </option>
                                                <option value="72">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cruises </option>
                                                <option value="73">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Destinations </option>
                                                <option value="67">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hotel &amp; Resort </option>
                                                <option value="63">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Infocus </option>
                                                <option value="18 ">Laptops &amp; Notebooks </option>
                                                <option value="46">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Macs </option>
                                                <option value="45">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Windows </option>
                                                <option value="34 ">Food &amp; Restaurant </option>
                                                <option value="47">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hanet magente </option>
                                                <option value="43">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Knage unget </option>
                                                <option value="48">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Punge nenune </option>
                                                <option value="49">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qunge genga </option>
                                                <option value="50">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tange manue </option>
                                                <option value="51">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Web Cameras </option>
                                                <option value="39 ">Shop Collection </option>
                                                <option value="40">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hanet magente </option>
                                                <option value="41">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Knage unget </option>
                                                <option value="42">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Latenge mange </option>
                                                <option value="58">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Punge nenune </option>
                                                <option value="17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Qunge genga </option>
                                                <option value="57">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tange manue </option>
                                                <option value="35 ">Fashion &amp; Accessories </option>
                                                <option value="36">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dress Ladies </option>
                                                <option value="31">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jean </option>
                                                <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Men Fashion </option>
                                                <option value="88">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T-shirt </option>
                                                <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Trending </option>
                                                <option value="37">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Western Wear </option>
                                                <option value="20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Women Fashion </option>
                                                <option value="32">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bags </option>
                                                <option value="33 ">Digital &amp; Electronics </option>
                                                <option value="83">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cell Computers </option>
                                                <option value="84">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Computer Accessories </option>
                                                <option value="85">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Computer Headsets </option>
                                                <option value="86">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Desna Jacket </option>
                                                <option value="87">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Electronics </option>
                                                <option value="89">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Headphone </option>
                                                <option value="90">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Laptops </option>
                                                <option value="78">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mobiles </option>
                                                <option value="79">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sound </option>
                                                <option value="80">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; USB &amp; HDD </option>
                                                <option value="81">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; VGA and CPU </option>
                                                <option value="62">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Video &amp; Camera </option>
                                                <option value="76">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Video You </option>
                                                <option value="75">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wireless Speakers </option>
                                                <option value="29">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Camera New </option>
                                                <option value="28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Case </option>
                                                <option value="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cell &amp; Cable </option>
                                                <option value="77">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mobile &amp; Table </option>
                                                <option value="25">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bluetooth Speakers </option>
                                            </select>
                                        </div>
                                        <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search" name="search">

                                        <span class="input-group-btn">
                                            <button type="submit" class="button-search btn btn-default btn-lg" name="submit_search"><i class="fa fa-search"></i><span class="hidden">Search</span></button>
                                        </span>
                                    </div>
                                    <input type="hidden" name="route" value="product/search">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Header center -->

        </header>