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
    <title>Women App Admin  </title>
</head>
<body>
   <div>

   <?php 
if (isset($_GET['cos_id'])){
    $cos_id = $_GET['cos_id'];
global $db;
$get_cos = "select * from cos where cos_id='$cos_id'";
$run_get_cos = mysqli_query($db,$get_cos);
while ($row_cos = mysqli_fetch_array($run_get_cos)){
    $cos_title = $row_cos['cos_name'];
    $hi_id = $row_cos['hi_id'];
    $password = $row_cos['password'];
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
                        <input type="text" name="user" id="" value=<?php echo $cos_title ?>>
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
     $edit_cos =" update cos set cos_name = '$username' , password = '$password' , hi_id = '$hi_id' where cos_id='$cos_id' ";
     $run_edit_cos = mysqli_query($db,$edit_cos);
     if ($run_edit_cos){
         echo "<script>alert(' تم تعديل بيانات العميل  ')</script>" ;
         echo "<script>window.open('tables.php','_self')</script>" ; 
     }
         



        }


        ?>       
                </div>
</body>
</html>