<?php
/**
 * template  : Bizcs singleページしかない想定
 */
?>
	<?php
		$category = get_the_category();
		$cat_id   = $category[0]->cat_ID;
		$cat_name = $category[0]->cat_name;
		$cat_slug = $category[0]->category_nicename;
	?>
<title><?php the_title(); ?> | <?php echo $cat_name; ?> | <?php bloginfo( 'description' ); ?></title>
<meta name="description" content="<?php echo get_the_excerpt(); ?>">
<meta property="og:type" content="article">
<meta property="og:url" content="<?php echo ( 'https://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'REQUEST_URI' ] ); ?>">
<meta property="og:site_name" content="<?php bloginfo( 'description' ); ?>">
<?php /* og:image（アイキャッチ画像がないページ用に専用画像を用意） */ ?>
<?php if( has_post_thumbnail() ) { ?>
	<meta property="og:image" content="<?php the_post_thumbnail_url( 'medium' ); ?>">
<?php } else { ?>
	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/original/img/bizcs/<?php echo esc_attr($post->post_name); ?>/bizcs.jpg">
<?php } ?>
<meta property="og:title" content="<?php the_title(); ?> | <?php bloginfo( 'description' ); ?>">
<meta property="og:description" content="<?php echo get_the_excerpt(); ?>">
<meta property="fb:app_id" content="198809966826105">
<?php /* og:locale（日本語を指定）  */ ?>
<meta property="og:locale" content="ja_JP">
<meta name="twitter:widgets:csp" content="on">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@OKWave">
<meta name="twitter:creator" content="@OKWave">
<meta name="twitter:domain" content="project.okwave.jp/">
<meta name="twitter:image:src" content="<?php echo get_stylesheet_directory_uri(); ?>/original/img/bizcs/<?php echo esc_attr($post->post_name); ?>/bizcs.jpg">
<meta name="twitter:title" content="<?php the_title(); ?> | <?php bloginfo( 'description' ); ?>">
<meta name="twitter:description" content="<?php echo get_the_excerpt(); ?>">
<link href="https://gazo.okwave.jp/okwave/images/favicon.ico" type="image/vnd.microsoft.icon" rel="icon">
<?php wp_head(); ?>
