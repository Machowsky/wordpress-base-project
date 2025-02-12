<?php

// Proper way to load JS mainly for plugins
function wpb_adding_scripts() {
 	wp_register_script('my_amazing_script', plugins_url('amazing_script.js', __FILE__), array('jquery'),'1.1', true);
	 
	wp_enqueue_script('my_amazing_script');
}
//add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );

// 2Proper way to load JS mainly for themes
function wpb_adding_scripts2() {
	wp_register_script('my_amazing_script', get_template_directory_uri() . '/js/amazing_script.js', array('jquery'),'1.1', true);
	wp_enqueue_script('my_amazing_script');
}
//add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );



// Proper way to load CSS
function wpb_adding_styles() {
	wp_register_style('my_stylesheet', plugins_url('my-stylesheet.css', __FILE__));
	wp_enqueue_style('my_stylesheet');
}
//add_action( 'wp_enqueue_scripts', 'wpb_adding_styles' );