<?php if( get_sub_field('cp_kind3_content1') ):  ?>
  <section>
      <div class="container">
        <h2 class="headline"><span><?php the_sub_field('cp_kind3_content1'); ?></span></h2>
        <div class="page-link">
          <?php if( get_sub_field('cp_kind3_item1') ):  ?>
          <dl>
              <dt><?php the_sub_field('cp_kind3_item1'); ?></dt>
              <dd><?php the_sub_field('cp_kind3_item1_body'); ?></dd>
            </dl>
            <?php endif; ?>
            <?php if( get_sub_field('cp_kind3_item2') ):  ?>
            <dl>
              <dt><?php the_sub_field('cp_kind3_item2'); ?></dt>
              <dd><?php the_sub_field('cp_kind3_item2_body'); ?></dd>
            </dl>
          <?php endif; ?>
          <?php if( get_sub_field('cp_kind3_item3') ):  ?>
            <dl>
              <dt><?php the_sub_field('cp_kind3_item3'); ?></dt>
              <dd><?php the_sub_field('cp_kind3_item3_body'); ?></dd>
            </dl>
          <?php endif; ?>
          <?php if( get_sub_field('cp_kind3_item4') ):  ?>
            <dl>
              <dt><?php the_sub_field('cp_kind3_item4'); ?></dt>
              <dd><?php the_sub_field('cp_kind3_item4_body'); ?></dd>
            </dl>
          <?php endif; ?>
          <?php if( get_sub_field('cp_kind3_item5') ):  ?>
            <dl>
              <dt><?php the_sub_field('cp_kind3_item5'); ?></dt>
              <dd><?php the_sub_field('cp_kind3_item5_body'); ?></dd>
            </dl>
          <?php endif; ?>
          <?php if( get_sub_field('cp_kind3_item6') ):  ?>
            <dl>
              <dt><?php the_sub_field('cp_kind3_item6'); ?></dt>
              <dd><?php the_sub_field('cp_kind3_item6_body'); ?></dd>
            </dl>
          <?php endif; ?>
          <?php if( get_sub_field('cp_kind3_item7') ):  ?>
            <dl>
              <dt><?php the_sub_field('cp_kind3_item7'); ?></dt>
              <dd><?php the_sub_field('cp_kind3_item7_body'); ?></dd>
            </dl>
          <?php endif; ?>
        </div>
    </div>
  </section>
<?php endif; ?>
