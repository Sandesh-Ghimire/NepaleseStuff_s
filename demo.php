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
    $userViewCount = $row['userViewCount'];
    $guestViewCount = $row['guestViewCount'];
    $reportCount = $row['reportCount'];
    $bookmarkCount = $row['bookmarkCount'];
    $upvoteCount = $row['upvoteCount'];
    $downvoteCount = $row['downvoteCount'];

?>

<style>
    p {
        color: #555;
        font-size: 16px;
        line-height: 1.7;
    }

    .blog-content {
        padding: 34px 55px 0px 55px !important;
        margin-bottom: 55px;
        border-radius: 8px;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }
    
</style>
<div class="container-fluid" style="padding: 0 6%;">
    <div class="row">
        <div class="col-12 col-lg-9 blog-content">
            <h4> <?= $title ?> </h4>
            <?= $blogCon ?>
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