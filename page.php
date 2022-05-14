<?php
get_header();
?>

	<main id="primary" class="site-main">
		<h1>page</h1>
		
		<?php
		while ( have_posts() ) :
			the_post();
		endwhile;
		?>

	</main>

<?php
get_footer();
?>