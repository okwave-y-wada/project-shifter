
<?php while(have_rows('cp_main_image_detail')):the_row();  ?>
  <div class="hero-box">
    <div class="hero-contents-box container">
      <div class="hero-element">
        <h1>
          <?php if( get_sub_field('cp_main_image_flie') ):  ?><img src="<?php the_sub_field('cp_main_image_flie'); ?>" alt="<?php the_sub_field('image_alt'); ?>" class="spN"><?php endif; ?>
          <img src="<?php the_sub_field('cp_main_image_flie_sp'); ?>" alt="<?php the_sub_field('image_alt'); ?>" <?php if( get_sub_field('cp_main_image_flie') ):  ?>class="pcN"<?php endif; ?>>
        </h1>
        <dl class="recruitment-box">
          <dt><?php the_sub_field('cp_series'); ?></dt>
          <dd><?php the_sub_field('cp_period'); ?></dd>
        </dl>
      </div>
    </div>
  </div>
<?php endwhile; ?>
