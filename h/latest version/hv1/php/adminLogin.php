<?php
     $server = "localhost";
     $username = "root";
     $password = "";
     $con = mysqli_connect($server, $username, $password);
     if (!$con) {
          die("connection failed:" . mysqli_connect_error());
     }
     
     $adminName = $_POST['adminName'];
     $adminPassword = $_POST['adminPassword'];
     $sql = "INSERT INTO `cargotransportations`.`admin` (`adminName`, `adminPassword`) VALUES ('$adminName' , '$adminPassword')";
     
     if ($con->query($sql) == true) {
          echo "successfully inserted";
     } else {
          echo "error: $sql <br> $con->error";
     }
     
     $con->close();
?>


<!DOCTYPE html>
<html>

<head>
     <title>Home</title>
     <link rel="stylesheet" type="text/css" href="../css/v1.css">
</head>

<body>
     <header class="nav">
          <span><a class="button" href="home.php">Home</a></span>
          <span><a class="button" id="activeLink" href="login.php">Login</a></span>
          <span><a class="button" href="registration.php">Registration</a></span>
          <span><a class="button" href="cargo.php">Book Cargo</a></span>
          <span><a class="button" href="about.php">About Us</a></span>
     </header>
     <main>
          <span id="adminTitle">Admin Login</span>
          <form id="adminWhole" action="adminLogin.php" method="POST">
               <input type="text" name="adminName" class="form" placeholder="Enter Username"><br>
               <input type="password" name="adminPassword" class="form" placeholder="Enter Password"><br>
               <input type="submit" id="adminButton" value="Submit" class="button button2"></button>
          </form>
     </main>
</body>

</html>