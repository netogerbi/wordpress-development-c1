<?php

function r_rate_recipe(){

    global $wpdb;

    $output         =   [ 'status' => 1 ]; // insert failure
    $post_ID        =   absint( $_POST['rid'] );
    $rating         =   round( $_POST['rating'], 1 );
    $user_IP        =   $_SERVER['REMOTE_ADDR'];

    $rating_count   =   $wpdb->get_var(
        "SELECT COUNT(*) FROM {$wpdb->prefix}recipe_ratings WHERE recipe_id='{$post_ID}' AND user_ip='{$user_IP}'"
    );

    if( $rating_count > 0 ){
        wp_send_json( $output );
    }

    // method used to insert data in database
    // the last parameter, the types, are used for security
    $wpdb->insert(
        $wpdb->prefix . 'recipe_ratings',
        [
            'recipe_id'     =>  $post_ID,
            'rating'        =>  $rating,
            'user_ip'       =>  $user_IP
        ],
        [ '%d', '%f', '%s' ] // types of data that are being inserted [digit(number), float, string]
    );

    $output[ 'status' ] = 2; // insert succeeded

    wp_send_json( $output ); // json encode the array and kill the script - perfect for ajax request
}