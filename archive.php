<?php
get_header();
?>

	<main>
		<section class="archive-section">
		<?php
		if ( have_posts() ) :
		?>
			<?php
			while ( have_posts() ) :
				the_post();
			?>
			<article class="one_article">
				<a href=<?php the_permalink();?>>
					<h2><?php the_title(); ?></h2>
					<p><?php the_date(); ?></p>
					<p><?php the_content(); ?></p>
				</a>
			</article>
			<?php
			endwhile;
			the_posts_navigation();

		else :

		endif;
		?>
		</section>
	</main>

<?php
get_footer();
?>