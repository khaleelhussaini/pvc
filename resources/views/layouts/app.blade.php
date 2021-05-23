<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <!-- CSRF Token -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png" sizes="64x64">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>pvcwaterstopper</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">




</head>

<body>
    <div id="app">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul>
                            <li><a href=""><i class="fas fa-phone-alt"></i>+91 - 9652998932</a></li>
                            <li><a href=""><i class="far fa-envelope"></i>info@sandhyaflex.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="float-right">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-youtube"></i></a></li>
                            <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle-header bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 pr-0 pl-0">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('images/logo.png') }}" alt="Drilling Mart" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-5 pr-0 pl-0">
                        <div class="{{ Request::is('/') ? 'activeMenu' : '' }}">
                            <form action="" class="header-search">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 pr-0">
                                            <button class="btn btn-location btn-block"><i
                                                    class="fas fa-map-marker-alt"></i> Location</button>
                                        </div>
                                        <div class="col-md-7 pr-0 pl-0">
                                            <input type="text" class="form-control"
                                                placeholder="Search by name, service, keyword">
                                        </div>
                                        <div class="col-md-2 pl-0">
                                            <button class="btn btn-search btn-block"><i
                                                    class="fas fa-map-marker-alt"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 text-right pr-0 pl-0">
                        <ul class="header_links">
                            <li class="btn btn-gradient"><a href="">Request A Quote</a></li>
                            <!--<li><a href="">Sign up</a> | <a href="">Sign in</a></li>-->
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hi User <i class="fas fa-angle-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                        data-target="#loginModal">Login</a>
                                    <a class="dropdown-item" href="{{ url('/') }}">Home</a>
                                    <a class="dropdown-item" href="{{url('buyer-profile')}}">My Profile</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal">Post
                                        your requirement</a>
                                    <a class="dropdown-item" href="#">Products/services directory</a>
                                    <a class="dropdown-item" href="{{url('interested-products')}}">Products of
                                        interest</a>
                                    <a class="dropdown-item" href="{{ url('requirements') }}">My requirements</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <a class="dropdown-item" href="#">Logout</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-md navbar-light  bg-primary">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bars"></i> &nbsp; All Categories
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> -->
                        <li class="nav-item"><a class="nav-link" href="">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Laboratory Testing</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Site Map</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Resources</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Contact</a></li>

                    </ul>

                    <!-- Right Side Of Navbar -->

                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <!-- footer -->
        <!-- <footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 footer-icon">
            <img src="{{ asset('images/logo.png') }}" alt="Drilling Mart" class="img-fluid">
            <p>Follow Us On</p>
            <ul class="">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a href=""><i class="fab fa-youtube"></i></a></Sli>
                            <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                        </ul>

            </div>
            <div class="col-sm-3">
                <div>
                    
                </div>

            </div>
            <div class="col-sm-3">

            </div>
        </div>
    </div>
</footer> -->
        <footer>
            <div class="requirements">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center">
                            <h4>Let our experts help you
                                <button class="btn btn-requirements">Request A Quote</button>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid">
                            </a>
                            <h6>Follow Us On</h6>
                            <ul class="dm-social">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                <li><a href=""><i class="fab fa-youtube"></i></a></Sli>
                                <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-2">
                                    <ul>
                                        <li><a href="">About Us</a></li>
                                        <li><a href="">Join Us</a></li>
                                        <li><a href="">Contact Us</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul>
                                        <li><a href="">Help</a></li>
                                        <li><a href="">Feedback</a></li>
                                        <li><a href="">Complaints</a></li>
                                        <li><a href="">Customer Care</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <ul>
                                        <li><a href="">Terms of Use</a></li>
                                        <li><a href="">Privacy Policy</a></li>
                                        <li><a href="">Payment policy</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                <aside class="ftr-widget contact-widget about-widget">
<p><span class="icon icon-Pointer"><i class="fas fa-map-marker-alt"></i></span>5-24-1223/5/1, Ambedkar Nagar, Gajularamaram, Quatubulapur, R. R. Dist, Hyderabad, Telangana - 500055, India</p>
<p><span class="icon icon-Phone2"><i class="fas fa-phone-alt"></i></span>Phone no : <a href="tel:+91 9652998932">+91 9652998932</a></p>
<p><span class="icon icon-Mail"><i class="far fa-envelope"></i></span>Email : <a href="mailto:info@sandhyaflex.com">info@sandhyaflex.com</a></p>
</aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Copyright@ 2021 pvcwaterstopper Pvt Ltd</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




        <!--Let us help you with your requirements-->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Let us help you with your requirements</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4"><label for="I want">I want</label></div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4"><label for="Quantity">Quantity</label></div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4"><label for="Tell us about your requirements">Tell us about
                                            your requirements</label></div>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control">
                                        <input type="btn" class="btn btn-dm float-right" value="Next">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>


        <!-- Login Model-->
        <div class="modal fade" id="loginModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content signupmodel">
                    <div class="modal-body">
                        <form action="">
                            <div id="user-mobile">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Sign Up/ Sign In <span class="float-right" data-dismiss="modal">X</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Mobiel Number">Enter your mobile number</label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" value="+91">
                                        </div>
                                        <div class="col-md-9 pl-0">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <p>You will receive OTP to the above mobile number.</p>
                                            <input type="button" class="btn signinbtn" value="Get OTP" id="showuserotp">
                                            <h6>OR</h6>
                                            <button class="btn btn-gbtn btn-block"> <img
                                                    src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIHN0eWxlPSJmaWxsOiNGQkJCMDA7IiBkPSJNMTEzLjQ3LDMwOS40MDhMOTUuNjQ4LDM3NS45NGwtNjUuMTM5LDEuMzc4QzExLjA0MiwzNDEuMjExLDAsMjk5LjksMCwyNTYNCgljMC00Mi40NTEsMTAuMzI0LTgyLjQ4MywyOC42MjQtMTE3LjczMmgwLjAxNGw1Ny45OTIsMTAuNjMybDI1LjQwNCw1Ny42NDRjLTUuMzE3LDE1LjUwMS04LjIxNSwzMi4xNDEtOC4yMTUsNDkuNDU2DQoJQzEwMy44MjEsMjc0Ljc5MiwxMDcuMjI1LDI5Mi43OTcsMTEzLjQ3LDMwOS40MDh6Ii8+DQo8cGF0aCBzdHlsZT0iZmlsbDojNTE4RUY4OyIgZD0iTTUwNy41MjcsMjA4LjE3NkM1MTAuNDY3LDIyMy42NjIsNTEyLDIzOS42NTUsNTEyLDI1NmMwLDE4LjMyOC0xLjkyNywzNi4yMDYtNS41OTgsNTMuNDUxDQoJYy0xMi40NjIsNTguNjgzLTQ1LjAyNSwxMDkuOTI1LTkwLjEzNCwxNDYuMTg3bC0wLjAxNC0wLjAxNGwtNzMuMDQ0LTMuNzI3bC0xMC4zMzgtNjQuNTM1DQoJYzI5LjkzMi0xNy41NTQsNTMuMzI0LTQ1LjAyNSw2NS42NDYtNzcuOTExaC0xMzYuODlWMjA4LjE3NmgxMzguODg3TDUwNy41MjcsMjA4LjE3Nkw1MDcuNTI3LDIwOC4xNzZ6Ii8+DQo8cGF0aCBzdHlsZT0iZmlsbDojMjhCNDQ2OyIgZD0iTTQxNi4yNTMsNDU1LjYyNGwwLjAxNCwwLjAxNEMzNzIuMzk2LDQ5MC45MDEsMzE2LjY2Niw1MTIsMjU2LDUxMg0KCWMtOTcuNDkxLDAtMTgyLjI1Mi01NC40OTEtMjI1LjQ5MS0xMzQuNjgxbDgyLjk2MS02Ny45MWMyMS42MTksNTcuNjk4LDc3LjI3OCw5OC43NzEsMTQyLjUzLDk4Ljc3MQ0KCWMyOC4wNDcsMCw1NC4zMjMtNy41ODIsNzYuODctMjAuODE4TDQxNi4yNTMsNDU1LjYyNHoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNGMTQzMzY7IiBkPSJNNDE5LjQwNCw1OC45MzZsLTgyLjkzMyw2Ny44OTZjLTIzLjMzNS0xNC41ODYtNTAuOTE5LTIzLjAxMi04MC40NzEtMjMuMDEyDQoJYy02Ni43MjksMC0xMjMuNDI5LDQyLjk1Ny0xNDMuOTY1LDEwMi43MjRsLTgzLjM5Ny02OC4yNzZoLTAuMDE0QzcxLjIzLDU2LjEyMywxNTcuMDYsMCwyNTYsMA0KCUMzMTguMTE1LDAsMzc1LjA2OCwyMi4xMjYsNDE5LjQwNCw1OC45MzZ6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
                                                &nbsp; Continue with Google</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="user-otp" style="display:none">
                                <div class="form-group">
                                    <label for="Mobiel Number">Please enter OTP sent to 9349442323</label><br>
                                    <h5>Edit Number</h5>
                                    <input type="text" class="form-control" placeholder="Enter your OTP">
                                    <p>Didn’t receive OTP. <a href="">Resend OTP</a></p>
                                    <input type="button" class="btn signinbtn" value="Get OTP" id="showuserotp">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
