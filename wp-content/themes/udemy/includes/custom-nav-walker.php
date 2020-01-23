<?php

// used to style the menu
// the first level menu doesn't use the walker class, just the submenus
class JU_Custom_Nav_Walker extends Walker_Nav_Menu {
    
    // first level of menu
    public function start_Lvl( &$output, $depth = 0, $args = [] ) {
        $output         .= '<ul class="special-class">';
    }

    // each element of menu
    // the id refers to the id of menu item
    public function start_el( &$output, $item, $depth = 0, $args = [], $id = 0 ) {
        $output         .= '<li class="special-class-item">';
        $output         .= $args->before; // text before the link markup
        $output         .= '<a href="' . $item->url . '">'; // item is setted in the menu in dashboard
        $output         .= $args->link_before . $item->title . $args->link_after;
        $output         .= '</a>';
        $output         .= $args->after; // text after the link markup
    }

    public function end_el( &$output, $item, $depth = 0, $args = [], $id = 0 ) {
        $output         .= '</li>';
    }

    // last level of menu
    public function end_Lvl( &$output, $depth = 0, $args = [] ) {
        $output         .= '</ul>';
    }
}