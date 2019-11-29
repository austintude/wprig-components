<?php
/**
 * Template part for Gallery
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$gallery_images	= get_field('gallery_images');

?>
<div class="galleryBlocks">
    <amp-carousel height="300" 
		width="1200"
		layout="responsive"
		type="slides"
		autoplay
        delay="5500"
        media="(max-width: 48.5em) and (max-height:29em)"
        >
        
<?php while (have_rows('gallery_images')) : the_row();

// vars
$gallery_category = get_sub_field('gallery_category');
$gallery_category_id = get_sub_field('gallery_category_id');
$gallery_category_title = get_sub_field('gallery_category_title');
$gallery_category_image = get_sub_field('gallery_category_image');
$gallery_category_image_caption = get_sub_field('gallery_category_image_caption');
$gallery_category_content = get_sub_field('gallery_category_content');
?>

<div id="gallery-<?php echo $gallery_category_id; ?>" class="galleryItem">
<amp-img lightbox="<?php echo $gallery_category_id; ?>" amp-lightbox-group="<?php echo $gallery_category_id; ?>" src="<?php echo $gallery_category_image['url']; ?>" width="400" height="300" layout="responsive"
aria-describedby="<?php echo $gallery_category_id; ?>">
      </amp-img>
      <div hidden id="<?php echo $gallery_category_id; ?>">
        <?php echo $gallery_category_image_caption; ?>
</div>
</div>
<!-- <div hidden> -->
	
		<?php while (have_rows('gallery_category')) : the_row();

// vars
$gallery_image_mobile = get_sub_field('gallery_image_mobile');
$gallery_image_ipad_landscape_plus = get_sub_field('gallery_image_ipad_landscape_plus');
$gallery_image_caption = get_sub_field('gallery_image_caption');
$gallery_image_caption_id = get_sub_field('gallery_image_caption_id');
$gallery_image_layout = get_sub_field('gallery_image_layout');

?>
	
<div>
		<amp-img 
  src="<?php echo $gallery_image_ipad_landscape_plus['url']; ?>"
  <?php echo $gallery_image_layout; ?>

			layout="responsive"
            alt="<?php echo $gallery_image_ipad_landscape_plus['alt']; ?>"
            lightbox="<?php echo $gallery_category_id; ?>"
            aria-describedby="<?php echo $gallery_image_caption_id; ?>"
            >
        </amp-img>
        <div hidden id="<?php echo $gallery_image_caption_id; ?>">
        <?php echo $gallery_image_caption; ?>
</div>
</div> 
		
	
	<?php endwhile; ?>
<!-- </div> -->
<!-- close hidden div -->

<?php endwhile; ?>
</amp-carousel>
<amp-carousel height="480" 
		width="378"
		layout="responsive"
		type="slides"
		autoplay
        delay="5500"
        media="(max-width: 48.5em) and (min-height:29.1em)"
        >
             
<?php while (have_rows('gallery_images')) : the_row();

// vars
$gallery_category = get_sub_field('gallery_category');
$gallery_category_id = get_sub_field('gallery_category_id');
$gallery_category_title = get_sub_field('gallery_category_title');
$gallery_category_image = get_sub_field('gallery_category_image');
$gallery_category_image_caption = get_sub_field('gallery_category_image_caption');
$gallery_category_content = get_sub_field('gallery_category_content');
?>

<div id="gallery-<?php echo $gallery_category_id; ?>" class="galleryItem">
<amp-img lightbox="<?php echo $gallery_category_id; ?>" 
amp-lightbox-group="<?php echo $gallery_category_id; ?>" 
src="<?php echo $gallery_category_image['url']; ?>" width="300" height="200" layout="responsive"
aria-describedby="<?php echo $gallery_category_id; ?>">
      </amp-img>
      <div hidden id="<?php echo $gallery_category_id; ?>">
        <?php echo $gallery_category_image_caption; ?>
</div>
</div>
<!-- <div hidden> -->
	
		<?php while (have_rows('gallery_category')) : the_row();

// vars
$gallery_image_mobile = get_sub_field('gallery_image_mobile');
$gallery_image_ipad_landscape_plus = get_sub_field('gallery_image_ipad_landscape_plus');
$gallery_image_caption = get_sub_field('gallery_image_caption');
$gallery_image_caption_id = get_sub_field('gallery_image_caption_id');
$gallery_image_layout = get_sub_field('gallery_image_layout');

?>
	
<div>
		<amp-img 
  src="<?php echo $gallery_image_ipad_landscape_plus['url']; ?>"
  <?php echo $gallery_image_layout; ?>

			layout="responsive"
            alt="<?php echo $gallery_image_ipad_landscape_plus['alt']; ?>"
            lightbox="<?php echo $gallery_category_id; ?>"
            aria-describedby="<?php echo $gallery_image_caption_id; ?>"
            >
        </amp-img>
        <div hidden id="<?php echo $gallery_image_caption_id; ?>">
        <?php echo $gallery_image_caption; ?>
</div>
</div> 
		
	
	<?php endwhile; ?>
<!-- </div> -->
<!-- close hidden div -->

<?php endwhile; ?>
</amp-carousel>
        <amp-carousel height="600" 
		width="1200"
		layout="responsive"
		type="slides"
		autoplay
        delay="5500"
        media="(min-width: 48.6em)"
        >
             
<?php while (have_rows('gallery_images')) : the_row();

// vars
$gallery_category = get_sub_field('gallery_category');
$gallery_category_id = get_sub_field('gallery_category_id');
$gallery_category_title = get_sub_field('gallery_category_title');
$gallery_category_image = get_sub_field('gallery_category_image');
$gallery_category_image_caption = get_sub_field('gallery_category_image_caption');
$gallery_category_content = get_sub_field('gallery_category_content');
?>

<div id="gallery-<?php echo $gallery_category_id; ?>" class="galleryItem">
<amp-img lightbox="<?php echo $gallery_category_id; ?>" amp-lightbox-group="<?php echo $gallery_category_id; ?>" src="<?php echo $gallery_category_image['url']; ?>" width="400" height="300" layout="responsive"
aria-describedby="<?php echo $gallery_category_id; ?>">
      </amp-img>
      <div hidden id="<?php echo $gallery_category_id; ?>">
        <?php echo $gallery_category_image_caption; ?>
</div>
</div>
<!-- <div hidden> -->
	
		<?php while (have_rows('gallery_category')) : the_row();

// vars
$gallery_image_mobile = get_sub_field('gallery_image_mobile');
$gallery_image_ipad_landscape_plus = get_sub_field('gallery_image_ipad_landscape_plus');
$gallery_image_caption = get_sub_field('gallery_image_caption');
$gallery_image_caption_id = get_sub_field('gallery_image_caption_id');
$gallery_image_layout = get_sub_field('gallery_image_layout');
?>
	
<div>
		<amp-img 
  src="<?php echo $gallery_image_ipad_landscape_plus['url']; ?>"
  <?php echo $gallery_image_layout; ?>
			layout="responsive"
            alt="<?php echo $gallery_image_ipad_landscape_plus['alt']; ?>"
            lightbox="<?php echo $gallery_category_id; ?>"
            aria-describedby="<?php echo $gallery_image_caption_id; ?>"
            >
        </amp-img>
        <div hidden id="<?php echo $gallery_image_caption_id; ?>">
        <?php echo $gallery_image_caption; ?>
</div>
</div> 
		
	
	<?php endwhile; ?>
<!-- </div> -->
<!-- close hidden div -->

<?php endwhile; ?>
</amp-carousel>
</div>
<?php if ( have_posts() ) : the_post(); ?>
<div class="portfolioContent">
    <?php
the_content();
 endif; ?>
</div>
