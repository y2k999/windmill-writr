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

/**
 * @reference (WP)
 * 	Retrieves name of the current stylesheet.
 * 	https://developer.wordpress.org/reference/functions/get_stylesheet/
*/
// $theme = get_stylesheet();


/* Exec
______________________________
*/
?>
<?php
/**
 * @since 1.0.1
 * 	Copy from original header template ([Parent]/template/header/header.php) and modify it.
 * 
 * @reference (Uikit)
 * 	https://getuikit.com/docs/container
 * 	https://getuikit.com/docs/grid
 * 	https://getuikit.com/docs/section
 * 	https://getuikit.com/docs/width
 * @reference
 * 	[Child]/header.php
 * 	[Parent]/controller/layout.php
 * 	[Parent]/inc/setup/constant.php
 * 	[Parent]/model/data/attribute.php
 * 	[Parent]/model/data/style.php
*/
?>
<?php do_action(HOOK_POINT['masthead']['before']); ?>

<!-- ====================
	<masthead>
 ==================== -->
<section class="uk-section uk-section-small">
<header id="masthead" class="uk-container site-header" uk-sticky="show-on-up: true; animation: uk-animation-slide-top" role="banner" itemscope="itemscope" itemprop="publisher" itemtype="https://schema.org/WPHeader">
	<div class="uk-grid uk-child-width-1-1"<?php echo apply_filters("_attribute[grid]",''); ?>>
		<?php get_template_part('template-part/nav/navbar'); ?>
	</div><!-- .grid -->
</header>
</section>

<?php do_action(HOOK_POINT['masthead']['after']); ?>
