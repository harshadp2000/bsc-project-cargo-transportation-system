<html>
    <head>
        <title>Cargo Point</title>
        <link rel="stylesheet" type="text/css" href="../css/v1.css">
    </head>
    <body>
          <div id="receiptTitle"> Receipt </div>
          <div id="receiptBody">
               <?php
                    $n = $_POST['Name'];
                    $sc = $_POST['srcCity'];
                    $dc = $_POST['destCity'];
                    $w = $_POST['weight'];
                    $d = $_POST['distance'];
                    
                    echo "<div id>";
                    echo "Name: $n <br>";
                    echo "Source city: $sc<br>";
                    echo "Destination city: $dc<br>";
                    echo "Weight: $w kg<br>";
                    echo "Price: Rs. $d/- <br>";
               ?>
          </div>

    </body> 
</html>