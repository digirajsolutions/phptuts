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
        echo 'Connection was successful';
        echo '<br>';
    }

    $sql = 'CREATE TABLE `employee` ( `empid` INT(11) NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(20) NOT NULL ,  `age` INT(11) NOT NULL ,  `dept` VARCHAR(11) NOT NULL ,    PRIMARY KEY  (`empid`))';
    $result = mysqli_query($conn, $sql);

    if($result) {
        echo 'The table was created successfully. <br>';
    } else {
        echo 'The table was not created successfully. <br>';
    }
    
?>