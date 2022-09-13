<?php

    $host = "localhost";
    $maindbname = "nepalesestuffmain";
    $user = "root";
    $password = "";

    // Host Name | Database Name
    $dsn = "mysql:host=$host; dbname=$maindbname;";

    // Tables in database
    $mainDbTables = array('admintable', 'usertable', 'blogtable');
    
    try {
        
        // User Input
        // $id = 1;

        // Data Source Name | Username | Password
        $pdo = new PDO($dsn, $user, $password);

        // Set Error Mode
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // PDO Query (Named Parameter)
        // $query = "SELECT * FROM admintable where id=:id;";

        // PDO Prepared Statement
        // $stmt = $pdo->prepare($query);

        // Execute Prepared statment (Named Parameter)
        // $stmt->execute(['id' => $id]);

        // Execute Prepared statment (Positional Parameter)
        // $stmt->execute([$id]);
        
        // Display result
        // while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //     echo $row->name . "<br>";
        // }

        // echo "Connection established";

    } catch (PDOException $e) {
        echo $e->getMessage();
        die($pdo);
    }

?>