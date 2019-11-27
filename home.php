<?php
get_header();
$cats = get_categories();
// var_dump(get_terms( 'nav_menu', array( 'hide_empty' => true ) ));die;
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
$video = get_posts( $args );
$dataCateSpecial = get_post_by_slug_category(CAT_SPECIAL_NAME,5);

?>
<div class="row">
	<div class="notify-wrapper col-lg-12">
		<?php dynamic_sidebar( 'notify-bar' ); ?>
	</div>
</div>

<div class="row">
	<div class="left-content col-md-8">
		<div class="block-wrapper">
			<div class="left-block-equal col-md-6">
				<?php $post1 = $dataCateSpecial['posts'][0] ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post1->ID ), 'single-post-thumbnail' ); ?>
					<div class="img-block-large col-md-12" style="background-image: url('<?php echo $image[0]; ?>')">
						<img src="" alt="">
					</div>
				<div class="block-news col-md-12">
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
			<div class="right-block-equal col-md-6">
				<div class="list-news col-md-12">
					<?php foreach ($dataCateSpecial['posts'] as $key => $post) {?>
						<?php if($key>0){ ?>
						<div class="news-item">
							<div class="content-news">
								<a href="<?php echo get_permalink($post->ID) ?>" ><?php echo $post->post_title; ?></a>
							</div>
						</div>
					<?php }} ?>
					
				</div>

			</div>
		</div>
		<?php 
			$dataCate1 = get_post_by_slug_category('sach-goi-dau-tu-tap',2);
		 ?>
		<div class="block-wrapper col-xs-12">
			<div class="title-block-wrapper col-md-12">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-bamboo.png" alt="" class="icon-title">
				<div class="title-block">Sách gối đầu tu tập</div>
				<a href="<?php echo $dataCate1['link']; ?>" class="paddle-left">Xem thêm >></a>
			</div>
			<div class="left-block-equal col-md-6">
				<div class="img-block-large">
					<img src="" alt="">
				</div>
				<div class="title-news">
					<?php echo $dataCate1['posts'][0]->title; ?>
				</div>

			</div>
			<div class="right-block-equal col-md-6">
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
			<div class="title-block-wrapper col-xs-md">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-bamboo.png" alt="" class="icon-title">
				<div class="title-block">Các bài giảng pháp</div>
				<a href="<?php echo $dataCate2['link']; ?>" class="paddle-left">Xem thêm >></a>
			</div>
			<?php 
			foreach ($dataCate2['posts'] as $key => $post) {
				if (has_post_thumbnail( $post->ID ) ): 
					?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					<div class="block-item has-img col-xs-12">
						<div class="img-block-medium " style="background-image: url('<?php echo $image[0]; ?>')">

						</div>
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
			
			
		</div>
		<?php 
			$dataCate3 = get_post_by_slug_category('phap-thuc-hanh',5);

		 ?>
		<div class="block-wrapper col-xs-12">
			<div class="title-block-wrapper col-md-12">
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
			<div class="left-block-equal col-md-6">
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
			<div class="right-block-equal col-md-6">
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
			<div class="title-block-wrapper col-md-12">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/icon-bamboo.png" alt="" class="icon-title">
				<div class="title-block">thầy thanh thiện</div>
				<a href="<?php echo $dataCate4['link']; ?>" class="paddle-left">Xem thêm >></a>
			</div>
			<div class="left-block-equal col-md-6">
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

				<div class="img-block-large" style="background-image: url('<?php echo $image[0]; ?>')">
					<img src="" alt="">
				</div>
			</div>
			<div class="right-block-equal col-md-6">
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


	<div class="right-content col-md-4">
		<?php get_sidebar(); ?>
	</div>
	<?php
	get_footer();
	?>