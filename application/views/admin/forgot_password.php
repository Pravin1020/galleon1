<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
	<meta name="author" content="Dreams Technologies">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- Apple Touch Icon -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css">

	<!-- Tabler Icon CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/plugins/tabler-icons/tabler-icons.min.css">

	<!-- Iconsax CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/iconsax.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/style.css">

</head>

<body class="bg-white">

	<!-- Begin Wrapper -->
	<div class="main-wrapper auth-bg">

		<!-- Start Content -->
		<div class="container-fuild">
			<div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">

				<!-- start row -->
				<div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
					<div class="col-lg-4 mx-auto">
						<form action="<?php echo base_url()?>forms/send_otp" method="post" class="d-flex justify-content-center align-items-center">
							<div class="d-flex flex-column justify-content-lg-center p-4 p-lg-0 pb-0 flex-fill">
								<div class=" mx-auto mb-5 text-center">
									<img src="<?php echo base_url()?>assets/img/logo/logo1.png" alt="Logo"
										style="max-width:180px; height:auto;">
								</div>
								<div class="card border-0 p-lg-3 shadow-lg rounded-2">
									<div class="card-body">
										<div class="text-center mb-3">
											<h5 class="mb-2">Forgot Paassword</h5>
											<p class="mb-0">No worries, we’ll send you reset instructions</p>
										</div>
										<div class="mb-3">
											<label class="form-label">Email Address</label>
											<div class="input-group">
												<span class="input-group-text border-end-0">
													<i class="isax isax-sms-notification"></i>
												</span>
												<input type="text" name="email" value="" class="form-control border-start-0 ps-0" placeholder="Enter Email Address">
											</div>
										</div>
										<div class="mb-3">
											<button type="submit" class="btn bg-primary-gradient text-white w-100">Reset Password</button>
										</div>
										<div class="text-center">
											<h6 class="fw-normal fs-14 text-dark mb-0">Return to
												<a href="login" class="hover-a"> Sign In</a>
											</h6>
										</div>
									</div><!-- end card body -->
								</div><!-- end card -->
							</div>
						</form>
					</div><!-- end col -->
				</div>
				<!-- end row -->

			</div>
		</div>
		<!-- End Content -->

	</div>
	 <!-- End Wrapper -->

	<!-- jQuery -->
	<script src="<?php echo base_url()?>assets/admin/js/jquery-3.7.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/admin/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url()?>assets/admin/js/script.js"></script>
</body>
</html>