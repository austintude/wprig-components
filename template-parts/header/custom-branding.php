<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-branding">
	<div id="mobileTopBar">
	&nbsp;
</div>
<?php the_custom_logo(); ?>
<div id="carouselHero" amp-fx="parallax" data-parallax-factor="1.2">

	<div>

		<?php
		$featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
		?>

	<!-- .post-thumbnail -->

	</div>
</div> <!-- end #carouselHero -->

		<p class="site-title">
			&nbsp;
			<!-- <?php the_title(); ?> -->
		</p>
</div><!-- .site-branding -->
