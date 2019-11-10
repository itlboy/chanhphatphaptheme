<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'video_url',
	'title' => 'Video Url',
	'fields' => array (
		array (
			'key' => 'video_url',
			'label' => 'Video Url',
			'name' => 'video_url',
			'type' => 'url',
		)
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
));

endif;