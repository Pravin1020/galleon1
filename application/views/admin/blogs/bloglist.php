<div class="page-wrapper">

	<!-- Start Content -->
	<div class="content content-two">

		<!-- Page Header -->
		<div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
			<div>
				<h6>Blogs</h6>
			</div>
			<div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
				<div>
					<a href="<?php echo base_url()?>admin/blogadd" class="btn btn-primary d-flex align-items-center">
						<i class="isax isax-add-circle5 me-1"></i>Add Blog
					</a>
				</div>
			</div>
		</div>
		<!-- End Page Header -->

		<div class="row">
			<?php foreach ($blog as $b) { ?>
			<div class="col-lg-4 col-md-6 mb-4">

				<!-- BLOG CARD -->
				<div class="blog-card border rounded overflow-hidden hover-blog">

					<!-- Image -->
					<div class="position-relative">
						<img src="<?php echo base_url('uploads/blog/'.$b['image']); ?>" class="blog-img" alt="Blog">

						<!-- Three Dots -->
						<div class="position-absolute" style="top:15px; right:15px;">
							<a href="javascript:void(0);" data-bs-toggle="dropdown">
								<i class="isax isax-more bg-white p-1 rounded-circle"></i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo base_url('admin/blogedit/'.$b['id']); ?>" class="dropdown-item">
										<i class="isax isax-edit me-2"></i>Edit
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('forms/removeblog/'.$b['id']); ?>"
										class="dropdown-item">
										<i class="isax isax-trash me-2"></i>Delete
									</a>
								</li>
							</ul>
						</div>
					</div>

					<!-- Content Area -->
					<div class="p-3 card-body-fixed">

						<!-- Title -->
						<h6 class="blog-title">
							<?php 
                        $title = $b['bname'];
                        echo (strlen($title) > 50) ? substr($title, 0, 50) . '...' : $title;
                    ?>
						</h6>

						<!-- Description -->
						<p class="blog-desc">
							<?php 
                        $desc = strip_tags($b['bdesc']);
                        echo (strlen($desc) > 120) ? substr($desc, 0, 120) . '...' : $desc;
                    ?>
						</p>

					</div>

				</div>
				<!-- /BLOG CARD -->

			</div>
			<?php } ?>
		</div>

	</div>
	<!-- End Wrapper -->

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
