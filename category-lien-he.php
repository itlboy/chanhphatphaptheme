<?php
get_header();
wp_enqueue_style( 'style', get_template_directory_uri() . '/contact-page/contact.css');
if ( have_posts() ) : while ( have_posts() ) : the_post();
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
							<?php the_content(); ?>
							<!-- <div class="title-contact">Liên hệ</div>
							<div class="content-news">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sed risus pretium quam vulputate dignissim. Proin fermentum leo vel orci porta. Nam at lectus urna duis. Aliquet lectus proin nibh nisl condimentum id venenatis a. Suspendisse ultrices gravida dictum fusce ut. Eu sem integer vitae justo eget magna fermentum iaculis. Eget arcu dictum varius duis at consectetur. Vulputate dignissim suspendisse in est ante in nibh. Sed euismod nisi porta lorem mollis aliquam ut porttitor leo. Pharetra massa massa ultricies mi quis hendrerit dolor magna eget. Amet venenatis urna cursus eget. Id leo in vitae turpis massa sed elementum. Diam quis enim lobortis scelerisque fermentum. Aliquet porttitor lacus luctus accumsan tortor posuere. Convallis a cras semper auctor neque vitae tempus.
							</div>
							<div class="contact-detail">
								<div class="title-contact">Chi Tiết Liên Hệ</div>
								<div class="address-contact">Địa chỉ: tuhanhdungchanhphatphap, 123 Thái Hà, Đống Đa, Hà Nội</div>
								<div class="phone-contact">(084) 123 9465</div>
								<div class="fax-contact">(084) 123 12578(fax)</div>
								<div class="email-contact">
									<span>Email: </span>
									<span class="content-email">contact@yoursite.com</span>
								</div>
							</div> -->
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
				</div>
			</div>

	<?php
endwhile; endif;
get_footer();
?>