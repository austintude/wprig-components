<?php
/**
 * Template part for Portfolio
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$portfolio_images	= get_field('portfolio_images');

?>
<div class="galleryBlocks">
<?php while (have_rows('portfolio_images')) : the_row();

// vars
$portfolio_category = get_sub_field('portfolio_category');
$portfolio_category_id = get_sub_field('portfolio_category_id');
$portfolio_category_title = get_sub_field('portfolio_category_title');
$portfolio_category_image = get_sub_field('portfolio_category_image');
$portfolio_category_image_caption = get_sub_field('portfolio_category_image_caption');
$portfolio_category_content = get_sub_field('portfolio_category_content');
$portfolio_category_child_link = get_sub_field('portfolio_category_child_link');
?>

<a href="<?php echo $portfolio_category_child_link; ?>" rel="noreferrer noopener">
<div id="gallery-<?php echo $portfolio_category_id; ?>" class="galleryItem">
<amp-img src="<?php echo $portfolio_category_image['url']; ?>" width="400" height="300" layout="responsive"
aria-describedby="<?php echo $portfolio_category_id; ?>">
      </amp-img>
      
<div class="categoryTitle" id="category-<?php echo $portfolio_category_id; ?>">
       <h3> 
           <?php echo $portfolio_category_content; ?>
</h3>
</div>
</a>
</div> <!-- end -->
<?php endwhile; ?>
</div>