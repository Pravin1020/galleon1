    <!-- ============== start-breadcumb-area =============== -->
    <!-- ============== start-breadcumb-area =============== -->
    <section class="breadcumb-wrapper-area section-padding" style="background: url('assets/img/bgimg3.avif');">
    	<div class="container">
    		<div class="row">
    			<div class="col-12">
    				<div class="bread-content">
    					<h1 class="breadcumb-title text-white">Service</h1>
    					<ul class="breadcumb-menu text-white">
    						<li><a href="home-two.html">Home</a></li>
    						<li class="breadcumb-icon"><i class="fas fa-angle-right"></i></li>
    						<li>Service</li>
    					</ul>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <!-- ====================================== Start Service page ============================================================== -->
   <section class="service-page-area section-padding">
    <div class="container">
        <div class="row gy-4 mb-minus-30">

            <?php foreach ($service as $service) { ?>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="service-card-wrapper openServiceModal"
                        data-id="<?php echo $service['id'];?>"
                        data-name="<?php echo $service['sname'];?>"
                        data-desc="<?php echo htmlspecialchars($service['sdescription'], ENT_QUOTES); ?>"
                        data-img="<?php echo base_url()?>uploads/service/<?php echo $service['simage'];?>">

                        <div class="service-card-box">
                            
                            <div class="service-img">
                                <img src="<?php echo base_url()?>uploads/service/<?php echo $service['simage'];?>" alt="">
                            </div>

                            <h3 class="service-name">
                                <?php echo $service['sname']?>
                            </h3>

                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>



    <!-- Service Modal -->
    <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    	<div class="modal-dialog modal-lg modal-dialog-centered">
    		<div class="modal-content" style="border-radius: 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
    			<div class="modal-header bg-light" style="border-bottom: 1px solid #e9ecef;">
    				<h5 class="modal-title fw-bold text-dark" id="serviceTitle"></h5>
    				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    			</div>
    			<div class="modal-body p-4">
    				<div class="row g-4">
    					<div class="col-md-5">
    						<img id="serviceImg" src="" class="img-fluid rounded shadow-sm" alt="Service Image"
    							style="width: 100%; height: auto;">
    					</div>
    					<div class="col-md-7">
    						<p id="serviceDesc" class="text-muted mb-4" style="line-height: 1.6;"></p>
    						<hr class="my-4">
    					</div>
    				</div>

    			</div>
    		</div>
    	</div>
    </div>

    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>

    <script>
    	$(document).on("click", ".openServiceModal", function () {

    		var name = $(this).data("name");
    		var desc = $(this).data("desc");
    		var img = $(this).data("img");

    		$("#serviceTitle").text(name);
    		$("#serviceDesc").html(desc); // HTML सपोर्ट करण्यासाठी
    		$("#serviceImg").attr("src", img);

    		var modal = new bootstrap.Modal(document.getElementById("serviceModal"));
    		modal.show();
    	});

		$("#serviceDesc").html(desc);


    </script>
