<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Code_Bytes_2021
 */

?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="categories__blog">
			<?php
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			echo 
			'<a class="categories__article" href="' . get_permalink() . '">' . 
				'<div class="category__body" style="' . 
					'background: linear-gradient(158deg, rgb(14 14 14 / 71%) 0%, rgb(0 0 0) 100%), ' . 
					'url( ' . $featured_img_url . ') ' . 
					'center center no-repeat;">'. get_the_title() 
				.'</div>'. 
				'<div class="category__footer">'.get_the_date().'</div>'. 
			'</a>';
			?>
		</div>
		<footer class="article__footer"></footer>
	</article>
	
