<?php 

    include("includes/db.php");

    if (!isset($_SESSION['admin_email'])) {
        echo "<script>window.open('login.php','_self')</script>";
        exit();
    }

    if (isset($_POST['search']) && isset($_POST['blogId'])) {

        $selectedBlog = $_POST['blogId'];

        $query = "SELECT * FROM `blogtable` WHERE `blogId` = $selectedBlog";
        $result = mysqli_query($con, $query);
        $rowCount = mysqli_num_rows($result);

    } else {
        $rowCount = 0;
    }

    if (isset($_POST['delete'])) {

        $selectedBlog = $_POST['blogid'];
        $img1 = trim($_POST['img1']);
        $img2 = trim($_POST['img2']);
        $img3 = trim($_POST['img3']);
        $img4 = trim($_POST['img4']);
        $img5 = trim($_POST['img5']);

        // Final Query
        $query = "DELETE FROM `blogtable` WHERE `blogId` = $selectedBlog";
        if (mysqli_query($con, $query)) {

            $folder = "../img/blog-img/";

            if ($img1) {
                $filepath = $folder.$img1;
                unlink($filepath);
            }
            if ($img2) {
                $filepath = $folder.$img2;
                unlink($filepath);
            }
            if ($img3) {
                $filepath = $folder.$img3;
                unlink($filepath);
            }
            if ($img4) {
                $filepath = $folder.$img4;
                unlink($filepath);
            }
            if ($img5) {
                $filepath = $folder.$img5;
                unlink($filepath);
            }

            // Success Message
            echo "<script>alert('Successfully Deleted Blog');</script>";

        } else {
            // Error Message
            echo "<script>alert('Error Deleting Blog');</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Delete Blogs </title>
</head>

<body>

    <!-- Breadcrumb Begin -->
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> Dashboard / Delete Blogs</li>
            </ol>
        </div>
    </div>
    <!-- Breadcrumb Finish -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">

                <!-- Heading -->
                <div class="panel-heading">
                    <h3 class="panel-title">Delete Blogs</h3>
                </div>

                <!-- Form Begins -->
                <div class="panel-body">

                    <!-- Search Blog Id -->
                    <form method="post" class="container form-horizontal" autocomplete="off" id="blogSearch">

                        <!-- Blog Title -->
                        <div class="form-group">

                            <label class="control-label">Blog Id<span class="requiredField">*</span></label>
                            <div class="">
                                <input name="blogId" type="number" class="form-control" placeholder="Enter blog id..." required>
                            </div>

                        </div>

                        <!-- Submit -->
                        <div class="form-group">

                            <label class="col-md-10 control-label"></label>
                            <div class="col-md-2">
                                <input name="search" value="Search" type="submit" class="btn btn-primary form-control">
                            </div>

                        </div>

                    </form>

                    <form method="post" class="container form-horizontal" autocomplete="off" id="blogDetail" hidden=true>
                        <!-- Blog Title -->
                        <div class="form-group">

                            <label class="control-label">Blog Title <span class="requiredField">*</span></label>
                            <div class="">
                                <input name="blogTitle" type="text" class="form-control" id="title" disabled>
                            </div>

                        </div>

                        <!-- Hidden Field -->
                        <input type="text" name="img1" id="img1" hidden=true>
                        <input type="text" name="img2" id="img2" hidden=true>
                        <input type="text" name="img3" id="img3" hidden=true>
                        <input type="text" name="img4" id="img4" hidden=true>
                        <input type="text" name="img5" id="img5" hidden=true>
                        <input type="text" name="blogid" id="blogid" hidden=true>

                        <!-- Submit -->
                        <div class="form-group">

                            <label class="col-md-8 control-label"></label>
                            <div class="col-md-2">
                                <a href="index.php?delete_blog" class="btn btn-danger form-control">CANCEL</a>
                            </div>
                            <div class="col-md-2">
                                <input name="delete" value="DELETE" type="submit" class="btn btn-primary form-control">
                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <?php

        if (isset($_POST['search'])) {
            if ($rowCount) {
                echo "<script>
                        document.getElementById('blogSearch').hidden=true;
                        document.getElementById('blogDetail').hidden=false;
                    </script>";
    
                $row = mysqli_fetch_assoc($result);

                echo "<script>document.getElementById('title').value = '".$row['title']."';</script>";

                // Set Image Dir Values in Hidden Field
                echo "<script>document.getElementById('img1').value = '".$row['img1']."';</script>";
                echo "<script>document.getElementById('img2').value = '".$row['img2']."';</script>";
                echo "<script>document.getElementById('img3').value = '".$row['img3']."';</script>";
                echo "<script>document.getElementById('img4').value = '".$row['img4']."';</script>";
                echo "<script>document.getElementById('img5').value = '".$row['img5']."';</script>";

                echo "<script>document.getElementById('blogid').value = '".$row['blogId']."';</script>";
    
            } else {
                echo "<script>alert('Error: Blog doesnt exist');</script>";
            }
        }

    ?>

</body>

</html>