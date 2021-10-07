<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Code_Bytes_2021
 */

?>

<?php if ( post_password_required() ) { return; } ?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$the_code_bytes_2021_comment_count = get_comments_number();
			if ( '1' === $the_code_bytes_2021_comment_count ) {
				printf(
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'the-code-bytes-2021' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $the_code_bytes_2021_comment_count, 'comments title', 'the-code-bytes-2021' ) ),
					number_format_i18n( $the_code_bytes_2021_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments(
					array(
						'style'      => 'ol',
						'short_ping' => true,
					)
				);
			?>
		</ol>

		<?php
		the_comments_navigation();

		if ( ! comments_open() ) :
			?>
			<p class="no-comments">
				<?php esc_html_e( 'Comments are closed.', 'the-code-bytes-2021' ); ?>
			</p>
			<?php
		endif;

	endif;

	comment_form();
	?>

</div>
