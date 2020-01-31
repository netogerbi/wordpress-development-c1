<?php
/*
 * Plugin Name: Recipe
 * Plugin URI: https://wordpress.org/plugins/health-check/
 * Description: My recipes
 * Version: 0.1.0
 * Author: Neto
 * Author URI: http://health-check-team.example.com
 * Text Domain: recipe
 * Domain Path: /languages
*/
// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

// Setup


// Includes
include( 'includes/activate.php' );

// Hooks
register_activation_hook( __FILE__, 'r_activate_plugin' );


// Shortcodes