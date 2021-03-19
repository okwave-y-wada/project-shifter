<?php if( get_sub_field('cp_kind2_content1') ):  ?>
  <section>
    <div class="secret-area">
        <div class="container">
          <h2  class="headline"><span><?php the_sub_field('cp_kind2_content1'); ?></span></h2>
            <div class="secret-box">
                  <?php if( get_sub_field('cp_kind2_sub_headline1') ):  ?>
                  <dl>
                    <dt><?php the_sub_field('cp_kind2_sub_headline1'); ?></dt>
                    <dd><?php the_sub_field('cp_kind2_body1'); ?></dd>
                  </dl>
                  <?php endif; ?>
                  <dl>
                  <?php if( get_sub_field('cp_kind2_sub_headline2') ):  ?>
                    <dt><?php the_sub_field('cp_kind2_sub_headline2'); ?></dt>
                    <dd><?php the_sub_field('cp_kind2_body2'); ?></dd>
                  </dl>
                  <?php endif; ?>
                  <?php if( get_sub_field('cp_kind2_sub_headline3') ):  ?>
                  <dl>
                    <dt><?php the_sub_field('cp_kind2_sub_headline3'); ?></dt>
                    <dd><?php the_sub_field('cp_kind2_body3'); ?></dd>
                  </dl>
                  <?php endif; ?>
                </dl>
            </div>
        </div>
    </div>
  </section>
<?php endif; ?>
