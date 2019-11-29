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
<?php while (have_rows('gallery_images')) : the_row();

// vars
$gallery_category = get_sub_field('gallery_category');
$gallery_category_id = get_sub_field('gallery_category_id');
$gallery_category_title = get_sub_field('gallery_category_title');
$gallery_category_image = get_sub_field('gallery_category_image');
$gallery_category_image_caption = get_sub_field('gallery_category_image_caption');
$gallery_instagram_shortcode = get_sub_field('gallery_instagram_shortcode');
?>



<div id="gallery-<?php echo $gallery_instagram_shortcode; ?>" class="galleryItem">
<?php if ($gallery_instagram_shortcode != null) { ?>
  <amp-instagram lightbox="<?php echo $gallery_category_title; ?>" 
amp-lightbox-group="<?php echo $gallery_category_title; ?>" data-shortcode="<?php echo $gallery_instagram_shortcode; ?>" width="1" height="1" layout="responsive">
<div hidden id="<?php echo $gallery_category_id; ?>">
        <?php echo $gallery_category_image_caption; ?>
</div>
</amp-instagram>
  <?php } else { ?>
<amp-img 
lightbox="<?php echo $gallery_category_title; ?>" 
amp-lightbox-group="<?php echo $gallery_category_title; ?>" 
src="<?php echo $gallery_category_image['url']; ?>" 
width="300" 
height="400" 
layout="responsive"
aria-describedby="<?php echo $gallery_category_id; ?>">
      </amp-img>
      <div hidden id="<?php echo $gallery_category_id; ?>">
        <?php echo $gallery_category_image_caption; ?>
</div>

<?php } ?>


</div> <!-- end -->
<?php endwhile; ?>

</div>
