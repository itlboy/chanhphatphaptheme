<?php 
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
?>