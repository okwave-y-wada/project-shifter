<?php if( get_sub_field('site_headline') ):  ?>
  <li>
    <?php if( get_sub_field('site_headline') ):  ?>
      <h3 class="headline3">
        <?php if( get_sub_field('logo') ):  ?>
          <span><img src="<?php the_sub_field('logo'); ?>"></span>
        <?php endif; ?>
          <span><?php the_sub_field('site_headline'); ?></span>
      </h3>
    <?php endif; ?>
    <div>
      <?php if( get_sub_field('image') ):  ?>
        <figure>
          <?php if( get_sub_field('site_link_url') ):  ?>
            <a href="<?php the_sub_field('site_link_url'); ?>" target="_blank" ><img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('site_headline'); ?>"></a>
          <?php else : ?>
            <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('site_headline'); ?>">
          <?php endif; ?>
        </figure>
      <?php endif; ?>
      <dl>
        <?php if( get_sub_field('site_sub_text') ):  ?>
          <dt><?php the_sub_field('site_sub_text'); ?></dt>
        <?php endif; ?>
        <?php if( get_sub_field('site_body') ):  ?>
          <dd><?php the_sub_field('site_body'); ?></dd>
        <?php endif; ?>
        <?php if( get_sub_field('site_link_url') ):  ?>
          <dd><a href="<?php the_sub_field('site_link_url'); ?>" target="_blank"><?php the_sub_field('site_link_text'); ?></a></dd>
        <?php endif; ?>
      </dl>
    </div>
  </li>
<?php endif; ?>
