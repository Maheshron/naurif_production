<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {
?>

    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
            <a href="index.php?dashboard">
                <h5 class="logo-text">NAURIF ECOMMERCE</h5>
            </a>
        </div>
        <div class="user-details">
            <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
                <div class="avatar"><img class="mr-3 side-user-img" src="./product_images/<?php echo $admin_image; ?>" alt="user avatar"></div>
                <div class="media-body">
                    <h6 class="side-user-name"><?php echo $admin_name; ?></h6>
                </div>
            </div>
            <div id="user-dropdown" class="collapse">
                <ul class="user-setting-menu">
                    <li><a href="index.php?adminProfile"><i class="icon-user"></i>  My Profile</a></li>
                    <!--<li><a href=""><i class="icon-settings"></i> Setting</a></li>-->
                    <li><a href="logout.php"><i class="icon-power"></i> Logout</a></li>
                </ul>
            </div>
        </div>
        <ul class="sidebar-menu do-nicescrol">
            <li class="sidebar-header">MAIN NAVIGATION</li>
            <li>
                <a href="index.php?dashboard" class="waves-effect">
                    <i class="icon-home"></i><span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="javaScript:void();" class="waves-effect">
                    <i class="fa fa-table"></i><span>Products</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="index.php?insert_product"><i class="fa fa-long-arrow-right"></i> Insert Product</a></li>
                    <li><a href="index.php?view_products"><i class="fa fa-long-arrow-right"></i> View Products</a></li>
                   
                </ul>
            </li>

            <li>
                <a href="javaScript:void();" class="waves-effect">
                    <i class="fa fa-sitemap"></i><span>Categories</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                      <li><a href="index.php?insert_cat"><i class="fa fa-long-arrow-right"></i> Insert Category</a></li>
                    <li><a href="index.php?view_cats"><i class="fa fa-long-arrow-right"></i> View Categories</a></li>
                   
                </ul>
            </li>
            <li>
                <a href="javaScript:void();" class="waves-effect">
                    <i class="fa fa-sitemap"></i><span>Add Slider Images</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                      <li><a href="index.php?sliderimages"><i class="fa fa-long-arrow-right"></i> Insert  Image</a></li>
                    <li><a href="index.php?view_slider"><i class="fa fa-long-arrow-right"></i> View Images</a></li>
                   
                </ul>
            </li>
        
            <li>
                <a href="javaScript:void();" class="waves-effect">
                    <i class="fa fa-sitemap"></i><span>Sub Categories</span>
                    <i class="fa fa-angle-left float-right"></i>
                </a>
                <ul class="sidebar-submenu">
                     <li><a href="index.php?insert_p_cat"><i class="fa fa-long-arrow-right"></i> Insert Sub Category</a></li>
                    <li><a href="index.php?view_p_cats"><i class="fa fa-long-arrow-right"></i> View Sub Categories</a></li>
                   
                </ul>
            </li>
            <li>
                <a href="index.php?view_orders" class="waves-effect">
                     <i class="icon-grid"></i><span>Order Management</span>
                 
                </a>

            </li>
            <li>
                <a href="index.php?view_customers" class="waves-effect">
                    <i class="fa fa-users"></i><span>User Management</span>
                   
                </a>
            </li>
            <li>
                <a href="javaScript:void();" class="waves-effect">
                       <i class="icon-user"></i><span>Admin Managment</span>
                    <i class="fa fa-angle-left float-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li><a href="index.php?insert_user"><i class="fa fa-long-arrow-right"></i> Insert Admin</a></li>
                    <li><a href="index.php?view_users"><i class="fa fa-long-arrow-right"></i> View Admins</a></li>
                   
                </ul>
            </li>
          
            <li class="sidebar-header">LABELS</li>
            <li><a href="#" class="waves-effect"><i class="icon-cloud-upload text-danger"></i><span>Help Center</span></a></li>
            <li><a href="#" class="waves-effect"><i class="fa fa-power-off text-warning"></i><span>Logout</span></a></li>
           
        </ul>

    </div>
    <header class="topbar-nav">
        <nav class="navbar navbar-expand fixed-top gradient-ibiza">
            <ul class="navbar-nav mr-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link toggle-menu" href="#">
                        <i class="icon-menu menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <form class="search-bar">
                        <input type="text" class="form-control" placeholder="Enter keywords">
                        <a href="#"><i class="icon-magnifier"></i></a>
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav align-items-center right-nav-link">
               
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                        <span class="user-profile"><img src="./product_images/<?php echo $admin_image; ?>" class="img-circle" alt="user avatar"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
                        <li class="dropdown-item user-details">
                            <a href="#">
                                <div class="media">
                                    <div class="avatar"><img class="align-self-start mr-3" src="./product_images/<?php echo $admin_image; ?>" alt="user avatar"></div>
                                    <div class="media-body">
                                        <h6 class="mt-2 user-title"><?php echo $admin_name; ?></h6>
                                        <p class="user-subtitle"><?php echo $admin_email; ?></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <a href="index.php?adminProfile"> <li class="dropdown-item"><i class="icon-user mr-2"></i> Profile</li></a>
                        <li class="dropdown-divider"></li>
                        <!--<li class="dropdown-item"><i class="icon-wallet mr-2"></i> Profile</li>-->
                        <!--<li class="dropdown-divider"></li>-->
                        <!--<li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>-->
                        <!--<li class="dropdown-divider"></li>-->
                        <a href="logout.php"> <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li></a>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

<?php } ?>