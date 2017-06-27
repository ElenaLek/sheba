<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<title><?php wp_title(''); ?></title>

		<!-- "WPtricks Starter": The HTML-5 WordPress Template Theme by Aaron Summers -->
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- STYLESHEETS -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/smart-menu/sm-core-css.css" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/smart-menu/sm-clean.css" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/bxslider/jquery.bxslider.css" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/magnific-popup/magnific-popup.css" media="screen">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


		<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<script src="<?php bloginfo('template_directory') ?>/js/modernizr-custom.js"></script>

		<?php wp_head(); ?>

	</head>
	<body <?php  $classes[] = ''; body_class($classes); ?> id="top">


	<header id="site-header">
		<div class="wrapper">
			<h2 class="site-logo">
				<?php
					// Display the Custom Logo
					the_custom_logo();
					if (has_custom_logo()) { echo '<span class="has-logo">' . get_bloginfo('name') . '</span>'; }
					if (!has_custom_logo()) { bloginfo('name'); }
				?>
			</h2>
			<nav>
			<?php 
			/**
			 *
			 * I use smartmenu.js for all themes as this is the most dynamic and versatile plugin
			 * https://www.smartmenus.org/
			 *
			 */
			
			?>
				<div class="hamburger">
				  <span></span>
				  <span></span>
				  <span></span>
				  <span></span>
				  <span></span>
				  <span></span>
				</div> <!-- /.hamburger -->

				<?php
					$args = array(
						'theme_location'  => 'Header Menu',
						'menu'            => 'header-menu',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'smartmenu sm sm-clean',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => '',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => ''
					);
					wp_nav_menu($args);
				?>
			</nav>
		</div><!-- /.wrapper -->
	</header><!-- /#site-header -->

