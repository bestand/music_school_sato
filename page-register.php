<?php
get_header();
?>

<main>
	<section class="main-section register-section">
		<div class="main-section__title">
			<?php if(is_user_logged_in()){?>
			<h1 class="main-section__title__item_main">ログイン済み</h1>
			<?php }else{?>
			<h1 class="main-section__title__item_main">新規登録</h1>
			<?php }?>
		</div>
		<div>
			<?php echo do_shortcode('[ultimatemember form_id="13"]'); ?>
		</div>
	</section>
</main>

<?php
get_footer();
?>