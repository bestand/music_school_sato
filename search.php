<?php
get_header();
?>

<main  class="main_search">
	<section class="main-section">
		<div class="main-section__title">		
			<h1 class="main-section__title__item_main">
				<?php printf( esc_html__( '検索結果: %s', 'j-gym' ), '<span>' . get_search_query() . '</span>' ); ?>
			</h1>
		</div>
		<div class="main-section__content_search">
			<?php if (have_posts() && get_search_query()) : 
				while ( have_posts() ) :
					the_post();
					?>
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
						<div class="article-item__tag">
							<span><?php the_tags("",",",""); ?></span>
						</div>
					</div>
				<?php
				endwhile;
				the_posts_navigation();
			else :
			?>
			<p>検索キーワードに該当する記事がありませんでした。</p>
			<?php
			endif;
			?>
		</div>
	</section>
</main>

<?php
get_sidebar();
get_footer();
?>