<?php
/**
 * Version    : 1.4.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 28, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php if ( in_category('sisyu') || post_is_in_descendant_category( get_term_by( 'slug', 'sisyu', 'category' ) )) : ?>
	<?php // 紫舟さん ?>
	<?php get_template_part( 'template_sisyu/content-sisyu'); ?>

<?php elseif ( in_category('utility') || post_is_in_descendant_category( get_term_by( 'slug', 'utility', 'category' ) )) : ?>
	<?php // OKWAVE ?>
	<?php get_template_part( 'template_utility/content-utility'); ?>

<?php elseif ( in_category('award') || post_is_in_descendant_category( get_term_by( 'slug', 'award', 'category' ) )) : ?>
	<?php // アワード ?>
	<?php get_template_part( 'template_award/content-award'); ?>

<?php elseif ( in_category('professional') || post_is_in_descendant_category( get_term_by( 'slug', 'professional', 'category' ) )) : ?>
	<?php // 専門家 ?>
	<?php get_template_part( 'template_professional/content-professional'); ?>

	<?php elseif ( in_category('bizcs') || post_is_in_descendant_category( get_term_by( 'slug', 'bizcs', 'category' ) )) : ?>
	<?php // bizCs ?>
	<?php get_template_part( 'template_bizcs/content-bizcs'); ?>

	<?php elseif ( in_category('service') || post_is_in_descendant_category( get_term_by( 'slug', 'service', 'category' ) )) : ?>
	<?php // bizCs ?>
	<?php get_template_part( 'template_service/content-service'); ?>

	<?php elseif ( in_category('campaign')) : ?>
	<?php // campaign ?>
	<?php get_template_part( 'template_campaign/content-campaign'); ?>

	<?php elseif ( in_category('qa')) : ?>
	<?php // qa ?>
	<?php get_template_part( 'template_campaign/content-qa'); ?>

<?php else : ?>
	<?php // それ以外のページの場合 content.php ?>
<article <?php post_class( array( 'article', 'article--single' ) ); ?>>
	<div class="entry">
		<?php Habakiri::the_title(); ?>
		<?php get_template_part( 'modules/entry-meta' ); ?>
		<?php do_action( 'habakiri_before_entry_content' ); ?>
		<div class="entry__content entry-content">
			<?php the_content(); ?>
		</div>
		<?php do_action( 'habakiri_after_entry_content' ); ?>
  </div>
	<?php get_template_part( 'modules/link-pages' ); ?>
	<?php get_template_part( 'modules/related-posts' ); ?>
	<?php
	 //if ( comments_open() || pings_open() || get_comments_number() ) {
	//	comments_template( '', true );
	//}
	?>
</article>
<?php endif; ?>
