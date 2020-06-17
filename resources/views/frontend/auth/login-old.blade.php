<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mazaj | Admin Panel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('control')}}/images/icons/favicon.PNG"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('control')}}/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('control')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('control')}}/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('control')}}/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('control')}}/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('control')}}/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('control')}}/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('control')}}/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('control')}}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('control')}}/css/main.css">
    <!--===============================================================================================-->
</head>
<body>


<div class="container-login100" style="background-image: url('{{asset('control')}}/images/bg-01.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-50">
        <div class="logo">
            <img class="mb-20" src="{{asset('control')}}/images/logo.png">
        </div>
        <form class="login100-form validate-form" action="{{route('frontend.auth.login.post')}}" method="POST">
            @csrf
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

            <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Email">
                <input class="input100" type="text" name="email" placeholder="Email">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter Password">
                <input class="input100" type="password" name="password" placeholder="Password">
                <span class="focus-input100"></span>
            </div>

            <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn">
                    Sign In
                </button>
            </div>
        </form>


    </div>
</div>



<div id="dropDownSelect1"></div>

<footer class="footer-section text-center">
    <div class="container">
        <p>© 2019 Mazaj Powered by <a target="_blank" href="flyfoxsoftware.com">FLYFOX</a></p>
    </div>
</footer>

<!--===============================================================================================-->
<script src="{{asset('control')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('control')}}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('control')}}/vendor/bootstrap/js/popper.js"></script>
<script src="{{asset('control')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('control')}}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('control')}}/vendor/daterangepicker/moment.min.js"></script>
<script src="{{asset('control')}}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="{{asset('control')}}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="{{asset('control')}}/js/main.js"></script>

</body>
</html>
