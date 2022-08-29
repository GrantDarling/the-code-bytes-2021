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
<style>pre code.hljs{display:block;overflow-x:auto;padding:1em}code.hljs{padding:3px 5px}.hljs{background:#011627;color:#d6deeb}.hljs-keyword{color:#c792ea;font-style:italic}.hljs-built_in{color:#addb67;font-style:italic}.hljs-type{color:#82aaff}.hljs-literal{color:#ff5874}.hljs-number{color:#f78c6c}.hljs-regexp{color:#5ca7e4}.hljs-string{color:#ecc48d}.hljs-subst{color:#d3423e}.hljs-symbol{color:#82aaff}.hljs-class{color:#ffcb8b}.hljs-function{color:#82aaff}.hljs-title{color:#dcdcaa;font-style:italic}.hljs-params{color:#7fdbca}.hljs-comment{color:#637777;font-style:italic}.hljs-doctag{color:#7fdbca}.hljs-meta,.hljs-meta .hljs-keyword{color:#82aaff}.hljs-meta .hljs-string{color:#ecc48d}.hljs-section{color:#82b1ff}.hljs-attr,.hljs-name,.hljs-tag{color:#7fdbca}.hljs-attribute{color:#80cbc4}.hljs-variable{color:#addb67}.hljs-bullet{color:#d9f5dd}.hljs-code{color:#80cbc4}.hljs-emphasis{color:#c792ea;font-style:italic}.hljs-strong{color:#addb67;font-weight:700}.hljs-formula{color:#c792ea}.hljs-link{color:#ff869a}.hljs-quote{color:#697098;font-style:italic}.hljs-selector-tag{color:#ff6363}.hljs-selector-id{color:#fad430}.hljs-selector-class{color:#addb67;font-style:italic}.hljs-selector-attr,.hljs-selector-pseudo{color:#c792ea;font-style:italic}.hljs-template-tag{color:#c792ea}.hljs-template-variable{color:#addb67}.hljs-addition{color:#addb67ff;font-style:italic}.hljs-deletion{color:#ef535090;font-style:italic}</style>
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
