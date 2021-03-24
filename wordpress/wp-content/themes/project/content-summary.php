<?php
/**
 * Version    : 1.0.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : August 28, 2015
 * Modified   :
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<?php if ( in_category('award') || post_is_in_descendant_category( get_term_by( 'slug', 'award', 'category' ) )): ?>
	<?php // アワード ?>
	<li>
		<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
		<div class="summary">
			<time datetime="<?php the_time('Y-m-d');?>" itemprop="datepublished"><?php the_time('Y/m/d');?></time>
			<?php if ( in_category( array('annual_qa','annual_user') ) ) : ?>	<?php endif; ?>
			<?php // 抜粋を文字数制限をかけて表示
				$excerpt_num = 96; // 制限をかけるバイト数を指定 全角＝2バイト 半角＝1バイト
				$post_excerpt = strip_tags(get_the_excerpt()); // 抜粋を取得
				if(mb_strlen($post_excerpt)>$excerpt_num ) { // 抜粋が指定したバイト数より多い時に TRUE
					$content = mb_substr($post_excerpt,0,$excerpt_num); // 同じバイト数を指定
					echo str_replace(array("\r", "\n"), '', $content).･･･; // 改行の削除、末尾に「...」を追加
				} else {
					echo str_replace(array("\r", "\n"), '', $post_excerpt); // 改行の削除
				}
			?>
		</div>
	</li>

<?php else : ?>

	<?php //上記以外の ?>
	<article <?php post_class( array( 'article', 'article--summary' ) ); ?>>

		<?php if ( Habakiri::get( 'is_displaying_thumbnail' ) === 'false' ) : ?>

			<div class="entry">
				<?php Habakiri::the_title(); ?>
				<div class="entry__summary">
					<?php the_excerpt(); ?>
				<!-- end .entry__summary --></div>
				<?php get_template_part( 'modules/entry-meta' ); ?>
			<!-- end .entry --></div>

		<?php else : ?>

			<div class="entry--has_media entry">
				<div class="entry--has_media__inner">
					<div class="entry--has_media__media">
						<?php Habakiri::the_post_thumbnail(); ?>
					<!-- end .entry--has_media__media --></div>
					<div class="entry--has_media__body">
						<?php Habakiri::the_title(); ?>
						<div class="entry__summary">
							<?php the_excerpt(); ?>
						<!-- end .entry__summary --></div>
						<?php get_template_part( 'modules/entry-meta' ); ?>
					<!-- end .entry--has_media__body --></div>
				<!-- end .entry--has_media__inner --></div>
			<!-- end .entry--has_media --></div>

		<?php endif; ?>

	</article>
<?php endif; ?>

