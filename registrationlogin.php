<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration / Login</title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css"/>
    <link rel="stylesheet" href="css/registrationlogin.css">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container register-container">
        <form action="#">
            <h1>Register</h1>
            <input type="text" placeholder="Name">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Password">
            <button>Register</button>
            <span>or use your account</span>
            <div class="social-container">
            <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
            <a href="#" class="social"><i class="lni lni-google"></i></a>
            <a href="#" class="social"><i class="lni lni-linkedin-original"></i></a>
            </div>
        </form>
        </div>    
        
        <div class="form-container login-container">
        <form action="#">
            <h1>Login</h1>
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Password">
            <div class="content">
            <div class="checkbox">
                <input type="checkbox" name="checkbox" id="checkbox">
                <label>Remember me</label>
            </div>
            <div class="pass-link">
                <a href="#">Forgot password?</a>
            </div>
            </div>
            <button>Login</button>
            <span>or use your account</span>
            <div class="social-container">
            <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
            <a href="#" class="social"><i class="lni lni-google"></i></a>
            <a href="#" class="social"><i class="lni lni-linkedin-original"></i></a>
            </div>
        </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="title">Hello <br> Welcome </h1>
                    <p>if you don't have an account, login here and have fun</p>
                    <button class="ghost" id="login">Login
                        <i class="lni lni-arrow-left login"></i>
                    </button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1 class="title">Start your <br> journey now </h1>
                    <p>if you don't have an account, join us now</p>
                    <button class="ghost" id="register">Register
                        <i class="lni lni-arrow-right register"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="registrationlogin.js"></script>

</body>
</html>