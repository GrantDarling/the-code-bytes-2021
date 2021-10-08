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
					dynamic_sidebar( 'sidebar-3' );
					echo 
					'<div class="article-container">';
						dynamic_sidebar( 'sidebar-2' );
						echo
						'<div class="article">';
								get_template_part( 'template-parts/content-single', get_post_type() );
						echo 
						'</div>';
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