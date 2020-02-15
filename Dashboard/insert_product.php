<?php


if(!isset($_SESSION['admin_email'])){


    echo "<script>window.open('login.php','_self')</script>";

}

else {
          echo $_SERVER['REMOTE_ADDR'];
          $ar = [1,2,33,4];
          
    ?>
    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">

            <!--Start Dashboard Content-->

<div class="row" ><!-- 1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

 Products / Insert Products

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

                                    <input type="text" name="product_title" class="form-control" autocomplete="off" required >

                                </div><!-- form-group Ends -->
                               
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label  for="exampleInputEmail1"> Category </label>

                                    <select name="cat" id="type" class="form-control" required>

                                        <option> Select  Category </option>

                                        <?php

                                        $get_cats = "select * from ".categories."  order by cat_id asc ";

                                        $run_cats = mysqli_query($con,$get_cats);

                                        while ($row_cats=mysqli_fetch_array($run_cats)) {

                                            $cat_id = $row_cats['cat_id'];

                                            $cat_title = $row_cats['cat_title'];

                                            echo "<option value='$cat_id'  >$cat_title</option>";

                                        }

                                        ?>

                                    </select>

                                </div><!-- form-group Ends -->
                                 
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label for="exampleInputEmail1"> Sub Category </label>

                                    <select name="sub_cat" id="type1" class="form-control" required>

                                        <option> Select Sub Category </option>

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

                            <label  for="exampleInputEmail1">   SIZE MODULE </label>

                            <select name="sizevariation" id="size" class="form-control" required>
                                   
                                <option> Select  Size module </option>
                                    <option value="n">(32,34,36,38,40)</option>
                                    <option value="s">(S,M,L,XL,XXL,XXXL)</option>
                                

                            </select>

                            </div>


  
                               <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Small Size (Quantity)</label>

                                    <input type="text" name="small_size" class="form-control" autocomplete="off">

                                </div><!-- form-group Ends -->
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Medium Size (Quantity)</label>

                                    <input type="text" name="medium_size" class="form-control" autocomplete="off">

                                </div><!-- form-group Ends -->
                               <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Large Size (Quantity) </label>

                                    <input type="text" name="large_size" class="form-control" autocomplete="off">

                                </div><!-- form-group Ends -->
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Extra Large (Quantity) </label>

                                    <input type="text" name="extra_large_size" class="form-control" autocomplete="off">

                                </div><!-- form-group Ends -->
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > 2 Extra Extra Large (Quantity) </label>

                                    <input type="text" name="extra_extra_large_size" class="form-control" autocomplete="off">

                                </div>
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > 3 Extra Extra Large (Quantity) </label>

                                    <input type="text" name="xxl3" class="form-control" autocomplete="off">

                                </div>
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > 4 Extra Extra Large (Quantity) </label>

                                    <input type="text" name="xxl4" class="form-control" autocomplete="off">

                                </div>
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > 5 Extra Extra Large (Quantity) </label>

                                    <input type="text" name="xxl5" class="form-control" autocomplete="off">

                                </div>
                                
                                <!-- form-group Ends -->
                                 <!-- <div class="form-group" >

                                    <label class="control-label" >Dupatta Length(Meters) </label>

                                    <input type="text" name="dupatta_length" class="form-control" autocomplete="off">

                                </div> -->
                            </div><!-- col-md-9 Ends -->

                            <div class="col-md-3"><!-- col-md-3 Starts -->
                             
                               
                                 <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Product Price </label>

                                    <input type="text" name="product_price" class="form-control" autocomplete="off">

                                </div><!-- form-group Ends -->
                                  <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Product Discount </label>

                                    <input type="text" name="discount" class="form-control" autocomplete="off">

                                </div><!-- form-group Ends -->
                               
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" >Description</label>

                                    <textarea name="description" id="" cols="30" rows="10">
                                    
                                    </textarea>

                                </div><!-- form-group Ends -->
                               
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Product Image 1 </label>

                                    <input type="file" name="product_img1" class="form-control" required >

                                </div><!-- form-group Ends -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Product Image 2 </label>


                                    <input type="file" name="product_img2" class="form-control">

                                </div><!-- form-group Ends -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Product Image 3 </label>

                                    <input type="file" name="product_img3" class="form-control">

                                </div><!-- form-group Ends -->
                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="control-label" > Product Image 4 </label>

                                    <input type="file" name="product_img4" class="form-control">

                                </div>
                                
                    <div class="form-group" ><!-- form-group Starts -->

                    <label class="control-label" > video </label>

                    <input type="file" name="video" class="form-control">

                    </div>
                                
                                <!-- form-group Ends -->
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

                            <input type="submit" name="submit" value="Insert Product" class="btn btn-primary " >

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
                
        $product_title = mysqli_real_escape_string($con, $_POST['product_title']);

        $cat = mysqli_real_escape_string($con, $_POST['cat']);

        $sub_cat = mysqli_real_escape_string($con, $_POST['sub_cat']);

        $small_size = mysqli_real_escape_string($con, $_POST['small_size']);

        $medium_size = mysqli_real_escape_string($con, $_POST['medium_size']);
        
        $large_size = mysqli_real_escape_string($con, $_POST['large_size']);

        $extra_large_size = mysqli_real_escape_string($con, $_POST['extra_large_size']);

        $extra_extra_large_size = mysqli_real_escape_string($con, $_POST['extra_extra_large_size']);

        $product_price = mysqli_real_escape_string($con, $_POST['product_price']);

        $discount = mysqli_real_escape_string($con, $_POST['discount']);

        $description = mysqli_real_escape_string($con, $_POST['description']);

         $xxl3 = $_POST['xxl3'];
         $xxl4 = $_POST['xxl4'];
         $xxl5 = $_POST['xxl5'];
         $video = $_FILES['video']['name'];
         $tmp_video = $_FILES['video']['tmp_name'];
         $sizevariation = $_POST['sizevariation'];

        echo  move_uploaded_file($tmp_video,"/product_images/video/$video");
        

        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];
        $product_img4 = $_FILES['product_img4']['name'];
       
 


        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        $temp_name3 = $_FILES['product_img3']['tmp_name'];
        $temp_name4 = $_FILES['product_img4']['tmp_name'];
        

        $allowed = array('jpeg','jpg','gif','png');

        $product_img1_extension = pathinfo($product_img1, PATHINFO_EXTENSION);

        $product_img2_extension = pathinfo($product_img2, PATHINFO_EXTENSION);

        $product_img3_extension = pathinfo($product_img3, PATHINFO_EXTENSION);

        $product_img4_extension = pathinfo($product_img4, PATHINFO_EXTENSION);
          

        if(!in_array($product_img1_extension,$allowed)){

            echo "<script> alert('Your Product Image 1 File Extension Is Not Supported.'); </script>";

            $product_img1 = "";

        }else{

            move_uploaded_file($temp_name1,"product_images/$product_img1");

        }

        if(!empty($product_img2)){

            if(!in_array($product_img2_extension,$allowed)){

                echo "<script> alert('Your Product Image 2 File Extension Is Not Supported.'); </script>";

                $product_img2 = "";

            }else{

                move_uploaded_file($temp_name2,"product_images/$product_img2");

            }

        }

        if(!empty($product_img3)){

            if(!in_array($product_img3_extension,$allowed)){

                echo "<script> alert('Your Product Image 3 File Extension Is Not Supported.'); </script>";

                $product_img3 = "";

            }else{

                move_uploaded_file($temp_name3,"product_images/$product_img3");

            }

        }
        if(!empty($product_img4)){

            if(!in_array($product_img4_extension,$allowed)){

                echo "<script> alert('Your Product Image 4 File Extension Is Not Supported.'); </script>";

                $product_img4 = "";

            }else{

                move_uploaded_file($temp_name4,"product_images/$product_img4");

            }

        }
        
      


        $insert_product = "insert into products (product_title,cat_id,sub_cat_id,small_size,medium_size,large_size,extra_large_size,extra_extra_large_size,price,discount,description,image_1,image_2,image_3,image_4,xxl3,xxl4,xxl5,video,size_variation) values('$product_title','$cat','$sub_cat','$small_size','$medium_size','$large_size','$extra_large_size','$extra_extra_large_size','$product_price','$discount','$description','$product_img1','$product_img2','$product_img3','$product_img4','$xxl3','$xxl4','$xxl5','$video','$sizevariation')";

        $run_product = mysqli_query($con,$insert_product);

        if($run_product){

            echo "<script>alert('Product has been inserted successfully')</script>";

            echo "<script>window.open('index.php?insert_product','_self')</script>";

        }

    }

    ?>

<?php } ?>
<script type="text/javascript">
    jQuery('select[name="parent"]').change(get_child_options);
</script>
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