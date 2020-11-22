<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- REQUIRED meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Fav icon tag -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- SEO meta tags -->
    <meta name="keywords" content="vacation listing, vacation home rentals"/>
    <meta name="description" content="Vacations and Beyond"/>
    <meta name="author" content="VacationsandBeyond.com"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Page title -->
    <title>Home - Vacationsandbeyond - Vacation listings</title>
    <!-- :::::-[ Vendors StyleSheets ]-:::::: -->
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap.4.1/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('vendors/animate.css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/assets/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/assets/owl.theme.default.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('vendors/flag-icon-css/css/flag-icon.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('vendors/flaticon/flaticon.css') }}"/>
    <link rel="stylesheet" href="{{ asset('vendors/hover-effects/effects.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('vendors/ion.rangeslider/css/ion.rangeSlider.css') }}"/>
    <link rel="stylesheet" href="{{ asset('vendors/ion.rangeslider/css/ion.rangeSlider.skinFlat.css') }}"/>
    <link rel="stylesheet" href="{{ asset('vendors/icheck/skins/square/aero.css') }}"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.css"/>

    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
    <!-- :::::-[ Travelgo - Travel and Tours listings HTML template StyleSheet ]-:::::: -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    {{--    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrThSZqXUz6DMejX1MnBLdrZtCkc8OG-c&libraries=places"></script>--}}
</head>
<!-- START-OF Home Page Body Tag -->
<body>
<!-- ::::::-[ START PAGE MAIN HEADER ]-:::::: -->
<header>
    <nav class="navbar navbar-light navbar-expand-md py-md-2 fixed-top">
        <div class="container">
            <a href="/" class="navbar-brand">
                <img src="{{ asset('images/logo.png') }}" style="height: auto !important;" alt="logo"
                     class="brand-logo"/> </a>
            <!-- /.navbar-brand -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <!-- /.navbar-toggler-icon -->
            </button>
            <!-- /.navbar-toggler -->
            <div class="navbar-collapse collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item  py-md-2">
                        <a href="/" class="nav-link ">Home</a>
                        <!-- /.nav-link -->
                    </li>
                    <!-- /.nav-item py-md-2 -->
                    <li class="nav-item dropdown py-md-2">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="true">Properties</a>
                        <!-- /.nav-link -->
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Hotels</a>
                            <!-- /.dropdown-item -->
                            <a class="dropdown-item" href="#">Vacation Rentals</a>
                        </div>
                        <!-- /.dropdown-menu -->
                    </li>
                    <!-- /.nav-item py-md-2 -->
                    <li class="nav-item dropdown py-md-2">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="true">Pages</a>
                        <!-- /.nav-link -->
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                            <!-- /.dropdown-item -->
                            <a class="dropdown-item" href="#" data-toggle="modal"
                               data-target="#register-modal">Register</a>
                            <!-- /.dropdown-item -->
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#reset-password-modal">Reset
                                Password</a>
                            <!-- /.dropdown-item -->
                            <a class="dropdown-item" href="profile.html">Profile</a>
                            <!-- /.dropdown-item -->
                            <a class="dropdown-item" href="profile-edit.html">Profile Edit</a>
                            <!-- /.dropdown-item -->
                            <a class="dropdown-item" href="profile-booking-history.html">Profile Booking History</a>
                            <!-- /.dropdown-item -->
                            <a class="dropdown-item" href="profile-payments.html">Profile Payments</a>
                            <!-- /.dropdown-item -->
                            <a class="dropdown-item" href="success-payment.html">Success Payment</a>
                            <!-- /.dropdown-item -->
                            <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                            <!-- /.dropdown-item -->
                            <a class="dropdown-item" href="404.html">404 Page</a>
                            <!-- /.dropdown-item -->
                            <a class="dropdown-item" href="about.html">About</a>
                            <!-- /.dropdown-item -->
                            <a class="dropdown-item" href="contact-us.html">Contact us</a>
                            <!-- /.dropdown-item -->
                            <a class="dropdown-item" href="faq.html">FAQ</a>
                            <!-- /.dropdown-item -->
                            <a class="dropdown-item" href="privacy.html">Privacy & Policy</a>
                            <!-- /.dropdown-item -->
                            <a class="dropdown-item" href="terms.html">Terms and Conditions</a>
                            <!-- /.dropdown-item -->
                        </div>
                        <!-- /.dropdown-menu -->
                    </li>
                    <!-- /.nav-item py-md-2 -->
                    @if(Auth::check())
                        <li class="nav-item dropdown py-md-2">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="true">Hi {{ explode(' ', Auth::user()->name)[0] }}
                                <img src="http://via.placeholder.com/90x90" alt="user profile img"
                                     class="user-profile-img"/></a>
                            <!-- /.nav-link -->
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                                <!-- /.dropdown-item -->
                                <a class="dropdown-item" href="#">Invite Friends</a>
                                <!-- /.dropdown-item -->
                                <form method="get" action="{{ route('logout') }}">
                                    <button class="dropdown-item" id="logout">Logout</button>
                                </form>

                                <!-- /.dropdown-item -->
                            </div>
                            <!-- /.dropdown-menu -->
                        </li>
                    @else
                        <li class="nav-item py-md-2"><a href="#" class="nav-link" data-toggle="modal"
                                                        data-target="#login-modal">Login</a></li>
                        <li class="nav-item py-md-2"><a href="#" class="nav-link" data-toggle="modal"
                                                        data-target="#register-modal">Register</a></li>
                    @endif
                    <li class="nav-item py-md-2"><a href="" class="btn btn-book-now ml-5">List your Property</a></li>
                    <!-- /.nav-item py-md-2 -->
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /#navbarNav.navbar-collapse collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar navbar-dark bg-primary navbar-expand-md py-md-2 -->
</header>
<!-- ::::::-[ END-OF PAGE MAIN HEADER ]-:::::: -->

<!-- ::::::-[ START PAGE MAIN CONTENT ]-:::::: -->
<main>
    @yield('content')
</main>
<!-- ::::::-[ END-OF PAGE MAIN CONTENT ]-:::::: -->
<!-- ::::::-[ START PAGE FOOTER ]-:::::: -->
<footer>
    <div class="container md">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="small mb-1">Stay Tuned</div>
                <ul class="social-network">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <!-- /li -->
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <!-- /li -->
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <!-- /li -->
                    <li>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <!-- /li -->
                    <li>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </li>
                    <!-- /li -->
                    <li>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    </li>
                    <!-- /li -->
                </ul>
                <!-- /.social-network -->

                <div class="small mb-2 mt-2">
                    Reviews by
                </div>
                <!-- /.small mb-1 -->
                {{--                <img src="{{ asset('icons/TA_logo_primary.svg') }}" alt="" height="25">--}}

            </div>
            <!-- /.col-lg-3 col-md-3 col-sm-12 -->
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="footer-title mt-4 mt-lg-0 mt-md-0">
                    Vacations and Beyond
                </div>
                <!-- /.footer-title -->
                <ul class="footer-nav">
                    <li class="footer-nav-item">
                        <a href="terms-conditions.html" class="footer-link">Terms of Use</a>
                        <!-- /.footer-link -->
                    </li>
                    <!-- /.footer-nav-item -->
                    <li class="footer-nav-item">
                        <a href="privacy-policy.html" class="footer-link">Privacy</a>
                        <!-- /.footer-link -->
                    </li>
                    <!-- /.footer-nav-item -->
                    <li class="footer-nav-item">
                        <a href="#" class="footer-link">Locations</a>
                        <!-- /.footer-link -->
                    </li>
                    <!-- /.footer-nav-item -->
                    <li class="footer-nav-item">
                        <a href="#" class="footer-link">Contact us</a>
                        <!-- /.footer-link -->
                    </li>
                    <!-- /.footer-nav-item -->
                </ul>
                <!-- /.footer-nav -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-3 mt-lg-0 mt-md-0">
                <div class="row">
                    <!-- /.col-lg-6 col-md-6 col-sm-12 -->
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3 mt-lg-0 mt-md-0">
                        <div class="footer-payment-methods">
                            <div class="title">
                                We Accept Payment
                            </div>
                            <!-- /.title -->
                            <div class="payments">
                                <div class="payment">
                                    <i class="fab fa-cc-visa"></i>
                                </div>
                                <!-- /.payment -->
                                <div class="payment">
                                    <i class="fab fa-cc-mastercard"></i>
                                </div>
                                <div class="payment">
                                    <i class="fab fa-cc-amex"></i>
                                </div>
                                <!-- /.payment -->
                            </div>
                            <!-- /.payments -->
                        </div>
                        <!-- /.footer-payment-methods -->
                    </div>
                    <!-- /.col-lg-6 col-md-6 col-sm-12 -->
                </div>
                <!-- /.row -->
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="small text-uppercase font-weight-bold">
                            Note
                        </div>
                        <div class="small mt-2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <!-- /.small -->
                    </div>
                    <!-- /.col-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.col-lg-6 col-md-6 col-sm-12 -->
        </div>
        <!-- /.row -->
        <div class="row mt-5">
            <div class="col-12 ">
                <div class="small text-muted">
                    Copyright
                    <script>document.write(new Date().getFullYear())</script>
                    © VacationsandBeyond. All Rights Reserved.
                </div>
                <!-- /.small -->
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

</footer>
<!-- ::::::-[ END-OF PAGE FOOTER ]-:::::: -->
<!-- ::::::-[ Load Javascript Vendors ]-:::::: -->
<script src="{{ asset('vendors/jquery/jquery.3.3.1.js') }}"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="{{ asset('vendors/popper.js/popperjs.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap.4.1/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendors/parallax/parallax-scroll.js') }}"></script>
<script src="{{ asset('vendors/sticky/jquery.sticky-sidebar.js') }}"></script>
<script src="{{ asset('vendors/sticky-kit/sticky-kit.js') }}"></script>
<script src="{{ asset('vendors/ion.rangeslider/js/ion.rangeSlider.js') }}"></script>
<script src="{{ asset('vendors/icheck/icheck.min.js') }}"></script>
<script src="{{ asset('vendors/countdown/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/js.cookie.js') }}"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>--}}
<!-- ::::::-[ Travelgo - Travel and Tours listings HTML template Javascript ]-::::::   -->
<script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>
<script src="{{ asset('js/main.js') }}"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDrThSZqXUz6DMejX1MnBLdrZtCkc8OG-c&libraries=places"></script>--}}
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        var input =  document.getElementById('autocomplete');--}}
{{--        var autocomplete = new google.maps.places.Autocomplete(input, {--}}
{{--            types: ['geocode'],--}}
{{--            componentRestrictions: {country: "US"}--}}
{{--        });--}}
{{--        google.maps.event.addListener(autocomplete, 'place_changed', function() {--}}
{{--            var near_place = autocomplete.getPlace();--}}
{{--        })--}}
{{--    });--}}
{{--</script>--}}
<script>
    $(function () {
        var todayDate = new Date();
        var dateFormat = "dd-mm-yy",
            from = $("#from")
                .datepicker({
                    //defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1,
                    minDate: todayDate,
                    dateFormat: dateFormat
                })
                .on("change", function () {
                    to.datepicker("option", "minDate", getDate(this));
                }),
            to = $("#to").datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1
            })
                .on("change", function () {
                    from.datepicker("option", "maxDate", getDate(this));
                });

        function getDate(element) {
            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }

            return date;
        }
    });
</script>
<!-- START Login Modal -->
<div id="login-modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-body">
                <div class="login-form">
                    <h3 class="title">
                        Log in to continue
                    </h3>
                    <!-- /.title -->
                    @if($errors->any())
                        {{ dd($errors) }}
                        <div class="col-12 text-center alert-danger">
                            @foreach($errors->all() as $error)
                                <li id="login_error">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </div>
                    @endif
                    <form method="post" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" id="login_email" name="email" class="form-control form-control-lg"
                                   placeholder="Email Address"/>
                            <!-- /.form-control -->
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <input type="password" id="login_password" class="form-control form-control-lg"
                                   placeholder="Password"/>
                            <!-- /.form-control -->
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group row">
                            <div class="ml-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                           id="login_modal_remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="login_modal_remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <button type="button" id="login_model_submit" class="mt-4 btn btn-primary btn-block btn-lg">
                            Login
                        </button>
                    </form>
                    <!-- /.btn btn-primary -->

                    <div class="mt-3 text-center text-capitalize">
                        <a href="#">forgot password?</a>
                    </div>
                    <!-- /.mt-3 text-center text-capitalize -->


                    <hr data-title="or continue with" class="mt-4 mb-4"/>
                    <div class="mt-3">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class=" btn btn-outline-secondary no-round btn-block btn-lg">
                                    <img src="{{ asset('icon/facebook-icon.svg') }}" class="icon mr-2"/> Facebook
                                    Facebook
                                </div>
                                <!-- /.btn btn-primary -->
                            </div>
                            <!-- /.col-md-6 col-lg-6 col-sm-12 -->
                            <div class="col-md-6 col-lg-6 col-sm-12 mt-2 mt-lg-0 mt-sm-0">
                                <div class=" btn btn-outline-secondary no-round btn-block btn-lg d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('icon/google-pluse-icon.svg') }}" alt="google icon"
                                         class="icon mr-2"/> Google
                                </div>
                                <!-- /.btn btn-primary -->
                            </div>
                            <!-- /.col-md-6 col-lg-6 col-sm-12 -->
                        </div>
                        <!-- /.row -->

                    </div>

                    <!-- /.mt-2 -->
                    <div class="mt-3">
                        Don’t have an account? <a href="{{ route('register') }}"> Sign up</a>
                    </div>
                    <!-- /.mt-2 -->
                </div>
                <!-- /.login-form -->
            </div>
        </div>
    </div>
</div>
<!-- #login-modal .modal -->
<!-- END-OF Login Modal -->

<!-- START Register Modal -->
<div id="register-modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-body">
                <div class="register-form">
                    <div class="alert-danger text-center" id="register_error"></div>
                    <form id="register_form" method="post">
                        <div class="form-group">
                            <input type="text" id="register_modal_name" class="form-control form-control-lg"
                                   placeholder="Name"/>
                            <!-- /.form-control -->
                        </div>
                        <div class="form-group">
                            <input type="text" id="register_email" class="form-control form-control-lg"
                                   placeholder="Enter your email address"/>
                            <!-- /.form-control -->
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <input type="password" id="register_password" class="form-control form-control-lg"
                                   placeholder="Enter password"/>
                            <!-- /.form-control -->
                        </div>

                        <!-- /.form-group -->

                        <div class="form-group">
                            <input type="password" id="register_password_confirmation"
                                   class="form-control form-control-lg"
                                   placeholder="Confirm Password"/>
                            <!-- /.form-control -->
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="lister"/> Are you listing a property?
                        </div>
                        <!-- /.form-group -->

                        <div class="mt-3">
                            By clicking Join now, you agree to the VacationsandBeyond
                            <a href="terms.html">Terms of Service</a>, <a href="privacy.html">Privacy Policy</a>.

                        </div>
                        <!-- /.mt-3 -->

                        <button type="button" id="register_modal_submit"
                                class="mt-4 btn btn-secondary btn-block btn-lg">
                            Register
                        </button>
                        <!-- /.btn btn-primary -->
                    </form>

                    <hr data-title="or continue with" class="mt-4 mb-4"/>
                    <div class="mt-3">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class=" btn btn-outline-secondary no-round btn-block btn-lg">
                                    <img src="{{ asset('icon/facebook-icon.svg') }}" alt="google icon"
                                         class="icon mr-2"/> Facebook
                                </div>
                                <!-- /.btn btn-primary -->
                            </div>
                            <!-- /.col-md-6 col-lg-6 col-sm-12 -->
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class=" btn btn-outline-secondary no-round btn-block btn-lg">
                                    <img src="{{ asset('icon/google-pluse-icon.svg') }}" alt="google icon"
                                         class="icon mr-2"/> Google
                                </div>
                                <!-- /.btn btn-primary -->
                            </div>
                            <!-- /.col-md-6 col-lg-6 col-sm-12 -->
                        </div>
                        <!-- /.row -->

                    </div>

                    <!-- /.mt-2 -->
                    <div class="mt-3">
                        Already have an account? <a href="{{ route('login') }}">Log in</a>
                    </div>
                    <!-- /.mt-2 -->
                </div>
                <!-- /.login-form -->
            </div>
        </div>
    </div>
</div>
<!-- #register-modal .modal -->
<!-- END-OF Register Modal -->

<!-- START Register Modal -->
<div id="reset-password-modal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-body">
                <div class="reset-password-form">
                    <h3 class="title">
                        Password Reset
                    </h3>
                    <!-- /.title -->

                    <p>Restore your forgotten password</p>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Email address"/>
                        <!-- /.form-control -->

                    </div>
                    <!-- /.form-group -->
                    <div class="mt-2 btn btn-secondary btn-block btn-lg">
                        Reset Password
                    </div>
                    <!-- /.btn btn-primary -->

                    <div class="mt-4">
                        <a href="#">Remember the password?</a>
                    </div>
                    <!-- /.mt-4 -->

                </div>
                <!-- /.login-form -->
            </div>
        </div>
    </div>
</div>
<!-- #reset-password-modal .modal -->
<!-- END-OF Register Modal -->
</body>
<!-- END-OF Home Page Body Tag -->
</html>
