<?php

/**
 * Enqueue scripts and styles.
 */
function setup_scripts() {
	wp_enqueue_style('style.css', get_template_directory_uri().'/dist/style.css' );
	wp_enqueue_script('bundle.js', get_template_directory_uri().'/dist/bundle.js');
}
add_action( 'wp_enqueue_scripts', 'setup_scripts' );

/**
 * Register menus.
 */
function setup_theme() {
	register_nav_menus(array(
		'header_menu' => 'ヘッダーメニュー',
	));
}
add_action( 'after_setup_theme', 'setup_theme' );


/**
 * Register side_bar
 */
function widget_sidebar_init() {
	register_sidebar(array(
		'name'=>'sidebar',
		'id' => 'sidebar',
		'before_widget'=>'<div class="sidebar">',
		'after_widget'=>'</div>',
		'before_title' => '<h3 class="sidebar">',
		'after_title' => '</h3>'
	));
}
add_action( 'widgets_init', 'widget_sidebar_init' );


/**
 * Register short code
 */

function shortcode_News(){
	$args = array(
		'post_type'      => 'news',
		'posts_per_page' => 3,
		'post_status'    => 'publish'
	);
	$news_array = get_posts($args);

	$html = '<ul>';
	foreach($news_array as $news):
		setup_postdata($news);
		$html .= '<li>';
		$html .= '<a href="'.$news->guid.'">'.$news->post_title.'</a>';
		$html .= '</li>';
	endforeach;
	$html .= '</ul>';

	wp_reset_postdata();
	return $html;
}
add_shortcode('recent_News', 'shortcode_News');

function shortcode_Posts(){
	$args = array(
		'post_type'      => 'post',
		'posts_per_page' => 3,
		'post_status'    => 'publish'
	);
	$news_array = get_posts($args);

	$html = '<ul>';
	foreach($news_array as $news):
		setup_postdata($news);
		$html .= '<li>';
		$html .= '<a href="'.$news->guid.'">'.$news->post_title.'</a>';
		$html .= '</li>';
	endforeach;
	$html .= '</ul>';

	wp_reset_postdata();
	return $html;
}
add_shortcode('recent_Posts', 'shortcode_Posts');

function shortcode_Events(){
	$args = array(
		'post_type'      => 'event',
		'posts_per_page' => 5,
		'post_status'    => 'publish'
	);
	$news_array = get_posts($args);

	$html = '<ul>';
	foreach($news_array as $news):
		setup_postdata($news);
		$html .= '<li>';
		$html .= '<a href="'.$news->guid.'">'.$news->post_title.'</a>';
		$html .= '</li>';
	endforeach;
	$html .= '</ul>';

	wp_reset_postdata();
	return $html;
}
add_shortcode('recent_Events', 'shortcode_Events');

function shortcode_Separator(){
	$html = '<div class="separator">--------------------</div>';
	return $html;
}
add_shortcode('separator', 'shortcode_Separator');

function shortcode_Button(){
	$html = '<button class="separator">お申込み・お問い合わせ</button>';
	return $html;
}
add_shortcode('button', 'shortcode_Button');

?>