<?php include('functions.php');
session_start();  ?>
<!DOCTYPE html>
<html lang="en">
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

   <?php 
if (isset($_GET['photo_id'])){
    $photo_id = $_GET['photo_id'];
global $db;
$get_photo = "select * from photo where photo_id='$photo_id' ";
$run_get_photo = mysqli_query($db,$get_photo);
while ($row_photo = mysqli_fetch_array($run_get_photo)){
    $photo_names = $row_photo['photo_name'];
    $hi_id = $row_photo['hi_id'];
    $password = $row_photo['password'];
}
}


?>
   <form action="" method="post">
			<table align="center" width="50%" border="3" class="table table-hover">
            
				<tr>
<td align="center" colspan="2"> تعديل البيانات  </td>
                </tr>
					<tr>
						<td>اسم المشغل </td>
                        <td>
                        <input type="text" name="user" id="" value=<?php echo $photo_names ?>>
                        </td>
					</tr>
                    <tr>
                    <td>Password</td>
                    <td>
                <input type="password" name="pass" id="" value=<?php echo $password ?> >
                    </td>
                    </tr>
                    <tr>
                    <td>الحي </td>
                    <td><select name="hi" id=""  class="form-control"  >
                                    <?php 
global $db; 
$get_hi = "select * from hi ";
$run_get_hi  = mysqli_query($db,$get_hi);
while($get_hi_row  = mysqli_fetch_array($run_get_hi)){
    $hi_id = $get_hi_row['hi_id'];
    $hi_name = $get_hi_row['hi_name'];
    echo "<option value='$hi_id'>$hi_name</option>";


}

?>
                                    </select></td> 
                    </tr>
                    <tr>
                   
                   
                    <td><input type="submit" name="login" class="btn btn-success"value="Update"/></td>

                    <td><input type="reset" class="btn btn-danger" value="Cancel"/></td>

                    </td>
                    
                    </tr>
                    </table>
                    </form>
        <?php 
           global $db;
if (isset($_POST['login'])){         
$username= $_POST['user'];
$password = $_POST['pass'];
$hi_id = $_POST['hi'];
     $edit_photo =" update photo set photo_name = '$username' , password = '$password' , hi_id = '$hi_id' where photo_id='$photo_id' ";
     $run_edit_photo = mysqli_query($db,$edit_photo);
     if ($run_edit_photo){
         echo "<script>alert(' تم تعديل بيانات العميل  ')</script>" ;
         echo "<script>window.open('tables.php','_self')</script>" ; 
     }
         



        }


        ?>       
                </div>
</body>
</html>