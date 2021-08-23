<?php
/**
 * Color settings for child theme.
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
	 * 	Update theme customizer colors over parent theme.
	 * @reference (Beans)
	 * 	Hooks a function or method to a specific filter action.
	 * 	https://www.getbeans.io/code-reference/functions/beans_add_filter/
	 * @reference
	 * 	[Parent]/customizer/color.php
	*/
	beans_add_filter("_filter[_customizer_color][color]",function()
	{
		/**
			@access (public)
				Set default color for this child theme.
			@param (array) $color
				Color codes of parent theme.
			@return (array)
				Color codes of child theme.
		*/
		return array(
			'text' => '#666',
			'link' => '#1A1A1A',
			'hover' => '#D4D4D4',
		);

	},99);
