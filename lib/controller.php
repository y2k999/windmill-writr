<?php
/**
 * Load applications according to the settings and conditions.
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
	 * [CASE]
	 * 	3. Replace location of several modules.
	 * 		Replace SNS button from page top to page bottom.
	 * 
	 * @reference (Beans)
	 * 	Remove an action.
	 * 	https://www.getbeans.io/code-reference/functions/beans_remove_action/
	 * 	Set beans_add_action() using the callback argument as the action ID.
	 * 	https://www.getbeans.io/code-reference/functions/beans_add_smart_action/
	 * @reference
	 * 	[Child]/template-part/content/content-singular.php
	 * 	[Parent]/controller/structure/single.php
	 * 	[Parent]/model/app/share.php
	*/
	beans_remove_action('_fragment_share__the_page');
	beans_remove_action('_fragment_share__the_single');

	beans_add_smart_action(HOOK_POINT['single']['body']['after'],function()
	{
		__utility_app_share();
	});


	/**
	 * [CASE]
	 * 	3. Replace location of several modules.
	 * 		Render Author profile on page top.
	 * 
	 * @reference
	 * 	[Child]/lib/model/profile.php
	 * 	[Child]/template-part/content/content-singular.php
	 * 	[Parent]/controller/structure/sidebar.php
	*/
	beans_add_smart_action(HOOK_POINT['single']['header']['before'],function()
	{
		get_template_part('lib/model/profile');
	});


	/**
	 * @since 1.0.1
	 * 	Loads a template part into a template.
	 * 	https://developer.wordpress.org/reference/functions/get_template_part/
	 * @reference
	 * 	[Child]/template/footer.php
	 * 	[Child]/template-part/tailbar.php
	*/
	beans_add_smart_action(HOOK_POINT['colophone']['after'],function()
	{
		get_template_part('template-part/tailbar');
	});
