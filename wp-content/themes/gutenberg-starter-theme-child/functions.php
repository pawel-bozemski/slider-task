<?php

// add_action('wp_enqueue_scripts', 'enqueue_parent_styles');
// function enqueue_parent_styles()
// {
// 	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');	
// }

function scripts() {
		wp_register_style('style-sass', get_home_url() . '/wp-content/themes/gutenberg-starter-theme-child/dist/app.css', [], 1, 'all');
		wp_enqueue_style('style-sass');

		wp_enqueue_style(
			'glide-css', 'https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css', array(), true);
			wp_enqueue_style(
				'glide-css', 'https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css', array(), true);
	
		wp_enqueue_script(
			'glide', 'https://cdn.jsdelivr.net/npm/@glidejs/glide', array(), true);


		wp_enqueue_script('jquery');


		wp_register_script( 'app', get_home_url() . '/wp-content/themes/gutenberg-starter-theme-child/dist/app.js', ['jquery'], 1, true );
		wp_enqueue_script( 'app');
		}
add_action('wp_enqueue_scripts', 'scripts');

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{
	if( function_exists('acf_add_local_field_group') ):

		acf_add_local_field_group(array(
			'key' => 'group_61dad37ff1d89',
			'title' => 'Slider',
			'fields' => array(
				array(
					'key' => 'field_61dad7ed6d764',
					'label' => 'Nagłowek',
					'name' => 'heading',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_61dae70a64c2e',
					'label' => 'Kolor nagłowka',
					'name' => 'heading_color',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'enable_opacity' => 0,
					'return_format' => 'string',
				),
				array(
					'key' => 'field_61dad8066d765',
					'label' => 'Podtytuł',
					'name' => 'subtitle',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_61dad8186d766',
					'label' => 'Kolor tła',
					'name' => 'background_color',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'enable_opacity' => 0,
					'return_format' => 'string',
				),
				array(
					'key' => 'field_61daf89916b30',
					'label' => 'Czy slider ma mieć tytuł?',
					'name' => 'is_slider_title',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_61daf88a16b2f',
					'label' => 'Tytuł slidera',
					'name' => 'slider_title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_61daf89916b30',
								'operator' => '==',
								'value' => '1',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_61dad83e6d767',
					'label' => 'Slider',
					'name' => 'slider',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 0,
					'max' => 0,
					'layout' => 'row',
					'button_label' => '',
					'sub_fields' => array(
						array(
							'key' => 'field_61dad88b6d76a',
							'label' => 'Nagłowek',
							'name' => 'heading',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_61dad8a46d76b',
							'label' => 'Tekst',
							'name' => 'text',
							'type' => 'textarea',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'maxlength' => '',
							'rows' => '',
							'new_lines' => '',
						),
						array(
							'key' => 'field_61dad8676d768',
							'label' => 'Czy mają być ikonki?',
							'name' => 'is_icons',
							'type' => 'true_false',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'message' => '',
							'default_value' => 0,
							'ui' => 0,
							'ui_on_text' => '',
							'ui_off_text' => '',
						),
						array(
							'key' => 'field_61dad8746d769',
							'label' => 'Ikona',
							'name' => 'icon',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_61dad8676d768',
										'operator' => '==',
										'value' => '1',
									),
								),
							),
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'block',
						'operator' => '==',
						'value' => 'acf/slider',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
			'show_in_rest' => 0,
		));
		
		endif;		
	if (function_exists('acf_register_block_type')) {
		acf_register_block_type(array(
			'name' => 'slider',
			'title' => __('Slider'),
			'description' => __('A custom slider block.'),
			'render_template' => 'blocks/slider/slider.php',
			'category' => 'slider',
			'icon' => 'admin-comments',
			'keywords' => array('slider', 'simple'),
		));
	}
}
function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');