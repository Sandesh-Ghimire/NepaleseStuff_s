<?php 

    if (!isset($_SESSION['admin_email'])) {
        echo "<script>window.open('login.php','_self')</script>";
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

                <!-- <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Insert Blog</h3>
                </div> -->

                <!-- Form Begins -->
                <div class="panel-body">
                    <form method="post" class="form-horizontal" enctype="multipart/form-data">

                        <!-- Blog Title -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">Blog Title</label>
                            <div class="col-md-6">
                                <input name="blog_title" type="text" class="form-control" placeholder="Title for the blog..." required>
                            </div>

                        </div>

                        <!-- Arthur -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">Arthur</label>
                            <div class="col-md-6">
                                <input name="arthur_name" type="text" class="form-control" placeholder="Your name..." required>
                            </div>

                        </div>

                        <!-- Image 1 -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">Image 1</label>
                            <div class="col-md-6">
                                <input name="img1" type="file" accept="image/png, image/jpeg, image/jpg" class="form-control" required>
                            </div>

                        </div>

                        <!-- Image 2 -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">Image 2</label>
                            <div class="col-md-6">
                                <input name="img2" type="file" accept="image/png, image/jpeg, image/jpg" class="form-control">
                            </div>

                        </div>

                        <!-- Image 3 -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">Image 3</label>
                            <div class="col-md-6">
                                <input name="img3" type="file" accept="image/png, image/jpeg, image/jpg" class="form-control">
                            </div>

                        </div>

                        <!-- Image 4 -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">Image 4</label>
                            <div class="col-md-6">
                                <input name="img4" type="file" accept="image/png, image/jpeg, image/jpg" class="form-control">
                            </div>

                        </div>

                        <!-- Image 5 -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">Image 5</label>
                            <div class="col-md-6">
                                <input name="img5" type="file" accept="image/png, image/jpeg, image/jpg" class="form-control">
                            </div>

                        </div>

                        <!-- Tag 1 -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">Tag 1</label>
                            <div class="col-md-6">
                                <input name="tag1" type="text" class="form-control" placeholder="#" required>
                            </div>

                        </div>

                        <!-- Tag 2 -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">Tag 2</label>
                            <div class="col-md-6">
                                <input name="tag2" type="text" class="form-control" placeholder="#">
                            </div>

                        </div>

                        <!-- Tag 3 -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">Tag 3</label>
                            <div class="col-md-6">
                                <input name="tag3" type="text" class="form-control" placeholder="#">
                            </div>

                        </div>

                        <!-- Tag 4 -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">Tag 4</label>
                            <div class="col-md-6">
                                <input name="tag4" type="text" class="form-control" placeholder="#">
                            </div>

                        </div>

                        <!-- Tag 5 -->
                        <div class="form-group">

                            <label class="col-md-3 control-label">Tag 5</label>
                            <div class="col-md-6">
                                <input name="tag5" type="text" class="form-control" placeholder="#">
                            </div>

                        </div>

                        <!-- Blog Content -->
                        <div class="form-group">
                            
                            <label class="col-md-3 control-label">Blog Content</label>
                            <div class="col-md-6">
                                <textarea name="Blog_desc" cols="19" rows="6" class="form-control"></textarea>
                            </div>

                        </div>
                        
                        <!-- Submit -->
                        <div class="form-group">

                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-6">
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
</body>

</html>