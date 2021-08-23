<?php
/**
 * Functions which enhance the theme by hooking into WordPress.
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
	 * 	Modify default markups in parent theme.
	 * @reference (Beans)
	 * 	Replace attribute to markup.
	 * 	https://www.getbeans.io/code-reference/functions/beans_replace_attribute/
	 * @reference
	 * 	[Parent]/controller/structure/footer.php
	 * 	[Parent]/model/app/breadcrumb.php
	*/
	beans_replace_attribute('_container[_structure_footer][breadcrumb]','class',NULL,'uk-container uk-container-small');

	/**
	 * @reference (WP)
	 * 	Fires after WordPress has finished loading but before any headers are sent.
	 * 	https://developer.wordpress.org/reference/hooks/init/
	 * 	Fires before determining which template to load.
	 * 	https://developer.wordpress.org/reference/hooks/template_redirect/
	*/
	beans_add_filter("_filter[_inline_share][style]",function()
	{
		/**
			@access (public)
				Remove default style of the parent theme.
			@param (array) $string
				Style of parent theme.
			@return (array)
				Style of child theme.
		*/

		// Invoke PHP_CSS plugin.
		if(class_exists('PHP_CSS') === FALSE) :
			get_template_part(SLUG['plugin'] . 'php-css/php-css');
		endif;
		$php_css = new PHP_CSS;

		// Add multiple properties at once.
		$php_css->set_selector('.share .shape-1 li');
		$php_css->add_properties(array(
			'padding' => '0.5rem 1rem',
			'margin' => '0.1rem',
		));

		/**
		 * @since 1.0.1
		 * @reference
		 * 	[Parent]/asset/inline/share.php
		 * 	[Parent]/model/app/share.php
		 * 	[Parent]/model/data/param.php
		*/
		foreach(__utility_get_value('share') as $item){

			// Add multiple properties at once.
			$php_css->set_selector('.share .shape-1 li.share-' . $item);
			$php_css->add_properties(array(
				'color' => COLOR[$item],
				'border' => 'solid 1px ' . COLOR[$item],
			));

			// Add a single property.
			$php_css->set_selector('.share .shape-1 a.share-' . $item);
			$php_css->add_property('color',COLOR[$item]);

			// Add multiple properties at once.
			$php_css->set_selector('.share .shape-1 li.share-' . $item . ':hover');
			$php_css->add_properties(array(
				'background' => COLOR[$item . '-hover'],
				'color' => COLOR['white'],
			));
		}

		return $php_css->css_output();

	},99);
