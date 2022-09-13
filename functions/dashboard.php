<?php

    include "connect.php";

    // Statistics Widget Data
    $numOfPartners = 13;
    $yearOfOrigin = 2019;
    $yearsOfExperience = date("Y") - $yearOfOrigin;

    // Dashboard Blogs
    $featuredContentArray = [];
    $latestContentArray = [];
    $trendingContentArray = [];

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

?>