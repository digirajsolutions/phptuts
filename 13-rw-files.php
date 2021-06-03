<?php 
    //writing to a file 
    $fptr = fopen('writefile.txt', 'w');
    fwrite($fptr, "This is a new file to write into it. \n");
    fwrite($fptr, "We use fwrite method to write the content into it.. \n");
    fwrite($fptr, "The content has been written into it. \n");

    fclose($fptr);

    //appending to a file -> writes/appends content where the previous content has been ended. Gets added when run multiple times
    // $fptr = fopen("writefile.txt", "a");
    // fwrite($fptr, "This is appended to the file \n");
    // fclose($fptr);
    
?>