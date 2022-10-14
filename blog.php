<?php 

    session_start();
    include "functions/connect.php";

    $id = $_GET["blogId"];

    $query = "SELECT * FROM `blogtable` WHERE `blogId` = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (isset($_SESSION['userId'])) {
        $isLoggedIn = true;
        $tablename = "userobj".(string)$_SESSION['userId'];

        // Adding Blog Id to Visited Blog Column
        $query = "SELECT * FROM $tablename WHERE `visitedBlog` = $id";
        $result = mysqli_query($con, $query);
        $blogRow = mysqli_fetch_assoc($result);
        if (!isset($blogRow['visitedBlog'])) {
            $query = "INSERT INTO $tablename (`visitedBlog`, `upvotedBlog`, `downvotedBlog`, `bookmarkedBlog`, `reportedBlog`) VALUES ($id, 0, 0, 0, 0)";
            mysqli_query($con, $query);
        }
    } else {
        $isLoggedIn = false;
    }

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

    // Get All Blog Id
    // $query = "SELECT `blogId` FROM `blogtable`";
    // $stmt = $pdo->prepare($query);
    // $stmt->execute();
    
    // Variables
    $arr = [];
    $arr1 = [];
    $arr2 = [];
    $arr3 = [];
    $arr4 = [];
    $arr5 = [];
    $relatedTopicBlogId = [];

    // Get Total Number of Blogs
    $query = "SELECT * FROM `blogtable` ORDER BY `blogId` DESC LIMIT 1";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $totalNumOfBlog = $row['blogId'];

    // Initializing Array
    $i=0;
    while ($i<=$totalNumOfBlog) {
        $arr[$i] = 0;
        $i++;
    }

    // Query for tag 1
    $query = "SELECT * FROM `blogtable` WHERE (`tag1` = '$tag1') OR (`tag2` = '$tag1') OR (`tag3` = '$tag1') OR (`tag4` = '$tag1') OR (`tag5` = '$tag1')";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) $arr[$row['blogId']]++;

    // Query for tag 2
    $query = "SELECT * FROM `blogtable` WHERE (`tag1` = '$tag2') OR (`tag2` = '$tag2') OR (`tag3` = '$tag2') OR (`tag4` = '$tag2') OR (`tag5` = '$tag2')";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) $arr[$row['blogId']]++;

    // Query for tag 3
    $query = "SELECT * FROM `blogtable` WHERE (`tag1` = '$tag3') OR (`tag2` = '$tag3') OR (`tag3` = '$tag3') OR (`tag4` = '$tag3') OR (`tag5` = '$tag3')";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) $arr[$row['blogId']]++;

    // Query for tag 4
    $query = "SELECT * FROM `blogtable` WHERE (`tag1` = '$tag4') OR (`tag2` = '$tag4') OR (`tag3` = '$tag4') OR (`tag4` = '$tag4') OR (`tag5` = '$tag4')";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) $arr[$row['blogId']]++;

    // Query for tag 5
    $query = "SELECT * FROM `blogtable` WHERE (`tag1` = '$tag5') OR (`tag2` = '$tag5') OR (`tag3` = '$tag5') OR (`tag4` = '$tag5') OR (`tag5` = '$tag5')";
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) $arr[$row['blogId']]++;

    // Checking for highest valeus
    for ($i=0; $i<=$totalNumOfBlog; $i++) {
        if ($arr[$i]==5) {
            array_push($arr5, $i);
        } else if ($arr[$i]==4) {
            array_push($arr4, $i);
        } else if ($arr[$i]==3) {
            array_push($arr3, $i);
        } else if ($arr[$i]==2) {
            array_push($arr2, $i);
        } else if ($arr[$i]==1) {
            array_push($arr1, $i);
        }
    }

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
        font-weight: 500;
        line-height: 1.8;
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

    .blog-img {
        overflow: hidden;
        border-radius: 8px;
        max-height: 520px;
        max-width: 100% !important;
    }

    .blog-content-end {
        font-size: 16px;
        font-weight: 500;
        color: #444;
        text-align: end;
        line-height: 1.3;
        padding-bottom: 8px;
    }

    .stat-widget {
        display: block;
        overflow: hidden;
        height: auto !important;
    }

    .relatedTopicUl {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .relatedTopicUl li {
        color: #555;
        padding: 8px;
        font-weight: 500;
    }

    .relatedTopicUl li:last-child {
        margin-bottom: 13px;
    }

    .chngBgClr:hover {
        margin: auto 5px;
        background-color: #eee;
        border-radius: 34px;
        cursor: pointer;
    }

    /* Media Query */

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
                <div class="blog-img">
                    <center>
                        <img src="<?= "img/blog-img/" . $img1 ?>" alt="thumbnail-1" class="img-fluid" max-height>
                    </center>
                </div>
                <span class="blog-content"> <?= $blogCon ?> </span>
                <div class="blog-content-end">
                    <div><?= $author ?></div>
                    <div><?= $date ?></div>
                </div>
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
                                        <img src="img/bg-img/add3.png" alt="ad" width="100%">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Related Topics -->
                        <div class="col-12 col-sm-6 col-lg-12" style="margin-top: 8px;">
                            <div class="single-widget-area stat-widget" style="display: block;">
                                <ul class="relatedTopicUl">
                                    
                                    <li>
                                        <h4 style="margin-top: 5px;">Related Topics</h4>
                                        <hr style="border: 1px solid black; margin: 5px 5px 5px 5px; padding-bottom: 0;">
                                    </li>
                                    
                                    <?php
                                        $i = 0;
                                        $arr5count = count($arr5);
                                        for ($index=0; $index<$arr5count; $index++) {
                                            if ($i<5) if ($arr5[$index]!=$id) array_push($relatedTopicBlogId, $arr5[$index]);
                                            else break;
                                            $i++;
                                        }
                                        if ($i<5) {
                                            $arr4count = count($arr4);
                                            for ($index=0; $index<$arr4count; $index++) {
                                                if ($i<5) if ($arr4[$index]!=$id) array_push($relatedTopicBlogId, $arr4[$index]);
                                                else break;
                                                $i++;
                                            }
                                            if ($i<5) {
                                                $arr3count = count($arr3);
                                                for ($index=0; $index<$arr3count; $index++) {
                                                    if ($i<5) if ($arr3[$index]!=$id) array_push($relatedTopicBlogId, $arr3[$index]);
                                                    else break;
                                                    $i++;
                                                }
                                                if ($i<5) {
                                                    $arr2count = count($arr2);
                                                    for ($index=0; $index<$arr2count; $index++) {
                                                        if ($i<5) if ($arr2[$index]!=$id) array_push($relatedTopicBlogId, $arr2[$index]);
                                                        else break;
                                                        $i++;
                                                    }
                                                    if ($i<5) {
                                                        $arr1count = count($arr1);
                                                        for ($index=0; $index<$arr1count; $index++) {
                                                            if ($i<5) if ($arr1[$index]!=$id) array_push($relatedTopicBlogId, $arr1[$index]);
                                                            else break;
                                                            $i++;
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                        if ($i==0) {
                                            echo "<li></li><li>Nothing to show...</li>";
                                        } else {
                                            $numOfRelatedTopics = count($relatedTopicBlogId);
                                            for ($index=0; $index<$numOfRelatedTopics; $index++) {
                                                $query = "SELECT * FROM `blogtable` WHERE `blogId` = ?";
                                                $stmt = $pdo->prepare($query);
                                                $stmt->execute([$relatedTopicBlogId[$index]]);
                                                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                                                echo "<li onclick='getBlogContent(".$relatedTopicBlogId[$index].")' class='chngBgClr'><span>".$row['title']."</span></li>";
                                                if ($index != $numOfRelatedTopics-1) {
                                                    echo "<center><hr style='border: 1px solid #bbb; width: 83%; margin: 0; padding: 0;'></center>";
                                                }
                                            }
                                        }
                                    ?>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- HTML Ends -->

<!-- PHP Script: Display User Actions on Blog -->
<?php

    if ($isLoggedIn) {
        $query = "SELECT * FROM $tablename WHERE `visitedBlog` = $id";
        $result = mysqli_query($con, $query);
        $blogRow = mysqli_fetch_assoc($result);
        if ($blogRow['upvotedBlog']==1) {
            echo "<script>document.getElementById(\"like\").style.color = \"rgb(4, 52, 213)\";</script>";
        }
        if ($blogRow['downvotedBlog']==1) {
            echo "<script>document.getElementById(\"dislike\").style.color = \"rgb(239, 27, 72)\";</script>";
        }
        if ($blogRow['reportedBlog']==1) {
            echo "<script>document.getElementById(\"report\").style.color = \"rgb(239, 27, 72)\";</script>";
        }
        if ($blogRow['bookmarkedBlog']==1) {
            echo "<script>document.getElementById(\"bookmark\").style.color = \"rgb(4, 52, 213)\";</script>";
        }
    }
?>

<!-- Javascript -->
<script>

    $(document).ready(()=> {

        // Client Side Blog Action Handler
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
            }
        }

        // *** View Handler ***
        $.ajax({
            url: "blogViewHandler.php",
            type: "POST",
            data: {
                "userViewCount": "<?= $userViewCount ?>",
                "guestViewCount": "<?= $guestViewCount ?>",
                "blogId": "<?= $id ?>"
            },
            error: function(response) {
                errorHandler("");
            }
        });

        // *** Blog Action Handler ***
        let link = "blogActionVerify.php";

        // Like
        $('#like').click(() => {
            $.ajax({ 
                url: link,
                type: 'POST',  
                data: {
                    "action": "like",
                    "blogid": "<?= $id ?>"
                },
                success: function(response) {
                    changeButtonColor("like");
                },
                error: function(response) {
                    alert("Error: Like");
                }
            });
        });

        // Dislike
        $('#dislike').click(() => {
            $.ajax({  
                url: link,
                type: 'POST',  
                data: {
                    "action": "dislike",
                    "blogid": "<?= $id ?>"
                },
                success: function(response) {
                    changeButtonColor("dislike");
                },
                error: function(response) {
                    alert("Error: Dislike");
                }
            });
        });

        // Report
        $('#report').click(() => {
            $.ajax({  
                url: link,
                type: 'POST',  
                data: {
                    "action": "report",
                    "blogid": "<?= $id ?>"
                },
                success: function(response) {
                    changeButtonColor("report");
                },
                error: function(response) {
                    alert("Error: Report");
                }
            });
        });

        // Bookmark
        $('#bookmark').click(() => {
            $.ajax({  
                url: link,
                type: 'POST', 
                data: {
                    "action": "bookmark",
                    "blogid": "<?= $id ?>"
                },
                success: function(response) {
                    changeButtonColor("bookmark");
                },
                error: function(response) {
                    alert("Error: Bookmark");
                }
            });
        });
    });

</script>