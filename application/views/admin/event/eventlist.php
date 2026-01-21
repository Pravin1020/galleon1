<div class="page-wrapper">

	<!-- Start Content -->
	<div class="content content-two">

		<!-- Page Header -->
		<div class="d-flex d-block align-items-center justify-content-between flex-wrap gap-3 mb-3">
			<div>
				<h6>Event</h6>
			</div>
			<div class="d-flex my-xl-auto right-content align-items-center flex-wrap gap-2">
				<div>
					<a href="<?php echo base_url()?>admin/eventadd"
						class="btn btn-custom-blue d-flex align-items-center">
						<i class="isax isax-add-circle5 me-1"></i>Add Event
					</a>
				</div>
			</div>
		</div>
		<!-- End Page Header -->

		<!-- Table List Start -->
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="mb-3 border-bottom pb-3">
					<h6 class="mb-0"></h6>
				</div>
				<div class="card mb-0">
					<div class="card-body pb-0">
						<div class="row row-cols-2 row-cols-sm-4 row-cols-md-5">

							<?php foreach($event as $e){ ?>
							<div class="col mb-3 position-relative">

								<!-- Gallery Image -->
								<a href="<?= base_url('uploads/event/'.$e['eimage']); ?>" data-fancybox="gallery"
									data-id="<?= $e['id']; ?>" data-img="<?= $e['eimage']; ?>" class="gallery-item">

									<img src="<?= base_url('uploads/event/'.$e['eimage']); ?>" class="rounded w-100"
										alt="img">
								</a>

								<!-- Action Buttons -->
								<div class="position-absolute top-0 end-0 p-2 d-flex gap-1">
									<button class="btn btn-sm btn-custom-blue" title="Delete"
										onclick="deleteEvent(<?= $e['id']; ?>)">
										<i class="fas fa-trash"></i>
									</button>
								</div>

							</div>
							<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- /Table List -->

	</div>
	<!-- End Wrapper -->

	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />


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
		function deleteEvent(id) {
			if (confirm('Are you sure you want to delete this image?')) {
				$.ajax({
					url: "<?= base_url('forms/eventdelete'); ?>",
					type: "POST",
					data: {
						id: id
					},
					success: function (res) {
						location.reload();
					}
				});
			}
		}

	</script>


	<script>
		Fancybox.bind("[data-fancybox='gallery']", {
			Toolbar: false,
			dragToClose: true,
			closeOnClick: true,

			on: {
				reveal: (fancybox, slide) => {

					// remove old button
					$('.custom-actions').remove();

					let id = slide.triggerEl.dataset.id;
					let deleteUrl = "<?= base_url('forms/removeevent/'); ?>" + id;

					let btn = `
			<div class="custom-actions"
				 style="
					position:fixed;
					bottom:20px;
					right:20px;
					z-index:9999;
				 ">
				<button
					style="
						background:#dc3545;
						color:#fff;
						border:none;
						padding:10px 16px;
						border-radius:6px;
						font-size:14px;
					"
					onclick="if(confirm('Delete this image?')) window.location.href='${deleteUrl}'">
					🗑️ Delete
				</button>
			</div>`;

					$('body').append(btn);
				},

				closing: () => {
					$('.custom-actions').remove();
				}
			}
		});

	</script>



	</body>

	</html>
