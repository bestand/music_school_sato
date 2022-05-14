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


/**
 * Register post_type
 */
function bestand_post_type() {
	register_post_type( 'news', 
		array(
			'labels'			=> array(
				'name'				=> 'お知らせ',
				'name_admin_bar'	=> 'お知らせ',
				'singular_name'		=> 'お知らせ',
				'add_new_item'		=> '新規お知らせを投稿',
				'view_item'			=> 'お知らせを表示',
				'search_items'		=> 'お知らせを検索',
				'not_found'			=> 'お知らせはありません',
				'not_found_in_trash'=> 'ゴミ箱にお知らせはありません',
			),
			'public'			=> true,
			'has_archive'		=> true,
			'hierarchical'		=> false,
			'map_meta_cap'		=> true,
			'delete_with_user'	=> false,
			'rewrite'			=> array( 'slug'=>'news' ),
			'menu_position'		=> 5,
			'supports'			=> array( 'title', 'editor', 'thumbnail')
		)
	);
}
add_action('init', 'bestand_post_type');

/**
 * Register Custom_fields
 */
function add_custom_field() {
    add_meta_box( 'custom-item_order', '並び順', 'create_item_order', 'post', 'normal' );
    add_meta_box( 'custom-item_premium', '会員限定', 'create_item_premium', 'post', 'normal' );
}
add_action( 'admin_menu', 'add_custom_field' );

function create_item_order() {
    $keyname = 'item_order';
    global $post;
    $get_value = get_post_meta( $post->ID, $keyname, true );
	wp_nonce_field( 'action-' . $keyname, 'nonce-' . $keyname ); 
    echo '<input type="number" name="' . $keyname . '" value="' . $get_value . '">';
}

function create_item_premium() {
    $keyname = 'item_premium';
    global $post;
    $get_value = get_post_meta( $post->ID, $keyname, true ); 
    wp_nonce_field( 'action-' . $keyname, 'nonce-' . $keyname );
	
	$checked = '';
	if( $get_value ) $checked = ' checked';
    echo '<input type="checkbox" name="' . $keyname . '"' . $checked . '>';
}

function save_custom_field( $post_id ) {
    $custom_fields = [ 'item_order', 'item_premium' ];
    foreach( $custom_fields as $d ) {
        if ( isset( $_POST['nonce-' . $d] ) && $_POST['nonce-' . $d] ) {
            if( check_admin_referer( 'action-' . $d, 'nonce-' . $d ) ) {
                if( isset( $_POST[$d] ) && $_POST[$d] ) {
                    update_post_meta( $post_id, $d, $_POST[$d] );
                } else {
                    delete_post_meta( $post_id, $d, get_post_meta( $post_id, $d, true ) );
                }
            }
        }
    }
}
add_action( 'save_post', 'save_custom_field' );

// //カテゴリーの追加
// function create_category_taxonomy(){
//   $args = array(
//     'label'              => 'curriculum',
//     'public'             =>  true,
//     'hierarchical'       =>  true
//   );
//   register_taxonomy('curriculum', 'post', $args );
// }
// add_action('init', 'create_category_taxonomy');

?>