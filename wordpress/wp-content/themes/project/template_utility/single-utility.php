<?php
/**
 * template  : OKWAVE関連
 */
?>
</head>
<?php
	// 記事のカテゴリー情報を取得する
	$cat = get_the_category();
	$cat_slug  = $cat[0]->category_nicename; // カテゴリースラッグ
?>

<body class="utility page_<?php echo  $cat_slug; ?>">
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
</div>
<div class="navigation">
	<?php get_footer(); ?>
</div>
