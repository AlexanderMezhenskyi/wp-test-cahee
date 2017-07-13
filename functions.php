<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri());
	wp_enqueue_script( 'scroll', get_template_directory_uri() . '/assets/scripts/scroll.js' );
}



?>;

