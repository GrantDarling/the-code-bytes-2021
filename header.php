<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Code_Bytes_2021
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Adsense Ads -->
	<script data-ad-client="ca-pub-3304193651719804" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script async custom-element="amp-auto-ads"
			src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'the-code-bytes-2021' ); ?></a>

	<header id="masthead" class="site-header">
		<div id="header-container">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;

				$the_code_bytes_2021_description = get_bloginfo( 'description', 'display' );
				
				if ( $the_code_bytes_2021_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $the_code_bytes_2021_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			
			<nav id="site-navigation" class="main-navigation">
				<div class="navigation-header">
				<h1 id="mobile-title" aria-controls="primary-menu">THE CODE BYTES</h1>
				<button class="menu-toggle" aria-expanded="false">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</button>
				</div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				// Search bar 
				get_search_form();
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header>
	<div class="header-shim"></div>
	<!-- #masthead -->
