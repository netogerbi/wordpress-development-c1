<?php
// this file is optional,
// but wordpress load this file and execute code inside

// setup
define( 'JU_DEV_MODE', true );

// includes
include( get_theme_file_path( '/includes/front/enqueue.php') );
include( get_theme_file_path( '/includes/setup.php') );
include( get_theme_file_path( '/includes/custom-nav-walker.php') );

// hooks
// auto load scripts and styles hooking on wp_enqueue_scripts
add_action( 'wp_enqueue_scripts', 'ju_enqueue' );
// auto load menu nav bar
add_action( 'after_setup_theme', 'ju_setup_theme' );


// shortcodes

// other tests
// error_log('TESTEEEE');
