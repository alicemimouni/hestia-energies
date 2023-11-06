<?php
// Add support for highlighted images
add_theme_support( 'post-thumbnails' );
// customise the size of the images
add_image_size('my-fun-size', 320, 150, true);

// Automatically add the site title to the site header
add_theme_support( 'title-tag' );

// SCRIPT LOADS
// ############
function wpdocs_theme_name_scripts() {
    // js bootstrap
    wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', [], false, true); // false : version number added automatically : current version of wordpress
    wp_enqueue_script('bootstrap-js');
    // script js
    wp_register_script( 'script-js', get_template_directory_uri() . '/js/script.js', [], false, true); 
    wp_enqueue_script('script-js');
}
// wp_enqueue_scripts is the hook to use when enqueuing scripts and styles on the front end - used for enqueuing both scripts and styles.
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

// SETUP
// #####
function edn_theme_setup() {
    // navbars
    register_nav_menus(
     array(
           'nav' => __( 'navbar'),
           'nav_footer' => __('navbar_footer')
     )
    );
   }
// after_setup_theme / hook call during each page load, after the theme is initialized
   add_action( 'after_setup_theme', 'edn_theme_setup' );
