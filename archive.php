<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Code_Bytes_2021
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				'<h1 class="page-title>' . single_term_title() . '</h1>';
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="category__all-posts">

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					echo '<div class="navigation"><button>';
				the_posts_navigation();
				echo '</button></div>';

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
				
			</section>
	</main><!-- #main -->

<?php
get_footer();
