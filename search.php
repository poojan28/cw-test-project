<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package edulife
 */

get_header();

	code_wing_test_project_banner();
?>

<main id="primary" class="site-main">
	<div class="container">
		<header class="page-header">
			<h4 class="page-title">
				<?php
				/* translators: %s search query. */
				printf( esc_html__( 'Search Results for: %s', 'code-wing-test-project' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h4>
		</header><!-- .page-header -->
		<div class="blog-post">
			<div class="wrapper">
				<div class="grid-collection">
					<?php
					if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							/*
									* Include the Post-Type-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Type name) and that will be used instead.
									*/
							get_template_part( 'template-parts/content' );
						endwhile;
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>
				</div><!-- .grid-collection -->
				<?php the_posts_pagination(); ?>
			</div><!-- .wrapper -->
		</div><!-- .blog-post -->
	</div><!-- .container -->
</main><!-- #main -->
<?php
get_footer();