<?php
/**
 * Template part for contact-page block1
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$contact_us_phone			= get_field('contact_us_phone');
			$contact_us_phone_link			= get_field('contact_us_phone_link');
			$contact_us_street			= get_field('contact_us_street');
			$contact_us_street_suite			= get_field('contact_us_street_suite');
			$contact_us_city			= get_field('contact_us_city');
			$contact_us_state			= get_field('contact_us_state');
			$contact_us_zip			= get_field('contact_us_zip');
			$contact_us_open_datetime			= get_field('contact_us_open_datetime');
			$contact_us_open_datetime_extra			= get_field('contact_us_open_datetime_extra');
			$contact_us_open_days_times			= get_field('contact_us_open_days_times');
			$contact_us_open_days_times_extra			= get_field('contact_us_open_days_times_extra');
			$contact_us_closed			= get_field('contact_us_closed');
			$contact_us_form			= get_field('contact_us_form');
			$cta_loading_image			= get_field('cta_loading_image');
			$middle_images			= get_field('middle_images');
			$right_images			= get_field('right_images');
			$facebook_link			= get_field('facebook_link');
			$instagram_link			= get_field('instagram_link');
			$linkedin_link			= get_field('linkedin_link');
			$google_map			= get_field('google_map');

?>

<section id="contactUsBlock">
    <div class="leftBlock" vocab="http://schema.org/" typeof="LocalBusiness">
        <h3>Office Location</h3>
	<section id="physical">

        <div id="address">
            <address property="address" typeof="PostalAddress">
			<h5><?php bloginfo( 'name' ); ?></h5>
            <h5><span property="streetAddress"><?php echo $contact_us_street; ?></span>
            <br>
            <span property="addressLocality"><?php echo $contact_us_city; ?></span>,

			<span property="addressRegion"><?php echo $contact_us_state; ?></span> <?php echo $contact_us_zip; ?></h5>
</address>
        </div>
</section>
<div id="phone">
			<span property="telephone"><a href="tel:<?php echo $contact_us_phone_link; ?>"><?php echo $contact_us_phone; ?></a></span>
		</div>
<div id="hours">
	<h4>Hours of Operation</h4>
			<ul>
				<li>
				<time itemprop="openingHours" datetime="<?php echo $contact_us_form; ?>"><?php echo $contact_us_open_days_times; ?></time>
				</li>
				<?php if ($contact_us_open_datetime_extra != null) { ?>
				<li>
				<time itemprop="openingHours" datetime="<?php echo $contact_us_open_datetime_extra; ?>"><?php echo $contact_us_open_days_times_extra; ?></time>
				</li>
				<?php } ?>

				<li>
				 <?php echo $contact_us_closed; ?>  - Closed
				</li>
			</ul>

        </div>
        <!-- <div id="googleMap">
        <amp-iframe width="600" height="450" layout="responsive"
			  sandbox="allow-scripts allow-same-origin allow-popups"
			  frameborder="0"
              src="<?php echo $google_map; ?>">
    <amp-img layout="fill"
             src="<?php echo get_template_directory_uri() ?>/assets/images/Google-Map-Supreme.jpg"
			 placeholder>
			</amp-img>
  </amp-iframe>
</div> -->
</div>
<div class="rightBlock">
    <h4> Contact Us</h4>
<amp-iframe width="300" height="300" layout="responsive"
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0"
              src="<?php echo $contact_us_form; ?>">
    <amp-img layout="fill"
             src="<?php echo $cta_loading_image['url']; ?>"
             placeholder></amp-img>
  </amp-iframe>
</div>
</section>
