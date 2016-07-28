<?php 
/**
 * MP Stacks Template Blog
 *
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package     MP Stacks Template Blog
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
	 * Add Blog to the list of installed stack templates
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp_stacks_templates_add_church_plant_blog
	 * @see      function_name()
	 * @param    array $installed_templates See link for description.
	 * @return   array $installed_templates See link for description.
	 */
	function mp_stacks_templates_add_church_plant_blog( $installed_templates ){ 
		
		$installed_templates['mp_stacks_church_plant_blog_array'] = array(
			'template_slug' => 'church_plant_blog',
			'template_title' => __( 'Blog', 'church_plant_theme_bundle' ),
			'template_description' => __('Created using: Church Plant Theme Bundle\'s "Blog" Stack.', 'church_plant_theme_bundle' ),
			'template_tags' => 'church, blog',
			'template_preview_img' => plugins_url( '/images/preview_thumbnail.jpg', __FILE__ ),
			'template_demo_url' => 'https://demo.mintplugins.com/church-plant/blog/',
		);
		
		return $installed_templates;
	
	}
	add_filter( 'mp_stacks_installed_templates', 'mp_stacks_templates_add_church_plant_blog' );
	
	/**
	 * Add This Stack Template to the list of Default Stacks to create when the parent Theme Bundle is activated.
	 *
	 * @since    1.0.0
	 * @link     https://mintplugins.com/doc/mp_stacks_templates_church_plant_blog_to_default_stacks
	 * @see      function_name()
	 * @param    array $default_stacks_to_create See link for description.
	 * @return   array $default_stacks_to_create See link for description.
	 */
	function mp_stacks_templates_church_plant_blog_to_default_stacks( $default_stacks_to_create ){ 
				
		$default_stacks_to_create['page']['church_plant_blog'] = array( 'title' => 'Blog','add_to_primary_menu' => 'true', );
		
		return $default_stacks_to_create;
	
	}
	add_filter( 'church_plant_theme_bundle_default_stacks', 'mp_stacks_templates_church_plant_blog_to_default_stacks' );
	
	/**
	 * This function holds and returns the Blog Template Array
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp-stacks-stack-template-function
	 * @return   array The Stack Template Aray
	 */
	function mp_stacks_church_plant_blog_array(){ 
	
		$template_array = array (
  'stack_title' => '',
  'stack_description' => 'Created using: Created using: Church Plant Theme Bundle\'s "Blog" Stack.',
  'stack_bricks' => 
  array (
    'brick_1' => 
    array (
      'brick_title' => 'Blog_brick 1',
      'mp_stack_order' => 1000,
      '_edit_lock' => 
      array (
        'value' => '1467414108:10',
      ),
      '_edit_last' => 
      array (
        'value' => '10',
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'mp_stack_id' => 
      array (
        'value' => '22',
      ),
      'brick_bg_image' => 
      array (
        'value' => 'blog.jpg',
        'attachment' => true,
      ),
      'brick_display_type' => 
      array (
        'value' => 'fill',
      ),
      'brick_bg_image_opacity' => 
      array (
        'value' => '50',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#000000',
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
              'value' => '&lt;p&gt;OUR STORIES&lt;/p&gt;
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
              'value' => '16',
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
              'value' => '&lt;p&gt;Convallis eget aenean at, libero quisque quisque mollis proin fusce, sed in seit.&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'brick_min_height' => 
      array (
        'value' => '800',
      ),
    ),
    'brick_2' => 
    array (
      'brick_title' => 'Blog Archive',
      'mp_stack_order' => 1010,
      '_edit_lock' => 
      array (
        'value' => '1467330008:10',
      ),
      '_edit_last' => 
      array (
        'value' => '10',
      ),
      'mp_stack_id' => 
      array (
        'value' => '22',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'postgrid',
      ),
      'brick_no_borders' => 
      array (
        'value' => 'brick_no_borders',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'none',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'postgrid_taxonomy_terms' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'taxonomy_term' => 
            array (
              'value' => '23',
              'attachment' => false,
            ),
            'taxonomy_bg_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'postgrid_bg_animation_keyframes' => 
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
      'postgrid_masonry' => 
      array (
        'value' => '',
      ),
      'postgrid_isotope' => 
      array (
        'value' => '',
      ),
      'postgrid_isotope_filter_groups' => 
      array (
        'value' => '""',
      ),
      'postgrid_isotope_orderby_options' => 
      array (
        'value' => '""',
      ),
      'postgrid_isotope_nav_btn_bg' => 
      array (
        'value' => 'postgrid_isotope_nav_btn_bg',
      ),
      'postgrid_isotope_nav_btn_text' => 
      array (
        'value' => 'postgrid_isotope_nav_btn_text',
      ),
      'postgrid_isotope_nav_btn_icons' => 
      array (
        'value' => 'postgrid_isotope_nav_btn_icons',
      ),
      'postgrid_featured_images_show' => 
      array (
        'value' => 'postgrid_featured_images_show',
      ),
      'postgrid_image_animation_keyframes' => 
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
      'postgrid_image_overlay_animation_keyframes' => 
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
      'postgrid_title_show' => 
      array (
        'value' => 'postgrid_title_show',
      ),
      'postgrid_title_animation_keyframes' => 
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
      'postgrid_title_background_show' => 
      array (
        'value' => '',
      ),
      'postgrid_date_show' => 
      array (
        'value' => 'postgrid_date_show',
      ),
      'postgrid_date_animation_keyframes' => 
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
      'postgrid_date_background_show' => 
      array (
        'value' => '',
      ),
      'postgrid_excerpt_show' => 
      array (
        'value' => 'postgrid_excerpt_show',
      ),
      'postgrid_excerpt_animation_keyframes' => 
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
      'postgrid_excerpt_background_show' => 
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
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '35',
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
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'postgrid_per_row' => 
      array (
        'value' => '3',
      ),
      'postgrid_per_page' => 
      array (
        'value' => '12',
      ),
      'postgrid_featured_images_width' => 
      array (
        'value' => '800',
      ),
      'postgrid_featured_images_height' => 
      array (
        'value' => '533',
      ),
      'postgrid_feat_img_max_width' => 
      array (
        'value' => '700',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#eaeaea',
      ),
      'postgrid_title_placement' => 
      array (
        'value' => 'below_image_left',
      ),
      'brick_max_width' => 
      array (
        'value' => '1400',
      ),
      'postgrid_title_lineheight' => 
      array (
        'value' => '22',
      ),
      'postgrid_title_google_font' => 
      array (
        'value' => 'Raleway',
      ),
      'postgrid_title_google_font_weight_style' => 
      array (
        'value' => '700',
      ),
      'postgrid_excerpt_placement' => 
      array (
        'value' => 'below_image_left',
      ),
      'postgrid_excerpt_size' => 
      array (
        'value' => '14',
      ),
      'postgrid_excerpt_lineheight' => 
      array (
        'value' => '20',
      ),
      'postgrid_post_inner_margin' => 
      array (
        'value' => '0',
      ),
      'postgrid_post_below_image_area_inner_margin' => 
      array (
        'value' => '20',
      ),
      'postgrid_excerpt_word_limit' => 
      array (
        'value' => '20',
      ),
      'postgrid_date_placement' => 
      array (
        'value' => 'below_image_left',
      ),
      'postgrid_title_color' => 
      array (
        'value' => '#1381c1',
      ),
      'postgrid_title_size' => 
      array (
        'value' => '22',
      ),
      'postgrid_date_size' => 
      array (
        'value' => '12',
      ),
      'brick_split_percentage' => 
      array (
        'value' => '70',
      ),
      'postgrid_excerpt_color' => 
      array (
        'value' => '#4c4c4c',
      ),
      'postgrid_excerpt_google_font' => 
      array (
        'value' => 'Raleway',
      ),
      'postgrid_excerpt_google_font_weight_style' => 
      array (
        'value' => '300',
      ),
      'postgrid_date_color' => 
      array (
        'value' => '#4c4c4c',
      ),
      'postgrid_load_more_behaviour' => 
      array (
        'value' => 'ajax_load_more',
      ),
      'postgrid_load_more_float' => 
      array (
        'value' => 'center',
      ),
      'postgrid_load_more_button_text' => 
      array (
        'value' => 'LOAD MORE',
      ),
      'postgrid_load_more_button_color' => 
      array (
        'value' => '#515151',
      ),
      'postgrid_load_more_button_text_color' => 
      array (
        'value' => '#ffffff',
      ),
      'postgrid_load_more_button_color_mouse_over' => 
      array (
        'value' => '#003149',
      ),
      'postgrid_load_more_button_text_color_mouse_over' => 
      array (
        'value' => '#ffffff',
      ),
      'brick_min_below' => 
      array (
        'value' => '100',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '100',
      ),
      'widgets_link_underlines' => 
      array (
        'value' => '',
      ),
      'mp_stacks_widgets_brick_sidebar_id' => 
      array (
        'value' => 'mp_stacks_widgets_sidebar_id_' . time(),
      ),
      'brick_vertical_alignment_c2' => 
      array (
        'value' => 'top',
      ),
      'widgets_per_row' => 
      array (
        'value' => '1',
      ),
      'widgets_title_size' => 
      array (
        'value' => '14',
      ),
      'widgets_title_bottom_margin' => 
      array (
        'value' => '10',
      ),
      'widgets_text_size' => 
      array (
        'value' => '14',
      ),
      'widgets_list_item_spacing' => 
      array (
        'value' => '0',
      ),
      'widgets_text_bottom_margin' => 
      array (
        'value' => '',
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