
<?php include('functions.php');
session_start();
if (!isset($_SESSION['ibra'])){
echo "<script>window.open('index.php','_self')</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title>Women App Adminstrator</title>
</head>
<body>

<div class="container">
<div class="row" style="margin-top: 70px;">
	<div class="col-md-10 col-md-offset-1" >
		<table class="table">
		<button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success ">اضف تصاميم  </button>

			<button type="button" class="btn btn-default pull-right" onclick="print()">Print</button>
             <a href="logout.php">Logout</a>


								
                       
                                   

								</div>



								<br>
			<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">اضافة خدمات التصميم   </h4>
						</div>
						<div class="modal-body">
							<form method="post" action=""  enctype="multipart/form-data">
								<div class="form-group">
									<label>رمز المصمم   </label>
									<input type="text"  name="aid" value="<?php echo $_SESSION['ibra']; ?>" class="form-control" readonly >
								</div>

                                <div class="form-group">
								<label>التصميم     </label>
									<input type="file"  name="image"  class="form-control">
								</div>
                               
                                   

								</div>
								<input type="submit" name="add_pro" value="اضف التصميم  " class="btn btn-success">
							</form>
		  <?php 
		  if (isset($_POST['add_pro'])){
			  global $db;
			  $arrange_id = $_POST['aid'];
			 
			  $image = $_FILES['image']['name'];
			  $image_tmp = $_FILES['image']['tmp_name'];
			  move_uploaded_file($image_tmp,"images/$image");
$insert_arrange_products = "insert into arrange_products (arrange_id , image ) values ('$arrange_id','$image')";
$run_insert_arrange_products = mysqli_query($db,$insert_arrange_products);
if ($run_insert_arrange_products){
	echo "<script>alert('تم اضافة التصميم   ')</script>";
}
		  }


		  ?>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>



<!-- Modal -->


			<table class="table table-responsive">
				<thead>
					<tr>
					<th> رقم الطلبية    </th>

						<th> رقم الجوال   </th>
						
						<th>التصميم </th>
						<th>التوقيت  </th>
						<th>Delete</th>

					</tr>
				</thead>
				<tbody>
					<?php 
$arrange_id = $_SESSION['ibra'];
$get_arrange_order = "select * from arrange_order where arrange_id='$arrange_id'";
$run_get_arrange_order = mysqli_query($db,$get_arrange_order);
while ($arrange_row = mysqli_fetch_array($run_get_arrange_order)){
	$aorder_id = $arrange_row['aorder_id'];
$mobile = $arrange_row['mobile'];
$time = $arrange_row['time'];
$products = $arrange_row['event'];



?>
					<tr>
                       


					<td class="col-md-10"><?php echo $aorder_id ?>  </td>
					<td class="col-md-10"><?php echo $mobile ?>  </td>
						<td class="col-md-10"><img width="90" height="90" src="images/<?php echo $products  ?>"/>  </td>

						<td class="col-md-10"><?php echo $time ?>  </td>
                               <td><a href="del_arrange_order.php?aorder_id=<?php echo $aorder_id ?>">Delete</a></td>					
							   </tr>
                    
                       

<?php } ?>
				
						
			</table>
		
		<center>
		<table class="table table-responsive">
				<thead>
					<tr>
						<th>التصميم </th>
						
						<th>Delete</th>

					</tr>
				</thead>
				<tbody>
					<?php 
$arrange_id = $_SESSION['ibra'];
$get_arrange_products = "select * from arrange_products where arrange_id='$arrange_id'";
$run_get_arrange_products = mysqli_query($db,$get_arrange_products);
while ($arrange_row = mysqli_fetch_array($run_get_arrange_products)){
$arrange_image = $arrange_row['image'];




?>
					<tr>
                       


				
						<td class="col-md-10"> 
						<img src="images/<?php echo $arrange_image ?>" width="90" height="90" alt="">		
						</td>
					
                               <td><a href="del_product.php?product=<?php echo $arrange_image ?>">Delete</a></td>					
							   </tr>
                    
                       

<?php } ?>
				
						
			</table>
		</div>
	</div>
</div>
</body>
</html>