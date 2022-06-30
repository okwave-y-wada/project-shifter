<?php
/**
 * template  : アワード
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
  <?php } elseif ($contents == 'cp_kind4') { ?>
    <?php while(have_rows('cp_rule_free')):the_row();  ?>
      <section class="content1">
        <?php include("contents/content-kind4.php"); ?>
      </section>
    <?php endwhile; ?>

  <?php } elseif ($contents == 'cp_qa_free_howto') { ?>
    <?php while(have_rows('cp_qa_free_howto2')):the_row();  ?>
      <section class="content1">
        <div>
          <?php if( get_sub_field('cp_qa_free_step') ):  ?><?php the_sub_field('cp_qa_free_step'); ?><?php endif; ?>
          <?php if( get_sub_field('cp_qa_free_howto_num') ):  ?><?php the_sub_field('cp_qa_free_howto_num'); ?><?php endif; ?>
        </div>
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
  <?php } elseif ($contents == 'cp_kind4') { ?>
    <?php while(have_rows('cp_rule_free2')):the_row();  ?>
      <section class="content2">
        <?php include("contents/content-kind4.php"); ?>
      </section>
  <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_qa_free_enterprise_list') { ?>
    <?php while(have_rows('cp_qa_enterprise_list2')):the_row();  ?>
    <section class="content2">
      <div>
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
      </div>
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
  <?php } elseif ($contents == 'cp_kind4') { ?>
    <?php while(have_rows('cp_rule_free3')):the_row();  ?>
      <section class="content3">
        <?php include("contents/content-kind4.php"); ?>
      </section>
    <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_qa_free_overview_type') { ?>
    <?php while(have_rows('cp_qa_free_overview')):the_row();  ?>
          <section class="content3" id="cp_ex">
                <div>
                    <?php if( get_sub_field('cp_qa_overview_title') ): ?>
                      <h2><?php the_sub_field( 'cp_qa_overview_title' ); ?></h2>
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
  <?php } elseif ($contents == 'cp_kind4') { ?>
    <?php while(have_rows('cp_rule_free4')):the_row();  ?>
      <section class="content4">
        <?php include("contents/content-kind4.php"); ?>
      </section>
  <?php endwhile; ?>
  <?php } elseif ($contents == 'cp_qa_free_more_q') { ?>
    <?php while(have_rows('cp_qa_more_quest_body2')):the_row();  ?>
      <section class="content4">
        <div>
          <?php if( get_sub_field('title') ):  ?><h2><?php the_sub_field('title'); ?></h2><?php endif; ?>
          <?php if( get_sub_field('body') ):  ?><?php the_sub_field('body'); ?><?php endif; ?>
        </div>
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
  <?php } elseif ($contents == 'cp_kind4') { ?>
    <?php while(have_rows('cp_rule_free5')):the_row();  ?>
      <section class="content5">
        <?php include("contents/content-kind4.php"); ?>
      </section>
  <?php endwhile; ?>
<?php } ?>

  <?php do_action( 'habakiri_after_entry_content' ); ?>
  <?php get_template_part( 'modules/link-pages' ); ?>
</article>
