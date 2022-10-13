<?php 
    
    session_start();

    if(!isset($_SESSION['admin_email'])){
        echo "<script>window.open('login.php','_self')</script>";
    }

?>

<!-- Breadcrumb Begins -->
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-dashboard"></i> Dashboard / View Blogs</li>
        </ol>
    </div>
</div>
<!-- Breadcrumb End -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <!-- Heading -->
            <div class="panel-heading">
               <h3 class="panel-title">View Blogs</h3> 
            </div>
            
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        
                        <thead>
                            <tr>
                                <th> <center>ID</center> </th>
                                <th> <center>Title</center> </th>
                                <th> <center>Delete</center> </th>
                                <th> <center>Edit</center> </th>
                            </tr>
                        </thead>
                        
                        <tbody><!-- tbody begin -->
                            
         
                            
                            <tr>
                                <td> </td>
                                <td> </td>
                                <td> 
                                    <a href="index.php?delete_blog="><i class="fa fa-trash-o"></i> Delete</a>   
                                </td>

                                <td> 
                                    <a href="index.php?edit_blog="><i class="fa fa-pencil"></i> Edit</a> 
                                </td>
                            </tr>
                            
                        </tbody>
                        
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>

