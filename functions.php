<?php

/**
 * Enqueue scripts and styles.
 */
function bestand_scripts() {
	wp_enqueue_style('style.css', get_template_directory_uri().'/dist/style.css' );
	wp_enqueue_script('bundle.js', get_template_directory_uri().'/dist/bundle.js');
}
add_action( 'wp_enqueue_scripts', 'bestand_scripts' );

/**
 * Register menus.
 */
function bestand_setup_theme() {
	register_nav_menus(array(
		'header_menu' => 'ヘッダーメニュー',
	));
}
add_action( 'after_setup_theme', 'bestand_setup_theme' );


/**
 * Register side_bar
 */
function widgetsidebar_init() {
	register_sidebar(array(
		'name'=>'sidebar_c',
		'id' => 'sidebar_c',
		'before_widget'=>'<div class="sidebar-wrapper">',
		'after_widget'=>'</div>',
		'before_title' => '<h3 class="sidebar-title">',
		'after_title' => '</h3>'
	));
}
add_action( 'widgets_init', 'widgetsidebar_init' );

?>