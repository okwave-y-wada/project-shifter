<?php
/**
 * template  : 共通ヘッダー
 */
?>

<?php /* og:type（投稿ページとその他ページの設定） */ ?>
<?php if( is_single() ) { ?>
  <meta property="og:type" content="article">
  <?php } else { ?>
  <meta property="og:type" content="website">
<?php } ?>

<?php /* og:url（記事のURLはcanonicalと一致させる） */ ?>
<meta property="og:url" content="<?php echo ( 'https://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'REQUEST_URI' ] ); ?>">
<meta property="og:site_name" content="<?php bloginfo( 'description' ); ?>">

<?php /* og:image（アイキャッチ画像がないページ用に専用画像を用意） */ ?>
<?php if( has_post_thumbnail() ) { ?>
	<?php if( is_single() ) { ?>
		<meta property="og:image" content="<?php echo esc_url( home_url(  ) ); ?><?php the_post_thumbnail_url( 'full' ); ?>">
		<meta name="twitter:image" content="<?php echo esc_url( home_url(  ) ); ?><?php the_post_thumbnail_url( 'full' ); ?>">
	<?php } else { ?>
		<meta property="og:image" content="https://gazo.okwave.jp/okwave/images/logo/facebook_okwave.jpg">
<meta name="twitter:image" content="https://gazo.okwave.jp/okwave/images/logo/facebook_okwave.jpg">
	<?php } ?>
<?php } else { ?>
	<meta property="og:image" content="https://gazo.okwave.jp/okwave/images/logo/facebook_okwave.jpg">
<meta name="twitter:image" content="https://gazo.okwave.jp/okwave/images/logo/facebook_okwave.jpg">
<?php } ?>

<?php /* og:title（OGPのタイトル設定） */ ?>
<meta property="og:title" content="<?php if( is_single() ) { ?><?php the_title(); ?> | <?php } else { ?><?php
		$current_cat = get_queried_object();
		$cat_name = $current_cat->name;
	?><?php echo $cat_name; ?> | <?php } ?><?php bloginfo( 'description' ); ?>">

<?php /* og:description（記事の文字列から最初の１１０文字を表示する） */ ?>
<?php if( is_single() ) { ?>
<meta property="og:description" content="<?php echo get_the_excerpt(); ?>">
<?php } else { ?>
<meta property="og:description" content="<?php echo category_description(); ?>">
<?php } ?>

<?php /* og:locale（日本語を指定）  */ ?>
<meta property="og:locale" content="ja_JP">
<meta name="twitter:widgets:csp" content="on">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@OKWAVE">

<link href="https://gazo.okwave.jp/okwave/images/favicon.ico" type="image/vnd.microsoft.icon" rel="icon">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;500&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/aab1dc9e0b.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/common_base.css" type="text/css" />

<?php if( is_single() || is_category() ) { ?>
	<?php // アワード ?>
	<?php if ( in_category('award') || post_is_in_descendant_category( get_term_by( 'slug', 'award', 'category' ) )) : ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/award_base.css" type="text/css" />
	<?php elseif ( in_category('professional') || post_is_in_descendant_category( get_term_by( 'slug', 'professional', 'category' ) )) : ?>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/professional_base.css" type="text/css" />
	<?php endif ?>
<?php } ?>
<?php wp_head(); ?>
</head>
<?php
	// 記事のカテゴリー情報を取得する
	$cat = get_the_category();
	$cat_slug  = $cat[0]->category_nicename; // カテゴリースラッグ
?>
<body>
	<?php do_action( 'habakiri_before_container' ); ?>
		<?php
		$header_classes     = Habakiri::get_header_classses();
		$site_branding_size = Habakiri::get_site_branding_size();
		$gnav_size          = Habakiri::get_gnav_size();
		?>
			<header id="header" class="header">
				<?php do_action( 'habakiri_before_header_content' ); ?>
				<div class="header_inner">
					<div class="logo_okwave"><a href="https://okwave.jp/" target="_blank"><img src="/wp-content/themes/project/original/img/common/logo_okwave_60max_height_nomargin.svg" height="32"></a></div>
					<ul>
					<li><a href="https://okwave.jp/login" target="_blank">ログイン</a></li>
					<li><a href="https://okwave.jp/register" target="_blank">新規会員登録</a></li>
					</ul>
				</div>
				<?php do_action( 'habakiri_after_header_content' ); ?>
			</header>
			<?php do_action( 'habakiri_before_contents_content' ); ?>
