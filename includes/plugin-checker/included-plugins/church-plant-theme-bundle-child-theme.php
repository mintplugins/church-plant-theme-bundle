<?php
/**
 * This file contains a function which checks if the Church Plant Theme Bundle Child Theme is installed.
 *
 * @since 1.0.0
 *
 * @package    MP Core
 * @subpackage Functions
 *
 * @copyright  Copyright (c) 2015, Mint Plugins
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author     Philip Johnston
 */

/**
* Check to make sure the Church Plant Theme Bundle Child Theme is installed.
*
* @since    1.0.0
* @link     http://mintplugins.com/doc/plugin-checker-class/
* @return   array $plugins An array of plugins to be installed. This is passed in through the mp_core_check_plugins filter.
* @return   array $plugins An array of plugins to be installed. This is passed to the mp_core_check_plugins filter. (see link).
*/
if (!function_exists('church_plant_theme_bundle_child_theme_plugin_check')){
	function church_plant_theme_bundle_child_theme_plugin_check( $plugins ) {

		//Because Switch_theme doesn't activate until a second page load, we need to double check if it's active here.
		$current_theme = wp_get_theme();
		if ( $current_theme->get( 'Name' ) != 'Church Plant Theme Bundle (Child Theme)' ){

			$add_plugins = array(
				array(
					'plugin_name' => 'Church Plant Theme Bundle (Child Theme)',
					'plugin_message' => __('You require the Church Plant Theme Bundle (Child Theme). Install it here.', 'church_plant_theme_bundle'),
					'plugin_filename' => '',
					'plugin_download_link' => plugin_dir_path( dirname( dirname( __FILE__ ) ) ) . 'child-theme/',
					'plugin_api_url' => 'local',
					'plugin_info_link' => 'http://mintplugins.com/plugins/church-plant-theme-bundle/',
					'plugin_group_install' => true,
					'plugin_licensed' => false,
					'plugin_licensed_parent_name' => 'Church Plant Theme Bundle',
					'plugin_required' => true,
					'plugin_wp_repo' => false,
					'plugin_is_theme' => true,
					'plugin_needs_unzipping' => false,
					'plugin_is_child_theme' => true,
					'plugin_dashed_slug' => 'church-plant-theme-bundle-child-theme',
				)
			);

			return array_merge( $plugins, $add_plugins );
		}
		else{
			return $plugins;
		}
	}
}
add_filter( 'mp_core_check_plugins', 'church_plant_theme_bundle_child_theme_plugin_check' );
