<?php


if ( function_exists( 'register_nav_menu' )) 

    
if ( function_exists( 'add_theme_support' )) {
          add_theme_support( 'post-thumbnails' );
     }

// theme options
get_template_part('nhp', 'options');


// Create Slider Post Type
require(get_template_directory() . '/slider/slider_post_type.php' );
// Create Slider
require(get_template_directory() . '/slider/slider.php' );

//Add shortcodes 
include('shortcodes.php');

// content <p> issue 
remove_filter ('the_content', 'wpautop');


// widgets 
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Sidebar-right',
        'id'   => 'sidebar-right',
        'before_widget' => '<div id="%1$s" class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

register_sidebar(array(
        'name' => 'Sidebar-left',
        'id'   => 'sidebar-left',
        'before_widget' => '<div id="%1$s" class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

register_sidebar(array(
        'name' => 'Top-widget',
        'id'   => 'top-widget',
        'before_widget' => '<div id="%1$s" class="span6 widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ));

register_sidebar(array(
        'name' => 'Top-widget-1/3',
        'id'   => 'top-widget-3',
        'before_widget' => '<div id="%1$s" class="span4 widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ));

register_sidebar(array(
        'name' => 'Top-widget-1/4',
        'id'   => 'top-widget-4',
        'before_widget' => '<div id="%1$s" class="span3 widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ));

register_sidebar(array(
        'name' => 'Bottom-widget-1/2',
        'id'   => 'bottom-widget-2',
        'before_widget' => '<div id="%1$s" class="span6 widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ));

register_sidebar(array(
        'name' => 'Bottom-widget-1/3',
        'id'   => 'bottom-widget-3',
        'before_widget' => '<div id="%1$s" class="span4 widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ));
register_sidebar(array(
        'name' => 'Bottom-widget-1/4',
        'id'   => 'bottom-widget-4',
        'before_widget' => '<div id="%1$s" class="span3 widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ));

register_sidebar(array(
        'name' => 'Footer-widget-1/2',
        'id'   => 'footer-widget-2',
        'before_widget' => '<div id="%1$s" class="span6">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ));

register_sidebar(array(
        'name' => 'Footer-widget-1/3',
        'id'   => 'footer-widget-3',
        'before_widget' => '<div id="%1$s" class="span4">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ));
register_sidebar(array(
        'name' => 'Footer-widget-1/4',
        'id'   => 'footer-widget-4',
        'before_widget' => '<div id="%1$s" class="span3">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ));

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
 
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;

wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
}

function custom_dashboard_help() {
echo '<p>Welcome to Custom Blog Theme! Need help? Contact the developer <a href="mailto:yourusername@gmail.com">here</a>. For WordPress Tutorials visit: <a href="http://www.wpbeginner.com" target="_blank">WPBeginner</a></p>';
}


/* #######################################################################

  Custom Meta for Single to deal with Post Formats

####################################################################### */

add_action("admin_init", "single_format_init");
add_action('save_post', 'save_single_format_meta');

  function single_format_init(){
    add_meta_box("single_format-meta", __("Post Formats:" , "meanthemes"), "single_format_meta_options", "post", "normal", "core");
  }

  function single_format_meta_options(){
    global $post;
    $custom = get_post_custom($post->ID);
    $single_format_link_url = $custom["single_format_link_url"][0];
    $single_format_link_text = $custom["single_format_link_text"][0];
    $single_format_video = $custom["single_format_video"][0];
    $single_format_audio = $custom["single_format_audio"][0];
    $single_format_quote = $custom["single_format_quote"][0];
    
?>
  <div>
    <div><i><?php _e("To keep things simple, please fill out the following below per post format, you must ensure you also choose the right post format from the 'Format' panel for the below to work" , "meanthemes"); ?></i></div>
    <h4><?php _e("Link Format" , "meanthemes"); ?></h4>
    <label><?php _e("URL (Web Address):" , "meanthemes"); ?></label><br /><input name="single_format_link_url" type="text" value="<?php echo $single_format_link_url; ?>" class="large-text" /><br />
    <label><?php _e("Link text" , "meanthemes"); ?></label><br /><input name="single_format_link_text" type="text" value="<?php echo $single_format_link_text; ?>" class="large-text" /><br />
    <h4><?php _e("Video Format:" , "meanthemes"); ?></h4>
    <label><?php _e("Video Embed Code:" , "meanthemes"); ?></label><br />
    <textarea class="large-text" name="single_format_video" rows="10" value="<?php echo esc_attr($single_format_video); ?>"><?php echo esc_attr($single_format_video); ?></textarea>
    <br />
<h4><?php _e("Audio Format:" , "meanthemes"); ?></h4>
<label><?php _e("Audio Web Address (URL - you can upload via WordPress and then copy link into here):" , "meanthemes"); ?></label><br />
<input name="single_format_audio" type="text" value="<?php echo $single_format_audio; ?>" class="large-text" /><br />
<br />
    <h4><?php _e("Quote Format" , "meanthemes"); ?></h4>
    <label><?php _e("Source:" , "meanthemes"); ?></label><br /><input name="single_format_quote" type="text" value="<?php echo $single_format_quote; ?>" class="large-text" /><br /><br />
    
    </div>
    
<?php
  }

function save_single_format_meta(){
  global $post;
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
  return $post->ID;
  } else {
  update_post_meta($post->ID, "single_format_link_url", $_POST["single_format_link_url"]);
  update_post_meta($post->ID, "single_format_link_text", $_POST["single_format_link_text"]);
  update_post_meta($post->ID, "single_format_video", balanceTags( $_POST["single_format_video"] ) );
  update_post_meta($post->ID, "single_format_audio", $_POST["single_format_audio"]);
  update_post_meta($post->ID, "single_format_quote", $_POST["single_format_quote"]);
  
  }
}

add_action("admin_init", "single_format_init");
add_action('save_post', 'save_single_format_meta');

add_action( 'after_setup_theme', 'clean_bootstrap_theme_setup' );
if ( ! function_exists( 'clean_bootstrap_theme_setup' ) ):
function clean_bootstrap_theme_setup() {
  add_theme_support( 'automatic-feed-links' );
  /**
   * Adds custom menu with wp_page_menu fallback
   */
  register_nav_menus( array(
    'main-menu' => __( 'Main Menu', 'bootstrapwp' ),
  ) );
  add_theme_support( 'post-formats', array( 'image', 'gallery', 'link', 'quote', 'video' ) );
}
endif;


 

 
add_action( 'wp_enqueue_scripts', 'wpcandy_load_javascript_files' );
 
// Register some javascript files, because we love javascript files. Enqueue a couple as well 
 
function wpcandy_load_javascript_files() {
 
  wp_register_script( 'info-caroufredsel', get_template_directory_uri() . '/js/jquery.carouFredSel-5.5.0-packed.js', array('jquery'), '5.5.0', true );
  wp_register_script( 'info-carousel-instance', get_template_directory_uri() . '/js/info-carousel-instance.js', array('info-caroufredsel'), '1.0', true );
 
  wp_register_script( 'jquery.flexslider', get_template_directory_uri().'/js/jquery.flexslider-min.js', array('jquery'), '1.7', true );
  wp_register_script( 'home-page-main-flex-slider', get_template_directory_uri().'/js/home-page-main-flex-slider.js', array('jquery.flexslider'), '1.0', true );
 
  wp_enqueue_script( 'info-carousel-instance' );
  
  if ( is_front_page() ) {
    wp_enqueue_script('home-page-main-flex-slider');
  }
 
}

// Flex slider

add_action( 'wp_enqueue_scripts', 'dd_slider_scripts' );

function dd_slider_scripts() {
        wp_enqueue_script( 'jquery' );
 
        wp_enqueue_style( 'flex-style', get_template_directory_uri() . '/slider/css/flexslider.css' );
 
        wp_enqueue_script( 'flex-script', get_template_directory_uri() .  '/slider/js/jquery.flexslider-min.js', array( 'jquery' ), false, true );
    }
    add_action( 'wp_enqueue_scripts', 'dd_slider_scripts' );
?>