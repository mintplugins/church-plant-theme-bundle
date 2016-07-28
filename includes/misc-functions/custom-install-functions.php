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
			
	return array ( 
	
		0 => false, 'mp_core_logo' => 'http://demo.mintplugins.com/growing-church-theme-bundle/wp-content/uploads/sites/10/2015/11/church-logo-here.png', 'mp_core_logo_width' => '100', 'mp_knapstack_font_family' => 'Montserrat', 'mp_knapstack_text_color' => '#323b44', 'mp_knapstack_subtext_color' => '#44301d', 'mp_knapstack_button_submit' => '#73a2c4', 'mp_knapstack_button_hover' => '#5094c4', 'mp_stacks_footer_stack' => 8, 'nav_menu_locations' => array ( 'primary' => 9, ), 'mp_menu_toggle_color' => '#ffffff', 'mp_menu_open_from' => 'mp-menu-right.css', 'mp_menu_bg_color' => '#ffffff', 'mp_menu_text_color' => '#2d2d2d', 'mp_knapstack_page_header_bg_color' => '#222222', 'mp_knapstack_header_bg_color' => '#100700', 'mp_knapstack_header_font' => 'Montserrat', 'mp_knapstack_header_font_size' => '15', 'mp_knapstack_link_color' => '#593418', 'mp_knapstack_link_hover_color' => '#462c18', 'mp_knapstack_header_nav_text_color' => '#ffffff', 'mp_knapstack_borders' => '#73a2c4', 'mp_knapstack_secondary_bg_color' => '#73a2c4', 'mp_knapstack_form_input_inactive_color' => '#444b4c', 'mp_knapstack_form_input_active_color' => '#73a2c4', 
		
	);
	
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