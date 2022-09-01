<div class="hero">
    <div class="form-box">
        <div class="top-bar">
            <center>
                <a href="index.html"><i class="fa fa-home" aria-hidden="true"></i></a>
            </center>
        </div>
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()" id="signin-btn">Log In</button>
            <button type="button" class="toggle-btn" onclick="register()" id="signup-btn">Register</button>
        </div>

        <form id="login" class="input-group">
            <input type="text" class="input-field" placeholder="User ID" required>
            <input type="password" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box" name="checkbox" id="checkbox-rm">
            <label for="checkbox-rm">Remember Password</label>
            <button type="submit" class="submit-btn">Login</button>
        </form>

        <form id="register" class="input-group">
            <input type="text" class="input-field" placeholder="User ID" required>
            <!-- <input type="password" class="input-field" placeholder="Enter Password" required> -->
            <input type="email" class="input-field" placeholder="Email ID" required>
            <input type="password" class="input-field" placeholder="Enter Password" required>
            <input type="checkbox" class="check-box" name="checkbox" id="checkbox-tc">
            <label for="checkbox-tc">I agree with the terms and conditions.</label>
            <button type="submit" class="submit-btn">Register</button>
        </form>
    </div>
</div>

<div id="footer">
    <center>
        <p>Copyright &copy; Alpha Institute&nbsp;&nbsp;&nbsp;</p>
    </center>
</div>

<script>
    let x = document.getElementById('login');
    let y = document.getElementById('register');
    let z = document.getElementById('btn');

    function register() {
        x.style.left = "400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }

    function login() {
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
    }
</script>