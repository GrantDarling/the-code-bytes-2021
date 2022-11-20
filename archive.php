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


	<main id="primary" class="site-main archive">
		<div class="container">
			<div class="categories-container">
			<?php 
				$archive_id = get_query_var('cat');
				$categories = get_categories();
				foreach($categories as $category) {
					$active = ($category->term_id == $archive_id) ?  ('active') : ('');
					$is_active = ($category->term_id == $archive_id);
					if($is_active) { $active_cat = $category->term_id; };

					echo '<a href="' . get_category_link($category->term_id) . '">
									<div class="category badge '.$active.'">'.$category->name.'</div>
								</a>';
				}
			?>
			</div>
			<div class="display-flex-center height-100">
				<div class="articles-container">
					<?php getArticlesByCategory($active_cat,  30, "category"); ?>
				</div>
				<!-- Promotions Sidebar -->
				<div class="promotions">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</main>

<?php
get_footer();
