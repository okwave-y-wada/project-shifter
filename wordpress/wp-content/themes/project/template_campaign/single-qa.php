<?php
/**
 * template  : QAキャンペーン
 */
?>
	<style>
  <?php the_field('cp_qa_header_css'); ?>
  <?php the_field('cp_qa_main_css'); ?>
  </style>
</head>
<?php
	// 記事のカテゴリー情報を取得する
	$cat = get_the_category();
	$cat_slug  = $cat[0]->category_nicename; // カテゴリースラッグ
?>

<body class="campaign_qa bizcs"><span  id="header"></span>
<?php do_action( 'habakiri_before_container' ); ?>
<?php do_action( 'habakiri_before_header_content' ); ?>
    <?php
    $header_classes     = "Habakiri::get_header_classses()";
    $site_branding_size = Habakiri::get_site_branding_size();
    $gnav_size          = Habakiri::get_gnav_size();
    ?>
    <?php
      $cp_qa_header = get_field('cp_qa_main_type');
    ?>

	<?php do_action( 'habakiri_before_contents_content' ); ?>
  <?php include("contents/header-qa.php"); ?>

  <div class="wrap campaign_qa_page">
    <?php if ($cp_qa_header == 'answersCp') {?>
      <main class="main_contents answer">
    <?php } else { ?>
      <main class="main_contents quest">
    <?php } ?>
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
