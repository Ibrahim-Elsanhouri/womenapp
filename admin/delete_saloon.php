<?php 
include ('functions.php');
if (isset($_GET['saloon_id'])){
    global $db;
    $saloon_id = $_GET['saloon_id'];
    $delete_saloon = "delete from saloons where saloon_id = '$saloon_id'";
    $run_delete_saloon = mysqli_query($db,$delete_saloon);
    if ($run_delete_saloon){
        echo "<script>window.open('tables.php','_self')</script>";
    }
}