<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Page Template
 *
   Template Name:  Browser Sniffer JS
 *
 *
 * @package Der Rote Hund
 */

get_header(); ?>

<script type="text/javascript">
<!--
document.write('<p>You\'re using ' + BrowserDetect.browser + ' ' + BrowserDetect.version + ' on ' + BrowserDetect.OS + '!</p>');
// -->
</script>

<?php get_footer(); ?>