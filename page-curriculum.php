<?php
get_header();
?>

<main class="main_curriculum">
	<section class="main-section">
		<div class="main-section__title">
			<h1 class="main-section__title__item_main">カリキュラム</h1>
			<h3 class="main-section__title__item_sub">Curriculum</h3>
		</div>
		<div class="main-section__content_curriculum">
			<?php
			$args = array(
				'parent' => 0,
				'orderby' => intval('term_order'),
				'order' => 'ASC'
			);
			$categories = get_categories( $args );
			?>

			<?php foreach( $categories as $category ) : ?>
				<li class="curriculum">
					<div class="curriculum__title">
						<h2 class="curriculum__title__name"><?php echo $category->name; ?>コース</h2>
						<p class="curriculum__title__description"><?php echo $category->description; ?></p>
					</div>
					<a href="<?php echo get_category_link( $category->term_id ); ?>">
						<button class="curriculum__btn btn">
							<p class="btn__p">学習する<i class="fa-solid fa-circle-chevron-right"></i></p>
						</button>				
					</a>
				</li>
			<?php endforeach; ?>
		</div>
	</section>
</main>

<?php
get_sidebar();
get_footer();
?>