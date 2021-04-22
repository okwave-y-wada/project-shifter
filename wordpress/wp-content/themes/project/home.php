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

<?php elseif (is_category(array('annual_qa','annual_user','monthly_user'))) : ?>
   <?php // アワード ?>
  <?php get_template_part( 'template_award/archive-award'); ?>

  <?php elseif (is_category(array('service'))) : ?>
    <?php // service ?>
    <?php get_template_part( 'template_service/archive-service'); ?>

<?php else : ?>

	<?php //それ以外のページの場合 home ?>
	<div class="sub-page-contents home">
		<?php //get_template_part( 'blog_templates/archive/' . Habakiri::get( 'blog_template' ) ); ?>
    <div class="wrap no_contents">
      <p>
        ページが見つかりませんでした。<br>
        お探しのページが移動したか削除されています。<br>
      </p>
		</div>
  </div>

	<?php get_footer(); ?>

<?php endif; ?>
