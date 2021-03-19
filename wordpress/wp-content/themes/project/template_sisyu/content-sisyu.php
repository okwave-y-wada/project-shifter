<?php
/**
 * template  : 紫舟さんサイト
 */
?>

<article class="post_contents">

  <?php do_action( 'habakiri_before_entry_content' ); ?>
  

  <?php if ( in_category( array('canvas','charity','screen','engraving','makie','limited','frame') ) ) : ?>
		<div class="product_detail">
			<div class="product_image <?php if( get_field('sales_status') ): ?>soldout<?php endif; ?>">
				<input type="checkbox" id="product_image_large" class="product_image_large" name="product_image_large">
				<label for="product_image_large" class="product_image_open_btn">
					<figure><img src="<?php the_field('product_image'); ?>"></figure>
				</label>
				<label for="product_image_large" class="product_image_close_btn">
					<div class="product_image_modal"><img src="<?php the_field('product_image'); ?>"></div>
				</label>
			</div>

			<div class="product_info_area">
				<div class="product_price">
					<?php if( get_field('sales_status') ): ?>
						<h1 class="title">SOLD OUT</h1>
					<?php else : ?>
						<?php Habakiri::the_title(); ?>
						<?php if( have_rows('price') ):  ?>
							<?php while( have_rows('price') ): the_row(); ?>
								<div>¥<?php the_sub_field('price_number'); ?><?php the_sub_field('contact_price'); ?></div>
							<?php endwhile; ?>
						<?php endif; ?>
					<?php endif; ?>
				</div>

				<div class="product_info_block">
					<div class="product_body_text"><?php the_content(); ?></div>
					<div class="product_summay">
						<ul>
							<li>
								<em>カテゴリ</em>
								<?php the_category( ); ?>
							</li>
							<?php $etc = get_field('production_year'); ?>
							<?php if(empty($etc)):?>
							<?php else:?>
								<li>
									<em>制作年</em>
									<?php the_field('production_year'); ?>年
								</li>
							<?php endif;?>

							<?php if( get_field('body_size') ):  ?>
								<?php while( have_rows('body_size') ): the_row(); ?>
									<li>
										<em>本体サイズ(縦×横)</em>
										<?php the_sub_field('vertical'); ?>×<?php the_sub_field('side'); ?>mm<?php the_sub_field('other'); ?><?php the_sub_field('other2'); ?>
									</li>
								<?php endwhile; ?>
							<?php endif; ?>

							<?php if( get_field('other_info') ):  ?>
								<?php while( have_rows('other_info') ): the_row(); ?>
									<?php $contents = get_sub_field('other_info_contents'); ?>
									<?php if(empty($contents)):?><?php else:?>
										<li>
											<em><?php the_sub_field('other_info_label'); ?></em>
											<?php the_sub_field('other_info_contents'); ?>
										</li>
									<?php endif; ?>
								<?php endwhile; ?>
							<?php endif; ?>

							<?php if( get_field('other_info2') ):  ?>
							<?php while( have_rows('other_info2') ): the_row(); ?>
							<?php $contents = get_sub_field('other_info_contents'); ?>
								<?php if(empty($contents)):?><?php else:?>
								<li>
									<em><?php the_sub_field('other_info_label'); ?></em>
									<?php the_sub_field('other_info_contents'); ?>
								</li>
								<?php endif; ?>
							<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	
	<?php elseif (in_category('column')): ?>
		<div class="column_body_text"><?php the_content(); ?></div>
		<?php Habakiri::the_title(); ?>
		
		<ul class="column_list">
			<li><?php previous_post_link('%link', '%title', TRUE, '1 and 2'); ?></li>
			<li><?php next_post_link('%link', '%title', TRUE, '1 and 2'); ?></li>
		</ul>
	
		<?php wp_reset_postdata(); ?>
		
	<?php else : ?>
	
		<div class="other">
		<?php Habakiri::the_title(); ?>
		<?php the_content(); ?>
		</div>

		
	<?php endif; ?>

	<?php do_action( 'habakiri_after_entry_content' ); ?>
	<?php get_template_part( 'modules/link-pages' ); ?>

</article>
