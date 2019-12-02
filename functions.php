<?php 

define( 'THEME_URL', get_stylesheet_directory() );
define( 'CORE', THEME_URL . '/core' );
define( 'CAT_SPECIAL_NAME', 'Cac-bai-giang-phap');



require_once( CORE . '/init.php' );

if ( ! isset( $content_width ) ) {
 
  $content_width = 620;
}

require_once( CORE . '/theme_set_up.php' );  
require_once( CORE . '/view_count_set_up.php' );  
require_once( CORE . '/get_data_post.php' );  
require_once( CORE . '/sub_str_full_word.php' );  
require_once( CORE . '/acf_set_up.php' );  
require_once( CORE . '/video_widget.php' );  
require_once( CORE . '/audio_widget.php' );  

?>



