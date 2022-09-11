<?php

    $dbHost = "localhost";
    $dbName = "nepalesestuffmain";
    $username = "root";
    $password = "";

    // Host Name | Database Name
    $dsn = "mysql:host=$dbHost; dbname=$dbName;";
    
    try {
        // Data Source Name | Username | Password
        $conn = new PDO($dsn, $username, $password);
        // Set Error Mode
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $query = "SELECT * FROM admintable;";
        // $conn->query($query);
        // echo "connection successfull";
    } catch (PDOException $e) {
        echo $e->getMessage();
        die($conn);
    }

?>