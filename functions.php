<?php

if ( ! function_exists( 'wp_theme_setup' ) ) :

function wp_theme_setup() {
	
	load_theme_textdomain( 'wp_theme', get_template_directory() . '/languages' );
    
	add_theme_support( 'automatic-feed-links' );

	
	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'wp_theme' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wp_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}

endif;
add_action( 'after_setup_theme', 'wp_theme_setup' );

function wp_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_theme_content_width', 0 );


function wp_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wp_theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp_theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wp_theme_widgets_init' );


function wp_theme_scripts() {
	wp_enqueue_style( 'wp_theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wp_theme-navigation', get_template_directory_uri() . '/js/script.js', array(), '20151215', true );

	wp_enqueue_script( 'wp_theme-skip-link-focus-fix', get_template_directory_uri() . '/js/script.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_theme_scripts' );






function theme_add_bootstrap() {
wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap.min.css' );
wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );





function auto_featured_image() {
    global $post;
 
    if (!has_post_thumbnail($post->ID)) {
        $attached_image = get_children( "post_parent=$post->ID&amp;post_type=attachment&amp;post_mime_type=image&amp;numberposts=1" );
         
      if ($attached_image) {
              foreach ($attached_image as $attachment_id => $attachment) {
                   set_post_thumbnail($post->ID, $attachment_id);
              }
         }
    }
}







require get_template_directory() . '/inc/template-tags.php';


