<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "code_ignit";
    
    $connection = mysqli_connect($host, $user, $pass, $database);
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>