<?php
    
    session_start();
    include "functions/connect.php";

    // Get Previous Views Value
    $userViewCount = $_POST["userViewCount"];
    $guestViewCount = $_POST["guestViewCount"];
    $id = $_POST["blogId"];

    // Increase user view count
    if (isset($_SESSION['userId'])) 
    {
        $tablename = "userobj" . (string)$_SESSION['userId'];
        
        $query = "UPDATE `blogtable` SET `userViewCount` = $userViewCount+1 WHERE `blogId` = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);

    } 
    // Increase user view count
    else 
    {
        $query = "UPDATE `blogtable` SET `guestViewCount` = $guestViewCount+1 WHERE `blogId` = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);

    }

?>