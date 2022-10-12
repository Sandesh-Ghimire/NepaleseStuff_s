<?php 

    include("includes/db.php");

    if (!isset($_SESSION['admin_email'])) {
        echo "<script>window.open('login.php','_self')</script>";
    }

    if (isset($_POST['submit'])) {
        $query = "";
        $flag = false;
        $errorMsgDisplay = "";
        $numOfTagAndImage = 5;
        $maxFileSize = 10000000;
        $val = ['', '', date("Y-m-d"), '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0];
        $errorMsg = ['', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''];

        // echo "<script>alert('$val[2]')</script>";

        // Get Blog Id
        $query = "SELECT `blogId` FROM `blogtable` ORDER BY `blogId` DESC LIMIT 0, 1";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $blogId = $row['blogId'] + 1;

        // echo "<script>alert('$blogId')</script>";

        // Title
        if (isset($_POST['blogTitle'])) {
            $val[0] = $_POST['blogTitle'];
        } else {
            $errorMsg[0] = "Title is not set";
        }

        // echo "<script>alert('$val[0]')</script>";

        // Author
        $val[1] = $_SESSION['admin_name'];

        // echo "<script>alert('$val[1]')</script>";

        // Blog Content
        if (isset($_POST['blogContent'])) {
            $val[3] = $_POST['blogContent'];
        } else {
            $errorMsg[3] = "Blog content is not set";
        }

        // echo "<script>alert('$val[2]')</script>";

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

        // echo "<script>alert('$val[9] $val[10] $val[11] $val[12] $val[13]')</script>";

        // Images
        for ($i=1; $i<=$numOfTagAndImage; $i++) {
            $imgInputName = "img" . (string)$i;
            if ($_FILES[$imgInputName]['error'] === 4) {
                if ($i==1) {
                    // echo "<script>alert('Error: Image does not exist')</script>";
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
                        // echo "<script>alert('Error: Invalid image type')</script>";
                        $errorMsg[$i + 3] = "Image $i is invalid image type";
                    }
                } else if ($fileSize > $maxFileSize) {
                    // echo "<script>alert('Error: Image size too large')</script>";
                    $errorMsg[$i + 3] = "Image $i file size is large";
                } else {
                    $newImgName = $blogId . "_" . $i . "." . $imgExtension;
                    $val[$i + 3] = $newImgName;
                    move_uploaded_file($tmpName, "../img/blog-img/" . $newImgName);
                }
            }
        }

        // echo "<script>alert('$val[3] $val[4] $val[5] $val[6] $val[7]')</script>";

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
            $query = "INSERT INTO `blogtable` (`title`, `author`, `date`, `blogcon`, `img1`, `img2`, `img3`, `img4`, `img5`,`tag1`, `tag2`, `tag3`, `tag4`, `tag5`, `userViewCount`, `guestViewCount`, `reportCount`, `bookmarkCount`, `upvoteCount`, `downvoteCount`) VALUES ('$val[0]', '$val[1]', '$val[2]', '$val[3]', '$val[4]',' $val[5]',' $val[6]', '$val[7]', '$val[8]', '$val[9]', '$val[10]', '$val[11]', '$val[12]', '$val[13]', '$val[14]', '$val[15]', '$val[16]', '$val[17]', '$val[18]', '$val[19]')";
            mysqli_query($con, $query);
            
            // Success Message
            echo "<script>alert('Successfull');</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Blogs </title>
</head>

<body>

    <!-- Breadcrumb Begin -->
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i> Dashboard / Insert Blogs</li>
            </ol>
        </div>
    </div>
    <!-- Breadcrumb Finish -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">

                <!-- Heading -->
                <div class="panel-heading">
                    <h3 class="panel-title">Insert Blogs</h3> 
                </div>

                <!-- Form Begins -->
                <div class="panel-body">
                    <form method="post" class="container form-horizontal" autocomplete="off" enctype="multipart/form-data">

                        <!-- Blog Title -->
                        <div class="form-group">

                            <label class="control-label">Blog Title <span class="requiredField">*</span></label>
                            <div class="">
                                <input name="blogTitle" type="text" class="form-control" placeholder="Title for the blog..." required>
                            </div>

                        </div>

                        <!-- Author -->
                        <div class="form-group">

                            <label class="control-label">Author <span class="requiredField">*</span></label>
                            <div class="">
                                <input id="arthurName" name="arthurName" type="text" class="form-control" value="<?= $_SESSION['admin_name'] ?>" disabled required>
                            </div>

                        </div>

                        <!-- Image 1 -->
                        <div class="form-group">

                            <label class="control-label">Image 1 <span class="requiredField">*</span></label>
                            <div class="">
                                <input name="img1" type="file" accept=".png, .jpeg, .jpg" class="form-control" required>
                            </div>

                        </div>

                        <!-- Image 2 -->
                        <div class="form-group">

                            <label class="control-label">Image 2</label>
                            <div class="">
                                <input name="img2" type="file" accept=".png, .jpeg, .jpg" class="form-control">
                            </div>

                        </div>

                        <!-- Image 3 -->
                        <div class="form-group">
                            
                            <label class="control-label">Image 3</label>
                            <div class="">
                                <input name="img3" type="file" accept=".png, .jpeg, .jpg" class="form-control">
                            </div>

                        </div>

                        <!-- Image 4 -->
                        <div class="form-group">
                            
                            <label class="control-label">Image 4</label>
                            <div class="">
                                <input name="img4" type="file" accept=".png, .jpeg, .jpg" class="form-control">
                            </div>

                        </div>

                        <!-- Image 5 -->
                        <div class="form-group">

                            <label class="control-label">Image 5</label>
                            <div class="">
                                <input name="img5" type="file" accept=".png, .jpeg, .jpg" class="form-control">
                            </div>

                        </div>

                        <!-- Tag 1 -->
                        <div class="form-group">

                            <label class="control-label">Tag 1 <span class="requiredField">*</span></label>
                            <div class="">
                                <input name="tag1" type="text" class="form-control" placeholder="#" required>
                            </div>

                        </div>

                        <!-- Tag 2 -->
                        <div class="form-group">

                            <label class="control-label">Tag 2</label>
                            <div class="">
                                <input name="tag2" type="text" class="form-control" placeholder="#">
                            </div>

                        </div>

                        <!-- Tag 3 -->
                        <div class="form-group">

                            <label class="control-label">Tag 3</label>
                            <div class="">
                                <input name="tag3" type="text" class="form-control" placeholder="#">
                            </div>

                        </div>

                        <!-- Tag 4 -->
                        <div class="form-group">

                            <label class="control-label">Tag 4</label>
                            <div class="">
                                <input name="tag4" type="text" class="form-control" placeholder="#">
                            </div>

                        </div>

                        <!-- Tag 5 -->
                        <div class="form-group">

                            <label class="control-label">Tag 5</label>
                            <div class="">
                                <input name="tag5" type="text" class="form-control" placeholder="#">
                            </div>

                        </div>

                        <!-- Blog Content -->
                        <div class="form-group">
                            
                            <label class="control-label">Blog Content <span class="requiredField">*</span></label>
                            <div class="">
                                <textarea name="blogContent" cols="19" rows="6" class="form-control"></textarea>
                            </div>

                        </div>
                        
                        <!-- Submit -->
                        <div class="form-group">

                            <label class="col-md-10 control-label"></label>
                            <div class="col-md-2">
                                <input name="submit" value="Insert Blog" type="submit" class="btn btn-primary form-control">
                            </div>

                        </div>

                    </form>
                    <!-- Form  Finish -->

                </div>
            </div>
        </div>
    </div>

    <script src="js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
    <script>
        // document.getElementById('mceu_30').innerText = "Powered by Nepalese Stuff";
        alert(document.getElementById('mceu_30').innerText);
    </script>
</body>

</html>