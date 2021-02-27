<?php
/**
 * wen themes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package edulife
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


if ( ! function_exists( 'code_wing_test_project_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function code_wing_test_project_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wen themes, use a find and replace
		 * to change 'code-wing-test-project' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'code-wing-test-project', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'code-wing-test-project' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'code_wing_test_project_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'code_wing_test_project_setup' );



if ( ! function_exists( 'code_wing_test_project_menu_fallback' ) ) {

	/**
	 * If no navigation menu is assigned, this function will be used for the fallback.
	 *
	 * @see https://developer.wordpress.org/reference/functions/wp_nav_menu/ for available $args arguments.
	 * @param  mixed $args Menu arguments.
	 * @return string $output Return or echo the add menu link.
	 */
	function code_wing_test_project_menu_fallback( $args ) {
		if ( ! current_user_can( 'edit_theme_options' ) ) {
			return;
		}

		$link  = $args['link_before'];
		$link .= '<a href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '" title="' . esc_attr__( 'Opens in new tab', 'code-wing-test-project' ) . '" target="__blank">' . $args['before'] . esc_html__( 'Add a menu', 'code-wing-test-project' ) . $args['after'] . '</a>';
		$link .= $args['link_after'];

		if ( false !== stripos( $args['items_wrap'], '<ul' ) || false !== stripos( $args['items_wrap'], '<ol' ) ) {
			$link = "<li class='menu-item'>{$link}</li>";
		}

		$output = sprintf( $args['items_wrap'], $args['menu_id'], $args['menu_class'], $link );

		if ( ! empty( $args['container'] ) ) {
			$output = sprintf( '<%1$s class="%2$s" id="%3$s">%4$s</%1$s>', $args['container'], $args['container_class'], $args['container_id'], $output );
		}

		if ( $args['echo'] ) {
			echo wp_kses_post( $output );
		}

		return $output;

	}
}


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function code_wing_test_project_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'code_wing_test_project_content_width', 640 );
}
add_action( 'after_setup_theme', 'code_wing_test_project_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function code_wing_test_project_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'code-wing-test-project' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'code-wing-test-project' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebars(
		4,
		array(
			'name'          => esc_html__( 'Footer Widgets %d', 'code-wing-test-project' ),
			'id'            => 'footer-widgets',
			'description'   => esc_html__( 'Add footer widget here.', 'code-wing-test-project' ),
			'before_widget' => '<aside id="%1$s" class="wp-widget widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'code_wing_test_project_widgets_init' );

/**
 * Convert hexdec color string to rgb(a) string.
 *
 * @link https://mekshq.com/how-to-convert-hexadecimal-color-code-to-rgb-or-rgba-using-php/
 *
 * @param string $color Color in hex value | eg: #ffffff or #fff.
 * @param string $opacity Color opacity for RGBA value. If false provided, it will return RGB value.
 */
function code_wing_test_project_colors_hex2rgba( $color, $opacity = false ) {

	$default = 'rgb(0,0,0)';

	// Return default if no color provided.
	if ( empty( $color ) ) {
		return $default;
	}

	// Sanitize $color if "#" is provided.
	if ( '#' === $color[0] ) {
		$color = substr( $color, 1 );
	}

	// Check if color has 6 or 3 characters and get values.
	if ( strlen( $color ) === 6 ) {
		$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
	} elseif ( strlen( $color ) === 3 ) {
		$hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
	} else {
		return $default;
	}

	// Convert hexadec to rgb.
	$rgb = array_map( 'hexdec', $hex );

	// Check if opacity is set(rgba or rgb).
	if ( $opacity ) {
		if ( abs( $opacity ) > 1 ) {
			$opacity = 1.0;
		}
		$output = 'rgba(' . implode( ',', $rgb ) . ',' . $opacity . ')';
	} else {
		$output = implode( ',', $rgb );
	}
	$output = '';
	$output = implode( ',', $rgb );

	// Return rgb(a) color string.
	return $output;
}


function code_wing_test_project_css_variables() {
	$primary_color = '#242A3A';
	$secondary_color = '#0089C9';
	?>
	<style id="code_wing_test_project-css-variables">
		:root {
			--Code-wing-test-primary-color: <?php echo esc_attr( $primary_color ); ?>;
			--Code-wing-test-primary-rbga: <?php echo esc_attr( code_wing_test_project_colors_hex2rgba( $primary_color, 0.7 ) ); ?>;
			--Code-wing-test-secondary-rbga: <?php echo esc_attr( code_wing_test_project_colors_hex2rgba( $secondary_color, 0.7 ) ); ?>;
			--Code-wing-test-secondary-color: <?php echo esc_attr( $secondary_color ); ?>;
		}
	</style>
	<?php
}
/**
 * Enqueue scripts and styles.
 */
function code_wing_test_project_scripts() {
	code_wing_test_project_css_variables();
	wp_enqueue_style( 'font awesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css', array(), _S_VERSION );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick-theme.css', array(), _S_VERSION );
	wp_enqueue_style( 'code-wing-test-project-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'code-wing-test-project-style', 'rtl', 'replace' );

	wp_enqueue_script( 'code-wing-test-project-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'code-wing-test-project-slick', get_template_directory_uri() . '/assets/slick/slick.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'code-wing-test-project-trap-focus', get_template_directory_uri() . '/assets/js/trap-focus.js', array( 'jquery' ), _S_VERSION, true );
	wp_register_script( 'code-wing-test-project-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), _S_VERSION, true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'code-wing-test-project-custom-js' );
}
add_action( 'wp_enqueue_scripts', 'code_wing_test_project_scripts' );

/**
 * Filter the excerpt length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function code_wing_test_project_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'code_wing_test_project_excerpt_length' );



if ( ! function_exists( 'code_wing_test_project_customizer_get_terms' ) ) {

	/**
	 * This function returns the formated array of terms
	 * for the given taxonomy name, for the customizer dropdown.
	 *
	 * @param string $tax_name Taxonomy name. Default is "category".
	 * @param bool   $hide_empty Takes boolean value, pass true if you want to hide empty terms.
	 * @return array $items Formated array for the dropdown options for the customizer.
	 */
	function code_wing_test_project_customizer_get_terms( $tax_name = 'category', $hide_empty = true ) {

		if ( empty( $tax_name ) ) {
			return;
		}

		$items = array();
		$terms = get_terms(
			array(
				'taxonomy'   => $tax_name,
				'hide_empty' => $hide_empty,
			)
		);

		if ( is_array( $terms ) && count( $terms ) > 0 ) {
			foreach ( $terms as $term ) {
				$term_name = ! empty( $term->name ) ? $term->name : false;
				$term_id   = ! empty( $term->term_id ) ? $term->term_id : '';
				if ( $term_name ) {
					$items[ $term_id ] = $term_name;
				}
			}
		}

		return $items;
	}
}


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/elementor/class-edulife-load-elementor-widgets.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


