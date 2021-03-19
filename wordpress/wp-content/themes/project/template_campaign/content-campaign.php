<?php
/**
 * template  : アワード
 */
?>

<article class="post_contents contents_<?php echo esc_attr($post->post_name); ?>">
	<?php do_action( 'habakiri_before_entry_content' ); ?>

  <?php include("contents/main-image.php"); ?>

  <?php while(have_rows('cp_contents1')):the_row();  ?>



    <?php
      $cp_contents = get_sub_field('cp_content1_select');
      if ($cp_contents == 'kind1') { ?>
      <?php include("contents/content-kind1.php"); ?>
    <?php } elseif ($cp_contents == 'kind2') { ?>
      <?php include("contents/content-kind2.php"); ?>
    <?php } elseif ($cp_contents == 'kind3') { ?>
      <?php include("contents/content-kind3.php"); ?>
    <?php } ?>
  <?php endwhile; ?>

  <?php while(have_rows('cp_contents2')):the_row();  ?>
  <?php
    $cp_contents = get_sub_field('cp_content1_select');
    if ($cp_contents == 'kind1') { ?>
      <?php include("contents/content-kind1.php"); ?>
    <?php } elseif ($cp_contents == 'kind2') { ?>
      <?php include("contents/content-kind2.php"); ?>
    <?php } elseif ($cp_contents == 'kind3') { ?>
      <?php include("contents/content-kind3.php"); ?>
    <?php } ?>
  <?php endwhile; ?>

  <?php while(have_rows('cp_contents3')):the_row();  ?>
  <?php
    $cp_contents = get_sub_field('cp_content1_select');
    if ($cp_contents == 'kind1') { ?>
      <?php include("contents/content-kind1.php"); ?>
    <?php } elseif ($cp_contents == 'kind2') { ?>
      <?php include("contents/content-kind2.php"); ?>
    <?php } elseif ($cp_contents == 'kind3') { ?>
      <?php include("contents/content-kind3.php"); ?>
  <?php } ?>
  <?php endwhile; ?>

	<?php do_action( 'habakiri_after_entry_content' ); ?>
	<?php get_template_part( 'modules/link-pages' ); ?>
</article>
