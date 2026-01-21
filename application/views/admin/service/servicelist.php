<div class="page-wrapper">

	<!-- Start Content -->
	<div class="content content-two">

		<!-- Page Header -->
		<div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
			<div>
				<h6>Services</h6>
			</div>
			<div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
				<div>
					<a href="<?php echo base_url()?>admin/serviceadd" class="btn btn-primary d-flex align-items-center">
						<i class="isax isax-add-circle5 me-1"></i>Add service
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
				
			</div>
		</div>
		<!-- Table Search End -->

		<!-- Table List Start -->
		<div class="table-responsive">
			<table class="table table-nowrap datatable">
				<thead class="thead-light">
					<tr>

						<th class="no-sort">Sr. No</th>
						<th class="no-sort">service Title</th>
						<th class="no-sort">Content</th>
						<th class="no-sort">image</th>
						<!-- <th>Created On</th> -->
						<th class="no-sort">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1; foreach($service as $b){?>
					<tr>

						<td><?php echo $i;$i++;?></td>
						<td>
							<?php 
    					    $sname = $b['sname'];
   						     echo (strlen($sname) > 25) ? substr($sname, 0, 25) . '...' : $sname;
  							  ?>
						</td>

						<td>
							<?php 
   						     $desc = strip_tags($b['sdescription']);   // HTML काढण्यासाठी safe
  						      echo (strlen($desc) > 50) ? substr($desc, 0, 50) . '...' : $desc;
 							   ?>
						</td>

						<td>
							<img src="<?php echo base_url('uploads/service/'.$b['simage']); ?>" alt="Service Image"
								style="width:60px; height:60px; object-fit:cover; border-radius:5px;">
						</td>

						<td class="action-item">
							<a href="javascript:void(0);" data-bs-toggle="dropdown">
								<i class="isax isax-more"></i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo base_url();?>admin/serviceadd/<?php echo $b['id'];?>"
										class="dropdown-item d-flex align-items-center"><i
											class="isax isax-edit me-2"></i>Edit</a>
								</li>
								<li>
									<a href="<?php echo base_url();?>forms/removeservice/<?php echo $b['id'];?>"
										class="dropdown-item d-flex align-items-center"
										onclick="return confirm('Are you sure you want to delete this?');">
										<i class="isax isax-trash me-2"></i>Delete
									</a>
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
