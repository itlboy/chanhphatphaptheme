<?php 
get_header();
wp_enqueue_style( 'style', get_template_directory_uri() . '/category-page/category.css');


?>
<div class="row">
	
<div class="left-content col-xs-8">
	<div class="block-wrapper col-xs-12">
		<div class="title-block-wrapper col-xs-12">
			<div class="title-block">Tìm kiếm từ khoá : <?php echo single_tag_title(); ?> </div>
			
		</div>

	</div>
	
	<div class="block-wrapper col-xs-12">
		<?php 
		if ( have_posts() ) : ?>
			<?php

			while ( have_posts() ) :the_post(); ?>
				

				<div class="block-news col-xs-12">
					<div class="title-news">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</div>
					<div class="content-news">
						<?php 
						$content = get_the_content();
						$content = strip_tags($content);
						echo substr_full_word($content, 300);
						?>
					</div>
				</div>
				


			<?php endwhile; 

			else: ?>
				<p>Xin lỗi, không có bài viết nào có từ khóa "<?php echo single_tag_title(); ?>"</p>


			<?php endif; ?>
			<?php
			echo get_the_posts_pagination(
				array(
					'mid_size' => 2,
					'prev_text' => 'Trang trước',
					'next_text' => 'Trang sau',
				)
			);
			?> 

		
		


	</div>


</div>


<div class="right-content col-xs-4">
	<?php get_sidebar(); ?>

</div>

<?php
get_footer();
?>
