<?php
//theme functions go here

//function myFunction(){


function enqueue_my_styles_and_scripts(){
//Enqueueing our custom portfolio styles
wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/
css/myfirstexternalcss.css', array(), '1.0.0', 'all');



wp_enqueue_script('my-scripts', get_theme_file_uri() . '/css/myfirstexternalcss', array()'1.0.0');


}

add_action('wp_enqueue_scripts', 'enqueue_my_styles_and_scripts');
