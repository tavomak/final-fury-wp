<?php
/*
 * Enqueues
 */
$url = 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js';
$test_url = @fopen($url, 'r');
if ($test_url !== false) {
	function load_external_jQuery()
	{
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
		wp_enqueue_script('jquery');
	}
	add_action('wp_enqueue_scripts', 'load_external_jQuery');
} else {
	function load_local_jQuery()
	{
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_bloginfo('template_url') . '/assets/js/jquery-3.4.1.min.js');
		wp_enqueue_script('jquery');
	}
	add_action('wp_enqueue_scripts', 'load_local_jQuery');
}

if ( ! function_exists('bk_enqueues') ) {
	function bk_enqueues() {

		// Styles
		$dirJS = new DirectoryIterator(get_stylesheet_directory() . '/assets/css/');

		wp_register_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/css/bootstrap.min.css', false, '5.3.1', null);
		wp_enqueue_style('bootstrap');

		wp_register_style('fontawesome5', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', false, '6.4.2', null);
		wp_enqueue_style('fontawesome5');

		wp_register_style('toastify', 'https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css', false, '6.4.2', null);
		wp_enqueue_style('toastify');

		foreach ($dirJS as $file) {

			if (pathinfo($file, PATHINFO_EXTENSION) === 'css') {
				$fullName = basename($file);
				$name = substr(basename($fullName), 0, strpos(basename($fullName), '.'));
				switch($name) {
						case 'main':
								$deps = rand(5000, 15000);
								wp_register_style( $name, get_template_directory_uri() . '/assets/css/' . $fullName, false, $deps, null );
								wp_enqueue_style($name);
								break;
						default:
								$deps = null;
								break;
				}
			}
		}
	
		
		// Scripts
		
		wp_register_script('toastify', 'https://cdn.jsdelivr.net/npm/toastify-js', false, '2.8.3', true);
		wp_enqueue_script('toastify');
		
		wp_register_script('bootstrap-bundle', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.1/js/bootstrap.bundle.min.js', false, '5.3.1', true);
		wp_enqueue_script('bootstrap-bundle');
			
			// if(is_singular()){
			// 	wp_register_script('fullpage-js', get_template_directory_uri() . '/assets/js/fullpage.min.js', false, null, true);
			// 	wp_enqueue_script('fullpage-js');
				
			// 	wp_register_script('fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', false, null, true);
			// 	wp_enqueue_script('fancybox');
			// }
			
			
			// if(is_front_page()){
			// 	wp_register_script('masonry-js', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', false, null, true);
			// 	wp_enqueue_script('masonry-js');
			// }

		wp_register_script('sbjs', get_template_directory_uri() . '/assets/js/sourcebuster.min.js', false, null, true);
		wp_enqueue_script('sbjs');

		wp_register_script('youtube-js', 'https:///www.youtube.com/player_api', false, null, true);
		wp_enqueue_script('youtube-js');
		
		wp_register_script('main', get_template_directory_uri() . '/assets/js/main-dist.js', false, null, true);

		$data = array();
		
		if(is_singular('fighter_post_type')){
			$move_list = array();
			$stats = array();

			if( have_rows('move_list') ):
				$count = 0;
				while( have_rows('move_list') ) : the_row();
				$image = get_sub_field('image');
				$video_source = get_sub_field('video_source');
				$video_file = get_sub_field('video_file');
				$video_id = get_sub_field('youtube_video_id');
				$icon_type = get_sub_field('icon');
				$icon_title = get_sub_field('icon_title');
				$move_icon_on = get_sub_field('move_icon_on');
				$move_icon_off = get_sub_field('move_icon_off');
				$description = get_sub_field('description');
				$count++;
				array_push( 
					$move_list, array(
						"name" => $icon_type['value'] ? $icon_type['label'] : $icon_title,
						"active" => $count === 1,
						"image" => $image,
						"video_source" => $video_source,
						"video_file" => $video_file,
						"video_id" => $video_id,
						"icon_type" => $icon_type['value'],
						"icon_title" => $icon_title,
						"move_icon_on" => $move_icon_on,
						"move_icon_off" => $move_icon_off,
						"description" => $description,
					) 
				);

				endwhile;
			endif;
			if( have_rows('stats') ):

				while( have_rows('stats') ) : the_row();
				$power = get_sub_field('power');
				$health = get_sub_field('health');
				$mobility = get_sub_field('mobility');
				$range = get_sub_field('range');

				array_push( 
					$stats, array(
						"stats" => array(
							"power" => $power,
							"health" => $health,
							"mobility" => $mobility,
							"range" => $range
						)
					) 
				);

				endwhile;
			endif;
			$data['base_url'] = get_template_directory_uri() . '/assets/img/';
			$data['move_list'] = $move_list;
			$data['stats'] = $stats[0]['stats'];
		}

		wp_localize_script(
			'main',
			'data',
			$data
		);
		wp_enqueue_script('main');


	}
	add_action('wp_enqueue_scripts', 'bk_enqueues', 100);
	
}