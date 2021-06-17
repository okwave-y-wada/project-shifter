
<?php
  $main_img = get_field('se_main_type');
  if ($main_img == 'type1') { ?>
  <?php while(have_rows('se_main_type1_setting')):the_row();  ?>
  <div class="hero-box hero-box_type1">
      <div class="hero-contents-box container">
        <div class="hero-element">
          <?php if( get_sub_field('se_main_headline') ):  ?>
            <h1><?php the_sub_field('se_main_headline'); ?></h1>
          <?php endif; ?>

          <?php if( get_sub_field('se_sub_headline') ):  ?>
            <p class="sub-lead"><?php the_sub_field('se_sub_headline'); ?></p>
          <?php endif; ?>
          <?php
            $logotype = get_sub_field('se_main_logo');
            if ($logotype == 'okwave') { ?>
              <div class="se_main_logo logo_okwave">
                <img src="/wordpress/wp-content/themes/project/original/img/common/logo_okwave_s_red.svg" alt="OKWΛVE_JP">
              </div>
              <?php } elseif ($logotype == 'okwave_white') { ?>
              <div class="se_main_logo logo_okwave">
                <img src="/wordpress/wp-content/themes/project/original/img/common/logo_okwave_s_white.svg" alt="OKWΛVE_JP">
              </div>
            <?php } elseif ($logotype == 'bizcs') { ?>
            <div class="se_main_logo logo_bizcs">
              <img src="/wordpress/wp-content/themes/project/original/img/common/logo_okbiz_cs.svg" alt="OKBIZ. for Community Support">
            </div>
            <?php } elseif ($logotype == 'bizcs_white') { ?>
            <div class="se_main_logo logo_bizcs">
              <img src="/wordpress/wp-content/themes/project/original/img/common/logo_okbiz_cs_white.svg" alt="OKBIZ. for Community Support">
            </div>
          <?php } ?>

        </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php } elseif ($main_img == 'type2') { ?>
  <?php while(have_rows('se_main_type2_setting')):the_row();  ?>
    <div class="hero-box hero-box_type2">
      <div class="hero-contents-box container">
        <div class="hero-element">
          <?php if( get_sub_field('se_main_headline') ):  ?>
            <h1><?php the_sub_field('se_main_headline'); ?></h1>
          <?php endif; ?>
          <?php if( get_sub_field('se_sub_headline') ):  ?>
            <p class="sub-lead"><?php the_sub_field('se_sub_headline'); ?></p>
          <?php endif; ?>
          <?php
            $logotype = get_sub_field('se_main_logo');
            if ($logotype == 'okwave') { ?>
              <div class="se_main_logo">
                <img src="/wp-content/themes/project/original/img/common/logo_okwave_s_red.svg" alt="OKWΛVE_JP">
              </div>
          <?php } elseif ($logotype == 'bizcs') { ?>
            <div class="se_main_logo">
              <img src="/wp-content/themes/project/original/img/common/logo_okbiz_cs.svg" alt="OKBIZ. for Community Support">
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php } elseif ($main_img == 'type3') { ?>
  <?php while(have_rows('se_main_type3_setting')):the_row();  ?>
    <div class="hero-box hero-box_type3">
      <div class="hero-contents-box container">
        <div class="hero-element">
          <?php if( get_sub_field('se_main_label') ):  ?>
            <span class="target-txt"><?php the_sub_field('se_main_label'); ?></span>
          <?php endif; ?>

          <?php if( get_sub_field('se_main_headline') ):  ?>
            <h1><?php the_sub_field('se_main_headline'); ?></h1>
          <?php endif; ?>

          <?php if( get_sub_field('se_sub_headline') ):  ?>
            <p class="sub-lead"><?php the_sub_field('se_sub_headline'); ?></p>
          <?php endif; ?>

          <?php if( get_sub_field('se_main_button_link') ):  ?>
          <div class="btn-box btn-hero">
            <?php if( get_sub_field('se_main_button_uptext') ):  ?>
              <p class="text-center font-c-w mB15"><?php the_sub_field('se_main_button_uptext'); ?></p>
            <?php endif; ?>
            <a href="<?php the_sub_field('se_main_button_link'); ?>" target="_blank" class="btn contact trial arrow-type01"><?php the_sub_field('se_main_button_label'); ?></a>
          </div>
          <?php endif; ?>
          <?php if( get_sub_field('se_main_image_sp') ):  ?>
            <div class="bg_img_sp">
                <img src="<?php the_sub_field('se_main_image_sp'); ?>" alt="<?php the_sub_field('image_alt'); ?>" class="pcN">
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
  <?php } elseif ($main_img == 'type4') { ?>
  <?php while(have_rows('se_main_type4_setting')):the_row();  ?>
  <div class="hero-box hero-box_type4">
  <div class="hero-contents-box container">
    <div class="company-data">
      <div class="company-logo">
        <?php if( get_sub_field('se_main_logo') ):  ?>
          <img src="<?php the_sub_field('se_main_logo'); ?>" alt="<?php the_sub_field('se_main_name'); ?>のロゴ画像">
          <?php endif; ?>
      </div>
    </div>
    <div class="company-text">
      <?php if( get_sub_field('se_main_name') ):  ?>
        <h2>
          <span><?php the_sub_field('se_main_name'); ?></span>
          <span>OKBIZ. for Community Support 活用事例</span>
        </h2>
      <?php endif; ?>
      <?php if( get_sub_field('se_main_headline') ):  ?>
      <h3><?php the_sub_field('se_main_headline'); ?></h3>
      <?php endif; ?>
      <div class="company-category">
      <?php if( get_sub_field('se_main_industry') ):  ?>
        <dl>
          <dt>業種</dt>
          <dd><?php the_sub_field('se_main_industry'); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if( get_sub_field('se_main_target') ):  ?>
        <dl>
          <dt>活用対象</dt>
          <dd><?php the_sub_field('se_main_target'); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if( get_sub_field('se_main_problem') ):  ?>
        <dl>
          <dt>課題</dt>
          <dd><?php the_sub_field('se_main_problem'); ?></dd>
        </dl>
        <?php endif; ?>
      </div>
    </div>
    </div>
    </div>
  <?php endwhile; ?>
<?php } ?>

