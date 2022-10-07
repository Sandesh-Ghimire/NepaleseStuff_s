<?php
    
    session_start();
    include "functions/connect.php";

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
        $isLoggedIn = true;
        $userViewCount+=1;
        $query = "UPDATE `blogtable` SET `userViewCount` = $userViewCount WHERE `blogId` = ?";
    } else {
        $isLoggedIn = false;
        $guestViewCount += 1;
        $query = "UPDATE `blogtable` SET `guestViewCount` = $guestViewCount WHERE `blogId` = ?";
    }
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);

?>

<!-- Internal CSS -->
<style>
    .setCursorNotAllowed {
        cursor: not-allowed !important;
    }
    .blog-container {
        border-radius: 8px;
        margin-bottom: 34px;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }
    .blog-container hr {
        height: 1px;
        border: none;
        background-image: -webkit-linear-gradient(left, #555, #000, #555) !important;
        background-image: -moz-linear-gradient(left, #555, #000, #555) !important;
        background-image: -ms-linear-gradient(left, #555, #000, #555) !important;
        background-image: -o-linear-gradient(left, #555, #000, #555) !important;
    }

    .blog-container p {
        color: #555;
        font-size: 16px;
    }

    .blog-stat {
        color: #555;
    }

    .stat-container {
        float: left;
    }

    .stat-container i {
        margin-right: 5px;
    }

    .blog-options {
        float: right;
    }

    .blog-container-footer {
        display: inline;
    }

    .blog-container-footer i {
        color: #555;
    }
    /* .blog-container .blog-img {
        max-width: 640px;
        max-height: 360px;
    } */

    @media only screen and (min-width: 992px) {
        .blog-container {
            padding: 21px 55px 21px 55px;
        }
        .blog-container-footer i {
            font-size: 21px;
        }
        .blog-stat {
            font-size: 21px;
        }
        .blog-options {
            margin-top: 8px;
        }
        .blog-container .blog-img {
            margin: 13px auto 21px auto;
        }
    }

    .blog-img {
        border-radius: 8px;
    }

    /* Media Query */
    @media only screen and (max-width: 992px) and (min-width: 377px) {
        .blog-container-footer i {
            font-size: 18px;
        }
        .blog-stat {
            font-size: 18px;
        }
        .blog-container {
            padding: 21px 34px 21px 34px;
        }
        .blog-container .blog-img {
            margin: 13px auto 21px auto;
        }
    }

    @media only screen and (max-width: 992px) and (min-width: 575px) {
        .stat-widget {
            margin-top: -29px;
        }
    }

    @media only screen and (max-width: 377px) {
        .blog-container {
            padding: 21px 21px 21px 21px;
        }
        .blog-container-footer i {
            font-size: 16px;
        }
        .blog-stat {
            font-size: 16px;
        }
        .blog-container .blog-img {
            margin: 8px auto 13px auto;
        }
    }

</style>

<!-- HTML Starts -->
<div>
    <div class="container-fluid" style="padding: 0 6%;">
        <div class="row">
            <div class="col-12 col-lg-9 blog-container">

                <!-- Blog Content -->
                <h2 class="blog-title"> <?= $title ?> </h2>
                <center>
                    <img src="<?= "img/blog-img/" . $img1 ?>" alt="thumbnail-1" class="blog-img img-fluid" max-height>
                </center>
                <span class="blog-content"> <?= $blogCon ?> </span>
                <hr>

                <!-- Blog Footer -->
                <div class="blog-container-footer">

                    <!-- Left Side Option -->
                    <div class="stat-container-wrapper">
                        <div class="stat-container">
                            <i class="fa-solid fa-eye" title="Views"></i>
                            <span class="blog-stat"> <?= $totalViewCount ?> </span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php
                                if($isLoggedIn==true) {
                                    echo "<i class='fa-solid fa-thumbs-up setCursorPointer' title='Like' id='like'></i>
                                    <span class='blog-stat' id='likevalue'> $upvoteCount </span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class='fa-solid fa-thumbs-down setCursorPointer' title='Dislike' id='dislike'></i>
                                    <span class='blog-stat' id='dislikevalue'> $downvoteCount </span>";
                                } else {
                                    echo "<i class='fa-solid fa-thumbs-up setCursorNotAllowed' title='Login to like the post'></i>
                                    <span class='blog-stat'> $upvoteCount </span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class='fa-solid fa-thumbs-down setCursorNotAllowed' title='Login to dislike the post'></i>
                                    <span class='blog-stat'> $downvoteCount </span>";
                                }
                            ?>
                        </div>
                    </div>

                    <!-- Right Side Option -->
                    <div class="blog-options">
                        <?php
                            if ($isLoggedIn==true) {
                                echo "<i class='fa-solid fa-bookmark setCursorPointer' title='Bookmark' id='bookmark'></i>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class='fa-solid fa-flag blog-option setCursorPointer' title='Report' id='report'></i>";
                            } else {
                                echo "<i class='fa-solid fa-bookmark setCursorNotAllowed' title='Login to bookmark the post'></i>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <i class='fa-solid fa-flag blog-option setCursorNotAllowed' title='Login to report the post'></i>";
                            }
                        ?>
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

<script>

    function changeButtonColor(btn) {
        const red = "rgb(239, 27, 72)";
        const blue = "rgb(4, 52, 213)";
        const grey = "rgb(85, 85, 85)";
        let ele = document.getElementById(btn);
        let likeValue = document.getElementById("likevalue");
        let dislikeValue = document.getElementById("dislikevalue");
        if (btn=="like") {
            if (document.getElementById("dislike").style.color==red) {
                dislikeValue.innerText = Number(dislikeValue.innerText) - 1;
            }
            if (ele.style.color==blue) {
                ele.style.color = grey;
                likeValue.innerText = Number(likeValue.innerText) - 1;
            } else {
                ele.style.color = blue;
                document.getElementById("dislike").style.color = grey;
                likeValue.innerText = Number(likeValue.innerText) + 1;
            }
        } else if (btn=="dislike") {
            if (document.getElementById("like").style.color==blue) {
                likeValue.innerText = Number(likeValue.innerText) - 1;
            }
            if (ele.style.color==red) {
                ele.style.color = grey;
                dislikeValue.innerText = Number(dislikeValue.innerText) - 1;
            } else {
                ele.style.color = red;
                document.getElementById("like").style.color = grey;
                dislikeValue.innerText = Number(dislikeValue.innerText) + 1;
            }
        } else if (btn=="report") {
            if (ele.style.color==red) {
                ele.style.color = grey;
            } else {
                ele.style.color = red;
            }
        } else if (btn=="bookmark") {
            if (ele.style.color==blue) {
                ele.style.color = grey;
            } else {
                ele.style.color = blue;
            }
        } else {
            alert("Error: Invalid Button");
        }
    }

    $('#like').click(() => {
        $.ajax({
            url: "verifyBlogAction.php",
            type: 'POST',
            data: {
                blogId: <?= $id ?>,
                action: "like"
            },
            success: function(result) {
                changeButtonColor("like");
            },
            error: function(result) {
                alert("Error: Something went wrong...");
            }
        });
    });

    $('#dislike').click(() => {
        $.ajax({
            url: "verifyBlogAction.php",
            type: 'POST',
            data: {
                blogId: <?= $id ?>,
                action: "dislike"
            },
            success: function(result) {
                changeButtonColor("dislike");
            },
            error: function(result) {
                alert("Error: Something went wrong...");
            }
        });
    });

    $('#report').click(() => {
        $.ajax({
            url: "verifyBlogAction.php",
            type: 'POST',
            data: {
                blogId: <?= $id ?>,
                action: "report"
            },
            success: function(result) {
                changeButtonColor("report");
            },
            error: function(result) {
                alert("Error: Something went wrong...");
            }
        });
    });

    $('#bookmark').click(() => {
        $.ajax({
            url: "verifyBlogAction.php",
            type: 'POST',
            data: {
                blogId: <?= $id ?>,
                action: "bookmark"
            },
            success: function(result) {
                changeButtonColor("bookmark");
            },
            error: function(result) {
                alert("Error: Something went wrong...");
            }
        });
    });

</script>