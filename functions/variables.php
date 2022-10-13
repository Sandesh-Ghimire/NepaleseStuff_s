<?php

    include "connect.php";

    $contactNumber = 9876543210;
    $emailAddress = "info@nepalesestuff.com";
    $location = "India,Rajkot 360003";

    // Featured Blog Id
    $query = "SELECT * FROM `featuredtable` WHERE `blogId0` = 0";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    $featuredBlog = [$row['blogId1'], $row['blogId2'], $row['blogId3'], $row['blogId4'], $row['blogId5'], $row['blogId6'], $row['blogId7'], $row['blogId8'], $row['blogId9']];

    // Latest Blog Id
    $i = 0;
    $numberOfBlogs = 9;
    $latestBlog = [0,0,0, 0,0,0, 0,0,0];

    $query = "SELECT * from `blogtable` ORDER BY `blogId` DESC LIMIT $numberOfBlogs";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $latestBlog[$i] = $row['blogId'];
        $i++;
    }
    
    // Popular Blog Id
    $i = 0;
    $popularBlog = [0,0,0, 0,0,0, 0,0,0];

    $query = "SELECT *, `userViewCount`+`guestViewCount` AS `viewratio` FROM `blogtable` ORDER BY `viewratio` DESC LIMIT $numberOfBlogs";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $popularBlog[$i] = $row['blogId'];
        $i++;
    }

    // Loved Blog Id
    $i = 0;
    $lovedBlog = [0,0,0, 0,0,0, 0,0,0];

    $query = "SELECT *, `upvoteCount`-`downvoteCount` AS `reactratio` from `blogtable` ORDER BY `reactratio` DESC LIMIT $numberOfBlogs";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $lovedBlog[$i] = $row['blogId'];
        $i++;
    }

?>