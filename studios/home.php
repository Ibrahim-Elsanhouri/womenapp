
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

			<button type="button" class="btn btn-default pull-right" onclick="print()">Print</button>
             <a href="logout.php">Logout</a>


								
                       
                                   

								</div>

			<table class="table table-responsive">
				<thead>
					<tr>
						<th>المناسبة </th>
						<th>الجوال  </th>
						<th>اليوم  </th>
						<th>الوقت </th>
						<th>Delete </th>

					</tr>
				</thead>
				<tbody>
					<?php 
$photo_id = $_SESSION['ibra'];
$get_studio_order = "select * from photo_order where photo_id='$photo_id'";
$run_get_studio_order = mysqli_query($db,$get_studio_order);
while ($photo_row = mysqli_fetch_array($run_get_studio_order)){
$event = $photo_row['event'];
$mobile = $photo_row['mobile'];
$time = $photo_row['time'];
$date = $photo_row['date'];



?>
					<tr>
                       


				
						<td class="col-md-10"> <?php echo $event ?> </td>
					
						<td class="col-md-10"><?php echo $mobile ?>  </td>
						<td class="col-md-10"><?php echo $time ?>  </td>
						<td class="col-md-10"><?php echo $date ?>  </td>
                               <td><a href="del_photo_order.php?time=<?php echo $time ?>">Delete</a></td>					
							   </tr>
                    
                       

<?php } ?>
				
						
			</table>
		
		<center>
		</div>
	</div>
</div>
</body>
</html>