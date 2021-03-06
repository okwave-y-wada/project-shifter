<?php
/**
 * Version    : 1.2.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# <?php echo ( is_single() || is_page() ) ? 'fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#' : 'fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#' ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
  <?php //-- Global site tag (gtag.js) - Google Analytics -- ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-68230103-4"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-68230103-4');
  </script>
  <?php //-- Google Tag Manager -- ?>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5R683KK');</script>
  <?php //-- End Google Tag Manager -- ?>
  <?php if ( in_category('sisyu') || post_is_in_descendant_category( get_term_by( 'slug', 'sisyu', 'category' ) )) : ?>
    <?php include("template_sisyu/header-sisyu.php"); ?>

  <?php else : ?>

    <?php if ( is_single() ) : ?>
      <?php if (in_category('utility')) { ?>
        <?php /* utilityの記事 */ ?>
        <?php get_template_part( 'template_utility/header-utility'); ?>

      <?php } elseif (in_category('contribute')) { ?>
        <?php /* bizcsのcontributeカテゴリの記事 */ ?>
        <?php include("template_bizcs/header-bizcs.php"); ?>

        <?php } elseif (in_category('service')) { ?>
        <?php /* serviceの記事 */ ?>
        <?php include("template_service/header-service.php"); ?>

        <?php } elseif (in_category('campaign')) { ?>
        <?php /*  campaign */ ?>
        <?php include("template_campaign/header-campaign.php"); ?>

        <?php } elseif (in_category('qa')) { ?>
        <?php /*  qa */ ?>
        <?php include("template_campaign/header-qa.php"); ?>

      <?php } else { ?>
        <?php /* 他 */ ?>
        <?php include("template_common/header-common.php"); ?>
      <?php } ?>
    <?php else : ?>
      <?php /* 他 */ ?>
      <?php include("template_common/header-common.php"); ?>
    <?php endif; ?>
  <?php endif; ?>
