<?php include('functions.php');
session_start();  ?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Admin Login </title>
</head>
<body>
   <div>
   <form action="" method="post">
			<table align="center" width="50%" border="3" class="table table-responsive">
            
				<tr>
<td align="center" colspan="2">تسجيل الدخول </td>
                </tr>
					<tr>
						<td>رقم الاستديو </td>
                        <td>
                        <input type="text" name="photo_id" id="">
                        </td>
					</tr>
                    <tr>
                    <td>Password</td>
                    <td>
                <input type="password" name="password" id="" >
                    </td>
                    </tr>
                    <tr>
                   
                    </tr>
                    <tr>
                   
                   
                    <td><input type="submit" name="login" class="btn btn-success"value="Login"/></td>

                    <td><input type="reset" class="btn btn-danger" value="Cancel"/></td>

                    </td>
                    
                    </tr>
                    </table>
                    </form>
        <?php 
           global $db;
if (isset($_POST['login'])){         
$photo_id= $_POST['photo_id'];
$password = $_POST['password'];
     $check_admin ="select photo_id , password   from photo    where photo_id='$photo_id' and password='$password' ";
     $run_check_admin = mysqli_query($db,$check_admin);
     $run_check_admin_count = mysqli_num_rows($run_check_admin);
     if ($run_check_admin_count==1){
         $_SESSION['ibra']=$photo_id;
         echo "<script>alert('   اهلا بك في قسم ادارة تطبيق نسائيات الخاص باستديوهات التصوير  ')</script>" ;
         echo "<script>window.open('home.php','_self')</script>" ; 
         
         
     }else {
        echo "<script>alert('اسم المستخدم او كلمة المرور خاطئتين الرجاء اعادة المحاولة ')</script>" ;
        
     }




        }


        ?>       
                </div>
</body>
</html>