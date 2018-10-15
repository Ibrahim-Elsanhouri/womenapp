<?php
include ('functions.php'); 
if (isset($_GET['query'])){
    global $db;
$query = $_GET['query'];
$delete_fit_query = "delete from fit where  query = '$query' ";
$run_delete_fit_query = mysqli_query($db , $delete_fit_query);
if ($run_delete_fit_query){
    echo "<script>window.open('tables.php','_self')</script>";
}
}


 ?>