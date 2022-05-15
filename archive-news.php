<?php
get_header();
?>

	<main>

		<?php
		if ( have_posts() ) :
		?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header>

			<?php
			while ( have_posts() ) :
				the_post();
			endwhile;
			the_posts_navigation();

		else :

		endif;
		?>

	</main>

<?php
get_sidebar();
get_footer();
?>