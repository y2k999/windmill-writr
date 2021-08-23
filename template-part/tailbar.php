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
 * [CASE]
 * 	2. Add sticky footer bar.
 * 
 * @reference
 * 	[Child]/footer.php
 * 	[Child]/lib/controller.php
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
<!-- BOTTOM BAR -->
<section class="uk-section uk-section-xsmall uk-section-default uk-position-bottom uk-position-fixed tailbar">
	<div class="uk-container uk-container-small uk-text-small">
		<div class="uk-grid"<?php echo apply_filters("_attribute[grid]",''); ?>>
			<div class="uk-width-expand">
				<?php get_template_part('lib/model/post-link'); ?>
			</div>
			<div class="uk-width-auto uk-text-right">
				<?php get_template_part('lib/model/sns'); ?>
			</div>
		</div><!-- .grid -->
	</div>
</section>

<!-- OFFCANVAS -->
<div id="offcanvas-nav" uk-offcanvas="flip: true; overlay: true">
	<div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
		<button class="uk-offcanvas-close uk-close uk-icon" type="button" uk-close></button>
		<?php get_template_part('template-part/nav/nav-offcanvas'); ?>
	</div>
</div>
