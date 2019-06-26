<?php
		/**
	   	 * Add About to the list of installed stack templates
	   	 *
	   	 * @since    1.0.0
	   	 * @link     http://mintplugins.com/doc/mp_stacks_templates_add_church_plant_theme_bundle_church_plant_about
	   	 * @see      function_name()
	   	 * @param    array $installed_templates See link for description.
	   	 * @return   array $installed_templates See link for description.
	   	 */
	   	function mp_stacks_templates_add_church_plant_theme_bundle_church_plant_about( $installed_templates ){

	   		$installed_templates['mp_stacks_church_plant_theme_bundle_church_plant_about_array'] = array(
	   			'template_slug' => 'church_plant_theme_bundle_church_plant_about',
	   			'template_title' => __( 'About', 'church_plant_theme_bundle' ),
	   			'template_description' => __('The "About" stack template included in the Church Plant Theme Bundle', 'church_plant_theme_bundle' ),
	   			'template_tags' => 'church',
	   			'template_preview_img' => '',
	   			'template_demo_url' => 'https://demo.mintplugins.com/church-plant/stack/church-plant-theme-bundle-church-plant-about',
	   		);

	   		return $installed_templates;

	   	}
	   	add_filter( 'mp_stacks_installed_templates', 'mp_stacks_templates_add_church_plant_theme_bundle_church_plant_about' );

		/**
		 * This function holds and returns the About Template Array
		 *
		 * @since    1.0.0
		 * @link     http://mintplugins.com/doc/mp-stacks-stack-template-function
		 * @return   array The Stack Template Aray
		 */
		function mp_stacks_church_plant_theme_bundle_church_plant_about_array(){

			$template_array = array (
  'stack_title' => '',
  'stack_description' => 'Created using: Created using: Church Plant Theme Bundle\'s "About" Stack.',
  'stack_bricks' => 
  array (
    'brick_1' => 
    array (
      'brick_title' => 'About_brick 1',
      'mp_stack_order' => 1000,
      '_edit_lock' => 
      array (
        'value' => '1469672166:10',
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
        'value' => 'about-1.jpg',
        'attachment' => true,
      ),
      'mp_stack_id' => 
      array (
        'value' => '4',
      ),
      'brick_bg_image_opacity' => 
      array (
        'value' => '70',
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
              'value' => '&lt;p&gt;OUR STORY&lt;/p&gt;
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
              'value' => '&lt;p&gt;Dolor sit amet, fringilla leo libero integer ut, elementum maecenas mi amet commodo pellentesque.&lt;/p&gt;
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
      'brick_second_content_type' => 
      array (
        'value' => 'none',
      ),
      'mp_stacks_parallax_on' => 
      array (
        'value' => 'mp_stacks_parallax_on',
      ),
      'brick_display_type' => 
      array (
        'value' => 'fill',
      ),
      'brick_max_width' => 
      array (
        'value' => '1000',
      ),
      'brick_float_c1' => 
      array (
        'value' => 'center',
      ),
      'brick_split_percentage' => 
      array (
        'value' => '50',
      ),
      'brick_max_width_c1' => 
      array (
        'value' => '',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '50',
      ),
    ),
    'brick_2' => 
    array (
      'brick_title' => 'About_brick 2',
      'mp_stack_order' => 1010,
      '_edit_lock' => 
      array (
        'value' => '1478650168:10',
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
        'value' => '4',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'singletext',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'linkgrid_links_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => 'https://demo.mintplugins.com/church-plant/bible-study/',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_width' => 
            array (
              'value' => '640',
              'attachment' => false,
            ),
            'linkgrid_lightbox_height' => 
            array (
              'value' => '360',
              'attachment' => false,
            ),
            'linkgrid_link_image' => 
            array (
              'value' => 'study-862994.jpg',
              'attachment' => true,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'BIBLE STUDY',
              'attachment' => false,
            ),
            'linkgrid_link_description' => 
            array (
              'value' => 'Lorem ipsum dolor sit amet, dictum pede ut ut, nibh libero nullam vestibulum libero proin, dui porttitor cubilia nibh. Varius morbi ut fermentum ac, lobortis diam nunc vivamus pede, ipsum officia leo dictum.',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => 'https://demo.mintplugins.com/church-plant/youth-group/',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_image' => 
            array (
              'value' => 'people-690105.jpg',
              'attachment' => true,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'YOUTH GROUP',
              'attachment' => false,
            ),
            'linkgrid_link_description' => 
            array (
              'value' => 'Nec quis ut in diam urna, eu sed. Dui pellentesque ultrices tristique quam, in lorem montes vel montes. Cras eros commodo quis nunc dapibus, vestibulum eu non penatibus, vehicula donec lectus nibh.',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => 'https://demo.mintplugins.com/church-plant/food-for-life/',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_image' => 
            array (
              'value' => 'picjumbo.com_HNCK4124.jpg',
              'attachment' => true,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'FOOD FOR LIFE',
              'attachment' => false,
            ),
            'linkgrid_link_description' => 
            array (
              'value' => 'Tempor fermentum lectus vivamus mauris, hac nunc turpis porttitor, elit auctor nisl nec ante sit id, aliquam eget cursus vestibulum a. Vel vestibulum ornare suspendisse et, ultrices gravida dapibus consequatur.',
              'attachment' => false,
            ),
          ),
          3 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => 'https://demo.mintplugins.com/church-plant/womens-ministry/',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_image' => 
            array (
              'value' => 'person-731142.jpg',
              'attachment' => true,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'WOMEN’S MINISTRY',
              'attachment' => false,
            ),
            'linkgrid_link_description' => 
            array (
              'value' => 'Diam scelerisque provident, purus dui nibh, velit arcu dolor eget. Consectetuer orci vestibulum pede vitae rhoncus. Imperdiet integer, lectus sit non neque, ac eum, aptent risus praesent, ut justo etia.',
              'attachment' => false,
            ),
          ),
          4 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => 'https://demo.mintplugins.com/church-plant/life-groups/',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_image' => 
            array (
              'value' => 'photo-1418479631014-8cbf89db3431.jpg',
              'attachment' => true,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'LIFE GROUPS',
              'attachment' => false,
            ),
            'linkgrid_link_description' => 
            array (
              'value' => 'Risus tellus dui a, pede sed, tincidunt magna, sit suspendisse ut id tincidunt auctor. Suspendisse cum vivamus faucibus, nisl amet dolor nibh. Ipsum libero, ultricies turpis, sociosqu sed dolor.',
              'attachment' => false,
            ),
          ),
          5 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => 'https://demo.mintplugins.com/church-plant/mens-ministry/',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_image' => 
            array (
              'value' => 'young-691660.jpg',
              'attachment' => true,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'MEN’S MINISTRY',
              'attachment' => false,
            ),
            'linkgrid_link_description' => 
            array (
              'value' => 'Lobortis amet ut ultricies mattis vel. Mus lorem convallis commodo ultrices duis id. At velit sapien non, praesent lorem id risus eros, amet eu. Inceptos risus. Culpa pede lacinia tempor sem duis arcu, scelerisque.',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'linkgrid_per_page' => 
      array (
        'value' => '6',
      ),
      'linkgrid_bg_animation_keyframes' => 
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
      'linkgrid_masonry' => 
      array (
        'value' => '',
      ),
      'linkgrid_link_images_show' => 
      array (
        'value' => 'linkgrid_link_images_show',
      ),
      'linkgrid_image_animation_keyframes' => 
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
      'linkgrid_image_overlay_animation_keyframes' => 
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
      'linkgrid_title_show' => 
      array (
        'value' => 'linkgrid_title_show',
      ),
      'linkgrid_title_animation_keyframes' => 
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
      'linkgrid_title_background_show' => 
      array (
        'value' => '',
      ),
      'linkgrid_description_show' => 
      array (
        'value' => 'linkgrid_description_show',
      ),
      'linkgrid_description_animation_keyframes' => 
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
      'linkgrid_description_background_show' => 
      array (
        'value' => '',
      ),
      'linkgrid_title_placement' => 
      array (
        'value' => 'below_image_centered',
      ),
      'linkgrid_title_google_font' => 
      array (
        'value' => 'Montserrat',
      ),
      'linkgrid_title_google_font_weight_style' => 
      array (
        'value' => '700',
      ),
      'linkgrid_description_placement' => 
      array (
        'value' => 'below_image_centered',
      ),
      'linkgrid_link_images_width' => 
      array (
        'value' => '800',
      ),
      'brick_max_width' => 
      array (
        'value' => '1200',
      ),
      'linkgrid_link_images_height' => 
      array (
        'value' => '533',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '75',
      ),
      'brick_min_below' => 
      array (
        'value' => '100',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'linkgrid',
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
              'value' => '&lt;p&gt;SMALL GROUPS&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'linkgrid_description_word_limit' => 
      array (
        'value' => '50',
      ),
      'brick_min_below_c1' => 
      array (
        'value' => '50',
      ),
    ),
    'brick_3' => 
    array (
      'brick_title' => 'About_brick 3',
      'mp_stack_order' => 1020,
      '_edit_lock' => 
      array (
        'value' => '1467334870:10',
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
      'brick_alignment' => 
      array (
        'value' => 'centered',
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
              'value' => '&lt;p&gt;[mp_button icon=&quot;&quot; icon_position=&quot;left&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;YES - SIGN ME UP&quot; link=&quot;mailto:smallgroups@churchplant.com&quot; btn_bg=&quot;show&quot; color=&quot;#be1e2d&quot; hover_color=&quot;#515151&quot; text_color=&quot;#ffffff&quot; hover_text_color=&quot;#ffffff&quot; open_type=&quot;_self&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/p&gt;
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
              'value' => '22',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '20',
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
              'value' => '&lt;p&gt;Are you interested in attending one of our small groups?&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' => 
      array (
        'value' => '4',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '0',
      ),
      'brick_min_below' => 
      array (
        'value' => '100',
      ),
      'brick_split_percentage' => 
      array (
        'value' => '50',
      ),
      'brick_float_c1' => 
      array (
        'value' => '',
      ),
      'brick_float_c2' => 
      array (
        'value' => '',
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
    ),
    'brick_4' => 
    array (
      'brick_title' => 'About_brick 4',
      'mp_stack_order' => 1030,
      '_edit_lock' => 
      array (
        'value' => '1469654237:10',
      ),
      '_edit_last' => 
      array (
        'value' => '10',
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'brick_bg_image' => 
      array (
        'value' => 'black-white-city.jpg',
        'attachment' => true,
      ),
      'brick_display_type' => 
      array (
        'value' => 'fill',
      ),
      'mp_stack_id' => 
      array (
        'value' => '4',
      ),
      'brick_min_height' => 
      array (
        'value' => '500',
      ),
      'brick_bg_image_opacity' => 
      array (
        'value' => '10',
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
              'value' => '55',
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
              'value' => '&lt;p&gt;A HEART FOR THIS GREAT CITY&lt;/p&gt;
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
        ),
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'video',
      ),
      'brick_video_url' => 
      array (
        'value' => '&lt;iframe width=&quot;853&quot; height=&quot;480&quot; src=&quot;https://www.youtube.com/embed/MtCMtC50gwY?rel=0&amp;showinfo=0&quot; frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;',
      ),
      'brick_video_max_width' => 
      array (
        'value' => '800',
      ),
      'brick_max_width' => 
      array (
        'value' => '1200',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '100',
      ),
      'brick_min_below' => 
      array (
        'value' => '100',
      ),
      'brick_max_width_c1' => 
      array (
        'value' => '500',
      ),
      'brick_float_c1' => 
      array (
        'value' => 'center',
      ),
      'brick_split_percentage' => 
      array (
        'value' => '50',
      ),
    ),
    'brick_5' => 
    array (
      'brick_title' => 'About_brick 5',
      'mp_stack_order' => 1040,
      '_edit_lock' => 
      array (
        'value' => '1540062867:3',
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
        'value' => 'linkgrid',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'linkgrid_links_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => 'https://demo.mintplugins.com/church-plant/dan-smith/',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '_parent',
              'attachment' => false,
            ),
            'linkgrid_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_image' => 
            array (
              'value' => 'fake-person-4.jpg',
              'attachment' => true,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'DAN SMITH',
              'attachment' => false,
            ),
            'linkgrid_link_description' => 
            array (
              'value' => 'Job Title Here',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => 'https://demo.mintplugins.com/church-plant/jenn-smith/',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '_parent',
              'attachment' => false,
            ),
            'linkgrid_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_image' => 
            array (
              'value' => 'fake-person-2.jpg',
              'attachment' => true,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'JENN SMITH',
              'attachment' => false,
            ),
            'linkgrid_link_description' => 
            array (
              'value' => 'Job Title Here',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => 'https://demo.mintplugins.com/church-plant/jane-doe/',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '_parent',
              'attachment' => false,
            ),
            'linkgrid_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_image' => 
            array (
              'value' => 'fake-person-3.jpg',
              'attachment' => true,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'JANE DOE',
              'attachment' => false,
            ),
            'linkgrid_link_description' => 
            array (
              'value' => 'Job Title Here',
              'attachment' => false,
            ),
          ),
          3 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => 'https://demo.mintplugins.com/church-plant/john-doe/',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '_parent',
              'attachment' => false,
            ),
            'linkgrid_lightbox_width' => 
            array (
              'value' => '640',
              'attachment' => false,
            ),
            'linkgrid_lightbox_height' => 
            array (
              'value' => '360',
              'attachment' => false,
            ),
            'linkgrid_link_image' => 
            array (
              'value' => 'fake-person-1-1.jpg',
              'attachment' => true,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'JOHN DOE',
              'attachment' => false,
            ),
            'linkgrid_link_description' => 
            array (
              'value' => 'Job Title Here',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'linkgrid_bg_animation_keyframes' => 
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
      'linkgrid_masonry' => 
      array (
        'value' => '',
      ),
      'linkgrid_link_images_show' => 
      array (
        'value' => 'linkgrid_link_images_show',
      ),
      'linkgrid_image_animation_keyframes' => 
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
      'linkgrid_image_overlay_animation_keyframes' => 
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
              'value' => '50',
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
              'value' => '0',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'linkgrid_title_show' => 
      array (
        'value' => 'linkgrid_title_show',
      ),
      'linkgrid_title_animation_keyframes' => 
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
      'linkgrid_title_background_show' => 
      array (
        'value' => '',
      ),
      'linkgrid_description_show' => 
      array (
        'value' => 'linkgrid_description_show',
      ),
      'linkgrid_description_animation_keyframes' => 
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
      'linkgrid_description_background_show' => 
      array (
        'value' => '',
      ),
      'brick_no_borders' => 
      array (
        'value' => 'brick_no_borders',
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
              'value' => '60',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '60',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '10',
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
              'value' => '&lt;p&gt;MEET OUR TEAM&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '',
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
              'value' => '&lt;p&gt;Lorem ipsum dolor sit amet fringilla leo libero integer ut elementum aliquam metus.&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' => 
      array (
        'value' => '4',
      ),
      'linkgrid_per_page' => 
      array (
        'value' => '4',
      ),
      'linkgrid_post_spacing' => 
      array (
        'value' => '0',
      ),
      'linkgrid_link_images_width' => 
      array (
        'value' => '667',
      ),
      'linkgrid_link_images_height' => 
      array (
        'value' => '1000',
      ),
      'brick_max_width' => 
      array (
        'value' => '999999999',
      ),
      'linkgrid_title_placement' => 
      array (
        'value' => 'over_image_middle_centered',
      ),
      'linkgrid_title_color' => 
      array (
        'value' => '#f2f2f2',
      ),
      'linkgrid_title_google_font' => 
      array (
        'value' => 'Montserrat',
      ),
      'linkgrid_title_google_font_weight_style' => 
      array (
        'value' => '500',
      ),
      'linkgrid_title_size' => 
      array (
        'value' => '25',
      ),
      'linkgrid_description_placement' => 
      array (
        'value' => 'over_image_middle_centered',
      ),
      'linkgrid_description_color' => 
      array (
        'value' => '#f2f2f2',
      ),
      'linkgrid_description_size' => 
      array (
        'value' => '14',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '100',
      ),
      'brick_min_below' => 
      array (
        'value' => '0',
      ),
      'brick_min_below_c1' => 
      array (
        'value' => '50',
      ),
      'linkgrid_post_background_color' => 
      array (
        'value' => '',
      ),
      'linkgrid_per_row' => 
      array (
        'value' => '4',
      ),
      'linkgrid_load_more_behaviour' => 
      array (
        'value' => '',
      ),
      'linkgrid_title_lineheight' => 
      array (
        'value' => '5',
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
    ),
    'brick_6' => 
    array (
      'brick_title' => 'About_brick 6',
      'mp_stack_order' => 1050,
      '_edit_lock' => 
      array (
        'value' => '1467414789:10',
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
              'value' => '&lt;p class=&quot;p1&quot;&gt;&lt;span class=&quot;s1&quot;&gt;[mp_button icon=&quot;&quot; icon_position=&quot;left&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;CONTACT LEADERS&quot; link=&quot;mailto:leadership@churchplant.com&quot; btn_bg=&quot;show&quot; color=&quot;#f2f2f2&quot; hover_color=&quot;#000000&quot; text_color=&quot;#00a79d&quot; hover_text_color=&quot;#f2f2f2&quot; open_type=&quot;_self&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/span&gt;&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_min_above_below' => 
      array (
        'value' => '100',
      ),
      'brick_min_below' => 
      array (
        'value' => '100',
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#00a79d',
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
              'value' => '40',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '40',
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
              'value' => '30',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '30',
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
              'value' => '500',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;OUR LEADERSHIP&lt;/p&gt;
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
              'value' => '&lt;p&gt;Blandit cursus, arcu fringilla ut mauris vestibulum nunc velit, ullamcorper nullam eget aliquam ullamcorper consectetuer pede, sit tristique in imperdiet libero sollicitudin. Vestibulum aenean nec et enim vitae tristique, eu posuere libero quam tincidunt, non duis diam. Sapien conubia suscipit arcu condimentum. Porttitor ligula placerat mattis aenean aenean, sed vehicula. Quis litora congue sit, eu dui at volutpat wisi tortor erat, vel vestibulum eget est ante euismod aliquet, pede suscipit justo quisque sed semper et. Blandit consequat. Porta sem massa sit massa imperdiet magna, consectetuer justo ac.&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' => 
      array (
        'value' => '4',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
    ),
  ),
);

            // Set a standard for the descriptions of Stack Templates in Theme Bundles
            $template_array['stack_description'] = __('The "About" stack template included in the Church Plant Theme Bundle', 'church_plant_theme_bundle' );

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