<div class="page-wrapper">

	<!-- Start Content -->
	<div class="content">

		<!-- start row -->
		<div class="row">
			<div class="col-md-10 mx-auto">
				<div>
					<div class="card">
						<div class="card-body">
							<h5 class="mb-3">Add Blog</h5>
							<?php if($this->session->flashdata('validation_errors')): ?>
							<div class="alert alert-danger">
								<?php echo $this->session->flashdata('validation_errors'); ?>
							</div>
							<?php endif; ?>
							<?php if($this->session->flashdata('upload_error')): ?>
							<div class="alert alert-danger">
								<?php echo $this->session->flashdata('upload_error'); ?>
							</div>
							<?php endif; ?>
							<form action="<?php echo base_url()?>forms/blog" method="POST"
								enctype="multipart/form-data">
								<input type="text" name="bid" id="bid" value='<?= isset($blog->id) ? $blog->id :'';?>'
									hidden>
								<div class="mb-3">
									<h6 class=" mb-2">Basic Details</h6>
								</div>

								<!-- start row -->
								<div class="row gx-3">
									<div class="col-lg-12">
										<label class="form-label">Title<span class="text-danger ms-1">*</span></label>
										<input type="text" value='<?= isset($blog->bname) ? $blog->bname :'';?>'
											name="bname" class="form-control" required>
									</div>
								</div><!-- end col -->
								<div class="col-lg-12">
									<div class="mb-3">
										<label class="form-label"> Content<span
												class="text-danger ms-1">*</span></label>
										<div id="quillEditor" style="height:200px;">
											<?= isset($blog->bdesc) ? $blog->bdesc : ''; ?>
										</div>
										<!-- Hidden field for form submit -->
										<textarea name="bdesc" id="bdesc" hidden></textarea>
									</div>

								</div><!-- end col -->
								<div class="col-lg-12">
									<div class="mb-3 pb-3 border-bottom">
										<label class="form-label">Images</label>
										<div
											class="file-upload drag-file w-100 d-flex align-items-center justify-content-center flex-column">
											<img id="previewImages"
												src="<?php echo base_url()?>uploads/blog/<?= isset($blog->image) ? $blog->image : ''; ?>"
												alt="">
											<span class="upload-img d-block mb-2"><i
													class="isax isax-folder-open text-primary fs-16"></i></span>
											<p class="mb-0 text-gray-9">
												Drop your files here or
												<a href="#" class="text-primary text-decoration-underline">browse</a>
											</p>
											<input type="file" name="image" onchange="readURL(this);" accept="image/*"
												<?= empty($blog->id) ? 'required' : ''; ?>>
											<p class="fs-13">Maximum size : 50 MB</p>
											<p class="fs-13">Resoluation : 356*220</p>
										</div>

									</div>
								</div><!-- end col -->

								<div class="d-flex align-items-center justify-content-between ">
									<button type="button" class="btn btn-outline-white "
										onclick="window.history.back();">Cancel</button>
									<button type="submit" class="btn btn-primary">Save</button>
								</div>
						</div>
						<!-- end row -->
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

<!-- ========================
			End Page Content
		========================= -->

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
		quill.clipboard.dangerouslyPasteHTML(`<?= isset($blog->bdesc) ? $blog->bdesc : ''; ?>`);

		// On submit, put Quill HTML into hidden textarea
		$('form').on('submit', function () {
			$('#bdesc').val(quill.root.innerHTML);
		});

	}

</script>


</body>

</html>
