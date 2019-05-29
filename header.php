<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Old_Times
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'old-times' ); ?></a>

	<!-- NAV ----------------------------------------------------------------->
	<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'old-times' ); ?></button>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) );
		?>
	</nav>
	<!------------------------------------------------------------------------>

	<!-- HEADER -------------------------------------------------------------->
	<header id="masthead" class="site-header">

		<video class="site-header-cinemagraph" src="wp-content/themes/oldtimes_theme/vid/origami-2.mp4" playsinline="true" loop="true" autoplay="true" muted="true"></video>

		<div class="site-branding">
			<?php
			
			the_custom_logo();

			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			endif;

			$old_times_description = get_bloginfo( 'description', 'display' );

			if ( $old_times_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $old_times_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>

		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
