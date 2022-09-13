<?php

    include "connect.php";

    // ***** Statistics *****

    // Statistics Widget Data
    $numOfPartners = 13;
    $yearOfOrigin = 2019;
    $yearsOfExperience = date("Y") - $yearOfOrigin;

    // Number of users
    $query = "SELECT COUNT(*) FROM $mainDbTables[1]";
    $getUserCount = $pdo->prepare($query);
    $getUserCount->execute();
    $numOfUsers = $getUserCount->fetchColumn();
    
    // Number of blogs
    $query = "SELECT COUNT(*) FROM $mainDbTables[2]";
    $getBlogCount = $pdo->prepare($query);
    $getBlogCount->execute();
    $numOfBlogs = $getBlogCount->fetchColumn();

    // ***** Dynamic Content *****

    // Dashboard Blogs
    $featuredContentArray = [];
    $latestContentArray = [];
    $trendingContentArray = [];

?>