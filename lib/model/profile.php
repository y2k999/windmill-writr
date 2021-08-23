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
$user_id = __utility_get_user_id();

/**
 * @reference (Beans)
 * 	HTML markup.
 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
 * 	https://www.getbeans.io/code-reference/functions/beans_output_e/
 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
 * @reference (Uikit)
 * 	https://getuikit.com/docs/card
 * 	https://getuikit.com/docs/divider
 * 	https://getuikit.com/docs/dropdown
 * 	https://getuikit.com/docs/icon
 * 	https://getuikit.com/docs/utility
*/
beans_open_markup_e("_wrapper[{$theme}][{$index}]",'div',array('class' => 'uk-card uk-padding-small uk-margin uk-margin-remove-vertical'));

	beans_open_markup_e("_grid[{$theme}][{$index}]",'div',array(
		'class' => 'uk-grid uk-grid-medium uk-flex',
		'uk-grid' => '',
	));
		// Avatar
		beans_open_markup_e("_media[{$theme}][{$index}]",'div',array('class' => 'uk-card-media-left uk-width-auto'));
			beans_open_markup_e("_link[{$theme}][{$index}]",'a',array(
				/**
				 * @reference (WP)
				 * 	Retrieve the URL to the author page for the user with the ID provided.
				 * 	https://developer.wordpress.org/reference/functions/get_author_posts_url/
				 * 	Retrieves the requested data of the author of the current post.
				 * 	https://developer.wordpress.org/reference/functions/get_the_author_meta/
				*/
				'href' => get_author_posts_url(get_the_author_meta('ID',$user_id)),
				'itemprop' => 'url',
			));
				beans_open_markup_e("_figure[{$theme}][{$index}]",'figure',array('class' => 'uk-border-circle'));
					/**
					 * @reference (WP)
					 * 	Retrieve the avatar <img> tag for a user, email address, MD5 hash, comment, or post.
					 * 	https://developer.wordpress.org/reference/functions/get_avatar/
					*/
					beans_output_e("_avatar[{$theme}][{$index}]",get_avatar(get_the_author_meta('ID',$user_id)));
				beans_close_markup_e("_figure[{$theme}][{$index}]",'figure');

			beans_close_markup_e("_link[{$theme}][{$index}]",'a');
		beans_close_markup_e("_media[{$theme}][{$index}]",'div');

		beans_open_markup_e("_header[{$theme}][{$index}]",'header',array('class' => 'uk-card-header uk-width-expand'));
			beans_open_markup_e("_tag[{$theme}][{$index}]",__utility_get_option('tag_widget-title'),array(
				'class' => 'vcard author uk-text-bold',
				'itemscope' => 'itemscope',
				'itemtype' => 'http://schema.org/Person',
				'itemprop' => 'author editor creator',
			));
				beans_open_markup_e("_link[{$theme}][{$index}]",'a',array(
					'href' => get_author_posts_url(get_the_author_meta('ID',$user_id)),
					'itemprop' => 'url',
				));
					beans_output_e("_output[{$theme}][{$index}]",get_the_author_meta('display_name',$user_id));
				beans_close_markup_e("_link[{$theme}][{$index}]",'a');
			beans_close_markup_e("_tag[{$theme}][{$index}]",__utility_get_option('tag_widget-title'));

			beans_open_markup_e("_label[{$theme}][{$index}]",'span',array('class' => 'uk-text-small uk-text-muted'));
				beans_output_e("_output[{$theme}][{$index}]",get_the_author_meta('description',$user_id));
				// SNS follow
				__utility_app_follow();
			beans_close_markup_e("_label[{$theme}][{$index}]",'span');

		beans_close_markup_e("_header[{$theme}][{$index}]",'header');

		// Description
		beans_open_markup_e("_body[{$theme}][{$index}]",'div',array('class' => 'uk-card-body uk-width-auto'));
			beans_open_markup_e("_inline[{$theme}][{$index}]",'div',array('class' => 'uk-inline'));
				// Icon
				beans_open_markup_e("_icon[{$theme}][{$index}]",'a',array(
					'href' => '#',
					'class' => 'uk-icon-button',
					'uk-icon' => 'icon:more-vertical',
				));
				beans_close_markup_e("_icon[{$theme}][{$index}]",'a');
				// Dropdown
				beans_open_markup_e("_effect[{$theme}][{$index}]",'div',array('uk-dropdown' => 'mode:click; pos: bottom-right; boundary:#author-wrap'));
					beans_open_markup_e("_list[{$theme}][{$index}]",'ul',array('class' => 'uk-nav uk-dropdown-nav'));
						?>
						<!--- For User Customize.-->
						<li class="uk-nav-header">Actions</li>
						<li><a href="#">Rate this author</a></li>
						<li><a href="#">Follow this author</a></li>
						<li><a href="#">Bookmark</a></li>
						<li><a href="#">View more articles</a></li>
						<?php
					beans_close_markup_e("_list[{$theme}][{$index}]",'ul');
				beans_close_markup_e("_effect[{$theme}][{$index}]",'div');
			beans_close_markup_e("_inline[{$theme}][{$index}]",'div');
		beans_close_markup_e("_body[{$theme}][{$index}]",'div');

	beans_close_markup_e("_grid[{$theme}][{$index}]",'div');
beans_close_markup_e("_wrapper[{$theme}][{$index}]",'div');


/**
 * @reference (Beans)
 * 	Echo self-close markup and attributes registered by ID.
 * 	https://www.getbeans.io/code-reference/functions/beans_selfclose_markup_e/
*/
beans_selfclose_markup_e("_divider[{$theme}][{$index}]",'hr',array('class' => 'uk-divider-icon'));
