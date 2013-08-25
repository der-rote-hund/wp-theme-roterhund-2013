<?php
/**
 * The Header for our theme.
 *
 * @package Der Rote Hund
 */
?><!doctype html>
<!--[if lt IE 8]> <html class="no-js lt-ie9 lt-ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '&middot;', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.75364.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/quirksmode-browser-detect.js"></script>
</head>

<body id="anchor-top" <?php body_class(); ?>>
    <header>
        <p class="hund"></p>
        <h1 class="page-header">
            <?php echo __('Web design and frontend development by your best friend', 'der_rote_hund'); ?>  —&nbsp;<span>Der&nbsp;Rote&nbsp;Hund</span>
        </h1>
        <h2 class="header__intro">
            <?php echo __('Hi, I\'m Philipp Marquardt, a <strong>designer gone web developer</strong>. I\'ve been designing and coding <em>standards compliant<a title="see footnote" href="#fn-1" class="fussnote-link">(*)</a></em>, <em>responsive</em> and <em>compatible</em> websites for almost 15 years, the last 6 &frac12; of them as part of a multi-disciplinary team at <a href="http://runroom.com" rel="nofollow">Runroom</a> in Barcelona.', 'der_rote_hund'); ?>
        </h2>
        <h3>
            <?php echo __('<a href="mailto:pm@roterhund.de?subject=Inquiry%20from%20roterhund.de&amp;body=Dear%20Philipp," title="Contact webdesigner and developer Philipp Marquardt" class="button">Get in touch!</a>', 'der_rote_hund'); ?>
        </h3>
    </header>
    <div class="wrapper">
        <div class="content" role="main">