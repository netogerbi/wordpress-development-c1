<?php

function ju_setup_theme() {
    // register a navigation menu
    // this menu must be created in apearance > customize > menu. in wp dash
    register_nav_menu( 'primary', __( 'Primary Menu', 'udemy' ) );
}