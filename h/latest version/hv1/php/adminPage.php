<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" type="text/css" href="../css/v1.css">
    </head>
    <body>
        <header class="nav">
            <span><a class="button" href="home.php">Home</a></span>
            <span><a class="button" href="login.php">Login</a></span>
            <span><a class="button" href="registration.php">Registration</a></span>
            <span><a class="button" href="cargo.php">Book Cargo</a></span>
            <span><a class="button" href="about.php">About Us</a></span>
        </header>
        <main>
            <div>
                <span id="registerTitle">Register new Agency</span>
                <form id="adminPageWhole">
                    <input type="text" size="36" name="name" class="form" placeholder="Enter Agency name"><br>
                    <input type="email" size="36" name="email" class="form" placeholder="Enter Email"><br>
                    <input type="text" size="36" name="location" class="form" placeholder="Enter Agency Location"><br>
                    <input type="submit" name="" id="adminPageButton" class="button button2" value="Register Agency"><br>
                </form>
            </div>
            <!-- <div id="agencyBottomHeading">
                List of Available Agencies
            </div>
            <div>
                <ul>
                    <li>Mumbai</li>
                    <li>Pune</li>
                    <li>Delhi</li>
                    <li>Kolkata</li>
                    <li>Chennai</li>
                </ul>
            </div> -->
        </main>
    </body>
</html>