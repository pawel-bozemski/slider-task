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