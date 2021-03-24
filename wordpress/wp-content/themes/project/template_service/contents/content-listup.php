<div class="list-up">
  <?php if( get_sub_field('headline') ):  ?>
    <h2 class="headline2"><?php the_sub_field('headline'); ?></h2>
  <?php endif; ?>
  <?php if( get_sub_field('body_text') ):  ?>
    <p class="body_text"><?php the_sub_field('body_text'); ?></p>
  <?php endif; ?>
  <ul class="list-up-box list-up-<?php if( get_sub_field('list1') ):  ?>a<?php endif; ?><?php if( get_sub_field('list2') ):  ?>b<?php endif; ?><?php if( get_sub_field('list3') ):  ?>c<?php endif; ?><?php if( get_sub_field('list4') ):  ?>d<?php endif; ?><?php if( get_sub_field('list5') ):  ?>e<?php endif; ?><?php if( get_sub_field('list6') ):  ?>f<?php endif; ?><?php if( get_sub_field('list7') ):  ?>g<?php endif; ?><?php if( get_sub_field('list8') ):  ?>h<?php endif; ?><?php if( get_sub_field('list9') ):  ?>i<?php endif; ?><?php if( get_sub_field('list10') ):  ?>j<?php endif; ?>">
    <?php if( get_sub_field('list1') ):  ?>
      <li>
        <p><?php the_sub_field('list1'); ?></p>
      </li>
    <?php endif; ?>
    <?php if( get_sub_field('list2') ):  ?>
      <li>
        <p><?php the_sub_field('list2'); ?></p>
      </li>
    <?php endif; ?>
    <?php if( get_sub_field('list3') ):  ?>
      <li>
        <p><?php the_sub_field('list3'); ?></p>
      </li>
    <?php endif; ?>
    <?php if( get_sub_field('list4') ):  ?>
      <li>
        <p><?php the_sub_field('list4'); ?></p>
      </li>
    <?php endif; ?>
    <?php if( get_sub_field('list5') ):  ?>
      <li>
        <p><?php the_sub_field('list5'); ?></p>
      </li>
    <?php endif; ?>
    <?php if( get_sub_field('list6') ):  ?>
      <li>
        <p><?php the_sub_field('list6'); ?></p>
      </li>
    <?php endif; ?>
    <?php if( get_sub_field('list7') ):  ?>
      <li>
        <p><?php the_sub_field('list7'); ?></p>
      </li>
    <?php endif; ?>
    <?php if( get_sub_field('list8') ):  ?>
      <li>
        <p><?php the_sub_field('list8'); ?></p>
      </li>
    <?php endif; ?>
    <?php if( get_sub_field('list9') ):  ?>
      <li>
        <p><?php the_sub_field('list9'); ?></p>
      </li>
    <?php endif; ?>
    <?php if( get_sub_field('list10') ):  ?>
      <li>
        <p><?php the_sub_field('list10'); ?></p>
      </li>
    <?php endif; ?>
  </ul>
</div>
