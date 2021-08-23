<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Windmill Writr
 * @license GPL3.0+
 * @since 1.0.1
*/

/**
 * Inspired by Beans Framework WordPress Theme
 * @link https://www.getbeans.io
 * @author Thierry Muller
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
 * @reference (WP)
 * 	Load and render footer template.
 * @reference
 * 	[Parent]/template/footer/footer.php
 * 	[Parent]/controller/template.php
 * 	[Parent]/inc/utility/theme.php
*/
?>
<?php
/**
 * [CASE]
 * 	2. Apply header template for front page.
 * 		Load and render header template for the landing page.
 * @param (string) $template_name
 * 	Specified template file to be loaded.
 * 	Default is [Parent]/template/header/header.php.
 * @reference
 * 	[Child]/template/header.php
 * 	[Parent]/controller/template.php
 * 	[Parent]/inc/utility/general.php
 * 	[Parent]/inc/utility/theme.php
 * 	[Parent]/template/header/header.php
*/
__utility_template_header(trailingslashit(get_stylesheet_directory()) . 'template/footer.php');
?>
</div><!-- #page -->

<?php do_action(HOOK_POINT['site']['after']); ?>

<?php
/**
 * @reference (WP)
 * 	Fire the wp_footer action.
 * 	https://developer.wordpress.org/reference/functions/wp_footer/
*/
wp_footer();
?>

</body>
</html>
