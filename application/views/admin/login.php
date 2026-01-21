<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login |</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description"
		content="Kanakku is a Sales, Invoices & Accounts Admin template for Accountant or Companies/Offices with various features for all your needs. Try Demo and Buy Now.">
	<meta name="keywords"
		content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
	<meta name="author" content="Dreams Technologies">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/admin/img/logo/fav.png">

	<!-- Apple Touch Icon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url()?>assets/admin/img/apple-touch-icon.png">

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
						<form action="<?php echo base_url();?>Forms/login" method="post"
							class="d-flex justify-content-center align-items-center">
							<div class="d-flex flex-column justify-content-lg-center p-4 p-lg-0 pb-0 flex-fill">
								<div class=" mx-auto mb-5 text-center">
									<img src="<?php echo base_url()?>assets/img/logo/logo1.png" alt="Logo"
										style="max-width:180px; height:auto;">
								</div>
								<div class="card border-0 p-lg-3 shadow-lg">
									<div class="card-body">
										<div class="text-center mb-3">
											<h5 class="mb-2">Sign In</h5>
											<p class="mb-0">Please enter below details to access the dashboard</p>
										</div>
										<div class="mb-3">
											<label class="form-label">Email Address</label>
											<div class="input-group">
												<span class="input-group-text border-end-0">
													<i class="isax isax-sms-notification"></i>
												</span>
												<input type="text" value="" name="username"
													class="form-control border-start-0 ps-0"
													placeholder="Enter Email Address">
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<div class="pass-group input-group">
												<span class="input-group-text border-end-0">
													<i class="isax isax-lock"></i>
												</span>
												<span class="isax toggle-password isax-eye-slash"></span>
												<input type="password" name="password"
													class="pass-inputs form-control border-start-0 ps-0"
													placeholder="****************">
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-between mb-3">
											<div class="d-flex align-items-center">
												<div class="form-check form-check-md mb-0">
													<input class="form-check-input" id="remember_me" type="checkbox">
													<label for="remember_me" class="form-check-label mt-0">Remember
														Me</label>
												</div>
											</div>
										</div>
										<div class="mb-1">
											<button type="submit"
												class="btn bg-primary-gradient text-white w-100 mb-3">Sign In</button>
											<!-- <div class="text-center">
												<a href="<?php echo base_url('Forms/forgot_password'); ?>"
													class="text-primary">Forgot Password?</a>
											</div> -->
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

	<!-- Bootstrap Core JS -->
	<script src="<?php echo base_url()?>assets/admin/js/bootstrap.bundle.min.js"></script>

	<!-- Custom JS -->
	<script src="<?php echo base_url()?>assets/admin/js/script.js"></script>

	<script>
		$(document).ready(function () {
			$(".toggle-password").on("click", function () {
				let input = $(this).siblings(".pass-inputs");
				let icon = $(this);

				if (input.attr("type") === "password") {
					input.attr("type", "text");
					icon.removeClass("isax-eye-slash").addClass("isax-eye");
				} else {
					input.attr("type", "password");
					icon.removeClass("isax-eye").addClass("isax-eye-slash");
				}
			});
		});

	</script>


	<script>
		$(document).ready(function () {
			// Load stored values if available
			if (localStorage.getItem("remember") === "true") {
				$("#email").val(localStorage.getItem("email"));
				$("#password").val(localStorage.getItem("password"));
				$("#remember_me").prop("checked", true);
			}

			// On form submit
			$("form").on("submit", function () {
				if ($("#remember_me").is(":checked")) {
					localStorage.setItem("email", $("#email").val());
					localStorage.setItem("password", $("#password").val());
					localStorage.setItem("remember", "true");
				} else {
					localStorage.removeItem("email");
					localStorage.removeItem("password");
					localStorage.setItem("remember", "false");
				}
			});
		});

	</script>


</body>

</html>
