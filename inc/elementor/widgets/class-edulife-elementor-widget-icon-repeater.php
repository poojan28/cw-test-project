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


if ( ! class_exists( 'code_wing_test_project_Elementor_Widget_Icon_Repeater' ) ) {

	/**
	 * Create slider one widget.
	 */
	class code_wing_test_project_Elementor_Widget_Icon_Repeater extends \Elementor\Widget_Base {



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
			return 'code_wing_test_project_icon_repeator';
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
			return __( 'Edulife Icon Repeater', 'code-wing-test-project' );
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
				'code_wing_test_project_icon_repeator_section_header',
				array(
					'label' => __( 'Header', 'code-wing-test-project' ),
					'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				)
			);

			$this->add_control(
				'code_wing_test_project_icon_repeator_section_header_title',
				array(
					'label' => __( 'Title', 'code-wing-test-project' ),
					'type'  => \Elementor\Controls_Manager::TEXT,
				)
			);

			$this->add_control(
				'code_wing_test_project_icon_repeator_section_header_description',
				array(
					'label' => __( 'Description', 'code-wing-test-project' ),
					'type'  => \Elementor\Controls_Manager::TEXTAREA,
				)
			);

			$this->add_control(
				'code_wing_test_project_icon_repeator_section_header_button_label',
				array(
					'label'   => __( 'Button Label', 'code-wing-test-project' ),
					'type'    => \Elementor\Controls_Manager::TEXT,
					'default' => __( 'Try Now', 'code-wing-test-project' ),
				)
			);

			$this->add_control(
				'code_wing_test_project_icon_repeator_section_header_button_link',
				array(
					'label' => __( 'Button Link', 'code-wing-test-project' ),
					'type'  => \Elementor\Controls_Manager::URL,
				)
			);

			$this->end_controls_section();
		}


		/**
		 * Creates section content.
		 */
		private function section_content() {

			$this->start_controls_section(
				'code_wing_test_project_icon_repeator_section_content',
				array(
					'label' => __( 'Content', 'code-wing-test-project' ),
					'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
				)
			);

			$repeater = new \Elementor\Repeater();

			$repeater->add_control(
				'card_title',
				array(
					'label'       => __( 'Card Title', 'code-wing-test-project' ),
					'type'        => \Elementor\Controls_Manager::TEXT,
					'label_block' => true,
				)
			);

			$repeater->add_control(
				'card_link',
				array(
					'label'       => __( 'Card Link', 'code-wing-test-project' ),
					'type'        => \Elementor\Controls_Manager::URL,
					'label_block' => true,
				)
			);

			$repeater->add_control(
				'card_icon',
				array(
					'label'       => __( 'Card Icon', 'code-wing-test-project' ),
					'type'        => \Elementor\Controls_Manager::ICON,
					'label_block' => true,
				)
			);

			$this->add_control(
				'code_wing_test_project_icon_repeator_section_content_repeater_cards',
				array(
					'label'       => __( 'Cards', 'code-wing-test-project' ),
					'type'        => \Elementor\Controls_Manager::REPEATER,
					'fields'      => $repeater->get_controls(),
					'default'     => array(),
					'title_field' => '{{{ card_title }}}',
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
			$heading     = $this->get_settings_for_display( 'code_wing_test_project_icon_repeator_section_header_title' );
			$description = $this->get_settings_for_display( 'code_wing_test_project_icon_repeator_section_header_description' );

			?>
				<div class="section-heading">

					<?php echo $heading ? wp_kses_post( "<h4 class='section-title'>{$heading}</h4>" ) : null; ?>
					<?php echo $description ? wp_kses_post( "<h2 class='sub-title'>{$description}</h2>" ) : null; ?>

					<?php $this->cta_btn(); ?>

				</div><!-- .section-heading -->
			<?php
		}


		private function cta_btn( $wrapper_class = 'desk-btn' ) {

			$button_label = $this->get_settings_for_display( 'code_wing_test_project_icon_repeator_section_header_button_label' );
			$button_link  = $this->get_settings_for_display( 'code_wing_test_project_icon_repeator_section_header_button_link' );
			$url          = ! empty( $button_link['url'] ) ? $button_link['url'] : '';
			$target       = ! empty( $button_link['is_external'] ) ? ' target="_blank"' : '';
			$nofollow     = ! empty( $button_link['nofollow'] ) ? ' rel="nofollow"' : '';

			if ( $button_label ) {
				?>
				<div class="<?php echo esc_attr( $wrapper_class ); ?>">
					<a href="<?php echo esc_url( $url ); ?>" <?php echo esc_attr( $target . $nofollow ); ?> class="btn-Secondary btn-prop primary-color"><?php echo esc_html( $button_label ); ?></a>
				</div>
				<?php
			}

		}


		/**
		 * Render the html to view.
		 */
		protected function render() {

			$cards = $this->get_settings_for_display( 'code_wing_test_project_icon_repeator_section_content_repeater_cards' );

			?>
			<!-- //services section -->
			<div id="services">
				<div class="container">
					<div class="wrapper">

						<?php $this->section_header_content(); ?>

						<div class="inner-section">
							<div class="inner-section__wrapper">
								<div class="service-slider">
									<?php
									if ( is_array( $cards ) && ! empty( $cards ) ) {
										foreach ( $cards as $card ) {
											$url      = ! empty( $card['url'] ) ? $card['url'] : '';
											$target   = ! empty( $card['is_external'] ) ? ' target="_blank"' : '';
											$nofollow = ! empty( $card['nofollow'] ) ? ' rel="nofollow"' : '';

											?>
											<div>
												<div class="slider-content">
													<a href="<?php echo esc_url( $url ); ?>" <?php echo esc_attr( $target . $nofollow ); ?>  class="content">

														<?php if ( ! empty( $card['card_icon'] ) ) { ?>
															<div class="icon">
																<span><i class="<?php echo esc_attr( $card['card_icon'] ); ?>"></i></span>
															</div>
														<?php } ?>

														<div class="column-title">

															<?php if ( ! empty( $card['card_title'] ) ) { ?>
																<h4><?php echo esc_html( $card['card_title'] ); ?></h4>
															<?php } ?>

															<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/arrow.png' ); ?>">
														</div>
													</a><!-- .content -->
												</div><!-- .slider-content -->
											</div>
											<?php
										}
									}
									?>

								</div><!-- .trending-course-slider -->

								<?php $this->cta_btn( 'mob-btn' ); ?>

							</div><!-- .inner-section__wrapper -->
						</div><!-- .inner-section -->
					</div><!-- .wrapper -->
				</div>
			</div><!-- services -->
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
					$('.service-slider').not('.slick-initialized').slick({
						dots: true,
						infinite: false,
						speed: 300,
						slidesToShow: 4,
						centerPadding: '40px',
						slidesToScroll: 1,
						responsive: [{
								breakpoint: 1600,
								settings: {
									slidesToShow: 3,
									slidesToScroll: 1,
									infinite: true
								}
							},
							{
								breakpoint: 1024,
								settings: {
									slidesToShow: 2,
									slidesToScroll: 2
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
