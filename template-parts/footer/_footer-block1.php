<?php
/**
 * Template part for displaying the footer block1
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$social_icons			= get_field('social_icons');
$followustitle			= get_field('followustitle');

?>

<div class="footerBlock1">
	<div class="footerLogo">
		<?php the_custom_logo(); ?>
	</div> <!-- end .footerLogo -->
	<div class="followUsTitle">
		<h4>
		<?php echo $followustitle; ?>
		</h4>
	</div><!-- end .followUsTitle -->
	<div class="followUs">
	<?php while (have_rows('social_icons')) : the_row();

// vars
$social_icon_name = get_sub_field('social_icon_name');
$social_icon_link = get_sub_field('social_icon_link');
$social_icon_image = get_sub_field('social_icon_image');

?>
	<div class="socialIcon" id="socialIcon-<?php echo $social_icon_name; ?>">
		<a href="<?php echo $social_icon_link; ?>">
			<img
			src="<?php echo $social_icon_image['url']; ?>"
			alt="<?php echo $social_icon_image['alt']; ?>"
			>
		</a>
	</div><!-- end .socialIcon -->
	<?php endwhile; ?>
	</div><!-- end .followUs -->
</div><!-- .footerBlock1 -->
