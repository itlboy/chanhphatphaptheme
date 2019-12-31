<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo get_bloginfo('name'); ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/app.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/pinwheel.css">
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
					<div class="col-sm-18 col-md-19 col-sm-push-6 col-md-push-5">
						<div class="pinwheel_slider pinwheel_slider_set4 " style="text-align:center">
							<div id="pinwheel_slider_1_prev" class="pinwheel_prev" style="top:45%;left:8%;" ><img src="<?php echo get_stylesheet_directory_uri() ?>/images/prev.png" width="32" height="32" /></div>
							<div id="pinwheel_slider_1_next" class="pinwheel_next" style="top:45%;right:10%;" ><img src="<?php echo get_stylesheet_directory_uri() ?>/images/next.png" width="32" height="32" /></div> 
							<div id="pinwheel_slider_1" class="pinwheel_slider_handle" style="width:100%;height:350px;"> 
								<div class="pinwheel_slideri carousel-feature" >
									<img src="<?php echo get_stylesheet_directory_uri() ?>/images/alahan-ttl_1.png" alt="Slide 1" data-anim="" class="slider_thumbnail full pinwheel_slider_thumbnail carousel-image " width="450" height="300" /><div class="textshow"></div>			 
								</div>
								<div class="pinwheel_slideri carousel-feature" >
									<img src="<?php echo get_stylesheet_directory_uri() ?>/images/einstein_1.png" alt="Einstein" data-anim="" class="slider_thumbnail full pinwheel_slider_thumbnail carousel-image " width="450" height="300" /><div class="textshow"></div>			 
								</div>
								<div class="pinwheel_slideri carousel-feature" >
									<img src="<?php echo get_stylesheet_directory_uri() ?>/images/thay-mc-4.png" alt="slide 4" data-anim="" class="slider_thumbnail full pinwheel_slider_thumbnail carousel-image " width="450" height="300" /><div class="textshow"></div>			 
								</div>
							</div>

						</div>
					</div>
					
					<!-- <div class="slide-show-wrapper col-lg-12">
						<img class="col-lg-12" src="<?php echo get_stylesheet_directory_uri() ?>/images/slide.png" alt="">
					</div> -->
					
				</div>
				<div class="row">
					<div class="slogan-wrapper col-lg-12">
						Một cây làm chẳng lên non - Ba cây chụm lại nên hòn núi cao
					</div>
					
				</div>
				<div class="row">
					<div class="menu-wrapper col-lg-12">
						<?php 

						wp_nav_menu(
							array(
								'menu'=>'top-menu',
								'menu_class'=>'nav nav-tabs',
							)
						);

						$menus = wp_get_nav_menu_items('top-menu');
						?>
						<a id="show-menu" href="javascript:void(0)"><i class="glyphicon glyphicon-menu-down"></i></a>
						<?php wp_nav_menu( array( 
							'theme_location' => 'mobile-menu',
							'container' => 'nav',
							'container_class' => 'mobile-menu',
							'container_id' => 'sidr'
						) ); ?>
						
					</div>
					
				</div>
				
			</header>
			<div class="main-content col-lg-12">
			
					