<div class="page-wrapper">
	<!-- Start Content -->
	<div class="content">
		<!-- start row -->
		<div class="row">
			<div class="col-md-10 mx-auto">
				<div>
					<div class="card">
						<div class="card-body">
							<h5 class="mb-3">Add Product</h5>
							<form action="<?php echo base_url()?>forms/product" method="POST"
								enctype="multipart/form-data">
								<input type="text" name="id" value="<?= isset($product->id) ? $product->id : '' ?>"
									hidden>

								<div class="row gx-3">
									<div class="col-lg-12 mb-3">
										<label class="form-label">Choose Category <span
												class="text-danger">*</span></label>
										<select name="category_id" class="form-control" required>
											<option value="">-- Select Category --</option>
											<?php foreach ($category as $cat) { ?>
											<option value="<?= $cat['cname']; ?>"
												<?= isset($product->category) && $product->category == $cat['cname'] ? 'selected' : ''; ?>>
												<?= $cat['cname']; ?>
											</option>
											<?php } ?>
										</select>
									</div>

									<div class="col-lg-12 mb-3">
										<label class="form-label">Product Title<span
												class="text-danger">*</span></label>
										<input type="text" name="ptitle"
											value="<?= isset($product->ptitle) ? $product->ptitle : '' ?>"
											class="form-control" required>
									</div>

									<div class="col-lg-12 mb-3">
										<label class="form-label">Description<span class="text-danger">*</span></label>
										<div id="quillEditor" style="height:200px;">
											<?= isset($product->pdec) ? $product->pdec : '' ?>
										</div>
										<textarea name="pdec" id="pdec"
											hidden><?= isset($product->pdec) ? $product->pdec : '' ?></textarea>
									</div>

									<div class="col-lg-12 mb-3">
										<label class="form-label">Product Image</label>
										<div class="file-upload drag-file">
											<img id="previewImages"
												src="<?= base_url() ?>uploads/product/<?= isset($product->pimage) ? $product->pimage : '' ?>"
												alt="">
											<span class="upload-img d-block mb-2">
												<i class="isax isax-folder-open text-primary fs-16"></i>
											</span>
											<p class="mb-0 text-gray-9">Drop your files here or
												<a href="#" class="text-primary text-decoration-underline">browse</a>
											</p>
											<input type="file" name="image" onchange="readURL(this);" accept="image/*">
											<p class="fs-13">Maximum size in KB</p>
										</div>
									</div>
								</div>

								<button type="submit" class="btn btn-primary">Save</button>
							</form>


						</div><!-- end card body -->
					</div><!-- end card -->
				</div>
			</div><!-- end col -->
		</div>
		<!-- end row -->
	</div>
	<!-- End Content -->
	<!-- Start Footer-->
	<div class="footer d-sm-flex align-items-center justify-content-between bg-white py-2 px-4 border-top">
		<p class="text-dark mb-0">&copy; 2025 <a href="javascript:void(0);" class="link-primary">Nexmove Solutions</a>,
			All Rights Reserved</p>

	</div>
	<!-- End Footer-->
</div>
</div>
<!-- End Wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/admin/js/jquery-3.7.1.min.js"></script>
<!-- Simplebar JS -->
<script src="<?php echo base_url()?>assets/admin/plugins/simplebar/simplebar.min.js"></script>
<!-- Bootstrap Core JS -->
<script src="<?php echo base_url()?>assets/admin/js/bootstrap.bundle.min.js"></script>
<!-- Quill JS -->
<script src="<?php echo base_url()?>assets/admin/plugins/quill/quill.min.js"></script>
<!-- Bootstrap Tagsinput JS -->
<script src="<?php echo base_url()?>assets/admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<!-- Select2 JS -->
<script src="<?php echo base_url()?>assets/admin/plugins/select2/js/select2.min.js"></script>
<!-- Custom JS -->
<script src="<?php echo base_url()?>assets/admin/js/script.js"></script>

<script>
	function readURL(input) {
		if (input.files && input.files[0]) {
			let reader = new FileReader();
			reader.onload = function (e) {
				let preview = document.getElementById('previewImages');
				preview.src = e.target.result;
				preview.style.display = 'block';
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	if ($('#quillEditor').length > 0) {
		var quill = new Quill('#quillEditor', {
			theme: 'snow'
		});

		// Load directly from PHP
		quill.clipboard.dangerouslyPasteHTML(`<?= isset($service->sdescription) ? $service->sdescription : ''; ?>`);

		// On submit, put Quill HTML into hidden textarea
		$('form').on('submit', function () {
			$('#pdec').val(quill.root.innerHTML);
		});

	}

</script>
</body>

</html>
