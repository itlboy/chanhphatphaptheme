<?php
get_header();
$cats = get_categories();
// var_dump(get_terms( 'nav_menu', array( 'hide_empty' => true ) ));die;
$args = array
    (
        'post_type' => 'attachment',
        'post_mime_type' => 'audio',
        'numberposts' => 1
    );
$audiofiles = get_posts($args);
$dataCateSpecial = get_post_by_slug_category(CAT_SPECIAL_NAME,5);

?>
<div class="notify-wrapper col-lg-12">
	<div class="notify-label col-lg-2">
		Thông báo mới: 
	</div>
	<div class="notify-content col-lg-10">
		Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
	</div>
</div>
<div class="content col-xs-12">
	<div class="left-content col-xs-8">
		<div class="block-wrapper col-xs-12">
			<div class="left-block-equal col-xs-6">
				<?php $post1 = $dataCateSpecial['posts'][0] ?>
				<?php if (has_post_thumbnail( $post1->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post1->ID ), 'single-post-thumbnail' ); ?>
					<div class="img-block-large" style="background-image: url('<?php echo $image[0]; ?>')">
						<img src="" alt="">
					</div>
				<?php endif; ?>
				<div class="block-news">
					<div class="title-news">
						<a href="<?php echo get_permalink($post1->ID) ?>" ><?php echo $post1->post_title; ?></a>
					</div>
					<div class="content-news">
						<?php 
						$content = $post1->post_content;
						$content = strip_tags($content);
						echo substr_full_word($content,200)
						?>
					</div>
				</div>
			</div>
			<div class="right-block-equal col-xs-6">
				<div class="list-news">
					<?php foreach ($dataCateSpecial['posts'] as $key => $post) {?>
						<?php if($key>0){ ?>
						<div class="news-item">
							<div class="content-news">
								<a href="<?php echo get_permalink($post->ID) ?>" ><?php echo $post->post_title; ?></a>
							</div>
						</div>
					<?php }} ?>
					<!-- <div class="news-item">
						<div class="content-news">
							Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
						</div>
					</div>
					<div class="news-item">
						<div class="content-news">
							Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
						</div>
					</div>
					<div class="news-item">
						<div class="content-news">
							Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
						</div>
					</div> -->
				</div>

			</div>
		</div>
		<?php 
			$dataCate1 = get_post_by_slug_category('sach-goi-dau-tu-tap',2);
		 ?>
		<div class="block-wrapper col-xs-12">
			<div class="title-block-wrapper col-xs-12">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-bamboo.png" alt="" class="icon-title">
				<div class="title-block">Sách gối đầu tu tập</div>
				<a href="<?php echo $dataCate1['link']; ?>" class="paddle-left">Xem thêm >></a>
			</div>
			<div class="left-block-equal col-xs-6">
				<div class="img-block-large">
					<img src="" alt="">
				</div>
				<div class="title-news">
					<?php echo $dataCate1['posts'][0]->title; ?>
				</div>

			</div>
			<div class="right-block-equal col-xs-6">
				<div class="img-block-large">
					<img src="" alt="">
				</div>
				<div class="title-news">
					<?php echo $dataCate1['posts'][1]->title; ?>
				</div>

			</div>
		</div>
		<?php 
			$dataCate2 = get_post_by_slug_category('Cac-bai-giang-phap',3);
		 ?>
		<div class="block-wrapper col-xs-12">
			<div class="title-block-wrapper col-xs-12">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-bamboo.png" alt="" class="icon-title">
				<div class="title-block">Các bài giảng pháp</div>
				<a href="<?php echo $dataCate2['link']; ?>" class="paddle-left">Xem thêm >></a>
			</div>
			<?php 
			foreach ($dataCate2['posts'] as $key => $post) {
				if (has_post_thumbnail( $post->ID ) ): 
					?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					<div class="block-item col-xs-12">
						<div class="img-block-medium col-xs-2 " style="background-image: url('<?php echo $image[0]; ?>')">

						</div>
						<div class="block-news col-xs-10">
							<div class="title-news">
								<a href="<?php echo get_permalink($post->ID) ?>" ><?php echo $post->post_title; ?></a>
							</div>
							<div class="content-news">
								<?php 
								$content = $post->post_content;
								$content = strip_tags($content);
								echo substr_full_word($content,200)
								?>
							</div>
						</div>
					</div>

					<?php else: ?>
						<div class="block-item col-xs-12">
							<div class="block-news">
								<div class="title-news">
									<a href="<?php echo get_permalink($post->ID) ?>" ><?php echo $post->post_title; ?></a>
								</div>
								<div class="content-news">
									<?php 
									$content = $post->post_content;
									$content = strip_tags($content);
									echo substr_full_word($content,200)
									?>
								</div>
							</div>

			</div>

			<?php endif;} ?>
			
			<!-- <div class="block-item col-xs-12">
				<div class="img-block-medium col-xs-2">
					<img src="" alt="">
				</div>
				<div class="block-news col-xs-10">
					<div class="title-news">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu
					</div>
					<div class="content-news">
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
					</div>
				</div>

			</div>
			<div class="block-item col-xs-12">

				<div class="block-news">
					<div class="title-news">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu
					</div>
					<div class="content-news">
						Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
					</div>
				</div>

			</div> -->
		</div>
		<?php 
			$dataCate3 = get_post_by_slug_category('phap-thuc-hanh',5);

		 ?>
		<div class="block-wrapper col-xs-12">
			<div class="title-block-wrapper col-xs-12">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-bamboo.png" alt="" class="icon-title">
				<div class="title-block">Pháp thực hành</div>
				<ul class="list-menu col-xs-8">
					<li class="menu-item col-xs-4">
						<a class="menu-link" href="<?php echo get_permalink($dataCate3['posts']['0']->ID); ?>"><?php echo $dataCate3['posts']['0']->post_title; ?></a>
					</li>
					<li class="menu-item col-xs-4">
						<a class="menu-link" href="<?php echo get_permalink($dataCate3['posts']['1']->ID); ?>"><?php echo $dataCate3['posts']['1']->post_title; ?></a>
					</li>
					<li class="menu-item col-xs-4">
						<a class="menu-link" href="<?php echo get_permalink($dataCate3['posts']['2']->ID); ?>"><?php echo $dataCate3['posts']['2']->post_title; ?></a>
					</li>

				</ul>
				<a href="<?php echo $dataCate3['link']; ?>" class="paddle-left">Xem thêm >></a>
			</div>
			<div class="left-block-equal col-xs-6">
				<div class="img-block-large">
					<img src="" alt="">
				</div>
				<div class="block-news">
					<div class="title-news">
						<a href="<?php echo get_permalink($dataCate3['posts']['0']->ID) ?>" ><?php echo $dataCate3['posts']['0']->post_title; ?></a>
					</div>
					<div class="content-news">
						<?php 
						$content = $dataCate3['posts']['0']->post_content;
						$content = strip_tags($content);
						echo substr_full_word($content,200)
						
						?>
					</div>
				</div>
			</div>
			<div class="right-block-equal col-xs-6">
				<div class="list-news">
					<?php foreach ($dataCate3['posts'] as $key => $post) {?>
						<?php if($key>0) : ?>
							<div class="news-item">
								<?php if (has_post_thumbnail( $post->ID ) ): ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
									<div class="img-block-small"  style="background-image: url('<?php echo $image[0]; ?>')">
										<img src="" alt="">
									</div>
								<?php endif; ?>
								<div class="content-news">
									<a href="<?php echo get_permalink($post->ID); ?>"><?php echo substr_full_word(strip_tags($post->post_content),100); ?></a>
								</div>
							</div>
						<?php endif; ?>
					<?php } ?>
				</div>

			</div>
		</div>
		<?php 
			$dataCate4 = get_post_by_slug_category('thay-thanh-thien',1);
			$post = $dataCate4['posts'][0];
		 ?>
		<div class="block-wrapper col-xs-12">
			<div class="title-block-wrapper col-xs-12">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-bamboo.png" alt="" class="icon-title">
				<div class="title-block">thầy thanh thiện</div>
				<a href="<?php echo $dataCate4['link']; ?>" class="paddle-left">Xem thêm >></a>
			</div>
			<div class="left-block-equal col-xs-6">
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

				<div class="img-block-large" style="background-image: url('<?php echo $image[0]; ?>')">
					<img src="" alt="">
				</div>
			</div>
			<div class="right-block-equal col-xs-6">
				<div class="news-item">
					<div class="title-news">
						<a href="<?php echo get_permalink($post->ID) ?>" ><?php echo $post->post_title; ?></a>
					</div>

					<div class="content-news">
						<?php echo substr_full_word(strip_tags($post->post_content),500); ?>
					</div>
				</div>
			</div>
		</div>
		<?php 
			$dataCate5 = get_post_by_slug_category('tra-loi-cho-doc-gia',3);
		?>
		<div class="block-wrapper asking-religion col-xs-12">
			<div class="title-block-wrapper col-xs-12">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-bamboo.png" alt="" class="icon-title">
				<div class="title-block">hành giả hỏi đạo</div>
				<a href="<?php echo $dataCate5['link']; ?>" class="paddle-left">Xem thêm >></a>
			</div>
			<?php foreach ($dataCate5['posts'] as $key => $post) { ?>
				<div class="news-item col-xs-12">
					<div class="title-news">
						<a href="<?php echo get_permalink($post->ID) ?>" ><span class="double-padles">>></span><?php echo $post->post_title; ?></a>
					</div>

					<div class="content-news">
						<?php 
						$content = $post->post_content;
						$content = strip_tags($content);
						echo substr_full_word($content,300)
						
						?>
					</div>
				</div>
			<?php } ?>
		</div>

	</div>


	<div class="right-content col-xs-4">
		<div class="search-box col-xs-12">
			<input type="text" name="search-box" placeholder="Tìm kiếm">
			<i class="icon-search glyphicon glyphicon-search"></i>
		</div>
		<div class="block-wrapper notification-block col-xs-12">
			<div class="title-block-wrapper col-xs-12">
				<div class="title-block">Thông báo</div>
			</div>

			<div class="news-item col-xs-12">
				<div class="img-block-right col-xs-7">
					<img src="" alt="">
				</div>
				<div class="title-news col-xs-12">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit
				</div>
			</div>
			<div class="social-share-wrapper col-xs-12">
				<div class="title-block col-xs-12">Follow us</div>
				<div class="list-social-btn col-xs-12">
					<div class="social-btn-item"><a href="#"></a></div>
					<div class="social-btn-item"><a href="#"></a></div>
					<div class="social-btn-item"><a href="#"></a></div>
					<div class="social-btn-item"><a href="#"></a></div>
				</div>

			</div>
		</div>
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
		<div class="block-wrapper audio-block col-xs-12">
			<div class="title-block-wrapper col-xs-12">
				<div class="title-block">Audio</div>
			</div>
			<div class="audio-bar col-xs-12">
				<audio controls>
					<source src="<?php echo get_stylesheet_directory_uri() ?>/old-town-road.mp3" type="audio/mpeg">
					</audio>
				</div>
				<div class="news-item active col-xs-12">
					<div class="icon-volume">
						<i class="glyphicon glyphicon-volume-up"></i>
					</div>
					<div class="content-news">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
					</div>
				</div>
				<div class="news-item col-xs-12">
					<div class="icon-volume">
						<i class="glyphicon glyphicon-volume-up"></i>
					</div>
					<div class="content-news">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  
					</div>
				</div>
				<div class="news-item col-xs-12">
					<div class="icon-volume">
						<i class="glyphicon glyphicon-volume-up"></i>
					</div>
					<div class="content-news">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
					</div>
				</div>
				<div class="news-item col-xs-12">
					<div class="icon-volume">
						<i class="glyphicon glyphicon-volume-up"></i>
					</div>
					<div class="content-news">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
					</div>
				</div>
			</div>
			<div class="block-wrapper key-search-block col-xs-12">
				<div class="title-block-wrapper col-xs-12">
					<div class="title-block">Từ khóa tìm kiếm</div>
				</div>
				<div class="key-search-content">
					Quis <span class="key-search">autem</span> vel eum iure reprehenderit, qui <span class="key-search">in ea</span>in ea voluptate velit <span class="key-search">essein ea</span> , quam nihil <span class="key-search">molestiae</span> consequatur
				</div>
			</div>
			<div class="block-wrapper statitics-block col-xs-12">
				<div class="statitic-box col-xs-12">
					<table>
						<tr>
							<th colspan="2">Thống kê</th>
						</tr>
						<tr>
							<td class="keyt-row">Đang truy cập</td>
							<td class="index-row">6</td>
						</tr>
						<tr>
							<td class="keyt-row">Máy chủ tìm kiếm</td>
							<td class="index-row">1</td>
						</tr>
						<tr>
							<td class="keyt-row">Khách viếng thăm</td>
							<td class="index-row">7</td>
						</tr>
						<tr>
							<td class="keyt-row">Hôm nay</td>
							<td class="index-row">715</td>
						</tr>
						<tr>
							<td class="keyt-row">Tháng hiện tại</td>
							<td class="index-row"><?php echo number_format(12105) ;?></td>
						</tr>
						<tr>
							<td class="keyt-row">Tổng lượt truy cập</td>
							<td class="index-row"><?php echo number_format(1002645) ;?></td>
						</tr>
					</table>

				</div>
			</div>
		</div>
		<?php
		get_footer();
		?>