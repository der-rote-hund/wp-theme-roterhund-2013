<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Der Rote Hund
 */
?>

    <section id="portfolio">
        <article class="work">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
            <ul class="img-list clearfix">


            <?php 
            if(getActiveLanguage()=='de') {
                $args = array(
                'suppress_filters' => false,
                'category_name' => 'arbeit'
                );

            } else {
                $args = array(
                'suppress_filters' => false,
                'category_name' => 'work'
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


    <section id="play">
        <article class="work play">
            <h3><?php echo __('Play', 'der_rote_hund'); ?></h3>
            <p><?php echo __('Stuff I made for fun', 'der_rote_hund'); ?></p>
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
                <h3><?php the_title(); ?></h3>
                <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'der_rote_hund' ) ); ?>
            </li>
            <?php endwhile; ?>

            <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>

            </ul>
        </article>
    </section>

    <section id="network">
        <article class="elsewhere clearfix">
            <h3><?php echo __('Der Rote Hund elsewhere online:', 'der_rote_hund'); ?></h3>
            <ul class="elsewhere__list">
                <li>
                    <a title="Der Rote Hund @ Xing" href="https://www.xing.com/profile/Philipp_Marquardt11" class="social xing" rel="nofollow">
                        @ Xing <span class="triangle triangle-right"></span>
                    </a>
                </li>
                <li>
                    <a title="Der Rote Hund @ LinkedIn" href="http://www.linkedin.com/in/philippmarquardtroterhundde" class="social linkedin" rel="nofollow">
                        @ LinkedIn <span class="triangle triangle-right"></span>
                    </a>
                </li>
                <li>
                    <a title="Der Rote Hund @ Twitter" href="https://twitter.com/pmroterhund" class="social twitter">
                        @ Twitter <span class="triangle triangle-right"></span>
                    </a>
                </li>
                <li>
                    <a title="Der Rote Hund @ Google Plus" href="https://plus.google.com/104750581728995084675" class="social googleplus" rel="nofollow">
                        @ Google Plus <span class="triangle triangle-right"></span>
                    </a>
                </li>
                <li>
                    <a title="Der Rote Hund @ Pinterest" href="http://pinterest.com/derrotehund/" class="social pinterest" rel="nofollow">
                        @ Pinterest <span class="triangle triangle-right"></span>
                    </a>
                </li>
            </ul>
            <ul class="elsewhere__list">
                <li class="gallery">
                    <a title="Waiting Dogs @ pinterest" href="http://pinterest.com/derrotehund/waiting-dogs/" class="pinterest" rel="nofollow">
                        <span class="gallery__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/wartender-hund.jpg" alt="Waiting Dogs @ Pinterest">
                        </span>
                        <br><i>Waiting Dogs</i> @ Pinterest
                    </a>
                </li>

                <li class="gallery">
                    <a title="Der Rote Hund @ Instagram" href="http://instagram.com/derrotehund" class="instagram" rel="nofollow">
                        <span class="gallery__img">
                            <img src="http://distilleryimage7.s3.amazonaws.com/2401c700cb8611e2b61c22000a9f4de7_6.jpg" alt="Der Rote Hund @ Instagram">
                        </span>
                        <br>Der Rote Hund @ Instagram
                    </a>
                </li>

            </ul>
        </article>
    </section>
