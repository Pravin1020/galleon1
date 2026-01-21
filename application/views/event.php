<!-- ============== start-breadcumb-area =============== -->
<section class="breadcumb-wrapper-area section-padding" style="background: url('assets/img/bgimg3.avif');">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-content">
					<h1 class="breadcumb-title text-white">Event</h1>
					<ul class="breadcumb-menu text-white">
						<li><a href="home">Home</a></li>
						<li class="breadcumb-icon"><i class="fas fa-angle-right"></i></li>
						<li>Event</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =================================================== Start Project Page Area ============================= -->

<section class="project-page-area section-padding">
	<div class="container">
		<div class="row gy-4 h-auto">

			<?php foreach($event as $e) { ?>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
				<div class="project-card-item text-center">
					<div class="project-card-img mb-3">
						<a href="<?php echo base_url() ?>uploads/event/<?php echo $e['eimage']; ?>" data-lightbox="events">
							<img src="<?php echo base_url() ?>uploads/event/<?php echo $e['eimage']; ?>"
								style="width:100%; height:220px; object-fit:cover; border-radius:6px;">
						</a>
					</div>
				</div>
			</div>
			<?php } ?>

		</div>
	</div>
</section>

