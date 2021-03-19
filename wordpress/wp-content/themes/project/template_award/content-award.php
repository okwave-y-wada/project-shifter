<?php
/**
 * template  : アワード
 */
?>

<article class="post_contents">
	<?php do_action( 'habakiri_before_entry_content' ); ?>

	<?php if ( in_category( array('annual_qa','annual_user') ) ) : ?>

		<?php if( get_field('body_html_check') ): ?>
			<?php // HTMLを入力していてた場合はこっち ?>
			<?php the_field('body_html'); ?>
		<?php else : ?>
			<?php while( have_rows('award_main') ): the_row(); ?>
				<section class="headline">
					<?php
						// 記事のカテゴリー情報を取得する
						$cat = get_the_category();
						// 取得した配列から必要な情報を変数に入れる
						$cat_name = $cat[0]->cat_name; // カテゴリー名
						$cat_description = $cat[0]->description; // カテゴリー名
						$cat_slug  = $cat[0]->category_nicename; // カテゴリースラッグ
					?>
					<hgroup>
						<h1><?php the_sub_field('year'); ?><?php the_field( '1st_url' ); ?><span><?php echo $cat_name; ?></span></h1>
						<h2 class="<?php echo $cat_slug ?>"><?php echo $cat_description; ?></h2>
					</hgroup>
					<p><?php the_sub_field('description'); ?></p>
				</section>
			<?php endwhile; ?>

			<?php if ( in_category( 'annual_qa' ) ) : ?>
				<?php // QAランキング ?>
				<section class="award_block award_1st">
					<h3><?php the_field('award_qa_title1'); ?></h3>
					<ul class="list_award list_rank">
						<?php while(have_rows('award_qa1')):the_row();  ?> <?php if( get_sub_field('q_id') ):  ?>
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award_qa2')):the_row();  ?> <?php if( get_sub_field('q_id') ):  ?>
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award_qa3')):the_row();  ?> <?php if( get_sub_field('q_id') ):  ?>
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award_qa4')):the_row();  ?> <?php if( get_sub_field('q_id') ):  ?>
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award_qa5')):the_row();  ?> <?php if( get_sub_field('q_id') ):  ?>
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award_qa6')):the_row();  ?> <?php if( get_sub_field('q_id') ):  ?>
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award_qa7')):the_row();  ?> <?php if( get_sub_field('q_id') ):  ?>
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award_qa8')):the_row();  ?> <?php if( get_sub_field('q_id') ):  ?>
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award_qa9')):the_row();  ?> <?php if( get_sub_field('q_id') ):  ?>
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award_qa10')):the_row();  ?> <?php if( get_sub_field('q_id') ):  ?>
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
					</ul>
				</section>
				<section class="award_block award_2nd ">
					<?php while(have_rows('award_qa_title2')):the_row();?>
						<h3><?php the_sub_field('title'); ?></h3>
						<p><?php the_sub_field('description'); ?></p>
					<?php endwhile; ?>
					<ul class="list_award list_pickup">
						<?php while(have_rows('award_keyword1')):the_row();  ?> <?php if( get_sub_field('title') ):  ?>	
							<li><a href="https://okwave.jp/search?word=<?php urlencode(the_sub_field('title')); ?>" target="_blank"><b><?php the_sub_field('title'); ?></b></a></li>
							<?php endif; ?><?php endwhile; ?>
						<?php while(have_rows('award_keyword2')):the_row();  ?> <?php if( get_sub_field('title') ):  ?>	
							<li><a href="https://okwave.jp/search?word=<?php urlencode(the_sub_field('title')); ?>" target="_blank"><b><?php the_sub_field('title'); ?></b></a></li>
							<?php endif; ?><?php endwhile; ?>
						<?php while(have_rows('award_keyword3')):the_row();  ?> <?php if( get_sub_field('title') ):  ?>	
							<li><a href="https://okwave.jp/search?word=<?php urlencode(the_sub_field('title')); ?>" target="_blank"><b><?php the_sub_field('title'); ?></b></a></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award_keyword4')):the_row();  ?> <?php if( get_sub_field('title') ):  ?>	
							<li><a href="https://okwave.jp/search?word=<?php urlencode(the_sub_field('title')); ?>" target="_blank"><b><?php the_sub_field('title'); ?></b></a></li>
							<?php endif; ?><?php endwhile; ?>
						<?php while(have_rows('award_keyword5')):the_row();  ?> <?php if( get_sub_field('title') ):  ?>	
							<li><a href="https://okwave.jp/search?word=<?php urlencode(the_sub_field('title')); ?>" target="_blank"><b><?php the_sub_field('title'); ?></b></a></li>
							<?php endif; ?><?php endwhile; ?>
						<?php while(have_rows('award_keyword6')):the_row();  ?> <?php if( get_sub_field('title') ):  ?>	
							<li><a href="https://okwave.jp/search?word=<?php urlencode(the_sub_field('title')); ?>" target="_blank"><b><?php the_sub_field('title'); ?></b></a></li>
							<?php endif; ?><?php endwhile; ?>
						<?php while(have_rows('award_keyword7')):the_row();  ?> <?php if( get_sub_field('title') ):  ?>	
							<li><a href="https://okwave.jp/search?word=<?php urlencode(the_sub_field('title')); ?>" target="_blank"><b><?php the_sub_field('title'); ?></b></a></li>
							<?php endif; ?><?php endwhile; ?>
						<?php while(have_rows('award_keyword8')):the_row();  ?> <?php if( get_sub_field('title') ):  ?>	
							<li><a href="https://okwave.jp/search?word=<?php urlencode(the_sub_field('title')); ?>" target="_blank"><b><?php the_sub_field('title'); ?></b></a></li>
							<?php endif; ?><?php endwhile; ?>
						<?php while(have_rows('award_keyword9')):the_row();  ?> <?php if( get_sub_field('title') ):  ?>	
							<li><a href="https://okwave.jp/search?word=<?php urlencode(the_sub_field('title')); ?>" target="_blank"><b><?php the_sub_field('title'); ?></b></a></li>
							<?php endif; ?><?php endwhile; ?>
						<?php while(have_rows('award_keyword10')):the_row();  ?> <?php if( get_sub_field('title') ):  ?>	
							<li><a href="https://okwave.jp/search?word=<?php urlencode(the_sub_field('title')); ?>" target="_blank"><b><?php the_sub_field('title'); ?></b></a></li>
							<?php endif; ?><?php endwhile; ?>
					</ul>
				</section>

			<?php else : ?>
				<?php // 年間貢献ユーザー ?>
				<section class="award_block award_1st">
					<?php while(have_rows('award1_info')):the_row();?>
						<h3><?php the_sub_field('label'); ?></h3>
						<p><?php the_sub_field('description'); ?></p>
						<h4><?php the_sub_field('present'); ?></h4>
					<?php endwhile; ?>
					<?php while(have_rows('award1_info')):the_row();?><h4><?php the_sub_field('present1'); ?></h4><?php endwhile; ?>
					<ul class="list_award list_user_rank">
						<?php while(have_rows('award1_user_1')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
										<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
										<b><?php the_sub_field('okwave_id'); ?></b>
									</a>
								</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_2')):the_row();  ?><?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_3')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
					</ul>
					
					<?php while(have_rows('award1_info')):the_row();?><h4><?php the_sub_field('present2'); ?></h4><?php endwhile; ?>
					<ul class="list_award list_user_rank list_user_rank_under">
						<?php while(have_rows('award1_user_4')):the_row();  ?><?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_5')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_6')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_7')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_8')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_9')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_10')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_11')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_12')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_13')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_14')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_15')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_16')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_17')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_18')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_19')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_20')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_21')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_22')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_23')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_24')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_25')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_26')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_27')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_28')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_29')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						<?php while(have_rows('award1_user_30')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<b><?php the_sub_field('okwave_id'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?>	<?php endwhile; ?>
						
					</ul>
				</section>

				<section class="award_block award_2nd">
					<?php while(have_rows('award2_info')):the_row();?>
						<h3><?php the_sub_field('label'); ?></h3>
						<p><?php the_sub_field('description'); ?></p>
					<?php endwhile; ?>
					<?php while(have_rows('award2_info')):the_row();?><h4><?php the_sub_field('present1'); ?></h4><?php endwhile; ?>
					<ul class="list_award list_user_rank">
						<?php while(have_rows('award2_user_1')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>	
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
											<b><?php the_sub_field('user_fullname'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award2_user_2')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>	
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
											<b><?php the_sub_field('user_fullname'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award2_user_3')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>	
							<li><dl>
									<dt><?php the_sub_field('rank'); ?></dt>
									<dd>
										<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
											<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
											<b><?php the_sub_field('user_fullname'); ?></b>
										</a>
									</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
					</ul>
					<?php while(have_rows('award2_info')):the_row();?><h4><?php the_sub_field('present2'); ?></h4><?php endwhile; ?>
					<ul class="list_award list_user_rank list_user_rank_under">
						<?php while(have_rows('award2_user_4')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>	
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('user_fullname'); ?></b>
								</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award2_user_5')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>	
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('user_fullname'); ?></b>
								</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award2_user_6')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>	
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('user_fullname'); ?></b>
								</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award2_user_7')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>	
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('user_fullname'); ?></b>
								</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award2_user_8')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>	
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('user_fullname'); ?></b>
								</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award2_user_9')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>	
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('user_fullname'); ?></b>
								</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award2_user_10')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>	
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('user_fullname'); ?></b>
								</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						
					</ul>
				</section>

				<section class="award_block award_3rd">
					<?php while(have_rows('award3_info')):the_row();?>
						<h3><?php the_sub_field('label'); ?></h3>
						<p><?php the_sub_field('description'); ?></p>
						<h4><?php the_sub_field('present'); ?></h4>
					<?php endwhile; ?>

					<?php while(have_rows('award3_info')):the_row();?><h4><?php the_sub_field('present1'); ?></h4><?php endwhile; ?>
					<ul class="list_award list_user_rank">
						<?php while(have_rows('award3_user_1')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
										<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
										<b><?php the_sub_field('okwave_id'); ?></b>
									</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award3_user_2')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
										<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
										<b><?php the_sub_field('okwave_id'); ?></b>
									</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award3_user_3')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
										<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
										<b><?php the_sub_field('okwave_id'); ?></b>
									</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
					</ul>

					<?php while(have_rows('award3_info')):the_row();?><h4><?php the_sub_field('present2'); ?></h4><?php endwhile; ?>
					<ul class="list_award list_user_rank list_user_rank_under">
						<?php while(have_rows('award3_user_4')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award3_user_5')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
							<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
								<b><?php the_sub_field('okwave_id'); ?></b>
							</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award3_user_6')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award3_user_7')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award3_user_8')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award3_user_9')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award3_user_10')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?> 
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						
					</ul>
				</section>

				<section class="award_block award_4th">
					<?php while(have_rows('award4_info')):the_row();?>
						<h3><?php the_sub_field('label'); ?></h3>
						<p><?php the_sub_field('description'); ?></p>
						<h4><?php the_sub_field('present'); ?></h4>
					<?php endwhile; ?>

					<?php while(have_rows('award4_info')):the_row();?><h4><?php the_sub_field('present1'); ?></h4><?php endwhile; ?>
					<ul class="list_award list_user_rank">
						<?php while(have_rows('award4_user_1')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award4_user_2')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award4_user_3')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
					</ul>

					<?php while(have_rows('award4_info')):the_row();?><h4><?php the_sub_field('present2'); ?></h4><?php endwhile; ?>
					<ul class="list_award list_user_rank list_user_rank_under">
						<?php while(have_rows('award4_user_4')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award4_user_5')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award4_user_6')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award4_user_7')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award4_user_8')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award4_user_9')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award4_user_10')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?> 
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						
					</ul>

				</section>

				<section class="award_block award_5th">
					<?php while(have_rows('award5_info')):the_row();?>
						<h3><?php the_sub_field('label'); ?></h3>
						<p><?php the_sub_field('description'); ?></p>
						<h4><?php the_sub_field('present'); ?></h4>
					<?php endwhile; ?>
					<?php while(have_rows('award5_info')):the_row();?><h4><?php the_sub_field('present1'); ?></h4><?php endwhile; ?>
					<ul class="list_award list_user_rank">
						<?php while(have_rows('award5_user_1')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award5_user_2')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award5_user_3')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
					</ul>
					<?php while(have_rows('award5_info')):the_row();?><h4><?php the_sub_field('present2'); ?></h4><?php endwhile; ?>
					<ul class="list_award list_user_rank list_user_rank_under">
						<?php while(have_rows('award5_user_4')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
										<b><?php the_sub_field('okwave_id'); ?></b>
									</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award5_user_5')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
										<b><?php the_sub_field('okwave_id'); ?></b>
									</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award5_user_6')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
										<b><?php the_sub_field('okwave_id'); ?></b>
									</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award5_user_7')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
										<b><?php the_sub_field('okwave_id'); ?></b>
									</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award5_user_8')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
										<b><?php the_sub_field('okwave_id'); ?></b>
									</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award5_user_9')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
										<b><?php the_sub_field('okwave_id'); ?></b>
									</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award5_user_10')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?> 
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
										<b><?php the_sub_field('okwave_id'); ?></b>
									</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						
					</ul>
				</section>

				<section class="award_block award_6th">
					<?php while(have_rows('award6_info')):the_row();?>
						<h3><?php the_sub_field('label'); ?></h3>
						<p><?php the_sub_field('description'); ?></p>
						<h4><?php the_sub_field('present'); ?></h4>
					<?php endwhile; ?>
					<?php while(have_rows('award6_info')):the_row();?><h4><?php the_sub_field('present1'); ?></h4><?php endwhile; ?>
					<ul class="list_award list_user_rank">
						<?php while(have_rows('award6_user_1')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
										<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
										<b><?php the_sub_field('okwave_id'); ?></b>
									</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award6_user_2')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
										<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
										<b><?php the_sub_field('okwave_id'); ?></b>
									</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award6_user_3')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
										<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
										<b><?php the_sub_field('okwave_id'); ?></b>
									</a>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
					</ul>
					<?php while(have_rows('award6_info')):the_row();?><h4><?php the_sub_field('present2'); ?></h4><?php endwhile; ?>
					<ul class="list_award list_user_rank list_user_rank_under">
						<?php while(have_rows('award6_user_4')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award6_user_5')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award6_user_6')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award6_user_7')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award6_user_8')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award6_user_9')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award6_user_10')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?> 
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<b><?php the_sub_field('okwave_id'); ?></b>
								</a>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						
					</ul>
				</section>

				<section class="award_block award_7th">
					<?php while(have_rows('award7_info')):the_row();?>
						<h3><?php the_sub_field('label'); ?></h3>
						<p><?php the_sub_field('description'); ?></p>
						<h4><?php the_sub_field('present'); ?></h4>
					<?php endwhile; ?>
					<?php while(have_rows('award7_info')):the_row();?><h4><?php the_sub_field('present1'); ?></h4><?php endwhile; ?>
					<ul class="list_award list_user_qa_rank ">
						<?php while(have_rows('award7_user_1')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
								</a>
								<div>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank"><b><?php the_sub_field('okwave_id'); ?></b></a>
									<p><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></p>	
								</div>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award7_user_2')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
								</a>
								<div>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank"><b><?php the_sub_field('okwave_id'); ?></b></a>
									<p><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></p>	
								</div>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award7_user_3')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
							<dt><?php the_sub_field('rank'); ?></dt>
							<dd>
								<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank">
									<figure><img src="<?php the_sub_field('image'); ?>" alt=""></figure>
								</a>
								<div>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank"><b><?php the_sub_field('okwave_id'); ?></b></a>
									<p><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></p>	
								</div>
							</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
					</ul>
					<?php while(have_rows('award7_info')):the_row();?><h4><?php the_sub_field('present2'); ?></h4><?php endwhile; ?>
					<ul class="list_award list_user_qa_rank list_user_qa_rank_under">
						<?php while(have_rows('award7_user_4')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank"><b><?php the_sub_field('okwave_id'); ?></b></a>
									<p><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></p>	
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award7_user_5')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank"><b><?php the_sub_field('okwave_id'); ?></b></a>
									<p><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></p>	
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award7_user_6')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank"><b><?php the_sub_field('okwave_id'); ?></b></a>
									<p><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></p>	
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award7_user_7')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank"><b><?php the_sub_field('okwave_id'); ?></b></a>
									<p><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></p>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award7_user_8')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank"><b><?php the_sub_field('okwave_id'); ?></b></a>
									<p><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></p>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award7_user_9')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?>  
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank"><b><?php the_sub_field('okwave_id'); ?></b></a>
									<p><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></p>
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
						<?php while(have_rows('award7_user_10')):the_row();  ?> <?php if( get_sub_field('user_id') ):  ?> 
							<li><dl>
								<dt><?php the_sub_field('rank'); ?></dt>
								<dd>
									<a href="https://okwave.jp/profile/u<?php the_sub_field('user_id'); ?>.html" target="_blank"><b><?php the_sub_field('okwave_id'); ?></b></a>
									<p><a href="https://okwave.jp/qa/q<?php the_sub_field('q_id'); ?>.html" target="_blank"><?php the_sub_field('title'); ?></a></p>	
								</dd>
							</dl></li>
						<?php endif; ?> <?php endwhile; ?>
					</ul>
				</section>
			<?php endif; ?>
		<?php endif; ?>
	
	<?php else : ?>
		<?php //月間ランキング ?>
		<?php if( strtotime(get_the_date('Y-m-d')) > strtotime('2020-02-17') ):?>
			<h1 class="title"><?php the_title(); ?></h1>
			<time datetime="<?php the_time('Y-m-d');?>" itemprop="datepublished"><?php the_time('Y/m/d');?></time>

			<?php if( strtotime(get_the_date('Y-m-d')) > strtotime('2020-10-17') ):?>
				<?php // 2020年10月1７日以降 ?>
				<div class="ranking">
					<div class="rank_arigato">
						<h2>マスターランキング</h2>
						<p>ベストアンサーを多く獲得したユーザー様の中から受賞者を選出し表彰しています。<br>また、あと少しでランクインするユーザー様にもアマゾンギフト券を贈呈しています。</p>
						<div class="rank_sn">
							<h3>1位<span>15回以上獲得者から選出（Amazonギフト券5,000円）</span></h3>
							<p><a href="<?php the_field( '1st_profile_url' ); ?>" target="_blank"><?php the_field( '1st_rank' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( '1st_rank_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>2位<span>10～14回獲得者から選出（Amazonギフト券3,000円）</span></h3>
							<p><a href="<?php the_field( '2nd_profile_url' ); ?>" target="_blank"><?php the_field( '2nd_rank' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( '2nd_rank_comment' ); ?></p>
						</div>
						<div class="rank_pl">
							<h3>3位<span>5～9回獲得者から選出（Amazonギフト券1,000円）</span></h3>
							<p><a href="<?php the_field( '3rd_profile_url1' ); ?>" target="_blank"><?php the_field( '3rd_rank1' ); ?></a><span>さん</span></p>
							<p><a href="<?php the_field( '3rd_profile_url2' ); ?>" target="_blank"><?php the_field( '3rd_rank2' ); ?></a><span>さん</span></p>
							<p><a href="<?php the_field( '3rd_profile_url3' ); ?>" target="_blank"><?php the_field( '3rd_rank3' ); ?></a><span>さん</span></p>
							<p><a href="<?php the_field( '3rd_profile_url4' ); ?>" target="_blank"><?php the_field( '3rd_rank4' ); ?></a><span>さん</span></p>
							<p><a href="<?php the_field( '3rd_profile_url5' ); ?>" target="_blank"><?php the_field( '3rd_rank5' ); ?></a><span>さん</span></p>
						</div>
						<div class="rank_pl">
							<h3>ランクインまであと少し！<span>（Amazonギフト券500円）</span></h3>
							<p><a href="<?php the_field( 'up_profile_url1' ); ?>" target="_blank"><?php the_field( 'up_rank1' ); ?></a><span>さん</span></p>
							<p><a href="<?php the_field( 'up_profile_url2' ); ?>" target="_blank"><?php the_field( 'up_rank2' ); ?></a><span>さん</span></p>
							<p><a href="<?php the_field( 'up_profile_url3' ); ?>" target="_blank"><?php the_field( 'up_rank3' ); ?></a><span>さん</span></p>
							<p><a href="<?php the_field( 'up_profile_url4' ); ?>" target="_blank"><?php the_field( 'up_rank4' ); ?></a><span>さん</span></p>
						</div>
						</div>
						<div class="rank_activity">
						<h2>OKWAVEが選んだ分野で、活躍された方</h2>
						<p>「みんなに評価されているで賞」「期待の新人賞」「心からサンキュー賞」<br>それぞれに、Amazonギフト券1,000円を贈呈いたします。</p>
						<div class="rank_sn">
							<h3>みんなに評価されているで賞<span>月間で回答が最も評価されたユーザー</span></h3>
							<p><a href="<?php the_field( 'app_profile_url1' ); ?>" target="_blank"><?php the_field( 'app_rank1' ); ?></a><span>さん</span></p>
							<p class="rank_comment mb"><?php the_field( 'app_rank1_comment' ); ?></p>
							<p><a href="<?php the_field( 'app_profile_url2' ); ?>" target="_blank"><?php the_field( 'app_rank2' ); ?></a><span>さん</span></p>
							<p class="rank_comment mb"><?php the_field( 'app_rank2_comment' ); ?></p>
							<p><a href="<?php the_field( 'app_profile_url3' ); ?>" target="_blank"><?php the_field( 'app_rank3' ); ?></a><span>さん</span></p>
							<p class="rank_comment mb"><?php the_field( 'app_rank3_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>期待の新人賞<span>表彰月に登録した、新規ユーザーで一番活躍した方</span></h3>
							<?php if( get_field('roo_rank') ): ?>
								<p><a href="<?php the_field( 'roo_rank_url' ); ?>" target="_blank"><?php the_field( 'roo_rank' ); ?></a><span>さん</span></p>
								<p class="rank_comment"><?php the_field( 'roo_rank_comment' ); ?></p>
							<?php else : ?>
								<p class="rank_comment"><?php the_field( 'roo_rank_comment' ); ?></p>
							<?php endif; ?>
						</div>
						<div class="rank_sn">
							<h3>心からサンキュー賞<span>月間で一番多くのお礼を生み出した方</span></h3>
							<p><a href="<?php the_field( 'tha_profile_url' ); ?>" target="_blank"><?php the_field( 'tha_rank' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'tha_rank_comment' ); ?></p>
						</div>
					</div>
					<div class="rank_category">
						<h2>カテゴリーマスター</h2>
						<p>月間で大カテゴリーごとに活躍した方から選出して表彰しています。<br>それぞれに、Amazonギフト券1,000円を贈呈いたします。</p>
						<div class="rank_sn">
							<h3>人間関係・人生相談</h3>
							<p><a href="<?php the_field( 'cat_profile_url1' ); ?>" target="_blank"><?php the_field( 'cat_rank1' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat_rank1_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>生活・暮らし</h3>
							<p><a href="<?php the_field( 'cat_profile_url2' ); ?>" target="_blank"><?php the_field( 'cat_rank2' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat_rank2_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>家電・電化製品</h3>
							<p><a href="<?php the_field( 'cat_profile_url3' ); ?>" target="_blank"><?php the_field( 'cat_rank3' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat_rank3_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>パソコン・スマートフォン</h3>
							<p><a href="<?php the_field( 'cat_profile_url4' ); ?>" target="_blank"><?php the_field( 'cat_rank4' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat_rank4_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>インターネット・Webサービス</h3>
							<p><a href="<?php the_field( 'cat_profile_url5' ); ?>" target="_blank"><?php the_field( 'cat_rank5' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat_rank5_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>趣味・娯楽・エンターテイメント</h3>
							<p><a href="<?php the_field( 'cat_profile_url6' ); ?>" target="_blank"><?php the_field( 'cat_rank6' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat_rank6_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>美容・ファッション</h3>
							<p><a href="<?php the_field( 'cat_profile_url7' ); ?>" target="_blank"><?php the_field( 'cat_rank7' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat_rank7_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>健康・病気・怪我</h3>
							<p><a href="<?php the_field( 'cat_profile_url8' ); ?>" target="_blank"><?php the_field( 'cat_rank8' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat_rank8_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>ビジネス・キャリア</h3>
							<p><a href="<?php the_field( 'cat_profile_url9' ); ?>" target="_blank"><?php the_field( 'cat_rank9' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat_rank9_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>社会</h3>
							<p><a href="<?php the_field( 'cat_profile_url10' ); ?>" target="_blank"><?php the_field( 'cat_rank10' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat_rank10_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>マネー</h3>
							<p><a href="<?php the_field( 'cat_profile_url11' ); ?>" target="_blank"><?php the_field( 'cat_rank11' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat_rank11_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>学問・教育</h3>
							<p><a href="<?php the_field( 'cat_profile_url12' ); ?>" target="_blank"><?php the_field( 'cat_rank12' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat_rank12_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>旅行・レジャー</h3>
							<p><a href="<?php the_field( 'cat_profile_url13' ); ?>" target="_blank"><?php the_field( 'cat_rank13' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat_rank13_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>コンピューター</h3>
							<p><a href="<?php the_field( 'cat_profile_url14' ); ?>" target="_blank"><?php the_field( 'cat_rank14' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat_rank14_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>製造業・ものづくり</h3>
							<p><a href="<?php the_field( 'cat_profile_url15' ); ?>" target="_blank"><?php the_field( 'cat_rank15' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat_rank15_comment' ); ?></p>
						</div>
					</div>
					<div class="rank_professional">
						<h2>OKWAVEで活躍されている専門家</h2>
						<p>Q&Aコミュニティで活躍されている個人・企業の専門家の方をご紹介いたします。皆さまぜひご相談ください。<br>受賞者には、それぞれにAmazonギフト券を贈呈いたします。</p>
						<div class="rank_sn">
							<h3>貢献専門家賞</h3>
							<p>1位<span class="pro_job"><?php the_field( 'pro_rank1_job' ); ?> </span><a href="<?php the_field( 'pro_profile_url1' ); ?>" target="_blank"><?php the_field( 'pro_rank1' ); ?></a><span><?php the_field( 'pro_rank1_honor' ); ?></span></p>
							<p>2位<span class="pro_job"><?php the_field( 'pro_rank2_job' ); ?> </span><a href="<?php the_field( 'pro_profile_url2' ); ?>" target="_blank"><?php the_field( 'pro_rank2' ); ?></a><span><?php the_field( 'pro_rank2_honor' ); ?></span></p>
							<p>3位<span class="pro_job"><?php the_field( 'pro_rank3_job' ); ?> </span><a href="<?php the_field( 'pro_profile_url3' ); ?>" target="_blank"><?php the_field( 'pro_rank3' ); ?></a><span><?php the_field( 'pro_rank3_honor' ); ?></span></p>
							<p>4位<span class="pro_job"><?php the_field( 'pro_rank4_job' ); ?> </span><a href="<?php the_field( 'pro_profile_url4' ); ?>" target="_blank"><?php the_field( 'pro_rank4' ); ?></a><span><?php the_field( 'pro_rank4_honor' ); ?></span></p>
							<p>5位<span class="pro_job"><?php the_field( 'pro_rank5_job' ); ?> </span><a href="<?php the_field( 'pro_profile_url5' ); ?>" target="_blank"><?php the_field( 'pro_rank5' ); ?></a><span><?php the_field( 'pro_rank5_honor' ); ?></span></p>
						</div>
					</div>
					<div class="rank_notice">
						<p>毎月表彰している「月間貢献ユーザー」は、対象とする月度の翌月に表彰を行っています。（例：1月の活動履歴をもとに2月に表彰）<br>※発表や記念品のご案内については、FAQをご確認ください。</p>
					</div>
				</div>

			<?php else:?>
				<?php // 2020年10月16日まで ?>
				<div class="ranking">
					<?php // ありがとうポイントランキング ?>
					<div class="rank_arigato">
						<h2>ありがとうポイントランキング</h2>
						<p>ベストアンサー１つ獲得で20pt付与される「ありがとうポイント」の合計が一定数となったユーザー様の中から受賞者を選出し表彰しています。<br>また、あと少しでランクインするユーザー様にもアマゾンギフト券を贈呈しています。</p>
						<div class="rank_sn">
							<h3>1位<span>300pt以上 獲得者から選出（Amazonギフト券5,000円 + 記念品）</span></h3>
							<p><a href="<?php the_field( '1st_url' ); ?>" target="_blank"><?php the_field( '1st' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( '1st_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>2位<span>200pt~280pt 獲得者から選出（Amazonギフト券3,000円 + 記念品）</span></h3>
							<p><a href="<?php the_field( '2nd_url' ); ?>" target="_blank"><?php the_field( '2nd' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( '2nd_comment' ); ?></p>
						</div>
						<div class="rank_pl">
							<h3>3位<span>100pt~180pt 獲得者から選出（Amazonギフト券1,000円）</span></h3>
							<p><a href="<?php the_field( '3rd-1_url' ); ?>" target="_blank"><?php the_field( '3rd-1' ); ?></a><span>さん</span></p>
							<p><a href="<?php the_field( '3rd-2_url' ); ?>" target="_blank"><?php the_field( '3rd-2' ); ?></a><span>さん</span></p>
							<p><a href="<?php the_field( '3rd-3_url' ); ?>" target="_blank"><?php the_field( '3rd-3' ); ?></a><span>さん</span></p>
							<p><a href="<?php the_field( '3rd-4_url' ); ?>" target="_blank"><?php the_field( '3rd-4' ); ?></a><span>さん</span></p>
							<p><a href="<?php the_field( '3rd-5_url' ); ?>" target="_blank"><?php the_field( '3rd-5' ); ?></a><span>さん</span></p>
						</div>
						<div class="rank_pl">
							<h3>ランクインまであと少し！<span>（Amazonギフト券500円）</span></h3>
							<p><a href="<?php the_field( 'up-1_url' ); ?>" target="_blank"><?php the_field( 'up-1' ); ?></a><span>さん</span></p>
							<p><a href="<?php the_field( 'up-2_url' ); ?>" target="_blank"><?php the_field( 'up-2' ); ?></a><span>さん</span></p>
							<p><a href="<?php the_field( 'up-3_url' ); ?>" target="_blank"><?php the_field( 'up-3' ); ?></a><span>さん</span></p>
							<p><a href="<?php the_field( 'up-4_url' ); ?>" target="_blank"><?php the_field( 'up-4' ); ?></a><span>さん</span></p>
						</div>
					</div>
					<div class="rank_activity">
						<h2>OKWAVEが選んだ分野で、活躍された方の表彰</h2>
						<p>「みんなに評価されているで賞」「期待の新人賞」「心からサンキュー賞」<br>それぞれに、Amazonギフト券1,000円 を贈呈いたします。</p>
						<div class="rank_sn">
							<h3>みんなに評価されているで賞<span>月間で、回答が最も評価されたユーザーを表彰</span></h3>
							<p><a href="<?php the_field( 'app-1_url' ); ?>" target="_blank"><?php the_field( 'app-1' ); ?></a><span>さん</span></p>
							<p class="rank_comment mb"><?php the_field( 'app-1_comment' ); ?></p>
							<p><a href="<?php the_field( 'app-2_url' ); ?>" target="_blank"><?php the_field( 'app-2' ); ?></a><span>さん</span></p>
							<p class="rank_comment mb"><?php the_field( 'app-2_comment' ); ?></p>
							<p><a href="<?php the_field( 'app-3_url' ); ?>" target="_blank"><?php the_field( 'app-3' ); ?></a><span>さん</span></p>
							<p class="rank_comment mb"><?php the_field( 'app-3_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>期待の新人賞<span>表彰月に登録した、新規ユーザーで一番活躍した方</span></h3>
							<p><a href="<?php the_field( 'roo_url' ); ?>" target="_blank"><?php the_field( 'roo' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'roo_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>心からサンキュー賞<span>月間で、一番多くのお礼を生み出した方</span></h3>
							<p><a href="<?php the_field( 'tha_url' ); ?>" target="_blank"><?php the_field( 'tha' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'tha_comment' ); ?></p>
						</div>
					</div>
					<div class="rank_category">
						<h2>大カテゴリーマスターの表彰</h2>
						<p>月間で各大カテゴリーごとに「ありがとうポイント」を一番多く獲得した方から選出して表彰しています。<br>それぞれに、Amazonギフト券1,000円 を贈呈いたします。</p>
						<div class="rank_sn">
							<h3>人間関係・人生相談</h3>
							<p><a href="<?php the_field( 'cat-1_url' ); ?>" target="_blank"><?php the_field( 'cat-1' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat-1_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>生活・暮らし</h3>
							<p><a href="<?php the_field( 'cat-2_url' ); ?>" target="_blank"><?php the_field( 'cat-2' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat-2_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>家電・電化製品</h3>
							<p><a href="<?php the_field( 'cat-3_url' ); ?>" target="_blank"><?php the_field( 'cat-3' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat-3_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>パソコン・スマートフォン</h3>
							<p><a href="<?php the_field( 'cat-4_url' ); ?>" target="_blank"><?php the_field( 'cat-4' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat-4_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>インターネット・Webサービス</h3>
							<p><a href="<?php the_field( 'cat-5_url' ); ?>" target="_blank"><?php the_field( 'cat-5' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat-5_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>趣味・娯楽・エンターテイメント</h3>
							<p><a href="<?php the_field( 'cat-6_url' ); ?>" target="_blank"><?php the_field( 'cat-6' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat-6_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>美容・ファッション</h3>
							<p><a href="<?php the_field( 'cat-7_url' ); ?>" target="_blank"><?php the_field( 'cat-7' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat-7_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>健康・病気・怪我</h3>
							<p><a href="<?php the_field( 'cat-8_url' ); ?>" target="_blank"><?php the_field( 'cat-8' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat-8_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>ビジネス・キャリア</h3>
							<p><a href="<?php the_field( 'cat-9_url' ); ?>" target="_blank"><?php the_field( 'cat-9' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat-9_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>社会</h3>
							<p><a href="<?php the_field( 'cat-10_url' ); ?>" target="_blank"><?php the_field( 'cat-10' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat-10_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>マネー</h3>
							<p><a href="<?php the_field( 'cat-11_url' ); ?>" target="_blank"><?php the_field( 'cat-11' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat-11_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>学問・教育</h3>
							<p><a href="<?php the_field( 'cat-12_url' ); ?>" target="_blank"><?php the_field( 'cat-12' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat-12_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>旅行・レジャー</h3>
							<p><a href="<?php the_field( 'cat-13_url' ); ?>" target="_blank"><?php the_field( 'cat-13' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat-13_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>コンピューター</h3>
							<p><a href="<?php the_field( 'cat-14_url' ); ?>" target="_blank"><?php the_field( 'cat-14' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat-14_comment' ); ?></p>
						</div>
						<div class="rank_sn">
							<h3>製造業・ものづくり</h3>
							<p><a href="<?php the_field( 'cat-15_url' ); ?>" target="_blank"><?php the_field( 'cat-15' ); ?></a><span>さん</span></p>
							<p class="rank_comment"><?php the_field( 'cat-15_comment' ); ?></p>
						</div>
					</div>

					<div class="rank_professional">
						<h2>OKWAVEで活躍されている、専門家の表彰</h2>
						<p class="">OKWAVE Professionalを通じてQ&Aコミュニティで活躍されている個人・企業の専門家の方をご紹介いたします。皆さまぜひご相談ください。<br>受賞者には、特別な表彰状をお送り致します。</p>
						<div class="rank_sn">
							<h3>貢献専門家賞</h3>
							<p><a href="<?php the_field( 'pro_url' ); ?>" target="_blank"><?php the_field( 'pro' ); ?></a><span><?php the_field( 'pro_honor' ); ?></span></p>
							<p class="rank_comment"><?php the_field( 'pro_comment' ); ?></p>
						</div>
					</div>
					<div class="rank_notice">
						<p>※毎月表彰している「月間貢献ユーザー」は、対象とする月度の翌月に表彰を行っています。（例：1月の活動履歴をもとに2月に表彰）<br>※発表や記念品のご案内については、FAQをご確認ください。</p>
					</div>
				</div>

			<?php endif;?>

			
			<?php if( strtotime(get_the_date('Y-m-d')) > strtotime('2020-10-01') ):?>
				<?php if( get_field('monthly_user_textbody') ): ?>
					<div class="monthly_user_body_text">
						<?php the_field('monthly_user_textbody'); ?>
					</div>
				<?php else : ?>
				<?php endif; ?>
				
			<?php else:?>
				<?php //2020-02-18以降 ?>
			<?php endif;?>

		<?php else:?>
			<?php //2020-02-18まで ?>
			<h1 class="title"><?php the_title(); ?></h1>
			<time datetime="<?php the_time('Y-m-d');?>" itemprop="datepublished"><?php the_time('Y/m/d');?></time>
			<?php the_content(); ?>
		<?php endif;?>


		<ul class="mt32 post_link">
			<?php
				$prev_poxt = get_previous_post(true);
			?>
			<?php if (!empty( $prev_poxt )): ?>
				<li class="prev"><a href="<?php echo get_permalink( $prev_poxt->ID ); ?>"><?php echo $prev_poxt->post_title; ?></a></li>
			<?php endif ?>
				
			<?php
				$next_post = get_next_post(true);
			?>
			<?php if (!empty( $next_post )): ?>
				<li class="next"><a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo $next_post->post_title; ?></a></li>
			<?php endif ?>
		</ul>

		
		<div class="center mt32">
			<?php
				$cat=get_category_by_slug('monthly_user');
			?>
			<a href="<?php echo get_category_link( $cat->cat_ID); ?>" class="btn solid">
				<?php echo get_cat_name($cat->cat_ID);?>アーカイブ
			</a>
		</div>
	<?php endif; ?>

	<?php do_action( 'habakiri_after_entry_content' ); ?>
	<?php get_template_part( 'modules/link-pages' ); ?>
</article>
