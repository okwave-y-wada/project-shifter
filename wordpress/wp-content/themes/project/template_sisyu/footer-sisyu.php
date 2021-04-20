<?php
/**
 * template  : 紫舟さんサイト
 */
?>

  <?php do_action( 'habakiri_after_contents_content' ); ?>
  
  <footer class="footer">
      <?php get_template_part( 'template_sisyu/sns-sisyu'); ?>
      <ul class="footer_product_category">
        <?php
          $categories = get_terms( 'category', array(
              'orderby'    => 'count',
              'hide_empty' => 0,
              'child_of' => 5,
          ) );
          foreach($categories as $value):
        ?>
          <li class="<?php echo $value->slug;?>">
            <a href="<?php echo get_category_link($value->term_id); ?>">
              <b> <?php echo $value->name;?></b>
              <span><?php echo $value->description;?></span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
      
      <div class="footer_airtist">
        <?php dynamic_sidebar( 'footer-widget-area' ); ?>
      </div>

    <?php do_action( 'habakiri_before_footer_content' ); ?>
    <?php do_action( 'habakiri_after_footer_content' ); ?>
  </footer>


