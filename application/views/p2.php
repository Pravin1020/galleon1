<section class="breadcumb-wrapper-area section-padding"
	style="background: url('<?php echo base_url()?>assets/img/bgimg3.avif');">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-content">
					<h1 class="breadcumb-title text-white">Products</h1>
					<ul class="breadcumb-menu text-white">
						<li><a href="#">Home</a></li>
						<li class="breadcumb-icon"><i class="fas fa-angle-right"></i></li>
						<li><a href="#">Service Details</a></li>
						<li class="breadcumb-icon"><i class="fas fa-angle-right"></i></li>
						<li>Products</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ===================================== Service Details area ============================================= -->
<section class="service-details-area section-padding">
	<div class="container">
		<div class="row">
			<!-- LEFT SIDE -->
			<div class="col-lg-4 col-md-12">
				<div class="sidebar-area">
					<div class="widget service-title">
						<h5>All Products</h5>
						<ul>
							<?php $i=1;foreach($all_products as $p) { ?>
							<li
								class="<?php if(isset($product->id) && $p['id'] == $product->id){ echo 'active';}else if(!isset($product->id) && $i==1){echo 'active';}else{echo '';}?>">
								<a
									href="<?php echo base_url('p2/'.str_replace(' ','_',$p['category']).'/'.$p['id']); ?>">
									<span><?php echo $p['ptitle']; ?></span>
									<i class="fas fa-arrow-right"></i>
								</a>
							</li>
							<?php $i++;} ?>
						</ul>
					</div>

				</div>
			</div>

			<!-- RIGHT SIDE -->
			<div class="col-lg-8 col-md-12">
				<div class="service-single-wrap">

				
					<!-- Product Image -->
					<div class="service-thumb-future mb-4">
						<img src="<?= base_url('uploads/product/'.($product->pimage ?? '')) ?>"
							alt="<?= $product->ptitle ?? '' ?>" class="product-fixed-img">
					</div>

					<!-- Product Title -->
					<h5><?php echo $product->ptitle??''; ?></h5>

					<!-- Product Description -->
					<p class="text" style="background-color: #f9f9f9; padding: 15px; border-radius: 5px;">
						<?php echo $product->pdec??''; ?></p>
				</div>
			</div>

		</div>
	</div>
</section>
