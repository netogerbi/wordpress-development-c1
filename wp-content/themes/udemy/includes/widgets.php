<?php

function ju_widgets() {
    register_sidebar([
        'name'              => __( 'My first theme sidebar', 'udemy' ),
        'id'                => 'ju_sidebar',
        'description'       => __( 'My first theme sidebar description', 'udemy' ),
         // %1$s %2$s are placeholder for 3rd party widgets to place
        'before_widget'    => '<div id="%1$s" class="widget cleafix %2$s',
        'after_widget'      => '</div>',
        'before_title'      => '<h4>',
        'after_title'      => '</h4>'
    ]);
}