<section class="news">
    <?php
    $args = array(
        'post_type' 	=> 'news',
        'posts_per_page'=> 10,
        'orderby'       => 'date',
        'order'         => 'DESC',
    );

    $the_query = get_posts( $args );

    if ( $the_query ) :
        foreach ( $the_query as $post ) : setup_postdata( $post );
    ?>
        <a href="<?php echo the_permalink(); ?>">
            <section class="news__items">
                <h3 class="news__items__item_date"><?php echo the_time('Y/m/d'); ?></h3>	
                <h2 class="news__items__item_title"><?php echo the_title(); ?></h2>
            </section>
        </a>
    <?php
        endforeach;
        wp_reset_postdata();
    else:
    ?>

        <p><?php echo 'お知らせはありません'; ?></p>

    <?php
        endif;
    ?>
</section>