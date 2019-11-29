<?php
/**
 * Template part for carouselBlock
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$youtube_videos	= get_field('youtube_videos');
$youtube_video_id	= get_field('youtube_video_id');

?>
	<div class="carouselWrapper">
	<amp-carousel
  id="carousel-with-preview"
  width="450"
  height="300"
  layout="responsive"
  type="slides"
>

<amp-youtube width="480" height="270" layout="responsive" data-videoid="<?php echo $youtube_video_id; ?>">
  </amp-youtube>
</amp-carousel>

<div class="carousel-preview">
<?php while (have_rows('youtube_videos')) : the_row();

// vars
$youtube_video_id = get_sub_field('youtube_video_id');
?>
<amp-lightbox id="<?php echo $youtube_video_id; ?>-lightbox" layout="nodisplay">
<amp-youtube
width="480"
height="270"
layout="responsive"
data-videoid="<?php echo $youtube_video_id; ?>"
autoplay
>
  </amp-youtube>
</amp-lightbox>
<amp-img
media="(max-width: 47.9em)"
src="https://i.ytimg.com/vi/<?php echo $youtube_video_id; ?>/hqdefault.jpg"
      width="90"
      height="60"
	  alt="Youtube video - <?php echo $youtube_video_id; ?>"
	  role="button"
	  tabindex="0"
	  on="tap:<?php echo $youtube_video_id; ?>-lightbox"
	  layout="intrinsic"
    ></amp-img><amp-img
media="(min-width: 48em)"
src="https://i.ytimg.com/vi/<?php echo $youtube_video_id; ?>/hqdefault.jpg"
      width="200"
      height="120"
	  alt="Youtube video - <?php echo $youtube_video_id; ?>"
	  role="button"
	  tabindex="0"
	  on="tap:<?php echo $youtube_video_id; ?>-lightbox"
	  layout="intrinsic"
    ></amp-img>
  <?php endwhile; ?>


</div>

	</div><!-- end .carouselWrapper -->

