<?php 
include ('functions.php');
if (isset($_GET['photo_id'])){
    global $db;
    $photo_id = $_GET['photo_id'];
    $delete_photo = "delete from photo where photo_id = '$photo_id'";
    $run_delete_photo = mysqli_query($db,$delete_photo);
    if ($run_delete_photo){
        echo "<script>window.open('tables.php','_self')</script>";
    }
}