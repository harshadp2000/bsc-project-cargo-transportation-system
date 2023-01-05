<!DOCTYPE html>
<html>
        <head>
            <title>Reset Password</title>
            <link rel="stylesheet" type="text/css" href="../css/v1.css">
        </head>
        <body>
            <header>
                <span>
                    <a class="button" href="login.php">Back to Login</a>
                </span>
            </header>
            <h1 id="resetPasswordTitle">Reset Password</h1>
            <form id="resetPassword" action=login.php>
                <input type="password" name="password" class="form" id="password" placeholder="Enter new password" required><br>
                <input type="password" name="confirm_password" class="form" id="confirm_password" placeholder="Confirm password" required ><br>
                <input type="submit" name="" class="button button2" value="Confirm" onclick="success()">
            </form>
            <script>
                var password = document.getElementById("password")
                    , confirm_password = document.getElementById("confirm_password");
    
                    function validatePassword(){
                    if(password.value != confirm_password.value) {
                        confirm_password.setCustomValidity("Enter same password");
                    } else {
                        confirm_password.setCustomValidity('');
                    }
                    }
                    password.onchange = validatePassword;
                    confirm_password.onkeyup = validatePassword;
                function success(){
                    alert("Password changed succesfully!")
                }    
            </script>
        </body>
</html>