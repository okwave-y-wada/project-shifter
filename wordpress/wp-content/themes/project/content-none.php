<?php
/**
 * Version    : 1.3.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 28, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php
$modifer = 'none';
if ( is_404() ) {
	$modifer = '404';
} elseif ( is_search() ) {
	$modifer = 'search';
}
?>
<article class="post_contents">
	<?php if ( is_404() ) : ?>
		<div class="wrap no_contents">
			<p>
				<?php _e( 'Woops! Page not found.', 'habakiri' ); ?><br />
				<?php _e( 'The page you are looking for may be moved or deleted.', 'habakiri' ); ?><br />
				<!-- ?php _e ( 'Please search this serch box.', 'habakiri' ); ? -->
			</p>
			<p>
				<!-- ?php get_search_form(); ? -->
			</p>
		</div>
	<?php elseif ( is_search() ) : ?>
		<p>
			<?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'habakiri' ); ?>
		</p>
		<p>
			<?php get_search_form(); ?>
		</p>
	<?php else : ?>
		<p>
			<?php _e( 'No posts.', 'habakiri' ); ?>
		</p>
	<?php endif; ?>
</article>
