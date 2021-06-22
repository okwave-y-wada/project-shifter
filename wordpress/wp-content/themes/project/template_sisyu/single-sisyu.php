<?php
/**
 * template  : 紫舟さんサイト
 */
?>
</head>
<?php
	// 記事のカテゴリー情報を取得する
	$cat = get_the_category();
	$cat_slug  = $cat[0]->category_nicename; // カテゴリースラッグ
?>

<body class="sisyu page_<?php echo  $cat_slug; ?>">
<?php // !-- Google Tag Manager (noscript) -- ?>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5R683KK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php //-- End Google Tag Manager (noscript) -- ?>
<?php do_action( 'habakiri_before_container' ); ?>
<?php do_action( 'habakiri_before_header_content' ); ?>
    <?php
    $header_classes     = Habakiri::get_header_classses();
    $site_branding_size = Habakiri::get_site_branding_size();
    $gnav_size          = Habakiri::get_gnav_size();
    ?>

      <?php do_action( 'habakiri_before_contents_content' ); ?>

<div class="wrap" id="page_<?php echo esc_attr($post->post_name); ?>">
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

	<?php if (!in_category('news')): ?>
		<ul class="breadcrumb_list">
			<?php mytheme_breadcrumb(); ?>
		</ul>
	<?php endif; ?>

</div>
<div class="navigation">
	<?php get_footer(); ?>
	<?php get_sidebar(); ?>
</div>
