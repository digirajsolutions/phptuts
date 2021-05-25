<?php 

    //connecting to database
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'mydatabase1';

    //creating a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn) {
        die('Failed to connect');
    } else {
        echo 'Connection was created successfully.';
        echo '<br>';
    }

    $sql = "INSERT INTO `employee` (`empid`, `name`, `age`, `dept`) VALUES ('3', 'Rohit', '27', 'development')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo 'The query was inserted. <br>';
    } else {
        echo 'The query was not inserted. <br>';
    }
    
?>