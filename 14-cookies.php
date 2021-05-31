<?php 
    // setcookie("category", "Books", time()+86400, "/");
    // echo "The cookie has been set successfully.";

?>

<?php 
    //syntax -> setcookie(name, value, expire, path, domain, security);
    //only name parameter is required, others are optional
    
    //program for entering student data into cookies and retrieving it from the cookies.
    setcookie("name", "Dhananjay Mane", time()+86400, "/");
    setcookie("rollno", "10", time()+86400, "/");
    setcookie("dept", "Computer Science Engineering", time()+86400, "/");
    setcookie("college", "DYPCET", time()+86400, "/");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Implementing Cookies in PHP</title>
</head>
<body>
    <?php 
        //accessing cookies 
        echo "Student Information from Cookies: <br/>";
        echo "Name: " . $_COOKIE["name"] . "<br/>";
        echo "Roll No: " . $_COOKIE["rollno"] . "<br/>";
        echo "Department: " . $_COOKIE["dept"] . "<br/>";
        echo "College: " . $_COOKIE["college"] . "<br/>";   
    ?>
</body>
</html>