<?php

$get_cats = "select * from categories ";

$run_cats = mysqli_query($con,$get_cats);
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

 Slider Images / Insert Slider Images

</li>

</ol><!-- breadcrumb Ends -->


</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->
<div class="col-lg-3">
    
</div><!-- col-lg-3 Starts -->
<div class="col-lg-9"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-body" ><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->


    <div class="form-group" ><!-- form-group Starts -->

        <label class="col-md-6 control-label" >Slider Image</label>

        <div class="col-md-6" >

            <input type="file" name="image" class="form-control" autocomplete="off">

        </div>


    </div>
    



<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-offset-1 col-md-4" >

<input type="submit" name="submit" value="Insert Slider Image" class="btn btn-primary form-control" >

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
$errors=array();
if(isset($_POST['submit'])) {
    
   
    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];
    
    $allowed = array('jpeg','jpg','gif','png');
    $img_extension = pathinfo($image, PATHINFO_EXTENSION);
    
    
    
    if(!in_array($img_extension,$allowed)){

        echo "<script> alert('Your Product Image 1 File Extension Is Not Supported.'); </script>";

        $image = "";

    }
    else
    {

        move_uploaded_file($tmp_image,"./product_images/$image");

    }
       
$insert_sub_cat = "insert into slide (image) values ('$image')";

$run_p_cat = mysqli_query($con,$insert_sub_cat);

if($run_p_cat){
    echo "<script>alert('inserted successfully');</script>";
}
echo "<script>window.open('index.php?view_slider','_self')</script>";








}
?>

<?php } ?>