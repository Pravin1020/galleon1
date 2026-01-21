<div class="page-wrapper">
	<!-- Start Content -->
	<div class="content content-two">
		<!-- Page Header -->
		<div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
			<div>
				<h6>Category List</h6>
			</div>
			<div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
				<div>
					<button class="btn btn-primary d-flex align-items-center addcategory">
						<i class="isax isax-add-circle5 me-1"></i>Add Category
					</button>
				</div>
				<!-- <div>
					<button class="btn btn-primary d-flex align-items-center addsubcategory">
						<i class="isax isax-add-circle5 me-1"></i>Add Sub Category
					</button>
				</div> -->
			</div>
		</div>
		<!-- End Page Header -->

		<div class="card" id="add_category" style="display:none;">
			<div class="card-body">
				<form action="<?php echo base_url()?>forms/category" method="post">
					<input type="hidden" name="c_id" id="c_id">
					<div class="row gx-3">
						<div class="col-lg-12">
							<label class="form-label">Category Title<span class="text-danger">*</span></label>
							<input type="text" name="ctitle" id="ctitle" value="" class="form-control" required>
						</div>
					</div>

					<button type="submit" class="btn btn-primary mt-2">Save</button>
				</form>
			</div>
		</div>

		<div class="card" id="add_sub_category" style="display:none;">
			<div class="card-body">
				<form action="<?php echo base_url()?>forms/subcategory" method="post">
					<input type="hidden" name="c_id" id="c_id">
					<div class="row gx-3">
						<div class="col-lg-12">
							<label class="form-label">Main Category<span class="text-danger">*</span></label>
							<select name="cat_id" id="cat_id" class="form-control" required>
								<option value="">Select Category</option>
								<?php if(!empty($category)){foreach($category as $cat){$i=1;?>
								<option value="<?php echo $cat['id'];?>"><?php echo $cat['cname'];?></option>
								<?php }} ?>
							</select>
						</div>

						<div class="col-lg-12">
							<label class="form-label">Sub Category Title<span class="text-danger">*</span></label>
							<input type="text" name="sub_cat" id="sub_cat" value="" class="form-control" required>

						</div>
					</div>

					<button type="submit" class="btn btn-primary mt-2">Save</button>
				</form>
			</div>
		</div>

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
						<th class="no-sort">Category</th>
						<th class="no-sort">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
            $i = 1; 
            if(!empty($category)){ 
                foreach($category as $cat){ 
            ?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $cat['cname']; ?></td>
						<td>
							<a href="javascript:void(0);" data-bs-toggle="dropdown">
								<i class="isax isax-more"></i>
							</a>
							<ul class="dropdown-menu">
								<li>
									<button class="dropdown-item d-flex align-items-center edit_cat"
										data_id="<?php echo $cat['id']; ?>">
										<i class="isax isax-edit me-2"></i>Edit
									</button>
								</li>
								<li>
									<a href="<?php echo base_url();?>forms/delete_category/<?php echo $cat['id'];?>"
										class="dropdown-item d-flex align-items-center">
										<i class="isax isax-trash me-2"></i>Delete
									</a>
								</li>
							</ul>
						</td>
					</tr>
					<?php 
                } 
            } 
            ?>
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

	<script>
		$(document).ready(function () {
			$('.addcategory').on('click', function () {
				$('#add_category').hide();
				$('form')[0].reset();
				$('#add_category').show();
			});

			$('.addsubcategory').on('click', function () {
				$('#add_sub_category').hide();
				$('form')[0].reset();
				$('#add_sub_category').show();
			});

			$('.edit_cat').on('click', function () {
				id = $(this).attr('data_id');

				$.ajax({
					url: '<?php echo base_url()?>forms/get_category',
					type: 'POST',
					data: {
						cid: id
					},
					dataType: "json",
					success: function (data) {
						$('#ctitle').val(data.cname);
						$('#c_id').val(data.id);
						$('#add_category').show();
					},
					error: function (jqXHR, textStatus, errorThrown) {}
				})
			})
		});
	</script>
	</body>

	</html>
