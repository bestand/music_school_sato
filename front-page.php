<?php
get_header();
?>

<main>
	<section id="top" class="main-section">
		<div class="main-section__title">
			<h2 class="main-section__title__item_main">特徴</h2>
			<h4 class="main-section__title__item_sub">feature</h4>
		</div>
		<div class="main-section__content">
			<?php get_template_part( 'parts/front-page/feature' ); ?>
		</div>
	</section>
	<section id="feature" class="main-section">
		<div class="main-section__title">
			<h2 class="main-section__title__item_main">お知らせ</h2>
			<h4 class="main-section__title__item_sub">news</h4>
		</div>
		<div class="main-section__content">
			<?php get_template_part( 'parts/front-page/feature' ); ?>
		</div>
	</section>
	<section id="curriculum" class="main-section">
		<div class="main-section__title">
			<h2 class="main-section__title__item_main">教室案内</h2>
			<h4 class="main-section__title__item_sub">about</h4>
		</div>
		<div class="main-section__content">
			<?php get_template_part( 'parts/front-page/curriculum' ); ?>
		</div>
	</section>
	<section id="curriculum" class="main-section">
		<div class="main-section__title">
			<h2 class="main-section__title__item_main">レッスン</h2>
			<h4 class="main-section__title__item_sub">lesson</h4>
		</div>
		<div class="main-section__content">
			<?php get_template_part( 'parts/front-page/curriculum' ); ?>
		</div>
	</section>
	<section id="contact" class="main-section">
		<div class="main-section__title">
			<h2 class="main-section__title__item_main">講師</h2>
			<h4 class="main-section__title__item_sub">profile</h4>
		</div>
		<div class="main-section__content">
			<?php get_template_part( 'parts/front-page/contact' ); ?>
		</div>
	</section>
</main>

<?php
get_footer();
?>