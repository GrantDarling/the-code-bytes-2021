<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Code_Bytes_2021
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php dynamic_sidebar( 'sidebar-3' ); ?>
	<article class="article">
		<header class="article__header">
			<h1 class="article__title"><?php echo get_the_title() ?></h1>
			<?php // echo get_the_post_thumbnail() ?>
			<div class="article__author-info">	
				<?php echo get_avatar(get_the_author_meta('user_email')) ?>
				<div class="article__author-date-container">
					<?php echo get_the_author() ?>
					<div class="article__author-date-divider"></div>
					<?php echo get_the_date()?>
				</div>
			</div>
		</header>	
		<section class="article__content">
			<?php the_content() ?>
		</section>
		<footer class="article__footer"></footer>
</article>
</div>
