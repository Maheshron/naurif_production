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

Admin Management / View Admins

</li>

</ol><!-- breadcrumb Ends -->


</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h4 class="panel-title" >

<i class="fa fa-money fa-fw"></i> View Admins

</h4>

</div><!-- panel-heading Ends -->
<div class="panel-body card" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead class="thead-warning shadow-warning"><!-- thead Starts -->

<tr>

<th>Admin Name</th>

<th>Admin Email</th>

<th>Admin Image</th>

<th>Admin Contact Number</th>

<th>Delete</th>
<th>Edit </th>


</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$get_admin = "select * from admins";

$run_admin = mysqli_query($con,$get_admin);

while($row_admin = mysqli_fetch_array($run_admin)){

$admin_id = $row_admin['admin_id'];

$admin_name = $row_admin['admin_name'];

$admin_email = $row_admin['admin_email'];

$admin_image = $row_admin['admin_image'];

$admin_contact= $row_admin['admin_contact'];



?>

<tr>

<td><?php echo $admin_name; ?></td>

<td><?php echo $admin_email; ?></td>
<?php if($admin_image !=''){?>
<td><img src="product_images/<?php echo $admin_image; ?>" width="60" height="60" ></td>
<?php }else{ ?>
<td><h6>Not Uploaded</h6></td>
<?php } ?>
<td><?php echo $admin_contact; ?></td>

<td>

<a href="index.php?user_delete=<?php echo $admin_id; ?>" >

 Delete

</a>

</td>
<td>

<a href="index.php?adminEditProfile=<?php echo $admin_id; ?>" >

 Edit

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