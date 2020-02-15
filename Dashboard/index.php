<?php

session_start();

include("includes/db.php");

if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}

else {




    ?>

    <?php

    $admin_session = $_SESSION['admin_email'];

    $get_admin = "select * from admins  where admin_email='$admin_session'";

    $run_admin = mysqli_query($con,$get_admin);

    $row_admin = mysqli_fetch_array($run_admin);

    $admin_id = $row_admin['admin_id'];

    $admin_name = $row_admin['admin_name'];

    $admin_email = $row_admin['admin_email'];

    $new_admin_image = $row_admin['admin_image'];


    $admin_image = $row_admin['admin_image'];

    $admin_pass = $row_admin['admin_pass'];

    $admin_contact = $row_admin['admin_contact'];




    ?>


    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Nauriff</title>
        <!--favicon-->
        <link rel="icon" href="assets/images/logo-2.png" type="image/x-icon">
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

    </head>

    <body >

    <div id="wrapper"><!-- wrapper Starts -->

        <?php include("includes/sidebar.php");  ?>
        <?php

                if(isset($_GET['dashboard'])){

                    include("dashboard.php");

                }
                if(isset($_GET['adminProfile'])){

                    include("adminProfile.php");

                }
        if(isset($_GET['adminEditProfile'])){

            include("adminEditProfile.php");

        }
         if(isset($_GET['insert_cat'])){

            include("insert_cat.php");

        }
        if(isset($_GET['sliderimages'])){

            include("sliderimages.php");

          
        }
        if(isset($_GET['view_slider'])){

            include("viewslider.php");

        }

        if(isset($_GET['view_cats'])){

            include("view_cats.php");

        } if(isset($_GET['delete_cat'])){

            include("delete_cat.php");

        }
        if(isset($_GET['edit_cat'])){

            include("edit_cat.php");

        }
         if(isset($_GET['insert_p_cat'])){

            include("insert_p_cat.php");

        }
        if(isset($_GET['view_p_cats'])){

            include("view_p_cats.php");

        }
        if(isset($_GET['edit_p_cat'])){

            include("edit_p_cat.php");

        }
         if(isset($_GET['delete_p_cat'])){

            include("delete_p_cat.php");

        }
        if(isset($_GET['deletes'])){
            include('deletes.php');
        }
         if(isset($_GET['insert_product'])){

            include("insert_product.php");

        }
        if(isset($_GET['view_products'])){

            include("view_products.php");

        }
          if(isset($_GET['edit_product'])){

            include("edit_product.php");

        }
        if(isset($_GET['delete_product'])){

            include("delete_product.php");

        }
        if(isset($_GET['view_customers'])){

            include("view_customers.php");

        }
        if(isset($_GET['insert_user'])){

            include("insert_user.php");

        }
        if(isset($_GET['view_users'])){

            include("view_users.php");

        }
         if(isset($_GET['user_delete'])){

            include("user_delete.php");

        }
        if(isset($_GET['view_orders'])){

            include("view_orders.php");

        }
        ?>
    </div><!-- wrapper Ends -->
    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- waves effect js -->
    <script src="assets/js/waves.js"></script>
    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>
    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>

    <!-- Vector map JavaScript -->
    <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Sparkline JS -->
    <script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
    <!-- Chart js -->
    <script src="assets/plugins/Chart.js/Chart.min.js"></script>
    <!--notification js -->
    <script src="assets/plugins/notifications/js/lobibox.min.js"></script>
    <script src="assets/plugins/notifications/js/notifications.min.js"></script>
    <!-- Index js -->
    <script src="assets/js/index.js"></script>

    </body>

   
    </html>


<?php } ?>