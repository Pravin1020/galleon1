<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Galleon Instru Tech - Best indoor air quality monitoring & consultancy services in India</title>

	<!-- google fonts  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Manrope:wght@200..800&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
		rel="stylesheet">


	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon"
		href="<?php echo base_url()?>uploads/logo/<?php echo $profile->favicon?>">

	<!-- bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">

	<!-- slick-slider  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/slick.min.css">
	<!-- fontawesome  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontawesome.min.css">
	<!-- megnific popup  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/magnific-popup.css">
	<!-- aos  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/aos.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.min.css">

	<!-- custom css  -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css?v=<?php echo date('dmyhis')?>">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css">

	<!-- Swiper CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">


	<!-- Swiper JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body>

	<!--============================ Preloader ======================================== -->
	<div class="preloader">
		<div class="loader-img">
			<img src="<?php echo base_url()?>assets/img/logo/logo.png" alt="">
		</div>
		<div class="loader"></div>
	</div>
	<!--========== Preloader ======================== -->

	<div class="canvas-wrapper">
		<nav class="side-slide">
			<div class="off-cavas-menu-overly side-box-bar"></div>
			<div class="offcanvas-wrap">
				<div class="off-canvas-logo">
					<a href="home-two"><img src="assets/img/footer-logo.png" alt=""></a>
				</div>
			</div>
			<div class="off-canvas-content">
				<h4>About Us</h4>
				<div class="off-canvas-desc"> The argument in favor of using filler text goes something like this: If
					you use real content in the Consulting Process, anytime you reach a review</div>
				<div class="off-canvas-contact-info">
					<h4 class="info-title"> Contact Info </h4>
					<ul class="info-list">
						<li><i class="fas fa-map-marker-alt"></i>Gami Industrial Park, Pawne MIDC, Navi Mumbai</li>
						<li> <i aria-hidden="true" class="fas fa-envelope"></i>info@galleon.co.in</li>
						<li> <i aria-hidden="true" class="fas fa-clock"></i>Mon - Sat: 9:00 AM to 6:00 PM</li>
					</ul>
				</div>
				<ul>
					<li>Follow Us On:</li>
					<li><a href="<?php echo $profile->facebook ?>" target="_blank" rel="noopener noreferrer">
							<i class="fab fa-facebook-f"></i>
						</a></li>
					<li><a href="<?php echo $profile->linkedin ?>" target="_blank" rel="noopener noreferrer">
							<i class="fab fa-linkedin"></i>
						</a></li>
					<li><a href="<?php echo $profile->instagram ?>" target="_blank" rel="noopener noreferrer">
							<i class="fab fa-instagram"></i>
						</a></li>
					<li><a href="<?php echo $profile->twitter ?>" target="_blank" rel="noopener noreferrer">
							<i class="fab fa-twitter"></i>
						</a></li>
				</ul>
				<div class="close-icon">
					<h3 class="nav01 side-box-bar">x</h3>
				</div>
			</div>
		</nav>
	</div>


	<!-- ===========================Mobile menu ================================== -->
	<div class="vektor-menu-wrapper">
		<div class="vektor-menu-area text-center">
			<button class="vektor-menu-toggle"><i class="fas fa-times"></i></button>
			<div class="mobile-logo">
				<a href="<?php echo base_url()?>home"><img
						src="<?php echo base_url()?>uploads/logo/<?php echo $profile->logo?>" alt="logo"></a>
			</div>
			<div class="vektor-mobile-menu">
				<ul>
					<li><a href="<?php echo base_url()?>">Home</a></li>
					<li><a href="<?php echo base_url()?>about">About</a></li>
					<li><a href="<?php echo base_url()?>service">Service</a> </li>
					<li>
						<a href="javascript:void(0);">
							Products
							<span class="vektor-mean-expand"></span>
						</a>

						<ul>
							<?php if(!empty($category)){ foreach($category as $cat){ ?>

							<li>
								<a href="javascript:void(0);">
									<?php echo $cat['cname']; ?>
									<span class="vektor-mean-expand"></span>
								</a>

								<ul>
									<?php if(!empty($subcategory)){
				foreach($subcategory as $sub){
					if($cat['cname'] == $sub['category']){ ?>

									<li>
										<a href="<?php echo base_url(
							'p2/'.str_replace(' ','_',$cat['cname']).'/'.$sub['id']
						); ?>">
											<?php echo $sub['ptitle']; ?>
										</a>
									</li>

									<?php }}} ?>
								</ul>
							</li>

							<?php }} ?>
						</ul>
					</li>

					<li><a href="<?php echo base_url()?>event">Event</a> </li>
					<li><a href="<?php echo base_url()?>blog">Blog</a> </li>
					<li><a href="<?php echo base_url()?>contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade searchBox-menu" id="exampleModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<form method="get" class="searchform pop_search" action="#">
						<input type="search" value="" name="s" placeholder="Search here... " title="Search for:">
						<button type="submit"><i class="fas fa-search"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!--================== Start Header Area  =======================-->
	<header id="header_area-wrapper">
		<div class="header_top home-two-top-menu">
			<div class="header_top_left">
				<ul>
					<li><i class="fas fa-map-marker-alt"></i>Gami Industrial Park, Pawne MIDC, Navi Mumbai</li>
					<li>
						<i class="fas fa-envelope" aria-hidden="true"></i>Email us :<a
							href="mailto:<?php echo $profile->email?>"><?php echo $profile->email?></a>
					</li>
				</ul>
			</div>
			<div class="header_top_right">
				<ul>
					<li>Follow Us On:</li>
					<li><a href="<?php echo $profile->facebook ?>" target="_blank" rel="noopener noreferrer">
							<i class="fab fa-facebook-f"></i>
						</a></li>
					<li><a href="<?php echo $profile->linkedin ?>" target="_blank" rel="noopener noreferrer">
							<i class="fab fa-linkedin"></i>
						</a></li>
					<li><a href="<?php echo $profile->instagram ?>" target="_blank" rel="noopener noreferrer">
							<i class="fab fa-instagram"></i>
						</a></li>
					<li><a href="<?php echo $profile->twitter ?>" target="_blank" rel="noopener noreferrer">
							<i class="fab fa-twitter"></i>
						</a></li>
				</ul>
			</div>
		</div>

		<div class="stickey-wrapper">
			<!-- Start header menu  -->
			<div class="header_menu home-two-menubar container">
				<div class="container-fluid">
					<div class="header-two-main-wrapper row align-items-center">
						<div class="col-auto col-xxl-3 col-xl-3 col-lg-3 logo_center all-padding-0">
							<div class="brands_logo">

								<a href="<?php echo base_url()?>home"><img
										src="<?php echo base_url()?>uploads/logo/<?php echo $profile->logo?>"
										alt="logo"></a>
							</div>
						</div>
						<div class="col-auto col-xxl-6 col-xl-9 col-lg-9 menu_center text-center all-padding-0">
							<div class="main-menu">
								<ul>
									<li><a href="<?php echo base_url()?>">Home</a></li>
									<li><a href="<?php echo base_url()?>about">About</a></li>
									<li><a href="<?php echo base_url()?>service">Service</a></li>

									<!-- PRODUCTS MENU WITH SUBCATEGORY -->
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
											Products
										</a>

										<ul class="dropdown-menu">

											<?php foreach($category as $cat){ ?>
											<li class="dropdown-submenu">

												<!-- Category -->
												<a class="dropdown-item dropdown-toggle"
													href="<?php echo base_url('p2/'.str_replace(' ','_',$cat['cname'])); ?>">
													<?php echo $cat['cname']; ?>
												</a>

												<!-- Submenu: Products under this category -->
												<ul class="dropdown-menu" style="max-height: 350px; overflow-y: auto;">
													<?php if(!empty($subcategory)){ ?>
													<?php foreach($subcategory as $sub):
            										if($cat['cname']==$sub['category']):?>

													<li>
														<a
															href="<?php echo base_url('p2/'.str_replace(' ','_',$cat['cname']).'/'.$sub['id']); ?>">
															<?php echo $sub['ptitle'];?>
														</a>
													</li>

													<?php endif; endforeach;?>

													<?php } ?>
												</ul>
											</li>
											<?php } ?>
										</ul>
									</li>

									<li><a href="<?php echo base_url()?>event">Event</a></li>
									<li><a href="<?php echo base_url()?>blog">Blog</a></li>
									<li><a href="<?php echo base_url()?>contact">Contact</a></li>
								</ul>
							</div>


							<button type="button" class="vektor-menu-toggle menuShow d-inline-block d-lg-none"><i
									class="fas fa-bars"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Swiper CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

	<!-- Swiper JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
</body>
