<!-- CSS -->
<link rel="stylesheet" href="css/custom/signUpIn.css">
<!-- jQuery-2.2.4 js -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>

<!-- Content Starts Here -->
<div id="superMain">
    <div class="form-wrapper" style="height: 500px;">
        <div class="regHeader text-center">
            <h4>Create your account</h4>
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
            <div class="col-md-12">
                <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="inputConfirmPassword" required>
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
                <button type="submit" class="nav-list-item-btn disable-element" id="submitBtn">Sign Up</button>
            </div>
        </form>
        <div class="regFooter">
            <hr style="margin: -7px 0 0 0;">
            <div class="row">
                <div class="col-5 text-center">
                    <a href="index.php" title="Go to homepage">Home</a>
                </div>
                <div class="col-2"><b style="color: #888; padding: 0;">/</b></div>
                <div class="col-5 text-center">
                    <a href="signIn.php" title="Login to your account">SignIn</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(()=>{
        
        $('#inputPassword, #inputConfirmPassword, #inputEmail').on('keyup', ()=> {
            validateClientSideInput();
        });

        $('#gridCheck').on('click', ()=> {
            validateClientSideInput();
        });

        function validateClientSideInput() {
            var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
            var elem = document.getElementById("submitBtn");
            if($('#gridCheck').is(":checked") && $('#inputPassword').val()==$('#inputConfirmPassword').val() && pattern.test($('#inputEmail').val())){
                elem.classList.remove("disable-element");
            } else {
                elem.classList.add("disable-element");
            }
        }
    });

</script>