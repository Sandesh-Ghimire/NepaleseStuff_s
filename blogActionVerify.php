<!-- Verify User Action -->
<?php

    session_start();

    include "functions/connect.php";

    if (isset($_SESSION['userId'])) {

        $action = $_POST["action"];
        $tablename = "userobj" . (string)$_SESSION['userId'];
        $id = $_POST["blogid"];

        // echo "<script>alert(". $action. " " .$tablename." ".$id. ");</script>";

        // Get Previous User Response to Blog  
        $query = "SELECT * FROM $tablename WHERE `visitedBlog` = $id";
        $result = mysqli_query($con, $query);
        $blogRow = mysqli_fetch_assoc($result);

        // Get Blog Stat
        $query = "SELECT * FROM `blogtable` WHERE `blogId` = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $reportCount = (int)$row['reportCount'];
        $bookmarkCount = (int)$row['bookmarkCount'];
        $upvoteCount = (int)$row['upvoteCount'];
        $downvoteCount = (int)$row['downvoteCount'];

        if ($action=="like") {

            if ($blogRow['upvotedBlog']==0) {
                $sql = "UPDATE $tablename SET `upvotedBlog` = 1, `downvotedBlog` = 0 WHERE `visitedBlog` = $id";
                if ($blogRow['downvotedBlog']==0) {
                    $query = "UPDATE `blogtable` SET `upvoteCount` = $upvoteCount+1 WHERE `blogId` = ?";
                } else {
                    $query = "UPDATE `blogtable` SET `upvoteCount` = $upvoteCount+1, `downvoteCount` = $downvoteCount-1 WHERE `blogId` = ?";
                }
            } else {
                $sql = "UPDATE $tablename SET `upvotedBlog` = 0, `downvotedBlog` = 0 WHERE `visitedBlog` = $id";
                $query = "UPDATE `blogtable` SET `upvoteCount` = $upvoteCount-1 WHERE `blogId` = ?";
            }
            // SQL for User Table
            mysqli_query($con, $sql);

            // PDO for Blog Table
            $stmt = $pdo->prepare($query);
            $stmt->execute([$id]);
        }
        if ($action=="dislike") {

            if ($blogRow['downvotedBlog']==0) {
                $sql = "UPDATE $tablename SET `upvotedBlog` = 0, `downvotedBlog` = 1 WHERE `visitedBlog` = $id";
                if ($blogRow['upvotedBlog']==0) {
                    $query = "UPDATE `blogtable` SET `downvoteCount` = $downvoteCount+1 WHERE `blogId` = ?";
                } else {
                    $query = "UPDATE `blogtable` SET `upvoteCount` = $upvoteCount-1, `downvoteCount` = $downvoteCount+1 WHERE `blogId` = ?";
                }
            } else {
                $sql = "UPDATE $tablename SET `upvotedBlog` = 0, `downvotedBlog` = 0 WHERE `visitedBlog` = $id";
                $query = "UPDATE `blogtable` SET `downvoteCount` = $downvoteCount-1 WHERE `blogId` = ?";
            }
            // SQL for User Table
            mysqli_query($con, $sql);

            // PDO for Blog Table
            $stmt = $pdo->prepare($query);
            $stmt->execute([$id]);
        }
        if ($action=="report") {

            if ($blogRow['reportedBlog']==0) {
                $sql = "UPDATE $tablename SET `reportedBlog` = 1 WHERE `visitedBlog` = $id";
                $query = "UPDATE `blogtable` SET `reportCount` = $reportCount+1 WHERE `blogId` = ?";
            } else {
                $sql = "UPDATE $tablename SET `reportedBlog` = 0 WHERE `visitedBlog` = $id";
                $query = "UPDATE `blogtable` SET `reportCount` = $reportCount-1 WHERE `blogId` = ?";
            }
            // SQL for User Table
            mysqli_query($con, $sql);

            // PDO for Blog Table
            $stmt = $pdo->prepare($query);
            $stmt->execute([$id]);
        }
        if ($action=="bookmark") {

            if ($blogRow['bookmarkedBlog']==0) {
                $sql = "UPDATE $tablename SET `bookmarkedBlog` = 1 WHERE `visitedBlog` = $id";
                $query = "UPDATE `blogtable` SET `bookmarkCount` = $bookmarkCount+1 WHERE `blogId` = ?";
            } else {
                $sql = "UPDATE $tablename SET `bookmarkedBlog` = 0 WHERE `visitedBlog` = $id";
                $query = "UPDATE `blogtable` SET `bookmarkCount` = $bookmarkCount-1 WHERE `blogId` = ?";
            }
            // SQL for User Table
            mysqli_query($con, $sql);

            // PDO for Blog Table
            $stmt = $pdo->prepare($query);
            $stmt->execute([$id]);
        }
    }
?>