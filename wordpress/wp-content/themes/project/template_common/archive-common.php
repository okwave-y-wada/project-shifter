<?php
/**
 * template  : 共通
 */
?>

</head>
<?php
	$current_cat = get_queried_object();
	$cat_name = $current_cat->name;
	$cat_slug = $current_cat->slug;
?>

<body class="common <?php echo  $cat_slug; ?>">

	<?php do_action( 'habakiri_before_container' ); ?>
	<?php do_action( 'habakiri_before_header_content' ); ?>
	<?php
		$header_classes     = Habakiri::get_header_classses();
		$site_branding_size = Habakiri::get_site_branding_size();
		$gnav_size          = Habakiri::get_gnav_size();
	?>

	<?php do_action( 'habakiri_before_contents_content' ); ?>

	<div class="wrap">
		<main class="main_contents contents_<?php echo $cat_slug; ?>">
      <article>
          <?php do_action( 'habakiri_before_entries' ); ?>
          <div class="wrap no_contents">
              <p>
                ページが見つかりませんでした。<br>
                お探しのページが移動したか削除されています。<br>
              </p>
            </div>
      </article>
    </main>
	</div>

	<?php get_footer(); ?>
