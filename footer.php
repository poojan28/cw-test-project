<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edulife
 */

?>

<div id="btn-scrollup">
    <!-- <a title="Top" class="scrollup" href="#"></a> -->
</div>
<!-- ------------------------------------------------------------------>
<div class="dark-mode">
    <a href="#" class="dark-btn">Dark Mode</a>
    <a href="#" class="light-btn">Light Mode</a>
    
</div>  
<div class="footer-section newsletter-with-footer section"> <!-- please remove  class "newsletter-with-footer section" when no newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="wrapper">
                <div class="newsletter-inner-wrapper">
                    <div class="newsletter-row">
                        <div class="newsletter-column form">
                            <div class="section-heading">
                                <h2 class="section-title">Don’t miss an adventure!</h2>
                                
                                <p class="heading-excerpt">Sign up to our newsletter and be the first to get travel guides and resources every week.</p>
                            </div>
                            <div class="content">
                                <div class="content-wrapper ">
                                    
                                    <form class="form-input mc4wp-form ">
                                        <div class="mc4wp-form-fields">
                                            <p><input type="text" placeholder="Enter Your Email Address"></p>
                                            <p><button class="btn-primary btn-prop ">Subscribe</button></p>
                                        </div>

                                    </form>

                                </div>
                            </div><!-- right-content -->
                        </div>
                        <div class="newsletter-column">
                            <div class="map-wrapper">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.4474939265438!2d85.31620405135851!3d27.672560882721918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19cdd0c3aaf1%3A0xb1ba1d4eb1f7262d!2sWEN%20Solutions%20Pvt.%20Ltd!5e0!3m2!1sen!2snp!4v1613448264807!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer" class="site-footer section">
        <div class="footer-divider">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                    <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                    c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                    c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
            </svg>
        </div>
        <div class="container">
            <div class="footer-widgets-inner">
                <div class="inner-wrapper">

                    <?php
                    dynamic_sidebar( 'footer-widgets-1' );
                    dynamic_sidebar( 'footer-widgets-2' );
                    dynamic_sidebar( 'footer-widgets-3' );
                    dynamic_sidebar( 'footer-widgets-4' );
                    ?>


                </div><!-- inner-wrapper -->
            </div><!-- .footer-widgets-inner -->
        </div><!-- .container -->

        <div class="footer-bottom">
            
            <div class="container">
                <div class="wrapper">
                    <div class="right-content">
                        <ul class="listing">
                            <li>
                                <a href="">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="">Disclaimer</a>
                            </li>
                            <li>
                                <a href="">Terms & Condition</a>
                            </li>
                        </ul>
                    </div>
                    <div id="colophon" class="site-credit">
                        
                            <div class="site-info">
                                <a href="<?php echo esc_url( __( 'http://wensolutions.com/', 'code-wing-test-project' ) ); ?>">
                                    <?php
                                    /* translators: %s: CMS name, i.e. WordPress. */
                                    printf( esc_html__( 'Copyright © 2020 Corporate class. All right Reserve. ', 'WEN Solutions' ), 'WordPress' );
                                    ?>
                                </a>
                                <span class="sep"> | </span>
                                <?php
                                    /* translators: 1: Theme name, 2: Theme author. */
                                    printf( esc_html__( '%1$s by %2$s.', 'Themes' ), 'Themes', '<a href="http://wensolutions.com/">WEN Solutions</a>' );
                                ?>
                            </div><!-- .site-info -->
                        

                    </div><!-- #colophon -->
                    
                </div><!-- wrapper -->
            </div><!-- container -->

        </div><!-- .footer-bottom -->


    </footer><!-- #footer -->
</div>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>