<?php
/**
 * Template part for contentMiddleBlock
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$contentmiddleblocktitle	= get_field('contentmiddleblocktitle');
$contentmiddleblockbackgroundimage	= get_field('contentmiddleblockbackgroundimage');
$contentmiddleblocksubtitle	= get_field('contentmiddleblocksubtitle');
$contentmiddleblockcontent	= get_field('contentmiddleblockcontent');

?>
	<div class="contentMiddleBlock">
		<div class="contentMiddleBlockTitle">
		<?php echo $contentmiddleblocktitle; ?>
		</div><!-- end .contentMiddleBlockTitle -->
		<div class="contentMiddleBlockBackgroundImage">
		<img src="<?php echo $contentmiddleblockbackgroundimage['url']; ?>" alt="<?php echo $contentmiddleblockbackgroundimage['alt']; ?>">
		</div><!-- .contentMiddleBlockBackgroundImage -->
		<div class="contentMiddleBlockSubTitle">
		<?php echo $contentmiddleblocksubtitle; ?>
		</div><!-- end .contentMiddleBlockSubTitle -->
		<div class="contentMiddleBlockcontent">
		<?php echo $contentmiddleblockcontent; ?>
		</div><!-- end .contentMiddleBlockcontent -->

	</div><!-- end .contentMiddleBlock -->

