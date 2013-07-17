<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Der Rote Hund
 */
?>

    <section id="play">

        <h1>content-play.php</h1>

        <article class="work">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
            <ul class="img-list clearfix">


            <?php 
            if(getActiveLanguage()=='de') {
                $args = array(
                'suppress_filters' => false,
                'category_name' => 'spiel'
                );

            } else {
                $args = array(
                'suppress_filters' => false,
                'category_name' => 'play'
                );

            }
            $list_of_posts = new WP_Query( $args );
            ?>
            <?php if ( $list_of_posts->have_posts() ) : ?>
            <?php /* The loop */ ?>
            <?php while ( $list_of_posts->have_posts() ) : $list_of_posts->the_post(); ?>
            <li>
                <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'der_rote_hund' ) ); ?>
            </li>
            <?php endwhile; ?>

            <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>

            </ul>
        </article>
    </section>
