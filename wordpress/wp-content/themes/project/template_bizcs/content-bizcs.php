<?php
/**
 * template  : アワード
 */
?>

<article class="post_contents">
	<?php do_action( 'habakiri_before_entry_content' ); ?>


		<?php if( get_field('body_html_check') ): ?>
			<?php// HTMLを入力していてた場合はこっち ?>
			<?php the_field('body_html'); ?>

		<?php else : ?>
			<!-- 記事本文があった時 2021以降はここ使うかな -->
		<?php endif; ?>

	<?php do_action( 'habakiri_after_entry_content' ); ?>
	<?php get_template_part( 'modules/link-pages' ); ?>
</article>
