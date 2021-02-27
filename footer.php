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
<footer id="footer" class="site-footer section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/footer.jpg);">
    <div class="fade-bg-wrapper">
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
            <div class="logo">
                <div class="logo-collection">
                    <div class="logo-item">
                        <a href=""> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-1.png"
                                                    alt=""></a>
                    </div>
                    <div class="logo-item">
                        <a href=""> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-2.png"
                                                    alt=""></a>
                    </div>
                    <div class="logo-item">
                        <a href=""> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-3.png"
                                                    alt=""></a>
                    </div>
                    <div class="logo-item">
                        <a href=""> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-4.png"
                                                    alt=""></a>
                    </div>
                    <div class="logo-item">
                        <a href=""> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-5.png"
                                                    alt=""></a>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </div>    
    <div class="footer-bottom">
        
        <div class="container">
            <div class="wrapper">
                
                <div id="colophon" class="site-credit">
                    
                        <div class="site-info">
                            <a href="<?php echo esc_url( __( 'https://codewing.co/', 'code-wing-test-project' ) ); ?>">
                                <?php
                                /* translators: %s: CMS name, i.e. WordPress. */
                                printf( esc_html__( ' © 2019 Nepal Explore Summit Trek Pvt. Ltd. All Right Reserve. ' ), 'WordPress' );
                                ?>
                            </a>
                           
                        </div><!-- .site-info -->
                    

                </div><!-- #colophon -->
                <div class="right-content">
                    <p>Designed & Developed by:
                        <a href="https://codewing.co/">Codewing Solutions</a>
                    </p>
                    
                </div>
                
            </div><!-- wrapper -->
        </div><!-- container -->

    </div><!-- .footer-bottom -->
</footer><!-- #footer -->



</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>