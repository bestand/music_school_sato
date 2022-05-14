<?php
get_header();
?>

<main>
	<section class="main-section login-section">
		<div class="main-section__title">
		<?php if(is_user_logged_in()){?>
			<h1 class="main-section__title__item_main">ログイン済み</h1>
		<?php }else{?>
			<h1 class="main-section__title__item_main">ログインフォーム</h1>
		<?php }?>
		</div>
		<div>
			<?php echo do_shortcode('[ultimatemember form_id="14"]'); ?>
		</div>
	</section>
</main>

<?php
get_footer();
?>