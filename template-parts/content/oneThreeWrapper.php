<?php
/**
 * Template part for oneThreeWrapper
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$leftonethirdblock	= get_field('leftonethirdblock');
$righttwothirdsblock	= get_field('righttwothirdsblock');
$cta_form_url			= get_field('cta_form_url');
$cta_text			= get_field('cta_text');
$cta_loading_image			= get_field('cta_loading_image');
?>
	<div class="onethreewrapper">
		<div class="leftOneThirdBlock">
			<img src="<?php echo $leftonethirdblock['url']; ?>" alt="<?php echo $leftonethirdblock['alt']; ?>">

		</div><!-- end .leftBlock -->
		<div class="rightTwoThirdsBlock">
			<div class="content">
			<?php echo $righttwothirdsblock; ?>
			</div><!-- end .content -->
		</div><!-- end .rightBlock -->
		<div class="ctaButton">
  <a href="<?php echo $cta_form_url; ?>">
  <button id="estimate" class="btn btn-lg btn-danger" role="button" tabindex="0"><?php echo $cta_text; ?> »</button>
</a>
	</div><!-- end .ctaButton -->
	</div> <!-- end .wrapper -->

