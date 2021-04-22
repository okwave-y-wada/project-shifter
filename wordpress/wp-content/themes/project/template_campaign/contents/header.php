<?php
  $cp_header = get_field('cp_header_type');
  if ($cp_header == 'bizcs') { ?>
    <header class="cp-header bizcs">
        <div class="head-logo">
          <a href="https://okbizcs.okwave.jp/" target="_blank"><img src="/wp-content/themes/project/original/img/common/logo_okbiz_cs.svg" alt="OKBIZ. for Community Support"></a>
        </div>
    </header>
<?php } else { ?>
  <header class="header">
    <div class="header_inner">
      <?php //template_common/header-navi.php変更あるときはこっちも変えてね ?>
      <div class="logo_okwave"><a href="https://okwave.jp/" target="_blank"><img src="/wordpress/wp-content/themes/project/original/img/common/logo_okwave_60max_height_nomargin.svg" height="32"></a></div>
        <ul>
          <li><a href="https://okwave.jp/login" target="_blank">ログイン</a></li>
          <li><a href="https://okwave.jp/register" target="_blank">新規会員登録</a></li>
        </ul>
    </div>
  </header>
<?php } ?>
