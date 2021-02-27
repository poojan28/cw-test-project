jQuery(function($) {

    /**
     * =========================
     * Accessibility codes start
     * =========================
     */
    $(document).on('mousemove', 'body', function(e) {
        $(this).removeClass('keyboard-nav-on');
    });
    $(document).on('keydown', 'body', function(e) {
        if (e.which == 9) {
            $(this).addClass('keyboard-nav-on');
        }
    });
    /**
     * =========================
     * Accessibility codes end
     * =========================
     */

    /**
     * =========================
     * mobile navigation codes start
     * =========================
     */

    /* button for subm-menu (work only on mobile) */

    $('#primary-menu')
        .find('li.menu-item-has-children ul.sub-menu')
        .before('<button class="btn_submenu_dropdown"><span><i class="drop-down-icon"></i></span></button>')

    /* submenu toggle */
    $(document).on('click ', '.btn_submenu_dropdown', function() {
        $(this).toggleClass('active');
        $(this).parent().find('.sub-menu').first().slideToggle();
    });



    /* menu toggle */
    var nav_menu = $('.main-navigation ul.nav-menu');
    $(document).on('click', '.menu-toggle', function() {
        $(this).toggleClass('menu-toggle--active');
        nav_menu.slideToggle().toggleClass("menu-open");
    });

    /**
     * =========================
     * mobile navigation codes ended
     * =========================
     */

    /**
     * =========================
     * sticky navigation
     * =========================
     */

    $(window).on('scroll', function() {
        if ($(window).scrollTop() >= 50) {
            $('.heading-content').addClass('is-sticky-header');
        } else {
            $('.heading-content').removeClass('is-sticky-header', 1000, "easeInBack");
        }
    });
    /**
     * =========================
     * sticky navigation
     * =========================
     */

    /**
    * =========================
    * slick
    * =========================
    */
    /* slick button for trip-destination */
    $(document).on('click', '.trip-destination .section-heading  .slick-next', function() {
        $(".trip-destination-slider .slick-next").trigger('click');
    });
    $(document).on('click', '.trip-destination .section-heading  .slick-prev', function() {
        $(".trip-destination-slider .slick-prev").trigger('click');
    });

    /* slick button for testimonial */
    $(document).on('click', '.testimonial .section-heading  .slick-next', function() {
        $(".testimonial-slider .slick-next").trigger('click');
    });
    $(document).on('click', '.testimonial .section-heading  .slick-prev', function() {
        $(".testimonial-slider .slick-prev").trigger('click');
    });
    function wc_test_project_slick_slider() {

    
        $('.trip-destination-slider').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 3.5,
            centerPadding: '40px',
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 1200,
                settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true
                }
            },
            {
                breakpoint: 700,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1
                }
            }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
            });
        $('.testimonial-slider').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 1.3,
            centerPadding: '40px',
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 1200,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1
               
                }
            }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    }
    wc_test_project_slick_slider();
    /**
     * =========================
     * slick
     * =========================
     */


    });