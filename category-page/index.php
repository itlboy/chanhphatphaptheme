<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Blog Template for Bootstrap</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/app.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/category-page/category.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php wp_head();?>
</head>

<body>
	<div class="wrapper-main">
		<img src="<?php echo get_stylesheet_directory_uri() ?>/images/bamboo.png" id="bamboo-bg-right" alt="" >
		<img src="<?php echo get_stylesheet_directory_uri() ?>/images/bamboo.png" id="bamboo-bg-left" alt="" >
		<div class="container">
			<header>
				<div class="row">
					<div class="contact-address col-lg-12">	
						<div class="contact-content">Phone: (0123) 456 789 021 | Email: tuhanhchanhphatphap@gmail.com</div>
						<div class="lang-page">
							<a href="#">VN</a> | <a href="#">EN</a>
						</div>	

					</div>
				</div>
				<div class="row">
					<div class="logo-wrapper col-lg-12">
						<div class="logo-title col-lg-5">
							<div class="title-top">Dẫn dắt hành giả</div>
							<div class="title-bottom">hiểu rõ chánh pháp</div>
							
						</div>
						<div class="logo-content col-lg-2">
							<div class="logo-image-wraper">
								<div class="logo-image">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/images/phathien.png" alt="">
								</div>
							</div>
						</div>
						<div class="logo-title col-lg-5">
							<div class="title-top">Hướng dẫn hành giả</div>
							<div class="title-bottom">tu hành đạt được chứng quả</div>
						</div>

					</div>
					<div class="title-content col-lg-12">tu hành đúng chánh phật pháp</div>
				</div>
				<div class="row">
					<div class="slide-show-wrapper col-lg-12">
						<img class="col-lg-12" src="<?php echo get_stylesheet_directory_uri() ?>/images/slide.png" alt="">
					</div>
					
				</div>
				<div class="row">
					<div class="slogan-wrapper col-lg-12">
						Một cây làm chẳng lên non - Ba cây chụm lại nên hòn núi cao
					</div>
					
				</div>
				<div class="menu-wrapper col-lg-12">
					<ul class="nav nav-tabs">
						<li class="nav-item col-lg-1">
							<a class="nav-link active" href="#">Trang chủ</a>
						</li>
						<li class="nav-item col-lg-2">
							<a class="nav-link" href="#">Sách gối đầu tu tập</a>
						</li>
						<li class="nav-item dropdown col-lg-2">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">pháp thực hành</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Pháp thực hành link 01</a>
								<a class="dropdown-item" href="#">Pháp thực hành link 02</a>
								<a class="dropdown-item" href="#">Pháp thực hành link 03</a>
							</div>
						</li>
						<li class="nav-item col-lg-2">
							<a class="nav-link" href="#">các bài giảng pháp</a>
						</li>
						<li class="nav-item col-lg-2">
							<a class="nav-link" href="#">thầy thanh thiện</a>
						</li>
						<li class="nav-item col-lg-2">
							<a class="nav-link" href="#">hành giả hồi đạo</a>
						</li>
						<li class="nav-item col-lg-1">
							<a class="nav-link" href="#">Video/ audio</a>
						</li>
					</ul>
				</div>
			</header>
			<div class="main-content col-lg-12">
			
				<div class="content col-xs-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
							<li class="breadcrumb-item active" aria-current="page">Các bài giảng pháp</li>
						</ol>
					</nav>
					<div class="left-content col-xs-8">
						<div class="block-wrapper col-xs-12">
							<div class="title-block-wrapper col-xs-12">
								<div class="title-block">Các bài giảng pháp</div>
								<!-- <a href="#" class="paddle-left">Xem thêm >></a> -->
								<div class="dropdown dropdown-order-by">
									<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownOrderBy" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="glyphicon glyphicon-chevron-down"></i>
										Sắp xếp theo
									</button>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										<a class="dropdown-item" href="#">Tiêu chí 1</a>
										<a class="dropdown-item" href="#">Tiêu chí 2</a>
										
									</div>
								</div>
							</div>
							<div class="block-news col-xs-12">
								<div class="content-news">
									Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>

							
						</div>
						<div class="block-wrapper block-split col-xs-12">
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
						</div>
						<div class="block-wrapper col-xs-12">
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
							</div>
							<nav id="pagination-wrapper">
								<ul class="pagination">
									<!-- <li class="page-item">
										<a class="page-link" href="#" aria-label="Previous">
											<span aria-hidden="true">&laquo;</span>
										</a>
									</li> -->
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
							</nav>
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
				</div>
			</div>
			<footer>
				<div class="row">
					<div class="menu-footer col-lg-12">
						<ul class="nav nav-tabs">
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
						</ul>
					</div>
					<div class="footer-content col-xs-12">
						<div class="logo-wrapper col-xs-5">
							<div class="logo-content col-xs-6">
								<div class="logo-image-wraper">
									<div class="logo-image">
										<img src="<?php echo get_stylesheet_directory_uri() ?>/images/phathien.png" alt="">
									</div>
								</div>
							</div>
							<div class="logo-title col-xs-6">
								<div class="title-top">tu hành đúng</div>
								<div class="title-bottom">chánh phật pháp</div>

							</div>
						</div>
						<div class="link-wrapper col-xs-3">
							<div class="list-news-link col-xs-6">
								<div class="link-item"><a href="">Link bài viết 1</a></div>
								<div class="link-item"><a href="">Link bài viết 2</a></div>
								<div class="link-item"><a href="">Link bài viết 3</a></div>
								<div class="link-item"><a href="">Link bài viết 4</a></div>
							</div>
							<div class="list-news-link col-xs-6">
								<div class="link-item"><a href="">Link bài viết 1</a></div>
								<div class="link-item"><a href="">Link bài viết 2</a></div>
								<div class="link-item"><a href="">Link bài viết 3</a></div>
								<div class="link-item"><a href="">Link bài viết 4</a></div>
							</div>
							</div>
						<div class="contact-wrapper col-xs-4">
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




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>