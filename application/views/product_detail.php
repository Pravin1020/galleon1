	<!-- ============== start-breadcumb-area =============== -->
	<section class="breadcumb-wrapper-area section-padding"
		style="background: url('<?php echo base_url()?>assets/img/sb.png');">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-content">
						<h1 class="breadcumb-title text-white">Product Details</h1>
						<ul class="breadcumb-menu text-white">
							<li><a href="#">Home</a></li>
							<li class="breadcumb-icon"><i class="fas fa-angle-right"></i></li>
							<li>Product Details</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ============================== Start Shop Details Page ARea ============================================== -->
	<section class="service-details-area section-padding">
    <div class="container">
        <div class="row">
            <!-- LEFT SIDE -->
            <div class="col-lg-8 col-md-12">
                <div class="service-single-wrap">

                    <!-- Product Image -->
                    <div class="service-thumb-future mb-4">
                        <img src="<?php echo base_url('uploads/products/'.$product->image); ?>" alt="<?php echo $product->name; ?>">
                    </div>

                    <!-- Product Title -->
                    <h5><?php echo $product->name; ?></h5>

                    <!-- Product Description -->
                    <p class="text"><?php echo $product->description; ?></p>

                    <!-- Product Features -->
                    <?php if(!empty($product->features)) { ?>
                    <div class="service-future mb-4">
                        <div class="service-list" style="background: url('<?php echo base_url()?>assets/img/service/service-details-list-bgf.jpg');">
                            <h5>Product Features</h5>
                            <ul>
                                <?php foreach(explode(',', $product->features) as $feature) { ?>
                                    <li><i class="fas fa-check"></i> <?php echo trim($feature); ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>

                    <!-- Extra Images -->
                    <div class="row mb-5">
                        <?php if(!empty($product->image_1)) { ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="future-thumb">
                                <img src="<?php echo base_url('uploads/products/'.$product->image_1); ?>" alt="">
                            </div>
                        </div>
                        <?php } ?>
                        <?php if(!empty($product->image_2)) { ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="future-thumb">
                                <img src="<?php echo base_url('uploads/products/'.$product->image_2); ?>" alt="">
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                    <!-- FAQ -->
                    <div class="FAQ-area">
                        <div class="accordion" id="accordionExample">
                            <?php if(!empty($faqs)) { $i=1; foreach($faqs as $faq) { ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?php echo $i; ?>">
                                    <button class="accordion-button <?php if($i!=1) echo 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?php echo $i; ?>">
                                        <?php echo $faq->question; ?>
                                    </button>
                                </h2>
                                <div id="faq<?php echo $i; ?>" class="accordion-collapse collapse <?php if($i==1) echo 'show'; ?>">
                                    <div class="accordion-body">
                                        <?php echo $faq->answer; ?>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; } } ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE -->
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-area">

                    <!-- All Products Sidebar -->
                    <div class="widget service-title">
                        <h5>All Products</h5>
                        <ul>
                            <?php foreach($all_products as $p) { ?>
                            <li class="<?php echo ($p->id == $product->id) ? 'active' : ''; ?>">
                                <a href="<?php echo base_url('product/'.$p->slug); ?>">
                                    <span><?php echo $p->name; ?></span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>

                    <!-- Enquiry Form -->
                    <?php include 'product_enquiry_form.php'; ?>
                </div>
            </div>
        </div>
    </div>
</section>


	<!-- ============================= Start Footer Area Section =============================================== -->
	<section class="footer-bg-img" style="background: url('<?php echo base_url()?>assets/img/footer-shape-1.png');">
		<div class="footer-menu-area">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="footer-menu-wrap">
							<ul>
								<li><a href="#">About</a></li>
								<li><a href="#">Projects</a></li>
								<li><a href="#">Mission</a></li>
								<li><a href="#">Update</a></li>
								<li><a href="#">Inside</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">History</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-widget-area section-padding">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-6 col-md-6 col-12">
						<div class="footer-widget widget1">
							<div class="footer-logo">
								<a href="index.html"><img src="<?php echo base_url()?>assets/img/footer-logo.png"
										alt=""></a>
							</div>
							<p class="text">Sapien luctus lesuada sentus pharetra nisi quisuea aenean eros mus magnis
								arcu vehicula nascetur feugiat.</p>
							<div class="footer-social-link">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-behance"></i></a></li>
									<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-6 col-12">
						<div class="footer-widget widget2">
							<div class="footer-title">
								<h3 class="title">Useful Links</h3>
							</div>
							<ul>
								<li><a href="#"><i class="fas fa-angle-double-right"></i> About Us</a></li>
								<li><a href="#"><i class="fas fa-angle-double-right"></i> Services</a></li>
								<li><a href="#"><i class="fas fa-angle-double-right"></i> Projects</a></li>
								<li><a href="#"><i class="fas fa-angle-double-right"></i> Contact</a></li>
								<li><a href="#"><i class="fas fa-angle-double-right"></i> Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-6 col-12">
						<div class="footer-widget widget3">
							<div class="footer-title">
								<h3 class="title">Service Industry</h3>
							</div>
							<ul>
								<li><a href="#"><i class="fas fa-angle-double-right"></i> Web Design</a></li>
								<li><a href="#"><i class="fas fa-angle-double-right"></i> Graphic Design</a></li>
								<li><a href="#"><i class="fas fa-angle-double-right"></i> Marketing</a></li>
								<li><a href="#"><i class="fas fa-angle-double-right"></i> Branding</a></li>
								<li><a href="#"><i class="fas fa-angle-double-right"></i> SEO</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6 col-12">
						<div class="footer-widget widget4">
							<div class="footer-title">
								<h3 class="title">Newsletter</h3>
							</div>
							<p class="text">Subscribe to our newsletter to get the latest updates.</p>
							<form class="newsletter" action="#" method="post">
								<input type="email" placeholder="Enter your email address">
								<button class="button-one border-0" type="submit">Subscribe now</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyuright-area">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="footer-copyright text-center">
							<p class="mb-0">&copy; 2024 All rights reserved. Designed by <a href="#">Themepul</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Start Back To Top  -->
	<div class="to-top" id="back-top">
		<div class="back-top-icon">
			<i class="fas fa-angle-up"></i>
		</div>
		<div class="hover-icon">
			<i class="fas fa-angle-up"></i>
		</div>
	</div>

	<!-- main-jquery  -->
	<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<!-- slick-slider  -->
	<script src="<?php echo base_url()?>assets/js/slick.min.js"></script>
	<!-- counterup  -->
	<script src="<?php echo base_url()?>assets/js/jquery.counterup.min.js"></script>
	<!-- megnific popup  -->
	<script src="<?php echo base_url()?>assets/js/jquery-magnific-popup-min.js"></script>
	<!-- bootstrap  -->
	<script src="<?php echo base_url()?>assets/js/bootstrap.bundle.min.js"></script>
	<!-- isotope css  -->
	<script src="<?php echo base_url()?>assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/isotope.pkgd.min.js"></script>
	<!-- main-js  -->
	<script src="<?php echo base_url()?>assets/js/main.js"></script>
	</body>

	</html>
