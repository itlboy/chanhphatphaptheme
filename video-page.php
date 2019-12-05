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

$args = array
    (
        'post_type' => 'attachment',
        'post_mime_type' => 'audio',
        'numberposts' => 15
    );
$audiofiles = get_posts($args);

if(empty($_REQUEST['type']) || $_REQUEST['type'] == 'video'){
	$isVideo = true;
}else {
	$isVideo = false;
}
// var_dump($isVideo);die;
	// var_dump($audiofiles);die;
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
				<div class="dropdown dropdown-order-by">
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownOrderBy" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="glyphicon glyphicon-chevron-down"></i>
						Thư viện
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" id="video-dropdown-item" href="javascript:void(0)">Video</a>
						<a class="dropdown-item" id="audio-dropdown-item" href="javascript:void(0)">Audio</a>

					</div>
				</div>
			</div>
			<div class="list-media col-md-12">
				<div class="row">
					<div class="video-page" <?php if(!$isVideo){?>style="display:none;"<?php } ?> >
						<?php foreach($posts as $post){ ?>
							<div class="media-item col-md-4">
								<div class="view-count">
									<i class="glyphicon glyphicon-eye-open"></i>
									<span><?php echo pvc_get_post_views($post->ID); ?></span>
								</div>
								<div class="video-wrapper col-xs-12">
									<iframe  height="200" src="<?php echo get_post_meta($post->ID, 'video_url', TRUE); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
								<div class="title-news"><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></div>
							</div>
						<?php } ?>
						
					</div>
					<div class="audio-page" <?php if($isVideo){?>style="display:none;"<?php } ?>>

						<?php foreach($audiofiles as $audiofile){ ?>
							<?php 
							$linkAudio = $audiofile->guid; 
							?>
							<div class="media-item col-md-4">
								<div class="audio-wrapper">
									
									<?php echo do_shortcode("[sc_embed_player fileurl=$linkAudio]"); ?>
									<!-- <audio controls id="audio-bar">	
										<source src="<?php echo $linkAudio; ?>" type="audio/mpeg">
										</audio> -->
									</div>
									<div class="title-news"><a href="<?php echo get_permalink($audiofile->ID); ?>"><?php echo $audiofile->post_title; ?></a></div>
								</div>
							<?php } ?>
						</div>
					</div>



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