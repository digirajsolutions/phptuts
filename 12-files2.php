 <?php 
    $fptr = fopen('myfile.txt', 'r');
    //fgets function reads and returns one line at a time.
    // echo fgets($fptr);
    // echo fgets($fptr);
    // echo fgets($fptr);
 
    // while($r = fgets($fptr)) {
    //     echo $r;
    // }
    echo '<br>';

    //reading file by character
     echo fgetc($fptr);
     echo fgetc($fptr);
     echo fgetc($fptr);
     echo fgetc($fptr);
    echo '<br>';
     
    while($r = fgetc($fptr)) {
        echo $r;
        if($r == '.') {
            break;
        }
    }

    fclose($fptr);
 ?>