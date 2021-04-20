<?php
/**
 * template  : 紫舟さんサイト
 */
?>
<?php
	$current_cat = get_queried_object();
	$cat_name = $current_cat->name;
?>

<title><?php if( is_single() ) { ?><?php the_title(); ?> | <?php } else { ?><?php if(!is_category('sisyu')) : ?><?php
  $current_cat = get_queried_object();
  $cat_name = $current_cat->name;
?><?php echo  $cat_name; ?> | <?php endif; ?><?php } ?><?php
  $cats = get_the_category();
  $cat = $cats[0];
  while($cat->parent) $cat = get_category($cat->parent);
  echo $cat->cat_name
?></title>

<?php if( is_single() ) { ?>
  <meta name="description" content="<?php echo get_the_excerpt(); ?>">
  <meta property="og:type" content="article">

<?php } else { ?>
  <meta property="og:type" content="website">
  <meta name="description"content="<?php echo category_description(); ?>">



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
		<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/original/img/sisyu/sisyu_profile.jpg">
	<?php } ?>
<?php } else { ?>
	<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/original/img/sisyu/sisyu_profile.jpg">
<?php } ?>

<?php /* og:title（OGPのタイトル設定） */ ?>
<meta property="og:title" content="<?php if( is_single() ) { ?><?php the_title(); ?> | <?php } else { ?><?php if(!is_category('sisyu')) : ?><?php echo  $cat_name; ?> | <?php endif; ?><?php } ?><?php
			$cats = get_the_category();
			$cat = $cats[0];
			while($cat->parent) $cat = get_category($cat->parent);
			echo $cat->cat_name
	?>">

<?php /* og:description（記事の文字列から最初の１１０文字を表示する） */ ?>
<?php if( is_single() ) { ?>
<meta property="og:description" content="<?php echo mb_substr( str_replace( array( "\r\n" , "\n" , "\r" ), '', strip_tags( $post->post_content ) ), 0, 110 ); ?>">
<?php } else { ?>
<meta property="og:description" content="<?php echo category_description(); ?>">
<?php } ?>

<?php /* og:locale（日本語を指定）  */ ?>
<meta property="og:locale" content="ja_JP">
<meta name="twitter:widgets:csp" content="on">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@SisyuOfficialGallery">

<link href="<?php echo get_stylesheet_directory_uri(); ?>/original/img/sisyu/favicon.ico" type="image/vnd.microsoft.icon" rel="icon">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/sisyu_base.css" type="text/css" />
<?php wp_head(); ?>
