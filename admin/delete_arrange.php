<?php 
include ('functions.php');
if (isset($_GET['arrange_id'])){
    global $db;
    $arrange_id = $_GET['arrange_id'];
    $delete_arrange = "delete from arrange where arrange_id = '$arrange_id'";
    $run_delete_arrange = mysqli_query($db,$delete_arrange);
    if ($run_delete_arrange){
        echo "<script>window.open('tables.php','_self')</script>";
    }
}