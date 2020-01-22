<?php
// this file is optional,
// but wordpress load this file and execute code inside

// setup

// includes
include( get_theme_file_path( '/includes/front/enqueue.php') );

// hooks
add_action( 'wp_enqueue_cripts', 'ju_enqueue' );

// shortcodes
