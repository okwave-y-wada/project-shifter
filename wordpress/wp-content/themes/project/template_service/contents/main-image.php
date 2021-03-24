

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
<?php } ?>

