<?php /* Template Name: videoPage */ ?>
<?php
get_header();
wp_enqueue_style( 'style', get_template_directory_uri() . '/video-audio-page/videoaudio.css');
?>
<?php 
	$posts = get_posts(array(
		'numberposts'	=> 15,
		'post_type'		=> 'post',
		'meta_key'		=> 'video_url',
	));
	// var_dump($posts);die;
 ?>
<div class="row">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
			<li class="breadcrumb-item active" aria-current="page">Thư viện Video/audio</li>
		</ol>
	</nav>
	<div class="left-content col-md-8">
		<div class="block-wrapper media-library-wrapper col-md-12">
							<div class="title-block-wrapper col-md-12">
								<div class="title-block">Thư viện video/audio</div>
							</div>
							<div class="news-item col-md-12">
								<div class="content-news">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu</div>
							</div>
							<div class="list-media col-md-12">
								<div class="row">
									<?php foreach($posts as $post){ ?>
										<div class="media-item col-md-4">
											<div class="view-count">
												<i class="glyphicon glyphicon-eye-open"></i>
												<span><?php echo pvc_get_post_views($post->ID); ?></span>
											</div>
											<div class="video-wrapper col-xs-12">
												<iframe  height="200" src="<?php echo get_post_meta($post->ID, 'video_url', TRUE); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
											</div>
											<div class="title-news"><?php echo $post->post_title; ?></div>
										</div>
									<?php } ?>
									<!-- <div class="media-item col-md-4">
										<div class="view-count">
											<i class="glyphicon glyphicon-eye-open"></i>
											<span>1201</span>
										</div>
										<div class="video-wrapper">
											<div class="icon-player">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
											</div>
										</div>
										<div class="title-news">orem ipsum dolor sit amet, consectetur adipiscing</div>
									</div>
									<div class="media-item col-md-4">
										<div class="view-count">
											<i class="glyphicon glyphicon-eye-open"></i>
											<span>1201</span>
										</div>
										<div class="video-wrapper">
											<div class="icon-player">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
											</div>
										</div>
										<div class="title-news">orem ipsum dolor sit amet, consectetur adipiscing</div>
									</div> -->
								</div>
								<!-- <div class="row">
									<div class="media-item col-md-4">
										<div class="view-count">
											<i class="glyphicon glyphicon-eye-open"></i>
											<span>1201</span>
										</div>
										<div class="video-wrapper">
											<div class="icon-player">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
											</div>
										</div>
										<div class="title-news">orem ipsum dolor sit amet, consectetur adipiscing</div>
									</div>
									<div class="media-item col-md-4">
										<div class="view-count">
											<i class="glyphicon glyphicon-eye-open"></i>
											<span>1201</span>
										</div>
										<div class="video-wrapper">
											<div class="icon-player">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
											</div>
										</div>
										<div class="title-news">orem ipsum dolor sit amet, consectetur adipiscing</div>
									</div>
									<div class="media-item col-md-4">
										<div class="view-count">
											<i class="glyphicon glyphicon-eye-open"></i>
											<span>1201</span>
										</div>
										<div class="video-wrapper">
											<div class="icon-player">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
											</div>
										</div>
										<div class="title-news">orem ipsum dolor sit amet, consectetur adipiscing</div>
									</div>
								</div>
								<div class="row">
									<div class="media-item col-md-4">
										<div class="view-count">
											<i class="glyphicon glyphicon-eye-open"></i>
											<span>1201</span>
										</div>
										<div class="video-wrapper">
											<div class="icon-player">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
											</div>
										</div>
										<div class="title-news">orem ipsum dolor sit amet, consectetur adipiscing</div>
									</div>
									<div class="media-item col-md-4">
										<div class="view-count">
											<i class="glyphicon glyphicon-eye-open"></i>
											<span>1201</span>
										</div>
										<div class="video-wrapper">
											<div class="icon-player">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
											</div>
										</div>
										<div class="title-news">orem ipsum dolor sit amet, consectetur adipiscing</div>
									</div>
									<div class="media-item col-md-4">
										<div class="view-count">
											<i class="glyphicon glyphicon-eye-open"></i>
											<span>1201</span>
										</div>
										<div class="video-wrapper">
											<div class="icon-player">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
											</div>
										</div>
										<div class="title-news">orem ipsum dolor sit amet, consectetur adipiscing</div>
									</div>
								</div>
								<div class="row">
									<div class="media-item col-md-4">
										<div class="view-count">
											<i class="glyphicon glyphicon-eye-open"></i>
											<span>1201</span>
										</div>
										<div class="video-wrapper">
											<div class="icon-player">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
											</div>
										</div>
										<div class="title-news">orem ipsum dolor sit amet, consectetur adipiscing</div>
									</div>
									<div class="media-item col-md-4">
										<div class="view-count">
											<i class="glyphicon glyphicon-eye-open"></i>
											<span>1201</span>
										</div>
										<div class="video-wrapper">
											<div class="icon-player">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
											</div>
										</div>
										<div class="title-news">orem ipsum dolor sit amet, consectetur adipiscing</div>
									</div>
									<div class="media-item col-md-4">
										<div class="view-count">
											<i class="glyphicon glyphicon-eye-open"></i>
											<span>1201</span>
										</div>
										<div class="video-wrapper">
											<div class="icon-player">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
											</div>
										</div>
										<div class="title-news">orem ipsum dolor sit amet, consectetur adipiscing</div>
									</div>
								</div>
								<div class="row">
									<div class="media-item col-md-4">
										<div class="view-count">
											<i class="glyphicon glyphicon-eye-open"></i>
											<span>1201</span>
										</div>
										<div class="video-wrapper">
											<div class="icon-player">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
											</div>
										</div>
										<div class="title-news">orem ipsum dolor sit amet, consectetur adipiscing</div>
									</div>
									<div class="media-item col-md-4">
										<div class="view-count">
											<i class="glyphicon glyphicon-eye-open"></i>
											<span>1201</span>
										</div>
										<div class="video-wrapper">
											<div class="icon-player">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
											</div>
										</div>
										<div class="title-news">orem ipsum dolor sit amet, consectetur adipiscing</div>
									</div>
									<div class="media-item col-md-4">
										<div class="view-count">
											<i class="glyphicon glyphicon-eye-open"></i>
											<span>1201</span>
										</div>
										<div class="video-wrapper">
											<div class="icon-player">
												<img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-icon.png" alt="">
											</div>
										</div>
										<div class="title-news">orem ipsum dolor sit amet, consectetur adipiscing</div>
									</div>
								</div> -->
								
							</div>
						</div>
						<?php
						echo get_the_posts_pagination(
							array(
								'mid_size' => 2,
								'prev_text' => 'Trang trước',
								'next_text' => 'Trang sau',
							)
						);
						?> 
						<!-- <nav id="pagination-wrapper">
							<ul class="pagination">
								
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item"><a class="page-link" href="#">5</a></li>
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Next">
										<span aria-hidden="true">></span>
									</a>
								</li>
								<li class="page-item last-page">
									<a class="page-link" href="#">Trang cuối</a>
								</li>
							</ul>
						</nav> -->
		
		
	</div>
	<div class="right-content col-md-4">
		<?php get_sidebar(); ?>

	</div>


<?php
get_footer();
?>