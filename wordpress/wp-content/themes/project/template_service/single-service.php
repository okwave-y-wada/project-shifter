<?php
/**
 * template  : サービス
 */
?>
</head>
<?php
	// 記事のカテゴリー情報を取得する
	$cat = get_the_category();
	$cat_slug  = $cat[0]->category_nicename; // カテゴリースラッグ
?>

<body class="page_<?php echo  $cat_slug; ?> single_service">
<?php do_action( 'habakiri_before_container' ); ?>
<?php do_action( 'habakiri_before_header_content' ); ?>
    <?php
    $header_classes     = "Habakiri::get_header_classses()";
    $site_branding_size = Habakiri::get_site_branding_size();
    $gnav_size          = Habakiri::get_gnav_size();
    ?>
<?php do_action( 'habakiri_before_contents_content' ); ?>

<?php
  $se_header = get_field('se_header_type');
  if ($se_header == 'answers') { ?>
  <?php while(have_rows('se_header_button')):the_row();  ?>
  <header class="service-header">
    <div class="container">
    <div class="head-group">
      <div> <a href="https://okwave.jp/" target="_blank"><img src="/wordpress/wp-content/themes/project/original/img/common/logo_okwave_s_red.svg" alt="OKWAVE_JP" width="200"></a> </div>
      <?php if( get_sub_field('se_header_button_text') ):  ?>
        <div>
          <a href="<?php the_sub_field('se_header_button_link'); ?>" target="_blank" class="btn contact arrow-type01"><?php the_sub_field('se_header_button_text'); ?></a>
        </div>
        <?php endif; ?>
    </div>
  </div>
</header>
<?php endwhile; ?>
  <?php } elseif ($se_header == 'bizcs') { ?>
    <?php while(have_rows('se_header_button')):the_row();  ?>
    <header class="service-header">
      <div class="container">
      <div class="head-group">
        <div>
          <a href="https://okbiz.jp/solutions/okbiz-community-support/" target="_blank"><img src="/wordpress/wp-content/themes/project/original/img/common/logo_okbiz_cs.svg" alt="OKBIZ. for Community Support" width="420"></a>
        </div>
        <div>
          <a href="<?php the_sub_field('se_header_button_link'); ?>" target="_blank" class="btn contact arrow-type01"><?php the_sub_field('se_header_button_text'); ?></a>
        </div>
      </div>
    </div>
  </header>
  <?php endwhile; ?>
<?php } else { ?>
  <header id="header" class="header">
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


	<div class="wrap service_page">
	  <main class="main_contents contents_<?php echo esc_attr($post->post_name); ?>">
		<?php
			if ( is_404() ) {
				get_template_part( 'content', 'none' );
			} else {
				while ( have_posts() ) {
				the_post();
				get_template_part( 'content', 'single' );
				}
			}
		?>
	</main>
</div>

<?php get_footer(); ?>
