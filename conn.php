<?php
    $user = "root";
    $pwd = "";
    $host = "localhost";
    $db_name = 'face';

    // phpinfo();

    $conn = mysqli_connect($host, $user, $pwd, $db_name);

    if(!$conn){
        // echo "Connection failed".mysqli_error($conn);
        die("connection failed");
    }

?>