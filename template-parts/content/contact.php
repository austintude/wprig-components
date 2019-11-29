<?php
/**
 * Template part for contact
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$top_block_phone_num				= get_field('top_block_phone_num');
$top_block_title				= get_field('top_block_title');
$top_block_phone_link				= get_field('top_block_phone_link');
$mid_block_title				= get_field('mid_block_title');
$mid_block_btn				= get_field('mid_block_btn');
$mid_block_form_url				= get_field('mid_block_form_url');
$btm_block_form_url				= get_field('btm_block_form_url');
$btm_block_title				= get_field('btm_block_title');
$btm_block_btn				= get_field('btm_block_btn');
$contact_kit_title				= get_field('contact_kit_title');
$contact_kit_btn				= get_field('contact_kit_btn');
$contact_kit_form_url				= get_field('contact_kit_form_url');
$cta_loading_image				= get_field('cta_loading_image');

?>

<div class="contactBlock">
	<div class="topBlock">
		<h2>
			<?php echo $top_block_title; ?>
		</h2>
		<h3>
			<a href="tel:<?php echo $top_block_phone_link; ?>" rel="noreferrer noopenner">
				<?php echo $top_block_phone_num; ?>
			</a>
		</h3>

	</div><!-- end .topBlock -->
	<div class="midBlock">
		<h2>
			<?php echo $mid_block_title; ?>
		</h2>
		<button id="speaking" class="btn btn-lg btn-danger" on="tap:speaking-lightbox" role="button" tabindex="0"><?php echo $mid_block_btn; ?> »</button>
		<amp-lightbox id="speaking-lightbox" layout="nodisplay">
    <div class="lightbox" on="tap:speaking-lightbox.close" role="button" tabindex="0">

      <amp-iframe width="350" height="550" layout="intrinsic"
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0"
              src="<?php echo $mid_block_form_url; ?>">
    <amp-img layout="fill"
             src="<?php echo $cta_loading_image['url']; ?>"
             placeholder></amp-img>
  </amp-iframe>
    </div>
  </amp-lightbox>
	</div><!-- end .midBlock -->
	<div class="btmBlock">
		<h2>
			<?php echo $btm_block_title; ?>
		</h2>
		<button id="singing" class="btn btn-lg btn-danger" on="tap:singing-lightbox" role="button" tabindex="0"><?php echo $btm_block_btn; ?> »</button>
		<amp-lightbox id="singing-lightbox" layout="nodisplay">
    <div class="lightbox" on="tap:singing-lightbox.close" role="button" tabindex="0">

      <amp-iframe width="350" height="550" layout="intrinsic"
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0"
              src="<?php echo $btm_block_form_url; ?>">
    <amp-img layout="fill"
             src="<?php echo $cta_loading_image['url']; ?>"
             placeholder></amp-img>
  </amp-iframe>
    </div>
  </amp-lightbox>

	</div><!-- end .lowerBlock -->
	<div class="btmBlock">
	<h2>
			<?php echo $contact_kit_title; ?>
		</h2>
		<button id="singing" class="btn btn-lg btn-danger" on="tap:contact-lightbox" role="button" tabindex="0"><?php echo $contact_kit_btn; ?> »</button>
		<amp-lightbox id="contact-lightbox" layout="nodisplay">
    <div class="lightbox" on="tap:contact-lightbox.close" role="button" tabindex="0">

      <amp-iframe width="350" height="550" layout="intrinsic"
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0"
              src="<?php echo $contact_kit_form_url; ?>">
    <amp-img layout="fill"
             src="<?php echo $cta_loading_image['url']; ?>"
             placeholder></amp-img>
  </amp-iframe>
    </div>
  </amp-lightbox>

	</div><!-- end .btmBlock -->
</div>

