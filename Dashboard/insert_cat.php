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

 Categories / Insert Categories

</li>

</ol><!-- breadcrumb Ends -->
</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
<div class="col-lg-3">
    
</div><!-- col-lg-3 Starts -->
<div class="col-lg-9"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Category Title</label>

<div class="col-md-6">

<input type="text" name="cat_title" class="form-control" autocomplete="off">

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-offset-1 col-md-3">

<input type="submit" name="submit" value="Insert Category" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

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

<?php

if(isset($_POST['submit'])){

$cat_title = $_POST['cat_title'];

$insert_cat = "insert into categories (cat_title) values ('$cat_title')";

$run_cat = mysqli_query($con,$insert_cat);

if($run_cat){

echo "<script> alert('New Category Has Been Inserted')</script>";

echo "<script> window.open('index.php?insert_cat','_self') </script>";

}

}

?>
<?php } ?>