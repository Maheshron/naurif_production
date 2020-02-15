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

Sub Categories / View Sub-Categories

</li>

</ol><!-- breadcrumb Ends -->


</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h4 class="panel-title" >

<i class="fa fa-money fa-fw"></i> View Sub-Categories

</h4>

</div><!-- panel-heading Ends -->
<div class="panel-body card"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead class="thead-warning shadow-warning"><!-- thead Starts -->

<tr>

<th>Category Id</th>
<th>Category Title</th>

<th>Delete</th>
<th>Edit</th>
</tr>
</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$sql = "select * from subcategories";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)){ ?>
 
 <tr>

<td class="text-center"><?php echo $row['id']; ?></td>

<td class="text-center"><?php echo $row['subcategorie']; ?></td>


<td class="text-center">

<a href="index.php?delete_p_cat=<?php echo $row['id']; ?>" >

Delete

</a>

</td>

<td class="text-center">

<a href="index.php?edit_p_cat=<?php echo $row['id'];?>" >
Edit

</a>

</td>

</tr>

<?php 
}

?>

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