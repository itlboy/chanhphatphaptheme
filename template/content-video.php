<?php 
	$posts = get_posts(array(
		'numberposts'	=> -1,
		'post_type'		=> 'post',
		'meta_key'		=> 'video_url',
	));
 ?>

<div class="block-wrapper video-block col-xs-12">
	<div class="title-block-wrapper col-xs-12">
		<div class="title-block">Video</div>
	</div>
	<?php 
	foreach ($posts as $key => $post) {
		?>
		<div class="news-item <?php if($key == 0){ ?> active <?php } ?> col-xs-12" data-id="<?php echo $key; ?>">
			<div class="icon-player">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
			</div>
			<div class="title-news" data-id="<?php echo $key; ?>">
				<?php echo $post->post_title; ?>
			</div>
			<div class="video-iframe-wrapper col-xs-12">
				<iframe  height="200" src="<?php echo get_post_meta($post->ID, 'video_url', TRUE); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

		</div>
	<?php } ?>

	<!-- <div class="news-item col-xs-12">
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
	</div> -->
</div>