<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Two Step Verification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Kanakku is a Sales, Invoices & Accounts Admin template for Accountant or Companies/Offices with various features for all your needs. Try Demo and Buy Now.">
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

		<!-- ========================
			Start Page Content
		========================= -->

		<div class="container-fuild">
			<div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">

				<!-- start row -->
				<div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
					<div class="col-lg-4 mx-auto">
						<form action="<?php echo base_url()?>forms/check_otp" method="post" class="digit-group d-flex justify-content-center align-items-center">
							<div class="d-flex flex-column justify-content-lg-center p-4 p-lg-0 pb-0 flex-fill">
								<div class=" mx-auto mb-5 text-center">
									<img src="<?php echo base_url()?>assets/img/logo/logo1.png" alt="Logo"
										style="max-width:180px; height:auto;">
								</div>
								<div class="card border-0 p-lg-3 shadow-lg rounded-2">
									<div class="card-body">
										<div class="mb-3 text-center">
											<span><i class="isax isax-tick-circle5 text-success fs-48"></i></span>
										</div>
										<div class="text-center mb-3">
											<h5 class="mb-2">Reset Password</h5>
											<p class="mb-0">We sent a code to info@example.com</p>
										</div>
										<div class="text-center otp-input">
											<div class="d-flex align-items-center justify-content-center mb-3">
												<input type="text" class=" rounded text-center fs-26 fw-bold me-3" id="digit-1" name="digit-1" data-next="digit-2" maxlength="1">
												<input type="text" class=" rounded text-center fs-26 fw-bold me-3" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" maxlength="1">
												<input type="text" class=" rounded text-center fs-26 fw-bold me-3" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" maxlength="1">
												<input type="text" class=" rounded text-center fs-26 fw-bold" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" maxlength="1">
											</div>
											<div class="d-flex justify-content-center">
												<div class="mb-3 d-flex align-items-center ">
													<p class="text-gray-9 me-4 mb-0">Didn't receive code. <a href="javascript:void(0);" class="text-primary">Resend Code</a></p>
													<span class="text-danger">00:45</span>
												</div>
											</div>
										</div>
										<div>
											<button type="submit" class="btn bg-primary-gradient text-white w-100">Reset Password</button>
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

		<!-- ========================
			End Page Content
		========================= -->

	</div>
	<!-- End Wrapper -->

	<script src="<?php echo base_url()?>assets/admin/js/jquery-3.7.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/admin/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url()?>assets/admin/js/otp.js"></script>
	<script src="<?php echo base_url()?>assets/admin/js/script.js"></script>

</body>

</html>