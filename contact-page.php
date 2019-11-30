<?php /* Template Name: contactPage */ ?>
<?php
get_header();
wp_enqueue_style( 'style', get_template_directory_uri() . '/contact-page/contact.css');
?>
<div class="row">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
			<li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
		</ol>
	</nav>
	<div class="left-content col-md-8">
		<div class="block-wrapper contact-wrapper col-md-12">
			<div class="title-contact">Liên hệ</div>
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
			</div>
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
	<div class="right-content col-md-4">
		<?php get_sidebar(); ?>

	</div>

<?php
get_footer();
?>