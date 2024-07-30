<?php 
   
    require_once './header.php';
    require_once './db/conn.php';
    
    
$name=$_POST['pkInput'];
    $sql = "DELETE FROM `string_info` WHERE string_id = $name";
    if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully at Primary Key:";
    echo $name;
    } else {
    echo "Error deleting record: " . mysqli_error($conn);
    }

 ?>