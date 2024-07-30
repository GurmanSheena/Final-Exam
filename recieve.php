<?php 
    
    require_once './header.php';
    require_once './db/conn.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
        $message = $_POST['message'];
     
    
    
	//Escape special characters in a string
        //$email = mysqli_real_escape_string($conn, $email);
        $message = mysqli_real_escape_string($conn, $message);
      

	//Create an SQL INSERT query
    $sql = "INSERT INTO string_info( message) VALUES ('$message')";

        // Execute the query and check for success
        if (mysqli_query($conn, $sql)) {
            echo "Record added successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

	//Execute the query and check for success
}
 ?>
