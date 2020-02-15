<?php
if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}
else {
    $users = "select * from users";
    $resultOfUsers = mysqli_query($con,$users);
    $numberOfRows = mysqli_num_rows($resultOfUsers);


    $products = "select * from products";
    $resultOfProducts = mysqli_query($con,$products);
    $numberOfProducts = mysqli_num_rows($resultOfProducts);
        
    $customerOrders = "select * from customers_orders";
    $resultOfCustomerOrders = mysqli_query($con,$customerOrders);
    

    $numberOfCustomerOrders = mysqli_num_rows($resultOfCustomerOrders);


  ?>
    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">

            <!--Start Dashboard Content-->

            <div class="row mt-4">
                <div class="col-12 col-lg-6 col-xl-3">
                     <div class="card gradient-scooter">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body text-left">
                                    <h4 class="text-white"><?php echo $numberOfRows; ?></h4>
                                    <span class="text-white">Customers</span>
                                </div>
                                <div class="align-self-center"><span id="dash-chart-2"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                   
                    <div class="card gradient-purpink">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body text-left">
                                    <h4 class="text-white"><?php echo $numberOfProducts; ?></h4>
                                    <span class="text-white">Products</span>
                                </div>
                                <div class="align-self-center"><span id="dash-chart-1"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card gradient-ibiza">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body text-left">
                                    <h4 class="text-white"><?php echo $numberOfCustomerOrders; ?></h4>
                                    <span class="text-white">Orders</span>
                                </div>
                                <div class="align-self-center"><span id="dash-chart-3"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card gradient-ohhappiness">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body text-left">
                                    <h4 class="text-white">3524</h4>
                                    <span class="text-white">Payments</span>
                                </div>
                                <div class="align-self-center"><span id="dash-chart-4"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            Recent Orders
                            <div class="card-action">
                                <div class="dropdown">
                                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                                        <i class="icon-options"></i>
                                    </a>
                                    <div class="dropdown-menu animated fadeIn dropdown-menu-right">
                                        <a class="dropdown-item" href="index.php?view_orders">View All</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">

                            <table class="table align-items-center table-flush">
                                <thead class="thead-warning shadow-warning">
                                <tr>
                                    <th>Id</th>
                                    <th>Photo</th>
                                    <th>Product</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <?php while($row = mysqli_fetch_array($resultOfCustomerOrders)) {
                                    $productId = $row['product_id'];
                                    $getSingleProduct = "select * from products where id = $productId ";
                                    $resultOfSingleProduct = mysqli_query($con,$getSingleProduct);
                                     
                                     $dataOfSingleProduct = mysqli_fetch_array($resultOfSingleProduct);
                                    
                                    ?>
                                <tr>
                                    <td><?php echo $dataOfSingleProduct['id'] ?></td>
                                    <td>
                                        <img alt="Image placeholder" src="./product_images/<?php echo $dataOfSingleProduct['image_1'] ?>" class="product-img" alt="product img" style="height:50px;width:50px;">
                                    </td>
                                    <td><?php echo $dataOfSingleProduct['product_title'] ?></td>
                                    <td>&#8377;<?php echo $dataOfSingleProduct['price'] ?></td>
                                    <td><?php echo $row['order_date'] ?></td>
                                </tr>
                                <?php } ?>
                                
                                
                                
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->
            <!--End Dashboard Content-->

        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->
      <?php include("includes/footer.php");  ?>
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->


<?php } ?>