<?php 
include('functions.php');
if (isset($_GET['time'])){
global $db;
$time = $_GET['time'];
$delete_studio_order = "delete from saloon_order where sorder_id='$time'";
$run_delete_studio_order = mysqli_query($db,$delete_studio_order);
echo "<script>window.open('home.php','_self')</script>";
}

?>