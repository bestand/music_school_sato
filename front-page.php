<?php
get_header();
?>

<main>
	<section id="top" class="main-section">
		<?php get_template_part( 'parts/front-page/top' ); ?>
	</section>
	<section id="feature" class="main-section">
		<div class="main-section__title">
			<h2 class="main-section__title__item_main">特徴</h2>
			<h4 class="main-section__title__item_sub">feature</h4>
		</div>
		<div class="main-section__content">
			<?php get_template_part( 'parts/front-page/feature' ); ?>
		</div>
	</section>
	<section id="curriculum" class="main-section">
		<div class="main-section__title">
			<h2 class="main-section__title__item_main">カリキュラム</h2>
			<h4 class="main-section__title__item_sub">Curriculum</h4>
		</div>
		<div class="main-section__content">
			<?php get_template_part( 'parts/front-page/curriculum' ); ?>
		</div>
	</section>

	<!-- <section id="news" class="main-section">
		<div class="main-section__title">
			<h2 class="main-section__title__item_main">お知らせ</h2>
			<h4 class="main-section__title__item_sub">News</h4>
		</div>
		<div class="main-section__content">
			<?php get_template_part( 'parts/front-page/news' ); ?>
		</div>
	</section> -->
	<section id="contact" class="main-section">
		<div class="main-section__title">
			<h2 class="main-section__title__item_main">お問い合わせ</h2>
			<h4 class="main-section__title__item_sub">Contact</h4>
		</div>
		<div class="main-section__content">
			<?php get_template_part( 'parts/front-page/contact' ); ?>
		</div>
	</section>
</main>

<?php
get_footer();
?>