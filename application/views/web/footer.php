<a href="https://wa.me/+9186910 42525" class="whatsapp-float" target="_blank">
	💬 Chat on WhatsApp
</a>

<!-- ============================= Start Footer Area Section =============================================== -->
<section class="footer-bg-img" style="background: url('<?php echo base_url()?>assets/img/footer-shape-1.png');">
	<div class="footer-menu-area">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="footer-menu-wrap">
						<ul class="footer-social footer-social align-items-center">
							<li>
								<a href="<?php echo $profile->facebook ?>" target="_blank" rel="noopener noreferrer">
									<i class="fab fa-facebook-f"></i>
								</a>
							</li>
							<li>
								<a href="<?php echo $profile->linkedin ?>" target="_blank" rel="noopener noreferrer">
									<i class="fab fa-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="<?php echo $profile->instagram ?>" target="_blank" rel="noopener noreferrer">
									<i class="fab fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="<?php echo $profile->twitter ?>" target="_blank" rel="noopener noreferrer">
									<i class="fab fa-twitter"></i>
								</a>
							</li>
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
							<a href="<?php echo base_url()?>home"><img
									src="<?php echo base_url()?>uploads/logo/<?php echo $profile->logo?>"
									alt="logo"></a>
						</div>
						<p class="text">Galleon is a trusted manufacturer of high-quality lab and pharmaceutical
							products. We are committed to innovation, precision, and quality excellence across every
							solution.</p>
					</div>
				</div>
				<div class="col-xl-2 col-lg-3 col-md-6 col-12">
					<div class="footer-widget widget2">
						<div class="footer-title">
							<h3 class="title">Useful Links</h3>
						</div>
						<ul>
							<li><a href="<?php echo base_url()?>about"><i class="fas fa-angle-double-right"></i> About
									Us</a></li>
							<li><a href="<?php echo base_url()?>service"><i class="fas fa-angle-double-right"></i>
									Services</a></li>
							<li><a href="<?php echo base_url()?>event"><i class="fas fa-angle-double-right"></i>
									Event</a></li>
							<li><a href="<?php echo base_url()?>blog"><i class="fas fa-angle-double-right"></i> Blog</a>
							</li>
							<li><a href="<?php echo base_url()?>contact"><i class="fas fa-angle-double-right"></i>
									Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-2 col-lg-3 col-md-6 col-12">
					<div class="footer-widget widget3">
						<div class="footer-title">
							<h3 class="title">Products</h3>
						</div>
						<ul>
							<?php foreach($category as $cat){?>
							<li><a
									href="<?php echo base_url()?>p2/<?php echo str_replace(' ','_',$cat['cname']);?>/<?php echo $cat['id']?>"><i
										class="fas fa-angle-double-right"></i><?php echo $cat['cname'];?></a>
							</li>
							<?php }?>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-12">
					<div class="footer-widget widget4">
						<div class="footer-title">
							<h3 class="title">Contact</h3>
						</div>
						<ul class="footer-contact list-unstyled">
							<li>
								<a href="#">
									<i class="fas fa-angle-double-right"></i>
									HEAD OFFICE<br>
									<?php echo $profile->address; ?>
								</a>
							</li>
							<li>
								<a href="tel:<?php echo $profile->number?>"><i class="fas fa-angle-double-right"></i>+91
									<?php echo $profile->number?></a>
							</li>


							<li>
								<a href="mailto:<?php echo $profile->email?>"><i
										class="fas fa-angle-double-right"></i><?php echo $profile->email?></a>
							</li>

							<li>
								<a href="#"><i class="fas fa-angle-double-right"></i> Mon - Sat: 9:00 AM to 6:00 PM</a>
							</li>
						</ul>
					</div>
				</div>


			</div>
		</div>
	</div>
	<div class="copyuright-area" style="background:#000; padding:15px 0;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="footer-copyright" style="text-align:center;">
						<p class="mb-0" style="margin:0; font-size:14px; color:#ffff;">
							&copy; 2026 All rights reserved. Designed by
							<a href="https://nexmoves.in/" style="color:#007bff; text-decoration:none;">Nexmove</a>
							&nbsp;|&nbsp;
							<a href="<?php echo base_url()?>privacyp" target="_blank" style="color:#007bff; text-decoration:none;">Privacy
								Policy</a>
							&nbsp;|&nbsp;
							<a href="<?php echo base_url()?>terms" target="_blank" style="color:#007bff; text-decoration:none;">Terms &
								Conditions</a>
						</p>
					</div>
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

<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<!-- slick-slider  -->
<script src="<?php echo base_url()?>assets/js/slick.min.js"></script>
<!-- counter  -->
<script src="<?php echo base_url()?>assets/js/jquery.counterup.min.js"></script>
<!-- bootstrap  -->
<script src="<?php echo base_url()?>assets/js/bootstrap.bundle.min.js"></script>
<!-- megnific popup  -->
<script src="<?php echo base_url()?>assets/js/jquery-magnific-popup-min.js"></script>
<!-- siotope  -->
<script src="<?php echo base_url()?>assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url()?>assets/js/isotope.pkgd.min.js"></script>
<!-- main-js  -->
<script src="<?php echo base_url()?>assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>
<!-- <script src="<?php echo base_url()?>assets/js/main.js"></script> -->

<script>
	$(document).ready(function () {
		const $form = $("#contactForm");
		const $popup = $("#thanksPopup");
		const $messageBox = $(".form-messages");

		$form.on("submit", function (e) {
			e.preventDefault(); // Prevent default form submission

			const formData = new FormData(this);

			$.ajax({
				url: $form.attr("action"),
				type: "POST",
				data: formData,
				processData: false,
				contentType: false,
				success: function (response) {
					$popup.removeClass("hidden");
					$messageBox.text("");

					setTimeout(function () {
						$popup.removeClass("hidden");
						location.reload(); // Refresh the page
					}, 8000);
				},
				error: function (xhr, status, error) {
					$messageBox.text("Something went wrong. Please try again.");
					console.error("Form submission error:", error);
				}
			});
		});
	});

</script>

<script>
	var swiper = new Swiper(".clientSwiper", {
		slidesPerView: 4,
		spaceBetween: 30,
		loop: true,
		autoplay: {
			delay: 2000,
			disableOnInteraction: false,
		},
		breakpoints: {
			320: {
				slidesPerView: 1
			},
			576: {
				slidesPerView: 2
			},
			768: {
				slidesPerView: 3
			},
			992: {
				slidesPerView: 4
			}
		}
	});

</script>

<script>
	document.querySelectorAll('.serviceModalBtn').forEach(function (card) {
		card.addEventListener('click', function () {

			let name = this.getAttribute('data-name');
			let desc = this.getAttribute('data-description') || "Description not available.";
			let image = this.getAttribute('data-image');

			document.getElementById('serviceTitle').innerText = name;
			document.getElementById('serviceDescription').innerText = desc;
			document.getElementById('serviceImage').src = image;

			var myModal = new bootstrap.Modal(document.getElementById('serviceInfoModal'));
			myModal.show();
		});
	});

</script>

<script>
	document.addEventListener("DOMContentLoaded", function () {
		document.querySelectorAll('.dropdown-submenu .dropdown-toggle').forEach(function (element) {
			element.addEventListener('click', function (e) {
				e.preventDefault();
				e.stopPropagation();

				let nextMenu = this.nextElementSibling;
				if (nextMenu) {
					nextMenu.classList.toggle('show');
				}
			});
		});
	});

</script>

<script>
	$(document).on("click", ".openEventModal", function () {

		var title = $(this).data("title");
		var desc = $(this).data("desc");
		var img = $(this).data("img");

		$("#eventTitle").text(title);
		$("#eventDesc").html(desc);
		$("#eventImg").attr("src", img);

		var modal = new bootstrap.Modal(document.getElementById("eventModal"));
		modal.show();
	});

</script>

<script>
	$('#contact_form').on('submit', function (e) {
		e.preventDefault();

		let mobile = $('input[name="mobile"]').val();

		if (!/^[6-9]\d{9}$/.test(mobile)) {
			alert('Please enter valid 10 digit mobile number');
			return false;
		}

		$.ajax({
			url: $(this).attr('action'),
			type: "POST",
			data: $(this).serialize(),
			dataType: "json",
			success: function (res) {
				if (res.status === 'success') {
					$('#thankYouModal').fadeIn();
					$('#contact_form')[0].reset();
				} else {
					alert(res.message);
				}
			}
		});
	});

</script>



<!-- <script>
	document.querySelectorAll('.dropdown-submenu .dropdown-toggle').forEach(function(el){
    el.addEventListener('click', function(e){
        e.preventDefault();
        e.stopPropagation();
        let next = el.nextElementSibling;
        if(next){
            next.classList.toggle('show');
        }
    });
});
</script> -->

</body>

</html>
