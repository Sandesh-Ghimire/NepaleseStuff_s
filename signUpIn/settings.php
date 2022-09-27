<?php
    require_once "../functions/connect.php";
    require_once "../functions/variables.php";
    session_start();

    // Username Validation
    if (isset($_POST['username-submit'])) {
        $username = htmlspecialchars($_POST['username']);
        $id = $_SESSION['userId'];
        if ($username == $_POST['username']) {
            $query = "UPDATE $mainDbTables[1] SET `username` = ? WHERE `userId` = ?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$username, $id]);
            echo "<script>alert('Username updated successfully');</script>";
            $_SESSION['username'] = $username;
        } else {
            echo "<script>alert('Invalid Username');</script>";
        }
        echo "<script>window.location.href = '../index.php';</script>";
    }

    // Password Validation
    if (isset($_POST['pswd-submit'])) {
        if (isset($_POST['pswd1']) && isset($_POST['pswd2'])) {
            if ($_POST['pswd1']==$_POST['pswd2']) {
                $pswd = htmlspecialchars($_POST['pswd1']);
                $id = $_SESSION['userId'];
                $query = "UPDATE $mainDbTables[1] SET `password` = ? WHERE `userId` = ?";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$pswd, $id]);
                echo "<script>alert('Password updated successfully');</script>";
            } else {
                echo "<script>alert('Password Mismatch');</script>";
            }
        } else {
            echo "<script>alert('Invalid Password');</script>";
        }
        echo "<script>window.location.href = '../index.php';</script>";
    }

    // Email Validation
    if (isset($_POST['email-submit'])) {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $id = $_SESSION['userId'];
        $query = "SELECT `email` FROM $mainDbTables[1] WHERE `email` = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$email]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($result)==0) {
            if ($email == $_POST['email']) {
                $query = "UPDATE $mainDbTables[1] SET `email` = ? WHERE `userId` = ?";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$email, $id]);
                echo "<script>alert('Email updated successfully');</script>";
    
                $_SESSION['email'] = $email;
                
            } else {
                echo "<script>alert('Invalid Email');</script>";
            }
        } else {
            echo "<script>alert('Email Already Exist');</script>";
        }
        echo "<script>window.location.href = '../index.php';</script>";
    }
?>
<style>
    div.set-main-cnt {
        /* box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; */
        border-radius: 8px;
        border-top-left-radius: 34px;
        border-top-right-radius: 34px;
        border-bottom: 8px;
    }
    .setting-submit-btn {
        background-color: #f53838;
        border: 0;
        height: 34px;
        padding: 5px 34px;
        cursor: pointer;
        border-radius: 34px;
        color: #fff;
        float: right;
        font-weight: 500;
        margin-top: 21px;
    }
    .setting-submit-btn:hover {
        color: whitesmoke;
    }
    label {
        font-size: 16px;
        font-weight: 500;
        margin-top: 8px;
    }
</style>
<div style="padding: 0 6%;">
    <div class="set-main-cnt">
        <!-- Intro News Filter -->
        <div class="intro-news-tab" id="lower-nav">
            <div class="col-12 intro-news-filter d-flex justify-content-between">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav1" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">Username</a>
                        <a name="" class="nav-item nav-link back-slash-separator" style="pointer-events: none;">/</a>
                        <a class="nav-item nav-link" id="nav2" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">Password</a>
                        <a name="" class="nav-item nav-link back-slash-separator" style="pointer-events: none;">/</a>
                        <a class="nav-item nav-link" id="nav3" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">Email</a>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row justify-content-center" style="margin: 0; padding: 0;">
            <!-- Intro News Tabs Area -->
            <div class="col-lg-6 col-12 py-5">
                <div class="intro-news-tab">
                    <div class="tab-content" id="nav-tabContent">

                        <!-- nav-1 -->
                        <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                            <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
                                <div class="mb-3">
                                    <label for="inputUsername" class="form-label">Current Username:</label>
                                    <input type="text" class="form-control" id="inputUsername" placeholder="<?= $_SESSION['username'] ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">New Username:</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="username">
                                </div>
                                <button type="submit" class="setting-submit-btn mt-5" name="username-submit">Submit</button>
                            </form>
                        </div>
                         <!-- nav-2 -->
                         <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav2">
                            <form  method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
                                <div class="mb-3">
                                    <label for="inputPassword" class="form-label">New Password:</label>
                                    <input type="password" class="form-control" id="inputPassword" name="pswd1">
                                </div>
                                <div class="mb-3">
                                    <label for="confirmInputPassword" class="form-label">Confirm Passwrod:</label>
                                    <input type="password" class="form-control" id="confirmInputPassword" name="pswd2">
                                </div>
                                <button type="submit" class="setting-submit-btn mt-5" name="pswd-submit">Submit</button>
                            </form>
                         </div>
                         <!-- nav-3 -->
                        <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav3">
                            <form  method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
                                <div class="mb-3">
                                    <label for="inputEmail" class="form-label">Current Email:</label>
                                    <input type="text" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="<?= $_SESSION['email'] ?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">New Email:</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="email">
                                </div>
                                <button type="submit" class="setting-submit-btn mt-5" name="email-submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>