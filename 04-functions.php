<?php
echo "Welcome to php tutorial on functions <br>";

function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}

$rohan = [34, 98, 45, 12, 98, 93];
// $sumMarks = processMarks($rohan);
$sumMarks = avgMarks($rohan);

$rohit = [99, 98, 93, 94, 17, 100];
// $sumMarks2 = processMarks($rohit);
$sumMarks2 = avgMarks($rohit);
echo "Total marks scored by Rohan out of 600 is $sumMarks <br>";
echo "Total marks scored by Rohit out of 600 is $sumMarks2";

?>

<?php
//date function - more info on php.net
echo "Welcome to the world of dates<br>";
// $d = date("dS F Y");
$d = date("dS F Y, g:i A");
echo "Todays date is $d <br>";
// Quick Quiz - Post at least 3 examples of dates in php in the comments below

// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');
 
$year = date("Y");
echo "<br>";
echo "Copyright $year | All rights reserved <br>";

?>


