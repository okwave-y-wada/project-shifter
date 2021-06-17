<?php
/**
 * template  : サービス
 */
$main_img = get_field('se_main_type');
?>

<article class="post_contents <?php if ($main_img == 'type4') { ?>cs_interview<?php } ?>">
	<?php do_action( 'habakiri_before_entry_content' ); ?>

  <?php include("contents/main-image.php"); ?>

  <?php // コンテンツ1  ?>
  <?php
    $contents = get_field('se_content1_type');
    if ($contents == 'contact') {
  ?>
    <?php while(have_rows('se_contact')):the_row();  ?>
       <section id="content1" class="content1">
        <?php include("contents/content-contact.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'comparelist') { ?>
    <?php while(have_rows('se_result_list')):the_row();  ?>
         <section id="content1" class="content1">
          <?php include("contents/content-task-result.php"); ?>
        </section>
      <?php endwhile; ?>
  <?php } elseif ($contents == 'image_and_text') { ?>
    <?php while(have_rows('se_largeimage-text')):the_row();  ?>
         <section id="content1" class="content1">
          <?php include("contents/content-largeimage.php"); ?>
        </section>
      <?php endwhile; ?>
  <?php } elseif ($contents == 'listup') { ?>
    <?php while(have_rows('se_listup')):the_row();  ?>
       <section id="content1" class="content1">
        <?php include("contents/content-listup.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'site') { ?>
    <?php while(have_rows('se_site')):the_row();  ?>
       <section id="content1" class="content1">
        <?php include("contents/content-site.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'free') { ?>
    <?php while(have_rows('se_free')):the_row();  ?>
         <section id="content7" class="content7">
        <?php include("contents/content-free.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } ?>

  <?php // コンテンツ2  ?>
  <?php
    $contents = get_field('se_content2_type');
    if ($contents == 'contact') { ?>
      <?php while(have_rows('se_contact2')):the_row();  ?>
         <section id="content2" class="content2">
          <?php include("contents/content-contact.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'comparelist') { ?>
      <?php while(have_rows('se_result_list2')):the_row();  ?>
         <section id="content2" class="content2">
          <?php include("contents/content-task-result.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'image_and_text') { ?>
      <?php while(have_rows('se_largeimage-text2')):the_row();  ?>
         <section id="content2" class="content2">
          <?php include("contents/content-largeimage.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'listup') { ?>
      <?php while(have_rows('se_listup3')):the_row();  ?>
         <section id="content3" class="content3">
          <?php include("contents/content-listup.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'site') { ?>
      <?php while(have_rows('se_site2')):the_row();  ?>
         <section id="content2" class="content2">
          <?php include("contents/content-site.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'free') { ?>
      <?php while(have_rows('se_free2')):the_row();  ?>
         <section id="content2" class="content2">
          <?php include("contents/content-free.php"); ?>
        </section>
      <?php endwhile; ?>
  <?php } ?>

  <?php // コンテンツ3  ?>
  <?php
    $contents = get_field('se_content3_type');
    if ($contents == 'contact') { ?>
      <?php while(have_rows('se_contact3')):the_row();  ?>
         <section id="content3" class="content3">
          <?php include("contents/content-contact.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'comparelist') { ?>
      <?php while(have_rows('se_result_list3')):the_row();  ?>
         <section id="content3" class="content3">
          <?php include("contents/content-task-result.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'image_and_text') { ?>
      <?php while(have_rows('se_largeimage-text3')):the_row();  ?>
         <section id="content3" class="content3">
          <?php include("contents/content-largeimage.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'listup') { ?>
      <?php while(have_rows('se_listup3')):the_row();  ?>
         <section id="content3" class="content3">
          <?php include("contents/content-listup.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'site') { ?>
      <?php while(have_rows('se_site3')):the_row();  ?>
         <section id="content3" class="content3">
          <?php include("contents/content-site.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'free') { ?>
      <?php while(have_rows('se_free3')):the_row();  ?>
         <section id="content3" class="content3">
          <?php include("contents/content-free.php"); ?>
        </section>
      <?php endwhile; ?>
  <?php } ?>

  <?php // コンテンツ4  ?>
  <?php
    $contents = get_field('se_content4_type');
    if ($contents == 'contact') { ?>
      <?php while(have_rows('se_contact4')):the_row();  ?>
         <section id="content4" class="content4">
          <?php include("contents/content-contact.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'comparelist') { ?>
      <?php while(have_rows('se_result_list4')):the_row();  ?>
         <section id="content4" class="content4">
          <?php include("contents/content-task-result.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'image_and_text') { ?>
      <?php while(have_rows('se_largeimage-text4')):the_row();  ?>
         <section id="content4" class="content4">
          <?php include("contents/content-largeimage.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'listup') { ?>
      <?php while(have_rows('se_listup4')):the_row();  ?>
         <section id="content4" class="content4">
          <?php include("contents/content-listup.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'site') { ?>
      <?php while(have_rows('se_site4')):the_row();  ?>
         <section id="content4" class="content4">
          <?php include("contents/content-site.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'free') { ?>
      <?php while(have_rows('se_free4')):the_row();  ?>
         <section id="content4" class="content4">
          <?php include("contents/content-free.php"); ?>
        </section>
      <?php endwhile; ?>
  <?php } ?>


  <?php // コンテンツ5  ?>
  <?php
    $contents = get_field('se_content5_type');
    if ($contents == 'contact') { ?>
      <?php while(have_rows('se_contact5')):the_row();  ?>
        <section id="content5" class="content5">
          <?php include("contents/content-contact.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'comparelist') { ?>
      <?php while(have_rows('se_result_list5')):the_row();  ?>
        <section id="content5" class="content5">
          <?php include("contents/content-task-result.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'image_and_text') { ?>
      <?php while(have_rows('se_largeimage-text5')):the_row();  ?>
        <section id="content5" class="content5">
          <?php include("contents/content-largeimage.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'listup') { ?>
      <?php while(have_rows('se_listup5')):the_row();  ?>
        <section id="content5" class="content5">
          <?php include("contents/content-listup.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'site') { ?>
      <?php while(have_rows('se_site5')):the_row();  ?>
        <section id="content5" class="content5">
          <?php include("contents/content-site.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'free') { ?>
      <?php while(have_rows('se_free5')):the_row();  ?>
        <section id="content5" class="content5">
          <?php include("contents/content-free.php"); ?>
        </section>
      <?php endwhile; ?>
  <?php } ?>

  <?php // コンテンツ6  ?>
  <?php
    $contents = get_field('se_content6_type');
    if ($contents == 'contact') { ?>
      <?php while(have_rows('se_contact6')):the_row();  ?>
         <section id="content6" class="content6">
          <?php include("contents/content-contact.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'comparelist') { ?>
      <?php while(have_rows('se_result_list6')):the_row();  ?>
         <section id="content6" class="content6">
          <?php include("contents/content-task-result.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'image_and_text') { ?>
      <?php while(have_rows('se_largeimage-text6')):the_row();  ?>
         <section id="content6" class="content6">
          <?php include("contents/content-largeimage.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'listup') { ?>
      <?php while(have_rows('se_listup6')):the_row();  ?>
         <section id="content6" class="content6">
          <?php include("contents/content-listup.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'site') { ?>
      <?php while(have_rows('se_site6')):the_row();  ?>
         <section id="content6" class="content6">
          <?php include("contents/content-site.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'free') { ?>
      <?php while(have_rows('se_free6')):the_row();  ?>
         <section id="content6" class="content6">
          <?php include("contents/content-free.php"); ?>
        </section>
      <?php endwhile; ?>
  <?php } ?>

  <?php // コンテンツ7  ?>
  <?php
    $contents = get_field('se_content7_type');
    if ($contents == 'contact') { ?>
    <?php while(have_rows('se_contact7')):the_row();  ?>
       <section id="content6" class="content">
        <?php include("contents/content-contact.php"); ?>
      </section>
    <?php endwhile; ?>
    <?php } elseif ($contents == 'comparelist') { ?>
      <?php while(have_rows('se_result_list7')):the_row();  ?>
         <section id="content7" class="content7">
          <?php include("contents/content-task-result.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'image_and_text') { ?>
      <?php while(have_rows('se_largeimage-text7')):the_row();  ?>
         <section id="content7" class="content7">
          <?php include("contents/content-largeimage.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'listup') { ?>
      <?php while(have_rows('se_listup6')):the_row();  ?>
         <section id="content6" class="content6">
          <?php include("contents/content-listup.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'site') { ?>
      <?php while(have_rows('se_site7')):the_row();  ?>
         <section id="content7" class="content7">
          <?php include("contents/content-site.php"); ?>
        </section>
      <?php endwhile; ?>
    <?php } elseif ($contents == 'free') { ?>
      <?php while(have_rows('se_free7')):the_row();  ?>
         <section id="content7" class="content7">
          <?php include("contents/content-free.php"); ?>
        </section>
      <?php endwhile; ?>
  <?php } ?>

	<?php do_action( 'habakiri_after_entry_content' ); ?>
	<?php get_template_part( 'modules/link-pages' ); ?>
</article>
