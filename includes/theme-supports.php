<?php
function theBlog_support(){
    add_theme_support('menus');
    add_theme_support('post-thumbnails');



    register_nav_menus(array(
        'header_menu' =>__('Header Menu','textdomain')
    ));
}

add_action('after_setup_theme','theBlog_support');
