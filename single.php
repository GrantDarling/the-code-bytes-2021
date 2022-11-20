<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package The_Code_Bytes_2021
 */

	get_header();
?>

	<main id="primary" class="site-main single">
		<div class="single__shim"></div>
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
		<div class="single__article">
			<?php get_template_part( 'template-parts/content-single', get_post_type() ); ?>
				<div class="single__navigation">
				<?php get_template_part( 'template-parts/author-bio' ); ?>
				<?php the_post_navigation(
					array(
						'prev_text' => '<span class="single__navigation--previous">' . esc_html__( 'Previous Article:', 'the-code-bytes-2021' ) . '</span> <span class="title">%title</span>',
						'next_text' => '<span class="single__navigation--next">' . esc_html__( 'Next Article:', 'the-code-bytes-2021' ) . '</span> <span class="title">%title</span>',
					));
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</main>
<?php
	get_footer();