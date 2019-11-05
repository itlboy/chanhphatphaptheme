<?php 
/**
  @ Thiết lập các hằng dữ liệu quan trọng
  @ THEME_URL = get_stylesheet_directory() - đường dẫn tới thư mục theme
  @ CORE = thư mục /core của theme, chứa các file nguồn quan trọng.
  **/
  define( 'THEME_URL', get_stylesheet_directory() );
  define( 'CORE', THEME_URL . '/core' );

/**
  @ Load file /core/init.php
  @ Đây là file cấu hình ban đầu của theme mà sẽ không nên được thay đổi sau này.
  **/

  require_once( CORE . '/init.php' );

 /**
  @ Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung
  **/
  if ( ! isset( $content_width ) ) {
        /*
         * Nếu biến $content_width chưa có dữ liệu thì gán giá trị cho nó
         */
        $content_width = 620;
    }

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
            }
            add_action ( 'init', 'thachpham_theme_setup' );

        }
?>

<?php 
if ( ! function_exists( 'prefix_modify_query_order' ) ) {

    function prefix_modify_query_order( $query ) {
      if ( is_main_query() ) {
        echo 123;
        $args =  array( 'title' => 'ASC' );

        $query->set( 'orderby', $args );
        }
    }
}

?>


<?php 
add_action( 'wp_enqueue_scripts', 'my_custom_script_load' );
function my_custom_script_load(){
  wp_enqueue_script( 'my-custom-script', THEME_URL. '/js/app.js', array( 'jquery' ) );
}
 ?>
 <?php 
 // function to display number of posts.
function getPostViews($postID){
  
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    
    if($count==''){
    
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, 0);
        return "0";
    }
    return $count;
}
// function to count views.
function setPostViews($postID) {
    
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, 0);
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Add it to a column in WP-Admin
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    
    $defaults['post_views'] = __('Views');
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
  
  if($column_name === 'post_views'){
        echo getPostViews(get_the_ID());
    }
}
add_filter('get_search_form', 'my_search_form');
 
function my_search_form($text) {
     $text = str_replace('value="Search"', 'value=""', $text);
    return $text;
}
if ( ! function_exists( 'get_post_by_slug_category' ) ) {

  function get_post_by_slug_category( $slugName ,$numPost) {
    $cateId = get_category_by_slug($slugName)->term_id;
    $args = array( 'numberposts' => $numPost, 'category_name' => $slugName );
    $posts = get_posts( $args );
    $linkCate =  get_category_link($cateId) ;

    return [
      'posts'=>$posts,
      'link'=>$linkCate
    ];
  }
}
if ( ! function_exists( 'substr_full_word' ) ) {
  function substr_full_word( $str , $maxlen) {
    if ( strlen($str) <= $maxlen ) return $str;

    $newstr = substr($str, 0, $maxlen);
    if ( substr($newstr,-1,1) != ' ' ) $newstr = substr($newstr, 0, strrpos($newstr, " "));

    return $newstr;
  }
}

?>