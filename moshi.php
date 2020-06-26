<?php

// Disable Gutternberg
add_filter('use_block_editor_for_post', '__return_false', 10);

function the_post_summary($length = 128, $string = ""){
	if($string){
		$content = $string;
	} else {
		$content = wp_strip_all_tags( get_the_content() );
	}
	if (strlen($content) > $length) {
		$content = substr($content, 0, $length) . '...';
	}
	echo $content;
}

function moshi_enqueue_scripts() {
    wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri() . '/css/animate.min.css' );
    wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), '1.0.1', true );
	wp_enqueue_style( 'swiper-css', get_stylesheet_directory_uri() . '/css/swiper.min.css' );
	wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/js/swiper.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'moshi_enqueue_scripts' );

