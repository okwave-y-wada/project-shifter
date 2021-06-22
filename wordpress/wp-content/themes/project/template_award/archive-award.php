<?php
/**
 * template  : アワード
 */
?>

</head>
<?php
	$current_cat = get_queried_object();
	$cat_name = $current_cat->name;
	$cat_slug = $current_cat->slug;
?>

<body class="award <?php echo  $cat_slug; ?>">
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

	<div class="wrap award_page">
		<main class="main_contents contents_<?php echo $cat_slug; ?>">
			<?php //get_template_part( 'modules/breadcrumbs' ); ?>
			<h1 class="title" id="<?php echo  $cat_slug; ?>"><?php echo  $cat_name; ?><span><?php echo category_description(); ?></span></h1>

			<?php
			$name = ( is_search() ) ? 'search' : 'archive';
			if ( have_posts() ) {
				get_template_part( 'content', $name );
			} else {
				get_template_part( 'content', 'none' );
			}
			?>
		</main>

		<?php //get_template_part( 'modules/link-pages' ); ?>
		<?php //get_template_part( 'modules/related-posts' ); ?>
		<?php
		//	if ( comments_open() || pings_open() || get_comments_number() ) {
		//		comments_template( '', true );
		//	}
		?>

		<aside>
		<?php
			global $post;
			$tmp_post = $post;
			$category_slugs = array(
				'monthly_user',
				'annual_user',
				'annual_qa'
			);
			$category_ids = array();
			foreach ( $category_slugs as $category_slug ) {
				$idObj = get_category_by_slug( $category_slug );
				$category_id = $idObj->term_id;
				array_push( $category_ids, $category_id );
			}
			$numberposts = '5';
			foreach ( $category_ids as $category_id ) {
			?>
			<div class="award_group_list">
				<h6><?php echo get_cat_name( $category_id ); ?><a href="<?php echo get_category_link( $category_id ); ?>">一覧</a></h6>
				<ul>
				<?php
					$postslist = get_posts( "category=$category_id&numberposts=$numberposts&order=DESC&orderby=date" );
					foreach ( $postslist as $post ) {
				?>
					<li>
						<a href=<?php echo get_permalink( $post->ID ); ?>><?php echo $post->post_title; ?></a>
						<time datetime="<?php the_time('Y-m-d');?>" itemprop="datepublished"><?php the_time('Y/m/d');?></time>
					</li>
				<?php
					}
				?>
				</ul>
			</div>
			<?php
			}
			$post = $tmp_post;
			?>
			<?php
				do_action( 'habakiri_before_sidebar_widget_area' );
				if ( is_active_sidebar( 'sidebar' ) ) {
					echo '<div class="award_group_list">';
					dynamic_sidebar( 'sidebar' );
					echo '</div></aside>';
				}
				do_action( 'habakiri_after_sidebar_widget_area' );
			?>
		</aside>
	</div>

	<?php get_footer(); ?>
