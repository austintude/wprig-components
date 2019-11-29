<?php
/**
 * Template part for Product Lines block1
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$product_lines			= get_field('product_lines');

?>

<section id="productLinesBlock">

<div class="galleryBlocks">

<?php while (have_rows('product_lines')) : the_row();

// vars
$product_line_title = get_sub_field('product_line_title');
$product_line_desc = get_sub_field('product_line_desc');
$product_line_img = get_sub_field('product_line_img');
$product_line_link = get_sub_field('product_line_link');

?>
<a href="<?php echo $product_line_link; ?>">
<div id="gallery-<?php echo $product_line_link; ?>" class="galleryItem">
<amp-img
src="<?php echo $product_line_img['url']; ?>"
width="400"
height="300"
layout="responsive"
alt="<?php echo $product_line_img['alt']; ?>">
      </amp-img>





<div class="categoryTitle" id="category-<?php echo $gallery_category_id; ?>">
       <h3>
           <?php echo $product_line_title; ?>
</h3>
</div>
</div> <!-- end -->
</a>

<?php endwhile; ?>
</div>
</section>
