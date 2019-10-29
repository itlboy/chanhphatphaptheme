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
					<?php 
					$menus = wp_get_nav_menu_items('top-menu');
					// var_dump($menus);die
					?>
					<ul class="nav nav-tabs">
						<?php foreach ($menus as $menu) {?>
						<li class="nav-item col-lg-2">
							<a class="nav-link" href="<?php echo $menu->url ?>"><?php echo $menu->title ?></a>
						</li>
						<!-- <li class="nav-item col-lg-2">
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
						</li> -->
					<?php } ?>
					</ul>
				</div>
			</header>