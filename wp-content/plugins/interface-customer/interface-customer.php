<?php
/*
Plugin Name: Dashboard Interface
Plugin URI: http://wordpress.org/plugins/interface-customer/
Description: Customer interface
Author: Alice Richardeau
Version: 1.0
Author URI: https://github.com/alicerichardeau
*/

//CREATION OF THE OWNER ROLE
//##############################
function owner_roles() {

        add_role( 'owner_role', 'Propriétaire', get_role( 'administrator' )->capabilities );

}

add_action( 'init', 'owner_roles' );

//DELETING ACCESS TO UNNECESSARY PAGES
//######################################
function remove_design() {

    if (!current_user_can('administrator') ) {
        // CHANGE CSS
        // ##########
        ?>
    <style type="text/css">
         #footer-thankyou, #footer-upgrade, #contextual-help-link, .user-comment-shortcuts-wrap, .user-language-wrap, .user-admin-color-wrap,  #show-settings-link, #dashboard_right_now, #wp-admin-bar-wp-logo, #wp-admin-bar-new-content, #dashboard_primary, #wpseo-dashboard-overview, .user-rich-editing-wrap, .user-admin-bar-front-wrap, .user-profile-picture a, #footer-left, .editor-post-publish-panel__prepublish .components-site-icon {
             display: none;
         }
         .edit-post-header a {
            background-image: url("img/hestia-logo.svg");
         }
         #wpcontent, #wpwrap {
             background-color: white;
         }
     </style>
 <?php
        // DELETE MENUS
        // ############
        remove_menu_page('edit-comments.php');
        remove_menu_page('themes.php');
        remove_menu_page('plugins.php');
        remove_menu_page('user-new.php');
        remove_menu_page('profile.php?wp_http_referer=%2Fhestia%2Fwp-admin%2Fusers.php');
        remove_menu_page('tools.php');
        remove_menu_page('options-general.php');
        remove_menu_page('edit.php?post_type=page');
        remove_menu_page('admin.php');
    }

}

add_action( 'admin_menu', 'remove_design' );

