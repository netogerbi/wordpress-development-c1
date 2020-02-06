<?php
/*
 * Plugin Name: Recipe
 * Description: A simple WordPress plugin that allows user to create recipes and rate those recipes
 * Version: 1.0
 * Author: Udemy
 * Author URI: https://udemy.com
 * Text Domain: recipe
 */

if( !function_exists( 'add_action' ) ){
    echo "Hi there! I'm just a plugin, not much I can do when called directly.";
    exit;
}

// Setup
define( 'RECIPE_PLUGIN_URL', __FILE__ );

// Includes
include( 'includes/activate.php' );
include( 'includes/init.php' );
include( 'process/save-post.php' );
include( 'process/filter-content.php' );
include( 'includes/front/enqueue.php' );
include( 'process/rate-recipe.php' );
include( 'includes/admin/init.php' );
include( 'includes/admin/columns.php' );

// Hooks
register_activation_hook( __FILE__, 'r_activate_plugin' ); // register a hook
add_action( 'init', 'recipe_init' ); // hook when wordpress is initializing
add_action( 'save_post_recipe', 'r_save_post_admin', 10, 3 ); // hook whan a post is saved
add_filter( 'the_content', 'r_filter_recipe_content' ); // creates a filter when the content of the post will just be displayed
add_action( 'wp_enqueue_scripts', 'r_enqueue_scripts', 100 );

// adds the hook for ajax
// param 1 is wp_aja_{name of hook}
// param 2 is the name of the php function that will handle the response
add_action( 'wp_ajax_r_rate_recipe', 'r_rate_recipe' ); 
add_action( 'wp_ajax_nopriv_r_rate_recipe', 'r_rate_recipe' ); // no privileges... runs the ajax for any users
add_action( 'admin_init', 'recipe_admin_init' );

// Shortcodes
