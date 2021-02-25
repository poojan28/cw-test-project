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

if ( ! class_exists( 'code_wing_test_project_Elementor_Widget_Course_Slider' ) ) {

	/**
	 * Create course slider widget.
	 */
	class code_wing_test_project_Elementor_Widget_Course_Slider extends \Elementor\Widget_Base {

		/**
		 * Get widget name.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @return string Widget name.
		 */
		public function get_name() {
			return 'code_wing_test_project_course_slider';
		}

		/**
		 * Get widget title.
		 *
		 * @since 1.0.0
		 * @access public
		 *
		 * @return string Widget title.
		 */
		public function get_title() {
			return __( 'Edulife Course Slider' );
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
			$this->section_header();
			$this->section_content();
		}

		/**
		 * Creates section heading.
		 */
		private function section_header() {

			$this->start_controls_section(
				'code_wing_test_project_course_slider_section_header',
				array(
					'label' => __( 'Header', 'code-wing-test-project' ),
					'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				)
			);

			$this->add_control(
				'code_wing_test_project_course_slider_section_header_title',
				array(
					'label' => __( 'Title', 'code-wing-test-project' ),
					'type'  => \Elementor\Controls_Manager::TEXT,
				)
			);

			$this->add_control(
				'code_wing_test_project_course_slider_section_header_enable_filter',
				array(
					'label' => __( 'Enable Filter', 'code-wing-test-project' ),
					'type'  => \Elementor\Controls_Manager::SWITCHER,
				)
			);

			$this->end_controls_section();

		}

		/**
		 * Creates section content.
		 */
		private function section_content() {

			$this->start_controls_section(
				'code_wing_test_project_course_slider_section_content',
				array(
					'label' => __( 'Content', 'code-wing-test-project' ),
					'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				)
			);

			$this->add_control(
				'code_wing_test_project_course_slider_section_content_category',
				array(
					'label'   => __( 'Category', 'code-wing-test-project' ),
					'type'    => \Elementor\Controls_Manager::SELECT2,
					'options' => code_wing_test_project_customizer_get_terms(),
				)
			);

			$this->add_control(
				'code_wing_test_project_course_slider_section_content_total_posts',
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
		 * Checks if elementor is in editor mode.
		 */
		private function is_editor_mode() {
			return Plugin::$instance->editor->is_edit_mode();
		}

		/**
		 * This section header.
		 */
		private function section_header_content() {
			$heading       = $this->get_settings_for_display( 'code_wing_test_project_course_slider_section_header_title' );
			$enable_filter = $this->get_settings_for_display( 'code_wing_test_project_course_slider_section_header_enable_filter' );
			?>
			<div class="section-heading">

				<?php if ( $heading ) { ?>
				<h2 class="section-title">
					<?php echo esc_html( $heading ); ?>
				</h2>
				<?php } ?>

				<?php if ( $enable_filter ) { ?>
				<div class="select-option">
					<select name="" id="">
						<option value="">Popular (most viewed)</option>
						<option value="">less Popular</option>
						<option value="">Not Popular</option>
					</select>
				</div>
				<?php } ?>

			</div><!-- .section-heading -->
			<?php
		}

		/**
		 * This section loop content.
		 */
		private function section_loop_content() {

			$category = get_the_category();
			$cat_name = ! is_wp_error( $category ) && ! empty( $category[0]->name ) ? $category[0]->name : '';

			?>
			<div <?php post_class(); ?>>
				<div class="slider-content">
					<div class="content">
						<a href="<?php the_permalink(); ?>" class="img-container img-overlay-1">
							<?php the_post_thumbnail( 'full' ); ?>
							<div class="img-overlay">
								<p><i class="fas fa-clock"></i>10h:21m</p>
							</div>
						</a><!-- .img-container -->
						<figcaption class="trending-detail">

							<?php if ( $cat_name ) { ?>
							<div class="category">
								<a href="<?php the_permalink(); ?>">
									<p><?php echo esc_html( $cat_name ); ?></p>
								</a>
							</div>
							<?php } ?>

							<?php
							the_title(
								'<a href="' . esc_url( get_the_permalink() ) . '"><h3 class="column-title">',
								'</h3></a>'
							);
							?>

							<div class="section-footer">
								<div class="pricing">
									<div class="actual-price">
										<p>$93</p>
									</div><!-- .actual-price -->
									<div class="main-price">
										<del>$110</del>
									</div><!-- .main-price -->
								</div><!-- pricing -->
								<div class="star-rating">
									<div class="rating" title="Rated 5 out of 5">
										<a tabindex="0">
											<span style="width:100%">
												<strong class="rating">5</strong> out of <span>5</span>
											</span>
										</a>
									</div>
								</div><!-- .star-rating -->
							</div><!-- .section-footer -->

						</figcaption><!-- .trending-detail -->
					</div><!-- .content -->
				</div><!-- .slider-content -->
			</div>
			<?php
		}

		/**
		 * Render the html to view.
		 */
		protected function render() {

			$category    = $this->get_settings_for_display( 'code_wing_test_project_course_slider_section_content_category' );
			$total_posts = $this->get_settings_for_display( 'code_wing_test_project_course_slider_section_content_total_posts' );

			$args = array(
				'post_type'      => 'post',
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
				<!-- trending courses  -->
				<div id="trending-courses">
					<div class="wrapper">

						<?php $this->section_header_content(); ?>

						<?php if ( $the_query->have_posts() ) { ?>
						<div class="inner-section">
							<div class="inner-section__wrapper">
								<div class="multiple-slider">

									<?php
									// Loop me through.
									while ( $the_query->have_posts() ) {
										$the_query->the_post();
										$this->section_loop_content();
									}
									?>

								</div><!-- .trending-course-slider -->
							</div><!-- .inner-section__wrapper -->
						</div><!-- .inner-section -->
						<?php } ?>

					</div><!-- .wrapper -->
				</div><!-- #trending-courses -->
			<?php
			wp_reset_postdata();
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
				jQuery(function ($) {
					$('.multiple-slider').not('.slick-initialized').slick({
					dots: true,
					infinite: false,
					speed: 300,
					slidesToShow: 3,
					centerPadding: '40px',
					slidesToScroll: 1,
					responsive: [
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2,
								infinite: true,
								dots: false
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
					]
					});
				});
			</script>
			<?php
		}

	}
}

