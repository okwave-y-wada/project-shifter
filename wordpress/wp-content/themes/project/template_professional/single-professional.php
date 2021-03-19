<?php
/**
 * template  : 専門家
 */
?>
</head>
<?php
	// 記事のカテゴリー情報を取得する
	$cat = get_the_category();
	$cat_slug  = $cat[0]->category_nicename; // カテゴリースラッグ
?>

<body class="professional page_<?php echo  $cat_slug; ?> single_professional">
<?php do_action( 'habakiri_before_container' ); ?>
<?php do_action( 'habakiri_before_header_content' ); ?>
    <?php
    $header_classes     = "Habakiri::get_header_classses()";
    $site_branding_size = Habakiri::get_site_branding_size();
    $gnav_size          = Habakiri::get_gnav_size();
    ?>

	<?php do_action( 'habakiri_before_contents_content' ); ?>
	<?php if ( in_category( array('annual_qa','annual_user') ) ) : ?>
		<div class="wrap page_<?php echo esc_attr($post->post_name); ?> ">
	<?php else : ?>
		<div class="wrap professional_page">
	<?php endif; ?>
	

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

	<aside>
		<?php get_sidebar(); ?>
	</aside>

</div>

<?php get_footer(); ?>