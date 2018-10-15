<?php 
include ('functions.php');
if (isset($_GET['cos_id'])){
    global $db;
    $cos_id = $_GET['cos_id'];
    $delete_cos = "delete from cos where cos_id = '$cos_id'";
    $run_delete_cos = mysqli_query($db,$delete_cos);
    if ($run_delete_cos){
        echo "<script>window.open('tables.php','_self')</script>";
    }
}