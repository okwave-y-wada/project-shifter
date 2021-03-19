<?php
/**
 * template  : 紫舟さんサイト
 */
?>
	<nav id="sub">
	<input type="checkbox" id="navi_menu" name="navi_menu">
		<div class="navi_button_box">
			<label for="navi_menu" class="navi_button">
				<span></span>
				<span></span>
				<span></span>
			</label>
		</div>
		<?php
			do_action( 'habakiri_before_sidebar_widget_area' );
			if ( is_active_sidebar( 'sidebar' ) ) {
				echo '<div class="sidebar">';
				dynamic_sidebar( 'sidebar' );
				echo '</div>';
			}
			do_action( 'habakiri_after_sidebar_widget_area' );
		?>
		<small><?php get_template_part( 'modules/copyright' ); ?></small>
	</nav>
