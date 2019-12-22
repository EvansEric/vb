@extends('layouts.app')

@section('content')
    <!-- ::::::-[ START PAGE MAIN CONTENT ]-:::::: -->
    <main>
        <div class="section" style="margin-top: 10%;">
            <div class="container">
                <div class="row">
                    <div class="col-gl-3 col-md-3 col-sm-12">
                        <div class="sticky-sidebar">
                            <div class="text-center d-flex flex-column align-items-center justify-content-center mb-3">
                                <div class="edit-profile-img">
                                    <img src="http://via.placeholder.com/120x120" alt="profile img" class="profile-img"/>
                                    <button type="button" style="position: absolute;">Edit</button>
                                    <!-- /.profile-img -->
                                </div>
                                <!-- /.edit-profile-img -->
                                <div class="mt-3">
                                    <h5 class="mb-2">
                                        {{ Auth::user()->name }} </h5>
                                    <div class="small">
                                        {{ Auth::user()->email }}
                                    </div>
                                    <!-- /.small -->
                                    <div class="small">
                                        Member Since {{ $date_arr['month'] }} {{ $date_arr['year'] }}
                                    </div>
                                    <!-- /.small -->
                                </div>
                                <!-- /.mt-3 -->
                            </div>
                            <div class="list-group">
                                <a href="profile.html" class="list-group-item list-group-item-action ">View Profile</a>
                                <!-- /.list-group-item list-group-item-action -->
                                <a href="profile-edit.html" class="list-group-item list-group-item-action active">Edit Profile</a>
                                <!-- /.list-group-item list-group-item-action -->
                                <a href="profile-booking-history.html" class="list-group-item list-group-item-action ">Booking History</a>
                                <!-- /.list-group-item list-group-item-action -->
                                <a href="profile-payments.html" class="list-group-item list-group-item-action ">Payments</a>
                                <!-- /.list-group-item list-group-item-action -->
                                <a href="#" class="list-group-item list-group-item-action ">Wishlist</a>
                                <!-- /.list-group-item list-group-item-action -->
                            </div>
                            <!-- /.list-group -->
                        </div>
                        <!-- /.sticky-sidebar -->
                    </div>
                    <!-- /.col-gl-3 col-md-3 col-sm-12 -->
                    <div class="col-gl-9 col-md-9 col-sm-12">
                        <h3 class="mb-4">Edit Profile</h3>
                        <div class="widget">
                            <div class="header">
                                <div class="title">
                                    Personal Infomation
                                </div>
                                <!-- /.title -->
                            </div>
                            <!-- /.header -->
                            <div class="body">
                                <div class="form-group">
                                    <label for="first-name-input">First name</label>
                                    <!-- /.fa fa-user input-icon -->
                                    <input id="first-name-input" type="text" class="form-control" value="{{ explode(" " , Auth::user()->name)[0] }}" placeholder="Enter your first name" disabled/>
                                    <!-- /.form-control -->
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="last-name-input">Last name</label>
                                    <!-- /.fa fa-user input-icon -->
                                    <input id="last-name-input" type="text" class="form-control" value="{{ explode(" " , Auth::user()->name)[1] }}" placeholder="Enter your last name" disabled/>
                                    <!-- /.form-control -->
                                    <div class="hint-text mt-2">
                                        Your public profile only shows your first name. When you request a booking, your host will see your first and last name.
                                    </div>
                                    <!-- /.hint-text -->
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="email-address-input">Email address</label>
                                    <!-- /.fa fa-user input-icon -->
                                    <input id="email-address-input" type="text" class="form-control" value="{{ Auth::user()->email }}" placeholder="Enter your email address" disabled/>
                                    <!-- /.form-control -->
                                    <div class="hint-text mt-2">
                                        We won’t share your private email address with other Travelgo users.
                                        <a href="#">Learn more</a>.
                                    </div>
                                    <!-- /.hint-text -->
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="phone-number-input">Phone number</label>
                                    <!-- /.fa fa-user input-icon -->
                                    <input id="phone-number-input" type="text" class="form-control" value="+1 333 666 0234" placeholder="Enter your email address" required/>
                                    <!-- /.form-control -->
                                    <div class="hint-text mt-2">
                                        This is only shared once you have a confirmed booking with another Travelgo user.
                                    </div>
                                    <!-- /.hint-text -->
                                </div>
                                <!-- /.form-group -->
                                <div class="btn btn-primary mt-2">Save Change</div>
                                <!-- /.btn btn-primary mt-2 -->
                            </div>
                            <!-- /.body -->
                        </div>
                        <!-- /.widget -->
                        <div class="widget">
                            <div class="header">
                                <div class="title">
                                    Location
                                </div>
                                <!-- /.title -->
                            </div>
                            <!-- /.header -->
                            <div class="body">
                                <div class="form-group">
                                    <label for="home-airport-input">Home Airport</label>
                                    <!-- /.fa fa-user input-icon -->
                                    <input id="home-airport-input" type="text" class="form-control" value="London Heathrow Airport (LHR)" placeholder="Enter your home air port" required/>
                                    <!-- /.form-control -->
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="street-address-input">Street Address</label>
                                    <!-- /.fa fa-user input-icon -->
                                    <input id="street-address-input" type="text" class="form-control" value="46 Gray's Inn Rd, London, WC1X 8LP" placeholder="Enter your street address" required/>
                                    <!-- /.form-control -->
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="city-input">City</label>
                                    <!-- /.fa fa-user input-icon -->
                                    <input id="city-input" type="text" class="form-control" value="London" placeholder="Enter your city" required/>
                                    <!-- /.form-control -->
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="state-input">State/Province/Region</label>
                                    <!-- /.fa fa-user input-icon -->
                                    <input id="state-input" type="text" class="form-control" value="London" placeholder="Enter your State/Province/Region" required/>
                                    <!-- /.form-control -->
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="country-input">Country</label>
                                    <!-- /.fa fa-user input-icon -->
                                    <input id="country-input" type="text" class="form-control" value="United Kingdom" placeholder="Enter your country" required/>
                                    <!-- /.form-control -->
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="zip-code-input">ZIP code/Postal code</label>
                                    <!-- /.fa fa-user input-icon -->
                                    <input id="zip-code-input" type="text" class="form-control" value="3145667" placeholder="Enter your ZIP code/Postal code" required/>
                                    <!-- /.form-control -->
                                </div>
                                <!-- /.form-group -->
                                <div class="btn btn-primary mt-2">Save Change</div>
                                <!-- /.btn btn-primary mt-2 -->
                            </div>
                            <!-- /.body -->
                        </div>
                        <!-- /.widget -->
                        <div class="widget">
                            <div class="header">
                                <div class="title">
                                    Change Password
                                </div>
                                <!-- /.title -->
                            </div>
                            <!-- /.header -->
                            <div class="body">
                                <div class="form-group">
                                    <label for="current-password-input">Current password</label>
                                    <!-- /.fa fa-user input-icon -->
                                    <input id="current-password-input" type="text" class="form-control" placeholder="Enter your current password" required/>
                                    <!-- /.form-control -->
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="new-password-input">New password</label>
                                    <!-- /.fa fa-user input-icon -->
                                    <input id="new-password-input" type="text" class="form-control" placeholder="Enter new password" required/>
                                    <!-- /.form-control -->
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label for="confirm-password-input">Confirm new password</label>
                                    <!-- /.fa fa-user input-icon -->
                                    <input id="confirm-password-input" type="text" class="form-control" placeholder="retype your new password" required/>
                                    <!-- /.form-control -->
                                </div>
                                <!-- /.form-group -->
                                <div class="btn btn-primary mt-2">Change password</div>
                                <!-- /.btn btn-primary mt-2 -->
                            </div>
                            <!-- /.body -->
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /.col-gl-9 col-md-9 col-sm-12 -->
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
                                            <img src="assets/icons/facebook-icon.svg" alt="google icon" class="icon mr-2"/> Facebook
                                        </div>
                                        <!-- /.btn btn-primary -->
                                    </div>
                                    <!-- /.col-md-6 col-lg-6 col-sm-12 -->
                                    <div class="col-md-6 col-lg-6 col-sm-12 mt-2 mt-lg-0 mt-sm-0">
                                        <div class=" btn btn-outline-secondary no-round btn-block btn-lg d-flex align-items-center justify-content-center">
                                            <img src="assets/icons/google-pluse-icon.svg" alt="google icon" class="icon mr-2"/> Google
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
                                            <img src="assets/icons/facebook-icon.svg" alt="google icon" class="icon mr-2"/> Facebook
                                        </div>
                                        <!-- /.btn btn-primary -->
                                    </div>
                                    <!-- /.col-md-6 col-lg-6 col-sm-12 -->
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <div class=" btn btn-outline-secondary no-round btn-block btn-lg">
                                            <img src="assets/icons/google-pluse-icon.svg" alt="google icon" class="icon mr-2"/> Google
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