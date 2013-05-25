<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Der Rote Hund
 */
?><!doctype html>
<!--[if lt IE 8]>    <html class="no-js lt-ie9 lt-ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 oldie" <?php language_attributes(); ?>> <![endif]-->
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
<script src="<?php echo get_template_directory_uri(); ?>js/modernizr.custom.75364.js"></script>
</head>


<body id="anchor-top" <?php body_class(); ?>>

    <header>
        <p class="hund"></p>
        <h1 class="page-header">
        	<?php bloginfo( 'description' ); ?> &mdash; <span><?php bloginfo( 'name' ); ?></span>
        </h1>
        <h2 class="header__intro">
            Hi, I'm Philipp Marquardt, a <strong>designer gone web developer</strong>.
            I've been designing and coding <em>standards compliant<a title="see footnote" href="#fn-1" class="fussnote-link">(*)</a></em>, <em>responsive</em> and <em>compatible</em> websites for more than 15 years, the last six and a half of them as part of a multi-disciplinary team at <a href="http://runroom.com" rel="nofollow">runroom</a> in Barcelona.
        </h2>
        
        <h3>
            <a href="mailto:pm@roterhund.de?subject=Inquiry%20from%20roterhund.de&amp;body=Dear%20Philipp," title="Hire webdesigner and developer Philipp Marquardt" class="button">I'm currently available. Let's talk!</a>
        </h3>

    </header>

		<!--nav id="site-navigation" class="navigation-main" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'der_rote_hund' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'der_rote_hund' ); ?>"><?php _e( 'Skip to content', 'der_rote_hund' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><#site-navigation -->
	</header><!-- #masthead -->

    <div class="wrapper">

        <div class="content" role="main">

