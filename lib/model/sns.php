<?php
/**
 * Render Application.
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
$index = basename(__FILE__,'.php');

/**
 * @reference (WP)
 * 	Retrieves name of the current stylesheet.
 * 	https://developer.wordpress.org/reference/functions/get_stylesheet/
*/
$theme = get_stylesheet();


/* Exec
______________________________
*/
?>
<?php
foreach(__utility_get_value('follow') as $item){
	beans_open_markup_e("_link[{$theme}][{$index}][{$item}]",'a',array(
		'href' => __utility_get_option('url_' . $item),
		'class' => 'icon-link uk-margin-small-left',
		'target' => '_blank',
		'itemprop' => 'url',
		'uk-icon' => 'icon: ' . $item,
	));
	beans_close_markup_e("_link[{$theme}][{$index}][{$item}]",'a');
}
