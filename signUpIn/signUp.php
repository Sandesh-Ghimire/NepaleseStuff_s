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
                    if($pswd==$pswd_c && !empty($username) && !empty($email)){
                        $query = "SELECT `email` FROM $mainDbTables[1] WHERE `email` = ?";
                        $stmt = $pdo->prepare($query);
                        $stmt->execute([$email]);
                        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        if (count($result)==0) {

                            // Add User
                            $query = "INSERT INTO $mainDbTables[1] (`username`, `email`, `password`) VALUES (?, ?, ?)";
                            $stmt = $pdo->prepare($query);
                            $stmt->execute([$username, $email, $pswd]);

                            // Get User Id
                            $query = "SELECT * FROM $mainDbTables[1] WHERE `email` = ?";
                            $stmt = $pdo->prepare($query);
                            $stmt->execute([$email]);
                            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                            $id = $row['userId'];

                            // Create User Table
                            $tableName = "userobj" . $id;
                            $con = mysqli_connect("localhost", "root", "", "nepalesestuffuserobj");
                            $query = "CREATE TABLE $tableName (`visitedBlog` INT, `upvotedBlog` INT, `downvotedBlog` INT, `bookmarkedBlog` INT, `reportedBlog` INT)";
                            mysqli_query($con, $query);

                            echo "<script>alert('Successfully created account');</script>";

                            // Redirect User for Login
                            header("Location: signIn.php");
                            die();

                        } else {
                            echo "<script>alert('Email already in use');</script>";
                        }
                    } else {
                        echo "<script>alert('Code Modification Detected: Response captured');</script>";
                    }
                } else {
                    echo "<script>alert('Code Modification Detected: Response captured');</script>";
                }
            }
            // echo hash('sha512', $_POST['pswd']);
            // echo password_hash($_POST['pswd'], PASSWORD_DEFAULT);
            // password_verify($pswd, $hashed_pswd);
        }
    }
    catch (Exception $e) {
        echo "<script>alert($e);</script>";
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
        <div class="form-wrapper">
            <div class="regHeader text-center">
                <h4>Create your account</h4>
            </div>
            <form class="row g-3" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="col-md-12">
                    <label for="inputName" class="form-label">Name&nbsp;</label>
                    <span id="inputNameMsg" class="error-msg"></span>
                    <input type="text" class="form-control" id="inputName" name="username">
                </div>
                <div class="col-md-12">
                    <label for="inputEmail" class="form-label">Email&nbsp;</label>
                    <span id="inputEmailMsg" class="error-msg"></span>
                    <input type="text" class="form-control" id="inputEmail" name="email">
                </div>
                <div class="col-md-12">
                    <label for="inputPassword" class="form-label">Password&nbsp;</label>
                    <span id="inputPswdMsg" class="error-msg"></span>
                    <input type="password" class="form-control" id="inputPassword" name="pswd">
                </div>
                <div class="col-md-12">
                    <label for="inputConfirmPassword" class="form-label">Confirm Password&nbsp;</label>
                    <span id="inputPswdCMsg" class="error-msg"></span>
                    <input type="password" class="form-control" id="inputConfirmPassword" name="pswd_c">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" require>
                        <label class="form-check-label" for="gridCheck">
                            I Agree to the <u><b><a href="termsAndConditions.php">Terms and Conditions&nbsp;</a></b></u>
                        </label>
                        <span id="checkMsg" class="error-msg"></span>
                    </div>
                </div>
                <div class="col-12 text-center" style="margin-top: 34px;">
                    <button type="submit" class="nav-list-item-btn disable-element" id="submitBtn" name="submit">Sign Up</button>
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
                        <a href="../signUpIn/signIn.php" title="Login to your account">SignIn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        "use strict";

        $('#inputName').on('keyup', ()=> {
            setTimeout(checkUserName(), 3000);
        });

        $('#inputEmail').on('keyup', ()=> {
            setTimeout(checkEmail(), 3000);
        });

        $('#inputPassword').on('keyup', ()=> {
            setTimeout(checkPswd(), 3000);
        });

        $('#inputConfirmPassword').on('keyup', ()=> {
            setTimeout(checkConfirmPswd(), 3000);
        });

        $('#inputPassword, #inputConfirmPassword, #inputEmail, #inputName').on('keyup', ()=> {
            finalValidation();
        });

        $('#gridCheck').on('click', () => {
            finalValidation();
        });

        // Final Validation
        function finalValidation() {
            let pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
            if ($('#gridCheck').is(":checked") && $('#inputPassword').val().length>0 && $('#inputPassword').val()==$('#inputConfirmPassword').val() && pattern.test($('#inputEmail').val()) && $('#inputName').val().length>0){
                document.getElementById("submitBtn").classList.remove("disable-element");
            } else {
                document.getElementById("submitBtn").classList.add("disable-element");
            }
        }

        // Check Username Field
        function checkUserName() {
            let box =  document.getElementById('inputName');
            if ($('#inputName').val().length>0) {
                document.getElementById('inputNameMsg').innerText = '';
                box.classList.add('is-valid-input');
                box.classList.remove('is-invalid-input');
            } else {
                document.getElementById('inputNameMsg').innerText = '(Empty Name)';
                box.classList.remove('is-valid-input');
                box.classList.add('is-invalid-input');
                return false;
            }
            return true;
        }

        // Check Email Field
        function checkEmail() {
            let pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
            let box = document.getElementById('inputEmail');
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

        // Check Confirm Password Field
        function checkConfirmPswd() {
            let box = document.getElementById('inputConfirmPassword');
            if ($('#inputPassword').val()!=$('#inputConfirmPassword').val()) {
                document.getElementById('inputPswdCMsg').innerText = '(Password mismatch)';
                box.classList.remove('is-valid-input');
                box.classList.add('is-invalid-input');
                return false;
            } else if ($('#inputConfirmPassword').val().length==0) {
                document.getElementById('inputPswdCMsg').innerText = '(Empty Password)';
                box.classList.remove('is-valid-input');
                box.classList.add('is-invalid-input');
                return false;
            } else {
                document.getElementById('inputPswdCMsg').innerText = '';
                box.classList.add('is-valid-input');
                box.classList.remove('is-invalid-input');
            }
            return true;
        }

    </script>
</body>
</html>