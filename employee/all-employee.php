<!doctype html>
<html class="no-js" lang="en">
<?php
  include("../layout/header.php");
?>


 <head>
   <link rel="stylesheet" href="../others/allEmptable.css">
 </head>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <h1 class='align-center' >All Employees</h1>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">

                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">

                                    </div>
                                    <table class="fl-table">
                                        <thead>
                                            <tr>
                                                <th  data-field="nic"><h3>                            NIC </h3></th>
                                                <th data-field="name" data-editable="true"><h3>       Name </h3></th>
                                                <th data-field="email" data-editable="true"><h3>      Email<nbsp> </h3> </th>
                                                <th data-field="phone" data-editable="true"><h3>      Mobile<br></h3></th>
                                                <th data-field="Address" data-editable="true"><h3>    Address </h3></th>
                                                <th data-field="dob" data-editable="true"><h3>        DOB</h3></th>
                                                <th data-field="joinedDate" data-editable="true"><h3> Joined Date</th>
                                                <th data-field="updatedDate" data-editable="true"><h3>Updated Date</h3></th>
                                                <th data-field="status"><h3>Status</h3></th>
                                            </tr>
                                          </thead>
                                        <?php
                                            $all_employeess=$loginedUser-> showEmployees();
                                            foreach ($all_employeess as $data){
                                        ?>
                                            <tr>
                                                <td><h5> <?php echo $data['NIC'] ?></h5></td> </h1>
                                                <td><h5><?php echo $data['name'] ?></h5></td>
                                                <td><h5><?php echo $data['email'] ?></h5></td>
                                                <td><h5><?php echo $data['mobileNo'] ?></h5></td>
                                                <td><h5><?php echo $data['Address'] ?></h5></td>
                                                <td><h5><?php echo $data['DOB'] ?></h5></td>
                                                <td><h5><?php echo $data['JoinedDate'] ?></h5></td>
                                                <td><h5><?php echo $data['UpdatedDate'] ?></h5></td>
                                                <td ><h5><?php if ($data['leftDate']==null){echo "Active";}
                                                        else {echo "Deactivated";}
                                                    ?></h5>
                                                </td>
                                            </tr>
                                        <?php
                                            }
                                        ?>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
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
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
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
