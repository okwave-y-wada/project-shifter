<?php
/**
 * template  : アワード
 */
?>
<?php if ( in_category( array('annual_qa','annual_user') ) ) : ?><?php else : ?>
	<?php // 2020-02-18からの ?>

	<?php if( strtotime(get_the_date('Y-m-d')) > strtotime('2020-02-17') ):?>

		<style type="text/css">
			/*ランキングテンプレート専用スタイル*/
			.post_contents .ranking .rank_arigato,
			.post_contents .ranking .rank_activity,
			.post_contents .ranking .rank_category,
			.post_contents .ranking .rank_professional{
				margin-bottom: 64px;
				margin-top:32px;
			}

			.post_contents .ranking .rank_notice{
				margin-bottom: 40px;
			}

			.post_contents .ranking h2{
				font-size:22px;
				font-weight:normal;
				margin-bottom:0;
			}

			.post_contents .ranking h3{
				font-size:17px;
				margin-bottom:4px;
			}

			.post_contents .ranking h3 span{
				font-size:14px;
				padding-left:0.5em;
				font-weight:300;
			}

			.post_contents .ranking .rank_sn,
			.post_contents .ranking .rank_pl {
				margin-top:32px;
			}

			.post_contents .ranking p {
				font-weight:500;
			}

			.post_contents .ranking .rank_sn p > a,
			.post_contents .ranking .rank_pl p > a{
					margin-right:0.2em;
			}

			.post_contents .ranking .rank_pl p{
					display:inline-block;
					margin-right:1em;
			}

			.post_contents .ranking p.rank_comment{
				font-weight:300;
				margin-bottom:16px;
			}

			.post_contents .ranking .rank_sn p span.pro_job{
				margin-left:1em;
			}

			.post_contents .ranking .rank_notice p{
				font-size:13px;
				font-weight:300;
				margin-bottom:32px;
			}

			@media screen and (max-width: 375px){
				.post_contents .ranking .rank_activity h3 span{
					display:block;
					padding-left:0;
				}
			}
		</style>
	<?php else:?>
	<?php // 2020-02-18までの投稿の場合に表示させたい内容を記述します ?>
	<style type="text/css">
		table.ranking_old{
			padding-bottom:40px;
			border-bottom:none;
			text-align:left;
			margin-top:32px;
			width:100%;
			font-size:13px;
		}

		.okinfo {
			margin-top:32px;
		}

		.ranking_old .ranking_old_head{
			font-size:16px;
			margin:0;
		}

		.ranking_old tr th{
			padding-bottom:8px;
		}

		.ranking_old tr.ranking_old_mb td{
			padding-bottom:24px;
			border:none;
		}

		.ranking_old tr td{
			padding-bottom:16px;
			vertical-align:top;
			border: none;
			line-height: 1.33;
			width:33%;
		}

		@media screen and (max-width: 768px){
			.ranking_old{
				display:block;
			}
			.ranking_old tr{
				display:block;
				padding-bottom:0;
				position:relative;
			}
			.ranking_old tr td{
				display:inline-block;
				padding-bottom:8px;
				width:auto;
			}
			.ranking_old tr td:first-child{
				display:block;
				width:100%;
				padding-top:24px;
			}
			.ranking_old tr td:nth-child(2) {
				min-width:25%;
			}
			.ranking_old .ranking_old_head{
				padding-bottom:0;
			}
		}
		@media screen and (max-width: 375px){
				.ranking_old tr td:first-child{
					position:relative;
			}
			.ranking_old_prize{
				position:absolute;
			}
		}
	</style>
	<?php endif;?>
<?php endif; ?>
</head>
<?php
	// 記事のカテゴリー情報を取得する
	$cat = get_the_category();
	$cat_slug  = $cat[0]->category_nicename; // カテゴリースラッグ
?>

<body class="award page_<?php echo  $cat_slug; ?> single_award">
<?php // !-- Google Tag Manager (noscript) -- ?>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5R683KK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<?php //-- End Google Tag Manager (noscript) -- ?>
<?php do_action( 'habakiri_before_container' ); ?>
<?php do_action( 'habakiri_before_header_content' ); ?>
    <?php
    $header_classes     = "Habakiri::get_header_classses()";
    $site_branding_size = Habakiri::get_site_branding_size();
    $gnav_size          = Habakiri::get_gnav_size();
    ?>

	<?php do_action( 'habakiri_before_contents_content' ); ?>
	<?php if ( in_category( array('annual_qa','annual_user') ) ) : ?>
		<div class="wrap page_<?php echo esc_attr($post->post_name); ?> <?php if( strtotime(get_the_date('Y-m-d')) > strtotime('2020-10-01') ):?>layout20<?php endif;?>">
	<?php else : ?>
		<div class="wrap award_page">
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

	<?php if ( in_category( array('annual_qa','annual_user') ) ) : ?>
		<aside class="bottom_nav">
	<?php else : ?>
		<aside>
	<?php endif; ?>

		<div class="side_inner">
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

		</div>
		<?php get_sidebar(); ?>
	</aside>

</div>

<?php get_footer(); ?>
