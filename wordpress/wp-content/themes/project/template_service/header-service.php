<?php
/**
 * template  : サービス
 */
?>
<?php
  $category = get_the_category();
  $cat_id   = $category[0]->cat_ID;
  $cat_name = $category[0]->cat_name;
  $cat_slug = $category[0]->category_nicename;
?>
<title><?php if( is_single() ) { ?><?php the_title(); ?> | <?php } else { ?><?php } ?><?php bloginfo( 'description' ); ?></title>
<meta name="description" content="<?php echo get_the_excerpt(); ?>">
<meta property="og:type" content="article">
<meta property="og:url" content="<?php echo ( 'https://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'REQUEST_URI' ] ); ?>">
<meta property="og:site_name" content="<?php bloginfo( 'description' ); ?>">
<?php /* og:image（アイキャッチ画像がないページ用に専用画像を用意） */ ?>
<?php if( has_post_thumbnail() ) { ?>
  <meta property="og:image" content="<?php the_post_thumbnail_url( 'full' ); ?>">
<?php } else { ?>
  <meta property="og:image" content="https://gazo.okwave.jp/okwave/images/logo/facebook_okwave.jpg">
<?php } ?>
<meta property="og:title" content="<?php the_title(); ?> | <?php bloginfo( 'description' ); ?>">
<meta property="og:description" content="<?php echo get_the_excerpt(); ?>">
<?php /* og:locale（日本語を指定）  */ ?>
<meta property="og:locale" content="ja_JP">
<meta name="twitter:widgets:csp" content="on">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@OKWAVE">
<link href="https://gazo.okwave.jp/okwave/images/favicon.ico" type="image/vnd.microsoft.icon" rel="icon">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;500&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/aab1dc9e0b.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/common_base.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/service_base.css" type="text/css" />
<!-- service header -->
<?php wp_head(); ?>

