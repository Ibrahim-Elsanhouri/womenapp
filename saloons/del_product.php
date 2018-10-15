<?php 
include('functions.php');
if (isset($_GET['product'])){
global $db;
$pro = $_GET['product'];
$delete_saloon_product = "delete from saloon_products where saloon_products='$pro'";
$run_delete_saloon_order = mysqli_query($db,$delete_saloon_product);
echo "<script>window.open('home.php','_self')</script>";
}

?>