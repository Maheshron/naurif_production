<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
  <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">

            <!--Start Dashboard Content-->

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

Products / View Products

</li>

</ol><!-- breadcrumb Ends -->


</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h4 class="panel-title" >

<i class="fa fa-money fa-fw"></i> View Products

</h4>

</div><!-- panel-heading Ends -->
<div class="panel-body card"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead class="thead-warning shadow-warning"><!-- thead Starts -->

<tr>
    
<th>Id</th>

<th>Order Id</th>

<th>Payment Id</th>

<th>Customer Id</th>

<th>Product Id</th>

<th>Quantity</th>

<th>Amount Paid</th>

<th>Order Date</th>

<th>Email</th>

<th>Contact</th>

<th>Address</th>

<th>Delete</th>


</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_pro = "select * from customers_orders ORDER BY id";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){
    
$order_id= $row_pro['id'];

$razorpay_order_id = $row_pro['razorpay_order_id'];

$payment_id = $row_pro['payment_id'];

$customer_id = $row_pro['customer_id'];

$amount = $row_pro['amount'];

$product_id = $row_pro['product_id'];

$qty = $row_pro['qty'];

$order_date = $row_pro['order_date'];

$mail = $row_pro['mail'];

$contact = $row_pro['contact'];

$address = $row_pro['address'];

$i++;




?>

<tr>
<td><?php echo $order_id; ?></td>

<td><?php echo $razorpay_order_id; ?></td>

<td  ><?php echo $payment_id; ?></td>

<td><?php echo $customer_id; ?></td>

<td><?php echo $product_id; ?></td>

<td><?php echo $qty; ?></td>

<td>Rs <?php echo $amount; ?></td>

<td><?php echo $order_date; ?></td>

<td><?php echo $mail; ?></td>

<td><?php echo $contact; ?></td>

<td><?php echo $address; ?></td>

<td class="text-center">

<a href="index.php?order_delete=<?php echo $order_id; ?>" >

<i class="fa fa-trash-o" ></i>

</a>

</td>


</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->


<!--End Dashboard Content-->

 </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

<?php } ?>