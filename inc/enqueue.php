<?php
/*
 * enqueue.php
 * Does what it says on the tin - enqueues all scripts / stylesheets
 */

function enqueue_theme_stylesheet () {
    wp_register_style (
	    'eemjii-theme-stylesheet',
	    get_stylesheet_directory_uri() . '/style.css'
    );

	wp_enqueue_style (
		'eemjii-theme-stylesheet'
	);
}
add_action('wp_enqueue_scripts', 'enqueue_theme_stylesheet');
function enqueue_font_awesome () {
    wp_register_style (
        'font-awesome',
        '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'
    );
    wp_enqueue_style (
        'font-awesome'
    );
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');
function enqueue_jquery () {
    wp_register_script(
        'jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js',
        '',
        '3.3.4',
        true
    );
    wp_enqueue_script ('bootstrap');
}

add_action('wp_enqueue_scripts', 'enqueue_jquery');

function enqueue_twitter_bootstrap_scripts () {
	// Bootstrap styles
	wp_register_script(
		'bootstrap',
		get_stylesheet_directory_uri() . '/javascripts/bootstrap.min.js',
		array('jquery'),
		'3.3.4',
		true
	);
	wp_enqueue_script ('bootstrap');

    wp_register_script(
        'bootstrap-config',
        get_stylesheet_directory_uri() . '/javascripts/bootstrap.config.js',
        array('jquery','bootstrap'),
        '3.3.4',
        true
    );
    wp_enqueue_script ('bootstrap-config');
}
add_action('wp_enqueue_scripts','enqueue_twitter_bootstrap_scripts');

