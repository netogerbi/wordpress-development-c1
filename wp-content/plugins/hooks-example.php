<?php
/**
 * Plugin Name: Hooks Example
 * description: All the titles will be hooked
 */

// filter hooks takes a content, modify it and returns it to the wordpress
// the function below will add 'Hooked' before all titles of posts
function ne_title( $title )
{
   return 'Hooked ' . $title;
}

// the action hooks will make an action adding functionallity to wordpress and changing the way it works
// this functions below will add those lines after the footer...
function ne_footer_shoutout()
{
   echo 'Hooked example plugin was here!!!!!<br>';
}
add_filter( 'the_title', 'ne_title' );

function ne_footer_shoutout_v2()
{
   echo 'Hooked example plugin was here version 2!!!!!<br>';
}

function ne_footer_shoutout_v3()
{
   echo 'Hooked example plugin was here version 3!!!!!<br>';
}
add_action( 'wp_footer', 'ne_footer_shoutout' ); // this will appear first
add_action( 'wp_footer', 'ne_footer_shoutout_v2' ); // this will appear after the above one
add_action( 'wp_footer', 'ne_footer_shoutout_v3', 5 ); // this will appear before the two above because it has more priority (3rd param)

// the hooks are started with 'do_action' function
// we migth register those actions using it.
function ne_footer() {
    do_action( 'ne_footer' ); // the function to do the same with filters is: apply_filters()
}
function ne_marquee_footer() {
    echo '<marquee>HELOO EVERYONE!!!</marquee><br>';
}

add_action( 'wp_footer', 'ne_footer' );
add_action( 'ne_footer', 'ne_marquee_footer' );