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
	<?php dynamic_sidebar( 'sidebar-3' ); ?>
	<div class="float-box" style="padding: 0 20px;">
	<!-- Header -->
		<header>
			<h1><?php echo get_the_title() ?> </h1>
	<!-- 		<?php  ?> echo get_the_post_thumbnail() -->
			<div class="author-and-date">	
				<?php echo get_avatar(get_the_author_meta('user_email')) ?>
				<div style="display:flex; align-items: center;">
					<?php echo get_the_author() ?>
					<div style="width: 6px;height: 5px;border-radius: 50%;background-color:#f89e86;margin: 0 7px;"></div>
					<?php echo get_the_date()?>
				</div>
			</div>
		</header>	
			
		<section class="content">
			<?php the_content() ?>
		</section>

		<footer class="entry-footer"></footer>
	</div>
</article>
