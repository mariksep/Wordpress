<?php

function theme_styles(){
wp_enqueue_style('tyyli', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'custom_theme_setup');

function custom_theme_setup(){
add_theme_support('title-tag');
add_theme_support('custom-background');
add_theme_support('post-thumbnail');
}
add_action('after_setup_theme', 'custom_theme_setup');


function rekisteroi_menu(){
    register_nav_menu('reuna', 'Valikko');
}
add_action('init','rekisteroi_menu');

function lisaa_kirjasto(){
wp_enqueue_script(
    'custom-script',
    get_stylesheet_uri() . '/js/app.js',
    array( 'jquery' )
);
}
add_action('wp_enqueue_scripts', 'lisaa_kirjasto');



?>