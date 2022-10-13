<?php

    session_start();

    include "../functions/connect.php";

    if(!isset($_SESSION['userId'])) {
        echo "<script>alert('Error: Code Manipulation Detected (Response Captured)')</script>";
        header("Location: ../index.php");
        exit();
    } else {
        $tablename = "userobj" . (string)$_SESSION['userId'];
    }

?>

<!-- CSS -->
<style>
    .table-striped {
        box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    }
    .table td, .table th {
        padding: 13px;
    }
    tr {
        cursor: pointer !important;
    }
    tr th, td {
        text-align: center;
    }
    .log-img {
        height: 55px;
        width: 89px;
        border-radius: 8px;
    }
</style>

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
                    <a name='' class='nav-item nav-link back-slash-separator' style='pointer-events: none;'>/</a>
                    <a class='nav-item nav-link' id='nav4' data-toggle='tab' href='#nav-4' role='tab' aria-controls='nav-4' aria-selected='false'>Visited</a>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class='intro-news-tab'>
    <div class='tab-content' id='nav-tabContent'>

        <!-- Bookmarked Blog Here -->
        <div class='tab-pane fade show active' id='nav-1' role='tabpanel' aria-labelledby='nav1'>
            <div class='container-fluid' style="padding: 0% 6%;">

                <table class="table table-striped table-hover my-5">
                    <thead class="">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Thumbnail</th>
                        </tr>
                    </thead>
                    <tbody>

                    <!-- PHP Script -->
                    <?php

                        // SQL for user data
                        $index = 1;
                        $query = "SELECT `visitedBlog` FROM $tablename WHERE `bookmarkedBlog` = 1";
                        $result = mysqli_query($con, $query);
                        while($row = mysqli_fetch_assoc($result)) {
                            $newBlogId = $row['visitedBlog'];

                            // PDO for blog data
                            $query = "SELECT * FROM `blogtable` WHERE `blogId` = ?";
                            $stmt = $pdo->prepare($query);
                            $stmt->execute([$newBlogId]);
                            while ($blogRow = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr onclick=\"getBlogContent(".$blogRow['blogId'].")\">
                                        <th scope=\"row\">$index</th>
                                        <td>".$blogRow['title']."</td>
                                        <td>".$blogRow['author']."</td>
                                        <td><img src=\"img/blog-img/".$blogRow['img1']."\" alt=\"thumbnail\" class=\"log-img\"></td>
                                    </tr>";
                                $index++;
                            }
                        }
                    ?>
                    <!-- PHP Script Ends Here -->
                    </tbody>
                </table>

            </div>
        </div>

        <!-- Liked Blog Here -->
        <div class='tab-pane fade' id='nav-2' role='tabpanel' aria-labelledby='nav2'>
            <div class='container-fluid' style="padding: 0% 6%;">

                <table class="table table-striped table-hover my-5">
                    <thead class="">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Thumbnail</th>
                        </tr>
                    </thead>
                    <tbody>

                    <!-- PHP Script -->
                    <?php

                        // SQL for user data
                        $index = 1;
                        $query = "SELECT `visitedBlog` FROM $tablename WHERE `upvotedBlog` = 1";
                        $result = mysqli_query($con, $query);
                        while($row = mysqli_fetch_assoc($result)) {
                            $newBlogId = $row['visitedBlog'];

                            // PDO for blog data
                            $query = "SELECT * FROM `blogtable` WHERE `blogId` = ?";
                            $stmt = $pdo->prepare($query);
                            $stmt->execute([$newBlogId]);
                            while ($blogRow = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr onclick=\"getBlogContent(".$blogRow['blogId'].")\">
                                        <th scope=\"row\">$index</th>
                                        <td>".$blogRow['title']."</td>
                                        <td>".$blogRow['author']."</td>
                                        <td><img src=\"img/blog-img/".$blogRow['img1']."\" alt=\"thumbnail\" class=\"log-img\"></td>
                                    </tr>";
                                $index++;
                            }
                        }
                    ?>
                    <!-- PHP Script Ends Here -->
                    </tbody>
                </table>

            </div>
        </div>

        <!-- Disliked Blog Here -->
        <div class='tab-pane fade' id='nav-3' role='tabpanel' aria-labelledby='nav3'>
            <div class='container-fluid' style="padding: 0% 6%;">

                <table class="table table-striped table-hover my-5">
                    <thead class="">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Thumbnail</th>
                        </tr>
                    </thead>
                    <tbody>

                    <!-- PHP Script -->
                    <?php

                        // SQL for user data
                        $index = 1;
                        $query = "SELECT `visitedBlog` FROM $tablename WHERE `downvotedBlog` = 1";
                        $result = mysqli_query($con, $query);
                        while($row = mysqli_fetch_assoc($result)) {
                            $newBlogId = $row['visitedBlog'];

                            // PDO for blog data
                            $query = "SELECT * FROM `blogtable` WHERE `blogId` = ?";
                            $stmt = $pdo->prepare($query);
                            $stmt->execute([$newBlogId]);
                            while ($blogRow = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr onclick=\"getBlogContent(".$blogRow['blogId'].")\">
                                        <th scope=\"row\">$index</th>
                                        <td>".$blogRow['title']."</td>
                                        <td>".$blogRow['author']."</td>
                                        <td><img src=\"img/blog-img/".$blogRow['img1']."\" alt=\"thumbnail\" class=\"log-img\"></td>
                                    </tr>";
                                $index++;
                            }
                        }
                    ?>
                    <!-- PHP Script Ends Here -->
                    </tbody>
                </table>

            </div>
        </div>

        <!-- Visited Blog Here -->
        <div class='tab-pane fade' id='nav-4' role='tabpanel' aria-labelledby='nav4'>
            <div class='container-fluid' style="padding: 0% 6%;">

                <table class="table table-striped table-hover my-5">
                    <thead class="">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Thumbnail</th>
                        </tr>
                    </thead>
                    <tbody>

                    <!-- PHP Script -->
                    <?php

                        // SQL for user data
                        $index = 1;
                        $query = "SELECT `visitedBlog` FROM $tablename";
                        $result = mysqli_query($con, $query);
                        while($row = mysqli_fetch_assoc($result)) {
                            $newBlogId = $row['visitedBlog'];

                            // PDO for blog data
                            $query = "SELECT * FROM `blogtable` WHERE `blogId` = ?";
                            $stmt = $pdo->prepare($query);
                            $stmt->execute([$newBlogId]);
                            while ($blogRow = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo "<tr onclick=\"getBlogContent(".$blogRow['blogId'].")\">
                                        <th scope=\"row\">$index</th>
                                        <td>".$blogRow['title']."</td>
                                        <td>".$blogRow['author']."</td>
                                        <td><img src=\"img/blog-img/".$blogRow['img1']."\" alt=\"thumbnail\" class=\"log-img\"></td>
                                    </tr>";
                                $index++;
                            }
                        }
                    ?>
                    <!-- PHP Script Ends Here -->
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>