<?php
include ('functions.php'); 
if (isset($_GET['query'])){
    global $db;
$query = $_GET['query'];
$delete_query = "delete from asks where  query = '$query' ";
$run_delete_query = mysqli_query($db , $delete_query);
if ($run_delete_query){
    echo "<script>window.open('tables.php','_self')</script>";
}
}


 ?>