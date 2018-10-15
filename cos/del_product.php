<?php 
include('functions.php');
if (isset($_GET['product'])){
global $db;
$pro = $_GET['product'];
$delete_arrange_product = "delete from cos_products where cos_products='$pro'";
$run_delete_arrange_order = mysqli_query($db,$delete_arrange_product);
echo "<script>window.open('home.php','_self')</script>";
}

?>