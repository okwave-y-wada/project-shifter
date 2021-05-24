<?php
/**
 * template  : キャンペーン
 */
?>

<article class="post_contents contents_<?php echo esc_attr($post->post_name); ?>">
	<?php do_action( 'habakiri_before_entry_content' ); ?>

  <?php include("contents/main-image.php"); ?>

  <?php // コンテンツ1  ?>
  <?php
    $contents = get_field('cp_content1_type');
    if ($contents == 'cp_kind1') {
  ?>
    <?php while(have_rows('cp_rule')):the_row();  ?>
      <section class="content1">
        <?php include("contents/content-kind1.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_kind2') { ?>
    <?php while(have_rows('cp_bestanswer')):the_row();  ?>
      <section class="content1">
        <?php include("contents/content-kind2.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_kind3') { ?>
    <?php while(have_rows('cp_info')):the_row();  ?>
      <section class="content1">
        <?php include("contents/content-kind3.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_tieup') { ?>
    <?php while(have_rows('cp_tieup')):the_row();  ?>
      <section class="content1">
        <?php include("contents/content-tieup.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_free_headline') { ?>
    <?php while(have_rows('cp_free_headline_block')):the_row();  ?>
      <section class="content1">
      <?php include("contents/content-freeheadline.php"); ?>
    </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_free') { ?>
    <?php while(have_rows('cp_free_block')):the_row();  ?>
      <section class="content1">
      <?php include("contents/content-free.php"); ?>
    </section>
  <?php endwhile; ?>
  <?php } ?>



  <?php // コンテンツ2  ?>
  <?php
    $contents = get_field('cp_content2_type');
    if ($contents == 'cp_kind1') {
  ?>
    <?php while(have_rows('cp_rule2')):the_row();  ?>
      <section class="content2">
        <?php include("contents/content-kind1.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_kind2') { ?>
    <?php while(have_rows('cp_bestanswer2')):the_row();  ?>
      <section class="content2">
        <?php include("contents/content-kind2.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_kind3') { ?>
    <?php while(have_rows('cp_info2')):the_row();  ?>
      <section class="content2">
        <?php include("contents/content-kind3.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_tieup') { ?>
    <?php while(have_rows('cp_tieup2')):the_row();  ?>
      <section class="content2">
        <?php include("contents/content-tieup.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_free_headline') { ?>
    <?php while(have_rows('cp_free_headline_block2')):the_row();  ?>
      <section class="content2">
      <?php include("contents/content-freeheadline.php"); ?>
    </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_free') { ?>
    <?php while(have_rows('cp_free_block2')):the_row();  ?>
      <section class="content2">
      <?php include("contents/content-free.php"); ?>
    </section>
  <?php endwhile; ?>
  <?php } ?>


  <?php // コンテンツ3  ?>
  <?php
    $contents = get_field('cp_content3_type');
    if ($contents == 'cp_kind1') {
  ?>
    <?php while(have_rows('cp_rule3')):the_row();  ?>
      <section class="content3">
        <?php include("contents/content-kind1.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_kind2') { ?>
    <?php while(have_rows('cp_bestanswer3')):the_row();  ?>
      <section class="content3">
        <?php include("contents/content-kind2.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_kind3') { ?>
    <?php while(have_rows('cp_info3')):the_row();  ?>
      <section class="content3">
        <?php include("contents/content-kind3.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_tieup') { ?>
    <?php while(have_rows('cp_tieup3')):the_row();  ?>
      <section class="content3">
        <?php include("contents/content-tieup.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_free_headline') { ?>
    <?php while(have_rows('cp_free_headline_block3')):the_row();  ?>
      <section class="content3">
      <?php include("contents/content-freeheadline.php"); ?>
    </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_free') { ?>
    <?php while(have_rows('cp_free_block3')):the_row();  ?>
      <section class="content3">
      <?php include("contents/content-free.php"); ?>
    </section>
  <?php endwhile; ?>
  <?php } ?>


  <?php // コンテンツ4 ?>
  <?php
    $contents = get_field('cp_content4_type');
    if ($contents == 'cp_kind1') {
  ?>
    <?php while(have_rows('cp_rule4')):the_row();  ?>
      <section class="content4">
        <?php include("contents/content-kind1.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_kind2') { ?>
    <?php while(have_rows('cp_bestanswer4')):the_row();  ?>
      <section class="content4">
        <?php include("contents/content-kind2.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_kind3') { ?>
    <?php while(have_rows('cp_info4')):the_row();  ?>
      <section class="content4">
        <?php include("contents/content-kind3.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_tieup') { ?>
    <?php while(have_rows('cp_tieup4')):the_row();  ?>
      <section class="content4">
        <?php include("contents/content-tieup.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_free_headline') { ?>
    <?php while(have_rows('cp_free_headline_block4')):the_row();  ?>
      <section class="content4">
      <?php include("contents/content-freeheadline.php"); ?>
    </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_free') { ?>
    <?php while(have_rows('cp_free_block4')):the_row();  ?>
      <section class="content4">
      <?php include("contents/content-free.php"); ?>
    </section>
  <?php endwhile; ?>
  <?php } ?>


  <?php // コンテンツ5 ?>
  <?php
    $contents = get_field('cp_content5_type');
    if ($contents == 'cp_kind1') {
  ?>
    <?php while(have_rows('cp_rule5')):the_row();  ?>
      <section class="content5">
        <?php include("contents/content-kind1.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_kind2') { ?>
    <?php while(have_rows('cp_bestanswer5')):the_row();  ?>
      <section class="content5">
        <?php include("contents/content-kind2.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_kind3') { ?>
    <?php while(have_rows('cp_info5')):the_row();  ?>
      <section class="content5">
        <?php include("contents/content-kind3.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_tieup') { ?>
    <?php while(have_rows('cp_tieup5')):the_row();  ?>
      <section class="content5">
        <?php include("contents/content-tieup.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_free_headline') { ?>
    <?php while(have_rows('cp_free_headline_block5')):the_row();  ?>
      <section class="content5">
      <?php include("contents/content-freeheadline.php"); ?>
    </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_free') { ?>
    <?php while(have_rows('cp_free_block5')):the_row();  ?>
      <section class="content5">
      <?php include("contents/content-free.php"); ?>
    </section>
  <?php endwhile; ?>
  <?php } ?>

	<?php do_action( 'habakiri_after_entry_content' ); ?>
	<?php get_template_part( 'modules/link-pages' ); ?>
</article>
