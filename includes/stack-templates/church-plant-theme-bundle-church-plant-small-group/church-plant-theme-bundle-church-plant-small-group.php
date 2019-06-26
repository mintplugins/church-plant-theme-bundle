<?php
		/**
	   	 * Add Small Group to the list of installed stack templates
	   	 *
	   	 * @since    1.0.0
	   	 * @link     http://mintplugins.com/doc/mp_stacks_templates_add_church_plant_theme_bundle_church_plant_small_group
	   	 * @see      function_name()
	   	 * @param    array $installed_templates See link for description.
	   	 * @return   array $installed_templates See link for description.
	   	 */
	   	function mp_stacks_templates_add_church_plant_theme_bundle_church_plant_small_group( $installed_templates ){

	   		$installed_templates['mp_stacks_church_plant_theme_bundle_church_plant_small_group_array'] = array(
	   			'template_slug' => 'church_plant_theme_bundle_church_plant_small_group',
	   			'template_title' => __( 'Small Group', 'church_plant_theme_bundle' ),
	   			'template_description' => __('The "Small Group" stack template included in the Church Plant Theme Bundle', 'church_plant_theme_bundle' ),
	   			'template_tags' => 'church',
	   			'template_preview_img' => '',
	   			'template_demo_url' => 'https://demo.mintplugins.com/church-plant/stack/church-plant-theme-bundle-church-plant-small-group',
	   		);

	   		return $installed_templates;

	   	}
	   	add_filter( 'mp_stacks_installed_templates', 'mp_stacks_templates_add_church_plant_theme_bundle_church_plant_small_group' );

		/**
		 * This function holds and returns the Small Group Template Array
		 *
		 * @since    1.0.0
		 * @link     http://mintplugins.com/doc/mp-stacks-stack-template-function
		 * @return   array The Stack Template Aray
		 */
		function mp_stacks_church_plant_theme_bundle_church_plant_small_group_array(){

			$template_array = array (
  'stack_title' => '',
  'stack_description' => 'Created using: Created using: Church Plant Theme Bundle\'s "Small Group" Stack.',
  'stack_bricks' => 
  array (
    'brick_1' => 
    array (
      'brick_title' => 'Navigation_brick (do not move)',
      'mp_stack_order' => 1000,
      '_edit_lock' => 
      array (
        'value' => '1467332973:10',
      ),
      '_edit_last' => 
      array (
        'value' => '10',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '0',
      ),
      'brick_min_below' => 
      array (
        'value' => '0',
      ),
      'brick_min_height' => 
      array (
        'value' => '100',
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#000000',
      ),
      'mp_stack_id' => 
      array (
        'value' => '34',
      ),
    ),
    'brick_2' => 
    array (
      'brick_title' => 'Bible Study_brick 1',
      'mp_stack_order' => 1010,
      '_edit_lock' => 
      array (
        'value' => '1469674084:10',
      ),
      '_edit_last' => 
      array (
        'value' => '10',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'singletext',
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'brick_bg_image' => 
      array (
        'value' => 'desiring-god.jpg',
        'attachment' => true,
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
              'value' => '55',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '55',
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
              'value' => '45',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '45',
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
              'value' => '&lt;p&gt;BIBLE STUDY&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          1 => 
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
              'value' => '&lt;p&gt;Lorem ipsum dolor sit amet, lobortis porta sodales lacus felis orci, id ultrices nunc diam, ultrices molestie, ante faucibus ridiculus vitae amet eros, cras in aptent cras. Pharetra nascetur labore ornare nec, sed vivamus ac vel. Lectus porttitor sociosqu ultricies vitae consequat. Scelerisque orci odio tellus auctor ipsum laoreet. Neque eleifend arcu interdum id. Malesuada metus urna augue lorem. Sit eget hic in eleifend consectetuer.&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' => 
      array (
        'value' => '34',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'brick_display_type' => 
      array (
        'value' => 'fill',
      ),
      'brick_bg_image_opacity' => 
      array (
        'value' => '30',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#000000',
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
      'brick_min_below' => 
      array (
        'value' => '75',
      ),
      'brick_min_height' => 
      array (
        'value' => '500',
      ),
      'brick_main_image' => 
      array (
        'value' => 'study-862994.jpg',
        'attachment' => true,
      ),
      'brick_main_image_max_width' => 
      array (
        'value' => '',
      ),
      'brick_max_width' => 
      array (
        'value' => '1200',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '75',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'forms',
      ),
      'brick_vertical_alignment_c2' => 
      array (
        'value' => 'top',
      ),
      'brick_float_c2' => 
      array (
        'value' => '',
      ),
      'brick_max_width_c2' => 
      array (
        'value' => '500',
      ),
      'features_per_row' => 
      array (
        'value' => '1',
      ),
      'feature_shadow_apply_to' => 
      array (
        'value' => '""',
      ),
      'feature_icon_size' => 
      array (
        'value' => '600',
      ),
      'feature_icon_stroke_apply_to' => 
      array (
        'value' => '["images"]',
      ),
      'feature_icon_stroke_size' => 
      array (
        'value' => '1',
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
              'value' => 'feature_image',
              'attachment' => false,
            ),
            'feature_icon' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'feature_image' => 
            array (
              'value' => 'kissing-couple-1209043.jpg',
              'attachment' => true,
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
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_vertical_alignment_c1' => 
      array (
        'value' => 'top',
      ),
      'brick_split_percentage' => 
      array (
        'value' => '50',
      ),
      'brick_max_width_c1' => 
      array (
        'value' => '700',
      ),
      'mp_stacks_forms_fields' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'field_title' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_description' => 
            array (
              'value' => 'I\'m interested in attending',
              'attachment' => false,
            ),
            'field_type' => 
            array (
              'value' => 'radio',
              'attachment' => false,
            ),
            'field_placeholder' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_taxonomy' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_select_values' => 
            array (
              'value' => 'Location One, Location Two, Location Three, Location Four',
              'attachment' => false,
            ),
            'field_width' => 
            array (
              'value' => '49',
              'attachment' => false,
            ),
            'field_placement' => 
            array (
              'value' => 'inline-block',
              'attachment' => false,
            ),
            'field_required' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'field_title' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_description' => 
            array (
              'value' => 'I would like to hear more about',
              'attachment' => false,
            ),
            'field_type' => 
            array (
              'value' => 'radio',
              'attachment' => false,
            ),
            'field_placeholder' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_taxonomy' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_select_values' => 
            array (
              'value' => 'Subject One, Subject Two, Subject Three, Subject Four',
              'attachment' => false,
            ),
            'field_width' => 
            array (
              'value' => '49',
              'attachment' => false,
            ),
            'field_placement' => 
            array (
              'value' => 'inline-block',
              'attachment' => false,
            ),
            'field_required' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'field_title' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_description' => 
            array (
              'value' => 'Name',
              'attachment' => false,
            ),
            'field_type' => 
            array (
              'value' => 'textbox',
              'attachment' => false,
            ),
            'field_required' => 
            array (
              'value' => 'mp_stacks_forms_fields[2][field_required]',
              'attachment' => false,
            ),
            'field_placeholder' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_taxonomy' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_select_values' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_width' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'field_placement' => 
            array (
              'value' => 'table',
              'attachment' => false,
            ),
          ),
          3 => 
          array (
            'field_title' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_description' => 
            array (
              'value' => 'Email Address',
              'attachment' => false,
            ),
            'field_type' => 
            array (
              'value' => 'email',
              'attachment' => false,
            ),
            'field_required' => 
            array (
              'value' => 'mp_stacks_forms_fields[3][field_required]',
              'attachment' => false,
            ),
            'field_placeholder' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_taxonomy' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_select_values' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_width' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'field_placement' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
          4 => 
          array (
            'field_title' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_description' => 
            array (
              'value' => 'Phone Number',
              'attachment' => false,
            ),
            'field_type' => 
            array (
              'value' => 'textbox',
              'attachment' => false,
            ),
            'field_placeholder' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_taxonomy' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_select_values' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_width' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'field_placement' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_required' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stacks_forms_submission_actions' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'mp_stacks_forms_action' => 
            array (
              'value' => 'email',
              'attachment' => false,
            ),
            'mp_stacks_forms_emails' => 
            array (
              'value' => 'smallgroups@churchplant.com',
              'attachment' => false,
            ),
            'email_subject_line' => 
            array (
              'value' => 'Form submitted from https://demo.mintplugins.com/church-plant',
              'attachment' => false,
            ),
            'mp_stacks_forms_redirect_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'field_required' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stacks_forms_field_titles_font_color' => 
      array (
        'value' => '#ffffff',
      ),
      'mp_stacks_forms_field_desc_font_color' => 
      array (
        'value' => '#ffffff',
      ),
      'mp_stacks_forms_field_text_alignment' => 
      array (
        'value' => 'center',
      ),
      'brick_min_below_c1' => 
      array (
        'value' => '50',
      ),
      'mp_stacks_forms_field_spacing' => 
      array (
        'value' => '30',
      ),
      'mp_stacks_forms_submit_button_text' => 
      array (
        'value' => 'SUBMIT',
      ),
      'mp_stacks_forms_submit_button_text_color' => 
      array (
        'value' => '#000000',
      ),
      'mp_stacks_forms_submit_button_background_color' => 
      array (
        'value' => '#ffffff',
      ),
      'mp_stacks_forms_submit_button_hover_text_color' => 
      array (
        'value' => '#ffffff',
      ),
      'mp_stacks_forms_submit_button_hover_background_color' => 
      array (
        'value' => '#000000',
      ),
      'mp_stacks_forms_submission_success_message' => 
      array (
        'value' => 'Thank you for submitting these details. Someone from the church will contact you shortly.',
      ),
      'mp_stacks_parallax_on' => 
      array (
        'value' => 'mp_stacks_parallax_on',
      ),
    ),
  ),
);

            // Set a standard for the descriptions of Stack Templates in Theme Bundles
            $template_array['stack_description'] = __('The "Small Group" stack template included in the Church Plant Theme Bundle', 'church_plant_theme_bundle' );

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