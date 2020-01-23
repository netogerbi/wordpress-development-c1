<?php

function ju_enqueue() {

    $uri        = get_theme_file_uri();
    $ver        = JU_DEV_MODE ? time() : false;

    // tells the wordpress where are the styles to be loaded
    wp_register_style( 'ju_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', $ver );
    wp_register_style( 'ju_bootstrap', $uri . '/assets/css/bootstrap.css', [], $ver );
    wp_register_style( 'ju_style', $uri . '/assets/css/style.css', [], $ver );
    wp_register_style( 'ju_dark', $uri . '/assets/css/dark.css', [], $ver );
    wp_register_style( 'ju_font', $uri . '/assets/css/font-icons.cs', [], $ver );
    wp_register_style( 'ju_animate', $uri . '/assets/css/animate.css', [], $ver );
    wp_register_style( 'ju_magnific', $uri . '/assets/css/magnific-popup.cs', [], $ver );
    wp_register_style( 'ju_responsive', $uri . '/assets/css/responsive.cs', [], $ver );
    wp_register_style( 'ju_custom', $uri . '/assets/css/custom.css', [], $ver );

    // load the registered files - it will be loaded where we put the wp_head() function
    wp_enqueue_style( 'ju_google_fonts' );
    wp_enqueue_style( 'ju_bootstrap' );
    wp_enqueue_style( 'ju_style' );
    wp_enqueue_style( 'ju_dark' );
    wp_enqueue_style( 'ju_font' );
    wp_enqueue_style( 'ju_animate' );
    wp_enqueue_style( 'ju_magnific' );
    wp_enqueue_style( 'ju_responsive' );
    wp_enqueue_style( 'ju_custom' );

    // tells the wordpress where are the scripts to be loaded
    wp_register_script( 'ju_plugins', $uri . '/assets/js/plugins.js', [], $ver, true ); // the last true makes load in footer
    wp_register_script( 'ju_functions', $uri . '/assets/js/functions.js', [], $ver, true ); // the last true makes load in footer

    // jquery do not need to be registered, because its already registered in wordpress
    // wordpress has a lot of ready to enqueue scripts that is commonly used by developers
    // never override wordpress scripts
    wp_enqueue_script( 'jquery' ); 

    // add registered scripts
    wp_enqueue_script( 'ju_plugins' );
    wp_enqueue_script( 'ju_functions' );
}