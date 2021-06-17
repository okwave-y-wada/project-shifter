<?php
  $se_header = get_field('se_header_type');
  if ($se_header == 'answers') { ?>
  <?php while(have_rows('se_header_button')):the_row();  ?>
    <header id="header" class="service-header">
    <div class="head-group">
      <div class="head-logo">
        <a href="https://okwave.jp/" target="_blank"><img src="/wordpress/wp-content/themes/project/original/img/common/logo_okwave_60max_height_nomargin.svg" alt="OKWAVE_JP" ></a>
      </div>
      <?php if( get_sub_field('se_header_button_text') ):  ?>
        <div class="head-btn">
          <a href="<?php the_sub_field('se_header_button_link'); ?>" target="_blank"><?php the_sub_field('se_header_button_text'); ?></a>
        </div>
      <?php endif; ?>
    </div>
  </div>
</header>
<?php endwhile; ?>
  <?php } elseif ($se_header == 'bizcs') { ?>
    <?php while(have_rows('se_header_button')):the_row();  ?>
    <header class="service-header">
      <div class="head-group">
        <div class="head-logo">
          <a href="/service/okbiz-community-support/" target="_blank"><img src="/wordpress/wp-content/themes/project/original/img/common/logo_okbiz_cs.svg" alt="OKBIZ. for Community Support"></a>
        </div>
        <div class="head-btn">
          <a href="<?php the_sub_field('se_header_button_link'); ?>" target="_blank"><?php the_sub_field('se_header_button_text'); ?></a>
        </div>
      </div>
  </header>
  <?php endwhile; ?>
<?php } else { ?>
  <header class="header">
    <div class="header_inner">
      <?php //template_common/header-navi.php変更あるときはこっちも変えてね ?>
      <div class="logo_okwave"><a href="https://okwave.jp/" target="_blank"><img src="/wp-content/themes/project/original/img/common/logo_okwave_60max_height_nomargin.svg" height="32"></a></div>
        <ul>
          <li><a href="https://okwave.jp/login" target="_blank">ログイン</a></li>
          <li><a href="https://okwave.jp/register" target="_blank">新規会員登録</a></li>
        </ul>
    </div>
  </header>
<?php } ?>
