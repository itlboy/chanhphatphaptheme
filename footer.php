</div>
</div>
<footer>
	<div class="row">
		<div class="menu-footer col-lg-12">
			<?php 
			wp_nav_menu(
				array(
					'menu'=>'top-menu',
					'menu_class'=>'nav nav-tabs',
				)
			);

			$menus = wp_get_nav_menu_items('top-menu');
			?>
			<!-- <ul class="nav nav-tabs">
				<li class="nav-item col-lg-1">
					<a class="nav-link " href="#">Trang chủ</a>
				</li>
				<li class="nav-item col-lg-2">
					<a class="nav-link active" href="#">Sách gối đầu tu tập</a>
				</li>
				<li class="nav-item dropdown col-lg-2">
					<a class="nav-link" href="#">Pháp thực hành</a>

				</li>
				<li class="nav-item col-lg-2">
					<a class="nav-link" href="#">Các bài giảng pháp</a>
				</li>
				<li class="nav-item col-lg-2">
					<a class="nav-link" href="#">Thầy thanh thiện</a>
				</li>
				<li class="nav-item col-lg-2">
					<a class="nav-link" href="#">Hành giả hồi đạo</a>
				</li>
				<li class="nav-item col-lg-1">
					<a class="nav-link" href="#">Video/ audio</a>
				</li>
			</ul> -->
		</div>
	</div>
	<div class="row">
		
		<div class="footer-content col-md-12">
			<div class="logo-wrapper col-md-5">
				<div class="logo-content col-md-6">
					<div class="logo-image-wraper">
						<div class="logo-image">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/images/phathien.png" alt="">
						</div>
					</div>
				</div>
				<div class="logo-title col-md-6">
					<div class="title-top">tu hành đúng</div>
					<div class="title-bottom">chánh phật pháp</div>

				</div>
			</div>
			<div class="link-wrapper col-md-3">
				<?php 
				wp_nav_menu(
					array(
						'menu'=>'menu-link-footer',
						'menu_class'=>'nav nav-tabs col-xs-12',
					)
				); ?>
				
			</div>
			<div class="contact-wrapper col-md-4">
				<div class="title-contact">
					Địa chỉ liên hệ
				</div>
				<div class="contact-content">
					<p>101 Tây Sơn, Quận Đống Đa, Hà Nội</p>
					<p>Email: tuhanhdungchanhphatphap@gmail.com</p>
					<p>ĐT: (012) 123 456/Fax: (034) 123 456</p>
				</div>
			</div>
		</div>
	</div>
	

	
</footer>

</div> <!-- /.container -->
</div> 

<?php wp_enqueue_script( 'script', get_template_directory_uri() . '/js/app.js', array ( 'jquery' ), 1.1, true); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>