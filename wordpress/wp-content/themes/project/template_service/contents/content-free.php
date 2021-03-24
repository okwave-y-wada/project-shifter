<div class="free-contents">
  <?php if( get_sub_field('headline') ):  ?>
    <h2 class="headline2"><?php the_sub_field('headline'); ?></h2>
  <?php endif; ?>
  <?php if( get_sub_field('body_area') ):  ?>
    <div class="free-box"><?php the_sub_field('body_area'); ?></div>
  <?php endif; ?>
</div>
