<?php
/**
 * Template part for contentMiddleBlock2
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$contentmiddleblock3title	= get_field('contentmiddleblock3title');
$contentmiddleblock3subtitle	= get_field('contentmiddleblock3subtitle');
$contentmiddleblock3content	= get_field('contentmiddleblock3content');
$block3_cta_text	= get_field('block3_cta_text');
$block3_cta_url	= get_field('block3_cta_url');

?>
	<div class="contentMiddleBlock2">
		<div class="contentMiddleBlockTitle">
			<?php echo $contentmiddleblock3title; ?>
		</div><!-- end .contentMiddleBlockTitle -->
		<div class="contentMiddleBlockSubTitle">
			<?php echo $contentmiddleblock3subtitle; ?>
		</div><!-- end .contentMiddleBlockSubTitle -->
		<div class="contentMiddleBlockcontent">
			<?php echo $contentmiddleblock3content; ?>
		<div class="ctaButton">
			<a href="<?php echo $block3_cta_url; ?>" class="btn btn-lg btn-danger" role="button" tabindex="0"><?php echo $block3_cta_text; ?> »</a>
		</div><!-- ctaButton -->
	</div><!-- end .contentMiddleBlockcontent -->

	</div><!-- end .contentMiddleBlock -->

