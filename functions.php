<?php

function restaurant_scripts() {
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri('/css/bootstrap.min.css') );
	wp_enqueue_style( 'custom-css', get_theme_file_uri('/css/custom.css') );
	wp_enqueue_style( 'header-css', get_theme_file_uri('/css/header.css') );
	wp_enqueue_style( 'fonts', get_theme_file_uri('/css/fonts.css') );
	wp_enqueue_style( 'font-awesome', get_theme_file_uri('/fontawesome/css/all.css') );

	wp_enqueue_script( 'jquery', get_theme_file_uri('/js/jquery-3.5.1.slim.min.js') );
	wp_enqueue_script( 'popper', get_theme_file_uri('/js/popper.min.js') );
	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri('/js/bootstrap.min.js') );
}
add_action( 'wp_enqueue_scripts', 'restaurant_scripts' );

?>