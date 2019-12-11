<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$hero_images	= get_field('hero_images');

?>

<div class="site-branding">
	<div id="mobileTopBar">
	&nbsp;
</div>
<?php the_custom_logo(); ?>
<div class="titleTagWrapper">
		<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
		<h2 class="tagline"><?php bloginfo( 'description' ); ?></h2>
</div>

</div><!-- .site-branding -->
