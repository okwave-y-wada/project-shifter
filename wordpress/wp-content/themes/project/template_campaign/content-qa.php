<?php
/**
 * template  : キャンペーン
 */
?>

<article class="post_contents contents_<?php echo esc_attr($post->post_name); ?>">
	<?php do_action( 'habakiri_before_entry_content' ); ?>

  <?php include("contents/main-image-qa.php"); ?>

  <?php // コンテンツ1  ?>
  <?php
      $cp_howto = get_field('cp_qa_content_type');
  ?>
  <?php while(have_rows('cp_qa_howto')):the_row();  ?>
    <section class="content1">
      <div>
      <?php if ($cp_howto == 'cp_qa_type_ans') {  ?>
        <?php if( get_sub_field('cp_qa_ans_contents_title') ):  ?><h2><?php the_sub_field('cp_qa_ans_contents_title'); ?></h2><?php endif; ?>
      <?php } else { ?>
        <?php if( get_sub_field('cp_qa_quest_contents_title') ):  ?><h2><?php the_sub_field('cp_qa_quest_contents_title'); ?></h2><?php endif; ?>
      <?php } ?>

        <?php if( get_sub_field('cp_qa_ans_howto_num') ):  ?><p><?php the_sub_field('cp_qa_ans_howto_num'); ?></p><?php endif; ?>

      <?php if ($cp_howto == 'cp_qa_type_ans') {  ?>
        <?php if( get_sub_field('cp_qa_ans_step') ):  ?><?php the_sub_field('cp_qa_ans_step'); ?><?php endif; ?>
      <?php } else { ?>
        <?php if( get_sub_field('cp_qa_quest_step') ):  ?><?php the_sub_field('cp_qa_quest_step'); ?><?php endif; ?>
      <?php } ?>

      <?php if ($cp_howto == 'cp_qa_type_ans') {  ?>
        <?php if( get_sub_field('cp_qa_ans_step_desc') ):  ?><?php the_sub_field('cp_qa_ans_step_desc'); ?><?php endif; ?>
      <?php } else { ?>
        <?php if( get_sub_field('cp_qa_quest_step_desc') ):  ?><?php the_sub_field('cp_qa_quest_step_desc'); ?><?php endif; ?>
      <?php } ?>

      <?php while(have_rows('cp_qa_enterprise_list')):the_row();  ?>
        <div class="enterprise_list">
          <ul>
            <?php while(have_rows('cp_qa_enterprise_group1')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group2')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group3')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group4')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group5')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group6')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group7')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group8')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group9')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group10')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group11')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group12')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group13')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group14')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group15')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group16')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group17')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group18')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group19')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group20')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group21')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group22')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group23')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
            <?php while(have_rows('cp_qa_enterprise_group24')):the_row();  ?><?php include("contents/parts-enterpriselist.php"); ?><?php endwhile; ?>
          </ul>
        </div>
      <?php endwhile; ?>
      </div>
    </section>
<?php endwhile; ?>

<?php // コンテンツ2  ?>
<section class="content2" id="cp_ex">
  <div>
  <?php if( get_field('cp_qa_overview_title') ): ?>
    <h2><?php the_field( 'cp_qa_overview_title' ); ?></h2>
  <?php endif; ?>
  <dl>
    <?php while(have_rows('cp_qa_overview1')):the_row();  ?><?php include("contents/parts-overview.php"); ?><?php endwhile; ?>
    <?php while(have_rows('cp_qa_overview2')):the_row();  ?><?php include("contents/parts-overview.php"); ?><?php endwhile; ?>
    <?php while(have_rows('cp_qa_overview3')):the_row();  ?><?php include("contents/parts-overview.php"); ?><?php endwhile; ?>
    <?php while(have_rows('cp_qa_overview4')):the_row();  ?><?php include("contents/parts-overview.php"); ?><?php endwhile; ?>
    <?php while(have_rows('cp_qa_overview5')):the_row();  ?><?php include("contents/parts-overview.php"); ?><?php endwhile; ?>
    <?php while(have_rows('cp_qa_overview6')):the_row();  ?><?php include("contents/parts-overview.php"); ?><?php endwhile; ?>
  </dl>
  </div>
</section>

<?php // コンテンツ3  ?>
<?php
      $cp_infotype = get_field('cp_qa_guide_type');
  ?>
<section class="content3">
  <div>
  <?php if ($cp_infotype == 'cp_qa_more_a') {  ?>
    <?php while(have_rows('cp_qa_more_ans_body')):the_row();  ?>
      <?php if( get_sub_field('title') ):  ?><h2><?php the_sub_field('title'); ?></h2><?php endif; ?>
      <?php if( get_sub_field('body') ):  ?><?php the_sub_field('body'); ?><?php endif; ?>
    <?php endwhile; ?>
  <?php } else { ?>
    <?php while(have_rows('cp_qa_more_quest_body')):the_row();  ?>
      <?php if( get_sub_field('title') ):  ?><h2><?php the_sub_field('title'); ?></h2><?php endif; ?>
      <?php if( get_sub_field('body') ):  ?><?php the_sub_field('body'); ?><?php endif; ?>
    <?php endwhile; ?>
  <?php } ?>
  </div>
</section>

	<?php do_action( 'habakiri_after_entry_content' ); ?>
	<?php get_template_part( 'modules/link-pages' ); ?>
</article>
