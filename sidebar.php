<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package j-gym
 */

if ( ! is_active_sidebar( 'sidebar_c' ) ) {
	return;
}
?>

<aside>
	<?php dynamic_sidebar( 'sidebar_c' ); ?>
</aside>
