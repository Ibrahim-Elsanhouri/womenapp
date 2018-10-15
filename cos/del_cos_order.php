<?php 
include('functions.php');
if (isset($_GET['corder_id'])){
global $db;
$corder_id = $_GET['corder_id'];
$delete_cos_order = "delete from cos_order where corder_id='$corder_id'";
$run_delete_cos_order = mysqli_query($db,$delete_cos_order);
echo "<script>window.open('home.php','_self')</script>";
}

?>