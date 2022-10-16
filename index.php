<!DOCTYPE html>

<?php
    include "functions/connect.php";
    require_once "functions/variables.php";
    session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Nepalese Stuff</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Favicon -->
    <link rel="icon" href="img/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

    <style>        
        .userdropdown {
            position: relative;
            display: inline-block;
        }
        
        .userdropdown-content {
            display: none;
            position: absolute;
            border-radius: 8px;
            background-color: #fff;
            min-width: 144px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            /* text-align: center; */
        }

        @media only screen and (min-width:992px) {
            .userdropdown-content {
                top: 60px;
                right: 0px;
                min-width: 233px;
            }
        }
        @media only screen and (max-width:991px) {
            .userdropdown-content {
                top: 0px;
                left: 34px;
                min-width: 233px;
            }
        }
        
        .userdropdown-content a {
            color: black;
            padding: 8px auto;
            text-decoration: none;
            display: block;
            transition: 0.3s !important;
        }

        .userdropdown-content a i {
            margin: 11px 13px 0 8px;
        }
        
        .userdropdown a:hover {
            box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;
            outline: 1px solid red;
            border-radius: 21px;
            margin: 0 8px;
        }
        
        .show {
            display: block;
        }

        i.dropbtn {
            /* color: #04347c !important; */
            color: #228B22 !important;
        }

    </style>

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Main Nav -->
    <div id="main-nav">
        <ul>
            <li><a onclick="getDynamicContent('dashboard.php')" class="setCursorPointer">Home</a></li>
            <li>|</li>
            <li><a onclick="getDynamicContent('about.php')" class="setCursorPointer">About</a></li>
            <li>|</li>
            <li><a onclick="getDynamicContent('contact.php')" class="setCursorPointer">Contact</a></li>
            <li>|</li>
            <li><a onclick="getDynamicContent('forum/forum.php')" class="setCursorPointer">Forum</a></li>
        </ul>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="newsbox-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="nav classy-navbar justify-content-between" id="newsboxNav">

                        <!-- Nav brand -->
                        <a href="index.php"><img src="img/logo.png" alt="logo" title="Nepalese Stuff" id="logo"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li>
                                        <!-- Main Nav Mobile View -->
                                        <div id="main-nav-mob">
                                            <center>
                                                <ul>
                                                    <li><a onclick="getDynamicContent('dashboard.php')" class="setCursorPointer">Home</a></li>
                                                    <li>|</li>
                                                    <li><a onclick="getDynamicContent('about.php')" class="setCursorPointer">About</a></li>
                                                    <li>|</li>
                                                    <li><a onclick="getDynamicContent('contact.php')" class="setCursorPointer">Contact</a></li>
                                                    <li>|</li>
                                                    <li><a onclick="getDynamicContent('forum/forum.php')" class="setCursorPointer">Forum</a></li>
                                                </ul>
                                            </center>
                                        </div>
                                    </li>
                                    <!-- <li><a onclick="getBlogContent(9)" style="cursor: pointer;">Single Blog</a></li> -->
                                    <li><a href="#">Places</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <center>
                                                    <h1>
                                                        <li class="title">Tourist Destination</li>
                                                    </h1>
                                                    <li><a href="#">Bhaktapur</a></li>
                                                    <li><a href="#">Chitwan</a></li>
                                                    <li><a href="#">Kathmandu</a></li>
                                                    <li><a href="#">Lumbini</a></li>
                                                    <li><a href="#">Mustang</a></li>
                                                    <li><a href="#">Patan</a></li>
                                                    <li><a href="#">Pokhara</a></li>
                                                    <hr class="nav-list-item-hr">
                                                    <li><a href="#"><button class="nav-list-item-btn">More</button></a></li>
                                                </center>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <center>
                                                    <h1>
                                                        <li class="title">Religious Places</li>
                                                    </h1>
                                                    <li><a href="#">Boudhanath Stupa</a></li>
                                                    <li><a href="#">Gosainkunda</a></li>
                                                    <li><a href="#">Lumbini</a></li>
                                                    <li><a href="#">Manakamana Temple</a></li>
                                                    <li><a href="#">Muktinath Temple</a></li>
                                                    <li><a href="#">Pashupatinath Temple</a></li>
                                                    <li><a href="#">Swayambhunath Stupa</a></li>
                                                    <hr class="nav-list-item-hr">
                                                    <li><a href="#"><button class="nav-list-item-btn">More</button></a></li>
                                                </center>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <center>
                                                    <h1>
                                                        <li class="title">Geography</li>
                                                    </h1>
                                                    <li><a href="#">Hilly Region</a></li>
                                                    <li><a href="#">Himalayan Region</a></li>
                                                    <li><a href="#">Lakes</a></li>
                                                    <li><a href="#">Mountains</a></li>
                                                    <li><a href="#">Terai Region</a></li>
                                                    <li><a href="#">Valleys</a></li>
                                                    <li><a href="#">Rivers</a></li>
                                                    <!--  -->

                                                    <hr class="nav-list-item-hr">
                                                    <li><a href="#"><button class="nav-list-item-btn">More</button></a></li>
                                                </center>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <center>
                                                    <h1>
                                                        <li class="title">Hiking & Treking</li>
                                                    </h1>
                                                    <li><a href="#">Annapurna Trek</a></li>
                                                    <li><a href="#">Arun Valley Trek</a></li>
                                                    <li><a href="#">Jomsom & Muktinath</a></li>
                                                    <li><a href="#">Rara Lake Trek</a></li>
                                                    <!-- <li><a href="#">Royal Trek</a></li> -->
                                                    <li><a href="#">Siklish Trek</a></li>
                                                    <li><a href="#">Three Passes Trek</a></li>
                                                    <li><a href="#">Upper Mustang Trek</a></li>
                                                    <hr class="nav-list-item-hr">
                                                    <li><a href="#"><button class="nav-list-item-btn">More</button></a></li>
                                                </center>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- <li><a href="#">History</a>
                                        <ul class="dropdown">
                                            <center>
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="catagory.php">Catagory</a></li>
                                                <li><a href="single-post.php">Single Post</a></li>
                                                <li><a href="contact.php">Contact</a></li>
                                                <li><a href="elements.php">Elements</a></li>
                                            </center>
                                        </ul>
                                    </li> -->
                                    <li><a href="#">Topics</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <center>
                                                    <h1>
                                                        <li class="title">Political Region</li>
                                                    </h1>
                                                    <li><a href="#">Developmental Region</a></li>
                                                    <li><a href="#">Districts</a></li>
                                                    <li><a href="#">Metropolitan</a></li>
                                                    <li><a href="#">States</a></li>
                                                    <li><a href="#">Sub Metropolitan</a></li>
                                                    <li><a href="#">Urban Municipality</a></li>
                                                    <li><a href="#">Ward</a></li>
                                                    <li><a href="#">Zones</a></li>
                                                    <hr class="nav-list-item-hr">
                                                    <li><a href="#"><button class="nav-list-item-btn">More</button></a></li>
                                                </center>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <center>
                                                    <h1>
                                                        <li class="title">Servies Center</li>
                                                    </h1>
                                                    <li><a href="#">Banks</a></li>
                                                    <li><a href="#">Cinema Halls</a></li>
                                                    <li><a href="#">Companies</a></li>
                                                    <li><a href="#">Factories</a></li>
                                                    <li><a href="#">Hospitals</a></li>
                                                    <li><a href="#">Hotels</a></li>
                                                    <li><a href="#">Restaurants</a></li>
                                                    <li><a href="#">Shopping Centers</a></li>
                                                    <hr class="nav-list-item-hr">
                                                    <li><a href="#"><button class="nav-list-item-btn">More</button></a></li>
                                                </center>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <center>
                                                    <h1>
                                                        <li class="title">Services & Facility</li>
                                                    </h1>
                                                    <li><a href="#">Bus Station</a></li>
                                                    <li><a href="#">Museums</a></li>
                                                    <li><a href="#">Parks</a></li>
                                                    <li><a href="#">Police Station</a></li>
                                                    <li><a href="#">Railway Station</a></li>
                                                    <li><a href="#">School & University</a></li>
                                                    <li>
                                                        <a href="#"></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"></a>
                                                    </li>
                                                    <hr class="nav-list-item-hr">
                                                    <li><a href="#"><button class="nav-list-item-btn">More</button></a></li>
                                                </center>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <center>
                                                    <h1>
                                                        <li class="title">Cultural Diversity</li>
                                                    </h1>
                                                    <li><a href="#">Clothes</a></li>
                                                    <li><a href="#">Ethnicity</a></li>
                                                    <li><a href="#">Festival</a></li>
                                                    <li><a href="#">Food</a></li>
                                                    <li><a href="#">Language</a></li>
                                                    <li><a href="#">Life Style</a></li>
                                                    <li><a href="#">Religion</a></li>
                                                    <li><a href="#">Tradition</a></li>
                                                    <hr class="nav-list-item-hr">
                                                    <li><a href="#"><button class="nav-list-item-btn">More</button></a></li>
                                                </center>
                                            </ul>
                                        </div>
                                    </li>

                                    <style>
                                        .search-result-container {
                                            position: relative;
                                            /* display: none; */
                                        }
                                        /*#search-form:focus + .search-result-container,
                                        #search-form:active + .search-result-container,
                                        #search-form:hover + .search-result-container {
                                            display: block;
                                        } */
                                        .search-result-div {
                                            position: absolute;
                                            top: 3px;
                                            background-color: white;
                                            width: 100%;
                                        }
                                        #search-result-ul {
                                            list-style: none;
                                            padding: 0 !important;
                                            border-radius: 8px;
                                            border: 2px solid #eee;
                                        }
                                        #search-result-ul li {
                                            padding: 5px 21px !important;
                                        }
                                        #search-result-ul li:hover {
                                            background-color: #eee;
                                            border-radius: 55px;
                                        }

                                        #search-li:hover > #src {
                                            display: block;
                                        }
                                        
                                    </style>

                                    <!-- Search Area -->
                                    <li id="search-li">
                                        <form method="post" id="search-form">
                                            <input type="text" class="textbox" id="searchInputField" name="searchInputField" placeholder="Search...">
                                            <button type="button" class="btn" id="search-btn">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </button>

                                            <!-- Search Result Gets Inserted Here -->
                                            <div class="search-result-container" id="src">
                                                <div class="search-result-div">
                                                    <ul style="color: #000;" id="search-result-ul">
                                                        <!-- <li>HEHE</li> -->
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </li>

                                    <!-- User Profile Button -->
                                    <li>
                                        <?php 
                                            if (isset($_SESSION['userId'])) {
                                                // echo "<script>alert('Session present')</script>";
                                                echo "<div class=\"navbar-nav action-buttons ml-auto userdropdown\">
                                                    <i class=\"fa-solid fa-circle-user dropbtn\" onclick=\"myFunction()\" id=\"profile-icon\" ></i>
                                                    <div id=\"myDropdown\" class=\"userdropdown-content py-2\">
                                                        <a style='text-transform:none;'><i class=\"fa-solid fa-user\"></i>".$_SESSION['username']."</a>
                                                        <a onclick=getDynamicContent('signUpIn/log.php') style='cursor:pointer;'><i class=\"fa-solid fa-layer-group\"></i>Activity Log</a>
                                                        <a onclick=getDynamicContent('signUpIn/settings.php') style='cursor:pointer;'><i class=\"fa-solid fa-gear\"></i>Settings</a>



                                                        <a href=\"signUpIn/logout.php\"><i class=\"fa-solid fa-right-from-bracket\"></i>Log Out</a>
                                                    </div>
                                                </div>";
                                            } else {
                                                // echo "<script>alert('Session not resent')</script>";
                                                echo "<div class=\"navbar-nav action-buttons ml-auto\">
                                                        <i class=\"fa-solid fa-circle-user\" id=\"profile-icon\" onclick=\"goToAnotherPage('signUpIn/signIn.php')\"></i>
                                                    </div>";
                                            }
                                        ?>
                                    </li>
                                </ul>
                                <!-- Nav End -->

                            </div>
                    </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Dynamic Content Allocation ##### -->
    <div id="dynamic-content"></div>

    <!-- ##### Footer Area Start ##### -->
    <footer id="footer" class="text-white d-flex-column pt-5">
        <!--Footer Links-->
        <div class="container-fluid pb-2" style="padding: 0 6%;">
            <div class="row">
            <!--First column-->
            <div class="col-lg-3 mx-auto shfooter text-center">
                <h5 class="my-2 font-weight-bold d-none d-lg-block">Nepalese Stuff</h5>
                <div class="d-lg-none title" data-target="#nepaleseStuff" data-toggle="collapse">
                    <div class="my-2 font-weight-bold">Nepalese Stuff
                        <div class="float-right navbar-toggler">
                            <i class="fas fa-angle-down"></i>
                            <i class="fas fa-angle-up"></i>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="nepaleseStuff">
                    <p>Nepalese Stuff is a dedicated platform for accessing information about stuffs related to Nepal. The website is an attempt to introduce Nepal in the global arena.</p>
                </div>
            </div>
            <!--/.First column-->
            <hr class="clearfix w-100 d-lg-none mb-0">
            <!--Second column-->
            <div class="col-lg-3 mx-auto shfooter text-center">
                <h5 class="my-2 font-weight-bold d-none d-lg-block">Useful Links</h5>
                <div class="d-lg-none title" data-target="#usefulLinks" data-toggle="collapse">
                <div class="my-2 font-weight-bold">Useful Links
                    <div class="float-right navbar-toggler">
                    <i class="fas fa-angle-down"></i>
                    <i class="fas fa-angle-up"></i>
                    </div>
                </div>
                </div>
                <ul class="list-unstyled collapse" id="usefulLinks" style="margin-bottom: 13px;">
                    <li><a class="setCursorPointer" onclick="getDynamicContent('dashboard.php')">Home&nbsp;&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
                    <li><a class="setCursorPointer" onclick="getDynamicContent('about.php')">About&nbsp;&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
                    <li><a class="setCursorPointer" onclick="getDynamicContent('contact.php')">Contact&nbsp;&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
                    <li><a class="setCursorPointer" onclick="getDynamicContent('forum/forum.php')">Forum&nbsp;&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a></li>
                </ul>
            </div>
            <!--/.Second column-->
            <hr class="clearfix w-100 d-lg-none mb-0">
            <!--Third column-->
            <div class="col-lg-3 mx-auto shfooter text-center">
                <h5 class="my-2 font-weight-bold d-none d-lg-block">Join Us</h5>
                <div class="d-lg-none title" data-target="#joinUs" data-toggle="collapse">
                    <div class="my-2 font-weight-bold">Join Us
                        <div class="float-right navbar-toggler">
                            <i class="fas fa-angle-down"></i>
                            <i class="fas fa-angle-up"></i>
                        </div>
                    </div>
                </div>
                <ul class="list-unstyled collapse" id="joinUs" style="margin-bottom: 13px;">
                    <li><a target="_blank" href="#"><i class="fa-brands fa-twitter"></i>&nbsp;&nbsp;&nbsp;&nbsp;Twitter</a></li>
                    <li><a target="_blank" href="#"><i class="fa-brands fa-facebook-f"></i>&nbsp;&nbsp;&nbsp;&nbsp;Facebook</a></li>
                    <li><a target="_blank" href="#"><i class="fa-brands fa-instagram"></i>&nbsp;&nbsp;&nbsp;&nbsp;Instagram</a></li>
                    <li><a target="_blank" href="#"><i class="fa-brands fa-linkedin-in"></i>&nbsp;&nbsp;&nbsp;&nbsp;LinkedIn</a></li>
                </ul>
            </div>
            <!--/.Third column-->
            <hr class="clearfix w-100 d-lg-none mb-0">
            <!--Fourth column-->
            <div class="col-lg-3 mx-auto shfooter text-center">
                <h5 class="my-2 font-weight-bold d-none d-lg-block">Get Help</h5>
                <div class="d-lg-none title" data-target="#Get-Help" data-toggle="collapse">
                <div class="my-2 font-weight-bold">Get Help
                    <div class="float-right navbar-toggler">
                    <i class="fas fa-angle-down"></i>
                    <i class="fas fa-angle-up"></i>
                    </div>
                </div>
                </div>
                <ul class="list-unstyled collapse" id="Get-Help">
                    <li><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $contactNumber ?></li>
                    <li><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $location ?></li>
                    <li><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $emailAddress ?></li>
                </ul>
            </div>
            <!--/.Fourth column-->
            </div>
        </div>
        <!--/.Footer Links-->
        <hr class="mb-0">
        <div class="py-3 text-center">
            Copyright © <?= date("Y"); ?> | Nepalese Stuff
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>

    <!-- Custom JS -->
    <script src="js/active.js"></script>
    <script src="js/control.js"></script>

    <script>

        // When the user clicks on the profile button,
        //toggle between hiding and showing the dropdown content
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("userdropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

        // Get Blog Content
        function getBlogContent(eleId) {
            $.ajax({
                url: "blog.php",
                type: "GET",
                success: function(response) {
                    $('#dynamic-content').load("blog.php?blogId=" + eleId);
                },
                error: function(response) {
                    errorHandler("");
                }
            });
        }

        // Search AJAX Request
        $('#search-li').on('keypress', () => {
            $.ajax({
                url: "search.php",
                type: "POST",
                data: {
                    "query": $('#searchInputField').val()
                },
                success: function (response) {
                    $('#search-result-ul').html(response);
                },
                error: function (response) {
                    $('#search-result-ul').html("<li>Something went wrong...</li>");
                }
            });
        });

    </script>

</body>

</html>