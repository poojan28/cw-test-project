<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package edulife
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'code-wing-test-project' ); ?></a>

		<header id="masthead" class="site-header">
			<div class="header-top-bar">
				<div class="container">
					<div class="wrapper">
						<div class="header-top-content">
							<div class="header-top-left-content">
								<ul class="contact-information">
									<li class="list">
										<span class="address">
											<a href="#">
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<span>Baneshwor Height, Kathmandu, Nepal</span>
											</a>
										</span>
									</li>

									<li class="list">
										<span class="phone">
											<a href="tel:9816050389">
												<i class="fas fa-phone-alt" aria-hidden="true"></i>
												<span>9816050389</span>
											</a>
										</span>
									</li>

									<li class="list">
										<span class="email">
											<a href="#">
												<i class="fas fa-envelope" aria-hidden="true"></i>
												<span>chapagain.pujan@gmail.com</span>
											</a>
										</span>
									</li>

								</ul><!-- .contact-infomation -->
							</div><!-- .header-top-left-content -->
							<div class="header-top-right-content">
								<div class="social-navigation-wrapper">
									<div class="site-social">
										<nav class="social-navigation" role="navigation" aria-label="Social Links Menu">
											<div class="menu-social-container">
												<ul id="menu-social" class="menu">

													<li class="menu-item" title="Facebook">
														<a href="http://www.facebook.com">
															<i class="fab fa-facebook-f"></i>
														</a>
													</li>
													<li class="menu-item" title="Twitter">
														<a href="http://www.twitter.com">
															<i class="fab fa-twitter"></i>
														</a>
													</li>
													<li class="menu-item" title="Instagram">
														<a href="http://www.youtube.com">
															<i class="fab fa-instagram"></i>
														</a>
													</li>
													<li class="menu-item" title="linkedin">
														<a href="http://www.linkedin.com">
															<i class="fab fa-linkedin-in"></i>
														</a>
													</li>

												</ul><!-- #menu-social -->
											</div><!-- .menu-social-container -->
										</nav><!-- .social-navigation -->
									</div><!-- .site-social -->
								</div><!-- .social-navigation-wrapper -->
								
							</div><!-- header-top-right-content -->
						</div><!-- .header-top-content -->
					</div><!-- .wrapper -->
				</div><!-- .container -->

			</div><!-- .header-top-bar -->

			<div class="heading-content">
				<div class="container">
					<div class="content-wrapper">
						<div class="site-branding">
							<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							else :
								?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;
							$code_wing_test_project_description = get_bloginfo( 'description', 'display' );
							if ( $code_wing_test_project_description || is_customize_preview() ) :
								?>
								<p class="site-description">
									<?php
									echo $code_wing_test_project_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
									?>
								</p>
							<?php endif; ?>
						</div><!-- .site-branding -->

						<div class="theme-primary-navigation">
							<nav id="site-navigation" class="main-navigation">
								<div class="toggle-button-wrapper">
									<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="menu-toggle__text">Toggle Menu</span>
									</button>
								</div>

								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
										'fallback_cb'    => 'code_wing_test_project_menu_fallback',
									)
								);
								?>
							</nav><!-- #site-navigation -->
						</div><!-- #theme-primary-navigation -->
					</div><!-- .content-wrapper -->
				</div><!-- .container -->
			</div><!-- .heading-content -->
		</header><!-- #masthead -->
