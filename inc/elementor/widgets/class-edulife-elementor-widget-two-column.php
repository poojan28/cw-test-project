<?php

/**
 * Create elementor custom widget.
 *
 * @package edulife.
 */

/**
 * Exit if accessed directly.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Elementor\Plugin;


if ( ! class_exists( 'code_wing_test_project_Elementor_Widget_Two_Column' ) ) {

	/**
	 * Create slider one widget.
	 */
	class code_wing_test_project_Elementor_Widget_Two_Column extends \Elementor\Widget_Base {


		/**
		 * Get widget name.
		 *
		 * Retrieve oEmbed widget name.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @return string Widget name.
		 */
		public function get_name() {
			return 'code_wing_test_project_two_column';
		}


		/**
		 * Get widget title.
		 *
		 * Retrieve oEmbed widget title.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @return string Widget title.
		 */
		public function get_title() {
			return __( 'Edulife Two Column', 'code-wing-test-project' );
		}


		/**
		 * Get widget categories.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @return array Widget categories.
		 */
		public function get_categories() {
			return array( 'code-wing-test-project' );
		}


		/**
		 * Register oEmbed widget controls.
		 *
		 * Adds different input fields to allow the user to change and customize the widget settings.
		 *
		 * @since 1.0.0
		 * @access protected
		 */
		protected function _register_controls() {
			$this->column_left_controls();
			$this->column_right_controls();
		}


		/**
		 * Creates right column controls.
		 */
		private function column_left_controls() {

			$this->start_controls_section(
				'code_wing_test_project_two_column_left_section_content',
				array(
					'label' => __( 'Column Left', 'code-wing-test-project' ),
					'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				)
			);

			$this->add_control(
				'code_wing_test_project_two_column_left_section_content_heading',
				array(
					'label' => __( 'Heading', 'code-wing-test-project' ),
					'type'  => \Elementor\Controls_Manager::TEXT,
				)
			);

			$this->add_control(
				'code_wing_test_project_two_column_left_section_content_category',
				array(
					'label'   => __( 'Category', 'code-wing-test-project' ),
					'type'    => \Elementor\Controls_Manager::SELECT2,
					'options' => code_wing_test_project_customizer_get_terms(),
				)
			);

			$this->add_control(
				'code_wing_test_project_two_column_left_section_content_total_posts',
				array(
					'label'       => __( 'Total Posts', 'code-wing-test-project' ),
					'type'        => \Elementor\Controls_Manager::NUMBER,
					'description' => __( 'Enter the number of post that you want to display in slider. Set "0" to display according to your "Reading" settings or set "-1" to display all without limit.' ),
					'min'         => -1,
					'default'     => -1,
				)
			);

			$this->end_controls_section();
		}


		/**
		 * Creates right column controls.
		 */
		private function column_right_controls() {

			$this->start_controls_section(
				'code_wing_test_project_two_column_right_section_content',
				array(
					'label' => __( 'Column Right', 'code-wing-test-project' ),
					'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				)
			);

			$this->add_control(
				'code_wing_test_project_two_column_right_section_content_heading',
				array(
					'label' => __( 'Heading', 'code-wing-test-project' ),
					'type'  => \Elementor\Controls_Manager::TEXT,
				)
			);

			$this->add_control(
				'code_wing_test_project_two_column_right_section_content_category',
				array(
					'label'   => __( 'Category', 'code-wing-test-project' ),
					'type'    => \Elementor\Controls_Manager::SELECT2,
					'options' => code_wing_test_project_customizer_get_terms(),
				)
			);

			$this->add_control(
				'code_wing_test_project_two_column_right_section_content_total_posts',
				array(
					'label'       => __( 'Total Posts', 'code-wing-test-project' ),
					'type'        => \Elementor\Controls_Manager::NUMBER,
					'description' => __( 'Enter the number of post that you want to display in slider. Set "0" to display according to your "Reading" settings or set "-1" to display all without limit.' ),
					'min'         => -1,
					'default'     => 3,
				)
			);

			$this->end_controls_section();
		}


		/**
		 * Checks if elementor is in editor mode.
		 */
		private function is_editor_mode() {
			return Plugin::$instance->editor->is_edit_mode();
		}


		/**
		 * Left column contents.
		 */
		private function content_left_column() {
			$heading = $this->get_settings_for_display( 'code_wing_test_project_two_column_left_section_content_heading' );

			$category    = $this->get_settings_for_display( 'code_wing_test_project_two_column_left_section_content_category' );
			$total_posts = $this->get_settings_for_display( 'code_wing_test_project_two_column_left_section_content_total_posts' );

			$post_type = 'post';

			$args = array(
				'post_type'   => $post_type,
				'post_status' => 'publish',
				'numberposts' => $total_posts,
			);

			if ( ! empty( $category ) ) {
				$args['category'] = $category;
			}

			$post_array = array();

			$all_posts = get_posts( $args );
			if ( is_array( $all_posts ) && count( $all_posts ) > 0 ) {
				$count  = 1;
				$first  = 0;
				$second = 0;
				foreach ( $all_posts as $all_post ) {

					if ( $count < 3 ) {
						$post_array[ $first ][ $second ] = $all_post;
						$second++;
						$count ++;
					}
					if ( $count > 2 ) {
						$second = 0;
						$count  = 1;
						$first++;
						continue;
					}
				}
			}
			wp_reset_postdata();

			?>
			<div id="latest-news">
				<?php
				if ( $heading ) {
					?>
					<div class="section-heading">
						<h2 class='section-title'><?php echo esc_html( $heading ); ?></h2>
					</div>
					<?php
				}
				?>

				<div class="lastest-news__wrapper">
					<div class="latest-news__slider">

						<?php
						if ( is_array( $post_array ) && ! empty( $post_array ) ) {
							foreach ( $post_array as $posts ) {
								?>

								<div>
									<?php
									if ( is_array( $posts ) && ! empty( $posts ) ) {
										foreach ( $posts as $post ) {
											$title   = get_the_title( $post );
											$link    = esc_url( get_the_permalink( $post ) );
											$img     = get_the_post_thumbnail_url( $post, 'full' );
											$excerpt = get_the_excerpt( $post );
											?>
											<div class="slider-content">
												<div class="content">
													<a href="#" class="img-container img-overlay-1">
														<img src="<?php echo esc_url( $img ); ?>">
														<div class="img-overlay">
															<p><i class="fas fa-calendar-alt"></i>12 Nov 2020</p>
														</div>
													</a><!-- .img-container -->
													<figcaption class="latest-news__detail">

														<?php
														echo wp_kses_post(
															"
															<a href='{$link}'>
																<h3 class='column-title'>{$title}</h3>
															</a>
															"
														);

														echo wp_kses_post( wpautop( $excerpt ) );
														?>
													</figcaption><!-- .trending-detail -->
												</div><!-- .content -->
											</div><!-- .slider-content -->
											<!-- 2 -->
											<?php
										}
									}
									?>
									<!-- 1 -->

								</div>

								<?php
							}
						}
						?>

					</div>
					<a href="<?php echo esc_url( get_post_type_archive_link( $post_type ) ); ?>" class="own-prop btn-primary btn-prop"><?php esc_html_e( 'View All News', 'code-wing-test-project' ); ?></a>
				</div>
			</div><!-- #latest-news -->
			<?php
		}


		/**
		 * Right column contents.
		 */
		private function content_right_column() {
			$heading = $this->get_settings_for_display( 'code_wing_test_project_two_column_right_section_content_heading' );

			$category    = $this->get_settings_for_display( 'code_wing_test_project_two_column_right_section_content_category' );
			$total_posts = $this->get_settings_for_display( 'code_wing_test_project_two_column_right_section_content_total_posts' );

			$post_type = 'post';

			$args = array(
				'post_type'      => $post_type,
				'post_status'    => 'publish',
				'posts_per_page' => $total_posts,
			);

			if ( ! empty( $category ) ) {
				$args['tax_query'] = array( // phpcs:ignore
					array(
						'taxonomy' => 'category',
						'field'    => 'term_id',
						'terms'    => array( $category ),
					),
				);
			}

			$the_query = new WP_Query( $args );
			?>
			<div id="upcoming-events">
				<div class="section-heading">
					<?php if ( $heading ) { ?>
						<h2 class='section-title'><?php echo esc_html( $heading ); ?></h2>
					<?php } ?>
					<a href="<?php echo esc_url( get_post_type_archive_link( $post_type ) ); ?>"><?php esc_html_e( 'View All', 'code-wing-test-project' ); ?></a>
				</div><!-- .section-heading -->
				<div class="upcoming-events-wrapper">

					<?php
					if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) {
							$the_query->the_post();
							?>
							<div class="column">
								<div class="img-container">
									<a href="<?php the_permalink(); ?>" class="img-container ">
										<?php the_post_thumbnail( 'full' ); ?>
									</a>
								</div>
								<div class="content">
									<a href="<?php the_permalink(); ?>">
										<?php the_title( '<h3 class="column-title">', '</h3>' ); ?>
									</a>
									<div class="detail">
										<?php the_excerpt(); ?>
									</div>

									

									<div class="footer-content">

										<p class="date"><i class="fas fa-calendar-alt"></i>12 Nov 2020</p>
										<p class="working-time"><i class="fas fa-clock"></i>07:00 - 10:00</p>
										<p class="location"><i class="fas fa-map-marker-alt"></i>Jhapa, Nepal</p>

									</div>
								</div>
							</div><!-- .column -->
							<?php
						}
					}
					?>

				</div><!-- .upcoming-events-wrapper -->
			</div><!-- #upcoming-events -->
			<?php
			wp_reset_postdata();
		}


		/**
		 * Render the html to view.
		 */
		protected function render() {
			?>

			<!-- blog section -->
			<div id="blog-section">
				<div class="wrapper">

					<?php
					$this->content_left_column();

					$this->content_right_column();
					?>


				</div><!-- .wrapper -->
			</div><!-- #blog-section -->

			<?php
			$this->custom_scripts();
		}



		/**
		 * Custom scripts for this section.
		 */
		public function custom_scripts() {
			if ( ! $this->is_editor_mode() ) {
				return;
			}
			?>
			<script>
				jQuery(function($) {
					$('.latest-news__slider').not('.slick-initialized').slick({
						dots: false,
						infinite: false,
						speed: 300,
						slidesToShow: 1,
						centerPadding: '40px',
						slidesToScroll: 1,
					});
				});
			</script>
			<?php
		}
	}
}
