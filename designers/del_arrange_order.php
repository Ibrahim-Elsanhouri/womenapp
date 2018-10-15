<?php 
include('functions.php');
if (isset($_GET['aorder_id'])){
global $db;
$aorder_id = $_GET['aorder_id'];
$delete_arrange_order = "delete from arrange_order where aorder_id='$aorder_id'";
$run_delete_arrange_order = mysqli_query($db,$delete_arrange_order);
echo "<script>window.open('home.php','_self')</script>";
}

?>