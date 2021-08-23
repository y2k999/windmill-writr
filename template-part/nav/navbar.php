<?php
/**
 * Template part for displaying the required contents.
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
<!-- ====================
	<navbar-container>
==================== -->
<nav id="navbar" class="uk-navbar-container uk-navbar-transparent" uk-navbar="mode: click;">

	<!-- =============== 
		<navbar-left>
	=============== -->
	<div class="uk-navbar-left">
		<ul class="uk-navbar-nav">
			<li class="uk-visible@s">
				<div>
					<a class="uk-navbar-toggle" uk-search-icon href="#"></a>
					<div class="uk-drop" uk-drop="mode: click; pos: right-center; offset: 0; boundary: #navbar">
						<form method="get" action="<?php echo esc_url(home_url('/')); ?>" class="uk-search uk-search-navbar uk-width-1-1">
							<input class="uk-search-input" type="search" placeholder="<?php echo esc_attr('Search...','windmill'); ?>">
						</form>
					</div>
				</div>
			</li>
		</ul>
	</div><!-- .navbar-left -->

	<!-- =============== 
		<navbar-center>
	=============== -->
	<div class="uk-navbar-center">
		<?php if(the_custom_logo()) : ?>
			<a class="uk-navbar-item uk-logo" href="#"><?php the_custom_logo(); ?></a>
		<?php else :
			/**
			 * @since 1.0.1
			 * 	Displays header site branding.
			 * @reference (Uikit)
			 * 	https://getuikit.com/docs/navbar
			 * @reference
			 * 	[Parent]/inc/utility/theme.php
			 * 	[Parent]/model/app/branding.php
			*/
			__utility_app_branding();
		endif; ?>
	</div><!-- .navbar-center -->

	<!-- =============== 
		<navbar-right>
	=============== -->
	<div class="uk-navbar-right">
		<div class="uk-navbar-item">
			<a href="#offcanvas-nav" class="uk-navbar-toggle" uk-toggle uk-navbar-toggle-icon></a>
		</div>
	</div><!-- .navbar-right -->
</nav>
