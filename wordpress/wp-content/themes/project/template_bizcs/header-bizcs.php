<?php
/**
 * template  : Bizcs
 */
?>
<?php
	$current_cat = get_queried_object();
	$cat_name = $current_cat->name;
?>
<?php /* og:type（投稿ページとその他ページの設定） */ ?>
<?php if( is_single() ) { ?>
  <meta property="og:type" content="article">
  <?php } else { ?>
  <meta property="og:type" content="website">
<?php } ?>

<?php /* og:url（記事のURLはcanonicalと一致させる） */ ?>
<meta property="og:url" content="<?php echo ( 'https://' . $_SERVER[ 'HTTP_HOST' ] . $_SERVER[ 'REQUEST_URI' ] ); ?>">
<meta property="og:site_name" content="<?php 
			$cats = get_the_category();
			$cat = $cats[0];
			while($cat->parent) $cat = get_category($cat->parent);
			echo $cat->cat_name
	?>">

<?php /* og:image（アイキャッチ画像がないページ用に専用画像を用意） */ ?>
<?php if( has_post_thumbnail() ) { ?>
	<?php if( is_single() ) { ?>
		<meta property="og:image" content="<?php the_post_thumbnail_url( 'medium' ); ?>">
	<?php } else { ?>
		<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/original/img/bizcs/<?php echo esc_attr($post->post_name); ?>/bizcs.jpg">
	<?php } ?>
<?php } else { ?>
	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/original/img/bizcs/<?php echo esc_attr($post->post_name); ?>/bizcs.jpg">
<?php } ?>

<?php /* og:title（OGPのタイトル設定） */ ?>
<meta property="og:title" content="<?php if( is_single() ) { ?><?php the_title(); ?> | <?php } else { ?><?php if(!is_category('contribute')) : ?><?php echo  $cat_name; ?> | <?php endif; ?><?php } ?><?php 
			$cats = get_the_category();
			$cat = $cats[0];
			while($cat->parent) $cat = get_category($cat->parent);
			echo $cat->cat_name
	?>">

<?php /* og:description（記事の文字列から最初の１１０文字を表示する） */ ?>
<?php if( is_single() ) { ?>
<meta property="og:description" content="<?php echo get_the_excerpt(); ?>">
<?php } else { ?>
<meta property="og:description" content="<?php echo category_description(); ?>">
<?php } ?>
<meta property="fb:app_id" content="198809966826105">

<?php /* og:locale（日本語を指定）  */ ?>
<meta property="og:locale" content="ja_JP">
<meta name="twitter:widgets:csp" content="on">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@OKWave">
<meta name="twitter:creator" content="@OKWave">
<meta name="twitter:domain" content="project.okwave.jp/">
<meta name="twitter:image:src" content="<?php echo get_stylesheet_directory_uri(); ?>/original/img/bizcs/<?php echo esc_attr($post->post_name); ?>/bizcs.jpg">
<meta name="twitter:title" content="<?php if( is_single() ) { ?><?php the_title(); ?> | <?php } else { ?><?php if(!is_category('bizcs')) : ?><?php echo  $cat_name; ?> | <?php endif; ?><?php } ?><?php 
			$cats = get_the_category();
			$cat = $cats[0];
			while($cat->parent) $cat = get_category($cat->parent);
			echo $cat->cat_name
	?>">
<?php if( is_single() ) { ?>
<meta name="twitter:description" content="<?php echo get_the_excerpt(); ?>">
<?php } else { ?>
<meta name="twitter:description" content="<?php echo category_description(); ?>">
<?php } ?>

<link href="https://gazo.okwave.jp/okwave/images/favicon.ico" type="image/vnd.microsoft.icon" rel="icon">

<?php //link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ???/css/bizcs/base.css" type="text/css" / ?>
