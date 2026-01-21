<div class="page-wrapper">
	<div class="container-fluid">
		<div class="mb-3 pb-3 ">
			<h6 class="fw-bold mb-0"></h6>
		</div>
		<h4 class="dashboard-title ">Dashboard</h4>
		
		<!-- ==== Top Cards ==== -->
		<div class="row mt-4 gy-3">

			<div class="col-xl-3 col-md-6">
				<a href="<?php echo base_url('admin/productlist'); ?>" class="text-decoration-none text-dark">
					<div class="card shadow-sm card-white text-center py-3">
						<i class="fa fa-box card-icon text-primary"></i>
						<h6>Total Products</h6>
						<h2><?= $product_count; ?></h2>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<a href="<?php echo base_url('admin/servicelist'); ?>" class="text-decoration-none text-dark">
					<div class="card shadow-sm card-white text-center py-3">
						<i class="fa fa-th-list card-icon text-success"></i>
						<h6>Services</h6>
						<h2><?= $service_count; ?></h2>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<a href="<?php echo base_url('admin/bloglist'); ?>" class="text-decoration-none text-dark">
					<div class="card shadow-sm card-white text-center py-3">
						<i class="fa fa-edit card-icon text-purple"></i>
						<h6>Blog Posts</h6>
						<h2><?= $blog_count; ?></h2>
					</div>
				</a>
			</div>

			<div class="col-xl-3 col-md-6">
				<a href="<?php echo base_url('admin/eventlist'); ?>" class="text-decoration-none text-dark">
					<div class="card shadow-sm card-white text-center py-3">
						<i class="fa fa-users card-icon text-orange"></i>
						<h6>Events</h6>
						<h2><?= $event_count; ?></h2>
					</div>
				</a>
			</div>
		</div>

		<!-- Quick Actions -->
		<h5 class="mt-4 mb-2 fw-bold">Quick Actions</h5>
		<div class="row gy-3">
			<div class="col-xl-3 col-md-6">
				<a href="<?php echo base_url('admin/productadd'); ?>" class="text-decoration-none text-dark">
					<div class="card shadow-sm card-white text-center py-3">
						<i class="fa fa-plus-circle card-icon text-primary"></i>
						<h6>Add Product</h6>
						<small>Create new product</small>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-md-6">
				<a href="<?php echo base_url('admin/category'); ?>" class="text-decoration-none text-dark">
					<div class="card shadow-sm card-white text-center py-3">
						<i class="fa fa-layer-group card-icon text-success"></i>
						<h6>Add Category</h6>
						<small>Create new category</small>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-md-6">
				<a href="<?php echo base_url('admin/blogadd'); ?>" class="text-decoration-none text-dark">
					<div class="card shadow-sm card-white text-center py-3">
						<i class="fa fa-pen-nib card-icon text-purple"></i>
						<h6>Write Blog</h6>
						<small>Create new post</small>
					</div>
				</a>
			</div>
			<div class="col-xl-3 col-md-6">
				<a href="<?php echo base_url('admin/index'); ?>" class="text-decoration-none text-dark">
					<div class="card shadow-sm card-white text-center py-3">
						<i class="fa fa-cog card-icon text-orange"></i>
						<h6>Settings</h6>
						<small>Update profile</small>
					</div>
				</a>
			</div>
		</div>

	</div>

	<!-- Footer -->
	<div class="footer d-sm-flex align-items-center justify-content-between bg-white py-2 px-4 border-top mt-4">
		<p class="text-dark mb-0">&copy; 2025 Nexmove Solutions. All Rights Reserved</p>
	</div>


</div>


<!-- jQuery -->
<script src="<?php echo base_url()?>assets/admin/js/jquery-3.7.1.min.js"></script>

<!-- Simplebar JS -->
<script src="<?php echo base_url()?>assets/admin/plugins/simplebar/simplebar.min.js"></script>

<!-- Bootstrap Core JS -->
<script src="<?php echo base_url()?>assets/admin/js/bootstrap.bundle.min.js"></script>

<!-- Select2 JS -->
<script src="<?php echo base_url()?>assets/admin/plugins/select2/js/select2.min.js"></script>

<!-- Daterangepikcer JS -->
<script src="<?php echo base_url()?>assets/admin/js/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/plugins/daterangepicker/daterangepicker.js"></script>

<!-- Datatable JS -->
<script src="<?php echo base_url()?>assets/admin/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/js/dataTables.bootstrap5.min.js"></script>

<!-- Rater JS -->
<script src="<?php echo base_url()?>assets/admin/plugins/rater-js/index.js"></script>

<!-- Internal Ratings JS -->
<script src="<?php echo base_url()?>assets/admin/js/ratings.js"></script>


<!-- Custom JS -->
<script src="<?php echo base_url()?>assets/admin/js/script.js"></script>

</body>

</html>
