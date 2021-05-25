<?php
// $a = 665;
// $b = 9;

// if($a > 78){
//     echo "a is greater than 78";
// }
// else{
//     echo "a is not greater than 78";
// }

$age = 24;

// If else ladder
// if ($age>18){
//     echo "You can drink water with chai and alcohol";
// }
// elseif($age>13){
//     echo "You can drink chai only with water. No alcohol for you";
// }
// else{
//     echo "You can drink water only";
// }


if ($age>18){
    echo "You can drink water with chai and alcohol<br>";
}

if($age>13){
    echo "You can drink chai only with water. No alcohol for you<br>";
}
else{
    echo "You can drink water only<br>";
}


// Quick quiz - 
// 1. Create an if else ladder using more than one elseif 
// 2. Write a program to allow a driver to drive only when his age is greater than or equal to 25
// and less than or equal to 65

echo "Done";
?>


<!-- <?php
// Switch case
$age = 56;
switch($age){
    case 12:
        echo "You are 12 years old <br>";
        break;
    case 45:
        echo "You are 45 years old <br>";
        break;
    case 56:
        echo "You are 56 years old boy <br>";
        break;
     default:
        echo "Your age is weird <br>";
        break;
    }

?> -->

<!-- <?php
//while loop
echo "while loops in php";echo"<br>";
// echo 1;echo"<br>";
// echo 2;echo "<br>";
// echo 3;echo "<br>";
// echo 4;echo "<br>";
// echo 5;echo "<br>";

/* 
while (condition){
    some lines of code here;
}
*/

$i = 0; 
while($i<5){
    echo "The value of i is ";
    echo $i+1;
    echo "<br>";
    $i+=1; 
} 
?> -->

<!-- <?php
//for loop
echo "This is for loop in action <br>";

for ($index=1; $index < 6; $index++) { 
    echo "The number is $index <br>";
}

// Avoid running into infinite loops
// for ($i=0; $i < 87; ) { 
//     echo $i;
// }

echo "For loop has ended";
?> -->

<!-- <?php
echo "Welcome to do while loops <br>";
/*
do {
    some lines of code to be executed here;
    ...
} while(condition);
*/
$i = 0;
do{
    echo "$i <br>";
    $i++;
}while($i<5);

?> -->

<!-- <?php
echo "Welcome to the world of foreach loops <br>";
$arr = array("Bananas", "Apples", "Harpic", "Bread", "Butter");

// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i];
//     echo "<br>";
// }

// Better way to do this - foreach loops
foreach ($arr as  $value) {
    echo "$value <br>";
}

?> -->
