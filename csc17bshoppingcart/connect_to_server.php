<!DOCTYPE html>
<html>
    <body>

        <?php
//        $servername = "localhost";
//        $username = "root";
//        $password = "";
        $servername = "209.129.8.7";
        $username = "eriknurja";
        $password = "columbia2014";
        $dbname = "eriknurja_48947";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        ?> 

    </body>
</html>