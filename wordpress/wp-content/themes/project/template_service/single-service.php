<?php
/**
 * template  : サービス
 */
?>
<style>
  <?php
    $main_img = get_field('se_main_type');
    if ($main_img == 'type1') { ?>
    <?php while(have_rows('se_main_type1_setting')):the_row();  ?>
      <?php if( get_sub_field('se_main_image') ):  ?>
        .hero-box {
              background-image: url(<?php the_sub_field('se_main_image_sp'); ?>);
              background-size: cover;
            }

            @media (min-width: 960px) {
            .hero-box {
              background-image: url(<?php the_sub_field('se_main_image'); ?>);
              background-size: cover;
            }
          }
      <?php endif; ?>
    <?php endwhile; ?>
  <?php } elseif ($main_img == 'type2') { ?>
    <?php while(have_rows('se_main_type2_setting')):the_row();  ?>
    <?php if( get_sub_field('se_main_image') ):  ?>
      .hero-box {
        background-image: url(<?php the_sub_field('se_main_image_sp'); ?>);
        background-size: auto 300px;
        background-position: 0 0;
      }
      @media (min-width: 400px) {
        .hero-box {
          background-image: url(<?php the_sub_field('se_main_image'); ?>);
          background-size:auto 300px;
          background-position: right 0;
        }
      }
      @media (min-width: 960px) {
        .hero-box {
          background-image: url(<?php the_sub_field('se_main_image'); ?>);
          background-size: auto 100%;
          background-position: right 0;
        }
      }
      @media (min-width: 1580px) {
        .hero-box {
          background-image: url(<?php the_sub_field('se_main_image'); ?>);
          background-size: 100% auto ;
          background-position: right 0;
        }
      }
    <?php endif; ?>
  <?php endwhile; ?>
  <?php } elseif ($main_img == 'type3') { ?>
    <?php while(have_rows('se_main_type3_setting')):the_row();  ?>
      <?php if( get_sub_field('se_main_image') ):  ?>
        @media (min-width: 960px) {
          .hero-box::after {
            background-image: url(<?php the_sub_field('se_main_image'); ?>);
          }
        }
      <?php endif; ?>
    <?php endwhile; ?>
  <?php } ?>

  <?php if( get_field('se_header_css') ):  ?>
      <?php the_field('se_header_css'); ?>
    <?php endif; ?>

  <?php
    $main_img = get_field('se_main_type');
    if ($main_img == 'type1') { ?>
    <?php while(have_rows('se_main_type1_setting')):the_row();  ?>
      <?php if( get_sub_field('se_main_css') ):  ?>
        <?php the_sub_field('se_main_css'); ?>
      <?php endif; ?>
    <?php endwhile; ?>
  <?php } elseif ($main_img == 'type2') { ?>
    <?php while(have_rows('se_main_type2_setting')):the_row();  ?>
    <?php if( get_sub_field('se_main_css') ):  ?>
        <?php the_sub_field('se_main_css'); ?>
      <?php endif; ?>
    <?php endwhile; ?>
  <?php } elseif ($main_img == 'type3') { ?>
    <?php while(have_rows('se_main_type3_setting')):the_row();  ?>
      <?php if( get_sub_field('se_main_css') ):  ?>
        <?php the_sub_field('se_main_css'); ?>
      <?php endif; ?>
    <?php endwhile; ?>
  <?php } ?>
  <?php $contents = get_field('se_content1_type'); if ($contents == 'contact') { ?>
    <?php while(have_rows('se_contact')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'comparelist') { ?>
    <?php while(have_rows('se_result_list')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'image_and_text') { ?>
    <?php while(have_rows('se_largeimage-text')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'listup') { ?>
    <?php while(have_rows('se_listup')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'site') { ?>
    <?php while(have_rows('se_site')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'free') { ?>
    <?php while(have_rows('se_free')):the_row();  ?><?php if( get_sub_field('css') ):  ?> <?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } ?>
  <?php $contents = get_field('se_content2_type'); if ($contents == 'contact') { ?>
    <?php while(have_rows('se_contact2')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'comparelist') { ?>
    <?php while(have_rows('se_result_list2')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'image_and_text') { ?>
    <?php while(have_rows('se_largeimage-text2')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'listup') { ?>
    <?php while(have_rows('se_listup2')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'site') { ?>
    <?php while(have_rows('se_site2')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'free') { ?>
    <?php while(have_rows('se_free2')):the_row();  ?><?php if( get_sub_field('css') ):  ?> <?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } ?>
  <?php $contents = get_field('se_content3_type'); if ($contents == 'contact') { ?>
    <?php while(have_rows('se_contact3')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'comparelist') { ?>
    <?php while(have_rows('se_result_list3')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'image_and_text') { ?>
    <?php while(have_rows('se_largeimage-text3')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'listup') { ?>
    <?php while(have_rows('se_listup3')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'site') { ?>
    <?php while(have_rows('se_site3')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'free') { ?>
    <?php while(have_rows('se_free3')):the_row();  ?><?php if( get_sub_field('css') ):  ?> <?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } ?>
  <?php $contents = get_field('se_content4_type'); if ($contents == 'contact') { ?>
    <?php while(have_rows('se_contact4')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'comparelist') { ?>
    <?php while(have_rows('se_result_list4')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'image_and_text') { ?>
    <?php while(have_rows('se_largeimage-text4')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'listup') { ?>
    <?php while(have_rows('se_listup4')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'site') { ?>
    <?php while(have_rows('se_site4')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'free') { ?>
    <?php while(have_rows('se_free4')):the_row();  ?><?php if( get_sub_field('css') ):  ?> <?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } ?>
  <?php $contents = get_field('se_content5_type'); if ($contents == 'contact') { ?>
    <?php while(have_rows('se_contact5')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'comparelist') { ?>
    <?php while(have_rows('se_result_list5')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'image_and_text') { ?>
    <?php while(have_rows('se_largeimage-text5')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'listup') { ?>
    <?php while(have_rows('se_listup5')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'site') { ?>
    <?php while(have_rows('se_site5')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'free') { ?>
    <?php while(have_rows('se_free5')):the_row();  ?><?php if( get_sub_field('css') ):  ?> <?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } ?>
  <?php $contents = get_field('se_content6_type'); if ($contents == 'contact') { ?>
    <?php while(have_rows('se_contact6')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'comparelist') { ?>
    <?php while(have_rows('se_result_list6')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'image_and_text') { ?>
    <?php while(have_rows('se_largeimage-text6')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'listup') { ?>
    <?php while(have_rows('se_listup6')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'site') { ?>
    <?php while(have_rows('se_site6')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'free') { ?>
    <?php while(have_rows('se_free6')):the_row();  ?><?php if( get_sub_field('css') ):  ?> <?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } ?>
  <?php $contents = get_field('se_content7_type'); if ($contents == 'contact') { ?>
    <?php while(have_rows('se_contact7')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'comparelist') { ?>
    <?php while(have_rows('se_result_list7')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'image_and_text') { ?>
    <?php while(have_rows('se_largeimage-text7')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'listup') { ?>
    <?php while(have_rows('se_listup7')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'site') { ?>
    <?php while(have_rows('se_site7')):the_row();  ?><?php if( get_sub_field('css') ):  ?><?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } elseif ($contents == 'free') { ?>
    <?php while(have_rows('se_free7')):the_row();  ?><?php if( get_sub_field('css') ):  ?> <?php the_sub_field('css'); ?><?php endif; ?><?php endwhile; ?>
  <?php } ?>
</style>
</head>
<?php
	// 記事のカテゴリー情報を取得する
	$cat = get_the_category();
	$cat_slug  = $cat[0]->category_nicename; // カテゴリースラッグ
?>
<?php the_sub_field('se_main_image_sp'); ?>
<?php
  $se_header = get_field('se_header_type');
  if ($se_header == 'answers') { ?>
  <?php while(have_rows('se_header_button')):the_row();  ?>
  <body class="page_<?php echo  $cat_slug; ?> single_service answers">
  <?php // !-- Google Tag Manager (noscript) -- ?>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5R683KK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php //-- End Google Tag Manager (noscript) -- ?>
<?php endwhile; ?>
  <?php } elseif ($se_header == 'bizcs') { ?>
    <?php while(have_rows('se_header_button')):the_row();  ?>
    <body class="page_<?php echo  $cat_slug; ?> single_service bizcs">
    <?php // !-- Google Tag Manager (noscript) -- ?>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5R683KK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php //-- End Google Tag Manager (noscript) -- ?>
  <?php endwhile; ?>
<?php } else { ?>
  <body class="page_<?php echo  $cat_slug; ?> single_service other">
  <?php // !-- Google Tag Manager (noscript) -- ?>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5R683KK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php //-- End Google Tag Manager (noscript) -- ?>
<?php } ?><span  id="header"></span>

<?php do_action( 'habakiri_before_container' ); ?>
<?php do_action( 'habakiri_before_header_content' ); ?>
    <?php
    $header_classes     = "Habakiri::get_header_classses()";
    $site_branding_size = Habakiri::get_site_branding_size();
    $gnav_size          = Habakiri::get_gnav_size();
    ?>
<?php do_action( 'habakiri_before_contents_content' ); ?>

<?php include("contents/header.php"); ?>

	<div class="wrap service_page">
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

<?php while(have_rows('se_footer_button')):the_row();  ?>
  <?php if( get_sub_field('se_header_button_link') ):  ?>
    <div class="footer_area">
      <div class="footer-btn">
        <a href=" <?php the_sub_field('se_header_button_link'); ?>" target="_blank" class="contact"><?php the_sub_field('se_header_button_text'); ?></a>
      </div>
    </div>
  <?php endif; ?>
<?php endwhile; ?>

<?php get_footer(); ?>
