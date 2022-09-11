<!-- CSS -->
<link rel="stylesheet" href="css/custom/signUpIn.css">
<!-- jQuery-2.2.4 js -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>

<div id="superMain">
    <div class="form-wrapper" style="height: 415px;">
        <div class="regHeader text-center">
            <h4>Login to your account</h4>
        </div>
        <form class="row g-3">
            <div class="col-md-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" required>
            </div>
            <div class="col-md-12">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword" required>
            </div>
            <div class="col-12 reg-frgt-pswd">
                <u><b><a href="#">Forgot Password</a></b> </u>
            </div>
            <div class="col-12 text-center" style="margin-top: 34px;">
                <button type="submit" class="nav-list-item-btn disable-element" id="submitBtn">Sign In</button>
            </div>
        </form>
        <div class="regFooter">
            <hr style="margin: -8px 0 0 0;">
            <div class="row">
                <div class="col-5 text-center">
                    <a href="index.php" title="Go to homepage">Home</a>
                </div>
                <div class="col-2"><b style="color: #888; padding: 0;">/</b></div>
                <div class="col-5 text-center">
                    <a href="signUp.php" title="Create an account">SignUp</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    
    $(document).ready(()=>{
        
        var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
        var elem = document.getElementById("submitBtn");
        $('#inputPassword, #inputEmail').on('keyup', ()=> {
            if($('#inputPassword').val()!="" && pattern.test($('#inputEmail').val())){
                elem.classList.remove("disable-element");
            } else {
                elem.classList.add("disable-element");
            }
        });

    });

</script>