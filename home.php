<?php
get_header();
?>

	<main>

		<?php
		if ( have_posts() ) :
		?>

			<?php
			while ( have_posts() ) :
				the_post();
			?>
				<a href=<?php the_permalink();?>>
					<?php the_title(); ?>
				</a>
			<?php
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