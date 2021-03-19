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
	<?php
		$category = get_the_category();
		$cat_id   = $category[0]->cat_ID;
		$cat_name = $category[0]->cat_name;
		$cat_slug = $category[0]->category_nicename;
	?>
	<?php if(is_404()): ?>
		<title>お探しのページは見つかりません。 | <?php bloginfo( 'description' ); ?></title>
	<?php else : ?>

		<?php if ( in_category('utility') || post_is_in_descendant_category( get_term_by( 'slug', 'utility', 'category' ) )) : ?>
			<title><?php if( is_single() ) { ?><?php the_title(); ?> | <?php } else { ?><?php } ?><?php bloginfo( 'description' ); ?></title>

		<?php elseif ( in_category('sisyu') || post_is_in_descendant_category( get_term_by( 'slug', 'sisyu', 'category' ) )) : ?>
			<title><?php if( is_single() ) { ?><?php the_title(); ?> | <?php } else { ?><?php if(!is_category('sisyu')) : ?><?php
				$current_cat = get_queried_object();
				$cat_name = $current_cat->name;
			?><?php echo  $cat_name; ?> | <?php endif; ?><?php } ?><?php 
					$cats = get_the_category();
					$cat = $cats[0];
					while($cat->parent) $cat = get_category($cat->parent);
					echo $cat->cat_name
			?></title>

		<?php else : ?>
			<title><?php if( is_single() ) { ?><?php the_title(); ?> | <?php } else { ?><?php } ?><?php echo $cat_name; ?> | <?php bloginfo( 'description' ); ?></title>
		<?php endif; ?>
	<?php endif; ?>
	
	<?php if( is_single() ) { ?>
		<meta name="description" content="<?php echo get_the_excerpt(); ?>">
	<?php } else { ?>
		<meta name="description"content="<?php echo category_description(); ?>">
	<?php } ?>

	<?php wp_head(); ?>

	<?php if(is_404()): ?>
		<?php get_template_part( 'template_common/header-common'); ?>
		<?php // 404 header ?>
	<?php else : ?>
		<?php if ( in_category('sisyu') || post_is_in_descendant_category( get_term_by( 'slug', 'sisyu', 'category' ) )) : ?>
			<?php get_template_part( 'template_sisyu/header-sisyu'); ?>
			
		<?php elseif ( in_category('contribute') || post_is_in_descendant_category( get_term_by( 'slug', 'contribute', 'category' ) )) : ?>
			<?php get_template_part( 'template_bizcs/header-bizcs'); ?>
		<?php else : ?>
		<?php //other ?>
		<?php endif; ?>
	<?php endif; ?>

	<?php //他 css ?>
	<?php if ( in_category('sisyu') || post_is_in_descendant_category( get_term_by( 'slug', 'sisyu', 'category' ) )) : ?>
	<?php elseif ( in_category('bizcs') || post_is_in_descendant_category( get_term_by( 'slug', 'bizcs', 'category' ) )) : ?>
	<?php else : ?>
		<?php if(!is_404()): ?>
			<?php get_template_part( 'template_common/header-common'); ?>
		<?php endif; ?>
	<?php endif; ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-68230103-4"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());
 gtag('config', 'UA-68230103-4');
</script>