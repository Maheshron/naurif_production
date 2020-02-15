<?php
$id = $_GET['adminEditProfile'];
$query = "select * from admins where admin_id=$id";
$result = mysqli_query($con,$query);
$data = mysqli_fetch_array($result);
$admin_name = $data['admin_name'];
$admin_email = $data['admin_email'];
$admin_contact = $data['admin_contact'];
if(!isset($_SESSION['admin_email'])){

    echo "<script>window.open('login.php','_self')</script>";

}
else {
?>
<style>
    .gradient-ibizatg {
        background: #33ccff;
        background: -webkit-linear-gradient(45deg, #33ccff, #ff99cc)!important;
        background: linear-gradient(45deg, #33ccff, #ff99cc)!important;
    }
</style>
<div class="clearfix"></div>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumb-->
        <div class="row pt-2 pb-2">
            <div class="col-lg-3"></div>
            <div class="col-lg-5">
                <br><h4 class="text-center">Edit Profile</h4><br><br>

            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">User name</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="admin_name" value="<?Php echo $admin_name; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="email" name="admin_email" value="<?Php echo $admin_email; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Contact Number</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="admin_contact" value="<?Php echo $admin_contact; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Change Profile</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="admin_image"  type="file"><img src="./product_images/<?Php echo $admin_image; ?>" width='155px' height='155px'>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Password</label>
                    <div class="col-lg-9">
                        <input class="form-control" name="admin_pass" type="password" value="<?Php echo $admin_pass; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="reset" class="btn btn-secondary" value="Cancel">
                        <input type="submit" class="btn btn-primary" name="update" value="Save Changes">
                    </div>
                </div><br>
            </form>
            </div>
        </div>
    </div>
</div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <?php

    if(isset($_POST['update'])){

        $admin_name = $_POST['admin_name'];

        $admin_email = $_POST['admin_email'];

        $admin_pass = $_POST['admin_pass'];


        $admin_contact = $_POST['admin_contact'];

              $admin_pass= $_POST['admin_pass'];


        $admin_image = $_FILES['admin_image']['name'];

        $temp_admin_image = $_FILES['admin_image']['tmp_name'];

        move_uploaded_file($temp_admin_image,"admin_images/$admin_image");

        if(empty($admin_image)){

            $admin_image = $new_admin_image;

        }

        $update_admin = "update admins set admin_name='$admin_name',admin_email='$admin_email',admin_pass='$admin_pass',admin_image='$admin_image',admin_contact='$admin_contact' where admin_id='$admin_id'";

        $run_admin = mysqli_query($con,$update_admin);

        if($run_admin){

            echo "<script>alert('User Has Been Updated successfully and login again')</script>";

            echo "<script>window.open('login.php','_self')</script>";

            session_destroy();

        }

    }


    ?>

<?php } ?>