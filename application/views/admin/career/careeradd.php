<div class="page-wrapper">

	<!-- Start Content -->
	<div class="content">

		<!-- start row -->
		<div class="row">
			<div class="col-md-10 mx-auto">
				<div>
					<div class="card">
						<div class="card-body">
							<h5 class="mb-3">Add career</h5>
							<form action="<?php echo base_url()?>forms/career" method="POST"
								enctype="multipart/form-data">
								<input type="text" name="cid" id="cid" value='<?= isset($career->id) ? $career->id :'';?>'
									hidden>
								<div class="mb-3">
									<h6 class=" mb-2">Basic Details</h6>
								</div>

								<!-- start row -->
								<div class="row gx-3">
									<div class="col-lg-12">
										<label class="form-label">Title<span class="text-danger ms-1">*</span></label>
										<input type="text" value='<?= isset($career->cname) ? $career->cname :'';?>'
											name="cname" class="form-control" required>
									</div>
								</div><!-- end col -->
								<div class="col-lg-12">
									<div class="mb-3">
										<label class="form-label"> Content<span
												class="text-danger ms-1">*</span></label>
										<div id="quillEditor" style="height:200px;">
											<?= isset($career->cdesc) ? $career->cdesc : ''; ?>
										</div>
										<!-- Hidden field for form submit -->
										<textarea name="cdesc" id="cdesc" hidden></textarea>
									</div>

								</div><!-- end col -->
						</div>
						<!-- end row -->

						<div class="d-flex align-items-center justify-content-between">
							<button type="button" class="btn btn-outline-white"
								onclick="window.history.back();">Cancel</button>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
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
		quill.clipboard.dangerouslyPasteHTML(`<?= isset($career->cdesc) ? $career->cdesc : ''; ?>`);

		// On submit, put Quill HTML into hidden textarea
		$('form').on('submit', function () {
			$('#cdesc').val(quill.root.innerHTML);
		});

	}

</script>


</body>

</html>
