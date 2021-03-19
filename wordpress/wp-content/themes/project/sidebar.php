<?php
/**
 * Version    : 1.0.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : 
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>



<?php if(is_404()): ?>

<?php else : ?>

	<?php if ( in_category('sisyu') || post_is_in_descendant_category( get_term_by( 'slug', 'sisyu', 'category' ) )): ?>
		<?php get_template_part( 'template_sisyu/sidebar-sisyu'); ?>

	<?php else : ?>
		<?php
		do_action( 'habakiri_before_sidebar_widget_area' );
		if ( is_active_sidebar( 'sidebar' ) ) {
			echo '<aside id="sub"><div class="sidebar">';
			dynamic_sidebar( 'sidebar' );
			echo '</div></aside>';
		}
		do_action( 'habakiri_after_sidebar_widget_area' );
		?>
		
	<?php endif; ?>

<?php endif; ?>