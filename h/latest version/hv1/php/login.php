<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="../css/v1.css">  
    </head>
    <body>
        <a id="homeBottom" class="button" href="adminLogin.php">Admin Login</a>
        <header class="nav">
            <span><a class="button" href="home.php">Home</a></span>
            <span><a class="button" id="activeLink" href="#">Login</a></span>
            <span><a class="button" href="registration.php">Registration</a></span>
            <span><a class="button" href="cargo.php">Book Cargo</a></span>
            <span><a class="button" href="about.php">About Us</a></span>
        </header>
        <div>
          <form id="loginWhole">
              <input type="text" size="36" name="name" class="form" placeholder="Enter Username"><br>
              <input type="password" size="36" name="password" class="form" placeholder="Enter Password"><br>
              <input type="submit" name="submit" id="loginButton" class="button button2" value="Login" onclick="myFunction()"><br>
              <span id="loginBottom">
                  New User? <a href="registration.php">Register</a><br><br>
                  Forgot Password? <a href="forgotPassword.php">Reset</a>
              </span>
             </form>
              <script>
                function myFunction(){
                  alert("Login Success!");
                }
                </script>
            </form>
        </div>
    </body>
</html>