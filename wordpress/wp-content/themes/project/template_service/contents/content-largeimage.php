<div class="about-box">
  <?php if( get_sub_field('headline') ):  ?>
    <h2 class="headline2"><?php the_sub_field('headline'); ?></h2>
  <?php endif; ?>
  <?php if( get_sub_field('body_text_top') ):  ?>
  <p class="body_text_top"><?php the_sub_field('body_text_top'); ?></p>
  <?php endif; ?>
  <?php if( get_sub_field('image') ):  ?>
  <figure>
        <img src="<?php the_sub_field('image'); ?>" alt="">
  </figure>
  <?php endif; ?>
  <?php if( get_sub_field('image_sp') ):  ?>
  <figure>
        <img src="<?php the_sub_field('image_sp'); ?>" alt="">
  </figure>
  <?php endif; ?>
  <?php if( get_sub_field('headline_bottom') ):  ?>
  <h3 class="headline3"><?php the_sub_field('headline_bottom'); ?></h3>
  <?php endif; ?>
  <?php if( get_sub_field('body_text_bottom') ):  ?>
  <p class="body_text_bottom"><?php the_sub_field('body_text_bottom'); ?></p>
  <?php endif; ?>
</div>
