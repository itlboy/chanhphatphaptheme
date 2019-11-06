<?php 
$args = array(
    'post_type'=> 'post',
    'post_status' => 'publish',
    'order' => 'DESC',
    'tax_query' => array(
        array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array( 'post-format-video' )
        )
    )
);
$videos = get_posts( $args );
echo strip_tags($videos[0]->post_content);
echo strip_tags($videos[1]->post_content);
 ?>
<!-- wp:core-embed/youtube {"url":"https://youtu.be/EIOavjtFky0","type":"video","providerNameSlug":"youtube","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
<figure class="wp-block-embed-youtube wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
https://youtu.be/EIOavjtFky0
</div></figure>
<!-- /wp:core-embed/youtube -->
<div class="block-wrapper video-block col-xs-12">
	<div class="title-block-wrapper col-xs-12">
		<div class="title-block">Video</div>
	</div>
	<div class="news-item col-xs-12">
		<div class="icon-player">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
		</div>
		<div class="title-news">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit
		</div>
		<div class="img-block-right col-xs-7">
			<div class="icon-player">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
			</div>
		</div>
	</div>
	<div class="news-item col-xs-12">
		<div class="icon-player">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
		</div>
		<div class="content-news">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
		</div>
	</div>
	<div class="news-item col-xs-12">
		<div class="icon-player">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
		</div>
		<div class="content-news">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
		</div>
	</div>
</div>