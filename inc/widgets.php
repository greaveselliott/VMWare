<?php
/*
 * Widget Areas Registration / Unregistration.
 */

// Removing twentyten widgets
function remove_some_widgets(){
	// Unregister some of the TwentyTen sidebars
	unregister_sidebar( 'first-footer-widget-area' );
	unregister_sidebar( 'second-footer-widget-area' );
	unregister_sidebar( 'third-footer-widget-area' );
	unregister_sidebar( 'fourth-footer-widget-area' );
	unregister_sidebar( 'primary-widget-area' );
	unregister_sidebar( 'secondary-widget-area' );
}
add_action( 'widgets_init', 'remove_some_widgets', 11 );

// Twitter Stream Widget
function twitter_stream_widget() {

    register_sidebar( array(
        'name'          => 'Twitter Stream',
        'id'            => 'twitter-stream',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'twitter_stream_widget' );

// Share Widget
function share_widget() {

    register_sidebar( array(
        'name'          => 'Share Widget',
        'id'            => 'share-widget',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'share_widget' );