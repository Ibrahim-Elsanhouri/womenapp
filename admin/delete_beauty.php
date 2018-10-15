<?php
include ('functions.php'); 
if (isset($_GET['query'])){
    global $db;
$query = $_GET['query'];
$delete_beauty_query = "delete from beauty where  query = '$query' ";
$run_delete_beauty_query = mysqli_query($db , $delete_beauty_query);
if ($run_delete_beauty_query){
    echo "<script>window.open('tables.php','_self')</script>";
}
}


 ?>