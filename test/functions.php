<?php


if (!defined('TF_THEME_DIR')) {
    define('TF_THEME_DIR', get_theme_root().DIRECTORY_SEPARATOR.get_template().DIRECTORY_SEPARATOR);
}
if (!defined('TF_THEME_URL')) {
    define('TF_THEME_URL', get_theme_root_uri().'/'.get_template());
}
if (!defined('TF_THEME_DOMAIN')) {
	define('TF_THEME_DOMAIN', 'adaptivity_pro');
}
if(!defined('TF_THEME_PREFIX')) {
    define('TF_THEME_PREFIX', 'adaptivity_pro_prefix_');
}
add_theme_support('post-thumbnails');


//include 'inc/shortcodes.php';
require_once( TF_THEME_DIR.  '/inc/shortcodes.php' );
// Create Slider Post Type
require_once( TF_THEME_DIR.  '/inc/slider_post_type.php' );
// Create Slider
require_once(TF_THEME_DIR.  '/inc/slider.php' );


require_once TF_THEME_DIR .'/inc/slider_post_type.php';
    
