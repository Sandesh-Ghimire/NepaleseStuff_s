<?php
    include "../functions/connect.php";
    try {
        if(isset($_POST['submit'])) {
            if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pswd']) && isset($_POST['pswd_c'])) {
                if(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) {
                    $username = htmlspecialchars($_POST['username']);
                    $email = $_POST['email'];
                    $pswd = htmlspecialchars($_POST['pswd']);
                    $pswd_c = htmlspecialchars($_POST['pswd_c']);
                    if($pswd==$pswd_c){
                        $query = "INSERT INTO $mainDbTables[1] (`username`, `email`, `password`) VALUES (?, ?, ?)";
                        $stmt = $pdo->prepare($query);
                        $stmt->execute([$username, $email, $pswd]);
                        echo "<script>alert('Successfully created account');</script>";
                    } else {
                        echo "<script>alert('Code Modification Detected: Response captured');</script>";
                    }
                } else {
                    echo "<script>alert('Code Modification Detected: Response captured');</script>";
                }
                
            }
        }
    }
    catch (Exception $e) {
        echo "script>alert($e);</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up: Nepases Stuff</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/logo.png">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/custom/signUpIn.css">
    <!-- jQuery-2.2.4 js -->
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>

</head>
<body>
    <!-- Content Starts Here -->
    <div id="superMain">
        <div class="form-wrapper" style="height: 580px;">
            <div class="regHeader text-center">
                <h4>Create your account</h4>
            </div>
            <form class="row g-3" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="col-md-12">
                    <label for="inputName" class="form-label">Name</label>
                    <input type="text" class="form-control" id="inputName" name="username" required>
                </div>
                <div class="col-md-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" required>
                </div>
                <div class="col-md-12">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="pswd" required>
                </div>
                <div class="col-md-12">
                    <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="inputConfirmPassword" name="pswd_c" required>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" required>
                        <label class="form-check-label" for="gridCheck">
                            I Agree to the <u><b><a href="termsAndConditions.php">Terms and Conditions</a></b></u>
                        </label>
                    </div>
                </div>
                <div class="col-12 text-center" style="margin-top: 34px;">
                    <button type="submit" class="nav-list-item-btn disable-element" id="submitBtn" name="submit">Sign Up</button>
                </div>
            </form>
            <div class="regFooter">
                <hr style="margin: -7px 0 0 0;">
                <div class="row">
                    <div class="col-5 text-center">
                        <a href="../index.php" title="Go to homepage">Home</a>
                    </div>
                    <div class="col-2"><b style="color: #888; padding: 0;">/</b></div>
                    <div class="col-5 text-center">
                        <a href="../signUpIn/signIn.php" title="Login to your account">SignIn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        $(document).ready(()=>{
            
            $('#inputPassword, #inputConfirmPassword, #inputEmail, #inputName').on('keyup', ()=> {
                validateClientSideInput();
            });

            $('#gridCheck').on('click', ()=> {
                validateClientSideInput();
            });

            function validateClientSideInput() {
                var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
                var elem = document.getElementById("submitBtn");
                var ele = document.getElementsByTagName('input');
                if($('#gridCheck').is(":checked") && $('#inputPassword').val()==$('#inputConfirmPassword').val() && pattern.test($('#inputEmail').val()) && $('#inputName').val().length>0){
                    elem.classList.remove("disable-element");
                    ele.classList.add("active-element");
                } else {
                    elem.classList.add("disable-element");
                }
            }
        });

    </script>
</body>
</html>