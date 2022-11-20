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
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P79KGQN');</script>
	<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

<!-- highlight.js -->
<style>pre code.hljs{display:block;overflow-x:auto;padding:1em}code.hljs{padding:3px 5px}.hljs{color:#575279;background:#faf4ed}.hljs ::selection,.hljs::selection{background-color:#f2e9de;color:#575279}.hljs-comment{color:#9893a5}.hljs-tag{color:#6e6a86}.hljs-operator,.hljs-punctuation,.hljs-subst{color:#575279}.hljs-operator{opacity:.7}.hljs-bullet,.hljs-deletion,.hljs-name,.hljs-selector-tag,.hljs-template-variable,.hljs-variable{color:#1f1d2e}.hljs-attr,.hljs-link,.hljs-literal,.hljs-number,.hljs-symbol,.hljs-variable.constant_{color:#eba693}.hljs-class .hljs-title,.hljs-title,.hljs-title.class_{color:#ea9d34}.hljs-strong{font-weight:700;color:#ea9d34}.hljs-addition,.hljs-code,.hljs-string,.hljs-title.class_.inherited__{color:#d7827e}.hljs-built_in,.hljs-doctag,.hljs-keyword.hljs-atrule,.hljs-quote,.hljs-regexp{color:#286983}.hljs-attribute,.hljs-function .hljs-title,.hljs-section,.hljs-title.function_,.ruby .hljs-property{color:#56949f}.diff .hljs-meta,.hljs-keyword,.hljs-template-tag,.hljs-type{color:#907aa9}.hljs-emphasis{color:#907aa9;font-style:italic}.hljs-meta,.hljs-meta .hljs-keyword,.hljs-meta .hljs-string{color:#c5c3ce}.hljs-meta .hljs-keyword,.hljs-meta-keyword{font-weight:700}</style>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/languages/go.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
</head>
<body 
<?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P79KGQN"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'the-code-bytes-2021' ); ?></a>

	<header id="masthead" class="site-header">
		<div id="masthead-mimic"></div>
	  
		<div id="header-container">
				<!-- Site Branding Container -->
			<div class="site-branding">
				<?php 
					the_custom_logo();
					if ( is_front_page() && is_home() ) : ?>
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
				<?php 
					endif; 
				?>
			</div>

			<!-- Navigation -->
			<nav id="site-navigation" class="main-navigation">
				<div class="navigation-header">
				<h1 id="mobile-title" aria-controls="primary-menu">THE CODE BYTES</h1>
				<button class="menu-toggle" aria-expanded="false">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</button>
				</div>
				<script> 
					const get_all_articles_by_category = '<?php get_all_articles_by_category() ?>'; 
				</script>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				get_search_form();
				?>
			</nav>
		</div>
		<!-- Google Tag Manager (noscript) **For Users Not Using JavaScript -->
		<!-- NOTE: THIS SHOULD BE AFTER THE OPENING OF BODY TAG BUT WE DONT HAVE ONE SO THIS WILL HAVE TO DO -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P79KGQN"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</header>
	<div class="header-shim"></div>
