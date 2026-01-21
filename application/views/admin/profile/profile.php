  <!-- ========================
			Start Page Content
		========================= -->

  <div class="page-wrapper">

  	<!-- Start Content -->
  	<div class="content">

  		<!-- start row -->
  		<div class="row justify-content-center">

  			<div class="col-xl-12">

  				<!-- start row -->
  				<div class="row settings-wrapper d-flex">

  					<div class="col-xl-12 col-lg-12">
  						<div class="mb-3 pb-3 border-bottom">
  							<h6 class="fw-bold mb-0">Company Settings</h6>
  						</div>
  						<form action="<?php echo base_url()?>forms/profile" method="POST"
  							enctype="multipart/form-data">

  							<input type="text" name="profileid" id="profileid"
  								value='<?= isset($profile->id) ? $profile->id :'';?>' hidden>
  							<div class="border-bottom mb-3">
  								<div class="card-title-head">
  									<h6 class="fs-16 fw-semibold mb-3 d-flex align-items-center">
  										<span
  											class="fs-16 me-2 p-1 rounded bg-dark text-white d-inline-flex align-items-center justify-content-center"><i
  												class="isax isax-info-circle"></i></span>
  										General Information
  									</h6>
  								</div>

  								<!-- start row -->
  								<div class="row">
  									<div class="col-xl-6 col-lg-6 col-md-4">
  										<div class="mb-3">
  											<label class="form-label">
  												Company Name <span class="text-danger">*</span>
  											</label>
  											<input type="text" name="name"
  												value="<?= isset($profile->name) ? $profile->name : '';?>"
  												class="form-control">
  										</div>
  									</div><!-- end col -->
  									<div class="col-xl-6 col-lg-6 col-md-4">
  										<div class="mb-3">
  											<label class="form-label">
  												Email Address <span class="text-danger">*</span>
  											</label>
  											<input type="email" name="email"
  												value="<?= isset($profile->email) ? $profile->email : '';?>"
  												class="form-control">
  										</div>
  									</div><!-- end col -->
  									<div class="col-md-6">
  										<div class="mb-3">
  											<label class="form-label">
  												Mobile Number <span class="text-danger">*</span>
  											</label>
  											<input type="text" name="number" pattern="[1-9]{1}[0-9]{9}" maxlength="10"
  												value="<?= isset($profile->number) ? $profile->number : '';?>"
  												class="form-control">
  										</div>
  									</div><!-- end col -->
  									<!-- <div class="col-md-6">
  										<div class="mb-3">
  											<label class="form-label">
  												Mobile Number <span class="text-danger">*</span>
  											</label>
  											<input type="text" name="number2" pattern="[1-9]{1}[0-9]{9}"
  												maxlength="10"
  												value="<?= isset($profile->number2) ? $profile->number2 : '';?>"
  												class="form-control">
  										</div>
  									</div>end col -->
  									<div class="col-md-12">
  										<div class="mb-3">
  											<label class="form-label">
  												Address <span class="text-danger">*</span>
  											</label>
  											<input type="text" name="address"
  												value="<?= isset($profile->address) ? $profile->address : '';?>"
  												class="form-control">
  										</div>
  									</div><!-- end col -->
  								</div>
  								<!-- end row -->
  							</div>
  							<div class="border-bottom mb-3 pb-3">
  								<div class="card-title-head">
  									<h6 class="fs-16 fw-semibold mb-3 d-flex align-items-center">
  										<span
  											class="fs-16 me-2 p-1 rounded bg-dark text-white d-inline-flex align-items-center justify-content-center"><i
  												class="isax isax-image"></i></span>
  										Company Images
  									</h6>
  								</div>

  								<!-- start row -->
  								<div class="row align-items-center">
  									<div class="col-xl-4">
  										<div class="row gy-3 align-items-center">
  											<div class="mb-3">
  												<div class="logo-info">
  													<h6 class="fs-14 fw-medium mb-1"> Header Logo</h6>
  													<p class="fs-12">Upload logo of your Company</p>
  												</div>
  												<div class="d-flex align-items-center flex-wrap row-gap-3 mb-3">
  													<div>
  														<img id="previewLogo"
  															class="d-flex align-items-center bg-light justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames"
  															src="<?php echo base_url()?>uploads/logo/<?= isset($profile->logo) ? $profile->logo : '';?>"
  															alt="">
  													</div>
  													<div class="profile-upload">
  														<div class="profile-uploader d-flex align-items-center">
  															<div class="drag-upload-btn btn btn-md btn-primary">
  																<i class="isax isax-image fs-14 me-1"></i> Upload
  																Image
  																<input type="file" name="logo"
  																	class="form-control image-sign"
  																	onchange="readURL(this,'previewLogo');"
  																	accept="*">
  															</div>
  														</div>
  														<div class="mt-2">
  															<p class="fs-12">JPG or PNG format, not exceeding 5MB.</p>
  														</div>
  													</div>
  												</div>
  											</div>
  										</div>
  									</div>
  									<div class="col-xl-4">
  										<div class="row gy-3 align-items-center">
  											<div class="mb-3">
  												<div class="logo-info">
  													<h6 class="fs-14 fw-medium mb-1">Footer Logo</h6>
  													<p class="fs-12">Upload  Logo of your company </p>
  												</div>
  												<div class="d-flex align-items-center flex-wrap row-gap-3 mb-3">
  													<div>
  														<img id="previewDarkLogo"
  															class="d-flex align-items-center bg-light justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames"
  															src="<?php echo base_url()?>uploads/logo/<?= isset($profile->darklogo) ? $profile->darklogo : '';?>"
  															alt="">
  													</div>
  													<div class="profile-upload">
  														<div class="profile-uploader d-flex align-items-center">
  															<div class="drag-upload-btn btn btn-md btn-primary">
  																<i class="isax isax-image fs-14 me-1"></i> Upload
  																Image
  																<input type="file" name="darklogo"
  																	class="form-control image-sign"
  																	onchange="readURL(this,'previewDarkLogo');"
  																	accept="*">
  															</div>
  														</div>
  														<div class="mt-2">
  															<p class="fs-12">JPG or PNG format, not exceeding 5MB.</p>
  														</div>
  													</div>
  												</div>
  											</div>
  										</div>
  									</div>
  									<div class="col-xl-4">
  										<div class="row gy-3 align-items-center">
  											<div class="mb-3">
  												<div class="logo-info">
  													<h6 class="fs-14 fw-medium mb-1">Favicon</h6>
  													<p class="fs-12">Upload Favicon of your company </p>
  												</div>
  												<div class="d-flex align-items-center flex-wrap row-gap-3 mb-3">
  													<div>
  														<img id="previewFavicon"
  															class="d-flex align-items-center bg-light justify-content-center avatar avatar-xxl border me-3 flex-shrink-0 text-dark frames"
  															src="<?php echo base_url()?>uploads/logo/<?= isset($profile->favicon) ? $profile->favicon : '';?>"
  															alt="">
  													</div>
  													<div class="profile-upload">
  														<div class="profile-uploader d-flex align-items-center">
  															<div class="drag-upload-btn btn btn-md btn-primary">
  																<i class="isax isax-image fs-14 me-1"></i> Upload
  																Image
  																<input type="file" name="favicon"
  																	class="form-control image-sign"
  																	onchange="readURL(this,'previewFavicon');"
  																	accept="*">
  															</div>
  														</div>
  														<div class="mt-2">
  															<p class="fs-12">JPG or PNG format, not exceeding 5MB.</p>
  														</div>
  													</div>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  								<!-- end row -->

  							</div>
  							<div class="company-address pb-2 mb-3 border-bottom">
  								<div class="card-title-head">
  									<h6 class="fs-16 fw-bold mb-3 d-flex align-items-center">
  										<span
  											class="fs-16 me-2 p-1 rounded bg-dark text-white d-inline-flex align-items-center justify-content-center"><i
  												class="isax isax-map"></i></span>
  										Social Media
  									</h6>
  								</div>

  								<!-- start row -->
  								<div class="row">
  									<div class="col-md-6">
  										<div class="mb-3">
  											<label class="form-label">
  												Facebook <span class="text-danger">*</span>
  											</label>
  											<input type="text" name="facebook"
  												value="<?= isset($profile->facebook) ? $profile->facebook : '';?>"
  												class="form-control">
  										</div>
  									</div><!-- end col -->
  									<div class="col-md-6">
  										<div class="mb-3">
  											<label class="form-label">
  												Instagram <span class="text-danger">*</span>
  											</label>
  											<input type="text" name="instagram"
  												value="<?= isset($profile->instagram) ? $profile->instagram : '';?>"
  												class="form-control">
  										</div>
  									</div><!-- end col -->
  									<div class="col-md-6">
  										<div class="mb-3">
  											<label class="form-label">
  												Linkedin <span class="text-danger">*</span>
  											</label>
  											<input type="text" name="linkedin"
  												value="<?= isset($profile->linkedin) ? $profile->linkedin : '';?>"
  												class="form-control">
  										</div>
  									</div><!-- end col -->
  									<div class="col-md-6">
  										<div class="mb-3">
  											<label class="form-label"> Twitter
  												<span class="text-danger">*</span>
  											</label>
  											<input type="text" name="twitter"
  												value="<?= isset($profile->twitter) ? $profile->twitter : '';?>"
  												class="form-control">
  										</div>
  									</div><!-- end col -->
  								</div>
  								<!-- end row -->

  							</div>
  							<div
  								class="d-flex align-items-center justify-content-between settings-bottom-btn mt-0 mb-3">
  								<button type="button" class="btn btn-outline-white me-2">Cancel</button>
  								<button type="submit" class="btn btn-primary">Save Changes</button>
  							</div>
  						</form>
  					</div>
  				</div>
  				<!-- end row -->

  			</div><!-- end col -->
  		</div>
  		<!-- end row -->

  	</div>
  	<!-- End Content -->

  	<!-- Start Footer-->
  	<div class="footer d-sm-flex align-items-center justify-content-between bg-white py-2 px-4 border-top">
  		<p class="text-dark mb-0">&copy; 2025 <a href="javascript:void(0);" class="link-primary">Nexmove Solutions
  			</a>, All
  			Rights Reserved</p>
  	</div>
  	<!-- Emd Footer-->
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

  <!-- Feather Icon JS -->
  <script src="<?php echo base_url()?>assets/admin/js/feather.min.js"></script>

  <!-- Bootstrap Core JS -->
  <script src="<?php echo base_url()?>assets/admin/js/bootstrap.bundle.min.js"></script>

  <!-- Select2 JS -->
  <script src="<?php echo base_url()?>assets/admin/plugins/select2/js/select2.min.js"></script>

  <!-- Datetimepicker JS -->
  <script src="<?php echo base_url()?>assets/admin/js/moment.js"></script>
  <script src="<?php echo base_url()?>assets/admin/js/bootstrap-datetimepicker.min.js"></script>

  <!-- Custom JS -->
  <script src="<?php echo base_url()?>assets/admin/js/script.js"></script>

  <script>
  	function readURL(input, previewId) {
  		if (input.files && input.files[0]) {
  			let reader = new FileReader();
  			reader.onload = function (e) {
  				document.getElementById(previewId).src = e.target.result;
  			}
  			reader.readAsDataURL(input.files[0]);
  		}
  	}

  </script>


  </body>

  </html>
