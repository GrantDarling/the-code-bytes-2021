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
	<!-- Header -->
	<header>
		<h1><?php echo get_the_title() ?> </h1>
		<?php echo get_the_post_thumbnail() ?>
		<div class="author-and-date">	
			<?php echo get_avatar(get_the_author_meta('user_email')) ?>
			Written By: <?php echo get_the_author() ?> <br>
			<?php echo get_the_date()?>
		</div>
	</header>	
		
	<section class="content">
		<?php the_content() ?>
	</section>

	<footer class="entry-footer"></footer>
</article>

<?php the_ID(); ?>