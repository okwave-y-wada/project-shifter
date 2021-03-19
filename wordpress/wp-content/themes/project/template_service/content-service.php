<?php
/**
 * template  : サービス
 */
?>

<article class="post_contents">
	<?php do_action( 'habakiri_before_entry_content' ); ?>

  <?php include("contents/header.php"); ?>


  <?php include("contents/main-image.php"); ?>



	<?php do_action( 'habakiri_after_entry_content' ); ?>
	<?php get_template_part( 'modules/link-pages' ); ?>
</article>
