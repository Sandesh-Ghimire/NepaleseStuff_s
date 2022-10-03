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
    $totalViewCount = $userViewCount + $guestViewCount;
    $reportCount = $row['reportCount'];
    $bookmarkCount = $row['bookmarkCount'];
    $upvoteCount = $row['upvoteCount'];
    $downvoteCount = $row['downvoteCount'];

    // Increase view count
    $viewCountColumn = "";
    if (isset($_SESSION['userId'])) {
        $viewCountColumn = "userViewCount";
    } else {
        $viewCountColumn = "guestViewCount";
    }
    // $query = "UPDATE `$viewCountColumn` SET  FROM `blogtable` WHERE `blogId` = ?";
    // $stmt = $pdo->prepare($query);
    // $stmt->execute([$id]);

?>

<style>

    hr {
        background: #000;
        background-image: -webkit-linear-gradient(left, #ccc, #333, #ccc) !important;
        background-image: -moz-linear-gradient(left, #ccc, #333, #ccc) !important;
        background-image: -ms-linear-gradient(left, #ccc, #333, #ccc) !important;
        background-image: -o-linear-gradient(left, #ccc, #333, #ccc) !important;
    }

    .blog-container {
        margin-bottom: 55px;
        border-radius: 8px;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    .blog-container p {
        color: #555;
        font-size: 16px;
        line-height: 1.7;
    }
    .blog-container-footer {
        display: inline-block;
        width: 100%;
    }

    .stat-container-wrapper {
        display: inline-block;
    }

    .stat-container {
        display: flex;
        align-items: center;
    }

    .stat-container i {
        color: #555;
        margin-bottom: -5px;
    }

    .blog-stat {
        color: #555;
        margin: auto 8px;
    }

    .blog-options {
        display: inline;
        float: right;
    }

    .blog-options i {
        color: #555;
        margin-top: 5px;
    }

    @media only screen and (min-width:992px) {
        .blog-container {
            padding: 34px 55px 21px 55px !important;
        }
        .blog-stat {
            font-size: 18px;
        }
        .stat-container i {
            font-size: 18px;
            margin-right: 3px;
        }
        .blog-options i {
            font-size: 18px;
        }
    }

    @media only screen and (max-width:991px) {
        .blog-container {
            padding: 21px 34px 21px 34px !important;
        }
        .blog-stat {
            font-size: 18px;
        }
        .stat-container i {
            font-size: 18px;
            margin-right: 3px;
        }
        .blog-options i {
            font-size: 18px;
        }
    }

    @media only screen and (max-width:414px) {
        .blog-container {
            padding: 13px 21px 21px 21px !important;
        }
        .blog-stat {
            font-size: 16px;
        }
        .stat-container i {
            font-size: 16px;
        }
        .blog-options i {
            font-size: 16px;
        }
    }
    
</style>
<div class="container-fluid" style="padding: 0 6%;">
    <div class="row">
        <div class="col-12 col-lg-9 blog-container">
            <h4 class="blog-title"> <?= $title ?> </h4>
            <span class="blog-content"> <?= $blogCon ?> </span>
            <hr>
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