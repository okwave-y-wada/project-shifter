<?php
  $cp_header = get_field('cp_qa_main_type');
  if ($cp_header == 'answersCp') {
?>
  <?php while(have_rows('cp_qa_main_text')):the_row();  ?>
    <div class="hero-box answer-cp">
      <div class="hero-contents-box container">
        <div class="hero-element">
          <?php if( get_sub_field('cp_qa_period') ):  ?><div class="cp_date"><?php the_sub_field('cp_qa_period'); ?></div><?php endif; ?>
            <div class="label"><?php if( get_sub_field('cp_qa_ans_sub_headline') ):  ?><?php the_sub_field('cp_qa_ans_sub_headline'); ?></div><?php endif; ?>
            <h1>
              <?php if( get_sub_field('cp_qa_ans_headline') ):  ?><?php the_sub_field('cp_qa_ans_headline'); ?><?php endif; ?>
            </h1>
            <div class="main_info">
              <?php if( get_sub_field('cp_qa_present') ):  ?><?php the_sub_field('cp_qa_present'); ?><?php endif; ?>
              <?php if( get_sub_field('cp_qa_num') ):  ?><?php the_sub_field('cp_qa_num'); ?><?php endif; ?>
            </div>
        </div>
        <div class="speach"></div>
      </div>
    </div>
  <?php endwhile; ?>
<?php } elseif ($cp_header == 'questionsCp') { ?>
  <?php while(have_rows('cp_qa_main_text')):the_row();  ?>
    <div class="hero-box quest-cp">
      <div class="hero-contents-box container">
        <div class="hero-element">
        <?php if( get_sub_field('cp_qa_period') ):  ?><div class="cp_date"><?php the_sub_field('cp_qa_period'); ?></div><?php endif; ?>
          <div class="label"><?php if( get_sub_field('cp_qa_quest_sub_headline') ):  ?><?php the_sub_field('cp_qa_quest_sub_headline'); ?></div><?php endif; ?>
          <h1>
            <?php if( get_sub_field('cp_qa_quest_headline') ):  ?><?php the_sub_field('cp_qa_quest_headline'); ?><?php endif; ?>
          </h1>
          <div class="main_info">
            <?php if( get_sub_field('cp_qa_present') ):  ?><?php the_sub_field('cp_qa_present'); ?><?php endif; ?>
            <?php if( get_sub_field('cp_qa_num') ):  ?><?php the_sub_field('cp_qa_num'); ?><?php endif; ?>
          </div>
        </div>
        <div class="speach"></div>
      </div>
    </div>
  <?php endwhile; ?>
<?php } else { ?>
  <?php while(have_rows('cp_qa_main_text')):the_row();  ?>
    <?php if( get_sub_field('cp_qa_free_main') ):  ?><div class="hero-box free-cp"><?php the_sub_field('cp_qa_free_main'); ?></div><?php endif; ?>
    <?php if( get_sub_field('cp_qa_period') ):  ?><div class="cp_date"><?php the_sub_field('cp_qa_period'); ?></div><?php endif; ?>
  <?php endwhile; ?>
<?php } ?>



