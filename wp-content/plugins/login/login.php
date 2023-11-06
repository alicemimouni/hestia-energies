<?php
/*
Plugin Name: Alice Login Style
Plugin URI: http://wordpress.org/plugins/login/
Description: Customise the login interface
Author: Alice Richardeau
Version: 1.0
Author URI: https://github.com/alicerichardeau
*/

// Change the logo on the administration login page
//MODIFIES THE CSS
function wpm_login_style() {
    wp_enqueue_style( 'custom-login', plugin_dir_url('') . 'login/login-style.css' );
}
add_action( 'login_enqueue_scripts', 'wpm_login_style');

function add_url($url) {
    $url = 'https://github.com/alicerichardeau';
    return $url;
}

add_filter( 'login_headerurl', 'add_url');

