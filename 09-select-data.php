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

    $sql = "SELECT * FROM $database";
    $result = mysqli_query($conn, $sql);

    //find the number of records in database
    // $num = mysqli_num_rows($result);
    // echo $num;

    // while($row = mysqli_fetch_assoc($result)) {
    //     echo var_dump($row);
    //     echo "<br>";
    // }

    echo $result;
?>