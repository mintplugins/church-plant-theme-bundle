<?php
/**
 * This file contains the function keeps the Church Plant Theme Bundle plugin up to date.
 *
 * @since 1.0.0
 *
 * @package    Church Plant Theme Bundle
 * @subpackage Functions
 *
 * @copyright  Copyright (c) 2014, Mint Plugins
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author     Philip Johnston
 */
 
/**
 * Check for updates for the Church Plant Theme Bundle Plugin by creating a new instance of the MP_CORE_Plugin_Updater class.
 *
 * @access   public
 * @since    1.0.0
 * @return   void
 */
 if (!function_exists('church_plant_theme_bundle_update')){
	function church_plant_theme_bundle_update() {
		
		$args = array(
			'software_name' => 'Church Plant Theme Bundle', //<- The exact name of this Plugin. 
			'software_api_url' => 'http://mintplugins.com',//The URL where Sample Template and mp_repo are installed and checked
			'software_filename' => 'church-plant-theme-bundle.php',
			'software_licensed' => true, //<-Boolean
		);
		
		//Since this is a plugin, call the Plugin Updater class
		$church_plant_theme_bundle_plugin_updater = new MP_CORE_Plugin_Updater($args);
	}
 }
add_action( 'admin_init', 'church_plant_theme_bundle_update' );
