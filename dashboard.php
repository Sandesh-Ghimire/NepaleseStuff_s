<?php

    include "functions/dashboard.php";
    include "functions/variables.php";
    include "functions/connect.php";

    // Function to display big post
    function getBigPost($id) {
        global $pdo;
        $query = "SELECT * FROM `blogtable` WHERE `blogId` = $id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $html = "<div class='col-12 col-sm-4' onclick='getBlogContent(".$id.")'>
                <div class='single-blog-post style-2'>

                    <!-- Blog Thumbnail -->
                    <div class='blog-thumbnail'>
                        <a name=''><img src='img/blog-img/".$row['img1']."' alt='thumbnail' class='thumbnail-big'></a>
                    </div>

                    <!-- Blog Content -->
                    <div class='blog-content'>
                        <span class='post-date'>".$row['date']."</span>
                        <span class='post-author'>- <span class='value'>".$row['author']."</span></span>
                        <a name='' class='post-title'>".$row['title']."</a>
                    </div>
                </div>
            </div>";

        return $html;
    }

    // Function to display small post
    function getSmallPost($id) {
        global $pdo;
        $query = "SELECT * FROM `blogtable` WHERE `blogId` = $id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $html = "<div class='col-12 col-sm-6 col-lg-6 col-xl-4' onclick='getBlogContent(".$id.")'>
                <div class='single-blog-post d-flex style-4'>
                    <!-- Blog Thumbnail -->
                    <div class='blog-thumbnail'>
                        <a name=''><img src='img/blog-img/".$row['img1']."' alt='thumbnail' class='thumbnail-small'></a>
                    </div>

                    <!-- Blog Content -->
                    <div class='blog-content'>
                        <span class='post-date'>".$row['date']."</span>
                        <a name='' class='post-title'>".$row['title']."</a>
                    </div>
                </div>
            </div>";

        return $html;
    }

    // Other Blogs
    function getOtherBlog($id) {
        global $pdo;
        $query = "SELECT * FROM `blogtable` WHERE `blogId` = $id";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $html = "<div class='col-12 col-sm-6 col-lg-3'>
                <div class='single-blog-post style-2 mb-5'>
                    <!-- Blog Thumbnail -->
                    <div class='blog-thumbnail'>
                        <a name=''><img src='img/blog-img/".$row['img1']."' alt='thumbnail' class='thumbnail-big'></a>
                    </div>

                    <!-- Blog Content -->
                    <div class='blog-content'>
                        <span class='post-date'>".$row['date']."</span>
                        <span class='post-author'>- <span class='value'>".$row['author']."</span></span>
                        <a name='' class='post-title'>".$row['title']."</a>
                    </div>
                </div>
            </div>";

        return $html;
    }

?>

<!-- ##### Intro News Area Start ##### -->
<div class="intro-news-area">
    <div class="container-fluid" style="padding: 0 6%;">
        <!-- Content Selector -->
        <div class="intro-news-tab" id="lower-nav">
            <div class="col-12 intro-news-filter d-flex justify-content-between">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">Featured</a>
                        <a name="" class="nav-item nav-link back-slash-separator" style="pointer-events: none;">/</a>
                        <a class="nav-item nav-link" id="nav2" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">Latest</a>
                        <a name="" class="nav-item nav-link back-slash-separator" style="pointer-events: none;">/</a>
                        <a class="nav-item nav-link" id="nav3" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">Popular</a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- Intro News Tabs Area -->
            <div class="col-12 col-lg-9">
                <div class="intro-news-tab">
                    <div class="tab-content" id="nav-tabContent">

                        <!-- nav-1 -->
                        <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                            <div class="row">
                                
                                <?= getBigPost($featuredBlog[0]); ?>

                                <?= getBigPost($featuredBlog[1]); ?>

                                <?= getBigPost($featuredBlog[2]); ?>

                                <!-- Minimized Blog -->
                                <div class="row mt-4">
                                    
                                    <?= getSmallPost($featuredBlog[3]) ?>

                                    <?= getSmallPost($featuredBlog[4]) ?>

                                    <?= getSmallPost($featuredBlog[5]) ?>

                                    <?= getSmallPost($featuredBlog[6]) ?>

                                    <?= getSmallPost($featuredBlog[7]) ?>

                                    <?= getSmallPost($featuredBlog[8]) ?>

                                </div>
                            </div>
                        </div>

                        <!-- nav-2 -->
                        <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav2">
                            <div class="row">
                                
                                <?= getBigPost($latestBlog[0]); ?>

                                <?= getBigPost($latestBlog[1]); ?>

                                <?= getBigPost($latestBlog[2]); ?>

                                <!-- Minimized Blog -->
                                <div class="row mt-4">
                                    
                                    <?= getSmallPost($latestBlog[3]) ?>

                                    <?= getSmallPost($latestBlog[4]) ?>

                                    <?= getSmallPost($latestBlog[5]) ?>

                                    <?= getSmallPost($latestBlog[6]) ?>

                                    <?= getSmallPost($latestBlog[7]) ?>

                                    <?= getSmallPost($latestBlog[8]) ?>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- nav-3 -->
                        <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav3">
                            <div class="row">
                                
                                <?= getBigPost($popularBlog[0]); ?>

                                <?= getBigPost($popularBlog[1]); ?>

                                <?= getBigPost($popularBlog[2]); ?>

                                <!-- Minimized Blog -->
                                <div class="row mt-4">

                                    <?= getSmallPost($popularBlog[3]) ?>

                                    <?= getSmallPost($popularBlog[4]) ?>

                                    <?= getSmallPost($popularBlog[5]) ?>

                                    <?= getSmallPost($popularBlog[6]) ?>

                                    <?= getSmallPost($popularBlog[7]) ?>

                                    <?= getSmallPost($popularBlog[8]) ?>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="col-12 col-lg-3">
                <div class="sidebar-area">
                    <div class="row">
                        <!-- Newsletter Widget -->
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="single-widget-area stat-widget">
                                <div class="left-stat">
                                    <div class="stat-container stat-container-top">
                                        <i class="fa-solid fa-file"></i>
                                        <p class="mt-1"><span class="num-value" id="value-one">
                                            <?php echo $numOfBlogs ?>
                                        </span>+ Blogs</p>
                                    </div>
                                    <div class="stat-container stat-container-bottom">
                                        <i class="fa-solid fa-clock"></i>
                                        <p class="mt-1">
                                            <span class="num-value" id="value-two">
                                                <?php echo $yearsOfExperience ?>
                                            </span>+ Years</p>
                                    </div>
                                </div>
                                <div class="right-stat">
                                    <div class="stat-container stat-container-top">
                                        <i class="fa-solid fa-user"></i>
                                        <p class="mt-1"><span class="num-value" id="value-three">
                                            <?php echo $numOfUsers ?>
                                        </span>+ Users</p>
                                    </div>
                                    <div class="stat-container stat-container-bottom">
                                        <i class="fa-solid fa-handshake"></i>
                                        <p class="mt-1">
                                            <span class="num-value" id="value-four">
                                            <?php echo $numOfPartners ?>
                                            </span>+ Partners</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Increase Number Animation -->
                        <script>
                            $('.num-value').each(function() {
                                $(this).prop('Counter', 0).animate({
                                    Counter: $(this).text()
                                }, {
                                    duration: 1000,
                                    easing: 'swing',
                                    step: function(now) {
                                        $(this).text(Math.ceil(now));
                                    }
                                });
                            });
                        </script>

                        <!-- Ad Widget -->
                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="single-widget-area add-widget">
                                <div id="ad-widget">
                                    <a href="#">
                                        <img src="img/bg-img/add3.png" alt="" width="100%">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Intro News Area End ##### -->

<!-- ##### Add Area Start ##### -->
<div class="big-add-area">
    <div>
        <a href="#"><img src="img/bg-img/add2.png" alt=""></a>
    </div>
</div>
<!-- ##### Add Area End ##### -->

<!-- ##### Top News Area Start ##### -->
<div class="top-news-area">
    <div class="container-fluid" style="padding: 0 6%;">
        <div class="row">

            <?= getOtherBlog($lovedBlog[0]) ?>
            
            <?= getOtherBlog($lovedBlog[1]) ?>

            <?= getOtherBlog($lovedBlog[2]) ?>

            <?= getOtherBlog($lovedBlog[3]) ?>

            <?= getOtherBlog($lovedBlog[4]) ?>

            <?= getOtherBlog($lovedBlog[5]) ?>

            <?= getOtherBlog($lovedBlog[6]) ?>

            <?= getOtherBlog($lovedBlog[7]) ?>
            
            <!-- Load More Button -->
            <!-- <div class="col-12">
                <div class="load-more-button text-center">
                    <a href="#" class="btn newsbox-btn">Load More</a>
                </div>
            </div> -->

        </div>
    </div>
</div>
<!-- ##### Top News Area End ##### -->

<!-- ##### Add Area Start ##### -->
<div class="big-add-area mb-100">
    <div class="container-fluid">
        <a href="#"><img src="img/bg-img/add2.png" alt=""></a>
    </div>
</div>
<!-- ##### Add Area End ##### -->