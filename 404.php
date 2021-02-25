<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package edulife
 */

get_header();
?>
<div id="custom-header">
    <div class="custom-header-content has-background-image <?php echo esc_attr( $bg_class ); ?>" style="background-image:url('<?php echo esc_url( $thumbnail_url ); ?>');">
        <div class="container">
            <div class="inner-wrapper">
                <header class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'code-wing-test-project' ); ?>
                    </h1>
                </header><!-- .page-header -->
                <!-- breadcrumb -->
                <div id="breadcrumb">
                    <div class="breadcrumbs breadcrumb-trail">
                        <ul class="trail-items">
                            <li class="trail-item trail-begin"><a href="" rel="home"><span>Home</span></a></li>
                            <li class="trail-item trail-end"><span>Inner-page</span></li>
                        </ul>
                    </div>
                </div><!-- #breadcrumb -->
            </div><!-- .inner-wrapper -->
        </div><!-- .container -->
    </div><!-- .custom-header-content -->
</div><!-- #custom-header -->

<main id="primary" class="site-main">
    <div class="container">
        <section class="error-404 not-found">
            <div class="page-content">
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'code-wing-test-project' ); ?>
                </p>

                <?php get_search_form(); ?>

            </div><!-- .page-content -->
        </section><!-- .error-404 -->
    </div>
</main><!-- #main -->

<?php
get_footer();
