<?php
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
                <div class="col-sm-3"></div>
                <div class="col-lg-5">
                    <div class="profile-card-4">
                        <div class="card">
                            <div class="card-body text-center gradient-ibizatg  rounded-top">
                                <h5 class="mb-1 text-black">Admin Profile</h5>
                                <div class="user-box">
                                    <img src="./product_images/<?php echo $admin_image; ?>" alt="user avatar"/>
                                </div>
                                <h5 class="mb-1 text-white"><?php echo $admin_name; ?></h5>

                            </div>
                            <div class="card-body">
                                <ul class="list-group shadow-none">

                                    <li class="list-group-item">
                                        <div class="list-icon">
                                            <i class="fa fa-phone-square"></i>
                                        </div>
                                        <div class="list-details">
                                            <span><?php echo $admin_contact; ?></span>
                                            <small>Mobile Number</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="list-icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="list-details">
                                            <span><?php echo $admin_email; ?></span>
                                            <small>Email Address</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="list-icon">
                                            <i class="fa fa-globe"></i>
                                        </div>
                                        <div class="list-details">
                                            <span>www.medicine.com</span>
                                            <small>Website Address</small>
                                        </div>
                                    </li>
                                </ul>
<!--                                <div class="row text-center mt-4">-->
<!--                                    <div class="col p-2">-->
<!--                                        <h4 class="mb-1 line-height-5">154</h4>-->
<!--                                        <small class="mb-0 font-weight-bold">Projects</small>-->
<!--                                    </div>-->
<!--                                    <div class="col p-2">-->
<!--                                        <h4 class="mb-1 line-height-5">2.2k</h4>-->
<!--                                        <small class="mb-0 font-weight-bold">Followers</small>-->
<!--                                    </div>-->
<!--                                    <div class="col p-2">-->
<!--                                        <h4 class="mb-1 line-height-5">9.1k</h4>-->
<!--                                        <small class="mb-0 font-weight-bold">Views</small>-->
<!--                                    </div>-->
<!--                                </div>-->
                            </div>
                            <div class="card-footer text-center">
                                <a href="javascript:void()" class="btn-social btn-facebook waves-effect waves-light m-1"><i class="fa fa-facebook"></i></a>
                                <a href="javascript:void()" class="btn-social btn-google-plus waves-effect waves-light m-1"><i class="fa fa-google-plus"></i></a>
                                <a href="javascript:void()" class="list-inline-item btn-social btn-behance waves-effect waves-light"><i class="fa fa-instagram"></i></a>
                                <a href="javascript:void()" class="list-inline-item btn-social btn-dribbble waves-effect waves-light"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="btn-group float-sm-right">
                        <a href="index.php?adminEditProfile=<?php echo $admin_id; ?>" type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="icon-note mr-1"></i> Edit Profile</a>
<!--                        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">-->
<!--                            <span class="caret"></span>-->
<!--                        </button>-->
<!--                        <div class="dropdown-menu">-->
<!--                            <a href="javaScript:void();" class="dropdown-item">Action</a>-->
<!--                            <a href="javaScript:void();" class="dropdown-item">Another action</a>-->
<!--                            <a href="javaScript:void();" class="dropdown-item">Something else here</a>-->
<!--                            <div class="dropdown-divider"></div>-->
<!--                            <a href="javaScript:void();" class="dropdown-item">Separated link</a>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
            <!-- End Breadcrumb-->


        </div>
        <!-- End container-fluid-->
    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->


<?php } ?>