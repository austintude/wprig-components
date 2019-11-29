<?php
/**
 * Template part for front-page testimonials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$testimonial_quotes				= get_field('testimonial_quotes');
$testimonials_block_title			= get_field('testimonials_block_title');
$more_testimonials_link			= get_field('more_testimonials_link');
$more_testimonials_link_txt			= get_field('more_testimonials_link_txt');

// insert acf repeater here

?>

<section id="testimonialsBlock">
    <div class="testimonialsBlockTitle">
    <h2><?php echo $testimonials_block_title; ?></h2>
</div>
    <ol class="testimonialsList testimonialsList">
        <!-- insert acf sub-repeater here -->
        <amp-carousel height="600" 
		width="1200"
		layout="responsive"
		type="slides"
		autoplay
		delay="5500">
  <?php while (have_rows('testimonial_quotes')) : the_row();

// vars
$testimonial_quote = get_sub_field('testimonial_quote');
$testimonial_author = get_sub_field('testimonial_author');
$description_of_work = get_sub_field('description_of_work');
$testimonial_date = get_sub_field('testimonial_date');
$overall = get_sub_field('overall');
?>
            <li>
            <blockquote class="blockquote testimonialsCard" itemscope itemtype="http://schema.org/Review">
                <div class="testimonialsContent">
                    <span itemprop="itemReviewed" itemtype="http://schema.org/localBusiness">
                    <p itemprop="reviewBody">
                      <?php echo $testimonial_quote; ?>
                    </p>
</span>
                    <?php if ($description_of_work != null) { ?>
                    <div class="testimonialContentBlocks">
                        <div class="leftBlock">
                            <h5><?php echo $description_of_work; ?></h5>
                        </div>
                        <div class="rightBlock">
                            <ul>
                                <li>
                                    <div class="leftItem">
                                    Star Rating: 
                                    </div>
                                    <div class="rightItem">
                                    <span class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
                                        <meta itemprop="worstRating" content="0">
                                            <span itemprop="ratingValue">
                                            <?php echo $overall; ?>
                                            </span> / 
                                            <span itemprop="bestRating">
                                            <?php echo $overall; ?> 
                                                </span>
                                    </span>
                                        </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <cite class="testimonialsQuote">
                    <span itemprop="author" itemscope itemtype="http://schema.org/Person">
                    <?php echo $testimonial_author; ?>
                    </span> - 
                    <meta itemprop="datePublished" content="<?php echo $testimonial_date; ?>">
                    <span class="testimonialDate">
                        <?php echo $testimonial_date; ?>
                    </span>

                </cite>
                
            </blockquote>
            
                
            </li>
            <?php endwhile; ?>
            </amp-carousel>

    </ol>
    <div class="moreTestimonials">
    <button>
				<a href="<?php echo $more_testimonials_link; ?>"><?php echo $more_testimonials_link_txt; ?></a>
</button>
                    </div>
</section>