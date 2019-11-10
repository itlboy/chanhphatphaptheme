<?php 

/*
Plugin Name: Video Widget
Description: gallery video 
Author: Dũng Lùn
Version: 1.0
Author URI: http://google.com
*/
add_action( 'widgets_init', 'create_video_widget' );
function create_video_widget() {
	register_widget('Video_Widget');
}


class Video_Widget extends WP_Widget {
 
        /**
         * Thiết lập widget: đặt tên, base ID
         */
        function __construct() {
        	parent::__construct (
        		'video_widget', 
        		'Video Widget', 
        		array(
        			'description' => 'Tạo 1 gallery video' 
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

 			return get_template_part('/template/content','video');
        }
 
}

	
	