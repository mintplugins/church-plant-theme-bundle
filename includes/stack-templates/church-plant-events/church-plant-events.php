<?php 
/**
 * MP Stacks Template Events
 *
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package     MP Stacks Template Events
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
	 * Add Events to the list of installed stack templates
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp_stacks_templates_add_church_plant_events
	 * @see      function_name()
	 * @param    array $installed_templates See link for description.
	 * @return   array $installed_templates See link for description.
	 */
	function mp_stacks_templates_add_church_plant_events( $installed_templates ){ 
		
		$installed_templates['mp_stacks_church_plant_events_array'] = array(
			'template_slug' => 'church_plant_events',
			'template_title' => __( 'Events', 'church_plant_theme_bundle' ),
			'template_description' => __('Created using: Church Plant Theme Bundle\'s "Events" Stack.', 'church_plant_theme_bundle' ),
			'template_tags' => 'church, events',
			'template_preview_img' => plugins_url( '/images/preview_thumbnail.jpg', __FILE__ ),
			'template_demo_url' => 'https://demo.mintplugins.com/church-plant/events/',
		);
		
		return $installed_templates;
	
	}
	add_filter( 'mp_stacks_installed_templates', 'mp_stacks_templates_add_church_plant_events' );
	
	/**
	 * Add This Stack Template to the list of Default Stacks to create when the parent Theme Bundle is activated.
	 *
	 * @since    1.0.0
	 * @link     https://mintplugins.com/doc/mp_stacks_templates_church_plant_events_to_default_stacks
	 * @see      function_name()
	 * @param    array $default_stacks_to_create See link for description.
	 * @return   array $default_stacks_to_create See link for description.
	 */
	function mp_stacks_templates_church_plant_events_to_default_stacks( $default_stacks_to_create ){ 
				
		$default_stacks_to_create['page']['church_plant_events'] = array( 'title' => 'Events','add_to_primary_menu' => 'true', );
		
		return $default_stacks_to_create;
	
	}
	add_filter( 'church_plant_theme_bundle_default_stacks', 'mp_stacks_templates_church_plant_events_to_default_stacks' );
	
	/**
	 * This function holds and returns the Events Template Array
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp-stacks-stack-template-function
	 * @return   array The Stack Template Aray
	 */
	function mp_stacks_church_plant_events_array(){ 
	
		$template_array = array (
  'stack_title' => '',
  'stack_description' => 'Created using: Created using: Church Plant Theme Bundle\'s "Events" Stack.',
  'stack_bricks' => 
  array (
    'brick_1' => 
    array (
      'brick_title' => 'Events_brick 1',
      'mp_stack_order' => 1000,
      '_edit_lock' => 
      array (
        'value' => '1467414122:10',
      ),
      '_edit_last' => 
      array (
        'value' => '10',
      ),
      'brick_min_height' => 
      array (
        'value' => '800',
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'brick_bg_image' => 
      array (
        'value' => 'events2.jpg',
        'attachment' => true,
      ),
      'brick_display_type' => 
      array (
        'value' => 'fill',
      ),
      'mp_stack_id' => 
      array (
        'value' => '7',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'singletext',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
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
              'value' => '&lt;p&gt;GOINGS ON&lt;/p&gt;
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
              'value' => '&lt;p&gt;Morbi at iaculis maecenas scelerisque posuere laoreet, nullam sit vitae eu, gravida nonummy quam.&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
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
    ),
    'brick_2' => 
    array (
      'brick_title' => 'Events_ brick 2',
      'mp_stack_order' => 1010,
      '_edit_lock' => 
      array (
        'value' => '1467415357:10',
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
        'value' => 'eventgrid',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'eventgrid_taxonomy_terms' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'taxonomy_term' => 
            array (
              'value' => 'all_mp_event',
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
      'eventgrid_bg_animation_keyframes' => 
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
      'eventgrid_masonry' => 
      array (
        'value' => '',
      ),
      'eventgrid_isotope' => 
      array (
        'value' => '',
      ),
      'eventgrid_isotope_filter_groups' => 
      array (
        'value' => '""',
      ),
      'eventgrid_isotope_nav_btn_bg' => 
      array (
        'value' => 'eventgrid_isotope_nav_btn_bg',
      ),
      'eventgrid_isotope_nav_btn_text' => 
      array (
        'value' => 'eventgrid_isotope_nav_btn_text',
      ),
      'eventgrid_isotope_nav_btn_icons' => 
      array (
        'value' => 'eventgrid_isotope_nav_btn_icons',
      ),
      'eventgrid_featured_images_show' => 
      array (
        'value' => 'eventgrid_featured_images_show',
      ),
      'eventgrid_image_animation_keyframes' => 
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
      'eventgrid_image_overlay_animation_keyframes' => 
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
              'value' => '#FFF',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'eventgrid_title_show' => 
      array (
        'value' => 'eventgrid_title_show',
      ),
      'eventgrid_title_animation_keyframes' => 
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
      'eventgrid_title_background_show' => 
      array (
        'value' => '',
      ),
      'eventgrid_date_show' => 
      array (
        'value' => 'eventgrid_date_show',
      ),
      'eventgrid_date_animation_keyframes' => 
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
          1 => 
          array (
            'animation_length' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'eventgrid_date_background_show' => 
      array (
        'value' => 'eventgrid_date_background_show',
      ),
      'eventgrid_excerpt_show' => 
      array (
        'value' => 'eventgrid_excerpt_show',
      ),
      'eventgrid_excerpt_animation_keyframes' => 
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
      'eventgrid_excerpt_background_show' => 
      array (
        'value' => '',
      ),
      'brick_no_borders' => 
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
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '50',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '50',
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
              'value' => '40',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '40',
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
              'value' => '&lt;p&gt;UPCOMING EVENTS&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' => 
      array (
        'value' => '7',
      ),
      'brick_min_height' => 
      array (
        'value' => '500',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#000000',
      ),
      'eventgrid_per_row' => 
      array (
        'value' => '4',
      ),
      'eventgrid_per_page' => 
      array (
        'value' => '8',
      ),
      'eventgrid_title_placement' => 
      array (
        'value' => 'below_image_centered',
      ),
      'eventgrid_title_color' => 
      array (
        'value' => '#ffffff',
      ),
      'eventgrid_title_google_font' => 
      array (
        'value' => 'Montserrat',
      ),
      'eventgrid_title_google_font_weight_style' => 
      array (
        'value' => '100',
      ),
      'eventgrid_excerpt_color' => 
      array (
        'value' => '#ffffff',
      ),
      'eventgrid_excerpt_placement' => 
      array (
        'value' => 'below_image_centered',
      ),
      'eventgrid_excerpt_size' => 
      array (
        'value' => '14',
      ),
      'eventgrid_excerpt_lineheight' => 
      array (
        'value' => '16',
      ),
      'brick_max_width' => 
      array (
        'value' => '1400',
      ),
      'eventgrid_date_placement' => 
      array (
        'value' => 'over_image_top_right',
      ),
      'eventgrid_date_size' => 
      array (
        'value' => '8',
      ),
      'eventgrid_date_background_padding' => 
      array (
        'value' => '2',
      ),
      'eventgrid_post_spacing' => 
      array (
        'value' => '25',
      ),
      'eventgrid_featured_images_height' => 
      array (
        'value' => '333',
      ),
      'eventgrid_title_size' => 
      array (
        'value' => '20',
      ),
      'eventgrid_title_lineheight' => 
      array (
        'value' => '20',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '75',
      ),
      'eventgrid_excerpt_google_font' => 
      array (
        'value' => 'Raleway',
      ),
      'eventgrid_excerpt_google_font_weight_style' => 
      array (
        'value' => '200',
      ),
      'brick_min_below' => 
      array (
        'value' => '100',
      ),
      'brick_min_below_c1' => 
      array (
        'value' => '50',
      ),
      'eventgrid_load_more_button_color' => 
      array (
        'value' => '#dd1193',
      ),
      'eventgrid_load_more_button_text_color' => 
      array (
        'value' => '#ffffff',
      ),
      'eventgrid_load_more_button_color_mouse_over' => 
      array (
        'value' => '#ffffff',
      ),
      'eventgrid_load_more_button_text_color_mouse_over' => 
      array (
        'value' => '#dd1193',
      ),
      'eventgrid_load_more_button_text' => 
      array (
        'value' => 'More Events',
      ),
    ),
    'brick_3' => 
    array (
      'brick_title' => 'Events_ brick 3',
      'mp_stack_order' => 1020,
      '_edit_lock' => 
      array (
        'value' => '1467415404:10',
      ),
      '_edit_last' => 
      array (
        'value' => '10',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'slider',
      ),
      'mp_stacks_slider_images' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'mp_stacks_slider_image_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_stacks_slider_video_url' => 
            array (
              'value' => '&lt;iframe src=&quot;https://player.vimeo.com/video/163714380?title=0&amp;byline=0&amp;portrait=0&quot; width=&quot;2000&quot; height=&quot;1125&quot; frameborder=&quot;0&quot; webkitallowfullscreen mozallowfullscreen allowfullscreen&gt;&lt;/iframe&gt;',
              'attachment' => false,
            ),
            'mp_stacks_slider_image_link_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_stacks_slider_image_url_open_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_slider_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_slider_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'mp_stacks_slider_image_url' => 
            array (
              'value' => 'event-slide-1.jpg',
              'attachment' => true,
            ),
            'mp_stacks_slider_video_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_stacks_slider_image_link_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_stacks_slider_image_url_open_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_slider_lightbox_width' => 
            array (
              'value' => '640',
              'attachment' => false,
            ),
            'mp_slider_lightbox_height' => 
            array (
              'value' => '360',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'mp_stacks_slider_image_url' => 
            array (
              'value' => 'event-slider-3-1.jpg',
              'attachment' => true,
            ),
            'mp_stacks_slider_video_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_stacks_slider_image_link_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_stacks_slider_image_url_open_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_slider_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_slider_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
          3 => 
          array (
            'mp_stacks_slider_image_url' => 
            array (
              'value' => 'event-slider-2.jpg',
              'attachment' => true,
            ),
            'mp_stacks_slider_video_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_stacks_slider_image_link_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_stacks_slider_image_url_open_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_slider_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'mp_slider_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_no_borders' => 
      array (
        'value' => 'brick_no_borders',
      ),
      'mp_stack_id' => 
      array (
        'value' => '7',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'brick_max_width' => 
      array (
        'value' => '9999999',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '0',
      ),
      'brick_min_below' => 
      array (
        'value' => '0',
      ),
      'mp_stacks_slider_width' => 
      array (
        'value' => '2000',
      ),
      'mp_stacks_slider_height' => 
      array (
        'value' => '1125',
      ),
      'mp_stacks_show_nav' => 
      array (
        'value' => 'top_center_inside',
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