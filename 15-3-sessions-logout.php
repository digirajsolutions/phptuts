<?php 
     //logging out and destroying the session
     session_start();
     session_unset();
     session_destroy();

     echo "You have logged out successfully.";

?>