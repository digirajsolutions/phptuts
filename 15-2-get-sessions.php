<?php 
    //starting the session and get the data to access the application seamlessly across all pages.
    session_start();
    if(isset($_SESSION["username"])){
        echo "Welcome " .$_SESSION["username"];
        echo "<br> Your favorite category is: " . $_SESSION["category"];
        echo "<br>";
    } else {
        echo "Please login to continue.";
    }


?>