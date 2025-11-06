<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Landscaping
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no, address=no">
	<meta name="description" content="Company: Landscaping, Interlocking, Concrete, Area: Toronto and GTA, Ontario, free estimate, affordable prices">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'landscaping' ); ?></a>

	<header id="masthead" class="site-header">
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
			$landscaping_description = get_bloginfo( 'description', 'display' );
			if ( $landscaping_description || is_customize_preview() ) :
				?>
				<h2 class="site-description"><?php echo $landscaping_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>
			<?php endif; ?>
		</div><!-- .site-branding -->
		
		<div class="top">
		<button class="mobile-nav-toggle" aria-controls="primary-menu" aria-expanded="false">
			<span class="sr-only">Menu</span>
		</button>
		</div>

		<nav id="site-navigation" class="main-navigation">
		
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'items_wrap'     => '<ul id="%1$s" data-visible="false" class="%2$s">%3$s</ul>',
					'container'		 =>  false
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
