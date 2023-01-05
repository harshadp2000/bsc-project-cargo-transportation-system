<!DOCTYPE html>
<html>
    <head>
        <title>Cargo Booking</title>
        <link rel="stylesheet" type="text/css" href="../css/v1.css">
    </head>
    <body>
        <header class="nav">
            <span><a class="button" href="home.php">Home</a></span>
            <span><a class="button" href="login.php">Login</a></span>
            <span><a class="button" href="registration.php">Registration</a></span>
            <span><a class="button" id="activeLink" href="#">Book Cargo</a></span>
            <span><a class="button" href="about.php">About Us</a></span>
        </header>
        <br>
        <main>
            <div>
                <form id="cargoWhole" action="receipt.php" method="POST">
                    <input type="text" size="36" name="Name" class="form" placeholder="Enter item name" ><br>
                    <input type="text" size="36" name="srcCity" class="form" placeholder="Enter source city"><br>
                    <input type="text" size="36" name="destCity" class="form" placeholder="Enter destination city"><br>
                    <input type="number" size="36" name="weight" class="form" id="weight" placeholder="Enter weight of item (in kgs)"><br>
                    <input type="number" size="36" name="distance" class="form" id="distance" placeholder="Enter distance of destination (in kms)"><br>
                    <input type="button" onClick="calculateCharges()" value="Calculate Charges" class="button button2" id="cargoCC" ><br>
                    <span id = "cargoResult" name="cargoResult"></span><br>
                    <input type="submit" class="button button2" id="cargoCB" value="Confirm Booking" onclick="next.php">
                </form>
            </main>
        </div><br>
        <script>
            function calculateCharges(){
                    num1 = document.getElementById("distance").value;
                    num2 = document.getElementById("weight").value;
                    payment="Transportation Charges: Rs. "+(num1*num2)+"/-"
                    document.getElementById("cargoResult").innerHTML =payment;     
            }
        </script>
        <!-- <?php
          $c= "<script>document.writeln(payment);</script>";
        ?> -->
    </body>
</html>