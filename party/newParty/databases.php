<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "party_db";

    $connection = mysqli_connect($host, $username, $password, $database);

    if(mysqli_connect_error()) {
        echo "Error to connect to database: <br>";
        echo "Message: " . mysqli_connect_error();
    }
?>