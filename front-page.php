<?php

/**
 * Template for Front page
 *
 * Template name: Frontpage
 *
 * @package
 */

get_header(); ?>

<div id="home-sections">
    <?php
	while ( have_posts() ) {
		the_post();
		the_content();
	}
	?>

    <!-- home-page-banner -->
    <div id="home-banner">
        <div class="wrapper">
            <div class="inner-content">
                <div class="banner-content" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-image.jpg');">
                    <div class="container">
                        <div class="banner-content-wrapper">
                            <div class="banner-title">
                                <h1 ><a href="#">Your Adventure Travel Expert in Nepal</a> </h1>
                            </div>
                            
                            <div class="banner-button">
                                <a href="#" class="btn-Secondary btn-prop own-prop">Get Started</a>

                            </div>
                        </div>
                    </div>
                    
                </div><!-- .banner-content -->

            </div><!-- .inner-content -->

        </div>
    </div><!-- #home-banner -->

    <div class="trip-destination ">
        <div class="container">
            <div class="wrapper">
                <div class="section-heading">
                    <p class="sub-heading">OUR SPECIAL</p>
                    <h2 class="heading-title">Off  the Beaten Tours</h2>
                    <p class="heading-excerpt">Discover the different sides of the city and see what NEST has to offer.</p>
                    <div class="slider-button">
                        <button class="slick-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path id="Path_376" data-name="Path 376" d="M20,11H7.83l5.59-5.59L12,4,4,12l8,8,1.41-1.41L7.83,13H20Z" transform="translate(-4 -4)" />
                            </svg>
                        </button>
                        <button class="slick-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path id="Path_376" data-name="Path 376" d="M4,11H16.17L10.58,5.41,12,4l8,8-8,8-1.41-1.41L16.17,13H4Z" transform="translate(-4 -4)" />
                            </svg>
                        </button>
                    </div><!-- .slider-button -->
                </div><!-- .section-heading -->
                <div class="inner-container">
                    <div class="trip-destination-slider">
                        <div>
                            <div class="destination-slider-item">
                                <div class="img-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bkt.png"
                                        alt="">
                                    <a href="#" class="link"></a>
                                    <div class="overlay-content">
                                        <div class="slider-item-title">
                                            <p class="title"> <a href="#">Bhaktapur Sight Seeing Day Tour</a> </p>
                                        </div>
                                        <div class="slider-item-button">
                                            <a href="#">Discover More 
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="6.587" height="10.667" viewBox="0 0 6.587 10.667">
                                                        <path id="Path_377" data-name="Path 377" d="M8.59,15.413l4.071-4.08L8.59,7.253,9.843,6l5.333,5.333L9.843,16.667Z" transform="translate(-8.59 -6)" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div><!-- first-slider -->
                        <div>
                            <div class="destination-slider-item">
                                <div class="img-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bkt.png"
                                        alt="">
                                    <a href="#" class="link"></a>
                                    <div class="overlay-content">
                                        <div class="slider-item-title">
                                        <p class="title"> <a href="#">Bhaktapur Sight Seeing Day Tour</a> </p>
                                        </div>
                                        <div class="slider-item-button">
                                            <a href="#">Discover More 
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="6.587" height="10.667" viewBox="0 0 6.587 10.667">
                                                        <path id="Path_377" data-name="Path 377" d="M8.59,15.413l4.071-4.08L8.59,7.253,9.843,6l5.333,5.333L9.843,16.667Z" transform="translate(-8.59 -6)" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div><!-- second-slider -->
                        <div>
                            <div class="destination-slider-item">
                                <div class="img-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bkt.png"
                                        alt="">
                                        <a href="#" class="link"></a>
                                    <div class="overlay-content">
                                        <div class="slider-item-title">
                                            <p class="title"> <a href="#">Bhaktapur Sight Seeing Day Tour</a> </p>
                                        </div>
                                        <div class="slider-item-button">
                                            <a href="#">Discover More 
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="6.587" height="10.667" viewBox="0 0 6.587 10.667">
                                                        <path id="Path_377" data-name="Path 377" d="M8.59,15.413l4.071-4.08L8.59,7.253,9.843,6l5.333,5.333L9.843,16.667Z" transform="translate(-8.59 -6)" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div><!-- third-slider -->
                        <div>
                            <div class="destination-slider-item">
                                <div class="img-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bkt.png"
                                        alt="">
                                    <a href="#" class="link"></a>
                                    <div class="overlay-content">
                                        <div class="slider-item-title">
                                            <p class="title"> <a href="#">Bhaktapur Sight Seeing Day Tour</a> </p>
                                        </div>
                                        <div class="slider-item-button">
                                            <a href="#">Discover More 
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="6.587" height="10.667" viewBox="0 0 6.587 10.667">
                                                        <path id="Path_377" data-name="Path 377" d="M8.59,15.413l4.071-4.08L8.59,7.253,9.843,6l5.333,5.333L9.843,16.667Z" transform="translate(-8.59 -6)" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div><!-- fourth-slider -->
                        <div>
                            <div class="destination-slider-item">
                                <div class="img-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bkt.png"
                                        alt="">
                                    <a href="#" class="link"></a>
                                    <div class="overlay-content">
                                        <div class="slider-item-title">
                                            <p class="title"> <a href="#">Bhaktapur Sight Seeing Day Tour</a> </p>
                                        </div>
                                        <div class="slider-item-button">
                                            <a href="#">Discover More 
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="6.587" height="10.667" viewBox="0 0 6.587 10.667">
                                                        <path id="Path_377" data-name="Path 377" d="M8.59,15.413l4.071-4.08L8.59,7.253,9.843,6l5.333,5.333L9.843,16.667Z" transform="translate(-8.59 -6)" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div><!-- fifth-slider -->
                    </div>
                </div>
            </div>
            <div class="section-button">
                <a href="" class="btn-primary btn-prop own-prop">View All Tours</a>
            </div>
        </div>
    </div><!-- .trip-destination -->

    <div class="about-section " style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/trip-package.png);">
        <div class="container">
            <div class="section-wrapper">
                <div class="section-row">
                    <div class="section-column">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about.png"
                                            alt="">
                        </div>
                    </div>
                    <!-- .section-column -->
                    <div class="section-column">
                        <div class="section-heading">
                            <p class="heading-excerpt">20 YEARS OF ADVENTURE</p>
                            <h2 class="heading-title">Welcome to NEST Adventure</h2>
                        </div>
                        <div class="about-inner-content">
                            <p>For several travelers, the ultimate goal is to find that oasis that has not been touched by modernization. Nepal has always been the shangri-la, not only for those who want to experience trekking in its most natural setting,
                                but also glimpse the beautiful culture this country has to offer. From simple sightseeing tours to see hundred years old temples and walk along the buzzling street of Thamel in Kathmandu, or head to your once in a lifetime
                                adventure and feel the Himalayas on your feet. Trekking in Nepal is a dream for all mountain enthusiasts. Nepal has always been known to be a haven for backpackers, travelers and tourists, alike!</p>
                            <div class="section-button">
                                <a href="" class="btn-primary btn-prop own-prop">Know More About Us</a>
                            </div>
                        </div>
                        <!-- .section-heading -->
                    </div>
                    <!-- .section-column -->
                </div>
                <!-- .section-row -->
            </div>
        </div>
    </div><!-- .about-section -->
    
    <div class="trip-package section">
        <div class="container">
            <div class="wrapper">
                <div class="section-heading">
                    <p class="sub-heading">START PLANNING YOUR</p>
                    <h2 class="heading-title">NEST 's Best Pick</h2>
                </div>
                <div class="inner-container">
                    <div class="grid-collection">
                        <div class="grid-item">
                            <div class="img-container">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination-1.png"
                                            alt="">
                                </a>
                            </div>
                            <!-- img-container -->
                            <div class="trip-meta-info">
                                <div class=" grid-item-title">
                                    <h3 class="trip-name">
                                        <a href=""> Everest Base Camp Trek</a>
                                    </h3>
                                </div>
                                <p>
                                    <span>
                                        <svg id="outline-pin_drop-24px_2_" data-name="outline-pin_drop-24px (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path id="Path_48" data-name="Path 48" d="M0,0H24V24H0Z" fill="none"/>
                                            <path id="Path_49" data-name="Path 49" d="M5,20H19v2H5ZM18,8A6,6,0,0,0,6,8c0,4.5,6,11,6,11S18,12.5,18,8ZM8,8a4,4,0,0,1,8,0c0,2.13-2.08,5.46-4,7.91C10.08,13.47,8,10.13,8,8Zm4-2a2,2,0,1,0,2,2A2.006,2.006,0,0,0,12,6Z" fill="#0089c9"/>
                                          </svg>
                                          Nepal
                                    </span>
                                    <span>
                                        <svg id="outline-access_time-24px_1_" data-name="outline-access_time-24px (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path id="Path_46" data-name="Path 46" d="M0,0H24V24H0Z" fill="none"/>
                                            <path id="Path_47" data-name="Path 47" d="M11.99,2A10,10,0,1,0,22,12,10,10,0,0,0,11.99,2ZM12,20a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm.5-13H11v6l5.25,3.15L17,14.92l-4.5-2.67Z" fill="#0089c9"/>
                                          </svg>
                                          14 Days
                                    </span>
                                    <span>
                                        <svg id="outline-monetization_on-24px" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path id="Path_379" data-name="Path 379" d="M0,0H24V24H0Z" fill="none"/>
                                            <path id="Path_380" data-name="Path 380" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.011,8.011,0,0,1,12,20Zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67,0-.84.79-1.43,2.1-1.43,1.38,0,1.9.66,1.94,1.64h1.71a3.1,3.1,0,0,0-2.49-2.97V5H10.9V6.69A3.021,3.021,0,0,0,8.18,9.5c0,1.79,1.49,2.69,3.66,3.21,1.95.46,2.34,1.15,2.34,1.87,0,.53-.39,1.39-2.1,1.39-1.6,0-2.23-.72-2.32-1.64H8.04A3.243,3.243,0,0,0,10.9,17.3V19h2.34V17.33c1.52-.29,2.72-1.16,2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42Z" fill="#0089c9"/>
                                        </svg>
                                       <span class="from"> From:</span>
                                    <span class="price">$26,990</span>
                                    </span>
                                </p>
                            </div>
                            <!-- trip-meta-info -->
                        </div>
                        <!-- .grid-item -->
                        <div class="grid-item">
                            <div class="img-container">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination-1.png"
                                            alt="">
                                </a>
                            </div>
                            <!-- img-container -->
                            <div class="trip-meta-info">
                                <div class=" grid-item-title">
                                    <h3 class="trip-name">
                                        <a href=""> Everest Base Camp Trek</a>
                                    </h3>
                                </div>
                                <p>
                                    <span>
                                        <svg id="outline-pin_drop-24px_2_" data-name="outline-pin_drop-24px (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path id="Path_48" data-name="Path 48" d="M0,0H24V24H0Z" fill="none"/>
                                            <path id="Path_49" data-name="Path 49" d="M5,20H19v2H5ZM18,8A6,6,0,0,0,6,8c0,4.5,6,11,6,11S18,12.5,18,8ZM8,8a4,4,0,0,1,8,0c0,2.13-2.08,5.46-4,7.91C10.08,13.47,8,10.13,8,8Zm4-2a2,2,0,1,0,2,2A2.006,2.006,0,0,0,12,6Z" fill="#0089c9"/>
                                          </svg>
                                          Nepal
                                    </span>
                                    <span>
                                        <svg id="outline-access_time-24px_1_" data-name="outline-access_time-24px (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path id="Path_46" data-name="Path 46" d="M0,0H24V24H0Z" fill="none"/>
                                            <path id="Path_47" data-name="Path 47" d="M11.99,2A10,10,0,1,0,22,12,10,10,0,0,0,11.99,2ZM12,20a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm.5-13H11v6l5.25,3.15L17,14.92l-4.5-2.67Z" fill="#0089c9"/>
                                          </svg>
                                          14 Days
                                    </span>
                                    <span>
                                        <svg id="outline-monetization_on-24px" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path id="Path_379" data-name="Path 379" d="M0,0H24V24H0Z" fill="none"/>
                                            <path id="Path_380" data-name="Path 380" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.011,8.011,0,0,1,12,20Zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67,0-.84.79-1.43,2.1-1.43,1.38,0,1.9.66,1.94,1.64h1.71a3.1,3.1,0,0,0-2.49-2.97V5H10.9V6.69A3.021,3.021,0,0,0,8.18,9.5c0,1.79,1.49,2.69,3.66,3.21,1.95.46,2.34,1.15,2.34,1.87,0,.53-.39,1.39-2.1,1.39-1.6,0-2.23-.72-2.32-1.64H8.04A3.243,3.243,0,0,0,10.9,17.3V19h2.34V17.33c1.52-.29,2.72-1.16,2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42Z" fill="#0089c9"/>
                                        </svg>
                                       <span class="from"> From:</span>
                                    <span class="price">$26,990</span>
                                    </span>
                                </p>
                            </div>
                            <!-- trip-meta-info -->
                        </div>
                        <!-- .grid-item -->
                        <div class="grid-item">
                            <div class="img-container">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/destination-1.png"
                                            alt="">
                                </a>
                            </div>
                            <!-- img-container -->
                            <div class="trip-meta-info">
                                <div class=" grid-item-title">
                                    <h3 class="trip-name">
                                        <a href=""> Everest Base Camp Trek</a>
                                    </h3>
                                </div>
                                <p>
                                    <span>
                                        <svg id="outline-pin_drop-24px_2_" data-name="outline-pin_drop-24px (2)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path id="Path_48" data-name="Path 48" d="M0,0H24V24H0Z" fill="none"/>
                                            <path id="Path_49" data-name="Path 49" d="M5,20H19v2H5ZM18,8A6,6,0,0,0,6,8c0,4.5,6,11,6,11S18,12.5,18,8ZM8,8a4,4,0,0,1,8,0c0,2.13-2.08,5.46-4,7.91C10.08,13.47,8,10.13,8,8Zm4-2a2,2,0,1,0,2,2A2.006,2.006,0,0,0,12,6Z" fill="#0089c9"/>
                                          </svg>
                                          Nepal
                                    </span>
                                    <span>
                                        <svg id="outline-access_time-24px_1_" data-name="outline-access_time-24px (1)" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path id="Path_46" data-name="Path 46" d="M0,0H24V24H0Z" fill="none"/>
                                            <path id="Path_47" data-name="Path 47" d="M11.99,2A10,10,0,1,0,22,12,10,10,0,0,0,11.99,2ZM12,20a8,8,0,1,1,8-8A8,8,0,0,1,12,20Zm.5-13H11v6l5.25,3.15L17,14.92l-4.5-2.67Z" fill="#0089c9"/>
                                          </svg>
                                          14 Days
                                    </span>
                                    <span>
                                        <svg id="outline-monetization_on-24px" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path id="Path_379" data-name="Path 379" d="M0,0H24V24H0Z" fill="none"/>
                                            <path id="Path_380" data-name="Path 380" d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.011,8.011,0,0,1,12,20Zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67,0-.84.79-1.43,2.1-1.43,1.38,0,1.9.66,1.94,1.64h1.71a3.1,3.1,0,0,0-2.49-2.97V5H10.9V6.69A3.021,3.021,0,0,0,8.18,9.5c0,1.79,1.49,2.69,3.66,3.21,1.95.46,2.34,1.15,2.34,1.87,0,.53-.39,1.39-2.1,1.39-1.6,0-2.23-.72-2.32-1.64H8.04A3.243,3.243,0,0,0,10.9,17.3V19h2.34V17.33c1.52-.29,2.72-1.16,2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42Z" fill="#0089c9"/>
                                        </svg>
                                       <span class="from"> From:</span>
                                    <span class="price">$26,990</span>
                                    </span>
                                </p>
                            </div>
                            <!-- trip-meta-info -->
                        </div>
                        <!-- .grid-item -->

                    </div>
                    <!-- .grid-collection -->
                    <div class="section-button">
                        <a href="" class="btn-primary btn-prop">View All Tours</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .trip-destination -->

    <div class="feature-trip section" >
        <div class="wrapper"style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/feature-trip-bg.png);">
            <div class="container">
                <div class="section-heading below-tablet">
                    <p class="sub-heading">FEATURED TRIP OF THE MONTH</p>
                    <h2 class="heading-title">Langtang Valley Trek – 12 Days</h2>
                </div><!-- section-heading -->
                <div class="inner-container">
                    <div class="feature-trip-row">
                        <div class="feature-trip-column">
                            <div class="img-container">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature-trip-img.png"
                                            alt="">
                                </a>
                            </div>
                        </div><!-- .feature-trip-column -->
                        <div class="feature-trip-column">
                            <div class="feature-trip-column-wrapper">
                                <div class="section-heading only-desktop">
                                    <p class="sub-heading">FEATURED TRIP OF THE MONTH</p>
                                    <h2 class="heading-title">Langtang Valley Trek – 12 Days</h2>
                                </div><!-- section-heading -->
                                <p class="trip-excerpt">A trek to the Langtang valley has to be one of the most rewarding of the short treks available anywhere in Nepal. The east-west running…</p>
                                <div class="trip-price">
                                    <span>Starting From</span>
                                    <h3 class="trip-price">$750</h3>
                                </div><!-- trip-price -->
                                <div class="trip-button">
                                    <a href="#" class="btn-Secondary btn-prop own-prop">Inquire Now</a>
                                </div>
                            </div>
                        </div><!-- .feature-trip-column -->
                    </div><!-- .feature-trip-row -->
                </div>
            </div>
        </div>
    </div><!-- feature-trip section -->

    <div class="trip-departure-detail "style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/trip-detail.png);" >
        <div class="container">
            <div class="wrapper">
                <div class="section-heading ">
                    <p class="sub-heading">FIXED DEPARTURE DATE</p>
                    <h2 class="heading-title">Our Last Minute Trips</h2>
                </div><!-- section-heading -->
                <div class="inner-container">
                    <div class="trip-detail">
                        <p class="detail-heading"> <span>Departing</span><span>Trip-Name</span><span>Days</span><span>Price</span><span>Space Left</span><span></span></p>
                        <p> <span>2018-02-25</span><span> <a href="">Manaslu Trek</a> </span><span>10</span><span>$750</span><span>8</span><span><a href="" class="btn-trinary btn-prop">View Trip</a></span></p>
                        <p> <span>2018-02-25</span><span><a href="">Annapurna Base Camp Trek</a> </span><span>8</span><span>$750</span><span>8</span><span><a href="" class="btn-trinary btn-prop">View Trip</a></span></p>
                        <p> <span>2018-02-25</span><span> <a href="">Everest Base Camp Trek</a> </span><span>8</span><span>$750</span><span>8</span><span><a href="" class="btn-trinary btn-prop">View Trip</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- trip-departure-detail -->

    <div class="blog-section section">
        <div class="container">
            <div class="wrapper">
                <div class="section-heading">
                    <p class="sub-heading">READ OUR</p>
                    <h2 class="heading-title">Latest Articles</h2>
                </div>
                <div class="inner-container">
                    <div class="grid-collection">
                        <div class="grid-item">
                            <div class="blog-info">
                                <div class="img-container">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-1.png"
                                                alt="">
                                    </a>
                                </div>
                                <div class=" blog-title">
                                    <h3>
                                        <a href=""> Kanchenjunga Base Camp Trek Itinerary</a>
                                    </h3>
                                </div>
                            </div>
                            
                            <!-- img-container -->
                            <div class="blog-meta-info">
                                
                                <div class="cat-date">
                                   <p><span>2018-03-02 </span> - <span>Blog</span></p>
                                </div>
                            </div>
                            <!-- blog-meta-info -->
                        </div>
                        <!-- .grid-item -->
                        <div class="grid-item">
                            <div class="blog-info">
                                <div class="img-container">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-2.png"
                                                alt="">
                                    </a>
                                </div>
                                <div class=" blog-title">
                                    <h3>
                                        <a href=""> 7 Best Yoga Resorts in Nepal</a>
                                    </h3>
                                </div>
                            </div>
                            
                            <!-- img-container -->
                            <div class="blog-meta-info">
                                
                                <div class="cat-date">
                                   <p><span>2018-03-02 </span>-<span>Blog</span></p>
                                </div>
                            </div>
                            <!-- blog-meta-info -->
                        </div>
                        <!-- .grid-item -->
                        <div class="grid-item">
                            <div class="blog-info">
                                <div class="img-container">
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-3.png"
                                                alt="">
                                    </a>
                                </div>
                                <div class=" blog-title">
                                    <h3>
                                        <a href=""> Annapurna Circuit Trek Itinerary</a>
                                    </h3>
                                </div>
                            </div>
                            
                            <!-- img-container -->
                            <div class="blog-meta-info">
                               
                                <div class="cat-date">
                                   <p><span>2018-03-02 </span>-<span>Blog</span></p>
                                </div>
                            </div>
                            <!-- blog-meta-info -->
                        </div>
                        <!-- .grid-item -->
                        

                    </div>
                    <!-- .grid-collection -->
                  
                </div>
            </div>
        </div>
    </div><!-- .trip-destination -->




</div><!-- #home-sections -->


<?php
get_footer();