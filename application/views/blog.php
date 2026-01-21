<!-- ============== start-breadcumb-area =============== -->
<section class="breadcumb-wrapper-area section-padding"
	style="background: url('<?php echo base_url()?>assets/img/sb.png');">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-content">
					<h1 class="breadcumb-title text-white">Blog</h1>
					<ul class="breadcumb-menu text-white">
						<li><a href="#">Home</a></li>
						<li class="breadcumb-icon"><i class="fas fa-angle-right"></i></li>
						<li>Blog</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====================================== Home One blog Post area ============================================================= -->
<section class="home-one-blog-area pt-10 section-padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-7 col-lg-10 col-12">
				<div class="recent-post-wrap team-title text-center">
					<h6 class="sub-title"><span class="dash"></span>Our Blog Post &nbsp; &nbsp;<span
							class="dash"></span></h6>
					<h2 class="title">Read the latest news from the industry.</h2>
				</div>
			</div>
		</div>
		<div class="row mb-minus-30">
			<?php foreach($blog as $b){ ?>
			<div class="col-xl-4 col-lg-6 col-md-6">
				<div class="home-one-blog-item">
					<div class="recent-post-thumb-wrap">
						<div class="thumb">
							<a href="<?php echo base_url()?>bdetail/<?php echo $b['id'];?>" class="blog-grid__media">
								<img class="w-100" src="<?php echo base_url()?>uploads/blog/<?php echo $b['image']?>"
									alt="image not found">
							</a>
						</div>
						<div class="author-deatils">
							<h5>
								<a href="<?php echo base_url()?>bdetail/<?php echo $b['id'];?>">
									<?php 
          							  $title = $b['bname'];
         							   echo (strlen($title) > 50) ? substr($title, 0, 50) . '...' : $title;
      								  ?>
								</a>
							</h5>
							<div class="about-btn" style="display: flex; justify-content: space-around;">
								<a href="<?php echo base_url()?>bdetail/<?php echo $b['id'];?>" class="button-two">
									View Detail <i class="fas fa-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>
