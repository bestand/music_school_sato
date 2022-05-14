<?php
get_header();
?>

<main class="main_tag">
	<section class="main-section">
		<div class="main-section__title">
			<?php
			$tag_id		= get_query_var("tag_id");
			$tag 		= get_tag($tag_id);
			$tag_slug 	= $tag->slug;
			$tag_name   = $tag->name;
			?>
			<h1 class="main-section__title__item_main">タグ: <?php echo urldecode($tag_name); ?></h1>
		</div>
		<div class="main-section__content_tag">		
		<?php
		$tag_posts = get_posts(array(
			'post_type' 		=> 'post',
			'tag' 				=> $tag_slug,
			'posts_per_page' 	=> 20,
			'orderby' 			=> 'date',
			'order' 			=> 'DESC'
		));
		global $post;
		if($tag_posts):
			foreach($tag_posts as $post):
				setup_postdata($post); ?>
				<div class="article-item">
					<?php
					if( esc_html(get_post_meta($post->ID, "item_premium", true)) === "on"){
					?>
					<div class="badge"><span>会員限定</span></div>
					<?php
					}else{
					?>
					<div class="badge_off"><span></span></div>
					<?php 
					}
					?>
					<div class="article-item__title">
						<a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
					</div>
					<div class="article-item__category">
						<span><?php the_category(', '); ?></span>
					</div>
					
				</div>
			<?php
			endforeach;
		endif;
		wp_reset_postdata();
		?>

		</div>
	</section>
</main>

<?php
get_sidebar();
get_footer();
?>