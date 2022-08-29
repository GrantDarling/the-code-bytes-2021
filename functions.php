<?php
/**
 * The Code Bytes 2021 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The_Code_Bytes_2021
 */

/**
 * Includes Sections 
 */

include 'shortcodes.php';

if ( ! defined( '_S_VERSION' ) ) { define( '_S_VERSION', '1.0.0' ); }

if ( ! function_exists( 'the_code_bytes_2021_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function the_code_bytes_2021_setup() {
		load_theme_textdomain( 'the-code-bytes-2021', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'the-code-bytes-2021' ),
			)
		);

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
				'the_code_bytes_2021_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'the_code_bytes_2021_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_code_bytes_2021_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'the_code_bytes_2021_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_code_bytes_2021_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_code_bytes_2021_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Primary Sidebar', 'the-code-bytes-2021' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'the-code-bytes-2021' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
 
		register_sidebar( array(
				'name'          => __( 'Secondary Sidebar', 'the-code-bytes-2021' ),
				'id'            => 'sidebar-2',
				'description'   => esc_html__( 'Add widgets here.', 'the-code-bytes-2021' ),
				'before_widget' => '<section id="sidebar-2" class="sidebar">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
		) 
	);

		register_sidebar( array(
				'name'          => __( 'Tertiary Sidebar', 'the-code-bytes-2021' ),
				'id'            => 'sidebar-3',
				'description'   => esc_html__( 'Add widgets here.', 'the-code-bytes-2021' ),
				'before_widget' => '<section id="sidebar-3" class="sidebar">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
		) 
	);
}
add_action( 'widgets_init', 'the_code_bytes_2021_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_code_bytes_2021_scripts() {
	wp_enqueue_style( 'the-code-bytes-2021-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'the-code-bytes-2021-style', 'rtl', 'replace' );

	wp_enqueue_script( 'the-code-bytes-2021-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_code_bytes_2021_scripts' );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Remove Gutenberg Block Library CSS from loading on the frontend
 */
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

/**
 * Change Search FormName
 */

 add_filter( 'get_search_form', 'rlv_search_form' );
function rlv_search_form( $form ) {
    $form = str_replace( 'Search &hellip;', 'Search &hellip; Minimum 3 letters', $form );
    return $form;
}

/**
 * getPostsByTag Function 
 */

function getArticlesByTag($tagName, $postsPerPage, $articleType) {
		$args = array(
			'posts_per_page'  => $postsPerPage,
			'post_status' => 'publish',
			'tag_slug__in' => $tagName,
			'orderby' => 'meta_value_num',
			'order' => 'DESC'
		);
		$the_query = new WP_Query($args); 

		//the loop
		if($the_query->have_posts()) {
			while ( $the_query->have_posts() ){
				$the_query->the_post();
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');

				echo '<a class="categories__article" data-article=' . $articleType . ' href="' . get_permalink() . '"><div class="category__body" style="background: linear-gradient(158deg, rgb(14 14 14 / 71%) 0%, rgb(0 0 0) 100%),  url( ' . $featured_img_url . ') center center no-repeat;width: 100%; height: 100%;text-align: center;display: flex;
    justify-content: center;
    align-items: center;">' . get_the_title() . '</div><div class="category__footer">' . get_the_date() . '</div></a>';
			}
		}

	}

/**
 * Generic Newsletter 
 */

 function newsletter() {
	 echo do_shortcode('[newsletter]');
 }


// Disable media player
 function deregister_media_elements(){
   wp_deregister_script('wp-mediaelement');
   wp_deregister_style('wp-mediaelement');
}
add_action('wp_enqueue_scripts','deregister_media_elements');

function get_all_articles_by_category( ) {
	
	$all_categories = get_categories( array(
			'orderby' => 'name',
			'order'   => 'ASC'
	) );
 
	foreach( $all_categories as $category ) {
		$get_category_posts = new WP_Query( array(
						'category_name'  => $category->slug,
						'posts_per_page' => -1
				)  );
 
		if ( $get_category_posts->have_posts() && $category->slug != 'archive' ) {
				echo '<div class="category-dropdown-inner-container">';
					echo '<h2 class="category-title">'. esc_html($category->name) .'</h2>';
						echo '<div class="category-article-anchor-container">';
							while ( $get_category_posts->have_posts() ) {
									$get_category_posts->the_post();
									echo'<a href="'. get_permalink() .'" class="category-article-anchor"><p>' . get_the_title() . '</p></a>';
							}
						echo '</div>';
				echo '</div>';
		} 

		wp_reset_postdata();
	} 
}

