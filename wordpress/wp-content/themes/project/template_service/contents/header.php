

<?php
  $se_header_type = get_field('se_header_type');
  if ($se_header_type == 'answers') { ?>
  <?php while(have_rows('se_main_type1_setting')):the_row();  ?>
  <?php endwhile; ?>
<?php } elseif ($se_header_type == 'bizcs') { ?>
  <?php while(have_rows('se_main_type2_setting')):the_row();  ?>
  <?php endwhile; ?>
<?php } elseif ($se_header_type == 'project') { ?>
  <?php while(have_rows('se_main_type3_setting')):the_row();  ?>

  <?php endwhile; ?>
<?php } ?>

