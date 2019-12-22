@extends('layouts.app')


@section('content')
    <main>
        <div class="section grey md">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center d-flex flex-column justify-content-center align-items-center" style="margin-top: 15%;">
                        <div class="profile-user-profile-img">
                            <img src="http://via.placeholder.com/120x120" alt="Travelgo user profile" class="user-img">
                            <!-- /.user-img -->
                        </div>
                        <!-- /.profile-user-profile-img -->
                        <h3 class="mt-3">{{ Auth::user()->name }}</h3>
                        <div class="mt-2">
                            Member Since {{ $date_arr['month'] }} {{ $date_arr['year'] }}
                        </div>
                        <!-- /.mt-2 -->
                        <div class="mt-2">
                            {{ Auth::user()->email }} &bull; <a href="#">123 Wishlist</a>
                            &bull; <a href="#">300 Travel Photos</a>
                            &bull; <a href="#">Booking History</a>
                        </div>
                        <!-- /.mt-2 -->
                        <a class="btn btn-primary btn-outline-primary  mt-3" href="{{ route('edit_profile') }}">Edit Profile</a>
                        <!-- /.btn btn-primary -->
                    </div>
                    <!-- /.col-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.section -->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 offset-md-2 col-lg-8 col-md-8 col-sm-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="travel-photos-list-card">
                                    <div class="img">
                                        <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                                    </div>
                                    <div class="info">
                                        <div class="location">
                                            New York, NY (Midtown East)
                                        </div>
                                        <!-- /.location -->
                                        <div class="date">
                                            2, sept, 208
                                        </div>
                                        <!-- /.date -->
                                    </div>
                                    <!-- /.info -->
                                </div>
                                <!-- /.travel-photos-list-card -->
                            </div>
                            <!-- /.col-lg-4 col-md-4 -->
                            <div class="col-lg-4 col-md-4">
                                <div class="travel-photos-list-card">
                                    <div class="img">
                                        <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                                    </div>
                                    <div class="info">
                                        <div class="location">
                                            Long Island City, NY (Long Island City - Astoria)
                                        </div>
                                        <!-- /.location -->
                                        <div class="date">
                                            20, sept, 208
                                        </div>
                                        <!-- /.date -->
                                    </div>
                                    <!-- /.info -->
                                </div>
                                <!-- /.travel-photos-list-card -->
                            </div>
                            <!-- /.col-lg-4 col-md-4 -->
                            <div class="col-lg-4 col-md-4">
                                <div class="travel-photos-list-card">
                                    <div class="img">
                                        <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                                    </div>
                                    <div class="info">
                                        <div class="location">
                                            Japan, (Tokyo)
                                        </div>
                                        <!-- /.location -->
                                        <div class="date">
                                            21, sept, 208
                                        </div>
                                        <!-- /.date -->
                                    </div>
                                    <!-- /.info -->
                                </div>
                                <!-- /.travel-photos-list-card -->
                            </div>
                            <!-- /.col-lg-4 col-md-4 -->
                            <div class="col-lg-4 col-md-4">
                                <div class="travel-photos-list-card">
                                    <div class="img">
                                        <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                                    </div>
                                    <div class="info">
                                        <div class="location">
                                            Brooklyn, NY (Brooklyn)
                                        </div>
                                        <!-- /.location -->
                                        <div class="date">
                                            23, sept, 208
                                        </div>
                                        <!-- /.date -->
                                    </div>
                                    <!-- /.info -->
                                </div>
                                <!-- /.travel-photos-list-card -->
                            </div>
                            <!-- /.col-lg-4 col-md-4 -->
                            <div class="col-lg-4 col-md-4">
                                <div class="travel-photos-list-card">
                                    <div class="img">
                                        <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                                    </div>
                                    <div class="info">
                                        <div class="location">
                                            Jamaica, NY (Kennedy Airport (JFK))
                                        </div>
                                        <!-- /.location -->
                                        <div class="date">
                                            24, sept, 208
                                        </div>
                                        <!-- /.date -->
                                    </div>
                                    <!-- /.info -->
                                </div>
                                <!-- /.travel-photos-list-card -->
                            </div>
                            <!-- /.col-lg-4 col-md-4 -->
                            <div class="col-lg-4 col-md-4">
                                <div class="travel-photos-list-card">
                                    <div class="img">
                                        <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                                    </div>
                                    <div class="info">
                                        <div class="location">
                                            Dubai, UAE
                                        </div>
                                        <!-- /.location -->
                                        <div class="date">
                                            29, sept, 208
                                        </div>
                                        <!-- /.date -->
                                    </div>
                                    <!-- /.info -->
                                </div>
                                <!-- /.travel-photos-list-card -->
                            </div>
                            <!-- /.col-lg-4 col-md-4 -->
                            <div class="col-lg-4 col-md-4">
                                <div class="travel-photos-list-card">
                                    <div class="img">
                                        <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                                    </div>
                                    <div class="info">
                                        <div class="location">
                                            Dubai, UAE
                                        </div>
                                        <!-- /.location -->
                                        <div class="date">
                                            30, sept, 208
                                        </div>
                                        <!-- /.date -->
                                    </div>
                                    <!-- /.info -->
                                </div>
                                <!-- /.travel-photos-list-card -->
                            </div>
                            <!-- /.col-lg-4 col-md-4 -->
                            <div class="col-lg-4 col-md-4">
                                <div class="travel-photos-list-card">
                                    <div class="img">
                                        <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                                    </div>
                                    <div class="info">
                                        <div class="location">
                                            Dubai, UAE
                                        </div>
                                        <!-- /.location -->
                                        <div class="date">
                                            30, sept, 208
                                        </div>
                                        <!-- /.date -->
                                    </div>
                                    <!-- /.info -->
                                </div>
                                <!-- /.travel-photos-list-card -->
                            </div>
                            <!-- /.col-lg-4 col-md-4 -->
                            <div class="col-lg-4 col-md-4">
                                <div class="travel-photos-list-card">
                                    <div class="img">
                                        <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                                    </div>
                                    <div class="info">
                                        <div class="location">
                                            Dubai, UAE
                                        </div>
                                        <!-- /.location -->
                                        <div class="date">
                                            30, sept, 208
                                        </div>
                                        <!-- /.date -->
                                    </div>
                                    <!-- /.info -->
                                </div>
                                <!-- /.travel-photos-list-card -->
                            </div>
                            <!-- /.col-lg-4 col-md-4 -->
                        </div>
                        <!-- /.row -->
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <div class="btn btn-primary">
                                    Load More
                                </div>
                                <!-- /.btn btn-primary -->
                            </div>
                            <!-- /.col-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.offset-lg-2 offset-md-2 col-lg-8 col-md-8 col-sm-12 -->
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container -->
        </div>
        <!-- /.section -->

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

                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Email Address"/>
                                <!-- /.form-control -->
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Password"/>
                                <!-- /.form-control -->
                            </div>
                            <!-- /.form-group -->

                            <div class="mt-4 btn btn-primary btn-block btn-lg">
                                Login
                            </div>
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
                                            <img src="{{ asset('icon/facebook-icon.svg') }}" alt="google icon" class="icon mr-2"/> Facebook
                                        </div>
                                        <!-- /.btn btn-primary -->
                                    </div>
                                    <!-- /.col-md-6 col-lg-6 col-sm-12 -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 mt-2 mt-lg-0 mt-sm-0">
                                        <div class=" btn btn-outline-secondary no-round btn-block btn-lg d-flex align-items-center justify-content-center">
                                            <img src="{{ asset('icons/google-pluse-icon.svg') }}" alt="google icon" class="icon mr-2"/> Google
                                        </div>
                                        <!-- /.btn btn-primary -->
                                    </div>
                                    <!-- /.col-md-6 col-lg-6 col-sm-12 -->
                                </div>
                                <!-- /.row -->

                            </div>

                            <!-- /.mt-2 -->
                            <div class="mt-3">
                                Don’t have an account? <a href="#"> Sign up</a>
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

                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" placeholder="First name"/>
                                <!-- /.form-control -->
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Last name"/>
                                <!-- /.form-control -->
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Enter your email address"/>
                                <!-- /.form-control -->
                            </div>
                            <!-- /.form-group -->

                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Enter password"/>
                                <!-- /.form-control -->
                            </div>
                            <!-- /.form-group -->

                            <div class="mt-3">
                                By clicking Join now, you agree to the Travelgo
                                <a href="terms.html">Terms of Service</a>, <a href="privacy.html">Privacy Policy</a>.

                            </div>
                            <!-- /.mt-3 -->

                            <div class="mt-4 btn btn-secondary btn-block btn-lg">
                                Register
                            </div>
                            <!-- /.btn btn-primary -->


                            <hr data-title="or continue with" class="mt-4 mb-4"/>
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <div class=" btn btn-outline-secondary no-round btn-block btn-lg">
                                            <img src="{{ asset('icons/facebook-icon.svg') }}" alt="google icon" class="icon mr-2"/> Facebook
                                        </div>
                                        <!-- /.btn btn-primary -->
                                    </div>
                                    <!-- /.col-md-6 col-lg-6 col-sm-12 -->
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <div class=" btn btn-outline-secondary no-round btn-block btn-lg">
                                            <img src="{{ asset('icons/google-pluse-icon.svg') }}" alt="google icon" class="icon mr-2"/> Google
                                        </div>
                                        <!-- /.btn btn-primary -->
                                    </div>
                                    <!-- /.col-md-6 col-lg-6 col-sm-12 -->
                                </div>
                                <!-- /.row -->

                            </div>

                            <!-- /.mt-2 -->
                            <div class="mt-3">
                                Already have an Travelgo account? <a href="#">Log in</a>
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

    </main>
    <!-- ::::::-[ END-OF PAGE MAIN CONTENT ]-:::::: -->
@endsection