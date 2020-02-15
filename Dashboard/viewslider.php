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
<div class="panel-body card" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead class="thead-warning shadow-warning">

<tr>
<th>Product ID</th>

<th>Product Image</th>

<th>Delete</th>

</tr>

</thead>
 <?php
              $limit = 20;
              if (isset($_GET["page"])) {
                  $page = $_GET["page"];
              }
              else {
                  $page = 1;
              };
              $start_from = ($page - 1) * $limit;
              ?>
<tbody>

<?php

$i = 0;

$get_pro = "select * from slide";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$pro_id = $row_pro['id'];

//$pro_title = $row_pro['product_title'];

$pro_image = $row_pro['image'];
//$pro_image1 = $row_pro['image_2'];
//$pro_image2 = $row_pro['image_3'];
//$pro_image3 = $row_pro['image_4'];




//$pro_price = $row_pro['price'];

//$pro_discount = $row_pro['discount'];
//$pro_description = $row_pro['description'];
//$i++;

?>

<tr>

<td><?php echo $pro_id; ?></td>



<td><img src="./product_images/<?php echo $pro_image; ?>" width="60" height="60"></td>




<td class="text-center">

<a href="index.php?deletes=<?php echo $pro_id; ?>&product_img=<?php echo $pro_image?>">

 Delete

</a>

</td>



</tr>

<?php } ?>
</tbody>
</table><br><!-- table table-bordered table-hover table-striped Ends -->
<div class="col-md-12 col-xs-12 col-sm-12 text-center">
                                <?php
                                $sql = "SELECT COUNT(id) FROM products ";
                                $result = mysqli_query($con, $sql);

                                $row = mysqli_fetch_row($result);

                                $total_records = $row[0];

                                $total_pages = ceil($total_records / $limit);
                                $pagLink = "<ul class='pagination pagination-md justify-content-center' >";
                                for ($i = 1; $i <= $total_pages; $i++) {
                                    $c="active";
                                    if($page==$i)
                                    {
                                        $c="active";
                                    }
                                    else
                                    {
                                        $c="";
                                    }
                                    $pagLink .= "<li class='page-item $c'><a class='page-link ' style='margin-left:5px' href='index.php?view_products&page=" . $i . "'>" . $i . "</a></li>";
                                };
                                echo $pagLink . "</ul>";


                                echo "<script type='text/javascript'>
                                            $(document).ready(function(){
                                                $('.pagination').pagination({
                                                    items:  $total_records,
                                                    itemsOnPage:$limit,
                                                    cssStyle: 'light-theme',
                                                    currentPage : $page,
                                                    hrefTextPrefix : 'index.php?view_products&page='
                                                });
                                            });
                                        </script>";

                                ?>
                            </div>
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