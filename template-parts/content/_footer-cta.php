<?php
/**
 * Template part for front-page ctaBlock
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$footer_contact_us_form				= get_field('footer_contact_us_form');
$footer_cta_loading_image				= get_field('footer_cta_loading_image');

?>

<div id="footer-ctaBlock">
<iframe
	src="<?php echo $footer_contact_us_form; ?>" >
</iframe>
</div><!-- end .footer-ctaBlock -->

