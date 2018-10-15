<?php include ('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboad</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                
                
              
               
                         
                  
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->
->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="assets/img/user.jpg" alt="">
                            </div>
                            <div class="user-info">
                                <div>Ibrahim <strong>Elsanhouri</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="">
                        <a href="home.php"><i class="fa fa-dashboard fa-fw"></i>نظرة عامة </a>
                    </li>
                
                    <li class="selected">
                        <a href="tables.php"><i class="fa fa-table fa-fw"></i>الجداول و التقارير </a>
                    </li>
                    <li>
                        <a href="forms.php"><i class="fa fa-edit fa-fw"></i>اضافة مزودين </a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-edit fa-fw"></i>خروج</a>
                    </li>
                    <li>
                        <a href="https://www.womenappksa.com/"><i class="fa fa-edit fa-fw"></i>العودة للبرنامج</a>
                    </li>
                  
                        <!-- second-level-items -->
                    </li>
               
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">الجداول و التقارير</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             جدول المصممين 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>الرقم التسلسلي  </th>
                                        <th>الاسم  </th>
                                        <th>رمز الحي </th>
                                        <th>سجل الطلبيات  </th>
                                        <th>Edit</th>
                                        <th>المسح </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
global $db;
$get_arrange = "select * from arrange ";
$run_get_arrange = mysqli_query($db,$get_arrange);
while ($row_arrange  = mysqli_fetch_array($run_get_arrange)) {
	$arrange_id  = $row_arrange['arrange_id'];
    $arrange_name= $row_arrange['arrange_name'];
    $hi_id = $row_arrange['hi_id'];
  
    
   
    
?>
                                     
                                        <tr class="odd gradeA">
                                            <td><?php echo $arrange_id ?></td>
                                            <td><?php echo $arrange_name ?></td>
                                            <td><?php echo $hi_id ?></td>
                                            <td><a href="" class="btn btn-success">سجل الطلبيات  </a> </td>
                                            <td><a href="edit_arrange.php?arrange_id=<?php echo $arrange_id ?>" class="btn btn-success"> Edit  </a> </td>
                                            <td><a href="delete_arrange.php?arrange_id=<?php echo $arrange_id ?>"  class="btn btn-danger">Delete</a> </td>
                                        </tr>
<?php } ?>
                                   
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
<tr>
<td colspan="3">جدول استفسارات الرشاقة </td>

</tr>
                                        <tr>
                                            <th>email </th>
                                            <th>الاستفسار</th>
                                            <th>حذف</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
                                    global $db;
$get_queries = "select * from fit ";
$run_get_queries = mysqli_query($db,$get_queries);
while ($row_queries  = mysqli_fetch_array($run_get_queries)) {
	$email  = $row_queries['email'];
	$query=$row_queries['query'];
?>
	
                                        <tr>
                                            <td><?php echo $email ?></td>
                                            <td><?php echo $query ?></td>
                                            <td><a href="delete_fit.php?query=<?php echo $query ?>"  class="btn btn-danger">Delete</a> </td>
                                            </tr>
<?php } ?>
                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                <div class="col-lg-6">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
جدول المشاغل 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th>الرقم التسلسلي  </th>
                                        <th>الاسم  </th>
                                        <th>رمز الحي </th>
                                        <th>سجل الطلبيات  </th>
                                        <th>Edit </th>
                                        <th>المسح </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
global $db;
$get_saloon = "select * from saloons ";
$run_get_saloon = mysqli_query($db,$get_saloon);
while ($row_saloon  = mysqli_fetch_array($run_get_saloon)) {
	$saloon_id  = $row_saloon['saloon_id'];
    $saloon_name= $row_saloon['saloon_name'];
    $hi_id = $row_saloon['hi_id'];
  
    
   
    
?>	<tr>
                       

                    <td><?php echo $saloon_id ?></td>
                    <td><?php echo $saloon_name ?></td>
						<td class="col-md-5"><?php echo $hi_id ?></td>
                        <td><a href="" class="btn btn-success">سجل الطلبيات  </a> </td>
						<td><a href="edit_saloon.php?saloon_id=<?php echo $saloon_id ?>" class="btn btn-success">Edit  </a> </td>

                        <td><a href="delete_saloon.php?saloon_id=<?php echo $saloon_id ?>"  class="btn btn-danger">Delete</a> </td>
						</tr>


                                   
                                    </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                      <!--    Striped Rows Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
جدول استفسارات التجميل                         </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Email</th>
                                            <th>query</th>
                                            <th>delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
global $db;
$get_queries = "select * from beauty ";
$run_get_queries = mysqli_query($db,$get_queries);
while ($row_queries  = mysqli_fetch_array($run_get_queries)) {
	$email =$row_queries['email'];
	$query  = $row_queries['query'];
?>
                                        <tr>

                                        
						<td><?php echo $email ?></td>
						<td><?php echo $query ?></td>
                        <td><a href="delete_beauty.php?query=<?php echo $query ?>"  class="btn btn-danger">Delete</a> </td>

		
                                        </tr>
<?php } ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  End  Striped Rows Table  -->
                </div>
                <!--
                <div class="col-lg-6">
                    <!--    Bordered Table  
                    <div class="panel panel-default">
                        <div class="panel-heading">
منسقي الافراح                         </div>
                        <!-- /.panel-heading 
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th>الرقم التسلسلي  </th>
                                        <th>الاسم  </th>
                                        <th>رمز الحي </th>
                                        <th>سجل الطلبيات  </th>
                                        <th>Edit </th>
                                        <th>المسح </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
global $db;
$get_cos = "select * from cos ";
$run_get_cos = mysqli_query($db,$get_cos);
while ($row_cos  = mysqli_fetch_array($run_get_cos)) {
	$cos_id  = $row_cos['cos_id'];
    $cos_name= $row_cos['cos_name'];
    $hi_id = $row_cos['hi_id'];
  
    
   
    
?>
					<tr>
                       

                    <td></td>
                    <td></td>
						<td class="col-md-5"></td>
                        <td><a href="beauty.php" class="btn btn-success">سجل الطلبيات  </a> </td>
                        <td><a href="edit_cos.php?cos_id=<" class="btn btn-success">Edit</a> </td>

                        <td><a href="delete_cos.php?cos_id="  class="btn btn-danger">Delete</a> </td>
						</tr>
					
 } 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!--  End  Bordered Table  
                </div>
            </div> -->
            <div class="row">
                <div class="col-lg-6">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
 منسقي الافراح                          </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <tr>
                                        <th>الرقم التسلسلي  </th>
                                        <th>الاسم  </th>
                                        <th>رمز الحي </th>
                                        <th>سجل الطلبيات  </th>
                                        <th> Edit  </th>
                                        <th>المسح </th>
                
                                    </tr>
                                        </tr>
                                        </thead>
                                    <tbody>
                                        <tr>
                                        <?php 
global $db;
$get_cos = "select * from cos ";
$run_get_cos = mysqli_query($db,$get_cos);
while ($row_cos  = mysqli_fetch_array($run_get_cos)) {
	$cos_id  = $row_cos['cos_id'];
    $cos_name= $row_cos['cos_name'];
    $hi_id = $row_cos['hi_id'];
  
    
   
    
?>
					<tr>
                       

                    <td><?php echo $cos_id ?></td>
                    <td><?php echo $cos_name ?></td>
						<td class="col-md-5"><?php echo $hi_id ?></td>
                        <td><a href="" class="btn btn-success">سجل الطلبيات  </a> </td>
                        <td><a href="edit_cos.php?cos_id=<?php echo $cos_id ?>" class="btn btn-success">Edit</a> </td>

                        <td><a href="delete_cos.php?cos_id=<?php echo $cos_id ?>"  class="btn btn-danger">Delete</a> </td>
						</tr>
					
				</tbody>
<?php } ?>
                                   
                                      
                                
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
                </div>
                <div class="col-lg-6">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
استديوهات التصوير                         </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                    <th>الرقم التسلسلي  </th>
                                    <th>الاسم  </th>
                                    <th>رمز الحي </th>
                                    <th>سجل الطلبيات  </th>
                                    <th> Edit  </th>
                                    <th>المسح </th>
            
                                </tr>

                                
                                    </thead>
                                    <?php 
global $db;
$get_photo = "select * from photo ";
$run_get_photo = mysqli_query($db,$get_photo);
while ($row_photo  = mysqli_fetch_array($run_get_photo)) {
	$photo_id  = $row_photo['photo_id'];
    $photo_name= $row_photo['photo_name'];
    $hi_id = $row_photo['hi_id'];  
?>
                                    <tbody>

                                        <tr class="success">
                                     
                                        
                 
                                     <td><?php echo $photo_id ?></td>
                                     <td><?php echo $photo_name ?></td>
                                         <td class="col-md-5"><?php echo $hi_id ?></td>
                                         <td><a href="" class="btn btn-success">سجل الطلبيات  </a> </td>
                                         <td><a href="edit_studio.php?photo_id=<?php echo $photo_id  ?>" class="btn btn-success">Edit  </a> </td>
                 
                                         <td><a href="delete_studio.php?photo_id=<?php echo $photo_id ?>"  class="btn btn-danger">Delete</a> </td>
                                         
                                        </tr>
<?php } ?>
                
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>

</body>

</html>
