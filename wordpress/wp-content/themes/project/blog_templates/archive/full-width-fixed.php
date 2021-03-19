<?php
/**
 * Version    : 1.3.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<div class="container">
	<main id="main" role="main">

		<!-- ?php get_template_part( 'modules/breadcrumbs' ); ? -->
		<?php
		$name = ( is_search() ) ? 'search' : 'archive';
		if ( have_posts() ) {
			get_template_part( 'content', $name );
		} else {
			get_template_part( 'content', 'none' );
		}
		?>

	<!-- end #main --></main>

	<?php get_sidebar(); ?>
<!-- end .container --></div>