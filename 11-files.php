<?php

    readfile('myfile.txt');
    readfile('file.html');

    $fptr = fopen('myfile.txt', 'r');
    //fopen returns value of file if correct else returns false
    //echo var_dump($fptr);
    if(!$fptr) {
        die('Unable to open file.');
    }    

    // $content = fread($fptr, 6);
    $content = fread($fptr, filesize('myfile.txt'));
    fclose($fptr);    
    echo $content;

?>