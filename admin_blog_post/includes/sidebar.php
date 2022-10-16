<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<style>
    #adminSideNav li a {
        color: #ffffff;
    }
</style>
   
<nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top begin -->
    <div class="navbar-header"><!-- navbar-header begin -->
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><!-- navbar-toggle begin -->
            
            <span class="sr-only">Toggle Navigation</span>
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button><!-- navbar-toggle finish -->
        
        <a href="index.php?dashboard" class="navbar-brand">Admin: <?= $_SESSION['admin_name'] ?></a>
        
    </div><!-- navbar-header finish -->
    
    <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse begin -->
        <ul class="nav navbar-nav side-nav" id="adminSideNav"><!-- nav navbar-nav side-nav begin -->
            <li>
                <a href="index.php?dashboard">
                        <i class="fa fa-fw fa-dashboard"></i>&nbsp;&nbsp;Dashboard
                </a>
            </li>

            <li>
                <a href="index.php?featured_blog"> 
                    <i class="fa fa-star" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Featured Blog 
                </a>
            </li>
            
            <li>
                <a href="index.php?insert_blog"> 
                    <i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Insert Blog 
                </a>
            </li>

            <li>
                <a href="index.php?edit_blog">
                    <i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Edit Blog 
                </a>
            </li>

            <li>
                <a href="index.php?delete_blog">
                    <i class="fa fa-trash" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Delete Blog 
                </a>
            </li>

            
            <li>
                <a href="logout.php"><!-- a href begin -->
                    <i class="fa fa-fw fa-power-off"></i>&nbsp;&nbsp;&nbsp;Log Out
                </a>
            </li>
            
        </ul><!-- nav navbar-nav side-nav finish -->
    </div><!-- collapse navbar-collapse navbar-ex1-collapse finish -->
    
</nav><!-- navbar navbar-inverse navbar-fixed-top finish -->


<?php } ?>