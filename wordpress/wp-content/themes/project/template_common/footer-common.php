<?php
/**
 * template  : 共通フッター
 */
?>
  <?php // 他 footer ?>
    <?php do_action( 'habakiri_after_contents_content' ); ?>
    <!-- end #contents --></div>
    <?php if(is_404()): ?>
    <?php elseif (is_home()): ?>
    <?php elseif (is_front_page()): ?>
    <?php else: ?>
      <div class="pagetop">
        <div class="pagetop_link">
          <a href="#header">このページのトップへ</a>
        </div>
          <div class="share_link">
            <?php
              $url_encode=urlencode(get_permalink());
              $title_encode=urlencode(get_the_title()).'｜'.get_bloginfo('description');
            ?>
            <ul>
                <li>
                  <a href="//www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/original/img/common/share_fb.svg" alt="facebook"></a>
                </li>
                <li>
                  <a href="//twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/original/img/common/share_tw.svg" alt="twitter"></a>
                </li>
                <li>
                  <a href="//social-plugins.line.me/lineit/share?url=<?php echo $url_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=500');return false;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/original/img/common/share_line.svg" alt="LINEで送る"></a>
                </li>
            </ul>
          </div>
      </div>
    <?php endif; ?>
    <footer class="footer">
      <?php do_action( 'habakiri_before_footer_content' ); ?>
      <?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
              <?php dynamic_sidebar( 'footer-widget-area' ); ?>
      <?php endif; ?>

      <?php if ( has_nav_menu( 'social-nav' ) ) : ?>
        <div class="social-nav">
          <div class="container">
            <?php
              wp_nav_menu( array(
                'theme_location' => 'social-nav',
                'fallback_cb'    => '',
                'depth'          => 1
              ) );
            ?>
          </div>
        </div>
      <?php endif; ?>

      <div class="copyright">
        <div class="container">
          <?php get_template_part( 'modules/copyright' ); ?>
        </div>
      </div>
      <?php do_action( 'habakiri_after_footer_content' ); ?>
    </footer>
    <script>
jQuery(function(){
   jQuery('a[href^="#"]').click(function() {
      var speed = 400;
      var href= jQuery(this).attr("href");
      var target = jQuery(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});
</script>
