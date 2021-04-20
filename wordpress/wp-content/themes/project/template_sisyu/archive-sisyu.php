<?php
/**
 * template  : 紫舟さんサイト
 */
?>
</head>
<?php
	/* 全商品 */
	$current_cat = get_queried_object();
	$cat_name = $current_cat->name;
	$cat_slug = $current_cat->slug;
?>

<body class="sisyu <?php echo  $cat_slug; ?>">
<?php do_action( 'habakiri_before_container' ); ?>
<?php do_action( 'habakiri_before_header_content' ); ?>
    <?php
    $header_classes     = Habakiri::get_header_classses();
    $site_branding_size = Habakiri::get_site_branding_size();
    $gnav_size          = Habakiri::get_gnav_size();
    ?>

      <?php do_action( 'habakiri_before_contents_content' ); ?>

<?php if(is_category('product')) : ?>
	<div class="wrap product_page">
		<main class="main_contents contents">
			<h1 class="title" id="<?php echo  $cat_slug; ?>"><?php echo  $cat_name; ?></h1>

			<ul class="product_title_link">
				<?php
					$this_cat_children = get_term_children( $cat, 'category' );
					if($this_cat_children):
					foreach($this_cat_children as $children):
					$children_obj = get_category( $children );
					$cat_slug = $children_obj->slug;
					$name = $children_obj->cat_name;
				?>
					<li><a href="#<?php echo $cat_slug;?>"><?php echo $name;?></a></li>
				<?php endforeach;	?>
				<?php endif; ?>
			</ul>

			<?php
				//$catに現在のカテゴリのIDが格納されている
				$this_cat_children = get_term_children( $cat, 'category' );//子カテゴリを取得する
				//var_dump($this_cat_children);
				if($this_cat_children):
				//子カテゴリがある＝おそらく親カテゴリ の場合の処理
				foreach($this_cat_children as $children)://子カテゴリのループ開始
				$children_obj = get_category( $children );//子カテゴリの情報を取得
				//var_dump($children_obj);
				$cat_slug = $children_obj->slug;
				$name = $children_obj->cat_name;//カテゴリ名を取得
				$description = $children_obj->description;//カテゴリ名を取得
				$category_link = get_category_link( $children );//カテゴリへのリンクを取得
				//var_dump($category_link);
			?>
				<h2 class="title_sec" id="<?php echo $cat_slug;?>">
				<a href="<?php echo $category_link;?>">	<?php echo $name;?> </a>
				</h2>
				<p><?php echo $description;?></p>
				<ul class="product_all_list">
					<?php
						$args = array(
							'posts_per_page' => -1,//記事を表示する件数　全件の場合-1
							'category' => $children
						);
						$myposts = get_posts( $args );//子カテゴリの記事を格納
						foreach ( $myposts as $post ) : setup_postdata( $post );//記事のループ開始 ?>
							<li <?php if( get_field('sales_status') ): ?>class="soldout"<?php endif; ?>>
								<a href="<?php the_permalink(); ?>" class="product_thumbnail">
									<figure><?php the_post_thumbnail('thumbnail'); ?></figure>
									<b><?php the_title(); ?></b>
								</a>
								<?php the_excerpt(); ?>
							</li>
							<?php //記事のループ終了 ?>
					<?php endforeach; wp_reset_postdata();?>
				</ul>
			<?php endforeach;	?>
			<?php endif; ?>
		</main>


<?php elseif ( is_category( array('canvas','charity','screen','engraving','makie','limited','frame') ) ) : ?>
	<div class="wrap product_page">
		<main class="main_contents">
			<?php
				$current_cat = get_queried_object();
				$cat_name = $current_cat->name;
				$description = $current_cat->category_description;
				$cat_slug = $current_cat->slug;
			?>
			<h1 class="title" id="<?php echo  $cat_slug; ?>"><?php echo  $cat_name; ?></h1>
			<p><?php echo $description;?></p>
			
			<?php
				//$catに現在のカテゴリのIDが格納されている
				$this_cat_children = get_term_children( $cat, 'category' );//子カテゴリを取得する
				//var_dump($this_cat_children);
				if($this_cat_children):
				//子カテゴリがある＝おそらく親カテゴリ の場合の処理
				foreach($this_cat_children as $children)://子カテゴリのループ開始
				$children_obj = get_category( $children );//子カテゴリの情報を取得
				//var_dump($children_obj);
				$name = $children_obj->cat_name;//カテゴリ名を取得
				$description = $children_obj->description;//カテゴリ名を取得
				$category_link = get_category_link( $children );//カテゴリへのリンクを取得
				//var_dump($category_link);
			?>
			<?php
				endforeach;//子カテゴリのループ終了
				else://子カテゴリがない＝子カテゴリか、もしくは子カテゴリを「持たない」親カテゴリ
			//記事があるかどうか
			if ( have_posts() ) :
				echo '<ul class="product_all_list">';
				//ここからメインループ
				while ( have_posts() ) :
				the_post();
				//記事を表示するコードなどなど
			?>
				<li <?php if( get_field('sales_status') ): ?>class="soldout"<?php endif; ?>>
					<a href="<?php the_permalink(); ?>" class="product_thumbnail">
						<figure><?php the_post_thumbnail('thumbnail'); ?></figure>
						<b><?php the_title(); ?></b>
					</a>
					<?php the_excerpt(); ?>
				</li>
			<?php
				endwhile;
					echo '</ul>';
				else :
				//記事がないときの処理
				endif;
				endif;
			?>
		</main>

<?php elseif (is_category('column')): ?>
	<div class="wrap column_page">
		<main class="main_contents">
			<?php
				// 書のすすめ
				$current_cat = get_queried_object();
				$cat_name = $current_cat->name;
				$description = $current_cat->category_description;
				$cat_slug = $current_cat->slug;
			?>
			<h1 class="title" id="<?php echo  $cat_slug; ?>"><?php echo  $cat_name; ?></h1>
			<p><?php echo $description;?></p>
			<h2 class="title_sec">書の道具</h2>

			<?php
				//$catに現在のカテゴリのIDが格納されている
				$this_cat_children = get_term_children( $cat, 'category' );//子カテゴリを取得する
				//var_dump($this_cat_children);
				if($this_cat_children):
				//子カテゴリがある＝おそらく親カテゴリ の場合の処理
				foreach($this_cat_children as $children)://子カテゴリのループ開始
				$children_obj = get_category( $children );//子カテゴリの情報を取得
				//var_dump($children_obj);
				$name = $children_obj->cat_name;//カテゴリ名を取得
				$description = $children_obj->description;//カテゴリ名を取得
				$category_link = get_category_link( $children );//カテゴリへのリンクを取得
				//var_dump($category_link);
			?>
			<?php
				endforeach;//子カテゴリのループ終了
				else://子カテゴリがない＝子カテゴリか、もしくは子カテゴリを「持たない」親カテゴリ
			//記事があるかどうか
			if ( have_posts() ) :
				echo '<ul class="column_all_list">';
				//ここからメインループ
				while ( have_posts() ) :
				the_post();
				//記事を表示するコードなどなど
			?>
				<li>
					<a href="<?php the_permalink(); ?>" class="column_thumbnail">
						<figure><?php the_post_thumbnail('thumbnail'); ?></figure>
						<b><?php the_title(); ?></b>
					</a>
				</li>
			<?php
				endwhile;
					echo '</ul>';
				else :
				//記事がないときの処理
				endif;
				endif;
			?>
		</main>

<?php elseif (is_category('news')): ?>
	<div class="wrap news_page">
		<main class="main_contents">
		<?php
				// ニュース
				$current_cat = get_queried_object();
				$cat_name = $current_cat->name;
				$description = $current_cat->category_description;
				$cat_slug = $current_cat->slug;
			?>
			<h1 class="title" id="<?php echo  $cat_slug; ?>"><?php echo  $cat_name; ?></h1>
			<p><?php echo $description;?></p>
			<?php
				$this_cat_children = get_term_children( $cat, 'category' );//子カテゴリを取得する
				if($this_cat_children):
				//子カテゴリがある＝おそらく親カテゴリ の場合の処理
				foreach($this_cat_children as $children)://子カテゴリのループ開始
				$children_obj = get_category( $children );//子カテゴリの情報を取得
				$name = $children_obj->cat_name;//カテゴリ名を取得
				$description = $children_obj->description;//カテゴリ名を取得
				$date = $children_obj->the_date;//カテゴリ名を取得
				$category_link = get_category_link( $children );//カテゴリへのリンクを取得
			?>
			<?php
				endforeach;//子カテゴリのループ終了
				else://子カテゴリがない＝子カテゴリか、もしくは子カテゴリを「持たない」親カテゴリ
			//記事があるかどうか
			if ( have_posts() ) :
				echo '<ul class="news_all_list">';
				//ここからメインループ
				while ( have_posts() ) :
				the_post();
				//記事を表示するコードなどなど
			?>
				<li>
					<a href="<?php the_permalink(); ?>" >
						<span><?php the_time('Y/m/d') ?></span>
						<?php the_title(); ?>
					</a>
				</li>
			<?php
				endwhile;
					echo '</ul>';
				else :
				//記事がないときの処理
				endif;
				endif;
			?>
		</main>
	
<?php elseif (is_category('sisyu')): ?>
	<div class="wrap top_page">
		<div class="main_mv">
			<div class="main_cp_area">
				<h1>
					世界中でたった一つの作品が<br />ご購入いただけます
				</h1>
				<p class="btn_area">
					<a href="/sisyu/product/" class="btn2">作品</a>
					<a href="/sisyu/about/" class="btn2">紫舟について</a>
				</p>
			</div>
			<video preload="auto" autoplay poster="<?php echo get_stylesheet_directory_uri(); ?>/original/img/sisyu/heroImg.jpg">
				<source src="<?php echo get_stylesheet_directory_uri(); ?>/original/movies/hero.mp4" type="video/mp4">
			</video>
		</div>
		
				<?php
					$cat_id = get_category_by_slug("news");
					$cat_id = $cat_id->cat_ID;
					$thisCat = get_category($cat_id);
					
					if ($thisCat->count != 0 ) { //上記で指定したカテゴリIDの投稿が 0 以外だったときの処理
						echo <<<EOD
						<main class="main_contents"><div class="top_news">
							<h2 class="title">News &amp; Topic</h2>
								<ul>
EOD;

						$newslist = get_posts( array(
							'cat' => $cat_id
						));
						
				
						foreach( $newslist as $post ):
						setup_postdata( $post );

						$cat = get_the_category();
						$catName = $cat[0]->cat_name;
						$catSlug = $cat[0]->category_nicename;
					?>
							<li>
								<a href="<?php the_permalink() ?>"><span><?php the_time('Y/m/d') ?></span><?php the_title(); ?></a>
							</li>
					<?php
					endforeach;
					wp_reset_postdata();
					echo <<<EOD
                    </ul>
                </div></main>
EOD;
				} elseif ( $thisCat->count == 0 ) { // カテゴリ内の投稿が 0 だったら何も表示しない ?>
				<?php } ?>

<?php else : ?>
<?php endif; ?>

<?php if (!is_category('sisyu')): ?>
	<ul class="breadcrumb_list">
		<?php mytheme_breadcrumb(); ?>
	</ul>
<?php endif; ?>

<div class="navigation">
	<?php get_footer(); ?>
	<?php get_sidebar(); ?>
</div>
