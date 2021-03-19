<?php
/**
 * template  : 紫舟さんサイト
 */
?>

<?php if ( is_archive() ) : ?>
  <?php // アーカイブページの時の処理 -- ?>
  <?php
	/* 全商品 */
	$current_cat = get_queried_object();
	$cat_name = urlencode($current_cat->name);
	$cat_slug = $current_cat->slug;
?>




  <div class="share">
		<ul>
			<!--Facebookボタン-->
			<li class="facebook">
				<a href="//www.facebook.com/share.php?src=bm&u=<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>&t=<?php echo  $cat_name; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" >
					<i class="icon ic-facebook"></i><span> facebook</span>
				</a>
			</li>

			<!--ツイートボタン-->
			<li class="tweet">
				<a href="//twitter.com/intent/tweet?url=<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>&text=<?php echo  $cat_name; ?>&tw_p=tweetbutton" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
					<i class="icon ic-twitter"></i><span> tweet</span>
				</a>
			</li>
		</ul>
	</div>
<?php endif; ?>

<?php if ( is_single() ) : ?>
	<?php // 個別ページの場合の処理 -- ?>
	<?php
		$cats = get_the_category();
		$cat = $cats[0];
		while($cat->parent) $cat = get_category($cat->parent);
		$url_encode=urlencode(get_permalink());
		$title_encode=urlencode(get_the_title()).'｜' .urlencode( $cat->cat_name);
	?>
	<div class="share">
		<ul>
			<!--Facebookボタン-->
			<li class="facebook">
				<a href="//www.facebook.com/share.php?src=bm&u=<?php echo $url_encode;?>&t=<?php echo $title_encode;?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" >
					<i class="icon ic-facebook"></i><span> facebook</span>
				</a>
			</li>

			<!--ツイートボタン-->
			<li class="tweet">
				<a href="//twitter.com/intent/tweet?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?>&tw_p=tweetbutton" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;">
					<i class="icon ic-twitter"></i><span> tweet</span>
				</a>
			</li>
		</ul>
	</div>
<?php endif; ?>