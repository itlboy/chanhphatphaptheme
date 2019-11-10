<?php 
/**
  @ Thiết lập các chức năng sẽ được theme hỗ trợ
  **/
if ( ! function_exists( 'thachpham_theme_setup' ) ) {
        /*
         * Nếu chưa có hàm thachpham_theme_setup() thì sẽ tạo mới hàm đó
         */
        function thachpham_theme_setup() {
                /*
                 * Thiết lập theme có thể dịch được
                 */
                $language_folder = THEME_URL . '/languages';
                load_theme_textdomain( 'thachpham', $language_folder );

                /*
                 * Tự chèn RSS Feed links trong <head>
                 */
                add_theme_support( 'automatic-feed-links' );

                /*
                 * Thêm chức năng post thumbnail
                 */
                add_theme_support( 'post-thumbnails' );

                /*
                 * Thêm chức năng title-tag để tự thêm <title>
                 */
                add_theme_support( 'title-tag' );

                /*
                 * Thêm chức năng post format
                 */
                add_theme_support( 'post-formats',
                	array(
                		'video',
                		'image',
                		'audio',
                		'gallery'
                	)
                );

                /*
                 * Thêm chức năng custom background
                 */
                $default_background = array(
                	'default-color' => '#e8e8e8',
                );
                // add_theme_support( 'custom-background', $default_background );

                /*
                 * Tạo menu cho theme
                 */
                register_nav_menu ( 'primary-menu', __('Primary Menu', 'thachpham') );

                /*
                 * Tạo sidebar cho theme
                 */
                $sidebar = array(
                	'name' => __('Main Sidebar', 'thachpham'),
                	'id' => 'main-sidebar',
                	'description' => 'Main sidebar for Thachpham theme',
                	'class' => 'main-sidebar',
                	'before_title' => '<h3 class="widgettitle">',
                	'after_sidebar' => '</h3>'
                );
                register_sidebar( $sidebar );
                $listTag = array(
                	'name' => __('List Tag', 'dunglun'),
                	'id' => 'list-tag',
                	'description' => 'List tag ',
                	'class' => 'list-tag',

                );
                register_sidebar( $listTag );
                $notifyBar = array(
                    'name' => __('Notify Bar', 'dunglun'),
                    'id' => 'notify-bar',
                    'description' => 'Notify Bar ',
                    'class' => 'notify-bar',

                );
                register_sidebar( $notifyBar );
            }
            add_action ( 'init', 'thachpham_theme_setup' );

        }
        ?>