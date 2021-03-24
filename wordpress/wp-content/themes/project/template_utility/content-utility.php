<?php
/**
 * template  : OKWAVE関連
 */
?>

<article>
	<?php do_action( 'habakiri_before_entry_content' ); ?>
			<?php if( get_field('body_html_check') ): ?>
			<?php Habakiri::the_title(); ?>
			<?php the_field('body_html'); ?>
		<?php else : ?>
		<h1 class="title"><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<?php endif; ?>
	<?php do_action( 'habakiri_after_entry_content' ); ?>
	<?php get_template_part( 'modules/link-pages' ); ?>
</article>
