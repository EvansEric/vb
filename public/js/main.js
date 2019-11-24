!(function ($) {

    // When Document is Ready call site init function.
    $(document).ready(function () {
        init();
    });

    // Site Init //
    function init() {
        if ($('.carousel').length) {
            carousel();
        }
        if ($('.list-carousel').length) {
            listCarousel();
        }

        if ($('.list-carousel-lg').length) {
            listCarouselLarge();
        }

        if ($('.list-carousel-md').length) {
            listCarouselMedim();
        }

        if ($('.price-slider').length) {
            priceSlider();
        }

        if ($('.wish-btn').length) {
            wishButton();
        }

        if ($('.i-check').length || $('.i-radio').length) {
            iCheck();
        }

        if ($('.section.img').length) {
            sectionImg();
        }

        if ($('.sticky-sidebar').length) {
            stickySideBar();
        }

        if ($('#map-canvas').length) {
            googleMap();
        }

        if ($('header .navbar').length) {
            headerNav();
        }

        if ($('.countdown').length) {
            countdown();
        }

        $('#from').on('click', function () {
            $(this).attr('placeholder', '');
            $('#from_icon').css('visibility', 'hidden');
        });
        $('#from').on('blur', function () {
            $(this).attr('placeholder', 'Check-In');
            $('#from_icon').css('visibility', 'visible');
        });

        $('#to').on('click', function () {
            $(this).attr('placeholder', '');
            $('#to_icon').css('visibility', 'hidden');
        });
        $('#to').on('blur', function () {
            $(this).attr('placeholder', 'Check-Out');
            $('#to_icon').css('visibility', 'visible');
        });

        // Guest adust
        $('#adults-minus').on('click', function (e) {
            e.preventDefault()
            var adult_num = parseInt($('#adults').val());
            if (adult_num > 0) {
                $('#adults').val(adult_num - 1);
            } else {
                $('#adults').val(0);
            }
        });

        $('#adults-plus').on('click', function (e) {
            e.preventDefault()
            var adult_num = parseInt($('#adults').val());
            if (adult_num >= 0 && adult_num !== 16) {
                $('#adults').val(adult_num + 1);
            } else if (adult_num === 16) {
                $('#adults').val(16);
            } else {
                $('#adults').val(0);
            }
        });

        //Guest Kids
        $('#kids-minus').on('click', function (e) {
            e.preventDefault()
            var kids_num = parseInt($('#kids').val());
            if (kids_num > 0) {
                $('#kids').val(kids_num - 1);
            } else {
                $('#kids').val(0);
            }
        });

        $('#kids-plus').on('click', function (e) {
            e.preventDefault()
            var kids_num = parseInt($('#kids').val());
            if (kids_num >= 0 && kids_num !== 5) {
                $('#kids').val(kids_num + 1);
            } else if (kids_num === 5) {
                $('#kids').val(5);
            } else {
                $('#kids').val(0);
            }
        });

        //Guest Pets
        $('#pets-minus').on('click', function (e) {
            e.preventDefault()
            var pets_num = $('#pets').val();
            if (pets_num > 0) {
                $('#pets').val(pets_num - 1);
            } else {
                $('#pets').val(0);
            }
        });

        $('#pets-plus').on('click', function (e) {
            e.preventDefault()
            var pets_num = parseInt($('#pets').val());
            if (pets_num >= 0 && pets_num !== 2) {
                $('#pets').val(pets_num + 1);
            } else if (pets_num === 2) {
                $('#pets').val(2);
            } else {
                $('#pets').val(0);
            }
        });

        $('#guest_add').on('click', function () {
            var adult_count = $('#adults').val();
            var kid_count = $('#kids').val();
            var pet_count = $('#pets').val();
            var guest_count = parseInt(adult_count) + parseInt(kid_count);
            $('#guest').attr('placeholder', 'Guests:' + guest_count.toString() + ' Pets:' + pet_count.toString());
            $('#guest-modal').modal('hide');
        });

        $('#login_model_submit').on('click', function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let url = window.location.origin + '/login';
            let data = {
                'email': $('#login_email').val(),
                'password': $('#login_password').val()
            };
            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                success: function () {
                    $('#login-modal').modal('hide');
                    window.location.href = '/';
                },
                error: function (e) {
                    alert(e.responseText)
                }
            });
        });

        $('#login_password').on('keyup', function (e) {
            e.preventDefault();
            if (e.keyCode === 13) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                let url = window.location.origin + '/login';
                let data = {
                    'email': $('#login_email').val(),
                    'password': $('#login_password').val()
                };
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    success: function () {
                        $('#login-modal').modal('hide');
                        window.location.href = '/';
                    },
                    error: function (e) {
                        alert(e.responseText)
                    }
                });
            }
        });

        $('#register_modal_submit').on('click', function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let url = window.location.origin + '/register';
            let data = {
                'name': $('#register_modal_name').val(),
                'email': $('#register_email').val(),
                'password': $('#register_password').val(),
                'password_confirmation': $('#register_password_confirmation').val()
            };
            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                success: function () {
                    $('#register_modal_name').modal('hide');
                    window.location.href = '/';
                },
                error: function (e) {
                    alert(e.responseText)
                }
            });
        });

        $('#logout').on('click', function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let url = window.location.origin + '/logout';
            $.ajax({
                url: url,
                type: 'POST',
                data: null,
                success: function () {
                    window.location.replace('/login');
                },
                error: function (e) {
                    alert(e.responseText)
                }
            });
        });


        $('#guest').on('click', function () {
            $('#guest-modal').modal('show')
        });
    }

    // Carousel //
    function listCarousel() {
        $(".list-carousel").owlCarousel({
            items: 4,
            margin: 30,
            nav: false,
            lazyLoad: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        });
    }

    // listCarouselMD //
    function listCarouselMedim() {
        $(".list-carousel-md").owlCarousel({
            items: 4,
            margin: 30,
            nav: false,
            lazyLoad: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false
                }
            }
        });
    }

    // listCarouselLarge //
    function listCarouselLarge() {
        $(".list-carousel-lg").owlCarousel({
            items: 4,
            margin: 30,
            nav: false,
            lazyLoad: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 2,
                    nav: true,
                    loop: false
                }
            }
        });
    }

    // Price Silder //
    function priceSlider() {
        $(".price-slider").ionRangeSlider({
            min: 130,
            max: 575,
            type: 'double',
            prefix: "$",
            prettify: false,
            hasGrid: true
        });
    }

    // Wish Button //
    function wishButton() {
        $('.wish-btn').on('click', function () {
            $(this).toggleClass('check');
        });
    }

    // I Check //
    function iCheck() {
        $('.i-check, .i-radio').iCheck({
            checkboxClass: 'icheckbox_square-aero',
            radioClass: 'iradio_square-aero',
        });
    }

    // Section Img //
    function sectionImg() {
        var element = $('.section.img');
        element.css({'background-image': 'url(' + element.attr('data-image-src') + ')'});
    }

    // Sticky Sidebar //
    function stickySideBar() {

        $('.sticky-sidebar').stickySidebar({
            topSpacing: 110,
            bottomSpacing: 60
        });

    }


    // Google Map //
    function googleMap() {
        var map,
            service;
        var latlng = new google.maps.LatLng(34.0201613, -117.6919205);
        var myOptions = {
            zoom: 16,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false
        };

        map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);


        var marker = new google.maps.Marker({
            position: latlng,
            map: map
        });
        marker.setMap(map);


        $('a[href="#google-map-tab"]').on('shown.bs.tab', function (e) {
            google.maps.event.trigger(map, 'resize');
            map.setCenter(latlng);
        });
    }

    // Header Nav //
    function headerNav() {
        $(window).scroll(function (e) {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > 65) {
                $('header .navbar').addClass('sticky');
            } else {
                $('header .navbar').removeClass('sticky');
            }
        });
    }

    // Carousel //
    function carousel() {
        $('.carousel').carousel();
    }

    // countdown //
    function countdown() {
        var element = $('.countdown');
        element.countdown(element.attr('data-date'), function (event) {
            $(this).html(
                event.strftime("<div class='v'>%D <span>days</span></div><div class='s'>:</div><div class='v'>%H <span>hours</span></div><div class='s'>:</div><div class='v'>%M <span>minit</span></div><div class='s'>:</div><div class='v'>%S <span>Second</span></div>")
            );
        });
    }

})(jQuery);