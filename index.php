<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Code_Bytes_2021
 */

get_header();
?>
	<main id="primary" class="site-main">
		<!-- Landing Banner -->
		<div class="landing__banner">
			<div class="landing__tagline">Keeping Code Cool <span>Since 2020.</span></div>
			<div class="landing__socials">
				<a target="_blank" class="landing__social" href="mailto:grantcarterdarling@gmail.com?subject=The Code Bytes Inquiry"><img src="https://thecodebytes.com/wp-content/uploads/2021/01/email-me.svg" alt="Medium" /></a>
				<a target="_blank" class="landing__social" href="https://grantdarling.medium.com/"><img src="https://thecodebytes.com/wp-content/uploads/2021/01/Medium-Logo.svg" alt="Email" /></a>
			</div>
		</div>

		<!-- Landing Content -->
		<section class="landing__container">
			<h1 class="landing__title-desktop">THE CODE BYTES</h1>
			<div class="landing__buttons">
				<a class="scroll" href="#top-articles"> 
					<button id="landing__button--1">
						<svg width="180px" height="60px" preserveAspectRatio="none" class="border">
						<polyline points="151,1 151,44.6 1,44.6 1,1 151,1" preserveAspectRatio="none" class="bg-line" />
						<polyline points="151,1 151,44.6 1,44.6 1,1 151,1" preserveAspectRatio="none" class="hl-line" />
						</svg>
						<span>Top Articles</span>
					</button>
				</a>
				<a class="scroll" href="#latest-articles">
					<button id="landing__button--2">
						<svg width="5080px" height="60px" preserveAspectRatio="none" class="border">
						<polyline points="151,1 151,44.6 1,44.6 1,1 151,1" preserveAspectRatio="none" class="bg-line" />
						<polyline points="151,1 151,44.6 1,44.6 1,1 151,1"  preserveAspectRatio="none"class="hl-line" />
						</svg>
						<span>Latest Articles</span>
					</button>
				</a>
			</div>
			<a class="landing__about" href="/about">Want to learn more?</a>
		</section>

		<!-- Top Articles -->
		<section class="articles-promotions" id="top-articles">
			<h1>Top Articles</h1>
			<div class="articles">
				<?php getArticlesByTag("homepage", 5, "top"); ?>
				<div class="articles__buttons">
					<button data-article='top' class="articles__browse-more">Browse More</button>
					<a href="/category/archive/"><button>All Articles</button></a>
				</div>
			</div>
			<div class="promotions">
				<aside class="newsletter">
					<header>
						<img src="https://thecodebytes.com/wp-content/uploads/2021/01/the-code-bytes-logo-2@2x.png" />
					</header>
					<h2> The Code Bytes Newsletter</h2>
						<p> Keep up to date. </p>
						<?php newsletter() ?>
				</aside>
			</div>
		</section>

		<!-- Filler -->
		<div></div>
		
		<!-- Latest Articles -->
		<section class="articles-promotions" id="latest-articles">
			<h1>Latest Articles</h1>
			<div class="articles">
				<?php getArticlesByTag("", 5, "latest"); ?>
				<div class="articles__buttons">
					<button data-article='latest' class="articles__browse-more">Browse More</button>
					<a href="/category/archive/"><button>All Articles</button></a>
				</div>
			</div>
			<div class="promotions">
				<aside class="newsletter">
					<header>
						<img src="https://thecodebytes.com/wp-content/uploads/2021/01/Digital-Ocean-Promo.png" />
					</header>
					<h2> Host with Digital Ocean </h2>
						<p class="promotions__p"> $100 Free Credit </p>
						<a class="promotions__button" target="_blank" href="https://m.do.co/c/398f3c7d3090"><button >Signup</button></a>
				</aside>
			</div>
		</section>
	</main>
<?php
get_footer();
