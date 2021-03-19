<?php if( get_sub_field('cp_kind1_content1') ):  ?>
  <section>
    <div class="container">
      <h2 class="headline"><span><?php the_sub_field('cp_kind1_content1'); ?></span></h2>
      <div class="flow-box">
        <?php
        $types = get_sub_field('cp_rule_type');
        if ($types):
        ?>
            <?php
              foreach ($types as $type) : ?>
                  <?php if ($type == 'rule_type1') { ?>
                    <div class="box effect-fadein">
                      <div class="row">
                          <div class="col1">
                            <img src="/wp-content/themes/project/original/img/campaign/series/step_01_b.png" alt="">
                          </div>
                          <div class="col2">
                              <h3 class="headline2"><?php the_sub_field('cp_rule_type1_sub_headline'); ?></h3>
                              <p class="body-text"><?php the_sub_field('cp_rule_type1_body'); ?></p>
                              <?php if( get_sub_field('cp_rule_type1_button_link') ):  ?>
                              <div class="btn-box">
                                  <a href="<?php the_sub_field('cp_rule_type1_button_link'); ?>" class="r_btn btn_answer" target="_blank">回答する</a>
                              </div>
                            <?php endif; ?>
                          </div>
                      </div>
                  </div>
                  <?php } ?>
                  <?php if ($type == 'rule_type2') { ?>
                    ２だよ
                  <?php } ?>
                  <?php if ($type == 'rule_type3') { ?>
                    3だよ
                  <?php } ?>
                  <?php if ($type == 'rule_type4') { ?>
                    <div class="present effect-fadein">
                        <div class="row">
                            <div class="col1"><img src="/wp-content/themes/project/original/img/campaign/series/step_02_b.png" alt="02"></div>
                            <div class="col2">
                                <h3 class="headline2"><?php the_sub_field('cp_rule_type4_sub_headline'); ?></h3>
                                <p class="body-text"><?php the_sub_field('cp_rule_type4_body'); ?></p>
                            </div>
                        </div>
                    </div>
                  <?php } ?>
            <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

