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
			
			<div class="header-container-wrapper">
				
				<div class="headingTop-with-nav">
					<div class="header-top-bar">
						<div class="header-container">
							<div class="wrapper">
								<div class="header-top-content">
									<div class="header-top-left-content">
										<ul class="contact-information">
											<li class="list">
												<span class="gov-reg">
													Nepal Gov. Reg. No: 116524/070/071
												</span>
											</li>

											<li class="list">
												<span class="reg">
													Tourism Reg. No: 1644/070
												</span>
											</li>

											<li class="list">
												<span class="taan">
													TAAN Reg No. 0668
												</span>
											</li>

										</ul><!-- .contact-infomation -->
									</div><!-- .header-top-left-content -->
									<div class="header-top-right-content">
										<ul class="contact-information">
											<li class="list">
												<span class="cell">
													Phone: +977 1 4420444
												</span>
											</li>

											<li class="list">
												<span class="phone">
													Cell: +977 9851052042
												</span>
											</li>


										</ul><!-- .contact-infomation -->
										
									</div><!-- header-top-right-content -->
								</div><!-- .header-top-content -->
							</div><!-- .wrapper -->
						</div>
					</div><!-- .header-top-bar -->

					<div class="heading-content">
						<div class="header-container">
							<div class="content-wrapper">
							<div class="site-branding">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a>
                                                    
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
						</div>
						
						
					</div><!-- .heading-content -->
				</div>
			</div><!-- header-container-wrapper -->
			
		</header><!-- #masthead -->
