<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['edit_product'])){

$edit_id = $_GET['edit_product'];

$get_p = "select * from products where id='$edit_id'";

$run_edit = mysqli_query($con,$get_p);

$row_edit = mysqli_fetch_array($run_edit);

$p_id = $row_edit['id'];

$title = $row_edit['product_title'];
$cat = $row_edit['cat_id'];
$scat = $row_edit['sub_cat_id'];
$ss = $row_edit['small_size'];
$ms = $row_edit['medium_size'];
$ls = $row_edit['large_size'];
$els = $row_edit['extra_large_size'];
$eels = $row_edit['extra_extra_large_size'];
$price = $row_edit['price'];
$discount = $row_edit['discount'];
$description = $row_edit['description'];
$img1 = $row_edit['image_1'];
$img2 = $row_edit['image_2'];
$img3 = $row_edit['image_3'];
$img4 = $row_edit['image_4'];

$c = "select * from categories where cat_id = '$cat'";
$cr = mysqli_query($con,$c);
$d = mysqli_fetch_array($cr);
$cname = $d['cat_title'];

$c1 = "select * from subcategories where id = '$scat'";
$cr1 = mysqli_query($con,$c1);
$d1 = mysqli_fetch_array($cr1);
$cname1 = $d1['subcategorie'];
echo $cname1;


}



?>
    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">

            <!--Start Dashboard Content-->

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

 Products / Edit Product

</li>

</ol><!-- breadcrumb Ends -->


</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->
<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-body"><!-- panel-body Starts -->

 <form method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

 <div class="row"><!-- row Starts -->

<div class="col-md-9"><!-- col-md-9 Starts -->

    <div class="form-group" ><!-- form-group Starts -->

        <label class="control-label" > Product Title </label>

        <input type="text" name="title" class="form-control" value="<?php echo $title; ?>" autocomplete="off" required >

    </div><!-- form-group Ends -->
   
     <div class="form-group" ><!-- form-group Starts -->

        <label  for="exampleInputEmail1"> Category </label>

        <select name="cat" id="type" class="form-control" required>

            <option value="<?php echo $cname; ?>"> <?php echo $cname; ?> </option>

            <?php

            $get_cats = "select * from ".categories."  order by cat_id asc ";

            $run_cats = mysqli_query($con,$get_cats);

            while ($row_cats=mysqli_fetch_array($run_cats)) {

                $cat_id = $row_cats['cat_id'];

                $cat_title = $row_cats['cat_title'];
                    ?>
                <option value='<?php echo $cat_id ?>'  ><?php echo $cat_title ?></option>

                    <?php

            }

            ?>

        </select>

    </div><!-- form-group Ends -->
     
    <div class="form-group" ><!-- form-group Starts -->

        <label for="exampleInputEmail1"> Sub Category </label>

        <select name="sub_cat" id="type1" class="form-control">

            <option value="<?php echo $cname1 ?>"><?php echo $cname1; ?></option>

<!--                                        --><?php
//
//                                        $get_p_cats = "select * from product_categories WHERE parent=0 ORDER BY p_cat_id";
//
//                                        $run_p_cats = mysqli_query($con,$get_p_cats);
//
//                                        while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
//
//                                            $p_cat_id = $row_p_cats['p_cat_id'];
//
//                                            $p_cat_title = $row_p_cats['p_cat_title'];
//
//                                            echo "<option value='$p_cat_id'  >$p_cat_title</option>";
//
//                                        }
//
//
//                                        ?>

        </select>
      </div><!-- form-group Ends -->
    
    <!-- <div class="form-group" >

        <label for="exampleInputEmail1" >Product Category </label>

        <select name="sub_cat" id="type2" class="form-control" required>

            <option> Select Product Category </option> -->
<!--                                        -->
<?php
//
//                                        $get_p_cats = "select * from product_categories WHERE parent>0 ORDER BY p_cat_id";
//
//                                        $run_p_cats = mysqli_query($con,$get_p_cats);
//
//                                        while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
//
//                                            $p_cat_id = $row_p_cats['p_cat_id'];
//
//                                            $p_cat_title = $row_p_cats['p_cat_title'];
//
//                                            echo "<option value='$p_cat_id'  >$p_cat_title</option>";
//
//                                        }
//
//
//                                        ?>

        <!-- </select> -->

    <!-- </div> -->
   <div class="form-group" ><!-- form-group Starts -->

        <label class="control-label" >Small Size (Quantity)</label>

        <input type="text" name="small_size" value="<?php echo $ss; ?>" class="form-control" autocomplete="off">

    </div><!-- form-group Ends -->
     <div class="form-group" ><!-- form-group Starts -->

        <label class="control-label" >Medium Size (Quantity)</label>

        <input type="text" name="medium_size" value="<?php  echo $ms; ?>" class="form-control" autocomplete="off">

    </div><!-- form-group Ends -->
   <div class="form-group" ><!-- form-group Starts -->

        <label class="control-label" >Large Size (Quantity) </label>

        <input type="text" name="large_size" class="form-control" value="<?php echo $ls; ?>" autocomplete="off">

    </div><!-- form-group Ends -->
    <div class="form-group" ><!-- form-group Starts -->

        <label class="control-label" > Extra Large (Quantity) </label>

        <input type="text" name="extra_large_size" class="form-control" value="<?php echo $els; ?>" autocomplete="off">

    </div><!-- form-group Ends -->
     <div class="form-group" ><!-- form-group Starts -->

        <label class="control-label" >Extra Extra Large (Quantity) </label>

        <input type="text" name="extra_extra_large_size" class="form-control" value="<?php echo $eels; ?>" autocomplete="off">

    </div><!-- form-group Ends -->
     <!-- <div class="form-group" >

        <label class="control-label" >Dupatta Length(Meters) </label>

        <input type="text" name="dupatta_length" class="form-control" autocomplete="off">

    </div> -->
</div><!-- col-md-9 Ends -->

<div class="col-md-3"><!-- col-md-3 Starts -->
 
   
     <div class="form-group" ><!-- form-group Starts -->

        <label class="control-label" > Product Price </label>

        <input type="text" name="product_price" class="form-control" value="<?php echo $price ?>" autocomplete="off">

    </div><!-- form-group Ends -->
      <div class="form-group" ><!-- form-group Starts -->

        <label class="control-label" > Product Discount </label>

        <input type="text" name="discount" value="<?php echo $discount; ?>" class="form-control" autocomplete="off">

    </div><!-- form-group Ends -->
   
    <div class="form-group" ><!-- form-group Starts -->

        <label class="control-label" >Description</label>

        <textarea name="description" value="" id="" cols="30" rows="10">
        <?php echo $description; ?>
        
        </textarea>

    </div><!-- form-group Ends -->
   
    <div class="form-group" ><!-- form-group Starts -->

        <label class="control-label" > Product Image 1 </label>

        <input type="file" name="product_img1" value="<?php echo $img1; ?>" class="form-control">
            <br>
            <?php if($img1 !=''){?><img src="product_images/<?php echo $img1; ?>" width="100" height="100" ><?php } ?>
    </div><!-- form-group Ends -->

    <div class="form-group" ><!-- form-group Starts -->

        <label class="control-label" > Product Image 2 </label>


        <input type="file" name="product_img2" class="form-control">
           <br>
           <?php if($img2 !=''){?><img src="product_images/<?php echo $img2; ?>" width="100" height="100" ><?php } ?>
    </div><!-- form-group Ends -->

    <div class="form-group" ><!-- form-group Starts -->

        <label class="control-label" > Product Image 3 </label>

        <input type="file" name="product_img3" class="form-control">
           <br>
           <?php if($img3 !=''){?><img src="product_images/<?php echo $img3; ?>" width="100" height="100" ><?php } ?>
    </div><!-- form-group Ends -->
    <div class="form-group" ><!-- form-group Starts -->

        <label class="control-label" > Product Image 4 </label>
               
        <input type="file" name="product_img4" class="form-control">
             <br>
             <?php if($img4 !=''){?><img src="product_images/<?php echo $img4; ?>" width="100" height="100" ><?php } ?>
    </div><!-- form-group Ends -->
     <!-- <div class="form-group" >

        <label class="control-label" > Product Image 5 </label>

        <input type="file" name="product_img5" class="form-control">

    </div> -->
     <!-- <div class="form-group" >

        <label class="control-label" > Product Image 6 </label>

        <input type="file" name="product_img6" class="form-control">

    </div> -->

</div><!-- col-md-3 Ends -->


</div><!-- row Ends -->

<div class="form-group text-center" ><!-- form-group Starts -->

<label class="control-label" ></label>

<input type="submit" name="update" value="Update Product" class="btn btn-primary " >

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

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $('#type').on("change",function () {
            var categoryId = $(this).find('option:selected').val();
            $.ajax({
                url: "ajaxx.php",
                type: "POST",
                data: "categoryId="+categoryId,
                success: function (response) {
                    console.log(response);
                    $("#type1").html(response);
                },
            });
        });

    });
    $(document).ready(function(){

        $('#type').on("change",function () {
            var subcategoryId = $(this).find('option:selected').val();

            $.ajax({
                url: "ajaxx.php",
                type: "POST",
                data: "subcategoryId="+subcategoryId,
                success: function (response) {
                    console.log(response);
                    $("#type2").html(response);
                },
            });
        });

    });

</script>










<?php

if(isset($_REQUEST['update'])){
    extract($_REQUEST);
    $id = $_GET['edit_product'];
  $title = $_POST['title'];
  

$product_img1 = $_FILES['product_img1']['name'];

$temp_name1 = $_FILES['product_img1']['tmp_name'];

if(empty($product_img1)){

$product_img1 = $img1;

}

move_uploaded_file($temp_name1,"product_images/$product_img1");
$product_img2 = $_FILES['product_img2']['name'];

$temp_name2= $_FILES['product_img2']['tmp_name'];

if(empty($product_img2)){

$product_img2 = $img2;

}

move_uploaded_file($temp_name2,"product_images/$product_img2");
$product_img3 = $_FILES['product_img3']['name'];

$temp_name3 = $_FILES['product_img3']['tmp_name'];

if(empty($product_img3)){

$product_img3 = $img3;

}

move_uploaded_file($temp_name3,"product_images/$product_img3");

$product_img4 = $_FILES['product_img4']['name'];

$temp_name4 = $_FILES['product_img4']['tmp_name'];

if(empty($product_img4)){

$product_img4 = $img4;

}

move_uploaded_file($temp_name4,"product_images/$product_img4");

$update_product = "update products set product_title='$title',cat_id = '$cat',sub_cat_id='$sub_cat',small_size='$small_size',medium_size='$medium_size',large_size='$large_size',extra_large_size='$extra_large_size',extra_extra_large_size='$extra_extra_large_size',price='$product_price',discount='$discount',description='$description',image_1='$product_img1',image_2='$product_img2',image_3='$product_img3',image_4='$product_img4' where id = '$id' ";

$run_product = mysqli_query($con,$update_product);

if($run_product){

echo "<script> alert('Product has been updated successfully') </script>";

echo "<script>window.open('index.php?view_products','_self')</script>";

}

}

?>

<?php } ?>
