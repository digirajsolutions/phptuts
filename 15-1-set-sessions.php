<?php 
    //Sessions is used to manage information across different pages.
    //A session is started when a user is logged in into a web application

    session_start();
    $_SESSION["username"] = "Rohit";
    $_SESSION["category"] = "Books";

    echo "The session has been saved successfully.";

?>