<?php
get_header();
wp_enqueue_style( 'style', get_template_directory_uri() . '/contact-page/contact.css');
	?>
	<div class="main-content col-lg-12">
			
				<div class="content col-xs-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
							<li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
						</ol>
					</nav>
					<div class="left-content col-xs-8">
						
						<div class="block-wrapper contact-wrapper col-xs-12">
							<?php
							if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content(); 
							endwhile; endif;
							?>
							<div class="contact-form col-xs-8">
								<div class="title-contact">Gửi thư cho chúng tôi</div>
								<form action="subcribe" method="post" class="form-contact">
									<input type="text" name="txtName" placeholder="Name">
									<input type="text" name="txtMail" placeholder="Email">
									<textarea name="txtMessage" placeholder="Your Message" id="messgage-post"></textarea>
									<button type="submit">Gửi thư</button>
								</form>
							</div>
						</div>
						
					</div>

					<div class="right-content col-xs-4">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>

	<?php
get_footer();
?>