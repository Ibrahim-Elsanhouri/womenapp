
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
		<button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success ">اضف خدمات  </button>

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
							<h4 class="modal-title">اضافة خدمات المشغل   </h4>
						</div>
						<div class="modal-body">
							<form method="post" action="">
								<div class="form-group">
									<label>رمز المشغل   </label>
									<input type="text"  name="sid" value="<?php echo $_SESSION['ibra']; ?>" class="form-control" readonly >
								</div>

                                <div class="form-group">
								<label>الخدمة     </label>
									<input type="text"  name="pro"  class="form-control">
								</div>
                               
                                   

								</div>
								<input type="submit" name="add_pro" value="اضف الخدمة  " class="btn btn-success">
							</form>
		  <?php 
		  if (isset($_POST['add_pro'])){
			  global $db;
			  $saloon_id = $_POST['sid'];
			  $saloon_products = $_POST['pro'];
$insert_saloon_products = "insert into saloon_products (saloon_id , saloon_products ) values ('$saloon_id','$saloon_products')";
$run_insert_saloon_products = mysqli_query($db,$insert_saloon_products);
if ($run_insert_saloon_products){
	echo "<script>alert('تم اضافة الخدمة الى سجلات المشغل ')</script>";
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
						<th>رقم طلب الخدمة </th>
						<th>الجوال</th>
						<th>اليوم</th>
						<th>الوقت</th>
						<th>الطلبات</th>
						<th>Delete</th>

					</tr>
				</thead>
				<tbody>
					<?php 
$saloon_id = $_SESSION['ibra'];
$get_saloon_order = "select * from saloon_order where saloon_id='$saloon_id'";
$run_get_saloon_order = mysqli_query($db,$get_saloon_order);
while ($saloon_row = mysqli_fetch_array($run_get_saloon_order)){
$sorder_id = $saloon_row['sorder_id'];
$mobile = $saloon_row['mobile'];
$time = $saloon_row['time'];
$date = $saloon_row['date'];
$products = $saloon_row['products'];



?>
					<tr>
                       


				
						<td class="col-md-10"> <?php echo $sorder_id ?> </td>
					
						<td class="col-md-10"><?php echo $mobile ?>  </td>
						<td class="col-md-10"><?php echo $time ?>  </td>
						<td class="col-md-10"><?php echo $date ?>  </td>
						<td class="col-md-10"><?php echo $products ?>  </td>
                               <td><a href="del_studio_order.php?time=<?php echo $sorder_id ?>">Delete</a></td>					
							   </tr>
                    
                       

<?php } ?>
				
						
			</table>
		
		<center>
		<table class="table table-responsive">
				<thead>
					<tr>
						<th>الخدمة </th>
						
						<th>Delete</th>

					</tr>
				</thead>
				<tbody>
					<?php 
$saloon_id = $_SESSION['ibra'];
$get_saloon_order = "select * from saloon_products where saloon_id='$saloon_id'";
$run_get_saloon_order = mysqli_query($db,$get_saloon_order);
while ($saloon_row = mysqli_fetch_array($run_get_saloon_order)){
$saloon_products = $saloon_row['saloon_products'];




?>
					<tr>
                       


				
						<td class="col-md-10"> <?php echo $saloon_products; ?> </td>
					
                               <td><a href="del_product.php?product=<?php echo $saloon_products ?>">Delete</a></td>					
							   </tr>
                    
                       

<?php } ?>
				
						
			</table>
		</div>
	</div>
</div>
</body>
</html>