<?php 
    include "../functions/connect.php";
    try {
        if(isset($_POST['submit'])) {
            if(isset($_POST['email']) && isset($_POST['pswd'])) {
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                $pswd = htmlspecialchars($_POST['pswd']);
                $query = "SELECT * FROM $mainDbTables[1] WHERE `email`=? AND `password`=?";
                $stmt = $pdo->prepare($query);
                if($stmt->execute([$email, $pswd])) {
                    $result = $stmt->fetchAll();
                    if (count($result)==1) {
                        foreach ($result as $value) {
                            $id = $value[0];
                            $username = $value[1];
                        }
                        session_start();
                        $_SESSION['userId'] = $id;
                        $_SESSION['email'] = $email;
                        $_SESSION['username'] = $username;
                        // setcookie('email', $email, time() + 60*60*24*30);
                        // echo "<script>alert($id $email $username);</script>";

                        // setcookie("CookieName","CookieValue",time() + (10 * 365 * 24 * 60 * 60));

                        header('Location: ../index.php');
                        exit();
                    } else if (count($result)==0) {
                        echo "<script>alert('Invalid email or password');</script>";
                    }else {
                        echo "<script>alert('Collision Detected: Response captured');</script>";
                    }
                } else {
                    echo "<script>alert('Something went wrong...');</script>";
                }
            } else {
                echo "<script>alert('Code Modification Detected: Response captured');</script>";
            }
            // echo hash('sha512', $_POST['pswd']);
            // echo password_hash($_POST['pswd'], PASSWORD_DEFAULT);
            // password_verify($pswd, $hashed_pswd);
        }
    }
    catch (Exception $e) {
        echo "script>alert($e);</>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In: Nepases Stuff</title>

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
        <div class="form-wrapper">
            <div class="regHeader text-center">
                <h4>Login to your account</h4>
            </div>
            <form class="row g-3" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="col-md-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <span id="inputEmailMsg" class="error-msg"></span>
                    <input type="email" class="form-control" id="inputEmail" name="email">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword" class="form-label">Password</label>
                    <span id="inputPswdMsg" class="error-msg"></span>
                    <input type="password" class="form-control" id="inputPassword" name="pswd">
                </div>
                <div class="col-12 reg-frgt-pswd">
                    <u><b><a href="#">Forgot Password</a></b></u>
                </div>
                <div class="col-12 text-center" style="margin-top: 34px;">
                    <button type="submit" name= "submit" class="nav-list-item-btn disable-element" id="submitBtn">Sign In</button>
                </div>
            </form>
            <div class="regFooter">
                <hr style="margin: -8px 0 0 0;">
                <div class="row mb-3 mt-1">
                    <div class="col-5 text-center">
                        <a href="../index.php" title="Go to homepage">Home</a>
                    </div>
                    <div class="col-2"><b style="color: #888; padding: 0;">/</b></div>
                    <div class="col-5 text-center">
                        <a href="../signUpIn/signUp.php" title="Create an account">SignUp</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        
        
        "use strict";

        $('#inputEmail').on('keyup', ()=> {
            setTimeout(checkEmail(), 3000);
        });

        $('#inputPassword').on('keyup', ()=> {
            setTimeout(checkPswd(), 3000);
        });

        $('#inputPassword, #inputEmail').on('keyup', ()=> {
            finalValidation();
        });

        // Final Validation
        function finalValidation() {
            let pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
            if ($('#inputPassword').val().length>0 && pattern.test($('#inputEmail').val())){
                document.getElementById("submitBtn").classList.remove("disable-element");
            } else {
                document.getElementById("submitBtn").classList.add("disable-element");
            }
        }

        // Check Email Field
        function checkEmail() {
            let box = document.getElementById('inputEmail');
            let pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;            
            if (pattern.test($('#inputEmail').val())) {
                document.getElementById('inputEmailMsg').innerText = '';
                box.classList.add('is-valid-input');
                box.classList.remove('is-invalid-input');
            } else {
                document.getElementById('inputEmailMsg').innerText = '(Invalid email)';
                box.classList.remove('is-valid-input');
                box.classList.add('is-invalid-input');
                return false;
            }
            return true;
        }

        // Check Password Field
        function checkPswd() {
            let box = document.getElementById('inputPassword');
            let pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
            if ($('#inputPassword').val().length==0) {
                document.getElementById('inputPswdMsg').innerText = '(Empty Password)';
                box.classList.remove('is-valid-input');
                box.classList.add('is-invalid-input');
                return false;
            } else {
                document.getElementById('inputPswdMsg').innerText = '';
                box.classList.add('is-valid-input');
                box.classList.remove('is-invalid-input');
            }
            return true;
        }

    </script>
</body>
</html>