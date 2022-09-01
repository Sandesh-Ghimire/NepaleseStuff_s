<!DOCTYPE html>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- Favicon -->
    <link rel="icon" href="img/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

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
            <!-- <li><a href="about.php">About</a>
            </li>
            <li>|</li> -->

            <li><a onclick="getDynamicContent('contact.php')" class="setCursorPointer">Contact</a></li>
           

            <li>|</li>
            <li><a onclick="getDynamicContent('faq.php')" class="setCursorPointer">FAQ</a></li>
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
                                                    <li><a onclick="getDynamicContent('faq.php')" class="setCursorPointer">FAQ</a></li>
                                                </ul>
                                            </center>
                                        </div>
                                    </li>
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
                                    <li id="search-li">
                                        <form method="post" id="search-form">
                                            <input type="text" class="textbox" placeholder="Search...">
                                            <button type="submit" class="btn" id="search-btn">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                        </form>
                                    </li>
                                    <li>
                                        <div class="navbar-nav action-buttons ml-auto">
                                            <i class="fa-solid fa-circle-user" data-toggle="dropdown" id="profile-icon"></i>
                                            <div class="dropdown-menu login-form">
                                                <form method="post">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" required="required">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="clearfix">
                                                            <label>Password</label>
                                                            <a href="#" class="float-right text-muted hover-underline-animation"><small>Forgot?</small></a>
                                                        </div>
                                                        <input type="password" class="form-control" required="required">
                                                    </div>

                                                    <button type="button" class="btn btn-primary reg-btn"><a href="#" class="text-light">Sign Up</a></button>
                                                    <button type="submit" class="btn btn-danger reg-btn"><a name="" class="text-light">Login</a></button>
                                                </form>
                                            </div>
                                        </div>
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
    <footer>
        <div class="row">
            <div class="col-3 ftr-col-3">
                <div class="link-cat" onclick="footerToggle(this)">
                    <span class="footer-toggle"></span>
                    <span class="footer-cat">Nepalese Stuff</span>
                </div>
                <ul class="footer-cat-links" style="width: 80%; pointer-events: none;">
                    <li><br></li>
                    <li>
                        <a href="#" style="text-align: justify;">
                            Nepalese Stuff is a blog website dedicated for easy access of reliable information about Nepal.
                        </a>
                    </li>
                    <li><br></li>
                </ul>
            </div>

            <div class="col-3 ftr-col-3">
                <div class="link-cat" onclick="footerToggle(this)">
                    <span class="footer-toggle"></span>
                    <span class="footer-cat">Services</span>
                </div>
                <ul class="footer-cat-links" style="cursor: context-menu;">
                    <li><br></li>
                    <li><a name=""><span>Service1</span></a></li>
                    <li><a name=""><span>Service2</span></a></li>
                    <li><a name=""><span>Service3</span></a></li>
                    <li><a name=""><span>Service4</span></a></li>
                    <li><br></li>
                </ul>
            </div>

            <div class="col-3 ftr-col-3">
                <div class="link-cat" onclick="footerToggle(this)">
                    <span class="footer-toggle"></span>
                    <span class="footer-cat">Quick Links</span>
                </div>
                <ul class="footer-cat-links">
                    <li><br></li>
                    <li><a href="index.php"><span>Home</span></a></li>
                    <li><a href="about.php"><span>About</span></a></li>
                    <li><a href="contact.php"><span>Contact</span></a></li>
                    <li><a href="faq.php"><span>FAQ</span></a></li>
                    <li><br></li>
                </ul>
            </div>

            <div class="col-3 ftr-col-3">
                <div class="link-cat" onclick="footerToggle(this)">
                    <span class="footer-toggle"></span>
                    <span class="footer-cat">Contact Us</span>
                </div>
                <ul class="footer-cat-links">
                    <li><br></li>
                    <li><i class="fa fa-phone"></i><a name="">980-0000-0000</a></li>
                    <li><i class="fa fa-facebook"></i><a href="https://www.facebook.com/epsnepal4" target="_blank">nepalesestuff</a></li>
                    <li><i class="fa fa-map-marker"></i><a name="">Kathmandu, Nepal</a></li>
                    <li><br></li>
                </ul>
            </div>
        </div>
        <div id="copyright">
            Copyright &copy; Nepalese Stuff
            <script>
                document.write(new Date().getFullYear())
            </script>
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
    <!-- Active js -->
    <script src="js/active.js"></script>

    <!-- Script -->
    <script>
        // Initially Load Content as Dashboard
        let flag = true;
        if (flag == true) {
            getDynamicContent('dashboard.php');
            flag = false;
        }

        // Change Content (event: 'click')
        function getDynamicContent(contentLink) {
            fetch(contentLink, {
                    method: 'HEAD'
                })
                .then(res => {
                    if (res.ok) {
                        $('#dynamic-content').load(contentLink);
                        // location.reload(false);
                    } else {
                        errorHandler(contentLink);
                    }
                }).catch(err => {
                    errorHandler(contentLink)
                });
        }

        // In case of error while processing any request
        function errorHandler(contentLink) {
            $('#dynamic-content').load('error.php')
        }
    </script>

</body>

</html>