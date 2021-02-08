<!doctype html>
<html class="no-js" lang="en">
<?php
        include("../layout/header.php");
        use Classess\Auth\Employee;
        if (isset($_POST['submitEmp'])){
            $currentDate=date('Y-m-d h:i:s a', time());

           $employee=new Employee("",$_REQUEST['EMAIL'],$_REQUEST['NIC'],$_REQUEST['FIRSTNAME'],$_REQUEST['MOBILENUMBER'],$_REQUEST['DESIGNATION'],
                                 $_REQUEST['BRANCHCODE'],$_REQUEST['DOB'],$_REQUEST['CURRENTADDRESS'],$_REQUEST['DP'],$currentDate);
           $password=md5($_REQUEST['password']);


            $email=$_REQUEST['EMAIL'] ;
            $branchCode=$_REQUEST['BRANCHCODE'];
            $dob=$_REQUEST['DOB'] ;
            $address=$_REQUEST['CURRENTADDRESS'];
             $dp=$_REQUEST['DP'] ;
             $mobile=$_REQUEST['MOBILENUMBER'];
             $designation=$_REQUEST['DESIGNATION'] ;
            $nic=$_REQUEST['NIC'];
            $Fname=$_REQUEST['FIRSTNAME'] ;


            $result=$employee->register($Fname,$nic,$email,$password,$branchCode,$designation,$address,$dob,$dp,$currentDate,$mobile);

            if ($result){
                echo "Succesfully registerd";
            }
            else{
                echo "Failed";
            }
        }
?>


        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">ADD Employee</a></li>

                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">


                                                    <form action="./add-employee.php" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload" method="POST">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">



                                                                <div class="form-group">
                                                                        <input name="FIRSTNAME" type="text" class="form-control" placeholder="NAME" required >
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="EMAIL" type="text" class="form-control" placeholder="example@email.com">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="NIC" type="text" class="form-control" placeholder="NIC" required >
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="password" type="password" class="form-control" placeholder="password"  required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="MOBILENUMBER" type="number" class="form-control" placeholder="Mobile no.">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="DESIGNATION" type="text" class="form-control" placeholder="designation" >
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="BRANCHCODE" type="text" class="form-control" placeholder="BranchCode" >
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="CURRENTADDRESS" type="text" class="form-control" placeholder="Official Address" >
                                                                </div>

                                                                <div class="form-group">
                                                                    <h5>Date of Birth</h5>
                                                                    <input name="DOB" type="date" class="form-control" placeholder="Date of Birth" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <h5>DP</h5>
                                                                    <input name="DP" class="hd-pro-img" type="file"  />
                                                                </div>
                                                                <!-- <div class="form-group alert-up-pd">
                                                                    <div class="dz-message needsclick download-custom">
                                                                        <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                                                        <h2 class="edudropnone">Drop image here or click to upload.</h2>
                                                                        <p class="edudropnone"><span class="note needsclick">(Select your profile picture)</span>
                                                                        </p>
                                                                        <input name="dp" class="hd-pro-img" type="file" />
                                                                    </div>
                                                                </div> -->

                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button name="submitEmp" type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="js/datepicker/jquery-ui.min.js"></script>
    <script src="js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="js/form-validation/jquery.form.min.js"></script>
    <script src="js/form-validation/jquery.validate.min.js"></script>
    <script src="js/form-validation/form-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>
