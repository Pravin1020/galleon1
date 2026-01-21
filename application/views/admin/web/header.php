  <!DOCTYPE html>
  <html lang="en" data-layout="without-header">

  <head>
  	<!-- Meta Tags -->
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Galleon-Admin</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="description" content="Galleon">
  	<meta name="keywords"
  		content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
  	<meta name="author" content="Dreams Technologies">

  	<!-- Favicon -->
  	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets\img\favicon.png">

  	<!-- Apple Touch Icon -->
  	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url()?>assets/admin/img/logo/fav.png">

  	<!-- Theme Script js -->
  	<script src="<?php echo base_url()?>assets/admin/js/theme-script.js"></script>

  	<!-- Bootstrap CSS -->
  	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css">

  	<!-- Tabler Icon CSS -->
  	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/tabler-icons/tabler-icons.min.css">

  	<!-- Fontawesome CSS -->
  	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/fontawesome/css/fontawesome.min.css">
  	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/fontawesome/css/all.min.css">

  	<!-- Simplebar CSS -->
  	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/simplebar/simplebar.min.css">
  	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/select2/css/select2.min.css">
  	<!-- Bootstrap Tagsinput CSS -->
  	<link rel="stylesheet"
  		href="<?php echo base_url()?>assets/admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

  	<!-- Quill CSS -->
  	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/quill/quill.snow.css">

  	<!-- Iconsax CSS -->
  	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/iconsax.css">

  	<!-- Main CSS -->
  	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/style.css">
  	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/dataTables.bootstrap5.min.css">
  	<link rel="stylesheet"
  		href="<?php echo base_url()?>assets/admin/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">
  	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/daterangepicker/daterangepicker.css">

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>


  </head>

  	<!-- Begin Wrapper -->
  	<div class="main-wrapper">

  		<!-- Topbar Start -->
  		<div class="header">
  			<div class="main-header">

  				<!-- Logo -->
  				<div class="header-left">
  					<a href="" class="logo">
  						<img src="<?php echo base_url()?>assets/imgs/logo/v.png" alt="Logo">
  					</a>
  					<a href="" class="dark-logo">
  						<img src="<?php echo base_url()?>assets/imgs/logo/v.png" alt="Logo">
  					</a>
  				</div>

  				<!-- Sidebar Menu Toggle Button -->
  				<!-- <a id="mobile_btn" class="mobile_btn" href="#sidebar">
  					<span class="bar-icon">
  						<span></span>
  						<span></span>
  						<span></span>
  					</span>
  				</a> -->

  				<div class="header-user">
  					<div class="nav user-menu nav-list">
  						<div class="me-auto d-flex align-items-center" id="header-search">

  						</div>

  						<div class="d-flex align-items-center">
  							<!-- Light/Dark Mode Button -->
  							<!-- <div class="me-2 theme-item">
  								<a href="javascript:void(0);" id="dark-mode-toggle"
  									class="theme-toggle btn btn-menubar">
  									<i class="isax isax-moon"></i>
  								</a>
  								<a href="javascript:void(0);" id="light-mode-toggle"
  									class="theme-toggle btn btn-menubar">
  									<i class="isax isax-sun-1"></i>
  								</a>
  							</div> -->

  							<!-- User Dropdown -->
  							<div class="dropdown profile-dropdown">
  								<a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center"
  									data-bs-toggle="dropdown" data-bs-auto-close="outside">
  									<span class="avatar online">
  										<img src="<?php echo base_url()?>assets/admin/img/login.png" alt="Img"
  											class="img-fluid rounded-circle">
  									</span>
  								</a>
  								<div class="dropdown-menu p-2">
  									<div class="d-flex align-items-center bg-light rounded-1 p-2 mb-2">
  										<span class="avatar avatar-lg me-2">
  											<img src="<?php echo base_url()?>assets/img/logo/logo1.png" alt="img"
  												class="rounded-circle">
  										</span>
  										<div>
  											<h6 class="fs-14 fw-medium mb-1">Galleon</h6>
  											<p class="fs-13">Administrator</p>
  										</div>
  									</div>

  									<!-- Item-->
  									<a class="dropdown-item d-flex align-items-center"
  										href="<?php echo base_url()?>admin/index">
  										<i class="isax isax-profile-circle me-2"></i>Profile Settings
  									</a>
  									<hr class="dropdown-divider my-2">

  									<!-- Item-->
  									<a class="dropdown-item logout d-flex align-items-center"
  										href="<?php echo base_url()?>admin/login">
  										<i class="isax isax-logout me-2"></i>Sign Out
  									</a>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>

  				<!-- Mobile Menu -->
  				<div class="dropdown mobile-user-menu profile-dropdown">
  					<a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center"
  						data-bs-toggle="dropdown" data-bs-auto-close="outside">
  						<span class="avatar avatar-md online">
  							<img src="<?php echo base_url()?>assets\img\logo\nwlogo.png" alt="Img"
  								class="img-fluid rounded-circle">
  						</span>
  					</a>
  					<div class="dropdown-menu p-2 mt-0">
  						<a class="dropdown-item d-flex align-items-center" href="<?php echo base_url()?>admin/index">
  							<i class="isax isax-profile-circle me-2"></i>Profile Settings
  						</a>
  						<a class="dropdown-item logout d-flex align-items-center"
  							href="<?php echo base_url()?>admin/login">
  							<i class="isax isax-logout me-2"></i>Signout
  						</a>
  					</div>
  				</div>
  				<!-- /Mobile Menu -->
  			</div>
  		</div>
  		<!-- Topbar End -->

  		<!-- Sidenav Menu Start -->
  		<div class="" id="two-col-sidebar">
  			<div class="sidebar" id="sidebar-two">
  				<!-- Start Logo -->
  				<div class="sidebar-logo">
  					<a href="<?php echo base_url()?>admin/index" class="logo logo-normal">
  						<img src="<?php echo base_url()?>assets/img/logo/logo1.png" alt="Logo"
  							style="height:auto; width:100px; object-fit:contain;">
  					</a>
  					<a href="<?php echo base_url()?>admin/index" class="logo-small">
  						<img src="<?php echo base_url()?>assets\img\favicon.png" alt="Logo">
  					</a>
  					<a href="<?php echo base_url()?>admin/index" class="dark-logo">
  						<img src="<?php echo base_url()?>assets/img/logo/logo1.pn" alt="Logo">
  					</a>
  					<a href="<?php echo base_url()?>admin/index" class="dark-small">
  						<img src="<?php echo base_url()?>assets\img\favicon.png" alt="Logo">
  					</a>

  					<!-- Sidebar Hover Menu Toggle Button -->
  					<!-- <a id="toggle_btn" href="javascript:void(0);">
  						<i class="isax isax-menu-1"></i>
  					</a> -->
  				</div>
  				<!-- End Logo -->

  				<!-- Search -->
  				<div class="sidebar-search">
  					<div class="input-icon-end position-relative">
  						<input type="text" class="form-control" placeholder="Search">
  						<span class="input-icon-addon">
  							<i class="isax isax-search-normal"></i>
  						</span>
  					</div>
  				</div>
  				<!-- /Search -->

  				<!--- Sidenav Menu -->
  				<div class="sidebar-inner" data-simplebar>
  					<div id="sidebar-menu" class="sidebar-menu">
  						<ul>
  							<li class="menu-title"><span>Main</span></li>
  							<li>
  								<ul>
  									<li class>
  										<a href="<?php echo base_url()?>admin/admin_dashboard">
  											<i class="isax isax-element-45"></i><span>Admin Dashboard</span>
  										</a>
  										
  									</li>
									<li class>
  										<a href="<?php echo base_url()?>admin/index">
  											<i class="isax isax-element-45"></i><span>Profile Management</span>
  										</a>
  										
  									</li>
  									<!-- <li class="submenu">
  										<a href="javascript:void(0);">
  											<i class="isax isax-element-45"></i><span>Profile Management</span>
  											<span class="menu-arrow"></span>
  										</a>
  										<ul>
  											<li><a href="<?php echo base_url()?>admin/index">Company Settings</a></li>
  											
  										</ul>
  									</li> -->

  									<li class="submenu">
  										<a href="javascript:void(0);">
  											<i class="isax isax-slider-vertical-15"></i><span>Event Management</span>
  											<span class="menu-arrow"></span>
  										</a>
  										<ul>
  											<li><a href="<?php echo base_url()?>admin/eventadd">Add </a></li>
  											<li><a href="<?php echo base_url()?>admin/eventlist">List view</a></li>
  										</ul>
  									</li>

  									<li class="submenu">
  										<a href="javascript:void(0);">
  											<i class="isax isax-book5"></i><span>Service Management</span>
  											<span class="menu-arrow"></span>
  										</a>
  										<ul>
  											<li><a href="<?php echo base_url()?>admin/serviceadd">Add</a></li>
  											<li><a href="<?php echo base_url()?>admin/servicelist">List view</a></li>
  										</ul>
  									</li>

  									<li class="submenu">
  										<a href="javascript:void(0);">
  											<i class="isax isax-book5"></i><span>Blog Management</span>
  											<span class="menu-arrow"></span>
  										</a>
  										<ul>
  											<li><a href="<?php echo base_url()?>admin/blogadd">Add</a></li>
  											<li><a href="<?php echo base_url()?>admin/bloglist"> List view</a></li>
  										</ul>
  									</li>

  									<li class="submenu">
  										<a href="javascript:void(0);">
  											<i class="isax isax-book5"></i><span>Products Management</span>
  											<span class="menu-arrow"></span>
  										</a>
  										<ul>
  											<li><a href="<?php echo base_url()?>admin/productadd">Add</a></li>
  											<li><a href="<?php echo base_url()?>admin/productlist">List view</a></li>
  											<li><a href="<?php echo base_url()?>admin/category">Category</a></li>
  										</ul>
  									</li>
  								</ul>
  							</li>
  						</ul>
  					</div>
  				</div>
  			</div>
  		</div>
  		<!-- Sidenav Menu End -->
  	</div>
  
