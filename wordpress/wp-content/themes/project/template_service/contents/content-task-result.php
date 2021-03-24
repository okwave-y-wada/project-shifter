<div class="task_result">
  <?php if( get_sub_field('headline') ):  ?>
    <h2 class="headline2"><?php the_sub_field('headline'); ?></h2>
  <?php endif; ?>
  <ul class="task-box task-list task-list-<?php if( get_sub_field('Task1') ):  ?>a<?php endif; ?><?php if( get_sub_field('Task2') ):  ?>b<?php endif; ?><?php if( get_sub_field('Task3') ):  ?>c<?php endif; ?>">
    <?php if( get_sub_field('Task1') ):  ?>
      <li>
        <p><?php the_sub_field('Task1'); ?></p>
      </li>
    <?php endif; ?>
    <?php if( get_sub_field('Task2') ):  ?>
      <li>
        <p><?php the_sub_field('Task2'); ?></p>
      </li>
    <?php endif; ?>
    <?php if( get_sub_field('Task3') ):  ?>
      <li>
        <p><?php the_sub_field('Task3'); ?></p>
      </li>
    <?php endif; ?>
  </ul>
  <!--解決ポイント-->
  <?php if( get_sub_field('headline_answer') ):  ?>
    <h2 class="headline2"><?php the_sub_field('headline_answer'); ?></h2>
  <?php endif; ?>
  <ul class="task-box result-list result-list-<?php if( get_sub_field('Task1') ):  ?>a<?php endif; ?><?php if( get_sub_field('Task2') ):  ?>b<?php endif; ?><?php if( get_sub_field('Task3') ):  ?>c<?php endif; ?>">
    <?php if( get_sub_field('result1') ):  ?>
      <li>
        <p><?php the_sub_field('result1'); ?></p>
      </li>
    <?php endif; ?>
    <?php if( get_sub_field('result2') ):  ?>
      <li>
        <p><?php the_sub_field('result2'); ?></p>
      </li>
    <?php endif; ?>
    <?php if( get_sub_field('result3') ):  ?>
      <li>
        <p><?php the_sub_field('result3'); ?></p>
      </li>
    <?php endif; ?>
  </ul>
</div>
