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

	<main id="primary" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();


				echo 
				'<div class="article">'.
					'<section id="sidebar-1" class="sidebar"></section>'; 
						get_template_part( 'template-parts/content-single', get_post_type() );
						get_sidebar();
				echo 
				'</div>';

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'the-code-bytes-2021' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'the-code-bytes-2021' ) . '</span> <span class="nav-title">%title</span>',
					)
				);

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile;
			?>
	</main>
<?php
get_footer();