<?php
/**
 * template  : OKWAVE関連
 */
?>
<div class="wrap" id="page_<?php echo esc_attr($post->post_name); ?>">
	<main class="main_contents contents_<?php echo esc_attr($post->post_name); ?>">
		<?php
			if ( is_404() ) {
				get_template_part( 'content', 'none' );
			} else {
				while ( have_posts() ) {
				the_post();
				get_template_part( 'content', 'single' );
				}
			}
		?>
	</main>
</div>
<div class="navigation">
	<?php get_footer(); ?>
</div>
