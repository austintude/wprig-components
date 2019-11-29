<?php
/**
 * Template part for front-page ctaBlock
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$ctablock_text				= get_field('ctablock_text');
$ctablock_phone_link				= get_field('ctablock_phone_link');
$ctablock_phone_text				= get_field('ctablock_phone_text');

?>

<div id="ctaBlock" vocab="http://schema.org/" typeof="LocalBusiness">
	<div id="subscribe">
		<div id="envelopeIcon">
				<h4><?php echo $ctablock_text; ?></h4>
		</div>
		<div class="secondLine" id="ctaIframe">
			<button>
				<a href="tel:<?php echo $ctablock_phone_link; ?>"><?php echo $ctablock_phone_text; ?></a>
</button>

		</div>

	</div>
</div>

