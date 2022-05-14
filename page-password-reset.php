<?php
get_header();
?>

	<main>
		<section class="main-section password-reset-section">
			<div class="main-section__title">
				<h1 class="main-section__title__item_main">パスワードの再設定</h1>		
				<h2 class="main-section__title__item_sub">ユーザー名またはメールアドレスを入力してください</h2>		
			</div>
			<?php echo do_shortcode('[ultimatemember_password]'); ?>
		</section>
	</main>

<?php
get_footer();
?>