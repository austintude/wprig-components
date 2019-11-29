<?php
/**
 * Template part for Testimonial Page
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$facebook_testimonials		= get_field('facebook_testimonials');
$fb_testimonials_block_title		= get_field('fb_testimonials_block_title');

?>
<section id="testimonialGrid">
<div class="testimonialsBlockTitle">
    <h2><?php echo $fb_testimonials_block_title; ?></h2>
</div>
<!-- insert acf sub-repeater here -->
  <?php while (have_rows('facebook_testimonials')) : the_row();

// vars
$facebook_testimonial = get_sub_field('facebook_testimonial');
?>
<div class="fbtest">
  <iframe src="<?php echo $facebook_testimonial; ?>" width="400" height="230" scrolling="yes" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
  </div>
  <?php endwhile; ?>




</div>


  </section>
