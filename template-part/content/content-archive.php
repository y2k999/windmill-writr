<?php
/**
 * Template part for displaying posts.
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
$index = str_replace(substr(basename(__FILE__,'.php'),0,8),'',basename(__FILE__,'.php'));


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
 * 
 * @since 1.0.1
 * 	Copy from original archive template ([Parent]/template-part/content/content-archive.php) and modify it.
 * @reference (Uikit)
 * 	https://getuikit.com/docs/card
 * @reference
 * 	[Child]/template/archive.php
 * 	[Parent]/inc/setup/constant.php
 * 	[Parent]/model/data/css.php
 * 	[Parent]/model/data/schema.php
 * 	[Parent]/template-part/content/content-archive.php
*/
?>
<!-- ====================
	<article>
 ==================== -->
<article id="post-<?php the_ID(); ?>" <?php post_class('uk-article uk-margin-medium-bottom'); ?>>

	<!-- =============== 
		<entry-header>
	 =============== -->
	<?php do_action(HOOK_POINT[$index]['header']['before']); ?>

	<header class="uk-padding-small entry-header">
		<?php the_title('<h2 class="uk-text-bold uk-article-title uk-margin-remove-adjacent uk-margin-remove-top"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">','</a></h2>'); ?>

		<p class="uk-article-meta entry-meta">
			<?php
			$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
			if(get_the_time('U') !== get_the_modified_time('U')){
				$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
			}
			$post_date = sprintf(
'<span class="entry-date">%1$s</span>
<span class="entry-month-year">
<span class="entry-month">%2$s</span>
<span class="entry-year">%3$s</span>
</span>',
				esc_html(get_the_time('j')),
				esc_html(get_the_time('F')),
				esc_html(get_the_time('Y'))
			);
			$time_string = sprintf(
				$time_string,
				esc_attr(get_the_date('c')),
				$post_date,
				esc_attr(get_the_modified_date('c')),
				esc_html(get_the_modified_date())
			);
			$posted_on = sprintf('<a href="%1$s" rel="bookmark">%2$s</a>',esc_url(get_permalink()),$time_string);
			echo '<span class="posted-on">' . $posted_on . '</span>';
			?>
		</p>
	</header>

	<?php do_action(HOOK_POINT[$index]['header']['after']); ?>

	<!-- =============== 
		<entry-content>
	 =============== -->
	<?php do_action(HOOK_POINT[$index]['body']['before']); ?>

	<div class="uk-padding-small entry-content">
		<?php if(has_post_thumbnail()){ ?>
			<figure class="uk-padding-small"><?php the_post_thumbnail(); ?></figure>
		<?php } ?>
		<div class="uk-position-relative uk-height-small">
			<?php __utility_app_excerpt(); ?>
		</div>

	</div><!-- /.entry-content -->

	<?php do_action(HOOK_POINT[$index]['body']['after']); ?>

</article>
