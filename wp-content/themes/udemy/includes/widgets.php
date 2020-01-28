<?php

function ju_widgets() {
    register_sidebar([
        'name'          => __( 'My first theme sidebar', 'udemy' ),
        'id'            => 'ju_sidebar',
        'description'   => __( 'My first theme sidebar description', 'udemy' )
    ]);
}