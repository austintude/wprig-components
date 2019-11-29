<?php
/**
 * Template part for Press
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$press_quotes				= get_field('press_quotes');

?>

<service class="pressBlocks">
<div class="testimonialsList">

<?php while (have_rows('press_quotes')) : the_row();

// vars
$press_quote = get_sub_field('press_quote');
$press_quote_author = get_sub_field('press_quote_author');
$press_quote_date = get_sub_field('press_quote_date');
$press_quote_link = get_sub_field('press_quote_link');
$press_quote_img = get_sub_field('press_quote_img');
$press_quote_msc = get_sub_field('press_quote_msc');


?>

	<div>
	<?php if ($press_quote_msc != null) { ?>
		<h4>
				<?php echo $press_quote_msc; ?>
			</h4>
			<?php } ?>
            <blockquote class="blockquote testimonialsCard" itemscope itemtype="http://schema.org/Review">
                <div class="testimonialsContent">

                    <span itemprop="itemReviewed" itemtype="http://schema.org/localBusiness">
                    <p itemprop="reviewBody">
                      <?php echo $press_quote; ?>
                    </p>
</span>
                    <?php if ($overall != null) { ?>
                    <div class="testimonialContentBlocks">
					<?php if ($description_of_work != null) { ?>
						<div class="leftBlock">
                            <h5><?php echo $description_of_work; ?></h5>
						</div>
					<?php } ?>
                        <!-- <div class="rightBlock">
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
                        </div> -->
                    </div>
					<?php } ?>
					<img src="<?php echo $press_quote_img['url']; ?>" alt="<?php echo $press_quote_img['alt']; ?>">
					<cite class="testimonialsQuote">
                    <span itemprop="author" itemscope itemtype="http://schema.org/Person">
                    <?php echo $press_quote_author; ?>
                    </span>
                    <meta itemprop="datePublished" content="<?php echo $press_quote_date; ?>">
                    <span class="testimonialDate">
                        <?php echo $press_quote_date; ?>
                    </span>

                </cite>
				</div>



            </blockquote>


	</div><!-- end . -->
	<?php endwhile; ?>
					</div>
</service><!-- end .footer-ctaBlock -->

