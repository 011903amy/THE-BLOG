<?php

function theBlog_assets(){
    wp_enqueue_style('theBlogtheme', get_template_directory_uri() .'/css/style.css', microtime());
    wp_enqueue_script('my_script', get_template_directory_uri() .'/js/themeToggle.js', array(), microtime(),true);
}

add_action('wp_enqueue_scripts','theBlog_assets');