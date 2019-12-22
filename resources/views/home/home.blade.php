@extends('layouts.app')

@section('content')
{{--    {{ dd(Auth::check()) }}--}}
<div class="page-hero overlay overlay-blue no-overflow">
    <div class="overlay-text d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="h1">Book your vacation now.</div>
                    <p>Expolore best rated for vacation homes in the US.</p>
                    <div class="main-home-search float-left">
                        <div class="search-icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <!-- /.search-icon -->
                        <input type="text" class="search-input" placeholder='Houston, Texas, USA'
                               onfocus="this.placeholder=''" onblur="this.placeholder='Houston, Texas, USA'" id="autocomplete"/>
                        <!-- /.search-input -->
                    </div>

                    <div class="from_container float-left">
                        <div class="from_icon">
                            <i class="far fa-calendar-plus"></i>
                        </div>
                        <input type="text" id="from" name="from" class="from_date" placeholder="Check-In">
                    </div>

                    <div class="to_container float-left">
                        <div class="to_icon">
                            <i class="far fa-calendar-plus"></i>
                        </div>
                        <input type="text" id="to" name="to" class="to_date" placeholder="Check-Out">
                    </div>

                    <div class="guest_container float-left">
                        <div class="guest_iccn">
                            <i class="fas fa-users"></i>
                        </div>
                        <input type="text" id="guest" name="guest" class="guest" placeholder="Guest">
                    </div>

                    <div class="float-left mt-3 ml-1 calendar-container">
                        <div class="d-inline-block">
                            <input type="submit" id="search" name="search" class="btn btn-book-now search"
                                   value="Search"/>
                        </div>
                    </div>

                    <!-- /.main-home-search -->
                </div>
                <!-- /.col-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.overlay-text -->
    <div class="parallax-holder">
        <img class="bg-parallax bg-parallax-neg" src="{{ asset('images/beach.jpg') }}" data-z-index="1"
             data-parallax='{"y": -250,  "scale": 1.15, "smoothness": 15}' alt="image alt"/>
    </div>
    <!-- /.parallax-holder -->
</div>
<!-- /.page-hero -->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-end justify-content-between">
                <div class="flex-1">
                    <h3>Top Destinations</h3>
                    <div>Top destination subtitle</div>
                </div>
                <div class="text-right">
                    <a href="#">See all</a>
                </div>
                <!-- /.float-right -->
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel list-carousel">
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <div class="descrtiption">
                                Short descrtiption text <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    </span>
                                <!-- /.review-starts-list small -->
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <div class="descrtiption">
                                Short descrtiption text <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    </span>
                                <!-- /.review-starts-list small -->
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <div class="descrtiption">
                                Short descrtiption text <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    </span>
                                <!-- /.review-starts-list small -->
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <div class="descrtiption">
                                Short descrtiption text <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    </span>
                                <!-- /.review-starts-list small -->
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <div class="descrtiption">
                                Short descrtiption text <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    </span>
                                <!-- /.review-starts-list small -->
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <div class="descrtiption">
                                Short descrtiption text <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    </span>
                                <!-- /.review-starts-list small -->
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                </div>
                <!-- /.list-card owl-carousel list-carousel -->
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row mt-4">
            <div class="col-12 d-flex align-items-end justify-content-between">
                <div class="flex-1">
                    <h3>Discover New Cities</h3>
                    <div>Discover new cities subtitle</div>
                </div>
                <div class="text-right">
                    <a href="#">See all</a>
                </div>
                <!-- /.float-right -->
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel list-carousel">
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <div class="descrtiption">
                                Short descrtiption text <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    </span>
                                <!-- /.review-starts-list small -->
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <div class="descrtiption">
                                Short descrtiption text <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    </span>
                                <!-- /.review-starts-list small -->
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <div class="descrtiption">
                                Short descrtiption text <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    </span>
                                <!-- /.review-starts-list small -->
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <div class="descrtiption">
                                Short descrtiption text <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    </span>
                                <!-- /.review-starts-list small -->
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <div class="descrtiption">
                                Short descrtiption text <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    </span>
                                <!-- /.review-starts-list small -->
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/270x285" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <div class="descrtiption">
                                Short descrtiption text <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    </span>
                                <!-- /.review-starts-list small -->
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                </div>
                <!-- /.list-card owl-carousel list-carousel -->
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row mt-4">
            <div class="col-12 d-flex align-items-end justify-content-between">
                <div class="flex-1">
                    <h3>Most Popular Experiences</h3>
                    <div>Explore a different way to travel</div>
                </div>
                <div class="text-right">
                    <a href="#">See all</a>
                </div>
                <!-- /.float-right -->
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel list-carousel-md">
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/800x400" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    </span>
                            <!-- /.review-starts-list small -->
                            <div class="descrtiption mt-1">
                                Short descrtiption text about the experience
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/800x400" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    </span>
                            <!-- /.review-starts-list small -->
                            <div class="descrtiption mt-1">
                                Short descrtiption text about the experience
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/800x400" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                            <span class="rate"><i class="fa fa-star-o"></i></span>
                                <!-- /.rate fa-star-o -->
            </span>
                            <!-- /.review-starts-list small -->
                            <div class="descrtiption mt-1">
                                Short descrtiption text about the experience
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/800x400" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                            <span class="rate"><i class="fa fa-star-o"></i></span>
                                <!-- /.rate fa-star-o -->
            </span>
                            <!-- /.review-starts-list small -->
                            <div class="descrtiption mt-1">
                                Short descrtiption text about the experience
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/800x400" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    </span>
                            <!-- /.review-starts-list small -->
                            <div class="descrtiption mt-1">
                                Short descrtiption text about the experience
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/800x400" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                <!-- /.rate fa-star-o -->
                    </span>
                            <!-- /.review-starts-list small -->
                            <div class="descrtiption mt-1">
                                Short descrtiption text about the experience
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                </div>
                <!-- /.list-card owl-carousel list-carousel -->
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row mt-4">
            <div class="col-12 d-flex align-items-end justify-content-between">
                <div class="flex-1">
                    <h3>Experiences in Los Angeles</h3>
                    <div>Cum doctus civibus efficiantur in imperdiet deterruisset</div>
                </div>
                <div class="text-right">
                    <a href="#">See all</a>
                </div>
                <!-- /.float-right -->
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel list-carousel-lg">
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/800x400" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <div class="descrtiption">
                                        <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                            <span class="rate"><i class="fa fa-star-o"></i></span>
                                            <!-- /.rate fa-star-o -->
            </span>
                                <!-- /.review-starts-list small -->Short descrtiption text about the experience
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/800x400" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <div class="descrtiption">
                                        <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                            <span class="rate"><i class="fa fa-star-o"></i></span>
                                            <!-- /.rate fa-star-o -->
            </span>
                                <!-- /.review-starts-list small -->Short descrtiption text about the experience
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/800x400" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <div class="descrtiption">
                                        <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    </span>
                                <!-- /.review-starts-list small -->Short descrtiption text about the experience
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                    <div class="list-card">
                        <div class="img">
                            <img src="http://via.placeholder.com/800x400" alt="image alt"/>
                        </div>
                        <!-- /.img -->
                        <div class="info">
                            <div class="title">
                                Place Title
                            </div>
                            <!-- /.title -->
                            <div class="descrtiption">
                                        <span class="review-star-rate small">
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    <span class="rate full"><i class="fa fa-star"></i></span>
                                            <!-- /.rate fa-star-o -->
                    </span>
                                <!-- /.review-starts-list small -->Short descrtiption text about the experience
                            </div>
                            <!-- /.descrtiption -->
                        </div>
                        <!-- /.info -->
                    </div>
                    <!-- /.list-card -->
                </div>
                <!-- /.list-card owl-carousel list-carousel -->
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
        <div class="row mt-4">
            <div class="col-12 d-flex align-items-end justify-content-between">
                <div>
                    <h3>Top Stories</h3>
                    <div>Most popular stories from our blog</div>
                </div>
            </div>
            <!-- /.col-12 -->
        </div>
        <div class="row mt-4">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <img src="http://via.placeholder.com/800x700" alt="img" class="img-fluid">
                <!-- /.img-fluid -->
            </div>
            <!-- /.col-lg-8 col-md-8 col-sm-12 -->
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="p-0 p-lg-4 p-md-4 mt-3 mt-lg-0 mt-md-0">
                    <h3>Exploring Hidden Gems of Italy</h3>
                    <p class="mt-4">
                        Lorem ipsum dolor sit amet, consec tetur adipiscing elit, nostrud exercitation ullamco laboris
                        nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <!-- /.mt-4 -->
                </div>
                <!-- /.p-4 -->
            </div>
            <!-- /.col-lg-4 col-md-4 col-sm-12 -->
        </div>
        <!-- /.row mt-4 -->
    </div>
    <!-- /.container -->
</div>
<!-- /.section -->
<div class="section img" data-image-src="{{ asset('images/vacation_home.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="offset-3 col-6">
                <div class="text-center">
                    <h3>Newsletter</h3>
                    <p>Subscribe to our weekly Newsletter and stay tuned.</p>
                    <form action="#" method="post" class="mt-4">
                        <div class=" form-group">
                            <input type="text" id="news-letter-email" name="news-letter-email"
                                   placeholder="youremail@email.com" class="form-control">
                            <!-- /.form-control -->
                        </div>
                        <!-- /.form-group -->
                        <input type="submit" value="Subscribe Now!" class="btn btn-large btn-outline-primary mt-3"/>
                    </form>
                </div>
                <!-- /.text-center -->
            </div>
        </div>
    </div>
</div>
<!-- /.section -->

<!-- Guest Modal -->

<div class="modal" tabindex="-1" role="dialog" id="guest-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Guests</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <form>
                   <div class="form-group mt-5 ml-4">
                       <span><strong>ADULTS </strong></span>
                       <div class="w-75 float-right">
                           <button class="btn btn-danger guest-left-button" id="adults-minus">-</button>
                           <input class="guest-num-input" type="text" id="adults" value="0"/>
                           <button class="btn btn-success guest-right-button" id="adults-plus">+</button>
                       </div>
                   </div>
                   <div class="form-group mt-5 ml-4">
                       <span><strong>KIDS </strong></span>
                       <div class="w-75 float-right">
                           <button class="btn btn-danger guest-left-button" id="kids-minus">-</button>
                           <input class="guest-num-input" type="text" id="kids" value="0"/>
                           <button class="btn btn-success guest-right-button" id="kids-plus">+</button>
                       </div>
                   </div>
                   <div class="form-group mt-5 ml-4">
                       <span><strong>PETS </strong></span>
                       <div class="w-75 float-right">
                           <button class="btn btn-danger guest-left-button" id="pets-minus">-</button>
                           <input class="guest-num-input" type="text" id="pets" value="0"/>
                           <button class="btn btn-success guest-right-button" id="pets-plus">+</button>
                       </div>
                   </div>
                   <hr id="guest-divider" />
                   <button type="button" class="btn btn-success mt-3 mr-3 float-right" id="guest_add">Add</button>
               </form>
            </div>
        </div>
    </div>
</div>

<!-- End of Guest Modal -->


@endsection
