<link rel="stylesheet" href="css/custom/signUpIn.css">

<div id="superMain">
    <div class="form-wrapper" style="height: 415px;">
        <div class="regHeader text-center">
            <h4>Login to your account</h4>
        </div>
        <form class="row g-3">
            <div class="col-md-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail">
            </div>
            <div class="col-md-12">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword">
            </div>
            <div class="col-12 reg-frgt-pswd">
                <u><b><a href="#">Forgot Password</a></b> </u>
            </div>
            <div class="col-12 text-center" style="margin-top: 34px;">
                <button type="submit" class="nav-list-item-btn" onclick="validate">Sign In</button>
            </div>
        </form>
        <div class="regFooter">
            <hr style="margin: -8 0 0 0;;">
            <div class="row" style="margin: 0;">
                <div class="col-5 text-center">
                    <a href="index.php" title="Go to homepage">Home</a>
                </div>
                <div class="col-2"><p><b>/</b></p></div>
                <div class="col-5 text-center">
                    <a href="signUp.php" title="Create an account">SignUp</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // function checkPassword() {
    //     const password = document.getElementById("inputPassword").value;
    //     const cPassword = document.getElementById("inputConfirmPassword").value;
    //     if (password == cPassword) {
    //         message.textContent = "Passwords Match";
    //         message.style.backgroundColor = "green";
    //     } else {
    //         message.textContent = "Passwords don't Match";
    //         message.style.backgroundColor = "red";
    //     }
    // }
</script>