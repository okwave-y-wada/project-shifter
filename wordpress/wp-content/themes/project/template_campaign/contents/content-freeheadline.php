  <div class="free_headline">
    <?php if( get_sub_field('cp_free_headline') ):  ?>
      <h2 class="headline"><span><?php the_sub_field('cp_free_headline'); ?></span></h2>
    <?php endif; ?>
    <?php if( get_sub_field('cp_free_hadline_body') ):  ?>
      <div class="free_headline_body">
        <?php the_sub_field('cp_free_hadline_body'); ?>
      </div>
    <?php endif; ?>
  </div>
