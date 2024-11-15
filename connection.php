<?php

    $host = "localhost";
    $user = "root";
    $password = "manager";
    $database = "siemens";
    $conn = new mysqli($host,$user,$password,$database);

    if($conn->connect_error)
        echo "unable to connect";

?>
