<?php 
include('functions.php');
if (isset($_GET['time'])){
global $db;
$time = $_GET['time'];
$delete_photo_order = "delete from photo_order where time='$time'";
$run_delete_photo_order = mysqli_query($db,$delete_photo_order);
echo "<script>window.open('home.php','_self')</script>";
}

?>