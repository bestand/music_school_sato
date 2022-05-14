<?php
get_header();
?>

<main class="main_post">
	<section class="main-section">
		<?php
		while ( have_posts() ) :
			the_post();
		?>
		<div class="main-section__title">
			<h1 class="main-section__title__item_main"><?php echo esc_html(get_post_meta($post->ID, "item_order", true)); ?>. <?php the_title(); ?></h1>
		</div>
		<div class="main-section__content_article">
			<div class="main-section__date">
				<span>作成日: <?php the_time('Y/m/d') ?></span>
				<span>更新日: <?php the_modified_date('Y/m/d') ?></span>
			</div>
			<div class="main-section__sub">
				<span>コース：<?php the_category(', ') ?></span>
				<span><?php the_tags("",", ",""); ?></span>
			</div>
			<div class="main-section__article">
				<article>
					<?php the_content(); ?>
				</article>
			</div>

		</div>
	<?php
	endwhile; 
	?>
	</section>
</main>

<?php
get_sidebar();
get_footer();
?>