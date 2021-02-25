<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package edulife
 */

?>

<article <?php post_class( 'grid-item' ); ?> id="post-<?php the_ID(); ?>">
    <div class="wrapper">
        <div class="img-container">
            <?php
				code_wing_test_project_post_thumbnail();
			?>
        </div><!-- img-container -->
        <div class="inner-content-wrapper">
            <!-- <div class="left-content">
                <div class="blog-date-wrapper">
                    <div class="blog-day">13</div>
                    <div class="blog-month">Nov</div>
                </div>
            </div> -->
            <div class="right-content">

                <header class="entry-header">
                    <?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
					?>
                </header><!-- .entry-header -->
                <div class="comment-cat">
                    <?php
                    code_wing_test_project_posted_by();
                    code_wing_test_project_entry_comment_link();
					code_wing_test_project_entry_category_lists();
				?>
                </div>

                <div class="entry-content">
                    <div class="excerpt">
                        <?php the_excerpt(); ?>
					</div>
					<div class="post-button">
						<a class="btn-primary btn-prop own-prop"
							href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'code-wing-test-project' ); ?></a>
						<!-- readmore -->
					</div>
                   
                </div><!-- .entry-content -->
            </div>
        </div>




    </div><!-- wrapper -->

</article><!-- #post-<?php the_ID(); ?> -->
