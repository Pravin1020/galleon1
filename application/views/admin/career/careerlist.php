<div class="page-wrapper">

	<!-- Start Content -->
	<div class="content content-two">

		<!-- Page Header -->
		<div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
			<div>
				<h6>careers</h6>
			</div>
			<div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
				<div>
					<a href="<?php echo base_url()?>admin/careeradd"
						class="btn btn-primary d-flex align-items-center">
						<i class="isax isax-add-circle5 me-1"></i>Add career
					</a>
				</div>
			</div>
		</div>
		<!-- End Page Header -->

		<!-- Table Search Start -->
		<div class="mb-3">
			<div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
				<div class="d-flex align-items-center flex-wrap gap-2">
					<div class="table-search d-flex align-items-center mb-0">
						<div class="search-input">
							<a href="javascript:void(0);" class="btn-searchset"><i
									class="isax isax-search-normal fs-12"></i></a>
						</div>
					</div>
				</div>
				<div class="d-flex align-items-center flex-wrap gap-2">
					<div class="dropdown">
						<a href="javascript:void(0);"
							class="dropdown-toggle btn btn-outline-white d-inline-flex align-items-center"
							data-bs-toggle="dropdown">
							<i class="isax isax-sort me-1"></i>Sort By : <span class="fw-normal ms-1">Latest</span>
						</a>
						<ul class="dropdown-menu  dropdown-menu-end">
							<li>
								<a href="javascript:void(0);" class="dropdown-item">Latest</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="dropdown-item">Oldest</a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		<!-- Table Search End -->

		<!-- Table List Start -->
		<div class="table-responsive">
			<table class="table table-nowrap datatable">
				<thead class="thead-light">
					<tr>
						
						<th class="no-sort">Sr. No</th>
						<th class="no-sort">career Title</th>
						<th class="no-sort">Content</th>
						<!-- <th>Created On</th> -->
						<th class="no-sort">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1; foreach($career as $c){?>
					<tr>
						
						<td><?php echo $i;$i++;?></td>
						<td><?php echo $c['cname']?></td>
						<td><?php echo substr($c['cdesc'], 0, 150)?>
						</td>
						<!-- <td>22 Feb 2025</td> -->

						<td class="action-item">
							<a href="javascript:void(0);" data-bs-toggle="dropdown">
								<i class="isax isax-more"></i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo base_url();?>admin/careeradd/<?php echo $c['id'];?>" class="dropdown-item d-flex align-items-center"><i
											class="isax isax-edit me-2"></i>Edit</a>
								</li>
								<li>
									<a href="<?php echo base_url();?>forms/removecareer/<?php echo $c['id'];?>" class="dropdown-item d-flex align-items-center"
										><i
											class="isax isax-trash me-2"></i>Delete</a>
								</li>
							</ul>
						</td>
					</tr>
					<?php }?>
				</tbody>
			</table>
		</div>
		<!-- /Table List -->

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
