<?php include('functions.php');?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboad</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="assets/img/logo.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" name="user" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password">
                                </div>
                              
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit"  class="btn btn-lg btn-success btn-block" value="login" name="login">
                            </fieldset>
                        </form>
                <?php 
if (isset($_POST['login'])){
    global $db;
    $username = $_POST['user'];
    $password = $_POST['pass'];
$check_admin = "select * from admins where username='$username' and password='$password'";
$run_check_admin = mysqli_query($db,$check_admin);
$run_check_admin_count = mysqli_num_rows($run_check_admin);
if ($run_check_admin_count==1){
    $_SESSION['ibra']=$username;
    echo "<script>alert('اهلا بك في قسم ادارة تطبيق نسائيات ')</script>";
    echo "<script>window.open('home.php','_self')</script>";
}else {
    echo "<script>alert('invalid password or username , please try again ')</script>";
    
}
}



?>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
