<?php

    session_start();

    include "../functions/connect.php";



    if(!isset($_SESSION['userId'])) {
        echo "<script>alert('Error: Code Manipulation Detected (Response Captured)')</script>";
        header("Location: ../index.php");
    }




?>

<!-- HTML Starts Here -->
<div class='container-fluid' style='padding: 0 6%;'>
    <div class='intro-news-tab' id='lower-nav'>
        <div class='col-12 intro-news-filter d-flex justify-content-between'>
            <nav>
                <div class='nav nav-tabs' id='nav-tab' role='tablist'>
                    <a class='nav-item nav-link active' id='nav1' data-toggle='tab' href='#nav-1' role='tab' aria-controls='nav-1' aria-selected='true'>Bookmark</a>
                    <a name='' class='nav-item nav-link back-slash-separator' style='pointer-events: none;'>/</a>
                    <a class='nav-item nav-link' id='nav2' data-toggle='tab' href='#nav-2' role='tab' aria-controls='nav-2' aria-selected='false'>Like</a>
                    <a name='' class='nav-item nav-link back-slash-separator' style='pointer-events: none;'>/</a>
                    <a class='nav-item nav-link' id='nav3' data-toggle='tab' href='#nav-3' role='tab' aria-controls='nav-3' aria-selected='false'>Dislike</a>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class='intro-news-tab'>
    <div class='tab-content' id='nav-tabContent'>

        <!-- Bookmarked Blog Here -->
        <div class='tab-pane fade show active' id='nav-1' role='tabpanel' aria-labelledby='nav1'>
            <div class='text-dark text-center'>
                Bookmark

 <?php


if (isset($_SESSION['userId'])) {

    $tablename = "userobj" . (string)$_SESSION['userId'];
    $query = "SELECT * FROM $tablename WHERE `bookmarkedBlog` = 2";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    echo $row['visitedBlog'];

    echo $tablename; 
    

}


?>






            </div>
        </div>
        <!-- Liked Blog Here -->
        <div class='tab-pane fade' id='nav-2' role='tabpanel' aria-labelledby='nav2'>
            <div class='text-dark text-center'>
                Like
            </div>
        </div>
        <!-- Disliked Blog Here -->
        <div class='tab-pane fade' id='nav-3' role='tabpanel' aria-labelledby='nav3'>
            <div class='text-dark text-center'>
                Dislike
            </div>
        </div>
    </div>
</div>