<?php
/**
 * Version    : 1.0.1
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 24, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php if(is_404()): ?>
	<?php get_template_part( 'template_common/footer-common'); ?>

<!-- 404 footer -->
<?php else : ?>

	<?php if ( in_category('sisyu') || post_is_in_descendant_category( get_term_by( 'slug', 'sisyu', 'category' ) )): ?>
		<?php // 紫舟さん footer ?>
		<?php get_template_part( 'template_sisyu/footer-sisyu'); ?>

	<?php elseif ( in_category('bizcs') || post_is_in_descendant_category( get_term_by( 'slug', 'bizcs', 'category' ) )): ?>

	<?php else : ?>
		<?php get_template_part( 'template_common/footer-common'); ?>
		
	<?php endif; ?>


<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
