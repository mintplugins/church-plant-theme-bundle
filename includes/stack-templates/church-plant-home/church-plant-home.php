<?php 
/**
 * MP Stacks Template Home
 *
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package     MP Stacks Template Home
 * @subpackage  Functions
 *
 * @copyright   Copyright (c) 2016, Mint Plugins
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author      Philip Johnston
 */

 /**
 * If required add-ons aren't active, stop and install it now
 */
if (!function_exists('mp_stacks_animation_textdomain') || !function_exists('mp_stacks_embedsgrid_textdomain') || !function_exists('mp_stacks_eventgrid_textdomain') || !function_exists('mp_stacks_features_textdomain') || !function_exists('mp_stacks_forms_textdomain') || !function_exists('mp_stacks_googlefonts_textdomain') || !function_exists('mp_stacks_googlemaps_textdomain') || !function_exists('mp_stacks_icons_textdomain') || !function_exists('mp_stacks_linkgrid_textdomain') || !function_exists('mp_stacks_parallax_textdomain') || !function_exists('mp_stacks_postgrid_textdomain') || !function_exists('mp_stacks_second_text_textdomain') || !function_exists('mp_stacks_sermongrid_textdomain') || !function_exists('mp_stacks_slider_textdomain') || !function_exists('mp_stacks_sociallinks_textdomain') || !function_exists('mp_stacks_widgets_textdomain')){
					
	/**
	 * Check if mp_stacks_animation is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-animation-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_embedsgrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-embedsgrid-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_eventgrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-eventgrid-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_features is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-features-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_forms is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-forms-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_googlefonts is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-googlefonts-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_googlemaps is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-googlemaps-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_icons is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-icons-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_linkgrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-linkgrid-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_parallax is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-parallax-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_postgrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-postgrid-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_second_text is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-second-text-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_sermongrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-sermongrid-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_slider is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-slider-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_sociallinks is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-sociallinks-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_widgets is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-widgets-check.php' ); 
		
		
}
/**
 * Otherwise, if all required plugins are active, carry out the plugin's functions
 */
else{

	 /**
	 * Add Home to the list of installed stack templates
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp_stacks_templates_add_church_plant_home
	 * @see      function_name()
	 * @param    array $installed_templates See link for description.
	 * @return   array $installed_templates See link for description.
	 */
	function mp_stacks_templates_add_church_plant_home( $installed_templates ){ 
		
		$installed_templates['mp_stacks_church_plant_home_array'] = array(
			'template_slug' => 'church_plant_home',
			'template_title' => __( 'Home', 'church_plant_theme_bundle' ),
			'template_description' => __('Created using: Church Plant Theme Bundle\'s "Home" Stack.', 'church_plant_theme_bundle' ),
			'template_tags' => 'home, church',
			'template_preview_img' => plugins_url( '/images/preview_thumbnail.jpg', __FILE__ ),
			'template_demo_url' => 'https://demo.mintplugins.com/church-plant',
		);
		
		return $installed_templates;
	
	}
	add_filter( 'mp_stacks_installed_templates', 'mp_stacks_templates_add_church_plant_home' );
	
	/**
	 * Add This Stack Template to the list of Default Stacks to create when the parent Theme Bundle is activated.
	 *
	 * @since    1.0.0
	 * @link     https://mintplugins.com/doc/mp_stacks_templates_church_plant_home_to_default_stacks
	 * @see      function_name()
	 * @param    array $default_stacks_to_create See link for description.
	 * @return   array $default_stacks_to_create See link for description.
	 */
	function mp_stacks_templates_church_plant_home_to_default_stacks( $default_stacks_to_create ){ 
				
		$default_stacks_to_create['page']['church_plant_home'] = array( 'title' => 'Home','is_home' => true,'page_template' => 'default','add_to_primary_menu' => 'true', );
		
		return $default_stacks_to_create;
	
	}
	add_filter( 'church_plant_theme_bundle_default_stacks', 'mp_stacks_templates_church_plant_home_to_default_stacks' );
	
	/**
	 * This function holds and returns the Home Template Array
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp-stacks-stack-template-function
	 * @return   array The Stack Template Aray
	 */
	function mp_stacks_church_plant_home_array(){ 
	
		$template_array = array (
  'stack_title' => '',
  'stack_description' => 'Created using: Created using: Church Plant Theme Bundle\'s "Home" Stack.',
  'stack_bricks' => 
  array (
    'brick_1' => 
    array (
      'brick_title' => 'Home_brick 1',
      'mp_stack_order' => 1000,
      '_edit_lock' => 
      array (
        'value' => '1469672062:3',
      ),
      '_edit_last' => 
      array (
        'value' => '3',
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'mp_stack_id' => 
      array (
        'value' => '2',
      ),
      'brick_min_height' => 
      array (
        'value' => '800',
      ),
      'brick_bg_image' => 
      array (
        'value' => 'church-plant_home-2.jpg',
        'attachment' => true,
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'second_text',
      ),
      'brick_main_image' => 
      array (
        'value' => 'http://demo.mintplugins.com/church-plant/wp-content/uploads/sites/17/2016/05/church-plant-logo.png',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'singletext',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#000000',
      ),
      'brick_bg_color_opacity' => 
      array (
        'value' => '100',
      ),
      'brick_display_type' => 
      array (
        'value' => 'fill',
      ),
      'brick_bg_image_opacity' => 
      array (
        'value' => '35',
      ),
      'brick_overall_google_font' => 
      array (
        'value' => '',
      ),
      'mp_stacks_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#f2f2f2',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '80',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '18',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '80',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '80',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '50',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '50',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => 'Montserrat',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '700',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;THE JOURNEY&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#f2f2f2',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;Lorem ipsum dolor sit amet, fringilla leo libero integer ut, elementum maecenas mi amet commodo pellentesque, quis odio.&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_overall_google_font_weight_style' => 
      array (
        'value' => '',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'mp_stacks_parallax_on' => 
      array (
        'value' => 'mp_stacks_parallax_on',
      ),
      'mp_stacks_second_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_second_text_color' => 
            array (
              'value' => '#f2f2f2',
              'attachment' => false,
            ),
            'brick_second_text_font_size' => 
            array (
              'value' => '12',
              'attachment' => false,
            ),
            'brick_second_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_paragraph_margin_bottom' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_second_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_second_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_second_text_google_font' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_google_font_weight_style' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text' => 
            array (
              'value' => '&lt;p&gt;[mp_button icon=&quot;&quot; icon_position=&quot;left&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;CURRENT SERIES&quot; link=&quot;#home_brick-5&quot; btn_bg=&quot;show&quot; color=&quot;#9e1f63&quot; hover_color=&quot;#f2f2f2&quot; text_color=&quot;#f2f2f2&quot; hover_text_color=&quot;#9e1f63&quot; open_type=&quot;_self&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_min_below_c1' => 
      array (
        'value' => '25',
      ),
    ),
    'brick_2' => 
    array (
      'brick_title' => 'Home_brick 2',
      'mp_stack_order' => 1010,
      '_edit_lock' => 
      array (
        'value' => '1467393238:10',
      ),
      '_edit_last' => 
      array (
        'value' => '10',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'features',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'features_per_row' => 
      array (
        'value' => '3',
      ),
      'feature_shadow_apply_to' => 
      array (
        'value' => '""',
      ),
      'feature_icon_size' => 
      array (
        'value' => '75',
      ),
      'feature_icon_stroke_apply_to' => 
      array (
        'value' => '""',
      ),
      'mp_features_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'feature_title' => 
            array (
              'value' => 'MEETING TIME',
              'attachment' => false,
            ),
            'feature_icon_type' => 
            array (
              'value' => 'feature_icon',
              'attachment' => false,
            ),
            'feature_icon' => 
            array (
              'value' => 'fa-clock-o',
              'attachment' => false,
            ),
            'feature_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_text' => 
            array (
              'value' => '&lt;p&gt;Lorem ipsum dolor sit amet @6:15PM Saturday or @9:15AM Sunday velit magnis dolor velit congue sed dui.&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'feature_title' => 
            array (
              'value' => 'MEET THE TEAM',
              'attachment' => false,
            ),
            'feature_icon_type' => 
            array (
              'value' => 'feature_icon',
              'attachment' => false,
            ),
            'feature_icon' => 
            array (
              'value' => 'fa-users',
              'attachment' => false,
            ),
            'feature_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_text' => 
            array (
              'value' => '&lt;p&gt;Lorem ipsum dolor sit amet, erat erat donec maecenas, a feugiat orci massa ridiculus lorem, cum ac minim est.&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'feature_title' => 
            array (
              'value' => 'MEETING LOCATION',
              'attachment' => false,
            ),
            'feature_icon_type' => 
            array (
              'value' => 'feature_icon',
              'attachment' => false,
            ),
            'feature_icon' => 
            array (
              'value' => 'fa-map-marker',
              'attachment' => false,
            ),
            'feature_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_text' => 
            array (
              'value' => '&lt;p&gt;Integer dictum sit suscipit wisi, nunc nulla tortor, per rhoncus nullam vel 123 Time Square, New York&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'mp_stack_id' => 
      array (
        'value' => '2',
      ),
      'feature_title_size' => 
      array (
        'value' => '22',
      ),
      'brick_overall_google_font' => 
      array (
        'value' => 'Raleway',
      ),
      'brick_overall_google_font_weight_style' => 
      array (
        'value' => '200',
      ),
      'feature_icon_stroke_size' => 
      array (
        'value' => '0',
      ),
      'feature_icon_stroke_color' => 
      array (
        'value' => '',
      ),
      'feature_text_color' => 
      array (
        'value' => '',
      ),
      'brick_min_below' => 
      array (
        'value' => '0',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '30',
      ),
    ),
    'brick_3' => 
    array (
      'brick_title' => 'Home_brick 3',
      'mp_stack_order' => 1020,
      '_edit_lock' => 
      array (
        'value' => '1467393387:10',
      ),
      '_edit_last' => 
      array (
        'value' => '10',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'features',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'features_per_row' => 
      array (
        'value' => '3',
      ),
      'feature_shadow_apply_to' => 
      array (
        'value' => '""',
      ),
      'feature_icon_stroke_apply_to' => 
      array (
        'value' => '""',
      ),
      'mp_features_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'feature_title' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_text' => 
            array (
              'value' => '&lt;p&gt;[mp_button icon=&quot;&quot; icon_position=&quot;left&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;PLAN A VISIT&quot; link=&quot;https://demo.mintplugins.com/church-plant/connect/#connect_brick-5&quot; btn_bg=&quot;show&quot; color=&quot;#003149&quot; hover_color=&quot;#515151&quot; text_color=&quot;#ffffff&quot; hover_text_color=&quot;#ffffff&quot; open_type=&quot;_self&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'feature_title' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_text' => 
            array (
              'value' => '&lt;p&gt;[mp_button icon=&quot;&quot; icon_position=&quot;left&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;MEET TEAM&quot; link=&quot;https://demo.mintplugins.com/church-plant/about/#about_brick-5&quot; btn_bg=&quot;show&quot; color=&quot;#be1e2d&quot; hover_color=&quot;#515151&quot; text_color=&quot;#ffffff&quot; hover_text_color=&quot;#ffffff&quot; open_type=&quot;_self&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'feature_title' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_icon_link_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_text' => 
            array (
              'value' => '&lt;p&gt;[mp_button icon=&quot;&quot; icon_position=&quot;left&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;GET DIRECTIONS&quot; link=&quot;https://demo.mintplugins.com/church-plant/connect/#connect_brick-4&quot; btn_bg=&quot;show&quot; color=&quot;#00a79d&quot; hover_color=&quot;#515151&quot; text_color=&quot;#ffffff&quot; hover_text_color=&quot;#ffffff&quot; open_type=&quot;_self&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#ffffff',
      ),
      'mp_stack_id' => 
      array (
        'value' => '2',
      ),
      'feature_title_size' => 
      array (
        'value' => '12',
      ),
      'feature_text_size' => 
      array (
        'value' => '12',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '-35',
      ),
      'brick_min_below' => 
      array (
        'value' => '25',
      ),
    ),
    'brick_4' => 
    array (
      'brick_title' => 'Home_brick 4',
      'mp_stack_order' => 1030,
      '_edit_lock' => 
      array (
        'value' => '1469672069:3',
      ),
      '_edit_last' => 
      array (
        'value' => '3',
      ),
      'brick_min_height' => 
      array (
        'value' => '600',
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'brick_bg_image' => 
      array (
        'value' => 'living-room-690174.jpg',
        'attachment' => true,
      ),
      'mp_stack_id' => 
      array (
        'value' => '2',
      ),
      'brick_bg_image_opacity' => 
      array (
        'value' => '60',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#000000',
      ),
      'mp_stacks_parallax_on' => 
      array (
        'value' => 'mp_stacks_parallax_on',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'singletext',
      ),
      'mp_stacks_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#f2f2f2',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '70',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '65',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '50',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '50',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => 'Montserrat',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '700',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;IT ALL STARTS HERE&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#f2f2f2',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;Libero ante, sociis blandit amet, non vestibulum orci sem a a, tristique volutpat, diam nostra. Tempor hendrerit id cum fringilla, non eu eros, dapibus lectus a quis, duis ligula eget ac, enim suscipit phasellus urna fermentum.&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '12',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;[mp_button icon=&quot;&quot; icon_position=&quot;left&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;REACH OUT&quot; link=&quot;https://demo.mintplugins.com/church-plant/connect/#connect_brick-3&quot; btn_bg=&quot;show&quot; color=&quot;#00a79d&quot; hover_color=&quot;#f2f2f2&quot; text_color=&quot;#f2f2f2&quot; hover_text_color=&quot;#00a79d&quot; open_type=&quot;_self&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_min_below' => 
      array (
        'value' => '75',
      ),
      'brick_float_c1' => 
      array (
        'value' => 'left',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '75',
      ),
    ),
    'brick_5' => 
    array (
      'brick_title' => 'Home_brick 5',
      'mp_stack_order' => 1040,
      '_edit_lock' => 
      array (
        'value' => '1469554867:10',
      ),
      '_edit_last' => 
      array (
        'value' => '10',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'singletext',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'brick_no_borders' => 
      array (
        'value' => 'brick_no_borders',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#000000',
      ),
      'mp_stacks_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#f2f2f2',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '55',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '45',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '45',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '25',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;HEAR THE LATEST PREACH&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' => 
      array (
        'value' => '2',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'sermongrid',
      ),
      'sermongrid_taxonomy_terms' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'taxonomy_term' => 
            array (
              'value' => 'all',
              'attachment' => false,
            ),
            'taxonomy_bg_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_bg_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'backgroundColorAlpha' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_masonry' => 
      array (
        'value' => '',
      ),
      'sermongrid_isotope' => 
      array (
        'value' => '',
      ),
      'sermongrid_isotope_filter_groups' => 
      array (
        'value' => '""',
      ),
      'sermongrid_isotope_orderby_options' => 
      array (
        'value' => '""',
      ),
      'sermongrid_isotope_nav_btn_bg' => 
      array (
        'value' => 'sermongrid_isotope_nav_btn_bg',
      ),
      'sermongrid_isotope_nav_btn_text' => 
      array (
        'value' => 'sermongrid_isotope_nav_btn_text',
      ),
      'sermongrid_isotope_nav_btn_icons' => 
      array (
        'value' => 'sermongrid_isotope_nav_btn_icons',
      ),
      'sermongrid_featured_images_show' => 
      array (
        'value' => 'sermongrid_featured_images_show',
      ),
      'sermongrid_image_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_image_overlay_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '#000000',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'animation_length' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '50',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '#000000',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_title_show' => 
      array (
        'value' => '',
      ),
      'sermongrid_title_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_title_background_show' => 
      array (
        'value' => '',
      ),
      'sermongrid_date_show' => 
      array (
        'value' => '',
      ),
      'sermongrid_date_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_date_background_show' => 
      array (
        'value' => '',
      ),
      'sermongrid_excerpt_show' => 
      array (
        'value' => '',
      ),
      'sermongrid_excerpt_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_excerpt_background_show' => 
      array (
        'value' => '',
      ),
      'sermongrid_per_row' => 
      array (
        'value' => '4',
      ),
      'sermongrid_post_spacing' => 
      array (
        'value' => '1',
      ),
      'sermongrid_featured_images_width' => 
      array (
        'value' => '1000',
      ),
      'brick_max_width' => 
      array (
        'value' => '999999',
      ),
      'sermongrid_featured_images_height' => 
      array (
        'value' => '800',
      ),
      'sermongrid_title_placement' => 
      array (
        'value' => 'over_image_middle_centered',
      ),
      'sermongrid_date_placement' => 
      array (
        'value' => 'over_image_middle_centered',
      ),
      'sermongrid_date_color' => 
      array (
        'value' => '#ffffff',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '150',
      ),
      'brick_min_below' => 
      array (
        'value' => '10',
      ),
      'brick_min_below_c1' => 
      array (
        'value' => '75',
      ),
      'brick_overall_google_font' => 
      array (
        'value' => 'Raleway',
      ),
      'brick_overall_google_font_weight_style' => 
      array (
        'value' => '200',
      ),
      'brick_ct1_waypoint_animation_on' => 
      array (
        'value' => '',
      ),
      'ct1_waypoint_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_ct1_waypoint_animation_reverse_upon_out' => 
      array (
        'value' => '',
      ),
      'brick_ct1_mouseover_animation_on' => 
      array (
        'value' => '',
      ),
      'ct1_mouseover_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_ct2_waypoint_animation_on' => 
      array (
        'value' => '',
      ),
      'ct2_waypoint_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_ct2_waypoint_animation_reverse_upon_out' => 
      array (
        'value' => '',
      ),
      'brick_ct2_mouseover_animation_on' => 
      array (
        'value' => '',
      ),
      'ct2_mouseover_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_bg_waypoint_animation_on' => 
      array (
        'value' => '',
      ),
      'bg_waypoint_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_bg_waypoint_animation_reverse_upon_out' => 
      array (
        'value' => '',
      ),
      'brick_bg_mouseover_animation_on' => 
      array (
        'value' => '',
      ),
      'bg_mouseover_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_per_page' => 
      array (
        'value' => '4',
      ),
      'sermongrid_load_more_behaviour' => 
      array (
        'value' => 'none',
      ),
    ),
    'brick_6' => 
    array (
      'brick_title' => 'Home_brick 6',
      'mp_stack_order' => 1050,
      '_edit_lock' => 
      array (
        'value' => '1469554407:10',
      ),
      '_edit_last' => 
      array (
        'value' => '10',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'singletext',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'second_text',
      ),
      'mp_stacks_second_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_second_text_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_font_size' => 
            array (
              'value' => '12',
              'attachment' => false,
            ),
            'brick_second_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_paragraph_margin_bottom' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_second_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_second_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_second_text_google_font' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text_google_font_weight_style' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_second_text' => 
            array (
              'value' => '&lt;p class=&quot;p1&quot;&gt;&lt;span class=&quot;s1&quot;&gt;[mp_button icon=&quot;&quot; icon_position=&quot;left&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;SUBSCRIBE NOW&quot; link=&quot;https://demo.mintplugins.com/church-plant/ctc-sermons/feed/&quot; btn_bg=&quot;show&quot; color=&quot;#9e1f63&quot; hover_color=&quot;#f2f2f2&quot; text_color=&quot;#f2f2f2&quot; hover_text_color=&quot;#9e1f63&quot; open_type=&quot;_self&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/span&gt;&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#000000',
      ),
      'mp_stacks_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#f2f2f2',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '25',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '20',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => 'Raleway',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '200',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;SUBSCRIBE AND AUTOMATICALLY GET THE PODCAST EACH WEEK.&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' => 
      array (
        'value' => '2',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'brick_overall_google_font' => 
      array (
        'value' => '',
      ),
      'brick_overall_google_font_weight_style' => 
      array (
        'value' => '',
      ),
      'brick_min_below' => 
      array (
        'value' => '100',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '100',
      ),
      'brick_min_below_c1' => 
      array (
        'value' => '35',
      ),
    ),
  ),
);
		
		//Loop through each brick
		foreach( $template_array['stack_bricks'] as $brick_name => $brick_options ){
			
			//Loop through each meta option
			foreach( $brick_options as $meta_key => $meta_option ){
				
				//If this isn't the title or the order
				if ( $meta_key != 'brick_title' && $meta_key != 'mp_stack_order' ){
						
					//If this is a repeater
					if ( isset( $meta_option['value'] ) && is_array( $meta_option['value'] ) ){
						
						$fixed_repeaters = array();
						
						$repeat_counter = 0;
						
						//Loop thorugh each repeater
						foreach( $meta_option['value'] as $repeaters ){
							
							//Loop through each field in this repeater
							foreach( $repeaters as $field_key_id => $repeater_meta_option ){
								
								//If this is an attachment, set the url to be local to this plugin
								if ( isset( $repeater_meta_option['attachment'] ) && $repeater_meta_option['attachment'] ){
									
									//Check if this field contains any HTML img tags
									if ( strpos( $repeater_meta_option['value'], '&lt;p&gt;&lt;img' ) !== false ){
										
										//Get the URL in each img tag's "src" attribute
										$value_explode_results = explode( 'src=&quot;', $repeater_meta_option['value'] );
										
										$rebuilt_field_value = NULL;
																			
										//Loop through each exploded string
										if ( is_array( $value_explode_results ) ){
											foreach( $value_explode_results as $value_explode_result ){
																						
												//Get the image url
												$temp_explode_holder = explode( '&quot', $value_explode_result );
												$img_url = $temp_explode_holder[0];
												
												$repeater_meta_option['value'] = str_replace( 'src=&quot;' . $img_url, 'src=&quot;' . plugins_url( 'images/' . $img_url, __FILE__ ), $repeater_meta_option['value'] );
												
											}
										}
										
										$template_array['stack_bricks'][$brick_name][$meta_key]['value'][$repeat_counter][$field_key_id]['value'] = $repeater_meta_option['value'];
									}
									else{
									
										$template_array['stack_bricks'][$brick_name][$meta_key]['value'][$repeat_counter][$field_key_id]['value'] = plugins_url( 'images/' . $repeater_meta_option['value'], __FILE__ );
									}
									
								}
							}
							
							$repeat_counter = $repeat_counter + 1;
							
						}
					}
					
					//If this is not a repeater
					else{
						
						//If this is an attachment, set the url to be local to this plugin
						if ( isset( $meta_option['attachment'] ) && $meta_option['attachment'] ){
							
							//Check if this field contains any HTML img tags
							if ( strpos( $meta_option['value'], '&lt;p&gt;&lt;img' ) !== false ){
								
								//Get the URL in each img tag's "src" attribute
								$value_explode_results = explode( 'src=&quot;', $meta_option['value'] );
								
								$rebuilt_field_value = NULL;
																
								//Loop through each exploded string
								if ( is_array( $value_explode_results ) ){
									foreach( $value_explode_results as $value_explode_result ){
																				
										//Get the image url
										$temp_explode_holder = explode( '&quot', $value_explode_result );
										$img_url = $temp_explode_holder[0];
	
										$meta_option['value'] = str_replace( 'src=&quot;' . $img_url, 'src=&quot;' . plugins_url( 'images/' . $img_url, __FILE__ ), $meta_option['value'] );
										
									}
								}
								
								$template_array['stack_bricks'][$brick_name][$meta_key]['value'] = $meta_option['value'];
							}
							else{		
									
								$template_array['stack_bricks'][$brick_name][$meta_key]['value'] = plugins_url( 'images/' . $meta_option['value'], __FILE__ );
							}
						}
						
					}
				}
				
			}
			
		}
		
		return $template_array;
		
	}}