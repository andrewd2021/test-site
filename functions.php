<?php
//add dynamic title tag support
function avct_theme_support() {
    add_theme_support('title-tag');
}
add_action('after_theme_setup', 'avct_theme_support');

function config_post_thumbnails () {
    add_theme_support( 'post-thumbnails' );
};
add_action( 'after_setup_theme' , 'config_post_thumbnails' );

function config_custom_logo() {
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme' , 'config_custom_logo' );

function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

function avct_menus() {
    $locations = array(
        'primary' => "Desktop Primary",
        'footer' => "Footer Menu Items",
        'footer_one' => "F Menu Items One",
        'footer_two' => "F Menu Items Two"
    );
    register_nav_menus($locations);
}
add_action('init', 'avct_menus');

function generate_options_css() {
    $ss_dir = get_stylesheet_directory();
    ob_start(); // Capture all output into buffer
    require($ss_dir . '/inc/custom-styles.php'); // Grab the custom-style.php file
    $css = ob_get_clean(); // Store output in a variable, then flush the buffer
    file_put_contents($ss_dir . '/assets/css/custom-styles.css', $css, LOCK_EX); // Save it as a css file
}
add_action( 'acf/save_post', 'generate_options_css', 20 );

function avct_register_styles() {
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('avct-style', get_template_directory_uri() . "/style.css", array('avct-bootstrap'), '1.0', 'all');
    wp_enqueue_style('avct-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '4.6.0', 'all');
    wp_enqueue_style('avct-acf-css', get_template_directory_uri() . "/assets/css/custom-styles.css", array(), '1.0', 'all');
    wp_enqueue_style('avct-animate', get_template_directory_uri() . "/assets/css/animate.css", array(), '4.6.0', 'all');
    wp_enqueue_style('avct-magnific', get_template_directory_uri() . "/assets/css/magnific-popup.css", array(), '4.6.0', 'all');
    wp_enqueue_style('avct-icofont', get_template_directory_uri() . "/assets/css/icofont.min.css", array(), '1.0', 'all');
    wp_enqueue_style('avct-swiper', get_template_directory_uri() . "/assets/css/swiper.min.css", array(), '1.0', 'all');
    wp_enqueue_style('avct-lightcase', get_template_directory_uri() . "/assets/css/lightcase.css", array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'avct_register_styles');

function avct_register_scripts() {
    wp_enqueue_script('avct-bootstrap-js', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(), '1.0', true);
    wp_enqueue_script('avct-jquery', get_template_directory_uri() . "/assets/js/jquery.js", array(), '3.3.1', true);
    wp_enqueue_script('avct-counter', get_template_directory_uri() . "/assets/js/counter-up.js", array(), '1.0', true);
    wp_enqueue_script('avct-jquery-magnific', get_template_directory_uri() . "/assets/js/magnific-popup.min.js", array(), '1.0', true);
    wp_enqueue_script('avct-isotope', get_template_directory_uri() . "/assets/js/isotope.pkgd.js", array(), '1.0', true);
    wp_enqueue_script('avct-lightcase-js', get_template_directory_uri() . "/assets/js/lightcase.js", array(), '1.0', true);
    wp_enqueue_script('avct-progress', get_template_directory_uri() . "/assets/js/progress.js", array(), '1.0', true);
    wp_enqueue_script('avct-swiper-js', get_template_directory_uri() . "/assets/js/swiper.min.js", array(), '1.0', true);
    wp_enqueue_script('avct-functions-js', get_template_directory_uri() . "/assets/js/functions.js", array(), '1.0', true); 
}
add_action('wp_enqueue_scripts', 'avct_register_scripts');

function avct_widgetareas() {
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );
}
add_action('widgets_init', 'avct_widgetareas');

function wp_comment_count() { 
 
    function comment_count( $count ) {
        if ( ! is_admin() ) {
            $comments_by_type = &separate_comments(get_comments('status=approve'));
            return count($comments_by_type['comment']);
        } else {
            return $count;
        }
    }
    add_filter('get_comments_number', 'comment_count', 0);
    $actual_comment_count = get_comments_number();
    return $actual_comment_count;
}
add_shortcode('actual_comment_count', 'wp_comment_count'); 

function create_course_post_type() {
    register_post_type( 'courses',
      array(
        'description'   => 'Holds our course data',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'labels' => array(
        'name' => __( 'Courses' ),
        'singular_name' => __( 'Course' )
      ),
        'public' => true,
        'has_archive' => true,
        'template' => array('templates')
      )
    );
  }
  add_action( 'init', 'create_course_post_type' );

function currentYear(){
    return date('Y');
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'social-link-settings',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'social-link-settings',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'social-link-settings',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'General Settings',
		'menu_title'	=> 'General',
		'parent_slug'	=> 'social-link-settings',
	));
}


?>