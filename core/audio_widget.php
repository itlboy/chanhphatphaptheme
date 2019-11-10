<?php 

/*
Plugin Name: Audio Widget
Description: gallery audio 
Author: Dũng Lùn
Version: 1.0
Author URI: http://google.com
*/
add_action( 'widgets_init', 'create_audio_widget' );
function create_audio_widget() {
	register_widget('Audio_Widget');
}


class Audio_Widget extends WP_Widget {
 
        /**
         * Thiết lập widget: đặt tên, base ID
         */
        function __construct() {
        	parent::__construct (
        		'audio_widget', 
        		'Audio Widget', 
        		array(
        			'description' => 'Tạo 1 gallery audio' 
        		)
        	);

        }
 
        /**
         * Tạo form option cho widget
         */
        function form( $instance ) {
 
        }
 
        /**
         * save widget form
         */
 
        function update( $new_instance, $old_instance ) {
 
        }
 
        /**
         * Show widget
         */
 
        function widget( $args, $instance ) {

 			return get_template_part('/template/content','audio');
        }
 
}

	
	