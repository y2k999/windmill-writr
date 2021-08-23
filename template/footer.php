<?php
/**
 * The template for displaying the required page.
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package Windmill Writr
 * @license GPL3.0+
 * @since 1.0.1
*/

/**
 * Inspired by Beans Framework WordPress Theme
 * @link https://www.getbeans.io
 * @author Thierry Muller
 * 
 * Inspired by Kick Off UIkit 3 Starter Layout / Templates for your UIKit 3 project.
 * @link https://github.com/zzseba78/Kick-Off
 * @author byHumans
 * 
 * Inspired by Founder WordPress Theme
 * @link https://www.competethemes.com/founder/
 * @author Compete Themes
*/


/* Prepare
______________________________
*/

// If this file is called directly,abort.
if(!defined('WPINC')){die;}

// Set identifiers for this template.
// $index = basename(__FILE__,'.php');


/* Exec
______________________________
*/
?>
<?php
/**
 * @since 1.0.1
 * 	Copy from original footer template ([Parent]/template/footer/footer.php) and modify it.
 * 
 * @reference
 * 	[Child]/footer.php
 * 	[Parent]/controller/layout.php
 * 	[Parent]/inc/setup/constant.php
 * 	[Parent]/model/data/attribute.php
 * 	[Parent]/model/data/style.php
*/

/**
 * @reference (Uikit)
 * 	https://getuikit.com/docs/container
 * 	https://getuikit.com/docs/grid
 * 	https://getuikit.com/docs/section
 * 	https://getuikit.com/docs/width
*/
?>

<?php
/**
	@hooked
		_structure_footer::__the_breadcrumb()
	@reference
		[Parent]/controller/structure/footer.php
*/
?>
<?php do_action(HOOK_POINT['colophone']['before']); ?>

<!-- ====================
	<colophone>
 ==================== -->
<section class="uk-section uk-section-small" style="margin-bottom: 60px">
<footer id="colophone"<?php echo apply_filters("_property[container][colophone]",esc_attr('')); ?><?php echo apply_filters("_attribute[container][colophone]",''); ?>>

	<div class="uk-grid uk-child-width-expand"<?php echo apply_filters("_attribute[grid]",''); ?>>
		<?php do_action(HOOK_POINT['colophone']['append']); ?>
	</div><!-- .grid -->

</footer>
</section>

<?php do_action(HOOK_POINT['colophone']['after']); ?>
