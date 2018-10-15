<?php include('functions.php'); ?>
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
                                <div>Ibrahim  <strong>Elsanhouri</strong></div>
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
                 
                     
                    <li>
                        <a href="tables.php"><i class="fa fa-table fa-fw"></i>الجداول و التقارير</a>
                    </li>
                    <li class="selected">
                        <a href="forms.php"><i class="fa fa-edit fa-fw"></i>اضافة مزودي خدمة </a>
                    </li>
                    <li class="selected">
                        <a href="logout.php"><i class="fa fa-edit fa-fw"></i>الخروج</a>
                    </li>
                    <li class="selected">
                        <a href="https://www.womenappksa.com/"><i class="fa fa-edit fa-fw"></i>العودة للبرنامج </a>
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
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">نماذج التسجيل </h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
نموذج اضافة حي                         </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form  method="post"  role="form">
                                        <div class="form-group">
                                            <label>اضافة حي</label>
                                            <input  type="text" name="hi"  class="form-control">
                                            <input  type="submit" name="add_hi" value="اضافة حي " class="btn btn-primary">
                                        <input type="reset" class="btn btn-success"> 
                                        <?php 
                            if (isset($_POST['add_hi'])){
                                $hi_name = $_POST['hi'];
                                $insert_hi = "insert into hi (hi_name) values ('$hi_name')";
                                $run_insert_hi = mysqli_query($db,$insert_hi);
                                if ($run_insert_hi){
                                    echo "<script>alert('تم اضافة الحي ')</script>";
                                }
                                
                            }


?>
                                        </div>



</form>








                                        <div class="form-group">
                                        <form action="" method="post">
                                            <label>اضاف منسق افراح      </label>
                                            <input type="text" name="cos" class="form-control" placeholder="اضافة منسق افراح  ">
                                        </div>
                                        <div class="form-group">
                                            <label> كلمة السر </label>
                                            <input type="password" name="cos_pass" class="form-control">
                                            </div>
                                            <div class="form-group">
                                            <label>  الحي </label>
                                    <select name="hi" id=""  class="form-control"  >
                                    <?php 
                                    global $db;
$get_hi = "select * from hi ";
$run_get_hi = mysqli_query($db,$get_hi);
while($get_hi_row = mysqli_fetch_array($run_get_hi)){
    $hi_id = $get_hi_row['hi_id'];
    $hi_title = $get_hi_row['hi_name'];
    echo "<option value='$hi_id'>$hi_title</option>";}
?>
                                    </select>

								</div>
                                        <div class="form-group">
                                            <input type="submit" name="add_cos" value="اضافة منسق افراح " class="btn btn-primary">
                                            <input type="reset" class="btn btn-success"> 

                                        </div>
                         
                                        </form>

                                        <?php 
                            if (isset($_POST['add_cos'])){
                                $hi_name = $_POST['hi'];
								$cos_title = $_POST['cos'];
								$cos_psd = $_POST['cos_pass'];
                                $insert_cos = "insert into cos (cos_name,hi_id,password) values ('$cos_title','$hi_name','$cos_psd')";
                                $run_insert_cos = mysqli_query($db,$insert_cos);
                                if ($run_insert_cos){
                                    echo "<script>alert('تم اضافة منسق الافراح  ')</script>";
                                }
                                
                            }


?>

                                        <div class="form-group">
                                        <form action="" method="post">
                                            <label>اضف مسغل     </label>
                                            <input type="text" name="saloon" class="form-control" placeholder="اضافة مسغل    ">
                                        </div>
                                        <div class="form-group">
                                            <label> كلمة السر </label>
                                            <input type="paswword" name="saloon_pass"  class="form-control">
                                            </div>
                                            <div class="form-group">
                                            <label>  الحي </label>
                                    <select name="hi" id=""  class="form-control"  >
                                    <?php 
                                    global $db;
$get_hi = "select * from hi ";
$run_get_hi = mysqli_query($db,$get_hi);
while($get_hi_row = mysqli_fetch_array($run_get_hi)){
    $hi_id = $get_hi_row['hi_id'];
    $hi_title = $get_hi_row['hi_name'];
    echo "<option value='$hi_id'>$hi_title</option>";}
?>
                                    </select>

								</div>
                                        <div class="form-group">
                                            <input type="submit" name="add_saloon" value="اضافة مشغل  " class="btn btn-primary">
                                            <input type="reset" class="btn btn-success"> 

                                        </div>
                         
                                        </form>
                                        <?php 
                            if (isset($_POST['add_saloon'])){
                                $hi_id = $_POST['hi'];
								$saloon_name = $_POST['saloon'];
								$saloon_psd = $_POST['saloon_pass'];
                                $insert_saloon = "insert into saloons (saloon_name ,password , hi_id ) values ('$saloon_name','$saloon_psd' , '$hi_id')";
                                $run_insert_saloon = mysqli_query($db,$insert_saloon);
                                if ($run_insert_saloon){
                                    echo "<script>alert('تم اضافة المشغل ')</script>";
                                }
                                
                            }


?>
	
	




                                        
                                        <div class="form-group">
                                        <form action="" method="post">
                                            <label>اضف  استديو    </label>
                                            <input type="text" name="std"  class="form-control" placeholder="اضافة استديو    ">
                                        </div>
                                        <div class="form-group">
                                            <label> كلمة السر </label>
                                            <input type="paswword"  name="std_pass" class="form-control">
                                            </div>
                                            <div class="form-group">
                                            <label>  الحي </label>
                                    <select name="hi" id=""  class="form-control"  >
                                    <?php 
                                    global $db;
$get_hi = "select * from hi ";
$run_get_hi = mysqli_query($db,$get_hi);
while($get_hi_row = mysqli_fetch_array($run_get_hi)){
    $hi_id = $get_hi_row['hi_id'];
    $hi_title = $get_hi_row['hi_name'];
    echo "<option value='$hi_id'>$hi_title</option>";}
?>
                                    </select>

								</div>
                                        <div class="form-group">
                                            <input type="submit" name="add_photo" value="اضافة استديو  " class="btn btn-primary">
                                            <input type="reset" class="btn btn-success"> 

                                        </div>
                         
                                        </form>
                                        <?php 
                            if (isset($_POST['add_photo'])){
                                $hi_name = $_POST['hi'];
								$studio_name = $_POST['std'];
								$studio_psd = $_POST['std_pass'];
                                $insert_photo = "insert into photo (photo_name,hi_id,password) values ('$studio_name','$hi_name','$studio_psd')";
                                $run_insert_photo = mysqli_query($db,$insert_photo);
                                if ($run_insert_photo){
                                    echo "<script>alert('تم اضافة الاستديو  ')</script>";
                                }
                                
                            }


?>



                                        
                                        <div class="form-group">
                                        <form action="" method="post">
                                            <label>اضف مصمم ازياء     </label>
                                            <input type="text" name="clothes"  class="form-control" placeholder="اضافة منسق ازياء  ">
                                        </div>
                                        <div class="form-group">
                                            <label> كلمة السر </label>
                                            <input type="paswword" name="clothes_pass" class="form-control">
                                            </div>
                                            <div class="form-group">
                                            <label>  الحي </label>
                                    <select name="hi" id=""  class="form-control"  >
                                    <?php 
                                    global $db;
$get_hi = "select * from hi ";
$run_get_hi = mysqli_query($db,$get_hi);
while($get_hi_row = mysqli_fetch_array($run_get_hi)){
    $hi_id = $get_hi_row['hi_id'];
    $hi_title = $get_hi_row['hi_name'];
    echo "<option value='$hi_id'>$hi_title</option>";}
?>
                                    </select>

								</div>
                                        <div class="form-group">
                                            <input type="submit" name="add_clothes" value="اضافة منسق افراح " class="btn btn-primary">
                                            <input type="reset" class="btn btn-success"> 

                                        </div>
                         
                                        </form>
<?php
                                        if (isset($_POST['add_clothes'])){
                                $hi_name = $_POST['hi'];
								$arrange_name = $_POST['clothes'];
								$arrange_psd = $_POST['clothes_pass'];
                                $insert_arrange = "insert into arrange (arrange_name,hi_id,password) values ('$arrange_name','$hi_name','$arrange_psd')";
                                $run_insert_arrange = mysqli_query($db,$insert_arrange);
                                if ($run_insert_arrange){
                                    echo "<script>alert('تم اضافة مصمم الازياء   ')</script>";
                                }
                                
                            }


?>
	
                                  
                  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
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

</body>

</html>
