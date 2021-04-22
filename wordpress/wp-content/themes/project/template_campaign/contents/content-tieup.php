    <div class="tieup">
      <?php if( get_sub_field('cp_client_logo') ):  ?>
        <div class="tieup_logo_box">
          <img src="<?php the_sub_field('cp_client_logo'); ?>" alt="">
          <i class="far fa-times"></i>
          <img src="/wordpress/wp-content/themes/project/original/img/common/logo_okbiz_cs.svg" alt="OKBIZ. for Community Support">
        </div>
      <?php endif; ?>
      <?php if( get_sub_field('cp_tieup_text') ):  ?>
        <div class="tieup_body">
          <?php the_sub_field('cp_tieup_text'); ?>
        </div>
      <?php endif; ?>
    </div>
