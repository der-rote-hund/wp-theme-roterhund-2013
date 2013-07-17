<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Page Template
 *
   Template Name:  Home Page
 *
 *
 * @package Der Rote Hund
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'home' ); ?>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
