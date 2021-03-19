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

<?php if ( in_category('sisyu') || post_is_in_descendant_category( get_term_by( 'slug', 'sisyu', 'category' ) )) : ?>
	<?php // 紫舟さん ?>
	<?php get_template_part( 'template_sisyu/single-sisyu'); ?>

<?php elseif ( in_category('utility') || post_is_in_descendant_category( get_term_by( 'slug', 'utility', 'category' ) )) : ?>
	<?php // OKWAVE ?>
	<?php get_template_part( 'template_utility/single-utility'); ?>

<?php elseif ( in_category('award') || post_is_in_descendant_category( get_term_by( 'slug', 'award', 'category' ) )) : ?>
	<?php // アワード ?>
	<?php get_template_part( 'template_award/single-award'); ?>

<?php elseif ( in_category('professional') || post_is_in_descendant_category( get_term_by( 'slug', 'professional', 'category' ) )) : ?>
	<?php // 専門家 ?>
	<?php get_template_part( 'template_professional/single-professional'); ?>

<?php elseif ( in_category('bizcs') || post_is_in_descendant_category( get_term_by( 'slug', 'bizcs', 'category' ) )) : ?>
	<?php // Bizcs ?>
	<?php get_template_part( 'template_bizcs/single-bizcs'); ?>

  <?php elseif ( in_category('campaign') || post_is_in_descendant_category( get_term_by( 'slug', 'campaign', 'category' ) )) : ?>
	<?php // campaign ?>
	<?php get_template_part( 'template_campaign/single-campaign'); ?>

<?php else : ?>
	<?php // それ以外のページの場合 ?>
	<?php get_template_part( 'modules/page-header' ); ?>
	<div class="sub-page-contents single">
		<?php get_template_part( 'blog_templates/single/' . Habakiri::get( 'blog_template' ) ); ?>
	</div>
	<?php get_footer(); ?>
<?php endif; ?>