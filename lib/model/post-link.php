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

/**
 * @reference (Beans)
 * 	HTML markup.
 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
 * 	https://www.getbeans.io/code-reference/functions/beans_output_e/
 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
 * @reference (Uikit)
 * 	https://getuikit.com/docs/icon
*/

// Icon
beans_open_markup_e("_icon[{$theme}][{$index}]",'span',array('uk-icon' => 'icon: arrow-right'));
beans_close_markup_e("_icon[{$theme}][{$index}]",'span');

beans_open_markup_e("_strong[{$theme}][{$index}]",'strong');
	beans_output_e("_label[{$theme}][{$index}]",esc_html__('Pick Up ','windmill'));
beans_close_markup_e("_strong[{$theme}][{$index}]",'strong');


/**
 * @since 3.4.0
 * 	Filters the arguments for the Recent Posts widget.
 * 	https://developer.wordpress.org/reference/classes/wp_query/
 * @since 4.9.0
 * 	Added the `$instance` parameter.
 * @see WP_Query::get_posts()
 * @param (array) $args
 * 	An array of arguments used to retrieve the recent posts.
 * @param (array) $instance
 * 	Array of settings for the current widget.
*/
$r = new WP_Query(array(
	'post_type' => 'post',
	// 'posts_per_page' => get_option('posts_per_page'),
	'posts_per_page' => 1,
	'orderby' => 'rand',
	'ignore_sticky_posts' => TRUE,
));


/**
 * @reference (WP)
 * 	Iterate the post index in the loop.
 * 	https://developer.wordpress.org/reference/functions/the_post/
*/
while($r->have_posts()) :	$r->the_post();

	beans_open_markup_e("_link[{$theme}][{$index}]",'a',array(
		'href' => get_permalink(),
		'title' => the_title_attribute('echo=0'),
		'class' => 'uk-link-reset',
		'rel' => 'bookmark',
		'target' => '_self',
		'itemprop' => 'url',
	));
		the_title();
	beans_close_markup_e("_link[{$theme}][{$index}]",'a');

endwhile;

/**
 * @since 1.0.1
 * 	Only reset the query if a filter is set.
 * @reference (WP)
 * 	After looping through a separate query, this function restores the $post global to the current post in the main query.
 * 	https://developer.wordpress.org/reference/functions/wp_reset_postdata/
*/
wp_reset_postdata();
