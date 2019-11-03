<?php
/**
* A Simple Category Template
*/

get_header(); 
wp_enqueue_style( 'style', get_template_directory_uri() . '/category-page/category.css');
?> 
<?php 
$args = array(
	'orderby' => array( 'title' => 'DESC', 'menu_order' => 'ASC' )
);

$query = new WP_Query( $args );
 ?>
<div class="left-content col-xs-8">
	<div class="block-wrapper col-xs-12">
		<div class="title-block-wrapper col-xs-12">
			<div class="title-block"><?php echo single_cat_title( '', false ); ?></div>
			<div class="dropdown dropdown-order-by">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownOrderBy" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="glyphicon glyphicon-chevron-down"></i>
					Sắp xếp theo
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="<?php add_action( 'pre_get_posts', 'prefix_modify_query_order' ); ?>">Thời gian</a>
					<a class="dropdown-item" href="#">Tiêu đề</a>

				</div>
			</div>
		</div>


		<?php
		if ( category_description() ) : ?>
			<div class="block-news col-xs-12">
				<div class="content-news">
					<?php echo category_description(); ?>
				</div>
			</div>
		<?php endif; ?>
		


	</div>
	<!-- <div class="block-wrapper block-split col-xs-12">
		<div class="left-block-equal col-xs-6">
			<div class="img-block-large">
				<img src="" alt="">
			</div>
			<div class="block-news">
				<div class="title-news">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit
				</div>
			</div>
		</div>
		<div class="right-block-equal col-xs-6">
			<div class="list-news">
				<div class="news-item">
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
				</div>

			</div>

		</div>
	</div> -->
	<div class="block-wrapper col-xs-12">
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
		</div> -->
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

		</div> -->

		<?php 
		if ( have_posts() ) : ?>
			<?php

			while ( have_posts() ) :the_post(); ?>
				<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<div class="block-item col-xs-12">
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					<div id="custom-bg" class="img-block-medium col-xs-2"  style="background-image: url('<?php echo $image[0]; ?>')">

					</div>
				<?php endif; ?>

				<div class="block-news <?php if (has_post_thumbnail( $post->ID ) ): ?> col-xs-10 <?php else: ?> col-xs-12 <?php endif; ?>">
					<div class="title-news">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</div>
					<div class="content-news">
						<?php 
						$content = get_the_content();
						$content = strip_tags($content);
						echo substr($content, 0, 300);
						?>
					</div>
				</div>
				<?php if (has_post_thumbnail( $post->ID ) ): ?>
					</div>
				<?php endif; ?>


			<?php endwhile; 

			else: ?>
				<p>Sorry, no posts matched your criteria.</p>


			<?php endif; ?>

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
		<div class="block-news col-xs-12">
			<div class="title-news">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu
			</div>
			<div class="content-news">
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
		<div class="block-news col-xs-12">
			<div class="title-news">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu
			</div>
			<div class="content-news">
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
		<div class="block-news col-xs-12">
			<div class="title-news">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu
			</div>
			<div class="content-news">
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
		<div class="block-news col-xs-12">
			<div class="title-news">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu
			</div>
			<div class="content-news">
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
		<div class="block-news col-xs-12">
			<div class="title-news">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqu
			</div>
			<div class="content-news">
				Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div> -->
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


</div>


<div class="right-content col-xs-4">
	<?php get_sidebar(); ?>

</div>




<?php get_footer(); ?>