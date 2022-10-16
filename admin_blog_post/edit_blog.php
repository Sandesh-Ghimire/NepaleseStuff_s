<?php 

    include("includes/db.php");

    if (!isset($_SESSION['admin_email'])) {
        header('Location: login.php');
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

    if (isset($_POST['submit'])) {
        $query = "";
        $flag = false;
        $errorMsgDisplay = "";
        $numOfTagAndImage = 5;
        $maxFileSize = 10000000;
        $val = ['', '', date("Y-m-d"), '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0];
        $errorMsg = ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''];

        // Get Blog Id
        $query = "SELECT `blogId` FROM `blogtable` ORDER BY `blogId` DESC LIMIT 0, 1";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $blogId = $row['blogId'] + 1;

        // Title
        if (isset($_POST['blogTitle'])) {
            $val[0] = $_POST['blogTitle'];
        } else {
            $errorMsg[0] = "Title is not set";
        }

        // Author
        $val[1] = $_SESSION['admin_name'];

        // Blog Content
        if (isset($_POST['blogContent'])) {
            $val[3] = $_POST['blogContent'];
        } else {
            $errorMsg[3] = "Blog content is not set";
        }

        // Tags
        for ($i=1; $i<=$numOfTagAndImage; $i++) {
            $tagInputName = "tag" . (string)$i;
            if ($i==1) {
                if (isset($_POST[$tagInputName])) {
                    $val[$i + 8] = strtolower($_POST[$tagInputName]);
                } else {
                    $errorMsg[$i + 8] = "Tag $i is not set";
                }
            } else {
                if (isset($_POST[$tagInputName]) && $_POST[$tagInputName]!='') {
                    $val[$i + 8] = strtolower($_POST[$tagInputName]);
                }
            }
        }

        // Images
        for ($i=1; $i<=$numOfTagAndImage; $i++) {
            $imgInputName = "img" . (string)$i;
            if ($_FILES[$imgInputName]['error'] === 4) {
                if ($i==1) {
                    $errorMsg[$i + 3] = "Image $i does not exist";   
                }
            } else {
                $fileName = $_FILES[$imgInputName]['name'];
                $fileSize = $_FILES[$imgInputName]['size'];
                $tmpName = $_FILES[$imgInputName]['tmp_name'];
        
                $validImgExtension = ['jpg', 'jpeg', 'png'];
                $imgExtension = explode('.', $fileName);
                $imgExtension = strtolower(end($imgExtension));
        
                if (!in_array($imgExtension, $validImgExtension)) {
                    if ($i==1) {
                        $errorMsg[$i + 3] = "Image $i is invalid image type";
                    }
                } else if ($fileSize > $maxFileSize) {
                    $errorMsg[$i + 3] = "Image $i file size is large";
                } else {
                    $newImgName = $blogId . "_" . $i . "." . $imgExtension;
                    $val[$i + 3] = $newImgName;
                    move_uploaded_file($tmpName, "../img/blog-img/" . $newImgName);
                }
            }
        }

        for ($i=0; $i<count($errorMsg); $i++) {
            if ($errorMsg[$i] != "") {
                $flag = true;
                $errorMsgDisplay = $errorMsgDisplay . $errorMsg[$i] . "<br>";
            }
        }

        if ($flag==true) {
            // Error Message
            echo "<script>alert('$errorMsgDisplay');</script>";
        } else {
            // Final Query
            $query = "UPDATE `blogtable` SET `title`='$val[0]', `author`='$val[1]', `date`='$val[2]', `blogcon`='$val[3]', `img1`='$val[4]', `img2`='$val[5]', `img3`='$val[6]', `img4`='$val[7]', `img5`='$val[8]',`tag1`='$val[9]', `tag2`='$val[10]', `tag3`='$val[11]', `tag4`='$val[12]', `tag5`='$val[13]', `userViewCount`='$val[14]', `guestViewCount`='$val[15]', `reportCount`='$val[16]', `bookmarkCount`='$val[17]', `upvoteCount`='$val[18]', `downvoteCount`='$val[19]' WHERE `blogId` = $selectedBlog";
            if (mysqli_query($con, $query)) {
                // Success Message
                echo "<script>alert('Successfully Inserted Blog');</script>";
            } else {
                // Error Message
                echo "<script>alert('Error Uplaoding Blog');</script>";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Edit Blogs </title>
</head>

<body>

    <!-- Breadcrumb Begin -->
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> Dashboard / Edit Blogs</li>
            </ol>
        </div>
    </div>
    <!-- Breadcrumb Finish -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">

                <!-- Heading -->
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Blogs</h3>
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

                    <form method="post" class="container form-horizontal" autocomplete="off" enctype="multipart/form-data" id="blogDetail" hidden=true>

                        <!-- Blog Title -->
                        <div class="form-group">

                            <label class="control-label">Blog Title <span class="requiredField">*</span></label>
                            <div class="">
                                <input name="blogTitle" type="text" class="form-control" id="title" placeholder="Title for the blog..." required>
                            </div>

                        </div>

                        <!-- Author -->
                        <div class="form-group">

                            <label class="control-label">Author <span class="requiredField">*</span></label>
                            <div class="">
                                <input id="arthurName" name="arthurName" type="text" class="form-control" value="<?= $_SESSION['admin_name'] ?>" disabled required>
                            </div>

                        </div>

                        <!-- Date -->
                        <div class="form-group">

                            <label class="control-label">Date <span class="requiredField">*</span></label>
                            <div class="">
                                <input id='date' name='date' type='text' class='form-control' disabled required>
                            </div>

                        </div>

                        <!-- Image 1 -->
                        <div class="form-group">

                            <label class="control-label" id="img1">Image 1 <span class="requiredField">*</span></label>
                            <div class="">
                                <input name="img1" type="file" accept=".png, .jpeg, .jpg" class="form-control" placeholder="Select an image..." required>
                            </div>

                        </div>

                        <!-- Image 2 -->
                        <div class="form-group">

                            <label class="control-label" id="img2">Image 2</label>
                            <div class="">
                                <input name="img2" type="file" accept=".png, .jpeg, .jpg" class="form-control">
                            </div>

                        </div>

                        <!-- Image 3 -->
                        <div class="form-group">
                            
                            <label class="control-label" id="img3">Image 3</label>
                            <div class="">
                                <input name="img3" type="file" accept=".png, .jpeg, .jpg" class="form-control">
                            </div>

                        </div>

                        <!-- Image 4 -->
                        <div class="form-group">
                            
                            <label class="control-label" id="img4">Image 4</label>
                            <div class="">
                                <input name="img4" type="file" accept=".png, .jpeg, .jpg" class="form-control">
                            </div>

                        </div>

                        <!-- Image 5 -->
                        <div class="form-group">

                            <label class="control-label" id="img5">Image 5</label>
                            <div class="">
                                <input name="img5" type="file" accept=".png, .jpeg, .jpg" class="form-control">
                            </div>

                        </div>

                        <!-- Tag 1 -->
                        <div class="form-group">

                            <label class="control-label">Tag 1 <span class="requiredField">*</span></label>
                            <div class="">
                                <input name="tag1" type="text" class="form-control" id="tag1" placeholder="#" required>
                            </div>

                        </div>

                        <!-- Tag 2 -->
                        <div class="form-group">

                            <label class="control-label">Tag 2</label>
                            <div class="">
                                <input name="tag2" type="text" class="form-control" id="tag2" placeholder="#">
                            </div>

                        </div>

                        <!-- Tag 3 -->
                        <div class="form-group">

                            <label class="control-label">Tag 3</label>
                            <div class="">
                                <input name="tag3" type="text" class="form-control" id="tag3" placeholder="#">
                            </div>

                        </div>

                        <!-- Tag 4 -->
                        <div class="form-group">

                            <label class="control-label">Tag 4</label>
                            <div class="">
                                <input name="tag4" type="text" class="form-control" id="tag4" placeholder="#">
                            </div>

                        </div>

                        <!-- Tag 5 -->
                        <div class="form-group">

                            <label class="control-label">Tag 5</label>
                            <div class="">
                                <input name="tag5" type="text" class="form-control" id="tag5" placeholder="#">
                            </div>

                        </div>

                        <!-- Blog Content -->
                        <div class="form-group">
                            
                            <label class="control-label">Blog Content <span class="requiredField">*</span></label>
                            <span class="">
                                <textarea name="blogContent" cols="21" rows="13" class="form-control" id="content" required></textarea>
                            </span>

                        </div>
                        
                        <!-- Submit -->
                        <div class="form-group">

                            <label class="col-md-8 control-label"></label>
                            <div class="col-md-2">
                                <a href="index.php?edit_blog" class="btn btn-danger form-control">Cancel</a>
                            </div>
                            <div class="col-md-2">
                                <input name="submit" value="Insert" type="submit" class="btn btn-primary form-control" contenteditable="true">
                            </div>

                        </div>

                    </form>
                    <!-- Form  Finish -->

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

                echo "<script>document.getElementById('title').value = \"".$row['title']."\";</script>";
                echo "<script>document.getElementById('date').value = '".$row['date']."';</script>";
                echo "<script>document.getElementById('tag1').value = '".$row['tag1']."';</script>";
                echo "<script>document.getElementById('img1').innerHTML = 'Image 1: <span class=\"text-muted\">".$row['img1']."</span> <span class=\"requiredField\">*</span>';</script>";

                if (isset($row['tag2'])) {
                    echo "<script>document.getElementById('tag2').value = '".$row['tag2']."';</script>";
                }
                if (isset($row['tag3'])) {
                    echo "<script>document.getElementById('tag3').value = '".$row['tag3']."';</script>";
                }
                if (isset($row['tag4'])) {
                    echo "<script>document.getElementById('tag4').value = '".$row['tag4']."';</script>";
                }
                if (isset($row['tag3'])) {
                    echo "<script>document.getElementById('tag5').value = '".$row['tag5']."';</script>";
                }

                if (isset($row['img2'])) {
                    echo "<script>document.getElementById('img2').innerHTML = 'Image 2: <span class=\"text-muted\">".$row['img2']."';</script>";
                }
                if (isset($row['img3'])) {
                    echo "<script>document.getElementById('img3').innerHTML = 'Image 3: <span class=\"text-muted\">".$row['img3']."';</script>";
                }
                if (isset($row['img4'])) {
                    echo "<script>document.getElementById('img4').innerHTML = 'Image 4: <span class=\"text-muted\">".$row['img4']."';</script>";
                }
                if (isset($row['img5'])) {
                    echo "<script>document.getElementById('img5').innerHTML = 'Image 5: <span class=\"text-muted\">".$row['img5']."';</script>";
                }

                echo "<script>
                        document.getElementById('content').innerHTML = '<span>".(string)$row['blogcon']."</span>';
                    </script>";
    
            } else {
                echo "<script>alert('Error: Blog doesnt exist');</script>";
            }
        }

    ?>

</body>

</html>