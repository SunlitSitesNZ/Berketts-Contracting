(function ($) {
    "use strict";

    var $constrom_window = $(window);

    // ************************
    // :: Preloader Active Code
    // ************************

    $constrom_window.on('load', function () {
        $('#preloader').fadeOut('1000', function () {
            $(this).remove();
        });
    });

    // ****************************
    // :: TOP Menu Sticky Active Code
    // ****************************

    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 400) {
            $("#sticky-header").removeClass("sticky");
            $('#back-top').fadeIn(500);
        } else {
            $("#sticky-header").addClass("sticky");
            $('#back-top').fadeIn(500);
        }
    });


    $(document).ready(function () {

        // Mobile_menu
        var menu = $('ul#navigation');
        if (menu.length) {
            menu.slicknav({
                prependTo: ".mobile_menu",
                closedSymbol: '+',
                openedSymbol: '-'
            });
        };

        // ***********************
        // :: Scrollup Active Code
        // ***********************

        if ($.fn.scrollUp) {
            $constrom_window.scrollUp({
                scrollSpeed: 1000,
                scrollText: '<i class="fa fa-long-arrow-up" aria-hidden="true"></i>'
            });
        }

        // *****************************
        // :: Welcome Slides Active Code
        // *****************************

        if ($.fn.owlCarousel) {
            var welcomeSlider = $('.slider-active');
            welcomeSlider.owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                smartSpeed: 1000,
                autoplayTimeout: 5000,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                nav: true,
                dots: true
            })

            welcomeSlider.on('translate.owl.carousel', function () {
                var layer = $("[data-animation]");
                layer.each(function () {
                    var anim_name = $(this).data('animation');
                    $(this).removeClass('animated ' + anim_name).css('opacity', '0');
                });
            });

            $("[data-delay]").each(function () {
                var anim_del = $(this).data('delay');
                $(this).css('animation-delay', anim_del);
            });

            $("[data-duration]").each(function () {
                var anim_dur = $(this).data('duration');
                $(this).css('animation-duration', anim_dur);
            });

            welcomeSlider.on('translated.owl.carousel', function () {
                var layer = welcomeSlider.find('.owl-item.active').find("[data-animation]");
                layer.each(function () {
                    var anim_name = $(this).data('animation');
                    $(this).addClass('animated ' + anim_name).css('opacity', '1');
                });
            });
        }

        // ****************************
        // :: Init Isotope Active Code
        // ****************************

        var $grid = $('.grid').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                columnWidth: 1
            }
        });

        // Filter items on button click
        $('.portfolio-menu').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });

        // For menu active class
        $('.portfolio-menu button').on('click', function (event) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            event.preventDefault();
        });

        // **********************
        // :: Wow js Active Code
        // **********************

        if ($constrom_window.width() > 767) {
            new WOW().init();
        }

        // *************************
        // :: Counter Up Active Code
        // *************************

        if ($.fn.counterUp) {
            $('.counter').counterUp({
                delay: 10,
                time: 10000
            });
        }

        // *************************************
        // :: MagnificPopup img view Active Code
        // *************************************

        if ($.fn.magnificPopup) {
            $('.popup-image').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }

        // *************************************
        // :: magnificPopup img view Active Code
        // *************************************

        if ($.fn.magnificPopup) {
            $('.img-pop-up').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        }

        // **********************************
        // :: MagnificPopup Video Active Code
        // **********************************

        if ($.fn.magnificPopup) {
            $('.popup-video').magnificPopup({
                type: 'iframe'
            });
        }

        // ****************************
        // :: Brand Slider Active Code
        // ***************************

        $('.brand-active').owlCarousel({
            loop: true,
            margin: 30,
            items: 1,
            autoplay: true,
            nav: false,
            dots: false,
            autoplayHoverPause: true,
            autoplaySpeed: 800,
            responsive: {
                0: {
                    items: 1,
                    nav: false

                },
                576: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 7
                }
            }
        });

        // ******************************
        // :: Project  Slider Active Code
        // ******************************

        $('.project-active').owlCarousel({
            loop: true,
            autoplay: true,
            margin: 30,
            items: 1,
            autoplay: true,
            navText: ['<i class="Flaticon flaticon-left-arrow"></i>', '<i class="Flaticon flaticon-right-arrow"></i>'],
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false

                },
                767: {
                    items: 1,
                    nav: false
                },
                992: {
                    items: 2,
                    nav: false
                }
            }
        });

        // ******************************
        // :: Avout Pro Slider Active Code
        // ******************************

        $('.about-pro-active').owlCarousel({
            loop: true,
            margin: 30,
            items: 1,
            autoplay: true,
            navText: ['<i class="Flaticon flaticon-left-arrow"></i>', '<i class="Flaticon flaticon-right-arrow"></i>'],
            nav: true,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                    nav: false

                },
                767: {
                    items: 1,
                    nav: false
                },
                992: {
                    items: 1,
                    nav: false
                },
                1200: {
                    items: 1,
                }
            }
        });

    });

    // **************************
    // :: Nice Delect Active Code
    // **************************

    if (document.getElementById('default-select')) {
        $('select').niceSelect();
    }

    // **************************
    // :: Mail Ja Active Code
    // **************************

    function mailChimp() {
        $('#mc_embed_signup').find('form').ajaxChimp();
    }
    mailChimp();


    // **************************
    // :: Search Box Active Code
    // **************************

    // Search Toggle
    $("#search_input_box").hide();
    $("#search").on("click", function () {
        $("#search_input_box").slideToggle();
        $("#search_input").focus();
    });

    $("#close_search").on("click", function () {
        $('#search_input_box').slideUp(500);
    });

    // Search Toggle
    $("#search_input_box").hide();
    $("#search_1").on("click", function () {
        $("#search_input_box").slideToggle();
        $("#search_input").focus();
    });

})(jQuery);