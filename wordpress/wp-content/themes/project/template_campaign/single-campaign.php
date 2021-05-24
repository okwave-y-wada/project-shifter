<?php
/**
 * template  : キャンペーン
 */
?>
	<style>
  <?php the_field('cp_main_css'); ?>
  <?php while(have_rows('cp_main_image_detail')):the_row();  ?>
    <?php if( get_sub_field('cp_main_bg_flie_sp') ):  ?>

      .post_contents .hero-box {
        position: relative;
        overflow: hidden;
        text-align: center;
      }
      .post_contents .hero-box:after {
        position: absolute;
        content: "";
        display: block;
        width: 100%;
        height: 100%;
        top: 0;
        background: url(<?php the_sub_field('cp_main_bg_flie_sp'); ?>) no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -ms-background-size: cover;
        background-size: cover;
      }
      .post_contents .hero-box .hero-element {
        z-index: 1;
        position: relative;
      }
    <?php endif; ?>
  <?php endwhile; ?>

  <?php while(have_rows('cp_tieup')):the_row();  ?><?php if( get_sub_field('cp_tieup_css') ):  ?><?php the_sub_field('cp_tieup_css'); ?><?php endif; ?><?php endwhile; ?>
  <?php while(have_rows('cp_free_headline_block')):the_row();  ?><?php if( get_sub_field('cp_free_hadline_css') ):  ?><?php the_sub_field('cp_free_hadline_css'); ?><?php endif; ?><?php endwhile; ?>
  <?php while(have_rows('cp_free_block')):the_row();  ?><?php if( get_sub_field('cp_free_css') ):  ?><?php the_sub_field('cp_free_css'); ?><?php endif; ?><?php endwhile; ?>
  <?php while(have_rows('cp_tieup2')):the_row();  ?><?php if( get_sub_field('cp_tieup_css') ):  ?><?php the_sub_field('cp_tieup_css'); ?><?php endif; ?><?php endwhile; ?>
  <?php while(have_rows('cp_free_headline_block2')):the_row();  ?><?php if( get_sub_field('cp_free_hadline_css') ):  ?><?php the_sub_field('cp_free_hadline_css'); ?><?php endif; ?><?php endwhile; ?>
  <?php while(have_rows('cp_free_block2')):the_row();  ?><?php if( get_sub_field('cp_free_css') ):  ?><?php the_sub_field('cp_free_css'); ?><?php endif; ?><?php endwhile; ?>
  <?php while(have_rows('cp_tieup3')):the_row();  ?><?php if( get_sub_field('cp_tieup_css') ):  ?><?php the_sub_field('cp_tieup_css'); ?><?php endif; ?><?php endwhile; ?>
  <?php while(have_rows('cp_free_headline_block3')):the_row();  ?><?php if( get_sub_field('cp_free_hadline_css') ):  ?><?php the_sub_field('cp_free_hadline_css'); ?><?php endif; ?><?php endwhile; ?>
  <?php while(have_rows('cp_free_block3')):the_row();  ?><?php if( get_sub_field('cp_free_css') ):  ?><?php the_sub_field('cp_free_css'); ?><?php endif; ?><?php endwhile; ?>
    <?php while(have_rows('cp_tieup4')):the_row();  ?><?php if( get_sub_field('cp_tieup_css') ):  ?><?php the_sub_field('cp_tieup_css'); ?><?php endif; ?><?php endwhile; ?>
  <?php while(have_rows('cp_free_headline_block4')):the_row();  ?><?php if( get_sub_field('cp_free_hadline_css') ):  ?><?php the_sub_field('cp_free_hadline_css'); ?><?php endif; ?><?php endwhile; ?>
  <?php while(have_rows('cp_free_block4')):the_row();  ?><?php if( get_sub_field('cp_free_css') ):  ?><?php the_sub_field('cp_free_css'); ?><?php endif; ?><?php endwhile; ?>
    <?php while(have_rows('cp_tieup5')):the_row();  ?><?php if( get_sub_field('cp_tieup_css') ):  ?><?php the_sub_field('cp_tieup_css'); ?><?php endif; ?><?php endwhile; ?>
  <?php while(have_rows('cp_free_headline_block5')):the_row();  ?><?php if( get_sub_field('cp_free_hadline_css') ):  ?><?php the_sub_field('cp_free_hadline_css'); ?><?php endif; ?><?php endwhile; ?>
  <?php while(have_rows('cp_free_block5')):the_row();  ?><?php if( get_sub_field('cp_free_css') ):  ?><?php the_sub_field('cp_free_css'); ?><?php endif; ?><?php endwhile; ?>
    <?php while(have_rows('cp_tieup6')):the_row();  ?><?php if( get_sub_field('cp_tieup_css') ):  ?><?php the_sub_field('cp_tieup_css'); ?><?php endif; ?><?php endwhile; ?>
  <?php while(have_rows('cp_free_headline_block6')):the_row();  ?><?php if( get_sub_field('cp_free_hadline_css') ):  ?><?php the_sub_field('cp_free_hadline_css'); ?><?php endif; ?><?php endwhile; ?>
  <?php while(have_rows('cp_free_block6')):the_row();  ?><?php if( get_sub_field('cp_free_css') ):  ?><?php the_sub_field('cp_free_css'); ?><?php endif; ?><?php endwhile; ?>

  </style>
</head>
<?php
	// 記事のカテゴリー情報を取得する
	$cat = get_the_category();
	$cat_slug  = $cat[0]->category_nicename; // カテゴリースラッグ
?>

<body class="campaign"><span  id="header"></span>
<?php do_action( 'habakiri_before_container' ); ?>
<?php do_action( 'habakiri_before_header_content' ); ?>
    <?php
    $header_classes     = "Habakiri::get_header_classses()";
    $site_branding_size = Habakiri::get_site_branding_size();
    $gnav_size          = Habakiri::get_gnav_size();
    ?>

	<?php do_action( 'habakiri_before_contents_content' ); ?>

  <?php include("contents/header.php"); ?>

  <div class="wrap campaign_page">
    <main class="main_contents cp_<?php the_field('cp_main_image'); ?>">
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
