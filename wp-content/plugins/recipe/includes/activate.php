<?php

function r_activate_plugin() {
    
    //this plugin must run in 5.0 or newer wordpress
    if( version_compare( get_bloginfo( 'version' ), '5.0', '<' ) ){
        wp_die( __( 'You must update WordPress to use this plugin', 'recipe' ) );
    }

    global $wpdb; // global to acess the database methods and properties
    $create_sql     =   "
        CREATE TABLE `" . $wpdb->prefix . "recipe_ratings` (
            `ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            `recipe_id` BIGINT(20) UNSIGNED NOT NULL,
            `rating` FLOAT(3,2) UNSIGNED NOT NULL,
            `user_ip` VARCHAR(50) NOT NULL,
            PRIMARY KEY(`ID`)
        ) ENGINE=InnoDB " . $wpdb->get_charset_collate() . ";
    ";


    require( ABSPATH . '/wp-admin/includes/upgrade.php' );
    dbDelta( $create_sql ); // used to execute querys in the database
}
