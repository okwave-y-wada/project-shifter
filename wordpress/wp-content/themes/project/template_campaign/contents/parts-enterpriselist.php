<?php if( get_sub_field('visible') ):  ?>
  <?php if( get_sub_field('name') ):  ?>
    <li>
      <a href="<?php the_sub_field('name'); ?>">
        <?php if( get_sub_field('image_url') ):  ?><img src="<?php the_sub_field('image_url'); ?>" width="60" height="60" alt="">
        <p>
          <?php the_sub_field('name'); ?>
          <?php if( get_sub_field('desc') ):  ?><span><?php the_sub_field('desc'); ?></span><?php endif; ?>
        </p>
      </a>
    </li>
    <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>
