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
                $('#adults-plus').prop('disabled', false);
                $('#adults-plus').addClass('btn-success');
                $('#adults-plus').removeClass('btn-secondary');
                $('#adults-plus').css({cursor: "pointer"});
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
                $('#adults-plus').prop('disabled', true);
                $('#adults-plus').addClass('btn-secondary');
                $('#adults-plus').removeClass('btn-success');
                $('#adults-plus').css({cursor: "not-allowed"});
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
                $('#kids-plus').prop('disabled', false);
                $('#kids-plus').addClass('btn-success');
                $('#kids-plus').removeClass('btn-secondary');
                $('#kids-plus').css({cursor: "pointer"});
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
                $('#kids-plus').prop('disabled', true);
                $('#kids-plus').addClass('btn-secondary');
                $('#kids-plus').removeClass('btn-success');
                $('#kids-plus').css({cursor: "not-allowed"});
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
                $('#pets-plus').prop('disabled', false);
                $('#pets-plus').addClass('btn-success');
                $('#pets-plus').removeClass('btn-secondary');
                $('#pets-plus').css({cursor: "pointer"});
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
                $('#pets-plus').prop('disabled', true);
                $('#pets-plus').addClass('btn-secondary');
                $('#pets-plus').removeClass('btn-success');
                $('#pets-plus').css({cursor: "not-allowed"});
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

        // login model
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
                    var error = JSON.parse(e.responseText);
                    $('#login_error').text(error.errors.email);

                }
            });
        });

        $('#login_password').on('keypress', function (e) {
            var keycode = (e.keyCode ? e.keyCode : e.which);
            if (keycode == '13') {
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
                        var error = JSON.parse(e.responseText);
                        $('#login_error').text(error.errors.email);

                    }
                });
            }
            e.stopPropagation();
        });

        // register model
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
                    var name = $('#register_modal_name').val();
                    var email = $('#register_email').val();
                    var password = $('#register_password').val();
                    var password_confirm = $('#register_password_confirmation').val();
                    if (name === "" || email === "" || password === "") {
                        var reg_error = $('#register_error');
                        reg_error.text('All fields are required');
                    }
                    if(password !== password_confirm) {
                        var reg_error = $('#register_error');
                        reg_error.text('Password do not match');
                    }
                }
            });
        });
      $('#register_password_confirmation').on('keypress', function(e) {
            var keycode = (e.keyCode ? e.keyCode : e.which);
            if(keycode == '13') {
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
                        var success = $('#register_success').val();
                        success.appendTo('You have successful Registered.');
                        $('#register_modal_name').modal('hide');
                        window.location.href = '/';
                    },
                    error: function (e) {
                        let name = $('#register_modal_name').val();
                        var email = $('#register_email').val();
                        var password = $('#register_password').val();
                        var password_confirm = $('#register_password_confirmation').val();
                        if (name === "" || email === "" || password === "") {
                            var reg_error = $('#register_error');
                            reg_error.text('All fields are required');
                        }
                        if(password !== password_confirm) {
                             reg_error = $('#register_error');
                            reg_error.text('Passwords do not match');
                        }
                    }
                });
            }
            e.stopPropagation();
        })

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
                    window.location = '/login';
                },
                error: function (e) {
                    alert(e.responseText)
                }
            });
        });


        $('#guest').on('click', function () {
            $('#guest-modal').modal('show')
        });

        $('#avatar_form').on('change', function(e) {
           e.preventDefault();
           var formData = new FormData(this);
           var url = window.location.origin + '/user/update_avatar';

           $.ajax({
               type: 'post',
               url: url,
               data: formData,
               cache: false,
               contentType: false,
               processData: false,
               success: function(data) {
                    console.log('Good')
               },
               error: function(data) {
                    console.log('Bad')
               }
           });
        });
        $('#avatar').on('click', function(e){
            e.preventDefault();
             $('#avatar_file').on('change', function() {
                $('#avatar_form').submit();
             });
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
