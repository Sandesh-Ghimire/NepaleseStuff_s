<?php 

    session_start();
    include("includes/db.php");

    if(isset($_POST['submit'])){
        
        $admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);
        $admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);
        
        $query = "select * from admintable where email='$admin_email' AND password='$admin_pass'";
        $result = mysqli_query($con, $query);
        $count = mysqli_num_rows($result);
        
        if($count==1){
            $_SESSION['admin_email']=$admin_email;
            echo "<script>window.open('index.php?dashboard','_self')</script>"; 
        } else{
            echo "<script>alert('Email or Password is Wrong !')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin: Nepalese Stuff</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">

    <!-- Favicon -->
    <link rel="icon" href="../img/logo.png">
</head>
<body>
   
   <div class="container">

        <form action="" class="form-login" method="post">
           
            <h2 class="form-login-heading"> Admin Login </h2>
            
           <input type="text" class="form-control" placeholder="Email Address" name="admin_email" required>
           <input type="password" class="form-control" placeholder="Your Password" name="admin_pass" required>
           
           <button type="submit" class="btn btn-lg btn-primary btn-block" name="submit">Login</button>
        
       </form>

   </div>
    
</body>
</html>
