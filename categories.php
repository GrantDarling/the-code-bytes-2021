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
				<a target="_blank" class="landing__social" href="mailto:developer@grantdarling.com?subject=The Code Bytes Inquiry"><img src="https://thecodebytes.com/wp-content/uploads/2021/01/email-me.svg" alt="Medium" /></a>
				<a target="_blank" class="landing__social" href="https://grantdarling.medium.com/"><img src="https://thecodebytes.com/wp-content/uploads/2021/01/Medium-Logo.svg" alt="Email" /></a>
			</div>
		</div>

		<!-- Articles -->
		<section class="articles-promotions">	
			<div class="articles">

				<!-- Featured Article -->
				<div id="featured-article">
					<h1>Featured Article</h1>
					<?php getFeaturedArticle(); ?>
				</div>

				<!-- Top Articles -->
				<div id="top-articles">
					<h1>Top Articles</h1>
					<?php getArticlesByTag("homepage", 8, "top"); ?>
					<div class="articles__buttons">
						<button data-article='top' class="articles__browse-more">Browse More</button>
						<a href="/category/archive/"><button>All Articles</button></a>
					</div>
				</div>

				<!-- Latest Articles -->
				<div id="latest-articles">
					<h1>Latest Articles</h1>
					<?php getArticlesByTag("", 10, "latest"); ?>
					<div class="articles__buttons">
						<button data-article='latest' class="articles__browse-more">Browse More</button>
						<a href="/category/archive/"><button>All Articles</button></a>
					</div>
				</div>
			</div>

			<!-- Promotions Sidebar -->
			<div class="promotions">
				<?php get_sidebar(); ?>
			</div>
		</section>
	</main>
<?php
get_footer();
