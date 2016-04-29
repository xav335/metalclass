<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package discovery
 * @since discovery 1.0
 */
?><!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<?php if(get_theme_mod('discovery_global_favicon')) : ?>
	<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('discovery_global_favicon')); ?>" />
<?php endif; ?>

<?php if(get_theme_mod('discovery_global_apple_icon')) : ?>
	<link rel="apple-touch-icon" href="<?php echo esc_url(get_theme_mod('discovery_global_apple_icon')); ?>">
<?php endif; ?>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrap">
		<div id="page" class="hfeed site">

			<?php do_action( 'before' ); ?>

		    <div id="masthead-wrap">

			    <div id="topbar_container">
				    <div class="topbar">
					    <?php

							$list_contact_options = array(
								array('telnumber', __( 'Telephone Number', 'discovery'), 'phone'),
								array('mobile', __( 'Mobile Number', 'discovery'), 'mobile'),
								array('email', __( 'Email Address', 'discovery'), 'envelope'),
								array('address', __( 'Address', 'discovery'), 'map-marker'),
							);

							echo "<div class='topbar_content_left'>";

							$arraycount = count($list_contact_options);
							for ($row = 0; $row <  $arraycount; $row++) {
								if( get_theme_mod( $list_contact_options[$row][0] . '_textbox_header_one' ) ){
									echo '<div class="contact ' . $list_contact_options[$row][0] . '"><i class="fa fa-' . $list_contact_options[$row][2] . '"></i> ' . get_theme_mod( $list_contact_options[$row][0] . '_textbox_header_one' ) . '</div>';
								}
							}

							echo "</div>";

					    ?>
				    </div>
			    </div>

			</div><!-- #masthead-wrap -->

		    <div class="header-image">
			    
				<?php $header_image = get_header_image();
					if ( ! empty( $header_image ) ): ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="<?php echo esc_url( get_theme_mod( 'discovery_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="logo-site">
							<img src="<?php header_image(); ?>"/>
						</a>
				<?php endif; ?>
			</div>
			
				<header id="masthead" class="site-header header_container" role="banner">

					<nav role="navigation" class="site-navigation main-navigation">

						<h1 class="assistive-text"><a href="#" title="<?php _e('Navigation Toggle', 'discovery'); ?>"><?php _e( 'Menu', 'discovery' ); ?></a></h1>

						<div class="assistive-text skip-link">
							<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'discovery' ); ?>"><?php _e( 'Skip to content', 'discovery' ); ?></a>
						</div>

						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
						
						<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

							<label>
								<span class="screen-reader-text">Search for:</span>
								<input type="search" class="search-field" placeholder="Search..." value="" name="s" title="Search for:" />
							</label>

							<input type="submit" class="search-submit" value="Search" />

						</form>

					</nav><!-- .site-navigation .main-navigation -->

				</header><!-- #masthead .site-header -->
			
			<div id="main" class="site-main">