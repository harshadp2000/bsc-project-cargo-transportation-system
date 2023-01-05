<?php
     $server = "localhost";
     $username = "root";
     $password = "";
     $con = mysqli_connect($server, $username, $password);
     if (!$con) {
          die("connection failed:" . mysqli_connect_error());
     }
     
     $clientUserName = $_POST['clientUserName'];
     $clientDisplayName = $_POST['clientDisplayName'];
     $clientPassword = $_POST['clientPassword'];
     $clientConfirmPassword = $_POST['clientConfirmPassword'];
     $clientEmail = $_POST['clientEmail'];
     $securityQuestion = $_POST['securityQuestion'];
     $securityAnswer = $_POST['securityAnswer'];
     $agencyName = $_POST['agencyName'];

     $sql = "INSERT INTO `cargotransportations`.`client` (`clientName`, `clientPassword`) VALUES ('$clientName' , '$clientPassword')";
     
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
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="../css/v1.css">
    </head>
    <body>
        <header class="nav">
            <span><a class="button" href="home.php">Home</a></span>
            <span><a class="button" href="login.php">Login</a></span>
            <span><a class="button" id="activeLink" href="#">Registration</a></span>
            <span><a class="button" href="cargo.php">Book Cargo</a></span>
            <span><a class="button" href="about.php">About Us</a></span>
        </header>
        <div>
            <form id="registerWhole">
                <input type="text" size="36" name="clientUserName" class="form" placeholder="Create Username" ><br>
                <input type="text" size="36" name="clientDisplayName" class="form" placeholder="Enter Display Name" ><br>
                <input type="password" size="36" name="clientPassword" class="form" placeholder="Create a Password" ><br>
                <input type="password" size="36" name="clientConfirmPassword" class="form" placeholder="Confirm Password" ><br>
                <input type="email" size="36" name="clientEmail" class="form" placeholder="Enter Email" ><br>
                <input type="text" size="36" name="securityQuestion" class="form" placeholder="Enter security question of your choice" ><br>
                <input type="password" size="36" name="securityAnswer" class="form" placeholder="Enter answer for your security question" ><br>
                <input type="text" size="36" name="agencyName" class="form" placeholder="Enter the name of nearest agency" ><br>
                <input type="submit" name="submit" class="button button2" id="registerSubmit" value="Register" onclick="confirmPassword(); registration();"><br>
                <span id="registerBottom">
                    Already have an account?
                    <a href="login.php">Login</a>
                </span>
            </form>
        </div>
        <script>
            var password = document.getElementByName("clientPassword"), confirmedPassword = document.getElementByName("clientConfirmPassword");
                function validatePassword(){
                if(password.value != confirmedPassword.value){
                    confirmedPassword.setCustomValidity("Enter same passwords");
                } else {
                    confirmedPassword.setCustomValidity('');
                }
                }
                password.onchange = validatePassword;
                confirmedPassword.onkeyup = validatePassword;

                function registration(){
                    alert("boom. Registered.")
                }
        </script>
    </header>
    </body>
</html>
