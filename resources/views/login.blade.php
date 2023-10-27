<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class='bx bxl-facebook-circle' style='color:#2200b9'></i></i></a>
                    <a href="#" class="social"><i class='bx bxl-google' style='color:#990505' ></i></a>
                    <a href="#" class="social"><i class='bx bxl-linkedin' style='color:#0d75b1'  ></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class='bx bxl-facebook-circle' style='color:#2200b9'></i></i></a>
                    <a href="#" class="social"><i class='bx bxl-google' style='color:#990505' ></i></a>
                    <a href="#" class="social"><i class='bx bxl-linkedin' style='color:#0d75b1'  ></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1><i class='bx bx-planet' style='color:#ffffff; font-size: 96px; ' ></i> 
                        <br>Welcome Back! <br> Game Planet i'ts Your Home.
                    </h1>
                    <p>
                        To keep connected with us please login with your personal info
                    </p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1><i class='bx bx-planet' style='color:#ffffff; font-size: 96px;'></i>
                        <br>Hello, Friend!, <br> Game Planet Welcomes You <br>
                    </h1>
                    <p>
                        Enter your personal details and start journey with us
                    </p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>

