<?php
		/**
	   	 * Add Sermons For Footer to the list of installed stack templates
	   	 *
	   	 * @since    1.0.0
	   	 * @link     http://mintplugins.com/doc/mp_stacks_templates_add_church_plant_theme_bundle_church_plant_sermons_for_footer
	   	 * @see      function_name()
	   	 * @param    array $installed_templates See link for description.
	   	 * @return   array $installed_templates See link for description.
	   	 */
	   	function mp_stacks_templates_add_church_plant_theme_bundle_church_plant_sermons_for_footer( $installed_templates ){

	   		$installed_templates['mp_stacks_church_plant_theme_bundle_church_plant_sermons_for_footer_array'] = array(
	   			'template_slug' => 'church_plant_theme_bundle_church_plant_sermons_for_footer',
	   			'template_title' => __( 'Sermons For Footer', 'church_plant_theme_bundle' ),
	   			'template_description' => __('The "Sermons For Footer" stack template included in the Church Plant Theme Bundle', 'church_plant_theme_bundle' ),
	   			'template_tags' => 'church',
	   			'template_preview_img' => '',
	   			'template_demo_url' => 'https://demo.mintplugins.com/church-plant/stack/church-plant-theme-bundle-church-plant-sermons-for-footer',
	   		);

	   		return $installed_templates;

	   	}
	   	add_filter( 'mp_stacks_installed_templates', 'mp_stacks_templates_add_church_plant_theme_bundle_church_plant_sermons_for_footer' );

		/**
		 * This function holds and returns the Sermons For Footer Template Array
		 *
		 * @since    1.0.0
		 * @link     http://mintplugins.com/doc/mp-stacks-stack-template-function
		 * @return   array The Stack Template Aray
		 */
		function mp_stacks_church_plant_theme_bundle_church_plant_sermons_for_footer_array(){

			$template_array = array (
  'stack_title' => '',
  'stack_description' => 'Created using: Created using: Church Plant Theme Bundle\'s "Sermons For Footer" Stack. IMPORTANT: This stack is not to be used as your Footer stack. It is designed to be used exclusively WITHIN the Footer stack.',
  'stack_bricks' => 
  array (
    'brick_1' => 
    array (
      'brick_title' => 'Footer (sermons)',
      'mp_stack_order' => 1000,
      '_edit_lock' => 
      array (
        'value' => '1467391489:10',
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
        'value' => 'sermongrid',
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
              'value' => '',
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
        'value' => '',
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
      'sermongrid_per_row' => 
      array (
        'value' => '1',
      ),
      'sermongrid_per_page' => 
      array (
        'value' => '3',
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
      'sermongrid_featured_images_height' => 
      array (
        'value' => '333',
      ),
      'sermongrid_feat_img_max_width' => 
      array (
        'value' => '60',
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
              'value' => '#FFF',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'sermongrid_title_show' => 
      array (
        'value' => '',
      ),
      'sermongrid_title_placement' => 
      array (
        'value' => 'below_image_centered',
      ),
      'sermongrid_title_size' => 
      array (
        'value' => '10',
      ),
      'sermongrid_title_lineheight' => 
      array (
        'value' => '10',
      ),
      'sermongrid_title_google_font' => 
      array (
        'value' => 'Raleway',
      ),
      'sermongrid_title_google_font_weight_style' => 
      array (
        'value' => '200',
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
        'value' => 'sermongrid_date_show',
      ),
      'sermongrid_date_placement' => 
      array (
        'value' => 'below_image_centered',
      ),
      'sermongrid_date_color' => 
      array (
        'value' => '#ffffff',
      ),
      'sermongrid_date_size' => 
      array (
        'value' => '10',
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
      'brick_no_borders' => 
      array (
        'value' => 'brick_no_borders',
      ),
      'mp_stack_id' => 
      array (
        'value' => '29',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#1c1c1c',
      ),
      'sermongrid_title_color' => 
      array (
        'value' => '#ffffff',
      ),
      'sermongrid_load_more_behaviour' => 
      array (
        'value' => 'none',
      ),
      'postgrid_per_row' => 
      array (
        'value' => '2',
      ),
      'postgrid_per_page' => 
      array (
        'value' => '4',
      ),
      'postgrid_featured_images_height' => 
      array (
        'value' => '333',
      ),
      'postgrid_feat_img_max_width' => 
      array (
        'value' => '75',
      ),
      'postgrid_title_size' => 
      array (
        'value' => '12',
      ),
      'postgrid_title_lineheight' => 
      array (
        'value' => '12',
      ),
      'postgrid_title_google_font' => 
      array (
        'value' => 'Raleway',
      ),
      'postgrid_title_google_font_weight_style' => 
      array (
        'value' => '200',
      ),
      'postgrid_date_placement' => 
      array (
        'value' => 'below_image_centered',
      ),
      'postgrid_date_color' => 
      array (
        'value' => '#ffffff',
      ),
      'postgrid_date_size' => 
      array (
        'value' => '8',
      ),
      'postgrid_load_more_behaviour' => 
      array (
        'value' => 'none',
      ),
      'postgrid_title_placement' => 
      array (
        'value' => 'below_image_centered',
      ),
      'postgrid_title_color' => 
      array (
        'value' => '#ffffff',
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
              'value' => '&lt;p&gt;RECENT SERMONS&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_min_above_below' => 
      array (
        'value' => '0',
      ),
      'brick_float_c1' => 
      array (
        'value' => 'left',
      ),
      'brick_float_c2' => 
      array (
        'value' => 'left',
      ),
      'brick_max_width_c1' => 
      array (
        'value' => '',
      ),
      'brick_max_width_c2' => 
      array (
        'value' => '',
      ),
      'sermongrid_post_spacing' => 
      array (
        'value' => '10',
      ),
      'sermongrid_featured_images_inner_margin' => 
      array (
        'value' => '20',
      ),
      'sermongrid_date_spacing' => 
      array (
        'value' => '10',
      ),
      'sermongrid_date_google_font' => 
      array (
        'value' => 'Raleway',
      ),
      'sermongrid_date_google_font_weight_style' => 
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
      'brick_vertical_alignment_c1' => 
      array (
        'value' => 'top',
      ),
      'brick_vertical_alignment_c2' => 
      array (
        'value' => 'top',
      ),
      'brick_min_above_c2' => 
      array (
        'value' => '-10',
      ),
    ),
  ),
);

            // Set a standard for the descriptions of Stack Templates in Theme Bundles
            $template_array['stack_description'] = __('The "Sermons For Footer" stack template included in the Church Plant Theme Bundle', 'church_plant_theme_bundle' );

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

													$repeater_meta_option['value'] = str_replace( 'src=&quot;' . $img_url, 'src=&quot;' . plugins_url( 'attachments/' . $img_url, dirname( dirname( __FILE__ ) ) ), $repeater_meta_option['value'] );

												}
											}

											$template_array['stack_bricks'][$brick_name][$meta_key]['value'][$repeat_counter][$field_key_id]['value'] = $repeater_meta_option['value'];
										}
										else{

											$template_array['stack_bricks'][$brick_name][$meta_key]['value'][$repeat_counter][$field_key_id]['value'] = plugins_url( 'attachments/' . $repeater_meta_option['value'], dirname( dirname( __FILE__ ) ) );
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

											$meta_option['value'] = str_replace( 'src=&quot;' . $img_url, 'src=&quot;' . plugins_url( 'attachments/' . $img_url, dirname( dirname( __FILE__ ) ) ), $meta_option['value'] );

										}
									}

									$template_array['stack_bricks'][$brick_name][$meta_key]['value'] = $meta_option['value'];
								}
								else{

									$template_array['stack_bricks'][$brick_name][$meta_key]['value'] = plugins_url( 'attachments/' . $meta_option['value'], dirname( dirname( __FILE__ ) ) );
								}
							}

						}
					}

				}

			}

			return $template_array;

		}