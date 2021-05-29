<?php 
    //connecting to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "employee";

    //creating a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    //if connection was not successful then die
    if(!$conn) {
      die("Sorry.. Failed to connect: " . mysqli_connect_error());
    } else {
        echo "Connection Successful.";
    }

?>