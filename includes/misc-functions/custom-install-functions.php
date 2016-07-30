<?php
/**
 * Custom Installation Functions for the Church Plant Theme Bundle. Make custom changes for installation here.
 *
 * Find and replace: Church Plant Theme Bundle
 * Find and replace: church_plant_theme_bundle
 * Find and replace: church-plant-theme-bundle
 * Find and replace: Restore Church
 * 
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package     MP Stacks + Restore Church
 * @subpackage  Functions
 *
 * @copyright   Copyright (c) 2015, Mint Plugins
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author      Philip Johnston
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Returns the array of the custom theme mods for this theme. As a developer, you can get this array under "Appearance" > "Export Customizer" with the MP Stacks + Developer Add-On.
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    void
 * @return   array
 */
function church_plant_theme_bundle_theme_mods(){
			
	return array ( 0 => false, 'mp_knapstack_header_bg_color_opacity' => '0', 'mp_knapstack_header_bg_color' => '#ffffff', 'mp_core_logo' => 'https://demo.mintplugins.com/church-plant/wp-content/uploads/sites/17/2016/07/church-plant-logo.png', 'mp_core_logo_width' => '400', 'nav_menu_locations' => array ( 'primary' => 3, ), 'mp_knapstack_header_bg_color_opacity_at_scroll' => '', 'mp_knapstack_header_font_size' => '12', 'mp_knapstack_header_fixed' => 'absolute', 'mp_knapstack_header_bg_opacity_scroll_amount' => '', 'mp_knapstack_sub_header_positioning' => 'left', 'mp_search_in_menu_searchicon_color' => '#ffffff', 'mp_stacks_footer_stack' => '21', 'mp_knapstack_header_nav_text_hover_color' => '#b7b7b7', 'mp_knapstack_header_font' => 'Montserrat', 'mp_knapstack_header_bump_site_down' => false, 'mp_menu_change_at_screen_width' => '800', 'mp_menu_toggle_color' => '#ffffff', 'mp_knapstack_page_header_bg_image' => 'https://demo.mintplugins.com/church-plant/wp-content/uploads/sites/17/2016/06/blog_black.jpg', 'mp_knapstack_page_header_button_submit' => '#515151', 'mp_menu_open_from' => 'mp-menu-right.css', 'mp_menu_attachment' => 'absolute', 'mp_knapstack_text_color' => '#4c4c4c', );
	
}
add_filter( 'mp_stacks_required_theme_mods_for_' . 'church_plant_theme_bundle', 'church_plant_theme_bundle_theme_mods' );

/**
 * Return what the dirname of the theme we wish to use should be. 
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    string $theme_dir_name
 * @return   string $theme_dir_name
 */
function church_plant_theme_bundle_required_theme_dirname_custom( $theme_dir_name ){
	return 'church-plant-theme-bundle-child-theme';
}
add_filter( 'church_plant_theme_bundle_required_theme_dirname', 'church_plant_theme_bundle_required_theme_dirname_custom' );

/**
 * Return what the Fancy Name of theme we wish to use should be. This is the title in the theme's style.css file.
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    string $fancy_theme_name
 * @return   string $fancy_theme_name
 */
function church_plant_theme_bundle_fancy_theme_name_custom( $fancy_theme_name ){
	return 'Church Plant Theme Bundle (Child Theme)';
}
add_filter( 'church_plant_theme_bundle_fancy_theme_name', 'church_plant_theme_bundle_fancy_theme_name_custom' );