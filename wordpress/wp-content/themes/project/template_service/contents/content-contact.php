<div class="btn-area">
  <?php if( get_sub_field('headline') ):  ?>
    <h2 class="headline2"><?php the_sub_field('headline'); ?></h2>
  <?php endif; ?>
  <?php if( get_sub_field('body_text') ):  ?>
    <p><?php the_sub_field('body_text'); ?></p>
  <?php endif; ?>
  <ul class="btn-list<?php if( get_sub_field('btn2_url') ):  ?> btn-list2<?php endif; ?>">
  <?php if( get_sub_field('btn1_url') ):  ?>
    <li>
      <a href="<?php the_sub_field('btn1_url'); ?>" <?php if( get_sub_field('btn1_blank') ):  ?>target="_blank"<?php endif; ?> class="btn contact arrow-type01 m-auto"><?php the_sub_field('btn1_text'); ?></a>
    </li>
    <?php endif; ?>
    <?php if( get_sub_field('btn2_url') ):  ?>
    <li>
      <a href="<?php the_sub_field('btn2_url'); ?>" <?php if( get_sub_field('btn2_blank') ):  ?>target="_blank"<?php endif; ?> class="btn contact arrow-type01 m-auto"><?php the_sub_field('btn2_text'); ?></a>
    </li>
    <?php endif; ?>
  </ul>
</div>
