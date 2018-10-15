<?php 

// connect database 
$connection = mysqli_connect("localhost","root","18219899","womenapps") or die ('it is not connected to Database ');

// route to saloon_list.php
function get_sectors_saloons(){
    global $connection;
    $get_sectrors = "select * from hi ";
    $run_get_sectors = mysqli_query($connection,$get_sectrors);
    while($sector_row = mysqli_fetch_array($run_get_sectors)){
        $sector_id = $sector_row['hi_id'];
        $sector_name = $sector_row['hi_name'];
        echo "<li><a href='saloon_list.php?sector_id=$sector_id'>$sector_name </a></li>";
    }
}

// route to studio_list.php
function get_sectors_studio(){
    global $connection;
    $get_sectrors = "select * from hi ";
    $run_get_sectors = mysqli_query($connection,$get_sectrors);
    while($sector_row = mysqli_fetch_array($run_get_sectors)){
        $sector_id = $sector_row['hi_id'];
        $sector_name = $sector_row['hi_name'];
        echo "<li><a href='studio_list.php?sector_id=$sector_id'>$sector_name </a></li>";
    }
}

// route to cos_list.php
function get_sectors_cos(){
    global $connection;
    $get_sectrors = "select * from hi ";
    $run_get_sectors = mysqli_query($connection,$get_sectrors);
    while($sector_row = mysqli_fetch_array($run_get_sectors)){
        $sector_id = $sector_row['hi_id'];
        $sector_name = $sector_row['hi_name'];
        echo "<li><a href='cos_list.php?sector_id=$sector_id'>$sector_name </a></li>";
    }
}


// route to arrange_list.php
function get_sectors_arrange(){
    global $connection;
    $get_sectrors = "select * from hi ";
    $run_get_sectors = mysqli_query($connection,$get_sectrors);
    while($sector_row = mysqli_fetch_array($run_get_sectors)){
        $sector_id = $sector_row['hi_id'];
        $sector_name = $sector_row['hi_name'];
        echo "<li><a href='arrange_list.php?sector_id=$sector_id'>$sector_name </a></li>";
    }
}

// View all categories lists 


function get_saloon_list(){
 
    if (isset($_GET['sector_id'])){
        global $connection;
        $sector_id = $_GET['sector_id'];
        $get_saloon_list = "select * from saloons where hi_id='$sector_id'";
        $run_get_saloon_list = mysqli_query($connection,$get_saloon_list);
        while($row_saloons_list = mysqli_fetch_array($run_get_saloon_list)){
            $saloon_id = $row_saloons_list['saloon_id'];
            $saloon_name = $row_saloons_list['saloon_name'];
            $hi_id = $row_saloons_list['hi_id'];

            echo "	<tr>
            


     <td> $saloon_name </td>
             <td class='col-md-5'> $saloon_id  </td>
             <th>$hi_id </th>
             <td><a class='btn btn-success' href='saloon_order.php?saloon_id=$saloon_id'>حجز موعد </a> </td>
         </tr>
 
         ";
            
        }
    }
}


function get_arrange_list(){
    
       if (isset($_GET['sector_id'])){
           global $connection;
           $sector_id = $_GET['sector_id'];
           $get_arrange_list = "select * from arrange where hi_id='$sector_id'";
           $run_get_arrange_list = mysqli_query($connection,$get_arrange_list);
           while($row_arrange_list = mysqli_fetch_array($run_get_arrange_list)){
               $arrange_id = $row_arrange_list['arrange_id'];
               $arrange_name = $row_arrange_list['arrange_name'];
               $hi_id = $row_arrange_list['hi_id'];
   
               echo "	<tr>
               
   
   
        <td> $arrange_name </td>
                <td class='col-md-5'> $arrange_id  </td>
                <th>$hi_id </th>
                <td><a class='btn btn-success' href='arrange_order.php?arrange_id=$arrange_id'>حجز موعد </a> </td>
            </tr>
    
            ";
               
           }
       }
   }


   function get_studio_list(){
    
       if (isset($_GET['sector_id'])){
           global $connection;
           $sector_id = $_GET['sector_id'];
           $get_studio_list = "select * from photo where hi_id='$sector_id'";
           $run_get_studio_list = mysqli_query($connection,$get_studio_list);
           while($row_studio_list = mysqli_fetch_array($run_get_studio_list)){
               $studio_id = $row_studio_list['photo_id'];
               $studio_name = $row_studio_list['photo_name'];
               $hi_id = $row_studio_list['hi_id'];
   
               echo "	<tr>
               
   
   
        <td> $studio_name </td>
                <td class='col-md-5'> $studio_id  </td>
                <th>$hi_id </th>
                <td><a class='btn btn-success' href='studio_order.php?photo_id=$studio_id'>حجز موعد </a> </td>
            </tr>
    
            ";
               
           }
       }
   }


   function get_cos_list(){
    
       if (isset($_GET['sector_id'])){
           global $connection;
           $sector_id = $_GET['sector_id'];
           $get_cos_list = "select * from cos where hi_id='$sector_id'";
           $run_get_cos_list = mysqli_query($connection,$get_cos_list);
           while($row_cos_list = mysqli_fetch_array($run_get_cos_list)){
               $cos_id = $row_cos_list['cos_id'];
               $cos_name = $row_cos_list['cos_name'];
               $hi_id = $row_cos_list['hi_id'];
   
               echo "	<tr>
               
   
   
        <td> $cos_name </td>
                <td class='col-md-5'> $cos_id  </td>
                <th>$hi_id </th>
                <td><a class='btn btn-success' href='cos_order.php?cos_id=$cos_id'>حجز موعد </a> </td>
            </tr>
    
            ";
               
           }
       }
   }
