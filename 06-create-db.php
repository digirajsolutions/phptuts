<?php 

    //connecting to database
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    //creating a connection
    $conn = mysqli_connect($servername, $username, $password);
    if(!$conn) {
        die('Failed to connect');
    } else {
        echo 'Connection was successful';
        echo '<br>';
    }

    //creating a database
    $sql = 'CREATE DATABASE mydatabase1';
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo 'The database was created successfully. <br>';
    } else {
        echo 'The database was not created successfully. <br>';
    }
?>