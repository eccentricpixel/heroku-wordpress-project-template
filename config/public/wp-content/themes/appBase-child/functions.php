<?php

// Enqueue CSS and scripts



function load_appBase_child_scripts() {
	
	wp_enqueue_style(
		'appBase_child_css',
		get_stylesheet_directory_uri() . '/css/app.css',
		array(),
		false,
		'all'
	);
	
	wp_enqueue_script(
		'app_js',
		get_stylesheet_directory_uri() . '/js/app.js',
		array(),
		true
	);
}

add_action('wp_enqueue_scripts', 'load_appBase_child_scripts',50);



?>
