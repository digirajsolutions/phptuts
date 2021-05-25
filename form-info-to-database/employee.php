<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Form Styling</title>
    <link
      href="https://fonts.googleapis.com/css?family=Raleway"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div id="container">
      <div class="form-wrap">
        <h2>Employee Info</h2>
        <p>Please fill up your details here.</p>
        <form action="/phptuts/form-info-to-database/employee.php" id="employeeForm" method="post">
          <div class="form-group">
            <label for="empid">Employee Id</label>
            <input type="text" name="empid" id="empid" />
          </div>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" />
          </div>
          <div class="form-group">
            <label for="role">Role</label>
            <input type="text" name="role" id="role" />
          </div>
          <button type="submit" class="btn">Add Data</button>
        </form>
      </div>
      <footer>
        <p>All Rights Reserved. 2021 &copy;</p>
      </footer>

      <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
          $empid = $_POST['empid'];
          $name = $_POST['name'];
          $email = $_POST['email'];
          $role = $_POST['role'];

          //connecting to database
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "employee";

          //creating a connection
          $conn = mysqli_connect($servername, $username, $password, $database);
          //if connection was not successful then die
          if(!$conn) {
            die("Sorry.. Failed to connect: " . mysqli_connect_error());
          } else {
            //submit to database
            $query = "INSERT INTO `empinfo` (`id`, `name`, `email`, `role`) VALUES ('$empid', '$name', '$email', '$role')";
            $result = mysqli_query($conn, $query);

            if($result) {
              echo 'Entry Submitted';
            } else {
              echo "Entry not submitted";
            }
          }
        }
      ?>

    </div>
  </body>
</html>
