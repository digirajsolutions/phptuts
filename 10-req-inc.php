<?php 
    // include '10.1-db-connect.php';
    require '10.1-db-connect.php';

    $sql = "SELECT * FROM 'employee'";
    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);
    echo $num;

?>