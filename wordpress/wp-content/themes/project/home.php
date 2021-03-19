<?php
/**
 * Version    : 1.1.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>

<?php get_header(); ?>
<?php get_template_part( 'modules/page-header' ); ?>

<?php if ( in_category('sisyu') || post_is_in_descendant_category( get_term_by( 'slug', 'sisyu', 'category' ) )): ?>
	<?php // 紫舟さん ?>
	<?php get_template_part( 'template_sisyu/archive-sisyu'); ?>

<?php elseif ( in_category('award') || post_is_in_descendant_category( get_term_by( 'slug', 'award', 'category' ) )): ?>
	<?php // アワード ?>
	<?php get_template_part( 'template_award/archive-award'); ?>

<?php else : ?>

	<?php //それ以外のページの場合 home ?>
	<div class="sub-page-contents home">
		<?php get_template_part( 'blog_templates/archive/' . Habakiri::get( 'blog_template' ) ); ?>
	</div>

	<?php get_footer(); ?>

<?php endif; ?>