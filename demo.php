<?php
    
    session_start();
    include "functions/connect.php";
    require_once "functions/variables.php";

    $id = 9;
    $query = "SELECT * FROM `blogtable` WHERE `blogId` = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $title = $row['title'];
    $author = $row['author'];
    $date = $row['date'];
    $blogCon = $row['blogcon'];
    $img1 = $row['img1'];
    $img2 = $row['img2'];
    $img3 = $row['img3'];
    $img4 = $row['img4'];
    $img5 = $row['img5'];
    $tag1 = $row['tag1'];
    $tag2 = $row['tag2'];
    $tag3 = $row['tag3'];
    $tag4 = $row['tag4'];
    $tag5 = $row['tag5'];
    $userViewCount = (int)$row['userViewCount'];
    $guestViewCount = (int)$row['guestViewCount'];
    $totalViewCount = $userViewCount + $guestViewCount;
    $reportCount = (int)$row['reportCount'];
    $bookmarkCount = (int)$row['bookmarkCount'];
    $upvoteCount = (int)$row['upvoteCount'];
    $downvoteCount = (int)$row['downvoteCount'];

    // Increase view count
    if (isset($_SESSION['userId'])) {
        $query = "UPDATE `blogtable` SET `userViewCount` = $userViewCount+1 WHERE `blogId` = ?";
    } else {
        $query = "UPDATE `blogtable` SET `guestViewCount` = $guestViewCount+1 WHERE `blogId` = ?";
    }
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);

?>

<!-- External CSS -->
<link rel="stylesheet" href="css/custom/blog.css">

<!-- Internal CSS -->
<style>
    .blog-container hr {
        height: 1px;
        border: none;
        background-image: -webkit-linear-gradient(left, #888, #000, #888) !important;
        background-image: -moz-linear-gradient(left, #888, #000, #888) !important;
        background-image: -ms-linear-gradient(left, #888, #000, #888) !important;
        background-image: -o-linear-gradient(left, #888, #000, #888) !important;
    }
</style>

<!-- HTML Starts -->
<div>
    <div class="container-fluid" style="padding: 0 6%;">
        <div class="row">
            <div class="col-12 col-lg-9 blog-container">

                <!-- Blog Content -->
                <h4 class="blog-title"> <?= $title ?> </h4>
                <span class="blog-content"> <?= $blogCon ?> </span>
                <hr>

                <!-- Blog Footer -->
                <div class="blog-container-footer">
                    <div class="stat-container-wrapper">
                        <div class="stat-container">
                            <i class="fa-solid fa-eye" title="Views"></i>
                            <span class="blog-stat"> <?= $totalViewCount ?> </span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa-solid fa-thumbs-up setCursorPointer" title="Like"></i>
                            <span class="blog-stat"> <?= $upvoteCount ?> </span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="fa-solid fa-thumbs-down setCursorPointer" title="Dislike"></i>
                            <span class="blog-stat"> <?= $downvoteCount ?> </span>
                        </div>
                    </div>
                    <div class="blog-options">
                        <i class="fa-solid fa-bookmark setCursorPointer" title="Bookmark"></i>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fa-solid fa-flag blog-option setCursorPointer" title="Report"></i>
                    </div>
                </div>
            </div>
            <!-- Side Bar -->
            <div class="col-12 col-lg-3">
                <div class="sidebar-area">
                    <div class="row">
                        <!-- Ad Widget -->
                        <div class="col-12 col-sm-6 col-lg-12" style="margin-top: -21px;">
                            <div class="single-widget-area add-widget">
                                <div id="ad-widget">
                                    <a href="#">
                                        <img src="img/bg-img/add3.png" alt="" width="100%">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Related Topics -->
                        <div class="col-12 col-sm-6 col-lg-12" style="margin-top: 8px;">
                            <div class="single-widget-area stat-widget">
                                <h6>Related Topics</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- HTML Ends -->